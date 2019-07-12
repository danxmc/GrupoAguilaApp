<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Equipo extends Model
{
    // Table
    use SoftDeletes;
}
