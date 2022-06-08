<!-- Navigation -->
<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light py-3" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-text" href="{{route('home')}}" style="font-family: 'Acme', sans-serif; font-size: 2rem">Surveyee</a>

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#header">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                        aria-expanded="false">Info</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li>
                            <a class="dropdown-item" href="{{route('about')}}">About Us</a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('contact')}}">Contact Us</a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li><a class="dropdown-item" href="{{route('references')}}">References</a>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                        </li>
                    </ul>
                </li>
                <span class="nav-item ms-5">
                    @guest
                        <a class="nav-link" href="/loginuser">Log in</a>
                    @endguest
                    @auth
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownUser" data-bs-toggle="dropdown"
                                aria-expanded="false">{{Auth::user()->name}}</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownUser">
                                <li>
                                    
                                    <a class="dropdown-item text-dange d-flex" href="{{route('userpanel.index')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                          </svg>
                                          My Account
                                    </a>
                                </li>
                                <li>
                                    
                                    <a class="dropdown-item text-danger d-flex" href="/logoutuser">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#DD3E4D" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                            <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                                        </svg>
                                        Log Out
                                    </a>

                                </li>
                            </ul>
                        </div>
                    @endauth
                    
                </span>
            </ul>
            <span class="nav-item">
                @guest
                    <a class="btn-solid-sm" href="/registeruser">Sign up</a>
                @endguest
                
            </span>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->
