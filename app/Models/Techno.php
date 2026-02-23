<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Techno extends Model
{
    // Mass assignable attributes
    protected $fillable = ['nom', 'maitrise'];
}
