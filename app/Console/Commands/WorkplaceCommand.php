<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Knight;
use App\KnightType;

class WorkplaceCommand extends Command
{
    protected $signature = 'workplace';

    protected $description = 'área de trabalho';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
	}
}
