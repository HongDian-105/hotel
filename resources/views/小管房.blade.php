@extends('layouts.master')
@section('title', '我是小管')
@section('content')

    {{--css設計--}}
    <style type="text/css">
        /*左*/
        #fun1{
            width:530px;
            line-height:30px;
            padding:10px;
            border:2px blue solid;
            margin-right:10px;
            margin-top:20px;/*與上間隔*/
            margin-bottom:5px;/*與下間隔*/
            float:none;
        }
        #relative1 {
            position: relative;
            top: -100px;
            left: 920px;
            background-color: white;
            width: 500px;
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
            <div id="fun1" style="background-color: #737373">
                <div style="letter-spacing: 20px">
                    <font color="#ffffff" size="3" face="微軟正黑體">•純樸的漁村生活</font><br>
                    <font color="#ffffff" size="3" face="微軟正黑體">•清澈的美麗海景</font><br>
                    <font color="#ffffff" size="3" face="微軟正黑體">•舒服的華麗設計</font>
                </div>
            </div>
            <div id="relative1">
            <button type="button" style="width:150px;height:70px;font-size:30px;font-family:Microsoft JhengHei;background-color:#f1e1ff;" onclick="location.href='booking'">我要訂房</button>
            </div>
            {{--<div id="fun2"></div>--}}
        </div>    </article>

@endsection