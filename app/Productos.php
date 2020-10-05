<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'idProducto';
    protected $fillable = ['idProdducto','nombre'];
     
}
