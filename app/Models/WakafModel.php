<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WakafModel extends Model
{
    use HasFactory;

    protected $table = 'wakaf';

    protected $guarded = [];
}
