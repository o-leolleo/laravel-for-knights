<?php

namespace App\Console\Commands;

use Storage;
use Illuminate\Console\Command;

use App\Knight;
use App\KnightType;

class PopulateKnigths extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:knights';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Alimenta a tabela de guerreiros do cosmos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
		$this->info("Starting...");

		$rawKnightTypes = json_decode(Storage::get('knights.json'));
		$existentTypes = KnightType::all()->keyBy('name');

		foreach ($rawKnightTypes as $type => $knights) {
			if ($existentTypes->has($type)) {
				$type_id = $existentTypes[$type]->id;
			} else {
				$new_type = new KnightType;
				$new_type->name = $type;
				$new_type->save();

				$type_id = $new_type->id;
			}

			$this->info("Criando os cavaleiros de ".$type."!!");

			foreach($knights as $knight) {
				$knight->knight_type_id = $type_id;

				$this->info("\tCriando ".$knight->name."!!");

				Knight::where('name', $knight->name)
					 ->update((array) $knight, [
						 'upsert' => true
					 ]);
			}
		}

		$this->info("ME DÊ SUA FORÇA PEGASU!!!");
    }
}
