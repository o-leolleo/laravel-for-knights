<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionFilterCommand extends Command
{
    protected $signature = 'example:collection-filter';

    protected $description = 'Filtra elementos';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$collection = collect([
			'Shaka' => 'ouro',
			'Mu' => 'ouro',
			'Rhadamanthys' => 'espectro',
		]);

		$collection->filter(function ($type, $name) {
			return $type === 'ouro';
		})->each(function ($type, $name) {
			$this->info($name);
		});
	}
}
