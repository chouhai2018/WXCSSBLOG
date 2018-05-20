@extends('blog.layouts.master')
@section('content')
    <!-- Image header -->
    <header class="wx-display-container wx-wide" id="home">
        <img class="wx-image" src="/images/jane.jpg" alt="Fashion Blog" width="1600" height="1060">
        <div class="wx-display-left wx-padding-large">
            <h1 class="wx-text-white">WX CSS 的</h1>
            <h1 class="wx-jumbo wx-text-white wx-hide-small"><b>时尚博客</b></h1>
            <h6>
                <button class="wx-button wx-white wx-padding-large wx-large wx-opacity wx-hover-opacity-off"
                        onclick="document.getElementById('subscribe').style.display='block'">关于我
                </button>
            </h6>
        </div>
    </header>

    <!-- Grid -->
    <div class="wx-row wx-padding wx-border">

        <!-- Blog entries -->
        <div class="wx-col l8 s12">

            <!-- Blog entry -->
            @foreach($blogs as $blogs)

                <div class="wx-container wx-white wx-margin wx-padding-large wx-btn" style="padding: 0;width: 97%">
                    <div class="wx-center">
                        <h3>{{ $blogs->title }}</h3>
                        <h5>Title description, <span
                                    class="wx-opacity">{{ date ("F j, Y", strtotime($blogs->created_at)) }}</span>
                        </h5>
                    </div>

                    <div class="wx-justify">

                        <img src=" {{ asset('storage/' . ltrim($blogs->pic,'public')) }} " alt="" style="width:100%">
                        <div class="wx-text wx-center wx-margin">
                            <div class="wx-text" style="align-content: center"> {{ $blogs->body }}</div>
                        </div>
                        <div class="wx-margin">
                            <p class="wx-left">
                                <button class="wx-button wx-white wx-border" onclick="likeFunction(this)"><b><i
                                                class="fa fa-thumbs-up"></i> Like</b></button>
                            </p>
                            <p class="wx-right">
                                <button class="wx-button wx-black" onclick="myFunction( {{$blogs->id}} )" id="myClick">
                                    <b>Replies
                                        &nbsp;</b> <span class="wx-tag wx-white">1</span></button>
                            </p>
                            <p class="wx-clear"></p>
                            <div class="wx-row wx-margin-bottom" id="{{$blogs->id}}" style="display:none">
                                <hr>
                                <div class="wx-col l2 m3">
                                    <img src="/images/avatar_smoke.jpg" style="width:90px;">
                                </div>
                                <div class="wx-col l10 m9">
                                    <h4>George <span class="wx-opacity wx-medium">May 3, 2015, 6:32 PM</span></h4>
                                    <p>Great blog post! Following</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

            @endforeach


            <div class="wx-right">
                @if($page!='a')
                    {{ $page->links() }}
                @endif {{--使用分页--}}
            </div>
            <!-- END BLOG ENTRIES -->
        </div>

        <!-- About/Information menu -->
        <div class="wx-col l4">
            <!-- About Card -->
            <div class="wx-white wx-margin">
                <img src="/images/avatar_girl2.jpg" alt="Jane" style="width:100%" class="wx-grayscale">
                <div class="wx-container wx-black ">
                    <h4>关于我</h4>
                    <p>WX CSS是一个我自己用的CSS,根据w3 css修改而得,WX CSS是免费的,随意去用,随意去修改,随意去发布</p>
                </div>
            </div>
            <hr>

            <!-- Posts -->
            <div class="wx-white wx-margin">
                <div class="wx-container wx-padding wx-black">
                    <h4>最新发表文章</h4>
                </div>
                <ul class="wx-ul wx-hoverable wx-white">
                    <li class="wx-padding-16">
                        <img src="/images/avatar_smoke.jpg" alt="Image" class="wx-left wx-margin-right"
                             style="width:50px">
                        <span class="wx-large">王旭</span>
                        <br>
                        <span>wx css 最新用法</span>
                    </li>
                    <li class="wx-padding-16">
                        <img src="/images/bandmember.jpg" alt="Image" class="wx-left wx-margin-right"
                             style="width:50px">
                        <span class="wx-large">王旭</span>
                        <br>
                        <span>wx css 最新用法</span>
                    </li>
                    <li class="wx-padding-16">
                        <img src="/images/workshop.jpg" alt="Image" class="wx-left wx-margin-right"
                             style="width:50px">
                        <span class="wx-large">王旭</span>
                        <br>
                        <span>wx css 最新用法</span>
                    </li>
                    <li class="wx-padding-16">
                        <img src="/images/avatar_smoke.jpg" alt="Image" class="wx-left wx-margin-right wx-sepia"
                             style="width:50px">
                        <span class="wx-large">王旭</span>
                        <br>
                        <span>wx css 最新用法</span>
                    </li>
                </ul>
            </div>
            <hr>

            <!-- Advertising -->
            <div class="wx-white wx-margin">
                <div class="wx-container wx-padding wx-black">
                    <h4>广告位</h4>
                </div>
                <div class="wx-container wx-white">
                    <div class="wx-container wx-display-container wx-light-grey wx-section"
                         style="height:200px">
                        <span class="wx-display-middle">哇偶,我没广告哦</span>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Tags -->
            <div class="wx-white wx-margin">
                <div class="wx-container wx-padding wx-black">
                    <h4>热度标签</h4>
                </div>
                <div class="wx-container wx-white wx-margin">
                    <p>
                        <span class="wx-tag wx-black wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">WXCSS用法</span>
                    </p>
                </div>
            </div>
            <hr>

            <!-- Inspiration -->
            <div class="wx-white wx-margin">
                <div class="wx-container wx-padding wx-black">
                    <h4>最新图片</h4>
                </div>
                <div class="wx-row-padding wx-white wx-margin">
                    <div class="wx-col s6">

                        <p><img src="/images/jeans.jpg" class="wx-btn wx-ripple" alt="Jeans"
                                style="width: 100%;padding: 0"></p>

                        <p><img src="/images/team1.jpg" alt="Jeans" style="width:100%"></p>
                    </div>
                    <div class="wx-col s6">
                        <p><img src="/images/avatar_hat.jpg" alt="Men in Hats" style="width:100%"
                                class="wx-grayscale">
                        </p>
                        <p><img src="/images/team4.jpg" alt="Jeans" style="width:100%"></p>
                    </div>
                </div>
            </div>
            <hr>

            <div class="wx-white wx-margin">
                <div class="wx-container wx-padding wx-black">
                    <h4>更多的我</h4>
                </div>
                <div class="wx-container wx-xlarge wx-padding">
                    <i class="fa fa-facebook-official wx-hover-opacity"></i>
                    <i class="fa fa-instagram wx-hover-opacity"></i>
                    <i class="fa fa-snapchat wx-hover-opacity"></i>
                    <i class="fa fa-pinterest-p wx-hover-opacity"></i>
                    <i class="fa fa-twitter wx-hover-opacity"></i>
                    <i class="fa fa-linkedin wx-hover-opacity"></i>
                </div>
            </div>
            <hr>

            <!-- Subscribe -->
            <div class="wx-white wx-margin">
                <div class="wx-container wx-padding wx-black">
                    <h4>订阅</h4>
                </div>
                <div class="wx-container wx-white">
                    <p>输入您的邮件,最新的文章将发送到您的邮箱</p>
                    <p><input class="wx-input wx-border" type="text" placeholder="Enter e-mail"
                              style="width:100%"></p>
                    <p>
                        <button type="button"
                                onclick="document.getElementById('subscribe').style.display='block'"
                                class="wx-button wx-block wx-red">订阅
                        </button>
                    </p>
                </div>
            </div>

            <!-- END About/Intro Menu -->
        </div>

        <!-- END GRID -->
    </div>

    <!-- END wx-content -->
    </div>

    <!-- Subscribe Modal -->
    <div id="subscribe" class="wx-modal wx-animate-opacity">
        <div class="wx-modal-content" style="padding:32px">
            <div class="wx-container wx-white">
                <i onclick="document.getElementById('subscribe').style.display='none'"
                   class="fa fa-remove wx-transparent wx-button wx-xlarge wx-right"></i>
                <h2 class="wx-wide">SUBSCRIBE</h2>
                <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
                <p><input class="wx-input wx-border" type="text" placeholder="Enter e-mail"></p>
                <button type="button" class="wx-button wx-block wx-padding-large wx-red wx-margin-bottom"
                        onclick="document.getElementById('subscribe').style.display='none'">Subscribe
                </button>
            </div>
        </div>
@endsection()