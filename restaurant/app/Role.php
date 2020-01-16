<?php

namespace App;
use App\Admin;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function admins()
    {
        return $this->belongsToMany(Admin::class);
    }
}
