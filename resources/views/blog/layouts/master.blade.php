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
        <a href="javascript:void(0)" class="wx-padding-large wx-hover-orange wx-hide-small wx-right wx-red"><i
                    class="fa fa-plus-circle"> 新建</i></a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="wx-bar-block wx-black wx-hide wx-hide-large wx-hide-medium wx-top" style="margin-top:46px">
    <a href="#" class="wx-bar-item wx-button wx-padding-large">博文</a>
    <a href="#" class="wx-bar-item wx-button wx-padding-large">图库</a>
    <a href="#" class="wx-bar-item wx-button wx-padding-large">关于我</a>
    <a href="#" class="wx-bar-item wx-button wx-padding-large">发博文</a>
</div>


<!-- wx-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
    @yield('content')
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