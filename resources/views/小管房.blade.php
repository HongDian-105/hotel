@extends('layouts.master')
@section('title', '我是小管')
@section('content')

    <header class="intro-header" style="background-image: url('img/background/8.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>小管房</h1>
                        <hr class="small">
                        <span class="subheading">Loligo oshimai</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <div class="card" style="border-style:none;background-color:red;">
                            <div class="card-body">
                                <img src="img/room/小管/4.jpg"width="730"style="border-radius: 50px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"style="padding-top: 30px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <i class="fa fa-wifi fa-3x" style="color:#800000"></i>
                                <br><font style="font-size:18px;" color="#888888"face="標楷體">免費wifi</font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"style="padding-top: 30px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <i class="fa fa-car fa-3x" style="color:#800000"></i>
                                <br><font style="font-size:18px;" color="#888888"face="標楷體">免費停車</font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"style="padding-top: 30px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <i class="fa fa-inbox fa-3x" style="color:#800000"></i>
                                <br><font style="font-size:18px;" color="#888888"face="標楷體">保險箱</font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"style="padding-top: 30px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <i class="fa fa-wifi fa-3x" style="color:#800000"></i>
                                <br><font style="font-size:18px;" color="#888888"face="標楷體">冰箱</font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"style="padding-top: 30px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <i class="fa fa-lock fa-3x" style="color:#800000"></i>
                                <br><font style="font-size:18px;" color="#888888"face="標楷體">浴袍</font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"style="padding-top: 30px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <i class="fa fa-television fa-3x" style="color:#800000"></i>
                                <br><font style="font-size:18px;" color="#888888"face="標楷體">液晶電視</font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"style="padding-top: 100px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <img src="img/room/小管/小管key.png"width="150">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"style="padding-top: 90px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <button type="button" style="width:150px;height:70px;font-size:30px;font-family:Microsoft JhengHei;background-color:#f1e1ff;border-radius: 20px;" onclick="location.href='booking'">我要訂房</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"style="padding-top: 30px">
                    <font style="font-size:18px;" color="#888888"face="標楷體">－－－－－－－－－－－－－－－－－－－－－－－－－－－－－房間設備－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－</font>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"style="padding-top: 30px">
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="width:600px" ><img src="img/room/小管/1.jpg"></div>
                        <div class="item" style="width:600px"><img src="img/room/小管/2.jpg" ></div>
                        <div class="item" style="width:600px"><img src="img/room/小管/3.jpg" ></div>
                        <div class="item" style="width:600px"><img src="img/room/小管/4.jpg" ></div>
                        <div class="item" style="width:600px"><img src="img/room/小管/5.jpg" ></div>
                        <div class="item" style="width:600px"><img src="img/room/小管/6.jpg" ></div>
                        <div class="item" style="width:600px"><img src="img/room/小管/7.jpg" ></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"style="padding-top: 50px">
                    <div class="col-md-6">
                        <div class="card" style="border-style:none;background-color:transparent;text-align:center;">
                            <div class="card-body">
                                <a href="{{url('/000')}}"><font style="font-size:18px;" color="#888888"face="標楷體"><i class="fa fa-arrow-left fa-1x" style="color:#800000"></i>小管房</font></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="border-style:none;background-color:transparent;text-align:center;">
                            <div class="card-body">
                                <a href="{{url('/002')}}"><font style="font-size:18px;" color="#888888"face="標楷體">土魠房<i class="fa fa-arrow-right fa-1x" style="color:#800000"></i></font></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoWidth:true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
@endsection