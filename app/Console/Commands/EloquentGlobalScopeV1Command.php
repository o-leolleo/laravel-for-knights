<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Knight;
use App\Scopes\GodScopeV1;

class EloquentGlobalScopeV1Command extends Command
{
    protected $signature = 'example:eloquent-global-scope-v1';

    protected $description = 'Cria um escopo de query global';

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

		$this->info('TODOS => ');
		dump(Knight::get()->toArray());

		$this->info('TODOS MESMO => ');
		dump(Knight::withoutGlobalScope(GodScopeV1::class)->get()->toArray());
	}
}
