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
                        <li><a class="dropdown-item" href="{{route('about')}}">About Us</a></li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li><a class="dropdown-item" href="{{route('contact')}}">Contact Us</a></li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li><a class="dropdown-item" href="{{route('references')}}">References</a></li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li><a class="dropdown-item" href="{{route('faq')}}">FAQ</a></li>
                    </ul>
                </li>
                <span class="nav-item ms-5">
                    <a class="nav-link" href="/loginuser">Log in</a>
                    @auth
                        <strong>
                            {{Auth::user()->name}}
                        </strong>
                    @endauth
                    
                </span>
            </ul>
            <span class="nav-item">
                <a class="btn-solid-sm" href="#contact">Sign up</a>
            </span>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->
