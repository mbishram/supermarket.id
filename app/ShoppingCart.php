<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    // Defining Model
    protected $table = 'shopping_carts';
    protected $primaryKey = 'id';
}
