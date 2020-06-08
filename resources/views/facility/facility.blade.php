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
                    <h2>Facility</h2>
                    <div class="bt-option">
                        <a href="./index">Home</a>
                        <span>Facility</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Room Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            @foreach($data_facilities as $facilities)
            <div class="col-lg-4 col-sm-6">
                <div class="services-item">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>{{$facilities->facility_name}}</h4>
                        <p>{{$facilities->desc}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Room Section End -->
@endsection