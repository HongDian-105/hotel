@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')

    <style>

        .grid-container {
            display: grid;
            grid-column-gap: 5px;
            grid-template-columns: repeat(3, 1fr);;

            padding: 100px;

        }

        .grid-item {

            padding: 20px;
            font-size: 10px;
            text-align: center;
        }
        #circular--landscape-1{
            display:inline-block;
            position:relative;
            width:250px;
            height:250px;
            overflow:hidden;
            border-radius:125px;
        }
        #circular--landscape-1 img{
            width:auto;
            height:100%;
            margin-left:-20%;
        }
        #st1 .inner {
            padding: 1em 4%;
        }

        #st1 h1 {
            background: rgba(60%,0%,0%,0.6);
        }
        #st1 p {
            background: rgba(0%,10%,20%,0.6);
        }
    </style>

    <header class="intro-header" style="background-image: url('img/view8.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>行程規劃</h1>
                        <hr class="small">
                        <span class="subheading">一日遊行程</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('layouts.link')

    <div id="st1" class="st">
        <div class="inner">

    <div class="grid-container">
        <div class="grid-item">
            <div id="circular--landscape-1">
                <div id="circular--landscape-1 img">
                    <a href="{{route('1DayPlanA')}}"><img src="img/view20.jpg"></a>
                </div>
            </div>

        <br>

            <a href="{{route('1DayPlanA')}}"><h1><font color="#ffffff" size="5" face="微軟正黑體"><b>夏夜之美。夜釣小管</b></font></h1></a>
        </div>
        <div class="grid-item">

            <div id="circular--landscape-1">
                <div id="circular--landscape-1 img">
                    <a href="{{route('1DayPlanB')}}"><img src="img/view21.jpg"></a>
                </div>
            </div>

            <br>
            <a href="{{route('1DayPlanB')}}"> <h1><font color="#ffffff" size="5" face="微軟正黑體"><b>本島漫遊之旅</b></font></h1></a>

        </div>
        <div class="grid-item">

            <div id="circular--landscape-1">
                <div id="circular--landscape-1 img">
                    <a href="{{route('1DayPlanC')}}"><img src="img/view22.jpg"></a>
                </div>
            </div>

            <br>
            <a href="{{route('1DayPlanC')}}"><h1><font color="#ffffff" size="5" face="微軟正黑體"><b>澎湖自然文化之旅</b></font></h1></a>
        </div>
        <div class="grid-item">
            <div style=text-align:left;">

             <font color="#737373" size="4" face="微軟正黑體"><b>★ 挑燈夜戰，清澈水色!</b></font><br><br>
              <font color="#737373" size="4" face="微軟正黑體"><b>★ 新鮮小管沙西米 &nbsp;&nbsp;&nbsp;&nbsp;上 &nbsp; &nbsp;&nbsp;菜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;囉!</b></font><br><br>
            <font color="#737373" size="4" face="微軟正黑體"><b>★ 現釣小管沙西米、現煮小管麵線、川燙現網漁獲!</b></font><br><br>
            <font color="#737373" size="4" face="微軟正黑體"><b>★ 本專案不分平、假日均可使用。</b></font><br><br>
            <font color="#737373" size="4" face="微軟正黑體"><b>★ 本活動適用於每年四至九月進行，冬季不建議進行。</b></font><br>


        </div>

        </div>
        <div class="grid-item">
            <div style=text-align:left;">

                <font color="#737373" size="4" face="微軟正黑體"><b>★ 自然悠遊，恣意享受!</b></font><br><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>★ 飽覽澎湖海洋意象及澎湖灣風情!</b></font><br><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>★ 一趟體驗在地文化，自然與知性並重的文化之旅!</b></font><br><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>★ 本專案不分平、假日均可使用。</b></font><br><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>★ 本活動全年適用。</b></font><br>


            </div>
        </div>
        <div class="grid-item">
            <div style=text-align:left;">

                <font color="#737373" size="4" face="微軟正黑體"><b>★ 澎湖生活、文化、地方史及生態之旅!</b></font><br><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>★ 藍天白雲與紅花綠葉，和金色的沙蔚藍的海!</b></font><br><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>★ 一趟體驗在地文化，自然與知性並重的文化之旅!</b></font><br><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>★ 本專案不分平、假日均可使用。</b></font><br><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>★ 本活動於每年四至九月進行，冬季不建議進行。</b></font><br>


            </div>
        </div>
    </div>
<br>
    </div>
    </div>

    <div class="row.justify-content-center">
        <font color="#737373" size="5" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;『澎湖旅遊相關注意事項』</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.請攜帶中華民國身分證正本，因為是國內旅遊不用帶護照哦!</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.雖然是國內線飛機，還是請提早40~60分鐘前到機場較好。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.去澎湖的方式有搭飛機及搭船兩種方式。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.前往澎湖的人數眾多，不論是搭飛機或是搭船，請提早訂機票或船票。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.怕暈船的人，建議選擇搭飛機，又快又方便。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.澎湖風大、陽光大、紫外線更是毒，記得帶防曬乳、帽子、薄外套，能防曬的建議都帶，避免曬傷。</b></font><br>
        <font color="#737373" size="4" face="微軟正黑體"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.建議4~9月份前往較適合，也算是澎湖的旅遊旺季，4~6月有花火節，6~9月是暑假階段，天氣炎熱，很適合玩水上活動。</b></font><br>

    </div>

@endsection