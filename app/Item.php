<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Defining Model
    protected $table = 'items';
    protected $primaryKey = 'id';
}
