@extends('layouts.master')
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
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>對澎湖感到心動不已了嗎？現在動動手填寫資料就可以快速完成訂房手續囉！</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form action="{{ route('booking.store') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="text" class="form-control" placeholder="姓名" name="name">
                        </div>
                    </div>
                    <br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                    <br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="tel" class="form-control" placeholder="電話號碼" name="phone">
                        </div>
                    </div>
                    <br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="text" class="form-control" placeholder="國家" name="country">
                        </div>
                    </div>
                    <br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="text" class="form-control" placeholder="地址" name="address">
                        </div>
                    </div>
                    <br>
                    <div style="text-align:left">
                        <input type="date" name="StartTime" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="2019-01-31">
                        <label>點擊向下箭頭可開啟詳細日期</label>
                    </div>
                    <div style="text-align:left">
                        <input type="date" name="EndTime" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="2019-01-31">
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" value="送出" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection