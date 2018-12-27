@extends('layouts.master')
@section('title', '洪店民宿-回憶紀錄')
@section('content')
    <head>
        <style>
            .pic {
                position:relative;
                width: 50px;
                height: 50px;
                overflow: hidden;
                border-radius:50%;
            }
            .pic img {
                width: 100%;
                height: auto;

            }
        </style>
    </head>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/view9.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>回憶紀錄</h1>
                        <hr class="small">
                        <span class="subheading">Create Good Memories Today,So That You Can Have A Good Past.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card col-md-1" style="border-style:none;background-color:transparent">
                    <div class="card-body" style="padding-top:1px;">
                        <div class="pic">
                            <img  src="img/HongDian.jpg"  class="center-block " alt="111">
                        </div>
                    </div>
                </div>
                <div class="card col-md-8" style="border-style: none; background-color:transparent">
                    <div class="card-body" style="padding-top:1px;">
                        <font><b>洪店民宿_HongDian</b></font>
                        <br>
                        <font  size="3" color="gray">Last updated 10 mins ago</font>
                    </div>
                </div>

                <div class="card col-md-12" style="border-style:none;background-color:transparent">
                    <div class="card-body" style="padding-top:1px;">

                        <div class="card-deck">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Instagram In My House~</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">我們利用嵌入社群平台的技術，把IG嵌入我們系統中!好讓大家一起共享我們美好的回憶~~
                                        <br>
                                        <br>
                                        <a href="#view">#澎湖景點</a>
                                        &nbsp;
                                        <a href="#city">#馬公</a>
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">The Beautiful Island~</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">位於台灣西部外海的台灣海峽上、由六十四個小島組成的澎湖群島，數百年來先後為不同的殖民政權掌控，包括荷蘭人、法國人和日本人。
                                        <a href="#place">#澎湖秘境</a>
                                        &nbsp;
                                        <a href="#island1">#吉貝島</a>
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-titled">Welcome To My Home~</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">美好的時光總是過得特別快，若不善用一些技術來保存，那些美好的時光就直接流逝了。
                                        <br>
                                        <br>
                                        <a href="#food">#澎湖美食</a>
                                        &nbsp;
                                        <a href="#island2">#七美島</a>
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--1140px--}}

    <div class="container" id="food">
        <!-- InstaWidget -->
        <a href="https://instawidget.net/v/tag/%E6%BE%8E%E6%B9%96%E7%BE%8E%E9%A3%9F" id="link-18ae37ba8e4bcd1c44fa36ea414d73aae603db6f214c196150663c985a0297d3">#澎湖美食</a>
        <script src="https://instawidget.net/js/instawidget.js?u=18ae37ba8e4bcd1c44fa36ea414d73aae603db6f214c196150663c985a0297d3&width=1140px"></script>
    </div>

    <div class="container" id="view">
        <!-- InstaWidget -->
        <a href="https://instawidget.net/v/tag/%E6%BE%8E%E6%B9%96%E6%99%AF%E9%BB%9E" id="link-9f416c0fa812a7c0fe6cb2f5e52cf7c336adf0f3237401a30c1d71f03d617229">#澎湖景點</a>
        <script src="https://instawidget.net/js/instawidget.js?u=9f416c0fa812a7c0fe6cb2f5e52cf7c336adf0f3237401a30c1d71f03d617229&width=1140px"></script>
    </div>

    <div class="container" id="place">
        <!-- InstaWidget -->
        <a href="https://instawidget.net/v/tag/%E6%BE%8E%E6%B9%96%E7%A7%98%E5%A2%83" id="link-1ce6288a773d994e710bd3773ab00d8000919a7a80d88cc393a1f490fa925044">#澎湖秘境</a>
        <script src="https://instawidget.net/js/instawidget.js?u=1ce6288a773d994e710bd3773ab00d8000919a7a80d88cc393a1f490fa925044&width=1140px"></script>
    </div>

    <div class="container" id="city">
        <!-- InstaWidget -->
        <a href="https://instawidget.net/v/tag/%E9%A6%AC%E5%85%AC" id="link-22ffd8e9b3ba6bd7436bd881eb332258fadae44d93b1fb615a8f84705e3f8a89">#馬公</a>
        <script src="https://instawidget.net/js/instawidget.js?u=22ffd8e9b3ba6bd7436bd881eb332258fadae44d93b1fb615a8f84705e3f8a89&width=1140px"></script>
    </div>

    <div class="container" id="island1">
        <!-- InstaWidget -->
        <a href="https://instawidget.net/v/tag/%E5%90%89%E8%B2%9D%E5%B3%B6" id="link-080a6936a11d4119f4d939f2bc704e27f9617e55cb49703d4f292a249067005c">#吉貝島</a>
        <script src="https://instawidget.net/js/instawidget.js?u=080a6936a11d4119f4d939f2bc704e27f9617e55cb49703d4f292a249067005c&width=1140px"></script>
    </div>

    <div class="container" id="island2">
        <!-- InstaWidget -->
        <a href="https://instawidget.net/v/tag/%E4%B8%83%E7%BE%8E%E5%B3%B6" id="link-b24ab00a3e26162939bd9b8c0123bd0ba711e3104b5d76fbdd24243e5f479931">#七美島</a>
        <script src="https://instawidget.net/js/instawidget.js?u=b24ab00a3e26162939bd9b8c0123bd0ba711e3104b5d76fbdd24243e5f479931&width=1140px"></script>
    </div>

@endsection
