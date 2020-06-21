<!-- Breadcrumb Section Begin -->
<!doctype html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.cs')}}s" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Hello, world!</title>
</head>

<body>
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
                                <img src="{{ asset('img/logo.png') }}" alt="">
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
                                    <li><a href="{{ route('rooms') }}">Rooms</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('rooms') }}">Rooms</a></li>
                                            <li><a href="{{ route('facility') }}">Facility</a></li>
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
    <div class="review-add container">
        <h4>Edit review</h4>
        @foreach($rating as $rtng)
        <form class="ra-form" method="POST" action="{{ route('update') }}">
            @csrf
            <meta name="csrf-token" content="{{ csrf_token() }}" />
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h5>You Rating:</h5>
                        <div class="rating">
                            <i class="fa fa-star fa-2x" data-index='0'></i>
                            <i class="fa fa-star fa-2x" data-index='1'></i>
                            <i class="fa fa-star fa-2x" data-index='2'></i>
                            <i class="fa fa-star fa-2x" data-index='3'></i>
                            <i class="fa fa-star fa-2x" data-index='4'></i>
                            <input name="rating" type="hidden" id="rating" style="border: none;">
                        </div>
                    </div>
                    <textarea placeholder="Your Review" name="review">{{ $rtng->review }}</textarea>
                    <input name="id" type="hidden" value="{{ $rtng->id }}" style="border: none;">
                    <button type="submit" class="btn btn-submit">Post</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
<script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script>
    var ratedIndex = -1,
        uID = 1;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        resetStarColors();

        if (localStorage.getItem('ratedIndex') != null) {
            setStars(parseInt(localStorage.getItem('ratedIndex')));
            uID = localStorage.getItem('uID');
        }

        $('.fa-star').on('click', function() {
            ratedIndex = parseInt($(this).data('index'));
            $('#rating').val(ratedIndex + 1);
        });

        $('.fa-star').mouseover(function() {
            resetStarColors();
            var currentIndex = parseInt($(this).data('index'));
            setStars(currentIndex);
        });

        $('.fa-star').mouseleave(function() {
            resetStarColors();
            if (ratedIndex != -1)
                setStars(ratedIndex);
        });
    });

    function setStars(max) {
        for (var i = 0; i <= max; i++)
            $('.fa-star:eq(' + i + ')').css('color', 'green');
    }

    function resetStarColors() {
        $('.fa-star').css('color', 'grey');
    }
    // $(".btn-submit").click(function(e) {
    //     e.preventDefault();
    //     var rating = $("input[name=rating]").val();
    //     var review = $("input[name=review]").val();
    //     $.ajax({
    //         type: 'POST',
    //         url: "{{url('/homestaydetails')}}",
    //         data: {
    //             rating: rating,
    //             review: review,
    //         }
    //     });

    // });
</script>

</html>
<!-- Room Details Section End -->