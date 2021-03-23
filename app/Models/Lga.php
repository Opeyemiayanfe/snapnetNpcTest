<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{

    protected $primaryKey = 'LGAs_id';
    public $timestamps = false;

    use HasFactory;
}
