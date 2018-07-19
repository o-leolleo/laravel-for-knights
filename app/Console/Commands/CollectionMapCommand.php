<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionMapCommand extends Command
{
    protected $signature = 'example:collection-map';

    protected $description = 'Transforma elementos de uma collection';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$collection = collect([
			[
				'name' => 'Shion',
				'type' => 'ouro',
				'constellation' => 'Capricórnio',
				'deus(a)' => 'Atenas',
			],

			[
				'name' => 'Shura',
				'type' => 'ouro',
				'constellation' => 'Áries',
				'deus(a)' => 'Atenas',
			],

			[
				'name' => 'Afrodite',
				'type' => 'ouro',
				'constellation' => 'Peixes',
				'deus(a)' => 'Atenas',
			],
		]);

		dump($collection);

		$collection = $collection->map(function ($knight) {
			$afterDeath = $knight;
			$afterDeath['type'] = 'espectro';
			$afterDeath['deus(a)'] = 'Hades';

			return $afterDeath;
		});

		dump($collection);
	}
}
