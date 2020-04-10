<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = "barang";
    protected $primaryKey = 'kode_item';
    protected $fillable = ['nama_barang', 'kode_item','jenis' ,'harga'];
    public $timestamps = false;
}
