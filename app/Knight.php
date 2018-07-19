<?php

namespace App;

use Moloquent;
use App\Scopes\GodScopeV1;

class Knight extends Moloquent
{
	protected static function boot()
	{
		parent::boot();


		static::addGlobalScope(new GodScopeV1);
	}

	public function type() {
		return $this->belongsTo('App\KnightType', 'knight_type_id');
	}

	public function god() {
		return $this->belongsTo('App\Knight', 'god_id');
	}

	public function knights() {
		return $this->hasMany('App\Knight', 'god_id');
	}

	public function scopeAtena($query)
	{
		return $query->where('name', 'Atena');
	}

	public function scopeWithName($query, $name)
	{
		return $query->where('name', $name);
	}
}
