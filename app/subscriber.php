<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscriber extends Model
{
    protected $table='subscribers';
    protected $primaryKey = 'email';
}
