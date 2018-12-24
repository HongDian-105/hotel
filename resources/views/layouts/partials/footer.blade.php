<footer>
    <div class="container" >
        <div class="row">

            <div class="col-md-12"style="background-color:transparent;">
                <div class="col-md-6">
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="cad-body">
                            <ul class="list-inline text-left">
                                <li>
                                    <i class="fa fa-map-marker fa-stack-0x fa-inverse"></i><span style="font-size:20px; color:#888888;font-family:DFKai-sb;text-align:left;"> 地址：</span><a href="https://goo.gl/J45rjh"target="_blank"><span style="font-size:20px; color:#888888;font-family:DFKai-sb;">澎湖縣白沙鄉中屯村10鄰中屯52之3號</span></a>
                                    <br><i class="fa fa-phone fa-stack-0x fa-inverse"></i><span style="font-size:20px; color:#888888;font-family:DFKai-sb;text-align:left;"> 電話：06 993 3866</span>
                                    <br><i class="fa fa-clock-o fa-stack-0x fa-inverse"></i><span style="font-size:20px; color:#888888;font-family:DFKai-sb;text-align:left;"> 營業時段：下午3:00 - 上午11:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <br>
                    {{--<li>
                        <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>--}}
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
                <div>

                    <p class="copyright text-muted">Copyright &copy; My Website 2018</p>
                    <br>
                    <div>
                        @if (Route::has('login'))
                            <div class="top-right links" style="text-align: center">
                                @auth
                                    <a href="{{ url('/logout') }}">Logout</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                @endauth
                            </div>
                        @endif
                    </div>

                </div>


                <!-- Pager -->
                <ul class="pager">
                    <li class="next"></li>
                </ul>
            </div>
        </div>
    </div>
</footer>