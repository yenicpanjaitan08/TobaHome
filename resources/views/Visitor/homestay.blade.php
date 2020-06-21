@extends('index2')
@section('content')
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
                        <a href="/visitor/homestay/{{$homestay->id}}/view" class="primary-btn">Informasi lainnya</a>
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