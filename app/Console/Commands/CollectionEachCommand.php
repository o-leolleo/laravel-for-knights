<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectionEachCommand extends Command
{
    protected $signature = 'example:collection-each';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$collection = collect([
			'Seya' => 'meteoro de pegasu',
			'Shiryu' => 'cólera do dragão',
			'Shun' => 'corrente de andromeda',
		]);

		$collection->each(function ($skill, $name) {
			$this->info($name." =======> ".mb_strtoupper($skill).'!!!');
		});
	}

}
