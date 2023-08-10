<?php

namespace App\Models;

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'password'
    ];
}
