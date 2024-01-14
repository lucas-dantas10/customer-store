<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{

    protected $guard = ["id"];
    protected $hidden = [
        "is_admin",
    ];

    protected $casts = [
        'is_admin' => 'boolean',
        'password' => 'hashed',
    ];

    public function customerForUser()
    {
        return $this->belongsTo(User::class);
    }
}
