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
    public function oneDayA()
    {

        return view('一日遊方案一');
    }
    public function oneDayB()
    {

        return view('一日遊方案二');
    }
    public function oneDayC()
{

    return view('一日遊方案三');
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
    public function ViewPoint2()
    {

        return view('白沙');
    }
    public function ViewPoint3()
    {

        return view('七美');
    }
    public function ViewPoint4()
    {

        return view('南環');
    }
    public function ViewPoint5()
    {

        return view('望安');
    }
    public function ViewPoint6()
    {

        return view('湖西');
    }
    public function ViewPoint7()
    {

        return view('西嶼');
    }

}
