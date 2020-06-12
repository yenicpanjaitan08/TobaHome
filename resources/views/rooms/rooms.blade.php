@extends('index')
@section('content')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Rooms</h2>
                    <div class="bt-option">
                        <a href="./index">Home</a>
                        <span>Rooms</span>
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
            @foreach($data_room as $room)
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{asset('adminlte/img/'.$room->img)}}" class="product-image" alt="Product Image" id="img"
                        width="150px">
                    <div class="ri-text">
                        <h4>{{$room->room_type}}</h4>
                        <h3> <span>Rp.</span> {{$room->price}} <span>/ night</span></h3>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td>{{$room->room_size}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td>{{$room->capacity}} (Max Person)</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Bed:</td>
                                    <td>{{$room->bed_type}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="/rooms/{{$room->id}}/view" class="primary-btn">Informasi lainnya</a>
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