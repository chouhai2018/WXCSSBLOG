<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    h1, h2, h3, h4, h5, h6 {
        font-family: "微软雅黑"
    }

    body {
        font-family: "微软雅黑"
    }
</style>

<body class="wx-light-grey">

<!-- Navbar -->
<div class="wx-top">
    <div class="wx-bar wx-black wx-card">
        <a class="wx-bar-item wx-button wx-padding-large wx-hide-medium wx-hide-large wx-right"
           href="javascript:void(0)" onclick="myFunction('navDemo')" id="myClick"><i
                    class="fa fa-bars"></i></a>
        <a href="#" class="wx-bar-item wx-button wx-padding-large">主页</a>
        <a href="#" class="wx-bar-item wx-button wx-padding-large wx-hide-small">博文</a>
        <a href="#" class="wx-bar-item wx-button wx-padding-large wx-hide-small">图库</a>
        <a href="#" class="wx-bar-item wx-button wx-padding-large wx-hide-small">关于我</a>
        <div class="wx-dropdown-hover wx-hide-small">
            <button class="wx-padding-large wx-button" title="More">管理 <i class="fa fa-caret-down"></i></button>
            <div class="wx-dropdown-content wx-bar-block wx-card-4">
                <a href="#" class="wx-bar-item wx-button">文章管理</a>
                <a href="#" class="wx-bar-item wx-button">图库管理</a>
                <a href="#" class="wx-bar-item wx-button">站点设置</a>
            </div>
        </div>
        <a href="javascript:void(0)" class="wx-padding-large wx-hover-red wx-hide-small wx-right"><i
                    class="fa fa-search"></i></a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="wx-bar-block wx-black wx-hide wx-hide-large wx-hide-medium wx-top" style="margin-top:46px">
    <a href="#" class="wx-bar-item wx-button wx-padding-large">博文</a>
    <a href="#" class="wx-bar-item wx-button wx-padding-large">图库</a>
    <a href="#" class="wx-bar-item wx-button wx-padding-large">关于我</a>
</div>


<!-- wx-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

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
            <div class="wx-container wx-white wx-margin wx-padding-large">
                <div class="wx-center">
                    <h3>TITLE HEADING</h3>
                    <h5>Title description, <span class="wx-opacity">May 2, 2016</span></h5>
                </div>

                <div class="wx-justify">
                    <img src="/images/girl_hat.jpg" alt="Girl Hat" style="width:100%" class="wx-padding-16">
                    <p><strong>More Hats!</strong> I am crazy about hats these days. Some text about this blog entry.
                        Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed
                        mattis nunc id lorem euismod placerat. Vivamus porttitor
                        magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.
                        Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue gravida diam non fringilla.</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco.</p>
                    <p class="wx-left">
                        <button class="wx-button wx-white wx-border" onclick="likeFunction(this)"><b><i
                                        class="fa fa-thumbs-up"></i> Like</b></button>
                    </p>
                    <p class="wx-right">
                        <button class="wx-button wx-black" onclick="myFunction('demo1')" id="myClick"><b>Replies
                                &nbsp;</b> <span class="wx-tag wx-white">1</span></button>
                    </p>
                    <p class="wx-clear"></p>
                    <div class="wx-row wx-margin-bottom" id="demo1" style="display:none">
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
            <hr>

            <!-- Blog entry -->
            <div class="wx-container wx-white wx-margin wx-padding-large">
                <div class="wx-center">
                    <h3>TITLE HEADING</h3>
                    <h5>Title description, <span class="wx-opacity">April 23, 2016</span></h5>
                </div>

                <div class="wx-justify">
                    <img src="/images/man_hat.jpg" alt="Men in Hats" style="width:100%" class="wx-padding-16">
                    <p><strong>Hats!</strong> The trend this summer is hats for men!</p>
                    <p>Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae,
                        convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim,
                        ac accumsan tortor cursus at. Phasellus sed ultricies
                        mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum,
                        porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <p class="wx-left">
                        <button class="wx-button wx-white wx-border" onclick="likeFunction(this)"><b><i
                                        class="fa fa-thumbs-up"></i> Like</b></button>
                    </p>
                    <p class="wx-right">
                        <button class="wx-button wx-black" onclick="myFunction('demo2')"><b>Replies &nbsp;</b> <span
                                    class="wx-tag wx-white">2</span></button>
                    </p>
                    <p class="wx-clear"></p>

                    <!-- Example of comment field -->
                    <div id="demo2" style="display:none">
                        <div class="wx-row">
                            <hr>
                            <div class="wx-col l2 m3">
                                <img src="/images/girl_train.jpg" style="width:90px;">
                            </div>
                            <div class="wx-col l10 m9">
                                <h4>Amber <span class="wx-opacity wx-medium">April 26, 2015, 10:52 PM</span></h4>
                                <p>Love your blog page! Simply the best! Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.</p><br>
                            </div>
                        </div>
                        <div class="wx-row wx-margin-bottom">
                            <div class="wx-col l2 m3">
                                <img src="/images/girl.jpg" style="width:90px;">
                            </div>
                            <div class="wx-col l10 m9">
                                <h4>Angie <span class="wx-opacity wx-medium">April 23, 2015, 9:12 PM</span></h4>
                                <p>Love hats!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog entry -->
            <div class="wx-container wx-white wx-margin wx-padding-large">
                <div class="wx-center">
                    <h3>TITLE HEADING</h3>
                    <h5>Title description, <span class="wx-opacity">April 7, 2016</span></h5>
                </div>

                <div class="wx-justify">
                    <img src="/images/runway.jpg" alt="Runway" style="width:100%" class="wx-padding-16">
                    <p><strong>Dont miss!</strong> The runway in New York City this weekend is gonna be legendary!</p>
                    <p>Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae,
                        convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim,
                        ac accumsan tortor cursus at. Phasellus sed ultricies
                        mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum,
                        porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <p class="wx-left">
                        <button class="wx-button wx-white wx-border" onclick="likeFunction(this)"><b><i
                                        class="fa fa-thumbs-up"></i> Like</b></button>
                    </p>
                    <p class="wx-right">
                        <button class="wx-button wx-black" onclick="myFunction('demo3')"><b>Replies &nbsp;</b> <span
                                    class="wx-tag wx-white">3</span></button>
                    </p>
                    <p class="wx-clear"></p>

                    <!-- Example of comment field -->
                    <div id="demo3" style="display:none">
                        <hr>
                        <div class="wx-row wx-margin-bottom">
                            <div class="wx-col l2 m3">
                                <img src="/images/girl_mountain.jpg" style="width:90px;">
                            </div>
                            <div class="wx-col l10 m9">
                                <h4>Jane <span class="wx-opacity wx-medium">April 10, 2015, 7:22 PM</span></h4>
                                <p>That was a great runway show! Thanks for everything.</p>
                            </div>
                        </div>
                        <div class="wx-row wx-margin-bottom">
                            <div class="wx-col l2 m3">
                                <img src="/images/boy.jpg" style="width:90px;">
                            </div>
                            <div class="wx-col l10 m9">
                                <h4>John <span class="wx-opacity wx-medium">April 8, 2015, 10:32 PM</span></h4>
                                <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                        <div class="wx-row wx-margin-bottom">
                            <div class="wx-col l2 m3">
                                <img src="/images/girl_hood.jpg" style="width:90px;">
                            </div>
                            <div class="wx-col l10 m9">
                                <h4>Anja <span class="wx-opacity wx-medium">April 7, 2015, 9:12 PM</span></h4>
                                <p>Cant wait for the runway to start!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END BLOG ENTRIES -->
        </div>

        <!-- About/Information menu -->
        <div class="wx-col l4">
            <!-- About Card -->
            <div class="wx-white wx-margin">
                <img src="/images/avatar_girl2.jpg" alt="Jane" style="width:100%" class="wx-grayscale">
                <div class="wx-container wx-black">
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
                        <img src="/images/workshop.jpg" alt="Image" class="wx-left wx-margin-right" style="width:50px">
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
                    <div class="wx-container wx-display-container wx-light-grey wx-section" style="height:200px">
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
                <div class="wx-container wx-white" style="margin:15px">
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
                <div class="wx-row-padding wx-white" style="margin:15px">
                    <div class="wx-col s6">
                        <p><img src="/images/jeans.jpg" alt="Jeans" style="width:100%"></p>
                        <p><img src="/images/team1.jpg" alt="Jeans" style="width:100%"></p>
                    </div>
                    <div class="wx-col s6">
                        <p><img src="/images/avatar_hat.jpg" alt="Men in Hats" style="width:100%" class="wx-grayscale">
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
                    <p><input class="wx-input wx-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
                    <p>
                        <button type="button" onclick="document.getElementById('subscribe').style.display='block'"
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
</div>

<!-- Footer -->
<footer class="wx-container wx-dark-grey" style="padding:32px">
    <a href="#" class="wx-button wx-black wx-padding-large wx-margin-bottom"><i
                class="fa fa-arrow-up wx-margin-right"></i>To the top</a>
    <p>Make by wx.css</p>
</footer>

<script>


    // Toggle between hiding and showing blog replies/comments
    document.getElementById("myClick").click();

    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("wx-show") == -1) {
            x.className += " wx-show";
        } else {
            x.className = x.className.replace(" wx-show", "");
        }
    }

    function likeFunction(x) {
        x.style.fontWeight = "bold";
        x.innerHTML = "&#10003; Liked";
    }


</script>

</body>
</html>