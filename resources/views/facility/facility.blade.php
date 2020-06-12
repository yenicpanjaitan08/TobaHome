@extends('index')
@section('content')
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