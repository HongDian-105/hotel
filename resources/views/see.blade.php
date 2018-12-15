@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')
    <style>
        .vertical-mode {
            writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
        }
    </style>
    <header class="intro-header" style="background-image: url('img/view4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>預覽畫面</h1>
                        <hr class="small">
                        <span class="subheading">請檢查訂購資訊是否正確</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <input type="text" value="<?php echo $_POST["c_name"];?>">
    <input type="text" value="<?php echo $_POST["c_email"];?>">
    <input type="text" value="<?php echo $_POST["c_phone"];?>">
    <input type="text" value="<?php echo $_POST["c_country"];?>">
    <input type="text" value="<?php echo $_POST["c_address"];?>">
    <input type="text" value="<?php echo $_POST["bookdate"];?>">
    <input type="text" value="<?php echo $_POST["bookdate2"];?>">

@endsection