@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            grid-gap: 0px;

            padding: 2px;
        }
        .grid-container > div {

            text-align: center;
            padding: 20px 0;
            font-size: 20px;
        }

        .item1 {

            grid-column-start: 1;
            grid-column-end:3;
        }
        .item2 {
            border: 1px solid rgba(0, 0, 0, 0.8);
            grid-column-start:3;
            grid-column-end: 6;
        }
    </style>

    <header class="intro-header" style="background-image: url('img/view8.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>行程規劃</h1>
                        <hr class="small">
                        <span class="subheading">一日遊行程---本島一日遊</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('layouts.link')
    <br>
    <div class="container">
        <font color="#737373" size="6" face="微軟正黑體"><b>第一天(DAY1)</b></font><br><br>
    <div class="grid-container">
        <div class="item1">
            <img src="img/1dayA1.jpg" width="450">
        </div>
        <div class="item2">

            <font color="#737373" size="6" face="微軟正黑體"><b>★ 馬公機場(09:00)</b></font><br><br>
            <font color="#737373" size="4" face="微軟正黑體"><b>★ 馬公機場為澎湖對外門戶的交通樞紐，新穎、寬廣、舒適、潔淨，已具有國際級機場的規模。機場大廳除提供各項旅遊諮詢與服務外，想品嘗美食、採購伴手禮等應有盡有，不失為一處休憩、整備再出發的起點。機場外等著迎接您的遊覽車、公車、計程車或摩托車，將帶您前往澎湖的每個角落。</b></font><br><br>


        </div>

    </div>

    <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：2.3717公里</b></font><br>
    </div>
    <div class="grid-container">
        <div class="item1">
            <img src="img/1dayA2.jpg" width="450">

        </div>
        <div class="item2">
            <font color="#737373" size="6" face="微軟正黑體"><b>★ 澎湖遊客中心(09:00-10:00)</b></font><br><br>
            <font color="#737373" size="4" face="微軟正黑體"><b>★  澎湖遊客中心位於馬公機場往返馬公市區的中心點，為遊客到訪澎湖的首要資訊站。澎湖遊客中心內區分展示館及視聽室，展示館以「碧海藍天、自然悠閒」為設計理念，展現海洋意象及澎湖灣風情，視聽室則以整點播放旅遊介紹影片供遊客觀賞。此外，遊客亦可於此索取免費的旅遊摺頁，還包括有台灣本島各地的觀光旅遊資料。</b></font><br><br>

        </div>
    </div>


    <div> <font color="#737373" size="5" face="微軟正黑體"><b>還沒</b></font><br>
    </div>
    <div class="grid-container">
        <div class="item1">


        </div>
        <div class="item2">
            <font color="#737373" size="6" face="微軟正黑體"><b>還</b></font><br><br>
            <font color="#737373" size="4" face="微軟正黑體"><b>沒</b></font><br><br>

        </div>
    </div>
    </div>
    </div>
@endsection