<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionIsEmptyCommand extends Command
{
    protected $signature = 'example:collection-is-empty';

    protected $description = 'Verifica se a collection está vazia';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$collection = collect([
			'liaum' => [
				'name' => 'Aiolia',
				'type' => 'ouro',
				'constellation' => 'liaum',
			],

			'ex-corpiao' => [
				'name' => 'Milo',
				'type' => 'ouro',
				'constellation' => 'ex-corpião',
			],

			'dragão' => [
				'name' => 'Shiryu',
				'type' => 'bronze',
				'constellation' => 'dragão',
			],
		]);

		$prataDaCasa = $collection->filter(function ($knight) {
			return $knight['type'] === 'prata';
		});

		if ($prataDaCasa->isEmpty()) {
			$this->info('Nenhum cavaleiro despirocado na lista!');
		} else {
			$this->info($prataDaCasa['name']." é prata da casa!");
		}
	}
}
