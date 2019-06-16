<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = ['gambar','nama', 'harga', 'stok'];

    public function Pesan(){
    	return $this->belongsto('App\Pesan');
    }
}
