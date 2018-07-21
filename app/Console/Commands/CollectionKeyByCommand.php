<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionKeyByCommand extends Command
{
    protected $signature = 'example:collection-key-by';

    protected $description = 'Lá vem o chaves, chaves, chaves...';

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

		$byName = $collection->keyBy('name');
		$this->info($byName['Shiryu']['name'].' de '.$byName['Shiryu']['constellation']);

		$byType = $collection->keyBy('type');
		dump($byType['ouro']);

	}
}
