<?php

namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }
    public function show()
    {
        //
        return view('post');
    }


    public function about()
    {
        //
        return view('about');
    }

    public function contact()
    {
        //
        return view('contact');
    }
    public function booking()
    {
        $rooms=Room::orderBy('id','ASC')->get();
        $data=['rooms'=>$rooms];
        return view('booking',$data);
    }
    public function review()
    {
        return view('review');
    }

}
