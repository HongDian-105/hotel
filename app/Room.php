<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\Booking as BookingEloquent;
class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = [
        'name',
        'price',
        'pic',
    ];
    public function bookings(){
        return $this->belongsTo(BookingEloquent::class);
    }
}
