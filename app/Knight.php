<?php

namespace App;

use Moloquent;

class Knight extends Moloquent
{
	public function type() {
		return $this->belongsTo('App\KnightType', 'knight_type_id', '_id');
	}
}
