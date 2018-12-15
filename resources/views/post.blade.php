@extends('layouts.master')
@section('title', '洪店民宿-房型介紹')
@section('content')
    {{--css設計--}}
    <style type="text/css">
        /*左*/
        #fun1{
            width:530px;
            line-height:30px;
            padding:2.5px;
            /*border:2px blue solid;*/
            margin-right:10px;
            margin-top:20px;/*與上間隔*/
            margin-bottom:5px;/*與下間隔*/
            float:left;
        }
        /*右*/
        #fun2-1{
            width:595px;
            /*height: px;*/
            line-height:30px;
            padding:10px;
            /*border:2px green solid;*/
            margin-top:20px;/*與上間隔*/
            margin-bottom:5px;/*與下間隔*/
            float:right;
        }
        #fun2-2{
            width:595px;
            height:430px;
            /*line-height:20px;*/
            padding:25px;
            /*border:2px green solid;*/
            margin-top:5px;/*與上間隔*/
            margin-bottom:5px;/*與下間隔*/
            float:right;
        }
        /*全*/
        #fun3{
            width:1122px;
            line-height:50px;
            padding:5px;
            /*border:2px #8bd4b7 solid;*/
            margin-bottom:2px;/*與下間隔*/
            float:left;
        }
        #fun4{
            width:400px;
            height: 120px;
            line-height:32px;
            padding:13px;
            /*border:2px #8bd4b7 solid;*/
            float:left;
        }
        #fun5{
            width:730px;
            height: 120px;
            line-height:32px;
            padding:10px;
            /*border:2px #8bd4b7 solid;*/
            float:left;
        }
        #fun6{
            padding:10px;
            /*border:2px #8bd4b7 solid;*/
            margin-right:25px;
            margin-left:98px;
            margin-top:50px;/*與上間隔*/
            float: left;
        }
        #circular--landscape-1{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
            margin-left:95px;/*與左間隔*/
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
            margin-left:95px;/*與左間隔*/
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
            margin-left:95px;/*與左間隔*/
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
            margin-left:95px;/*與左間隔*/
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
            margin-left:95px;/*與左間隔*/
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
            margin-left:95px;/*與左間隔*/
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
            <div id="fun4" style="background-color: #737373">
                <div style="letter-spacing: 20px">
                    <font color="#ffffff" size="5" face="微軟正黑體">•純樸的漁村生活</font><br>
                    <font color="#ffffff" size="5" face="微軟正黑體">•清澈的美麗海景</font><br>
                    <font color="#ffffff" size="5" face="微軟正黑體">•舒服的華麗設計</font>
                </div>
            </div>
            <div id="fun5" style="background-color: #ffffff">
                <div style="letter-spacing:2px">
                    <font color="#737373" size="5.5" face="微軟正黑體"><b>踏上未知旅程•享受前所未有的感受</b></font><br>
                    <font color="#737373" size="4" face="微軟正黑體">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;為了您了旅行，我們已經為您準備好了各式各樣的房型，任您來精挑細選。</font><br>
                </div>
            </div>

            <div id="fun1">
                <img src="img/about-main.jpg" width="521">
            </div>

            <div id="fun2-1" style="background-image: url('img/background/5.jpg');filter:alpha(opacity=.1);background-size: 570px 350px">
                <font face="標楷體" size="5" >
                    <font size="6" ><b>　　　　　　　溫馨住宿</b></font>
                    <br>　　　　• 時間長度不定  　• 價格不固定
                    <br>　　　 洪店民宿有六人房，四人房和二人房
                    <br>　　　 遠離塵囂的馬公鬧區
                    <br>　　　 是個安靜又離鬧區不遠的澎湖小漁村
                    <br>　　 　我們不只是提供住的舒適的房間
                    <br>　　 　最主要的是提供人的服務
                    <br>　　 　讓您像是住到老朋友家，有個愉快的旅行回憶
                </font>
            </div>

            <div id="fun2-2" style="background-image: url('img/rightback.png');filter:alpha(opacity=.1);background-size: 600px 440px">
                <div class="wpb_wrapper">
                    <font color="#000000" face="標楷體" size="5" style="line-height:0px;">
                        <font size="6"><b>　　　　　　房價一覽表</b></font>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>房型</th>
                            <th>床數</th>
                            <th>定價(NTD)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>小管房</td>
                            <td>一大床</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>土魠房</td>
                            <td>一大床</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>石斑房</td>
                            <td>一大床</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>洪魽房</td>
                            <td>一大床</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>花枝丸房</td>
                            <td>一大床</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>垵米房</td>
                            <td>一大床</td>
                            <td>5,000</td>
                        </tr>
                        </tbody>
                    </table>
                    </font>
                </div>
            </div>

            <div id="fun3">
                {{--<img src="img/room/room1.png" width="200">
                    <p align="right">

                        <span class="vertical-mode" >故事：洪店民宿有六人房，四人房和二人房，遠離塵囂的馬公鬧區，是個安靜又離鬧區不遠的澎湖小漁村。我們不只是提供住的舒適的房間，最主要的是提供人的服務，讓您像是住到老朋友家。</span>
                        <span class="vertical-mode" >故事：</span>
                    </p>--}}
            </div>

            <div id="fun6" style="width:230px;height:60px;text-align:center;line-height:30px;">
                <a href="{{url('/001')}}"><font color="#737373" size="6" face="微軟正黑體" >小管　雙人房</font></a>
            </div>
            <div id="fun6" style="width:230px;height:60px;text-align:center;line-height:30px;">
                <a href="{{url('/002')}}"><font color="#737373" size="6" face="微軟正黑體">土魠　四人房</font></a>
            </div>
            <div id="fun6" style="width:230px;height:60px;text-align:center;line-height:30px;">
                <a href="{{url('/003')}}"><font color="#737373" size="6" face="微軟正黑體">石斑　六人房</font></a>
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
            <div id="fun6" style="width:230px;height:60px;text-align:center;line-height:30px;">
                <a href="{{url('/004')}}"><font color="#737373" size="6" face="微軟正黑體">紅魽　四人房</font></a>
            </div>
            <div id="fun6" style="width:230px;height:60px;text-align:center;line-height:30px;">
                <a href="{{url('/005')}}"><font color="#737373" size="6" face="微軟正黑體">花枝丸 雙人房</font></a>
            </div>
            <div id="fun6" style="width:230px;height:60px;text-align:center;line-height:30px;">
                <a href="{{url('/006')}}"><font color="#737373" size="6" face="微軟正黑體">垵米　四人房</font></a>
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
    </article>
@endsection