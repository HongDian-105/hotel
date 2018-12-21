<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu<i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" a href="{{route('posts.index')}}">HongDian.com</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('posts.about')}}"><span style="font-size:0.7cm;"><span style="font-family:SimSun;">關於我們</span></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('posts.show')}}"><span style="font-size:0.7cm;"><span style="font-family:SimSun;">房型介紹</span></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('posts.booking')}}"><span style="font-size:0.7cm;"><span style="font-family:SimSun;">快速訂房</span></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('posts.contact')}}"><span style="font-size:0.7cm;"><span style="font-family:SimSun;">行程規劃</span></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
                <li>
                    <a href="{{route('posts.review')}}"><span style="font-size:0.7cm;"><span style="font-family:SimSun;">回憶紀錄</span></span></a>
                </li>
                <li>
                    <a><span style="font-size:0.7cm;">|</span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
