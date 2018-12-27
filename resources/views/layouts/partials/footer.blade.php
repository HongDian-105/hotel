<footer>
    <div class="container" >
        <div class="row">
            <div class="col-md-12 text-center" style="background-color:transparent">
                <div class="col-md-4" style="background-color:transparent"><font style="font-size:20px;" color="#696969" face="標楷體"><b>洪店民宿</b></font></div>
                <div class="col-md-2" style="background-color:transparent"><font style="font-size:20px;" color="#696969" face="標楷體"><b>關於洪店</b></font></div>
                <div class="col-md-2" style="background-color:transparent"><font style="font-size:20px;" color="#696969" face="標楷體"><b>房型介紹</b></font></div>
                <div class="col-md-2" style="background-color:transparent"><font style="font-size:20px;" color="#696969" face="標楷體"><b>訂房</b></font></div>
                <div class="col-md-2" style="background-color:transparent"><font style="font-size:20px;" color="#696969" face="標楷體"><b>回憶分享</b></font></div>
            </div>
        </div>
        <div class="row" style="padding-top:20px">
            <div class="col-md-12 text-center" style="background-color:transparent">
                <div class="col-md-4 text-left" style="background-color:transparent">
                    <i class="fa fa-map-marker fa-stack-0x fa-inverse"></i><span style="font-size:18px; color:#696969;font-family:DFKai-sb;text-align:left;">地址：</span><a href="https://goo.gl/J45rjh"target="_blank"><span style="font-size:17px; color:#696969;font-family:DFKai-sb;">澎湖縣白沙鄉中屯村10鄰中屯52之3號</span></a>
                    <br><i class="fa fa-phone fa-stack-0x fa-inverse"></i><span style="font-size:18px; color:#696969;font-family:DFKai-sb;text-align:left;">電話：06-993-3866</span>
                    <br><i class="fa fa-clock-o fa-stack-0x fa-inverse"></i><span style="font-size:18px; color:#696969;font-family:DFKai-sb;text-align:left;">營業時段：下午3:00 - 上午11:00</span>
                </div>
                <div class="col-md-2" style="background-color:transparent">
                    <a href="{{url('/about')}}"><font style="font-size:18px;" color="#696969" face="標楷體">民宿簡介</font></a>
                    <br><a href="{{url('/about')}}"><font style="font-size:18px;" color="#696969" face="標楷體">精選照片</font></a>
                </div>
                <div class="col-md-2" style="background-color:transparent">
                    <a href="{{url('/post')}}"><font style="font-size:18px;" color="#696969" face="標楷體">房價一覽表</font></a>
                    <br><a href="{{url('/room1')}}"><font style="font-size:18px;" color="#696969" face="標楷體">小管房</font></a>
                    <br><a href="{{url('/room2')}}"><font style="font-size:18px;" color="#696969" face="標楷體">土魠房</font></a>
                    <br><a href="{{url('/room3')}}"><font style="font-size:18px;" color="#696969" face="標楷體">石斑房</font></a>
                    <br><a href="{{url('/room4')}}"><font style="font-size:18px;" color="#696969" face="標楷體">紅魽房</font></a>
                    <br><a href="{{url('/room5')}}"><font style="font-size:18px;" color="#696969" face="標楷體">花枝丸房</font></a>
                    <br><a href="{{url('/room6')}}"><font style="font-size:18px;" color="#696969" face="標楷體">垵米房</font></a>
                </div>
                <div class="col-md-2" style="background-color:transparent">
                    <a href="{{url('/booking')}}"><font style="font-size:18px;" color="#696969" face="標楷體">快速訂房</font></a>
                </div>
                <div class="col-md-2" style="background-color:transparent">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-inline text-center">
                                <li>
                                    <a href="https://goo.gl/6Ccft4">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            @if (Route::has('login'))
                <div class="top-right links" style="text-align: center">
                    @auth
                        <a href="{{ url('/logout') }}">Logout</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <span style="font-size:0.7cm;">|</span>
                            <a href="{{ route('register') }}">Register</a>
                            @endauth
                </div>
            @endif
        </div>
    </div>
</footer>