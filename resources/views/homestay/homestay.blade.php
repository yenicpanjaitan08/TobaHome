@extends('index')
@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-text">
                    <h1>TobaHome</h1>
                    <p>Here are the best Homestay booking sites, including recommendations for
                        travel and for finding low-priced Homestay rooms.</p>
                    <a href="#" class="primary-btn">Discover Now</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <h3>Booking Your Homestay</h3>
                    <form action="#">
                        <div class="check-date">
                            <label for="date-in">Check Date:</label>
                            <input type="text" id="range-tanggal" class="form-control"
                                placeholder="dd/mm/yyyy-dd/mm/yyyy">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room">
                                <option value="">1 Room</option>
                                <option value="">2 Room</option>
                                <option value="">3 Room</option>
                            </select>
                        </div>

                        <button type="submit"> Check Availability</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
        <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
        <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Homestay</h2>
                    <div class="bt-option">
                        <a href="./index">Home</a>
                        <span>Homestay</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Rooms Section Begin -->

<section class="rooms-section spad">
    <div class="container">
        <div class="row">
        @foreach($data_homestay as $homestay)
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{asset('adminlte/img/'.$homestay->header_image)}}" alt="">
                    <div class="ri-text">
                        <h4>{{$homestay->name}}</h4>
                        <h3><span>Rp. </span>{{$homestay->price}}<span> / malam</span></h3>
                        <p>{{$homestay->address}}</p>
                        <a href="/homestay/{{$homestay->id}}/view" class="primary-btn">Informasi lainnya</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12">
                <div class="room-pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->
@endsection