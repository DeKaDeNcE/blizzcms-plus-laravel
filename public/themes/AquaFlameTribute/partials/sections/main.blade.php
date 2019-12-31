<div id="wrapper">
    <header id="main_header" class="clearfix">
    <div id="topbar">
        <nav>
        <a class="home" href=""><img src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/topbar-home.png" alt=""><span>Home</span></a></li>
        <p><a data-toggle="modal" href="#loginframe">Login</a> or <a data-toggle="modal" href="#registerframe">Create Account</a></p>
            <ul class="pull-right">
                <li><a class="account" href="">Account</a></li>
                <li><a class="explore" href="">Explore</a></li>
            </ul>
        </nav>
    </div>
    <div id="logo">
    </div>
    <div id="searchbar">
        <form>
            <input placeholder="Search characters, items, forums and more..." type="text">
        </form>
    </div>
    </header>
    <div id="content" class="clearfix">
        <div id="main">
            <div id="main_navigation">
                <nav>
                    <ul>
                        <li><a class="home" href="#"><span>Home</span></a></li>
                        <li><a class="media" href="#"><span>Media</span></a></li>
                        <li><a class="community" href="#"><span>Community</span></a></li>
                        <li><a class="status" href="#"><span>Status</span></a></li>
                        <li><a class="forums" href="#"><span>Forums</span></a></li>
                        <li><a class="services" href="#"><span>Services</span></a></li>
                    </ul>
                </nav>
            </div>
        @sections('home')
        </div>
        <div id="sidebar">
            <div id="user_control">
            <a data-toggle="modal" href="#loginframe">
            <div id="user_control_deco"></div>
            <p><span>Log in now</span> to enhance and<br />personalize your experience!</p></a>
            </div>
        @sections('sidebars')
        </div>

    </div>