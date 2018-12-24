
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
            <font size="5"><b>民宿簡介...</b></font>
            <h1>『遠離吵雜，回歸純樸』</h1>
            洪店民宿有六人房，四人房和二人房，遠離塵囂的馬公鬧區，是個安靜又離鬧區不遠的澎湖小漁村。我們不只是提供住的舒適的房間，最主要的是提供人的服務，讓您像是住到老朋友家。
        </div>

        <div id="fun2">
            <img src="img/about-3.jpg" width="506">
        </div>

        <div id="fun1">
            <font size="5"><b>經營理念...</b></font>
            <h1>『我愛澎湖，澎湖愛我』</h1>
            洪店民宿有六人房，四人房和二人房，遠離塵囂的馬公鬧區，是個安靜又離鬧區不遠的澎湖小漁村。我們不只是提供住的舒適的房間，最主要的是提供人的服務，讓您像是住到老朋友家。
        </div>

        <br>
        <hr>
        <br>
        <div class="row">
            {{--外<--}}
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                {{--內--}}
                <p align="center"><b><font face="Arial" color="black" size="5" >民宿環境</font></b></p>
               <br>
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti enim modi! Et.</p>--}}
                
            </div>
        </div>


        <div class="owl-carousel owl-theme">
            <div class="item" style="width:300px" ><img src="img/about-main.jpg" >1</div>
            <div class="item" style="width:600px"><img src="img/storeview/ship.jpg" width="100">2</div>
            <div class="item" style="width:710px"><img src="img/storeview/view1.jpg" width="100">3</div>
            <div class="item" style="width:300px"><img src="img/about-main.jpg" width="100">4</div>
            <div class="item" style="width:300px">5</div>
            <div class="item" style="width:300px">6</div>
            <div class="item" style="width:300px">7</div>
            <div class="item" style="width:300px">8</div>
            <div class="item" style="width:300px">9</div>
            <div class="item" style="width:300px">10</div>
            <div class="item" style="width:300px">11</div>
            <div class="item" style="width:300px">12</div>
        </div>

        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                autoWidth:true,
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

