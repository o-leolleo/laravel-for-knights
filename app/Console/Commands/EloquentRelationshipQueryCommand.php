<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Knight;
use App\KnightType;

class EloquentRelationshipQueryCommand extends Command
{
    protected $signature = 'example:eloquent-relationship-query';

    protected $description = 'Realiza buscas em relacionamentos';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$gold = KnightType::where('name', 'Ouro')->first();
		$lion = $gold->knights()->where('constellation', 'Leão')->first();

		dump($lion->toArray());
	}
}
