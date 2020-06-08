<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TobaHome">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Colorlib">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TobaHome</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css">
    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="{{asset('asset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('asset/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('asset/css/main.css')}}" rel="stylesheet" media="all">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> +62 813 565 909 639</li>
                            <li><i class="fa fa-envelope"></i> info.TobaHome@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <a href="./homestay" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <img src="img/flag.jpg" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">EN</a></li>
                                        <li><a href="#">IN</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.blade.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./homebaru">Home</a></li>
                                    <li><a href="{{ route('login') }}">Login</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./rooms">Rooms</a>
                                        <ul class="dropdown">
                                            <li><a href="./rooms">Rooms</a></li>
                                            <li><a href="./facility">Facility</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="./blog">News</a>
                                        <ul class="dropdown">
                                            <li><a href="./blog">Blog</a></li>
                                            <li><a href="./gallery">Gallery</a></li>
                                            <li><a href="./reviews">Review</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="./aboutus">About Us</a></li>
                                    <li><a href="./contact">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of visitors<br /> across million people</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                               
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>+62 813 565 909 639</li>
                                <li>info.TobaHome@gmail.com</li>
                                <li>Jl H.UlakmaS No.09 Samping BPK Silindung</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This is made with <i class="fa fa-heart"
                                    aria-hidden="true"></i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('asset/template/images/icons/favicon.ico')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/template/css/main.css')}}">
    <!--===============================================================================================-->
    <!-- Jquery JS-->
    <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('asset/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('asset/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('asset/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('asset/js/global.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.range-dtp i').click(function() {
            $(this).parent().find('input').click();
        });

        $('#range-tanggal').daterangepicker({
            autoUpdateInput: false,
            format: 'DD/MM/YYYY',
            useCurrent: false,
            "showDropdowns": true,
            "autoApply": true,
        }, function(start, end, label) {
            $('#range-tanggal').val(start.format('DD/MM/YYYY') + " - " + end.format('DD/MM/YYYY'))
        });

    });
    </script>
</body>

</html>