<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class requestHub extends Model
{
    protected $table='requestHubs';
    use SoftDeletes;

    
    protected $dates = ['deleted_at'];
}
