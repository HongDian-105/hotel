<footer>
    <div class="container" >
        <div class="row">
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
                                    <a href="{{ route('register') }}">Register</a>
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