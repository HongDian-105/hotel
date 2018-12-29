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
                        <span class="subheading">一日遊行程---夏夜之美。夜釣小管</span>
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

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：2.3717公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayA2.1.jpg" width="450">
            </div>
            <div class="item2">

                <font color="#737373" size="6" face="微軟正黑體"><b>★ 澎湖遊客中心(09:00-10:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  澎湖遊客中心位於馬公機場往返馬公市區的中心點，為遊客到訪澎湖的首要資訊站。澎湖遊客中心內區分展示館及視聽室，展示館以「碧海藍天、自然悠閒」為設計理念，展現海洋意象及澎湖灣風情，視聽室則以整點播放旅遊介紹影片供遊客觀賞。此外，遊客亦可於此索取免費的旅遊摺頁，還包括有台灣本島各地的觀光旅遊資料。</b></font><br><br>
                </p>
            </div>
        </div>


        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：103公尺</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayA3.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  澎坊免稅商店(10:00-11:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  澎坊免稅商店專業經營百貨零售、免稅服務業，以型塑離島觀光意象為經，以發展離島經濟為緯，活化離島豐富、獨特的海島觀光特色與文化資源，配合離島的遊憩發展模式，推動「文化、觀光、經濟」三位一體的免稅購物商店，並以完整優良的商品、合理的價格、嚴格有序的管理，親切優質服務，打造兼具國際薈萃與地方風情的購物天堂</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：8.9744公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayA4.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  中屯風力園區(11:00-11:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  碧海藍天輝映著雪白的風車，迎風或快或慢地輪轉，夜間熾白光束創造視覺的藝術，冬季季風在葉片間化成氣勢澎湃轟轟的震撼。沒錯，這就是澎湖有名的中屯風力園區。目前中屯風車共有8座，發電量占澎湖總發電量約12%，經濟與觀光價值發揮地淋漓盡緻。風車、休憩涼亭、景觀步道、自行車道等，已成為澎湖縣白沙鄉的著名旅遊景</b></font><br><br>
                </p>

            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：8.038公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayA5.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  小門地質館(11:30-13:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  小門地質館面積約為498平方公尺，遊客可在小門地質館內參觀到詳細的文字介紹以及圖片展示，全館展示內容依現場參觀動線前進，設置有1.導覽地圖區2.澎湖的地景區(澎湖地質年代表)3.小門嶼區4.小門地質區(小門嶼地層、小門嶼地質、小門嶼地形)5.地質觸摸區6.澎湖地景區7.世界地質區等七個主題展區。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：8.9224公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayA6.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  北海遊客中心(11:40-14:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  提供旅遊諮詢、遊艇服務、候船室、販賣部、餐廳等服務 服務電話：06-9933082 開放時間：08：00--17：30 地址：澎湖縣白沙鄉赤崁村37之4號</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：11.1434公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayA7.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  二崁傳統聚落 (13:30-15:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  澎湖保留最完整的閩式傳統聚落；有在地文化特色的各類小型展覽館，包括：常民生活館、潮間帶館、社區博物館、海藻館、童玩館、褒歌館等。</b></font><br><br>
                </p>
            </div>
        </div>
        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：4.2988公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayA8.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b> ★  東昌營區 (15:00-16:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b>★  位於風坑的東昌營區，原是國軍廢棄的舊營區，由於坐落於兩山間的斜坡谷地，既可遠眺風坑口的海岸之美，兼有左輔右弼的地勢。</b></font><br><br>
                </p>
            </div>
        </div>
        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：10.9265公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayA9.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  通梁古榕 (16:00-17:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b>  ★  位於白沙鄉通梁村保安宮前，樹齡已超過300年，為澎湖最大、最老的榕樹，氣根達90多根，綠蔭涵蓋廣達6,600平方公尺，在草木不易生長的澎湖旱地相當特殊，因此居民奉其為神木，賦予傳奇。</b></font><br><br>
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