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

        return view('booking11');

//        $rooms=Room::orderBy('id','ASC')->get();
//        $data=['rooms'=>$rooms];
//        return view('booking',$data);

    }
    public function review()
    {
        return view('review');
    }
    public function post1()
    {
        return view('post1');
    }
    public function post2()
    {
        return view('post2');
    }
    public function postold()
    {
        return view('post old');
    }

}
