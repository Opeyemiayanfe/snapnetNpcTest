<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $primaryKey = 'citizen_id';
    public $timestamps = false;

    use HasFactory;
}
