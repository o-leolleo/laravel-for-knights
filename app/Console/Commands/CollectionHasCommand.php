<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionHasCommand extends Command
{
    protected $signature = 'example:collection-has';

    protected $description = 'Verifica se a collection possui uma determinada chave';

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

		if ($collection->has('liaum')) {
			$this->info("TEMOS UM LIAUM!!!!!!");
		}
	}
}
