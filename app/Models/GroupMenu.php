<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupMenu extends Model
{
    protected $fillable = ['name'];

    public function shoes()
    {
        return $this->hasMany(Shoe::class);
    }
}
