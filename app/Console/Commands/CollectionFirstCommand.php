<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionFirstCommand extends Command
{
    protected $signature = 'example:collection-first';

    protected $description = 'Recupera primeiro elemento';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$collection = collect([
			[
				'name' => 'Mu',
				'type' => 'ouro'
			],

			[
				'name' => 'Shaka',
				'type' => 'ouro'
			],

			[
				'name' => 'Rhadamanthys',
				'type' => 'espectro'
			],
		]);

		$result = $collection->filter(function ($knight) {
			return $knight['type'] === 'ouro';
		})->each(function ($knight) {
			$this->info($knight['name']);
		});

		$virgin = $result->first(function ($knight) {
			return $knight['name'] === 'Shaka';
		});

		$this->info("O HOMEM MAIS PRÓXIMO DE DEUS => ".$virgin['name']);

		$capricorn = $result->first();

		$this->info("A PRIMEIRA CASA => ".$capricorn['name']);
	}
}
