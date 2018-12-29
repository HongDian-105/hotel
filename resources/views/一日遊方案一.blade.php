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


        <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：2.5617公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC1.jpg" width="450">
            </div>
            <div class="item2">

                <font color="#737373" size="6" face="微軟正黑體"><b>★ 澎湖生活博物館(10:10-10:40)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  本館設館宗旨係以保存澎湖地方文化資產，闡揚澎湖生活智慧，凝聚澎湖人文化共識，開拓澎湖人文化視野，建立在地文化自信心為使命，並以追求博物館專業品質與服務，發揮文化社會教育功能為目標。 其願景為：守護島嶼、胸懷海洋、看見真正的澎湖。</b></font><br><br>
                </p>
            </div>
        </div>


        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：2.244公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayB1.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  馬公港(11:00-11:30)</b></font><br><br>
                <p align="left">
                <font color="#737373" size="4" face="微軟正黑體"><b> ★  「澎湖國內商港馬公碼頭區(馬公港)」簡稱澎湖港，位在馬公市區南側海岸，為一開口朝西的馬蹄形天然港灣。組織架構為一港二碼頭區，包括馬公碼頭區及位於湖西鄉的龍門尖山碼頭區。港區遮蔽良好，風浪平緩，是澎湖群島對外海運的主要門戶，也是民生物資的主要輸入港口。</b></font><br><br>
                </p>

            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：35.038公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/view20.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  雙心石滬(13:30-13:50)</b></font><br><br>
                <p align="left">
                <font color="#737373" size="4" face="微軟正黑體"><b> ★  從馬公港搭船至頂隙港後，雙心石滬便在一旁，雙心石滬因位在七美頂隙的地方，又稱為「頂隙滬」，特殊又浪漫的心型，吸引廣告影片前來拍攝取景，也成為澎湖觀光行銷的重要景點之一。石滬是當地傳統的捕魚設施，是由玄武岩及珊瑚礁所築成，製作過程相當不易，石滬是用工法推砌，並無黏著媒介，通常要動員數人用上數年的時間方能完成，在冬季時利用漲退潮來捕捉漁獲。雙心石滬的主人每年皆會進行修護維修，到此遊賞的遊客切記勿踩踏石滬，及任意搬動石塊，讓雙心石滬的美分享給更多的民眾。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.6224公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayB2.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  七美人塚(14:00-15:00)</b></font><br><br>
                <p align="left">
                <font color="#737373" size="4" face="微軟正黑體"><b> ★  相傳為明朝時，成群的盜賊從七美的南邊海岸登陸，當時島上的男人都出海捕魚，剩下老弱婦孺，其中7位女子正在附近山上農忙（一說在井旁洗衣），不幸遇上倭寇侵襲，最後不甘受辱而相攜投井。事後鄉人，用土填井，後來長出7棵枝葉茂盛的香楸樹，民國38年劉燕夫縣長與何志浩將軍前來憑弔，何將軍有感而發，撰寫七美人歌一首，刻立於石岩上，歌曰：「七美人兮白璧姿，抱貞拒賊兮死隨之，英魂永寄孤芳樹，井上長春兮開滿枝」。七美人貞烈事蹟，遂為擴大整建為「七美人貞節園」，每年都有無數的遊客前來觀賞、憑弔。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：600公尺</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayB3.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  望夫石 (15:10-15:50)</b></font><br><br>
                <p align="left">
                <font color="#737373" size="4" face="微軟正黑體"><b> ★  「望夫石」位在七美島上，是一座深入海面的巨型礁岩，形狀有如身懷六甲的孕婦躺臥，關於「望夫石」有個淒美的傳說，相傳在島上有一對相當恩愛的夫妻，丈夫每日出海捕魚返航時，妻子皆會在岸邊等待，然而有天妻子卻等不到丈夫回家，妻子就在岸邊痴痴的等待，但是過了數天丈夫仍未出現，妻子不久後便不支倒地，而岸邊的岩石就成了孕婦的模樣，依舊等著丈夫歸來。</b></font><br><br>
                </p>
            </div>
        </div>
        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：250公尺</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayB4.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b> ★  七美嶼燈 (16:00-16:30)</b></font><br><br>
                <p align="left">
                <font color="#737373" size="4" face="微軟正黑體"><b>★  七美嶼燈塔又稱為「南滬燈塔」，是澎湖群島最南端的燈塔，也是澎湖南方海域航行指標。塔身為白色，塔高8.3公尺，為鋼筋混凝土構造物，是日本人在台灣地區最後興建的一座燈塔。由於造型為露天式燈塔，每年9至12月多風季節時，鹽垢與泥灰往往隨著風覆住燈籠外的玻璃或入侵其內的水晶玻璃，燈塔看管員須經常擦拭維修，極為辛苦。</b></font><br><br>
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