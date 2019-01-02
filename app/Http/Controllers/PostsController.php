<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Room;

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
        $rooms=Room::orderBy('id','ASC')->get();
        $data=['rooms'=>$rooms];
        return view('post',$data);

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
        return view('booking');
    }
    public function review()
    {
        return view('review');
    }
    public function post1()
    {
        return view('post1');
    }

}
