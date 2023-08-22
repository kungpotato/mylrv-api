<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{

    protected $fillable = ['name', 'description', 'price', 'group_menu_id'];

    public function groupMenu()
    {
        return $this->belongsTo(GroupMenu::class);
    }
}
