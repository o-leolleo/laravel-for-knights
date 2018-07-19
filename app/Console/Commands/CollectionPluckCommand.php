<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionPluckCommand extends Command
{
    protected $signature = 'example:collection-pluck';

    protected $description = 'Não é o barulho de goteira...';

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
				'constellation' => 'leão',
			],

			'ex-corpiao' => [
				'name' => 'Milo',
				'type' => 'ouro',
				'constellation' => 'escorpião',
			],

			'dragão' => [
				'name' => 'Shiryu',
				'type' => 'bronze',
				'constellation' => 'dragão',
			],
		]);

		$collection->pluck('name')->each(function ($name) {
			$this->info($name);
		});


		$collection->pluck('name', 'constellation')->each(function ($name, $constellation) {
			$this->info($name.' de '.$constellation);
		});
	}
}
