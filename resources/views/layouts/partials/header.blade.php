<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header top-header-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-10">
                    <ul class="header-left-content">
                        <li>
                            <i class="bx bx-home"></i>{{ isset($setting->address) ? $setting->address : '' }}
                        </li>
                        <li>
                            <i class="bx bx-phone-call"></i>
                            <a href="#">{{ isset($setting->phone) ? $setting->phone : '' }}</a>
                        </li>
                        <li>
                            <i class="bx bx-envelope"></i>
                            <a href="#">{{ isset($setting->email) ? $setting->email : '' }}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-2">
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-nav">
            <div class="container">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="{{ route('default') }}">
                            <h5>Your Logo</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('default') }}">
                        <h5>Your Logo</h5>
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link about">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link plans">Plans</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link team">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link blogs">Blogs</a>
                            </li>
                        </ul>

                        <div class="others-option">
                            <div class="get-quote">
                                <a href="{{ route('drive.create') }}" class="default-btn">
                                    <span>Apply for Drive</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            <div class="get-quote">
                                <a href="pricing-style-two.html" class="default-btn">
                                    <span>Get A Quote</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
