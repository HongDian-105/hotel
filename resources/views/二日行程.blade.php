@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')

    <style>
        .vertical-mode {
            writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
        }


    </style>

    <header class="intro-header" style="background-image: url('img/view8.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>行程規劃</h1>
                        <hr class="small">
                        <span class="subheading">二日遊行程</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('layouts.link')
    <div class="container">
        <div class="row.justify-content-center">
    <h1>『澎湖旅遊相關注意事項』</h1>

    1.請攜帶中華民國身分證正本，因為是國內旅遊不用帶護照哦!
            <br>
    2.雖然是國內線飛機，還是請提早40~60分鐘前到機場較好。
            <br>
    3.去澎湖的方式有搭飛機及搭船兩種方式。
            <br>
    4.前往澎湖的人數眾多，不論是搭飛機或是搭船，請提早訂機票或船票。
            <br>
    5.怕暈船的人，建議選擇搭飛機，又快又方便。
            <br>
    6.澎湖風大、陽光大、紫外線更是毒，記得帶防曬乳、帽子、薄外套，能防曬的建議都帶，避免曬傷。
            <br>
    7.建議4~9月份前往較適合，也算是澎湖的旅遊旺季，4~6月有花火節，6~9月是暑假階段，天氣炎熱，很適合玩水上活動。
        </div>
    </div>
@endsection