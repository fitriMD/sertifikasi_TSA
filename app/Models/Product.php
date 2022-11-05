<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps= false;
    protected $fillable = ['name','description','image','price'];

    public function pesanan_detail() 
	{
	     return $this->hasMany('App\PesananDetail','barang_id', 'id');
	}
}
