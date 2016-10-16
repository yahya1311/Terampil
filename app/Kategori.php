<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table="kategori_workshop";

	public function workshops() {
	    return $this->hasMany('App\Workshop');
	}
}
