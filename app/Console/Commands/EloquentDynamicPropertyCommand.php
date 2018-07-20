<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Knight;
use App\KnightType;

class EloquentDynamicPropertyCommand extends Command
{
    protected $signature = 'example:eloquent-dynamic-property';

    protected $description = 'Utiliza propriedade dinmica';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$gold = KnightType::where('name', 'Ouro')->get()->each(function ($type) {
			foreach ($type->knights as $knight) {
				$this->info($knight->name." é um cavaleiro de ".$type->name);
			}
		});
	}
}
