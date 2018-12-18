<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function oneDay()
    {

        return view('一日行程');
    }
    public function twoDay()
    {

        return view('二日行程');
    }
    public function threeDay()
    {

        return view('三日行程');
    }
    public function fourDay()
    {

        return view('四日行程');
    }

    public function ViewPoint1()
    {

        return view('吉貝');
    }


}
