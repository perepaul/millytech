<?php

namespace App\Models;

use App\Traits\HashPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, HashPassword;
    protected $guarded = ['id'];
}
