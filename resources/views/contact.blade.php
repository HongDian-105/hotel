@extends('layouts.master')

@section('title', 'Clean Blog - Contact')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/view8.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>行程規劃</h1>
                        <hr class="small">
                        <span class="subheading">The Next Station Of Happiness</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include('layouts.link')


    <!-- Main Content -->
    <div class="container">
        <div class="row.justify-content-center">
            {{--中--}}
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">

                    <img src="img/map.jpg" width="1000" height="1414" usemap="#map">
                    <map name="map">
                        　
                        <area shape="rect" coords="580,40,725,250" href="{{route('ViewPoint1')}}">
                        <area shape="rect" coords="420,250,700,500" href="{{route('ViewPoint2')}}">
                        <area shape="rect" coords="183,959,416,1224" href="{{route('ViewPoint5')}}">
                        <area shape="rect" coords="658,1246,733,1331" href="{{route('ViewPoint5')}}">
                        <area shape="rect" coords="800,1199,974,1300" href="{{route('ViewPoint5')}}">
                        <area shape="rect" coords="460,553,989,790" href="{{route('ViewPoint6')}}">
                        <area shape="rect" coords="41,1219,263,1404" href="{{route('ViewPoint3')}}">
                        <area shape="rect" coords="262,760,693,970" href="{{route('ViewPoint4')}}">
                        <area shape="rect" coords="100,350,420,740" href="{{route('ViewPoint7')}}">
                    </map>
                </ul>
                <br>
            </div>
        </div>
    </div>


@endsection
