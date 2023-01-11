<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generated extends Model
{
    use HasFactory;

    public $fillable = ['slug', 'short_url', 'redirect_to', 'ip'];

}
