<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';
     protected $fillable = [
       'name',
       'capacity',
     ];
     public function booking()
     {
         return $this->belongsTo(Booking::class);
     }
}
