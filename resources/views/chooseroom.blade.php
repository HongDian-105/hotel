@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')
    {{--css設計--}}

    <header class="intro-header" style="background-image: url('img/view4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>選擇房型</h1>
                        <hr class="small">
                        <span class="subheading">請選擇想要的房型</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="row">
        <div class="col-lg-12">
            <div style="text-align: center">
            <tbody>
            @foreach($rooms as $rs)
            <tr>
                <td>{{$rs->name}}</td>
                <td>{{$rs->price}}</td>
                <td>{{$rs->pic}}</td>
                <td>
                    <div>
                        <form>
                            <button class="btn btn-link">選擇</button>
                        </form>

                    </div>
                </td>
            </tr>
            </tbody>
        @endforeach
            </div>
        </div>
    </div>

@endsection