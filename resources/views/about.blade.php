
@extends('layouts.master')

@section('title', '洪店民宿-關於我們')

@section('content')
    {{--css設計--}}
    <style type="text/css">
        #fun1{
            width:550px;
            line-height:50px;
            padding:20px;
            /*border:2px blue solid;*/
            margin-right:10px;
            float:left;
        }
        #fun2{
            width:550px;
            line-height:50px;
            padding:20px;
            /*border:2px green solid;*/
            float:right;
        }
    </style>



    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

    <header class="intro-header" style="background-image: url('img/view2-2.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>關於我們</h1>
                        <hr class="small">
                        <span class="subheading">This Is What I Do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        {{--中--}}
        <div id="fun1">
            <font style="font-size:35px" color="#000000" face="標楷體"><b>民宿簡介...</b></font>
            <h1>　　『遠離吵雜，回歸純樸』</h1>
            <font style="font-size:20px" color="#000000" face="標楷體">洪店民宿有六人房，四人房和二人房，遠離塵囂的馬公鬧區，是個安靜又離鬧區不遠的澎湖小漁村。我們不只是提供住的舒適的房間，最主要的是提供人的服務，讓您像是住到老朋友家。</font>
        </div>

        <div id="fun2">
            <img src="img/about-3.jpg" width="506">
        </div>

        <div id="fun1">
            <font style="font-size:35px" color="#000000" face="標楷體"><b>經營理念...</b></font>
            <h1>　　『我愛澎湖，澎湖愛我』</h1>
            <div class="col-md-12">
                <div class="col-md-8" style="padding-top: 15px">
                    <div class="card text-center" style="border-style:none;background-color:transparent;">
                        <div class="card-body">
                            <img src="img/HongDian-home.jpg" width="450" style="border-radius:20px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-12" style="padding-top: 30px">
                <font style="font-size:18px;" color="#888888" face="標楷體"><b>－－－－－－－－－－－－－－－－－－－－－－－－－－－－－精選照片－－－－－－－－－－－－－－－－－－－－－－－－－－－－－</b></font>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-top: 30px">
                <div class="owl-carousel owl-theme">
                    <div class="item" style="width:480px"><img src="img/about/0.jpg" style="height:450px"></div>
                    <div class="item" style="width:520px"><img src="img/about/1.jpg" style="height:450px"></div>
                    <div class="item" style="width:350px"><img src="img/about/2.jpg" style="height:450px"></div>
                    <div class="item" style="width:550px"><img src="img/about/3.jpg" style="height:450px"></div>
                    <div class="item" style="width:500px"><img src="img/about/4.jpg" style="height:450px"></div>
                    <div class="item" style="width:480px"><img src="img/about/5.jpg" style="height:450px"></div>
                    <div class="item" style="width:400px"><img src="img/about/6.jpg" style="height:450px"></div>
                    <div class="item" style="width:500px"><img src="img/about/7.jpg" style="height:450px"></div>
                    <div class="item" style="width:550px"><img src="img/about/8.jpg" style="height:450px"></div>
                    <div class="item" style="width:300px"><img src="img/about/9.jpg" style="height:450px"></div>
                    <div class="item" style="width:450px"><img src="img/about/10.jpg" style="height:450px"></div>
                    <div class="item" style="width:450px"><img src="img/about/11.jpg" style="height:450px"></div>
                    <div class="item" style="width:450px"><img src="img/about/12.jpg" style="height:450px"></div>
                    <div class="item" style="width:300px"><img src="img/about/13.jpg" style="height:450px"></div>
                    <div class="item" style="width:300px"><img src="img/about/14.jpg" style="height:450px"></div>
                    <div class="item" style="width:320px"><img src="img/about/15.jpg" style="height:450px"></div>
                    <div class="item" style="width:350px"><img src="img/about/16.jpg" style="height:450px"></div>
                    <div class="item" style="width:350px"><img src="img/about/21.jpg" style="height:450px"></div>
                    <div class="item" style="width:420px"><img src="img/about/22.jpg" style="height:450px"></div>
                    <div class="item" style="width:450px"><img src="img/about/23.jpg" style="height:450px"></div>
                    <div class="item" style="width:450px"><img src="img/about/24.jpg" style="height:450px"></div>
                    <div class="item" style="width:450px"><img src="img/about/25.jpg" style="height:450px"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="padding-top: 30px">
                <font style="font-size:35px" color="#000000" face="標楷體"><b>地理位置...</b></font>
                <iframe width='100%' height='200' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=澎湖縣白沙鄉中屯村10鄰中屯52之3號&z=16&output=embed&t='></iframe>
            </div>
        </div>

        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                autoWidth:true,
                autoplay:true,
                autoplayTimeout:3500,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }

            })
        </script>
    </div>

@endsection

