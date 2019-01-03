@extends('layouts.master')
@section('title', '詳細介紹')
@section('content')

    {{--css設計--}}
    <style type="text/css">
        /* 漸變 color1 - color2 - color1 */
        hr.style-one {
            border: 0;
            height: 3px;
            background: #333;
            background-image: linear-gradient(to right, #ccc, #333, #ccc);
        }
    </style>

    <header class="intro-header" style="background-image: url('img/view4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <div class="page-heading">
                            @foreach($rooms as $rs)<h1>{{$rs->name}}</h1>
                        <hr class="small">@endforeach
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
                    @foreach($rooms as $rs)
                    <div class="col-md-3" style="padding-top: 15px">
                        <div class="card text-center" style="border-style:none;background-color:transparent;">
                            <div class="card-body">
                                <img src="img/{{$rs->pic}}" width="250" style="border-radius: 50px;">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-9">
                        <div class="card" style="border-style:none;background-image: url('img/background/1.gif');background-size:100% 100%;">
                            <div class="card-body">
                                <div class="wpb_wrapper">
                                    <font color="#000000" face="標楷體" size="5">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>　　　項目</th>
                                                <th>　　　　　　　　　　內容</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>　房型介紹</td>
                                                @foreach($rooms as $rs)<td>　{{$rs->bed}}</td>@endforeach
                                            </tr>
                                            <tr>
                                                <td>　客房設備</td>
                                                <td>　迷你冰箱、快煮壺、免費礦泉水、密碼保險箱</td>
                                            </tr>
                                            <tr>
                                                <td>　通訊設備</td>
                                                <td>　液晶電視、衛星電視、免費無線／寬頻網路</td>
                                            </tr>
                                            <tr>
                                                <td>　衛浴設備</td>
                                                <td>　乾濕分離衛浴設備、盥洗用具、吹風機、毛巾、私人浴袍</td>
                                            </tr>
                                            <tr>
                                                <td>　貼心服務</td>
                                                <td>　免費停車及提供早餐等服務</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2" style="padding-top: 20px">
                            <div class="card text-center" style="border-style:none;background-color:transparent;">
                                <div class="card-body">
                                    <font style="font-size:60px;line-height:0px;" color="#800000" ><b>NT</b></font><i class="fa fa-dollar fa-3x" style="color:#800000"></i>
                                    @foreach($rooms as $rs)
                                    <br><font style="font-size:18px" color="#888888" face="標楷體">金額 {{$rs->price}}</font>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top: 20px">
                            <div class="card text-center" style="border-style:none;background-color:transparent;">
                                <div class="card-body">
                                    <i class="fa fa-male fa-3x" style="color:#800000"></i><i class="fa fa-female fa-3x" style="color:#800000"></i>
                                    <br><font style="font-size:18px" color="#888888" face="標楷體">雙人房</font>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top: 20px">
                            <div class="card text-center" style="border-style:none;background-color:transparent;">
                                <div class="card-body">
                                    <i class="fa fa-wifi fa-3x" style="color:#800000"></i>
                                    <br><font style="font-size:18px" color="#888888" face="標楷體">免費wifi</font>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top: 20px">
                            <div class="card text-center" style="border-style:none;background-color:transparent;">
                                <div class="card-body">
                                    <i class="fa fa-car fa-3x" style="color:#800000"></i>
                                    <br><font style="font-size:18px" color="#888888" face="標楷體">免費停車</font>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top: 20px">
                            <div class="card text-center" style="border-style:none;background-color:transparent;">
                                <div class="card-body">
                                    <i class="fa fa-music fa-3x" style="color:#800000"></i>
                                    <br><font style="font-size:18px" color="#888888" face="標楷體">音響</font>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top: 20px">
                            <div class="card text-center" style="border-style:none;background-color:transparent;">
                                <div class="card-body">
                                    <i class="fa fa-television fa-3x" style="color:#800000"></i>
                                    <br><font style="font-size:18px" color="#888888" face="標楷體">液晶電視</font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top: 30px">
                        <font style="font-size:18px;" color="#888888" face="標楷體">－－－－－－－－－－－－－－－－－－－－－－－－－－－－－房間環境－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－</font>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top: 30px">
                        @foreach($rooms as $rs)
                        <div class="owl-carousel owl-theme">
                            <div class="item" style="width:600px"><img src="img/room/{{$rs->pic1}}"></div>
                            <div class="item" style="width:600px"><img src="img/room/{{$rs->pic2}}"></div>
                            <div class="item" style="width:600px"><img src="img/room/{{$rs->pic3}}"></div>
                            <div class="item" style="width:600px"><img src="img/room/{{$rs->pic4}}"></div>
                            <div class="item" style="width:600px"><img src="img/room/{{$rs->pic5}}"></div>
                            <div class="item" style="width:600px"><img src="img/room/{{$rs->pic6}}"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <hr class="style-one"/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="card" style="border-style:none;background-color:transparent;text-align:center;">
                                <div class="card-body">
                                    <a href="{{url('/room1')}}"><font style="font-size:20px" color="gray" face="標楷體"><i class="fa fa-arrow-left fa-1x" style="color:gray"></i>小管房</font></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="border-style:none;background-color:transparent;text-align:center;">
                                <div class="card-body">
                                    <a href="{{url('/room2')}}"><font style="font-size:20px" color="gray" face="標楷體">土魠房<i class="fa fa-arrow-right fa-1x" style="color:gray"></i></font></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="style-one"/>
            </div>
        </div>
    </article>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoWidth:true,
            autoplay:true,
            autoplayTimeout:3500,
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