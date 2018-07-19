<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Knight;

class EloquentLocalScopeCommand extends Command
{
    protected $signature = 'example:eloquent-local-scope';

    protected $description = 'Cria um escopo de query local';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$this->info('A QUERY =>');
		dump(Knight::where('name', 'Atena')->get()->toArray());

		$this->info('ESCOPO LOCAL ESTÁTICO  =>');
		dump(Knight::atena()->get()->toArray());

		$this->info('ESCOPO LOCAL DINÂMICO  =>');
		dump(Knight::withName('Seya')->get()->toArray());
		dump(Knight::withName('Shiryu')->get()->toArray());
	}
}
