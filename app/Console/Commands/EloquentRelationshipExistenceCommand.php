<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Knight;
use App\KnightType;

class EloquentRelationshipExistenceCommand extends Command
{
    protected $signature = 'example:eloquent-relationship-existence';

    protected $description = 'Verifica existencia de relacionamentos';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$hasTen = KnightType::has("knights", ">=", 10)->get();

		$this->info('COM MAIS DE DEZ CAVALEIROS! =====>');
		dump($hasTen->toArray());

		$hasDragon = KnightType::whereHas('knights', function ($query) {
			$query->where('constellation', 'Dragão');
		})->get();

		$this->info('POSSUI UM CAVALEIRO CAPAZ DE REVERTER CORRENTEZAS! =====>');
		dump($hasDragon->toArray());
	}
}
