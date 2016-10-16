<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table="workshop_listing";

    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    } 
}
