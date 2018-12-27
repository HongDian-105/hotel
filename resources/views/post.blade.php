@extends('layouts.master')
@section('title', '洪店民宿-房型介紹')
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

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/view4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>房型介紹</h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
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
                    <div class="col-md-4">
                        <div class="card" style="border-style: none;letter-spacing:15px;background-color:gray;">
                            <div class="card-body">
                                <font color="#ffffff" size="5" face="標楷體">•純樸的漁村生活</font><br>
                                <font color="#ffffff" size="5" face="標楷體">•清澈的美麗海景</font><br>
                                <font color="#ffffff" size="5" face="標楷體">•舒服的華麗設計</font>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card" style="border-style: none;letter-spacing:2px;background-color:transparent;padding-top: 30px">
                            <div class="card-body">
                                <font color="#737373" size="5" face="標楷體"><b>踏上未知旅程•享受前所未有的感受</b></font><br>
                                <font color="#737373" size="4" face="標楷體">　　為了您了旅行，我們已經為您準備好了各式各樣的房型，任您來精挑細選</font><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="card" style="padding-top: 30px">
                            <div class="card-body">
                                <img src="img/about-main.jpg" width="530">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="padding-top: 30px">
                        <div class="card text-center" style="background-image: url('img/background/5.jpg');filter:alpha(opacity=.1);background-size: 570px 350px;">
                            <div class="card-body">
                                <font face="標楷體" size="5" >
                                    <font size="6" ><b>溫馨住宿</b></font>
                                    <br>• 時間長度不定  　• 價格不固定
                                    <br>洪店民宿有六人房，四人房和二人房
                                    <br>遠離塵囂的馬公鬧區
                                    <br>是個安靜又離鬧區不遠的澎湖小漁村
                                    <br>我們不只是提供住的舒適的房間
                                    <br>最主要的是提供人的服務
                                    <br>讓您像是住到老朋友家，有個愉快的旅行回憶
                                </font>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6"style="padding-top: 30px">
                        <div class="card" style="background-image: url('img/rightback.png');background-size:100% 105%">
                            <div class="card-body">
                                <div class="wpb_wrapper">
                                    <font color="#000000" face="標楷體" size="5" style="line-height:0px;">
                                        <font size="6"><b>　　　　　　房價一覽表</b></font>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>　房型</th>
                                                <th>　床數</th>
                                                <th>　定價(NTD)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>　小管房</td>
                                                <td>　一大床</td>
                                                <td>　3,600</td>
                                            </tr>
                                            <tr>
                                                <td>　土魠房</td>
                                                <td>　兩大床</td>
                                                <td>　4,800</td>
                                            </tr>
                                            <tr>
                                                <td>　石斑房</td>
                                                <td>　三大床</td>
                                                <td>　6,600</td>
                                            </tr>
                                            <tr>
                                                <td>　紅魽房</td>
                                                <td>　兩大床</td>
                                                <td>　4,500</td>
                                            </tr>
                                            <tr>
                                                <td>　花枝丸房</td>
                                                <td>　一大床</td>
                                                <td>　3,600</td>
                                            </tr>
                                            <tr>
                                                <td>　垵米房</td>
                                                <td>　兩大床</td>
                                                <td>　4,500</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12"style="background-color:transparent;">
                    <div class="col-md-4" style="padding-top: 30px">
                        <div class="card " style="background-color:transparent;">
                            <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                                <a href="{{url('/room1')}}"><font color="#737373" size="6" face="標楷體" >小管　雙人房</font></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top: 30px;">
                        <div class="card " style="background-color:transparent;">
                            <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                                <a href="{{url('/room2')}}"><font color="#737373" size="6" face="標楷體">土魠　四人房</font></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top: 30px">
                        <div class="card " style="background-color:transparent;">
                            <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                                <a href="{{url('/room3')}}"><font color="#737373" size="6" face="標楷體">石斑　六人房</font></a>
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
                                <a href="{{url('/room4')}}"><font color="#737373" size="6" face="標楷體">紅魽　四人房</font></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top: 30px">
                        <div class="card " style="background-color:transparent;">
                            <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                                <a href="{{url('/room5')}}"><font color="#737373" size="6" face="標楷體">花枝丸 雙人房</font></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top: 30px">
                        <div class="card " style="background-color:transparent;">
                            <div class="card-body" style="width:350px;height:60px;text-align:center;line-height:60px;">
                                <a href="{{url('/room6')}}"><font color="#737373" size="6" face="標楷體">垵米　四人房</font></a>
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
            </div>
        </div>
    </article>
@endsection