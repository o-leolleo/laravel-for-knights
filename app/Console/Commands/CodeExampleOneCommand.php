<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CodeExampleOneCommand extends Command
{
    protected $signature = 'example:code-intro';

    protected $description = 'Somente para execução dos códigos de exemplo';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
		$collection = collect([
			'aioria',
			'mu',
			'miro',
			'aldebaran'
		]);

		$newCollection = $collection->reject(function ($knight) {
			return $knight === 'aldebaran';
		})->map(function ($knight) {
			return strtoupper($knight);
		});

		dump($collection);
		dump($newCollection);
    }
}
