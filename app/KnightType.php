<?php

namespace App;

use Moloquent;

class KnightType extends Moloquent
{
	public function knights() {
		return $this->hasMany('App\Knight');
	}
}
