<?php


namespace App\Domain\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
      'id',
      'title',
      'description',
      'img',
      'price',
      'manufacturer'
    ];

}
