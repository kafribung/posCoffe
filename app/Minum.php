<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minum extends Model
{
    protected $fillable = ['gambar', 'nama', 'harga', 'stok'];

     public function Pesan(){
    	return $this->belongsToMany('App\Pesan');
    }

}
