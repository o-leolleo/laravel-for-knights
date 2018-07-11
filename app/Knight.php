<?php

namespace App;

use Moloquent;

class Knight extends Moloquent
{
	public function type() {
		return $this->belongsTo('App\KnightType', 'knight_type_id');
	}

	public function god() {
		return $this->belongsTo('App\Knight', 'god_id');
	}

	public function knights() {
		return $this->hasMany('App\Knight', 'god_id');
	}
}
