<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'name',
        'rooms_id',
        'email',
        'phone',
        'country',
        'address',
        'StartTime',
        'EndTime',
    ];
    public function rooms(){
        return $this->hasMany('App\Room');
    }
}
