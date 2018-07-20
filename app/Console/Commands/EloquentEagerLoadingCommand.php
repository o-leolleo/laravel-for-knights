<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Knight;
use App\KnightType;

class EloquentEagerLoadingCommand extends Command
{
    protected $signature = 'example:eloquent-eager-loading';

    protected $description = 'Carrega relacionamentos previamente';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$hasTen = KnightType::has("knights", ">=", 10)->with('knights')->get();

		$this->info('COM MAIS DE DEZ CAVALEIROS! =====>');
		dump($hasTen->toArray());

		$hasDragon = KnightType::whereHas('knights', function ($query) {
			$query->where('constellation', 'Dragão');
		})->with('knights')->get();

		$this->info('POSSUI UM CAVALEIRO CAPAZ DE REVERTER CORRENTEZAS! =====>');
		dump($hasDragon->toArray());
	}
}
