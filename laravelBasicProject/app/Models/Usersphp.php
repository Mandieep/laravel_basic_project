<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usersphp extends Model
{
    use HasFactory;
    protected $table = 'users_php';
    protected $fillable = [
        'email',
        'password',
    ];
}
