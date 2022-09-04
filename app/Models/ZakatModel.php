<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZakatModel extends Model
{
    use HasFactory;

    protected $table = 'zakat';

    protected $guarded = [];
}
