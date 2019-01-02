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
                        <span class="subheading">一日遊行程---澎湖自然文化之旅</span>
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
                <img src="img/dayplanview/1dayA1.jpg" width="450">
            </div>
            <div class="item2">

                <font color="#737373" size="6" face="微軟正黑體"><b>★ 馬公機場(09:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★ 馬公機場為澎湖對外門戶的交通樞紐，新穎、寬廣、舒適、潔淨，已具有國際級機場的規模。機場大廳除提供各項旅遊諮詢與服務外，想品嘗美食、採購伴手禮等應有盡有，不失為一處休憩、整備再出發的起點。機場外等著迎接您的遊覽車、公車、計程車或摩托車，將帶您前往澎湖的每個角落。</b></font><br><br>
                </p>

            </div>

        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：4.5617公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC1.jpg" width="450">
            </div>
            <div class="item2">

                <font color="#737373" size="6" face="微軟正黑體"><b>★ 澎湖生活博物館(09:00-10:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  本館設館宗旨係以保存澎湖地方文化資產，闡揚澎湖生活智慧，凝聚澎湖人文化共識，開拓澎湖人文化視野，建立在地文化自信心為使命，並以追求博物館專業品質與服務，發揮文化社會教育功能為目標。 其願景為：守護島嶼、胸懷海洋、看見真正的澎湖。</b></font><br><br>
                </p>
            </div>
        </div>


        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.5公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC2.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★ 星光海洋牧場(10:00-11:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  不同於水上活動的熱情，也不同於南、北環島的寧靜，星光海洋牧場給您的，是一份寧靜、美麗的感覺，站在岸邊遠眺大海，站在平台上遠眺岸邊 別有一番滋味！不管是在岸邊炭烤牡蠣、欣賞風景，或者是在平台上，跟花枝鬥智，努力的把花枝釣起來！一邊犒賞五臟廟、一邊大飽眼福，還在等什麼？趕快來電預約報名呀！</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：7.1944公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC3.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  山水沙灘(11:30-12:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  這裡是澎湖的夢幻沙灘首選，放眼望去是無止盡的藍，映入眼簾的大海及翠綠馬鞍藤，絢麗的陽光灑落在湛藍的碧海上，遼闊的視野令人心曠神怡，讓人迫不及待的，想跳進這凊涼的海水中，與海水交融在一起。由於澎湖天然資源豐富，又沒受到人工污染，沙子呈現美麗的金黃色，這裡也被稱為「黃金沙灘」。 堤防上的長椅、藍天白雲與紅花綠葉，和金色的沙蔚藍的海，讓這處原本只有澎湖人懂得前來戲水的美景終究藏不住，這幾年也成為遊客指名的旅遊觀光勝地。這裡有店家開設衝浪課程，讓您趁著陽光最棒的時刻享受及體驗衝浪樂趣。</b></font><br><br>
                </p>

            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：9.058公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayC4.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  風櫃洞(13:30-14:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  風櫃位在風櫃半島的尾端，屬馬公市風櫃里，是一個非常古老的漁村，因風櫃濤聲、水柱噴潮、海水抽吸聲等三大奇觀而聞名。也因侯孝賢的電影「風櫃來的人」一片，而使風櫃聲名大噪，一度還成為澎湖的代名詞。 風櫃沿海盡是發達的柱狀節理玄武岩，由於海浪長年的沖擊，形成了狹長的海蝕溝及海蝕洞。每當巨浪激盪，衝向洞口，岩洞內一陣陣如雷濤聲，如風箱鼓風，如遇到風勢大、風向恰好、海水漲潮時，還可見到水柱噴潮的奇觀，風櫃聽濤即由此而來。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：1.224公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC5.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  蛇頭山國家風景區(14:30-16:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  蛇頭山山頂可以遠望馬公市美麗的市景，著名的西瀛虹橋也在視線範圍內，並一窺日軍松島戰艦沈船紀念碑的全貌，發現它其實是建造一艘船上，獨具匠心，也說明了與戰艦的密不可分關係。蛇頭山從古至今為主要的軍事戰略基地，是踏進台灣的跳板，經過轟轟烈烈的戰爭，原本的古蹟紅毛城已經被破壞殆盡，只剩下遺址紀念碑，不見當時壯觀的城堡建築。</b></font><br><br>
                </p>
            </div>
        </div>

        <p class="text-center">
            <br><i class="fa fa-plane fa-4x"> <font color="#737373" size="8" face="微軟正黑體"><b>旅程結束~~返程</b></font></i>
            <i class="fa fa-ship fa-4x"></i><br><br>
        </p>
        <font color="#737373" size="6" face="微軟正黑體"><b>遊客需知</b></font><br><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 買澎湖名產要貨比三家才不吃虧。（ 黑糖糕只有三天保存期限 ，強烈建議最後一天回台灣再買）</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 買澎湖文石要第一天買最好，萬一刻錯名字還有時間修改，而且趕工出來的刻印品質會小問題較多。</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 吃澎湖海鮮可要先確定好價錢 ，很多遊客都吃完海鮮再付款時才發現價錢貴的離譜ㄋ。</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 在澎湖的大馬路上騎乘機車或開車，時速不要超過６ ０公里 ，否則保證回台灣後一定收到超速照片。</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 使用學生證購買旅遊景點門票、離島公共交通船..等會有學生優惠價ㄡ。</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 馬公市中心無線網路漫遊已全部開通 ，歡迎各位遊客自行攜帶筆記型電腦來ㄡ。</b></font><br>

    </div>
    </div>
@endsection