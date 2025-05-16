<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext"
        rel="stylesheet">
    <!-- title of site -->
    <title>Kamal Andreansyah</title>
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />
    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('Template/assets/css/font-awesome.min.css')}}">
    <!--flat icon css-->
    <link rel="stylesheet" href="{{ asset('Template/assets/css/flaticon.css') }}">
    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('Template/assets/css/animate.css') }}">
    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('Template/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template/assets/css/owl.theme.default.min.css') }}">
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('Template/assets/css/bootstrap.min.css') }}">
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('Template/assets/css/bootsnav.css') }}">
    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('Template/assets/css/style.css') }}">
    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('Template/assets/css/responsive.css') }}">
    <!-- Link Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('Template/assets/images/favicon.png') }}">


<body>
    <!-- top-area Start -->
    <header class="top-area">
        @include('layout.header')
    </header>
    <!-- top-area End -->

    <!--welcome-hero start -->
    <section id="welcome-hero" class="welcome-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="header-text">
                        <h2>hi <span>,</span> i am <br> Kamal Andreansyah <span> </span> </h2>
                        <p>Laravel Developer for Web Apps & Admin Dashbord </p>
                        <a href="Kamal Andreansyah - Resume.pdf" download>download resume</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--welcome-hero end -->

    <!--about start -->
    <section id="about" class="about">
        <div class="section-heading text-center">
            <h2>about me</h2>
        </div>
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-about-txt">
                            <h3>
                                Laravel Developer for Web Apps & Admin Dashbord
                            </h3>
                            <p>
                                Hi! I'm a Laravel web developer with solid skills in backend and frontend development.

                                I help businesses build web applications, admin dashboards, and internal systems using
                                Laravel, PHP, and MySQL. I can also design clean and responsive interfaces using HTML5,
                                CSS3, JavaScript, and Bootstrap.

                                Here’s what I can help you with : <br>
                                <br>
                                - Build full web apps using Laravel 9 <br>
                                - Develop custom admin panels or dashboards <br>
                                - Fix bugs or improve existing Laravel/PHP code <br>
                                - Convert Figma/PSD designs into responsive web pages <br>
                                <br>I’m also experienced with design and motion tools like Adobe Illustrator, Photoshop,
                                After Effects, and Premiere — perfect for clients who want both code and visuals done
                                right.

                                If you’re looking for someone reliable, communicative, and results-oriented, I’m ready
                                to help. Let’s build something great together!
                            </p>
                            <div class="row">
                                <div class="col-sm-6 mb-4 px-3">
                                    <div class="single-about-add-info">
                                        <h3>Whatsapp</h3>
                                        <p>+62 821-1497-6405</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4 px-3">
                                    <div class="single-about-add-info">
                                        <h3>email</h3>
                                        <p>kamalandre4@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4 px-3">
                                    <div class="single-about-add-info">
                                        <h3>website</h3>
                                        <p>bit.ly/portofolio_kamal_andreansyah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-1 col-sm-5">
                        <div class="single-about-img">
                            <img src="{{ asset('Template/assets/images/about/profile.png') }}" alt="profile_image">
                            <div class="about-list-icon">
                                <ul>
                                    <li>
                                        <a href="https://github.com/andreans24" target="_blank">
                                            <i class="fa-brands fa-github" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/kamal-andreansyah-8162b2174/"
                                            target="_blank">
                                            <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/andree.2108/" target="_blank">
                                            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about end -->

    <!--education start -->
    <section id="education" class="education">
        <div class="section-heading text-center">
            <h2>education</h2>
        </div>
        <div class="container">
            <div class="education-horizontal-timeline">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2010 - 2014</h2>
                                <h3>S1 Computer Systems</h3>
                            </div>
                            <!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title">
                                        universitas gunadarma
                                    </h4>
                                    <h5>Depok, Indonesia</h5>
                                    {{-- <p class="description">
                                        Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu
                                        fugiat nulla pari. Excepteur sint occana inna tecat cupidatat non proident.
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2008 - 2010</h2>
                                <h3>Computer network Engineering</h3>
                            </div>
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title">
                                        SMK Cikini
                                    </h4>
                                    <h5>Jakarta, Indonesia</h5>
                                    {{-- <p class="description">
                                        Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu
                                        fugiat nulla pari. Excepteur sint occana inna tecat cupidatat non proident.
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2005 - 2007</h2>
                                <h3>......<span></span> </h3>
                            </div>
                            <!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title">
                                        SMPN 114 Jakarta
                                    </h4>
                                    <h5>Jakarta, Indonesia</h5>
                                    {{-- <p class="description">
                                        Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu
                                        fugiat nulla pari. Excepteur sint occana inna tecat cupidatat non proident.
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>1999 - 2004</h2>
                                <h3>......<span></span> </h3>
                            </div>
                            <!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title">
                                        SDN TUGU UTARA 01 pagi
                                    </h4>
                                    <h5>Jakarta, Indonesia</h5>
                                    {{-- <p class="description">
                                        Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu
                                        fugiat nulla pari. Excepteur sint occana inna tecat cupidatat non proident.
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--education end -->

    <!--skills start -->
    <section id="skills" class="skills">
        <div class="skill-content">
            <div class="section-heading text-center">
                <h2>skills</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-skill-content">
                            <div class="barWrapper">
                                <span class="progressText">LARAVEL 9</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>90%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText">PHP DEVELOPMENT</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>85%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText">MYSQL</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>90%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText"> HTML 5</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>90%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText"> CSS </span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>90%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText"> JavaScript </span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>85%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText"> GIT HUB</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="89"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>89%</h3>
                                </div>
                            </div><!-- /.barWrapper -->

                            <div class="barWrapper">
                                <span class="progressText"> MS POWERPOINT </span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>100%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-skill-content">
                            <div class="barWrapper">
                                <span class="progressText">adobe photoshop</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>100%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText">adobe illustrator</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="97"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>97%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText">adobe after effects</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="97"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>97%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText">adobe premiere pro</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>90%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText">RESOLUME ARENA</span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>90%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText"> MS WORD </span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>100%</h3>
                                </div>
                            </div><!-- /.barWrapper -->
                            <div class="barWrapper">
                                <span class="progressText"> MS EXCEL </span>
                                <div class="single-progress-txt">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="10" aria-valuemax="100" style="">

                                        </div>
                                    </div>
                                    <h3>100%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--skills end -->

    <!--experience start -->
    <section id="experience" class="experience">
        <div class="section-heading text-center">
            <h2>experience</h2>
        </div>
        <div class="container">
            <div class="experience-content">
                <div class="main-timeline">
                    <ul>
                        <li>
                            <div class="single-timeline-box fix">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="experience-time text-right">
                                            <h2>2021 - Present</h2>
                                            <h3>IT SUPPORT / Developer Program</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1 col-md-5">
                                        <div class="timeline">
                                            <div class="timeline-content">
                                                <h4 class="title">
                                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                    KOPEGMAR TANJUNG PRIOK
                                                </h4>
                                                <h5>Jakarta, Indonesia</h5>
                                                <p class="description">
                                                    Companies or organizations engaged in the field of savings and loan
                                                    services, labor (outsourcing), and contract work. <br>
                                                    ● Business Field : Oursourching <br>
                                                    ● Job Description : Manage HRMS application system, Website Company
                                                    <br>
                                                    ● Tools : Laravel 7, GIT, Oracle, MySql, Docker, Hosting & Domain
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="single-timeline-box fix">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="timeline">
                                            <div class="timeline-content text-right">
                                                <h4 class="title">
                                                    PT QPRO SUKSES MANDIRI
                                                </h4>
                                                <h5>Jakarta, Indonesia</h5>
                                                <p class="description">
                                                    Hospital Health Application Provider Service Company Based on Web
                                                    (Sphaira) <br>
                                                    ● Business Field : Hospital Information System <br>
                                                    ● Job Description : Application testing, Testing new features,
                                                    testing after repair
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1 col-md-5 experience-time-main">
                                        <div class="experience-time">
                                            <h2>
                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                2019 - 2021
                                            </h2>
                                            <h3>QA Engineer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="single-timeline-box fix">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="experience-time text-right">
                                            <h2>2016 - 2019</h2>
                                            <h3>Reseller</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1 col-md-5">
                                        <div class="timeline">
                                            <div class="timeline-content">
                                                <h4 class="title">
                                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                    LAZADA INDONESIA
                                                </h4>
                                                <h5>Jakarta, Indonesia</h5>
                                                <p class="description">
                                                    A company engaged in online buying and selling services and
                                                    e-commerce <br>
                                                    ● Business Field : Online buying and selling platform <br>
                                                    ● Job Description : Sales product input <br>
                                                    ● Tools : SellerCenter
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/.experience-->
    <!--experience end -->

    <!--profiles start -->
    <section id="profiles" class="profiles">
        <div class="profiles-details">
            <div class="section-heading text-center">
                <h2>Certificate</h2>
            </div>
            <div class="container">
                <div class="profiles-content">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <a href="{{ asset('Template/assets/images/certificate/Laravel9.pdf') }}"><i
                                            class="fab fa-laravel fa-5x" style="color: #ff0000;"></i></a>
                                    <div class="profile-icon-name">Laravel 9</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <a href="{{ asset('Template/assets/images/certificate/Laravel9.pdf') }}"
                                            target="_blank"><i class="fab fa-laravel fa-5x"
                                                style="color: #ffffff;"></i></a>
                                        <div class="profile-icon-name">Laravel 9</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <a href="{{ asset('Template/assets/images/certificate/PHP.pdf') }}"><i
                                            class="fa-brands fa-php fa-5x" style="color: #8c00ff;"></i></a>
                                    <div class="profile-icon-name">PHP Development</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <a href="{{ asset('Template/assets/images/certificate/PHP.pdf') }}"
                                            target="_blank"><i class="fa-brands fa-php fa-5x"
                                                style="color: #ffffff;"></i></a>
                                        <div class="profile-icon-name">PHP Development</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <a href="{{ asset('Template/assets/images/certificate/HTML.pdf') }}"><i
                                            class="fa-brands fa-html5 fa-5x" style="color: #ff8800;"></i></a>
                                    <div class="profile-icon-name">HTML 5</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <a href="{{ asset('Template/assets/images/certificate/HTML.pdf') }}"
                                            target="_blank"><i class="fa-brands fa-html5 fa-5x"
                                                style="color: #ffffff;"></i></a>
                                        <div class="profile-icon-name">HTML 5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile profile-no-border">
                                <div class="profile-txt">
                                    <a href="{{ asset('Template/assets/images/certificate/CSS.pdf') }}"><i
                                            class="fa-brands fa-css3-alt fa-5x" style="color: #0091ff;"></i></a>
                                    <div class="profile-icon-name">CSS</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <a href="{{ asset('Template/assets/images/certificate/CSS.pdf') }}"
                                            target="_blank"><i class="fa-brands fa-css3-alt fa-5x"
                                                style="color: #ffffff;"></i></a>
                                        <div class="profile-icon-name">CSS</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile profile-no-border">
                                <div class="profile-txt">
                                    <a href="{{ asset('Template/assets/images/certificate/BasicUserLinux.pdf') }}"><i
                                            class="fa-brands fa-linux fa-5x"></i></a>
                                    <div class="profile-icon-name">Basic User Linux</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <a href="{{ asset('Template/assets/images/certificate/BasicUserLinux.pdf') }}"
                                            target="_blank"><i class="fa-brands fa-linux fa-5x"></i></a>
                                        <div class="profile-icon-name">Basic User Linux</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile profile-no-border">
                                <div class="profile-txt">
                                    <!-- Ganti icon dengan gambar -->
                                    <a href="{{ asset('Template/assets/images/certificate/VB.Net.pdf') }}"><img
                                            src="Template/assets/images/certificate/vb.net.png"
                                            class="profile-icon-img"></a>
                                    <div class="profile-icon-name">VB.Net</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <a href="{{ asset('Template/assets/images/certificate/VB.Net.pdf') }}"
                                            target="_blank"><img src="Template/assets/images/certificate/vb.net.png"
                                                class="profile-icon-img-overlay"></a>
                                        <div class="profile-icon-name">VB.Net</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile profile-no-border">
                                <div class="profile-txt">
                                    <!-- Ganti icon dengan gambar -->
                                    <a href="{{ asset('Template/assets/images/certificate/k3umum.pdf') }}"><img
                                            src="Template/assets/images/certificate/k3.png"
                                            class="profile-icon-img"></a>
                                    <div class="profile-icon-name">AK3 Umum</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <a href="{{ asset('Template/assets/images/certificate/k3umum.pdf') }}"
                                            target="_blank"><img src="Template/assets/images/certificate/k3putih.png"
                                                class="profile-icon-img-overlay"></a>
                                        <div class="profile-icon-name">AK3 Umum</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--portfolio start -->
    <section id="portfolio" class="portfolio">
        <div class="portfolio-details">
            <div class="section-heading text-center">
                <h2>portofolio</h2>
            </div>
            <div class="container">
                <div class="portfolio-content">
                    <div class="isotope">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="item">
                                    <img src="{{ asset('Template/assets/images/portfolio/webkpm.png') }}"
                                        alt="portfolio image" />
                                    <div class="isotope-overlay">
                                        <a href="https://kopegmartanjungpriok.id/" target="_blank">
                                            <strong>Website Kopegmar Tanjung Priok</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('Template/assets/images/portfolio/madamfasut.png') }}"
                                        alt="portfolio image" />
                                    <div class="isotope-overlay">
                                        <a href="https://paleturquoise-rat-735626.hostingersite.com/" target="_blank">
                                            <strong> Madam Fasut </strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('Template/assets/images/portfolio/RAT2022.png') }}"
                                        alt="portfolio image" />
                                    <div class="isotope-overlay">
                                        <a href="{{ asset('Template/assets/images/portfolio/Design RAT 2022.pdf') }}"
                                            target="_blank">
                                            <strong> Design RAT 2022 </strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="item">
                                    <img src="{{ asset('Template/assets/images/portfolio/idcardJAI.png') }}"
                                        alt="portfolio image" />
                                    <div class="isotope-overlay">
                                        <a href="{{ asset('Template/assets/images/portfolio/ID CARD.pdf') }}"
                                            target="_blank">
                                            <strong>ID Card <br>PT Pelindo Jasa Armada Indonesia</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('Template/assets/images/portfolio/RAT2024.png') }}"
                                        alt="portfolio image" />
                                    <div class="isotope-overlay">
                                        <a href="{{ asset('Template/assets/images/portfolio/Design RAT 2024.pdf') }}"
                                            target="_blank">
                                            <strong>Design RAT 2024</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="item">
                                    <img src="{{ asset('Template/assets/images/portfolio/IqomMu.png') }}"
                                        alt="portfolio image" />
                                    <div class="isotope-overlay">
                                        <a href="#" target="_blank">
                                            <strong>IqomMu (Iqomah Multimedia)</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('Template/assets/images/portfolio/presensigps.png') }}"
                                        alt="portfolio image" />
                                    <div class="isotope-overlay">
                                        <a href="#" target="_blank">
                                            <strong>Presen Track</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('Template/assets/images/portfolio/RAT2023.png') }}"
                                        alt="portfolio image" />
                                    <div class="isotope-overlay">
                                        <a href="{{ asset('Template/assets/images/portfolio/Design RAT 2023.pdf') }}"
                                            target="_blank">
                                            <strong>Design RAT 2023</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--portfolio end -->


    <section id="education" class="education">
        <div class="section-heading text-center">
            <h2>VIDEO</h2>
        </div>
        <div class="container">
            <div class="education-horizontal-timeline">
                <div class="row">

                </div>
            </div>
        </div>
    </section>





    <!--clients start -->
    <section id="clients" class="clients">
        <div class="section-heading text-center">
            <h2>clients</h2>
        </div>
        <div class="clients-area">
            <div class="container">
                <div class="owl-carousel owl-theme" id="client">
                    <div class="item">
                        <img src="Template/assets/images/clients/KPM.png" alt="brand-image" />
                    </div>
                    <div class="item">
                        <img src="Template/assets/images/clients/pelindo2.png" alt="brand-image" />
                    </div>
                    <div class="item">
                        <img src="Template/assets/images/clients/JAI1.png" alt="brand-image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--clients end -->

    <!--contact start -->
    <section id="contact" class="contact">
        <div class="section-heading text-center">
            <h2>contact me</h2>
        </div>
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-offset-1 col-md-5 col-sm-6">
                        <div class="single-contact-box">
                            <div class="contact-form">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" placeholder="Name*"
                                                    name="name">
                                            </div>
                                            <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" placeholder="Email*"
                                                    name="email">
                                            </div>
                                            <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="subject"
                                                    placeholder="Subject" name="subject">
                                            </div>
                                            <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="8" id="comment"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="single-contact-btn">
                                                <a class="contact-btn" href="#" role="button">submit</a>
                                            </div>
                                            <!--/.single-single-contact-btn-->
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                </form>
                                <!--/form-->
                            </div>
                            <!--/.contact-form-->
                        </div>
                        <!--/.single-contact-box-->
                    </div>
                    <!--/.col-->
                    <div class="col-md-offset-1 col-md-5 col-sm-6">
                        <div class="single-contact-box">
                            <div class="contact-adress">
                                <div class="contact-add-head">
                                    <h3>Portofolio</h3>
                                    <p>Laravel Developer for Web Apps & Admin Dashbord</p>
                                </div>
                                <div class="contact-add-info">
                                    <div class="single-contact-add-info">
                                        <h3>Whatsapp</h3>
                                        <p>+62 821-1497-6405</p>
                                    </div>
                                    <div class="single-contact-add-info">
                                        <h3>email</h3>
                                        <p>kamalandre4@gmail.com</p>
                                    </div>
                                    {{-- <div class="single-contact-add-info">
                                        <h3>website</h3>
                                        <p>www.portfolio.com</p>
                                    </div> --}}
                                </div>
                            </div>
                            <!--/.contact-adress-->
                            <div class="hm-foot-icon">
                                <ul>
                                    <ul>
                                        <li>
                                            <a href="https://github.com/andreans24" target="_blank">
                                                <i class="fa-brands fa-github fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class="fa-brands fa-facebook fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/kamal-andreansyah-8162b2174/"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/andree.2108/" target="_blank">
                                                <i class="fa-brands fa-instagram fa-2x"></i>
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact end -->

    <!--footer-copyright start-->
    <footer id="footer-copyright" class="footer-copyright">
        @include('layout.footer')
    </footer>
    <!--footer-copyright end-->

    @include('layout.script')
</body>

</html>