@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')
    {{--css設計--}}
    <style type="text/css">
        /*左*/
        #fun1{
            width:530px;
            line-height:30px;
            padding:10px;
            /*border:2px blue solid;*/
            margin-right:10px;
            float:left;
        }
        /*右*/
        #fun2{
            width:550px;
            /*height: px;*/
            line-height:30px;
            padding:1px;
            /*border:2px green solid;*/
            float:right;
        }
        /*全*/
        #fun3{
            width:1122px;
            line-height:50px;
            padding:5px;
            border:2px #8bd4b7 solid;
            float:left;
        }
        #fun4{
            width:400px;
            height: 120px;
            line-height:32px;
            padding:10px;
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
        #fun6-1{
            width:362px;/*寬*/
            height:270px;/*高*/
            line-height:32px;
            padding:3.8px;/*距離框框*/
            padding-left:6px;/*距離左框框*/
            /*border:2px #8bd4b7 solid;/*框框粗細*/
            margin-right:18px;/*與右間隔*/
            margin-top:20px;/*與上間隔*/
            margin-bottom:2px;/*與下間隔*/
            float: left;
        }
        #fun7{
            width:362px;
            height:80px;
            line-height:32px;
            padding:10px;
            /*border:2px #8bd4b7 solid;*/
            margin-right:18px;
            margin-top:3px;/*與上間隔*/
            float: left;
        }
        #fun6-2{
            width:362px;/*寬*/
            height:270px;/*高*/
            line-height:32px;
            padding:3.8px;/*距離框框*/
            padding-left:6px;/*距離左框框*/
            /*border:2px #8bd4b7 solid;/*框框粗細*/
            margin-right:18px;/*與右間隔*/
            margin-top:40px;/*與上間隔*/
            margin-bottom:2px;/*與下間隔*/
            float: left;
        }
        #fun7-2{
            width:362px;
            height:80px;
            line-height:32px;
            padding:10px;
            /*border:2px #8bd4b7 solid;*/
            margin-right:18px;
            margin-top:3px;/*與上間隔*/
            margin-left:190px;/*與左間隔*/
            margin-bottom:10px;/*與下間隔*/
            float: left;
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
                <div style="letter-spacing: 10px">
                    <font color="#ffffff" size="3" face="微軟正黑體">•純樸的漁村生活</font><br>
                    <font color="#ffffff" size="3" face="微軟正黑體">•清澈的美麗海景</font><br>
                    <font color="#ffffff" size="3" face="微軟正黑體">•舒服的華麗設計</font>
                </div>
            </div>
            <div id="fun5" style="background-color: #ffffff">
                {{--<div style="letter-spacing:0px">--}}
                <font color="#ffffff" size="3" face="微軟正黑體">•純樸的漁村生活</font><br>
                <font color="#737373" size="4" face="微軟正黑體"><b>踏上未知旅程•享受前所未有的感受</b></font><br>
                <font color="#737373" size="3" face="微軟正黑體">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;為了您了旅行，我們已經為您準備好了各式各樣的房型，任您來精挑細選。</font><br>
                {{--</div>--}}
            </div>
            <div id="fun6-1">
                <img src="img/小管-2.jpg">
            </div>
            <div id="fun6-1">
                <img src="img/土魠.jpg">
            </div>
            <div id="fun6-1">
                <img src="img/石斑-2.jpg">
            </div>
            <div id="fun7">
                <img src="img/小管-key.png"><a href="{{url('/001')}}"><font color="#737373" size="5.5" face="微軟正黑體">小管 雙人房</font></a>
            </div>
            <div id="fun7">
                <img src="img/土魠-key.png"><a href="{{url('/002')}}"><font color="#737373" size="5.5" face="微軟正黑體">土魠 四人房</font></a>
            </div>
            <div id="fun7">
                <img src="img/石斑-key.png"><a href="{{url('/003')}}"><font color="#737373" size="5.5" face="微軟正黑體">石斑 六人房</font></a>
            </div>
            <div id="fun6-2">
                <img src="img/紅魽.jpg">
            </div>
            <div id="fun6-2">
                <img src="img/花枝丸.jpg">
            </div>
            <div id="fun6-2">
                <img src="img/垵米.jpg">
            </div>
            <div id="fun7">
                <img src="img/紅魽-key.png"><a href="{{url('/004')}}"><font color="#737373" size="5.5" face="微軟正黑體">紅魽 四人房</font></a>
            </div>
            <div id="fun7">
                <img src="img/花枝丸-key.png"><a href="{{url('/005')}}"><font color="#737373" size="5.5" face="微軟正黑體">花枝丸 雙人房</font></a>
            </div>
            <div id="fun7">
                <img src="img/垵米-key.png"><a href="{{url('/006')}}"><font color="#737373" size="5.5" face="微軟正黑體">垵米 四人房</font></a>
            </div>











            <div id="fun3">

                {{--<img src="img/room/room1.png" width="200">--}}
                    {{--<p align="right"  >--}}

                        {{--<span class="vertical-mode" >故事：洪店民宿有六人房，四人房和二人房，遠離塵囂的馬公鬧區，是個安靜又離鬧區不遠的澎湖小漁村。我們不只是提供住的舒適的房間，最主要的是提供人的服務，讓您像是住到老朋友家。</span>--}}
                        {{--<span class="vertical-mode" >故事：</span>--}}
                    {{--</p>--}}




            <div id="fun2" style="background-image: url('img/rightback.png');background-size: 550px 310px">

                    <img src="img/room/room1.png" width="170">

                    <p align="left" >
                <span class="vertical-mode" >
                    <font face="標楷體" size="5" >
                        <font size="6" ><b>文化-</b></font>
                        <br>文化是什麼?
                        <br>你說是文化
                        <br>這一個人有文化
                        <br>你確定嗎
                        <br>那誰有文化
                        <br>誰沒文化
                        <br>文化不分貴賤
                        <br>就算沒文化
                        <br>就算沒文化
                        <br>也好過你有文化
                        <br>
                        <br>
                    </font>
                </span>
                    </p>

                    {{--<p align="center"><span style='writing-mode:tb-rl;'><font face="標楷體" size="5" >直書測試</font></span></p>--}}
                    {{--<div id="fun2" style="background-image: url('img/roomback.png');background-size: 550px 850px">--}}
            </div>



            <div id="fun1">
                <img src="img/about-main.jpg" width="506">
            </div>

            <div id="fun2" >
                    <font face="標楷體" size="5" >
                        <font size="6" ><b>設施介紹</b></font>
                        <br>文化是什麼?
                        <br>你說是文化
                        <br>這一個人有文化

                    </font>
            </div>


            {{--</div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>

                    <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>

                    <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>

                    <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>

                    <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>

                    <h2 class="section-heading">The Final Frontier</h2>

                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                    <blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>

                    <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>

                    <h2 class="section-heading">Reaching for the Stars</h2>

                    <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

                    <a href="#">
                        <img class="img-responsive" src="img/post-sample-image.jpg" alt="">
                    </a>
                    <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

                    <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>

                    <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>

                    <p>Placeholder text by <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
                </div>
            </div>
        </div>--}}
    </article>

@endsection
