<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
	protected $fillable = ['nama', 'tempat'];
    public function Minuman() {
    	return $this->belongsToMany('App\Minum');
    }

    public function makanan() {
    	return $this->belongsToMany('App\Makanan');
    }
}
