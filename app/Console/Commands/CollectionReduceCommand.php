<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionReduceCommand extends Command
{
    protected $signature = 'example:collection-reduce';

    protected $description = 'reduz uma collection a um único valor';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$collection = collect([
			[
				'name' => 'Aiolia',
				'type' => 'ouro',
				'constellation' => 'leão',
				'deus(a)' => 'Atena',
				'stregth' => 8000,
			],

			[
				'name' => 'Mu',
				'type' => 'ouro',
				'constellation' => 'escorpião',
				'deus(a)' => 'Atena',
				'stregth' => 8000,
			],

			[
				'name' => 'Milo',
				'type' => 'ouro',
				'constellation' => 'escorpião',
				'deus(a)' => 'Atena',
				'stregth' => 8000,
			],
		]);

		dump($collection);

		$exclamacaoDeAtena = $collection->reduce(function ($carry, $knight) {
			return $knight['stregth'] + $carry;
		}, 0);

		$this->info('A EXCLAMAÇÃO DE ATENA É TEM A FORÇA '.$exclamacaoDeAtena.' !!!');
	}
}
