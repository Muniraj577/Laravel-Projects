<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
      'username', 'email', 'phone', 'date','table_name','table_capacity',
    ];

    public function tables()
    {
       return $this->hasMany(Table::class,'table_id');
    }
}
