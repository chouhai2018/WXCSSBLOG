@extends('blog.layouts.master')
@section('content')
    <div class="wx-content wx-center" style="width: 100%;margin-top:46px">
        <div class="wx-card-4" style="width: 100%;margin-top: 66px">
            <header class="w3-container">
                <h1>{{ $postShow->title }}</h1>
            </header>
            <div class="w3-container">
                <div>
                    <img src=" {{ asset('storage/' . ltrim($postShow->pic,'public')) }} " alt=""
                         style="width:80%">

                </div>
                <div class="wx-text">
                    {{ $postShow->body }}
                </div>
            </div>

            <footer class="w3-container">
                <a href="/blog" type="button" class="wx-button wx-green">返回
                </a>
            </footer>

        </div>
    </div>
@endsection