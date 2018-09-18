<?php

namespace AtilioDominguez;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	protected $table = "products";

	protected $fillable = ['detalle', 'cantidad', 'precio', 'imagen'];

}
