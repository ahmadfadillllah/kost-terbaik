<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesdesign.in/peyso/layout/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 00:59:55 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page | Penentuan {{ env('APP_NAME') }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Ahmad Fadillah" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('landing-page') }}/images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('landing-page') }}/css/bootstrap.min.css" type="text/css">

    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing-page') }}/css/materialdesignicons.min.css" />

    <!-- tinyslider -->
    <link rel="stylesheet" href="{{ asset('landing-page') }}/css/tiny-slider.css">

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing-page') }}/css/style.css" />

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="58">

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="index-1.html">
                    <img src="{{ asset('landing-page') }}/images/logo-light.png" alt="" class="logo-light" height="50" />
                    <img src="{{ asset('landing-page') }}/images/logo-dark.png" alt="" class="logo-dark" height="50" />
                </a>

            <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center mt-lg-0 mt-2" id="navbar-navlist">
                    <li class="nav-item">
                        <a href="#home" class="nav-link" id="scrollElement">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Tenang</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Kontak</a>
                    </li>
                </ul>
                <a href="{{ route('login') }}" class="btn btn-info btn-sm navbar-btn my-lg-0 my-2">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero section Start -->
    <section class="hero-3 position-relative align-items-center justify-content-center d-flex overflow-hidden" style="background-image: url({{ asset('landing-page') }}/images/hero-3-bg.jpg);" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row position-relative align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="hero-3-content text-center py-5 px-4 mt-4">
                        <span class="con-border-top"></span>
                        <h6 class="text-white text-uppercase mt-3 mb-2">- tentang kami</h6>
                        <h1 class="hero-3-title text-white mb-lg-3 mb-2">Penentuan Kost Terbaik</h1>
                        <p class="mb-4 text-white-50">Sistem pendukung keputusan penentuan kost terbaik menggunakan metode <br><i>Analytical Hierarchy Process</i></p>
                        <a href="{{ route('dashboard.index') }}" class="btn btn-info">Info Selanjutnya<i class="mdi mdi-arrow-right ml-1"></i></a>
                        <span class="con-border-bottom"></span>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Hero section End -->

    <!-- Start About -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h3 class="mb-3">A digital web design studio creating modern & engaging online</h3>
                        <p class="text-muted">
                            If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages new common will be more regular than the existing If several is more
                            simple and regular than that of the individual languages new common will be more regular than the existing
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-ruler"></i>
                        </div>

                        <h5>Web Designing</h5>
                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more regular than that of the individual</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-repeat"></i>
                        </div>

                        <h5>Programming</h5>
                        <p class="text-muted">To achieve this, it would be necessary to have uniform more common several languages coalesce</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-airplay"></i>
                        </div>

                        <h5>Software Development</h5>
                        <p class="text-muted">For science, music, sport, etc, Europe uses the same vocabulary only differ in their pronunciation.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end About -->


    <!-- Start contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card contact-section-card mb-0">
                        <div class="card-body p-md-5">
                            <div class="text-center title mb-5">
                                <p class="text-muted text-uppercase fw-normal mb-2">Kontak</p>
                                <h3 class="mb-3">Punya pertanyaan?</h3>
                                <div class="title-icon position-relative">
                                    <div class="position-relative">
                                        <i class="uim uim-arrow-circle-down"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- start form -->
                            <form method="post" name="myForm" onsubmit="return validateForm()" href="javascript: void(0);">
                                <p id="error-msg"></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">Nama</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name..." />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Alamat email</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email..." />
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="mb-3">
                                    <label class="form-label" for="subject">Subject</label>
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject..." />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="comments">Pesan</label>
                                    <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="Enter your message..."></textarea>
                                </div>

                                <div class="text-right">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Kirim pesan" />

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->

    <!-- Start footer-alt -->
    <section class="footer-alt py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-white-50">
                        <p class="mb-0">2022 © Penentuan Kost Terbaik. Create by <a href="https://adhyy.my.id" target="_blank">Adhyy</a></p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end footer-alt -->


    <!-- Javascript -->
    <script src="{{ asset('landing-page') }}/js/bootstrap.bundle.min.js"></script>

    <!-- unicons -->
    <script src="../../../unicons.iconscout.com/release/v2.1.11/script/monochrome/bundle.js"></script>

     <!-- testi-slider -->
     <script src="{{ asset('landing-page') }}/js/tiny-slider.js"></script>


    <!-- app js -->
    <script src="{{ asset('landing-page') }}/js/app.js"></script>
</body>


<!-- Mirrored from themesdesign.in/peyso/layout/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 01:00:00 GMT -->
</html>
