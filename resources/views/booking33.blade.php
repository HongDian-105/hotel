@extends('layouts.masterbook')
@section('title','澎湖民宿推薦「洪店民宿」')
@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/view7.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>快速訂房</h1>
                        <hr class="small">
                        <span class="subheading" >Are You Ready->To Going Booking</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <form action="{{ route('booking.check') }}"  role="form" >
            {{ csrf_field() }}
        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>對澎湖感到心動不已了嗎？現在動動手填寫資料就可以快速完成訂房手續囉！</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <div class="card">
                    <div class="card-header">
                        步驟一、選擇訂房日期
                    </div>
                    <div class="card-body">
                        <div class="form-group row" style="margin-top: 15px; ">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('入住時間：') }}</label>

                            <input class="form-control col-md-6" type="text" name="StartTime" value="{{$start}}"readonly >
                            {{--<input class="form-control col-md-6 hidden" type="text" name="EndTime" value="{{$start}}"readonly >--}}
                            <div>&nbsp&nbsp&nbsp</div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-header">
                        步驟二、選擇房型
                    </div>
                    <div class="card-body">
                        <div class="form-group row" style="margin-top: 15px; ">
                            @if(count($results)>0)
                                @foreach($results as $result)
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('房型名稱：') }}</label>

                                    {{--<input class="form-control col-md-6 hidden" type="text" name="rooms_id"  value="{{$result->id}}"readonly >--}}
                                    <input class="form-control col-md-6" type="text" name="chose" value="{{$result->name}}"readonly >

                                    <div>&nbsp&nbsp&nbsp</div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-header">
                        步驟三、輸入個人資料
                    </div>
                    <div class="card-body">

                            <div class="form-group row" style="margin-top: 5px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('姓名：') }}</label>

                                <input type="text" class="form-control" placeholder="姓名" name="name">

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('信箱：') }}</label>

                                <input type="email" class="form-control" placeholder="Email" name="email">

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('電話：') }}</label>

                                <input type="tel" class="form-control" placeholder="電話號碼" name="phone">

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('國籍：') }}</label>

                                <input type="text" class="form-control" placeholder="國家" name="country">

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <div class="form-group row" style="margin-top: 15px; ">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('地址：') }}</label>

                                <input type="text" class="form-control" placeholder="地址" name="address">

                                <div>&nbsp&nbsp&nbsp</div>
                            </div>

                            <br>

                            <button type="submit" class="btn btn-primary col-md-12 ">
                                {{ __('送出') }}
                            </button>

                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>
@endsection