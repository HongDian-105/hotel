<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Booking;
use App\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function time(Request $request)
    {
        $start = $request['StartTime'];

        $rooms=Room::orderBy('id','ASC')->get();

        $results =Booking::where('StartTime',$request->StartTime)->get();

        return view('booking22',[
            'start'=>$start,
            'rooms'=>$rooms,
            'results' => $results,
        ]);

    }

    public function room(Request $request)
    {
        $start = $request['StartTime'];

        $results =Room::where('name',$request->chose)->get();

        return view('booking33',[
            'start'=>$start,
            'results' => $results,
        ]);
    }

    public function check(Request $request)
    {
        $start = $request['StartTime'];
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $country = $request['country'];
        $address = $request['address'];

        $results =Room::where('name',$request->chose)->get();

        return view('booking44',[
            'start'=>$start,
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'country'=>$country,
            'address'=>$address,
            'results' => $results,
        ]);
    }

    public function final(Request $request)
    {
        Booking::create($request->all());
        return view('index');
    }



    public function index()
    {
        $rooms=Room::orderBy('id','ASC')->get();
        $data=['rooms'=>$rooms];
        return view('chooseroom',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Booking::create($request->all());
        return view('chooseroom');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
