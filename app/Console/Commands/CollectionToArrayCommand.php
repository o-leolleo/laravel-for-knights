<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionToArrayCommand extends Command
{
    protected $signature = 'example:collection-to-array';

    protected $description = 'Converte uma collection em um array';

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
		dump($collection->toArray());
	}
}
