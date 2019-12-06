<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Defining Model
    protected $table = 'customers';
    protected $primaryKey = 'id';
}
