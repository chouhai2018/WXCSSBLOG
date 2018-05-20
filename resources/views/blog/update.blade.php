@extends('blog.layouts.master')
@section('content')
    <div class="wx-content" style="max-width:2000px;margin-top:46px">
        <div class="wx-hover-shadow" style="width: 100%">
            <div class="wx-center"><br>
                <span class="wx-text"><h3>更新博文</h3></span>
            </div>

            <form class="wx-container" method="post" action="/blog/{{ $blogs->id }}/update" enctype="multipart/form-data">
                @csrf
                <div class="wx-section">
                    <label><b>标题</b></label>
                    <input class="wx-input wx-border wx-margin-bottom" type="text" placeholder="请输入标题"
                           name="title" value="{{ $blogs->title }}" required>
                    <label><b>内容</b></label>
                    <textarea class="wx-input wx-border wx-margin-bottom" style="height: 200px" name="body"
                              id="editor">{{ $blogs->body }}</textarea>
                    <img src=" {{ asset('storage/' . ltrim($blogs->pic,'public')) }} " alt=""
                         style="width:100%">
                    <input class="wx-input  wx-block wx-section wx-padding" type="file" name="pic" id="pic"
                           accept=".jpg,.png"/>
                    <button class="wx-button  wx-block wx-green wx-section wx-padding" type="submit">更新</button>

                </div>
                <hr>
                @if ($errors->any())
                    <hr>
                    <div class="wx-panel wx-red">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>

            <div class="wx-container wx-border-top wx-padding-16 wx-light-grey">
                <a href="/blog" type="button"
                   class="wx-button wx-red">取消
                </a>
            </div>
        </div>
    </div>
@endsection