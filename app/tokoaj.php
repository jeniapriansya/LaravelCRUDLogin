<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tokoaj extends Model
{
    //
    protected $table = 'barang';
    public $fillable = ['namaProduk','harga','jumlah','deskripsi','foto','ongkos'];
}
