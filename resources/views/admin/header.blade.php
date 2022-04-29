<!-- HEADER DESKTOP-->
<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="#">
                    <span class="text-white h1" style="font-family: 'Acme', sans-serif !important;">Surveyee</span>
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <li>
                        <a href="{{route('admin.index')}}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="bot-line"></span>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin.survey.index')}}">
                            <i class="fas fa-th"></i>Surveys
                            <span class="bot-line"></span>
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="index.html">New surveys</a>
                            </li>
                            <li>
                                <a href="index2.html">Popular surveys</a>
                            </li>
                            <li>
                                <a href="index3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.category.index')}}">
                            <i class="fas fa-list-alt"></i>
                            <span class="bot-line"></span>Categories</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-comments"></i>
                            <span class="bot-line"></span>Comments</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-question-circle"></i>
                            <span class="bot-line"></span>FAQ</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-male"></i>
                            <span class="bot-line"></span>Attendances</a>
                    </li>

                    <li class="has-sub">
                        <a href="#">
                            <i class="fas fa-share"></i>Social
                            <span class="bot-line"></span>
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="index.html"> 
                                    <img style="width: 2rem;" src="{{asset('adminAssets')}}/svg/icons8-github.svg" alt=""> Github
                                </a>
                            </li>
                            <li>
                                <a href="index.html"> 
                                    <img style="width: 2rem;" src="{{asset('adminAssets')}}/svg/icons8-google.svg" alt=""> Google
                                </a>
                            </li>
                            <li>
                                <a href="index.html"> 
                                    <img style="width: 2rem;" src="{{asset('adminAssets')}}/svg/icons8-linkedin.svg" alt=""> Linkedin
                                </a>
                            </li>
                            <li>
                                <a href="index.html"> 
                                    <img style="width: 2rem;" src="{{asset('adminAssets')}}/svg/icons8-facebook.svg" alt=""> Facebook
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="{{asset('adminAssets')}}/images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="{{asset('adminAssets')}}/images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="header-mobile header-mobile-2 d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <span class="text-white h1" style="font-family: 'Acme', sans-serif !important;">Surveyee</span>
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Surveys</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">New surveys</a>
                        </li>
                        <li>
                            <a href="index2.html">Popular surveys</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-list-alt"></i>
                        <span class="bot-line"></span>Categories</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-comments"></i>
                        <span class="bot-line"></span>Comments</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-question-circle"></i>
                        <span class="bot-line"></span>FAQ</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-male"></i>
                        <span class="bot-line"></span>Attendances</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-share"></i>Social</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html"> 
                                <img style="width: 2rem;" src="{{asset('adminAssets')}}/svg/icons8-github.svg" alt=""> Github
                        </li>
                        <li>
                            <a href="index.html"> 
                                <img style="width: 2rem;" src="{{asset('adminAssets')}}/svg/icons8-google.svg" alt=""> Google
                        </li>
                        <li>
                            <a href="index.html"> 
                                <img style="width: 2rem;" src="{{asset('adminAssets')}}/svg/icons8-linkedin.svg" alt=""> Linkedin
                        </li>
                        <li>
                            <a href="index.html"> 
                                <img style="width: 2rem;" src="{{asset('adminAssets')}}/svg/icons8-facebook.svg" alt=""> Facebook
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="sub-header-mobile-2 d-block d-lg-none">
    <div class="header__tool">
        <div class="header-button-item has-noti js-item-menu">
            <i class="zmdi zmdi-notifications"></i>
            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                <div class="notifi__title">
                    <p>You have 3 Notifications</p>
                </div>
                <div class="notifi__item">
                    <div class="bg-c1 img-cir img-40">
                        <i class="zmdi zmdi-email-open"></i>
                    </div>
                    <div class="content">
                        <p>You got a email notification</p>
                        <span class="date">April 12, 2018 06:50</span>
                    </div>
                </div>
                <div class="notifi__item">
                    <div class="bg-c2 img-cir img-40">
                        <i class="zmdi zmdi-account-box"></i>
                    </div>
                    <div class="content">
                        <p>Your account has been blocked</p>
                        <span class="date">April 12, 2018 06:50</span>
                    </div>
                </div>
                <div class="notifi__item">
                    <div class="bg-c3 img-cir img-40">
                        <i class="zmdi zmdi-file-text"></i>
                    </div>
                    <div class="content">
                        <p>You got a new file</p>
                        <span class="date">April 12, 2018 06:50</span>
                    </div>
                </div>
                <div class="notifi__footer">
                    <a href="#">All notifications</a>
                </div>
            </div>
        </div>
        <div class="header-button-item js-item-menu">
            <i class="zmdi zmdi-settings"></i>
            <div class="setting-dropdown js-dropdown">
                <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-settings"></i>Setting</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                    </div>
                </div>
                <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-globe"></i>Language</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-pin"></i>Location</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-email"></i>Email</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-wrap">
            <div class="account-item account-item--style2 clearfix js-item-menu">
                <div class="image">
                    <img src="{{asset('adminAssets')}}/images/icon/avatar-01.jpg" alt="John Doe">
                </div>
                <div class="content">
                    <a class="js-acc-btn" href="#">john doe</a>
                </div>
                <div class="account-dropdown js-dropdown">
                    <div class="info clearfix">
                        <div class="image">
                            <a href="#">
                                <img src="{{asset('adminAssets')}}/images/icon/avatar-01.jpg" alt="John Doe">
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="name">
                                <a href="#">john doe</a>
                            </h5>
                            <span class="email">johndoe@example.com</span>
                        </div>
                    </div>
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                        </div>
                    </div>
                    <div class="account-dropdown__footer">
                        <a href="#">
                            <i class="zmdi zmdi-power"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END HEADER DESKTOP-->



