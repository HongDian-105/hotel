<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomDetailController extends Controller
{
    public function room1()
    {
        return view('小管房');
    }
    public function room2()
    {
        return view('土魠房');
    }
    public function room3()
    {
        return view('石斑房');
    }
    public function room4()
    {
        return view('紅魽房');
    }
    public function room5()
    {
        return view('花枝丸房');
    }
    public function room6()
    {
        return view('垵米房');
    }
}
