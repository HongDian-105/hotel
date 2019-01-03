@extends('layouts.master')
@section('title','土魠的季節，好吃的滋味！')
@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/IMAG1071.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <font color="#FFFFFF" size="12" face="標楷體"><b>土魠的季節，好吃的滋味！</b></font>
                        <hr class="small">
                        <font color="#FFFFFF" size="5" face="標楷體">愛吃魚的朋友有福了！！<br>今天土魠魚有三隻上岸歡迎詢問購買！</font>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color:transparent">
                <div class="col-md-9">
                    <div class="card-body" style="background-color:transparent">
                        <font color="#000000" size="4" face="標楷體">
                            　　大部分的魚，要嘗的是那股嫩、那股鮮，或那股魚肚膠與肥，但土魠魚不同。土魠魚也有鮮、膠、肥，但最迷人的是那股「香」。那個香，用鼻子聞不到，一定得把土魠魚下鍋蒸好或煎好，然後放進嘴巴咬，隨著咀嚼，那股香就會伴著充滿咬勁的土魠魚肉散入鼻息與舌尖。
                            <br>　　儘管全台各地都能捕到土魠，但就是澎湖海域土魠特別香，且那香氣並非一直存在土魠體內，而是伴隨季節生長與消退。專營澎湖生鮮漁獲宅配的「以窩魚」老闆娘顏汝以說：「它只出現在冬至到農曆春節這期間，當元宵過後南風吹起，那股香氣就消逝無蹤。」
                            <br>
                            ■<b>整條分享 傳遞關懷</b>
                            <br>　　那是一股看不到、沒法形容、也拿不出來，卻讓澎湖人魂縈夢牽的香味，那香不只是口慾，更代表了年節將至、一家即將團圓的氣息。
                            <br>　　對經常拿命與海相搏、子女又大多離鄉的澎湖人來說，「團圓」非常重要，而最能呼應團圓滋味的當季美食就是土魠，它夠大、夠貴、夠香、夠豪氣，最適合團圓桌。萬一今年真的無法團圓，那就一定要買條寄過去，土魠不只是食物，更是澎湖人過年前用來問候親友、傳遞家鄉關懷訊息的信使。
                            <br>
                            ■<b>一條條賣 出手豪氣</b>
                            <br>　　澎湖人對土魠的態度，台灣本島很難理解。在許多城市，土魠魚在腦中的對應畫面就是夜市裡的土魠魚羹。那是炸得金黃、小小一塊，很適合搭配米粉的甜甜柴魚味羹湯，一碗50元就有，哪有什麼豪氣與清香?
                            <br>　　但只要到漁港走一趟就會懂，澎湖人的土魠魚不是一塊塊，而是動輒5公斤、10公斤，甚至25公斤，體長最大可達240公分的大魚，平常一尾5公斤重就要2、3千元起跳，10幾公斤一尾的1、2萬元也不稀奇，前些年還有一條30公斤大土魠上岸，一公斤拍賣價三千多元，一條就賣了十幾萬。
                            <br>
                            ■<b>鮮甜滋味 價格高昂</b>
                            <br>　　會去油炸做成土魠魚羹的，通常是失去鮮味或遠洋進口的廉價土魠，甚至是假冒土魠的石喬魚，那不是澎湖人的土魠。就連澎湖土魠魚羹名店香亭也都大方承認：「澎湖土魠太貴了，我們都用台灣本島進口的土魠。」觀光局澎湖國家風景區管理處資深解說志工黃樹木說：「土魠魚羹是年輕人吃的，老澎湖人都是買整條、輪切，然後清蒸、乾煎或半煎煮。」澎湖人對土魠，有自己的一套見解。
                            <br>
                            <br>
                            <b>Index</b>
                            <br>　　★花菜干人文懷舊餐館／澎湖縣馬公市東文里4之2號／
                            <br>　　　06-9213695／11:00～14:00，17:00～22:00
                            <br>　　★觀光局澎湖國家風景區管理處／06-9216521
                        </font>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body" style="background-color:transparent">
                        <img src="img/post/post1-1.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body" style="background-color:transparent">
                        <img src="img/post/post1-2.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body" style="background-color:transparent">
                        <img src="img/post/post1-3.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body" style="background-color:transparent">
                        <img src="img/post/post1-4.jpg" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="{{url('/post2')}}">Next Posts &rarr;</a>
            </li>
        </ul>
    </div>
@endsection
