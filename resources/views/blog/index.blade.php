<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
    body, h1, h2, h3, h4, h5 {
        font-family: "Raleway", sans-serif
    }
</style>
<body class="wx-light-grey">

<!-- wx-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="wx-content" style="max-width:1400px">

    <!-- Header -->
    <header class="wx-container wx-center wx-padding-32">
        <h1><b>MY BLOG</b></h1>
        <p>Welcome to the blog of <span class="wx-tag">unknown</span></p>
    </header>

    <!-- Grid -->
    <div class="wx-row">

        <!-- Blog entries -->
        <div class="wx-col l8 s12">
            <!-- Blog entry -->
            <div class="wx-card-4 wx-margin wx-white">
                <img src="/images/woods.jpg" alt="Nature" style="width:100%">
                <div class="wx-container">
                    <h3><b>TITLE HEADING</b></h3>
                    <h5>Title description, <span class="wx-opacity">April 7, 2014</span></h5>
                </div>

                <div class="wx-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem
                        euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
                        ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam
                        non fringilla.</p>
                    <div class="wx-row">
                        <div class="wx-col m8 s12">
                            <p>
                                <button class="wx-button wx-padding-large wx-white wx-border"><b>READ MORE &raquo;</b>
                                </button>
                            </p>
                        </div>
                        <div class="wx-col m4 wx-hide-small">
                            <p><span class="wx-padding-large wx-right"><b>Comments &nbsp;</b> <span
                                            class="wx-tag">0</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Blog entry -->
            <div class="wx-card-4 wx-margin wx-white">
                <img src="/images/bridge.jpg" alt="Norway" style="width:100%">
                <div class="wx-container">
                    <h3><b>BLOG ENTRY</b></h3>
                    <h5>Title description, <span class="wx-opacity">April 2, 2014</span></h5>
                </div>

                <div class="wx-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem
                        euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
                        ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam
                        non fringilla.</p>
                    <div class="wx-row">
                        <div class="wx-col m8 s12">
                            <p>
                                <button class="wx-button wx-padding-large wx-white wx-border"><b>READ MORE &raquo;</b>
                                </button>
                            </p>
                        </div>
                        <div class="wx-col m4 wx-hide-small">
                            <p><span class="wx-padding-large wx-right"><b>Comments &nbsp;</b> <span
                                            class="wx-badge">2</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->
        </div>

        <!-- Introduction menu -->
        <div class="wx-col l4">
            <!-- About Card -->
            <div class="wx-card wx-margin wx-margin-top">
                <img src="/images/avatar_g.jpg" style="width:100%">
                <div class="wx-container wx-white">
                    <h4><b>My Name</b></h4>
                    <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a
                        interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                </div>
            </div>
            <hr>

            <!-- Posts -->
            <div class="wx-card wx-margin">
                <div class="wx-container wx-padding">
                    <h4>Popular Posts</h4>
                </div>
                <ul class="wx-ul wx-hoverable wx-white">
                    <li class="wx-padding-16">
                        <img src="/images/workshop.jpg" alt="Image" class="wx-left wx-margin-right"
                             style="width:50px">
                        <span class="wx-large">Lorem</span><br>
                        <span>Sed mattis nunc</span>
                    </li>
                    <li class="wx-padding-16">
                        <img src="/images/gondol.jpg" alt="Image" class="wx-left wx-margin-right" style="width:50px">
                        <span class="wx-large">Ipsum</span><br>
                        <span>Praes tinci sed</span>
                    </li>
                    <li class="wx-padding-16">
                        <img src="/images/skies.jpg" alt="Image" class="wx-left wx-margin-right" style="width:50px">
                        <span class="wx-large">Dorum</span><br>
                        <span>Ultricies congue</span>
                    </li>
                    <li class="wx-padding-16 wx-hide-medium wx-hide-small">
                        <img src="/images/rock.jpg" alt="Image" class="wx-left wx-margin-right" style="width:50px">
                        <span class="wx-large">Mingsum</span><br>
                        <span>Lorem ipsum dipsum</span>
                    </li>
                </ul>
            </div>
            <hr>

            <!-- Labels / tags -->
            <div class="wx-card wx-margin">
                <div class="wx-container wx-padding">
                    <h4>Tags</h4>
                </div>
                <div class="wx-container wx-white">
                    <p><span class="wx-tag wx-black wx-margin-bottom">Travel</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">New York</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">London</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">IKEA</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">NORWAY</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">DIY</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">Ideas</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">Baby</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">Family</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">News</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">Clothing</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">Shopping</span>
                        <span class="wx-tag wx-light-grey wx-small wx-margin-bottom">Sports</span> <span
                                class="wx-tag wx-light-grey wx-small wx-margin-bottom">Games</span>
                    </p>
                </div>
            </div>

            <!-- END Introduction Menu -->
        </div>

        <!-- END GRID -->
    </div>
    <br>

    <!-- END wx-content -->
</div>

<!-- Footer -->
<footer class="wx-container wx-dark-grey wx-padding-32 wx-margin-top">
    <button class="wx-button wx-black wx-disabled wx-padding-large wx-margin-bottom">Previous</button>
    <button class="wx-button wx-black wx-padding-large wx-margin-bottom">Next &raquo;</button>
    <p>Make By WXCSS</p>
</footer>

</body>
</html>