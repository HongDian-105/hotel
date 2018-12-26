@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')
    {{--css設計--}}
    <style type="text/css">
        #circular--landscape-1{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
            margin-left:7%;/*與左間隔*/
            margin-top:15px;/*與上間隔*/
        }
        #circular--landscape-1 img{
            width:auto;
            height:100%;
            margin-left:-20%;
        }
        #circular--landscape-2{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
            margin-left:12%;/*與左間隔*/
            margin-top:15px;/*與上間隔*/
        }
        #circular--landscape-2 img{
            width:auto;
            height:100%;
            margin-left:-10%;
        }
        #circular--landscape-3{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
            margin-left:9%;/*與左間隔*/
            margin-top:15px;/*與上間隔*/
        }
        #circular--landscape-3 img{
            width:auto;
            height:100%;
        }
        #circular--landscape-4{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
            margin-left:7%;/*與左間隔*/
            margin-top:15px;/*與上間隔*/
        }
        #circular--landscape-4 img{
            width:auto;
            height:100%;
            margin-left:-22%;
        }
        #circular--landscape-5{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
            margin-left:12%;/*與左間隔*/
            margin-top:15px;/*與上間隔*/
        }
        #circular--landscape-5 img{
            width:auto;
            height:100%;
            margin-left:-5%;
        }
        #circular--landscape-6{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
            margin-left:9%;/*與左間隔*/
            margin-top:15px;/*與上間隔*/
        }
        #circular--landscape-6 img{
            width:auto;
            height:100%;
        }
    </style>
    <style>
        .vertical-mode {
            writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
        }
    </style>
    <header class="intro-header" style="background-image: url('img/view4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>選擇房型</h1>
                        <hr class="small">
                        <span class="subheading">請選擇想要的房型</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="col-md-12"style="background-color:transparent;">
        <form action="{{route('')}}">
            <div class="col-md-4" style="padding-top: 30px">
            <div class="card " style="background-color:transparent;">
                <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                    <a><font color="#737373" size="6" face="標楷體" >小管　雙人房</font></a>
                </div>
            </div>
        </div>
    </form>
        <div class="col-md-4" style="padding-top: 30px;">
            <div class="card " style="background-color:transparent;">
                <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                    <a href="{{url('/002')}}"><font color="#737373" size="6" face="標楷體">土魠　四人房</font></a>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding-top: 30px">
            <div class="card " style="background-color:transparent;">
                <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                    <a href="{{url('/003')}}"><font color="#737373" size="6" face="標楷體">石斑　六人房</font></a>
                </div>
            </div>
        </div>
    </div>
    <div id="circular--landscape-1">
        <div id="circular--landscape-1 img">
            <img src="img/小管-2.jpg">
        </div>
    </div>
    <div id="circular--landscape-2">
        <div id="circular--landscape-2 img">
            <img src="img/土魠.jpg">
        </div>
    </div>
    <div id="circular--landscape-3">
        <div id="circular--landscape-3 img">
            <img src="img/石斑-2.jpg">
        </div>
    </div>
    <div class="col-md-12"style="background-color:transparent;">
        <div class="col-md-4" style="padding-top: 30px">
            <div class="card " style="background-color:transparent;">
                <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                    <a href="{{url('/004')}}"><font color="#737373" size="6" face="標楷體">紅魽　四人房</font></a>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding-top: 30px">
            <div class="card " style="background-color:transparent;">
                <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                    <a href="{{url('/005')}}"><font color="#737373" size="6" face="標楷體">花枝丸 雙人房</font></a>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding-top: 30px">
            <div class="card " style="background-color:transparent;">
                <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                    <a href="{{url('/006')}}"><font color="#737373" size="6" face="標楷體">垵米　四人房</font></a>
                </div>
            </div>
        </div>
    </div>
    <div id="circular--landscape-4">
        <div id="circular--landscape-4 img">
            <img src="img/紅魽.jpg">
        </div>
    </div>
    <div id="circular--landscape-5">
        <div id="circular--landscape-5 img">
            <img src="img/花枝丸.jpg">
        </div>
    </div>
    <div id="circular--landscape-6">
        <div id="circular--landscape-6 img">
            <img src="img/垵米.jpg">
        </div>
    </div>


@endsection