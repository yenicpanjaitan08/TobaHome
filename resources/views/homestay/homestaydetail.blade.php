@extends('index')
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Homestay</h2>
                    <div class="bt-option">
                        <a href="./index">Home</a>
                        <span>Homestay</span>
                    </div>
                </div>
            </div>
        </div>
        @if (session('status'))
        @if(session('status') == 'Proses booking berhasil')
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        @endif
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Room Details Section Begin -->
<section class="room-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="room-details-item">
                <img src="{{asset('adminlte/img/'.$data_homestay->header_image)}}" class="product-image"
                            alt="Product Image" id="header_image" >
                    <div class="rd-text">
                        <div class="rd-title">
                            <h3>{{$data_homestay->name}}</h3>
                            <div class="rdt-right">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                @if (session('check'))
                                @if(session('check') == 'Room Available')
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                    Booking Now
                                </button>
                                @endif
                                @endif
                            </div>
                        </div>
                        <h2><span>Rp. </span>{{$data_homestay->price}}<span> / malam</span></h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Rooms:</td>
                                    <td> {{$data_homestay->total_room}}<span> Room</span> </td>
                                </tr>
                                <tr>
                                    <td class="r-o">Ukuran:</td>
                                    <td>30 ft</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Kapasitas:</td>
                                    <td>Maksimal 6 Orang</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Kasur:</td>
                                    <td>King Beds</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Services:</td>
                                    <td>Wifi, Television,Kendaraan,...</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="f-para">{{$data_homestay->description_detail}}</p>
                    </div>
                </div>
                <div class="rd-reviews">
                    <h4>Reviews</h4>
                    <div class="review-item">
                        <div class="ri-pic">
                            <!-- <img src="img/room/avatar/avatar-1.jpg" alt=""> -->
                        </div>
                        <div class="ri-text">
                            <span>27 Jan 2020</span>
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5>Cemara Girsang</h5>
                            <p>Homestay dan fasilitasnya terbaik, suasana rumahnya juga adem. Padahal aku orang rada
                                takut gitu pertamanya
                                but overall itu bagus banget, tuan rumah nya juga ramah, kita juga disediain kendaraan
                                buat keliling. thankss ^_^ </p>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="ri-pic">
                            <!-- <img src="img/room/avatar/avatar-2.jpg" alt=""> -->
                        </div>
                        <div class="ri-text">
                            <span>27 Feb 2020</span>
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5>Beni Tampubolon</h5>
                            <p> Baru kali ini nemuin website yang menghubungkan kita ke homestay yang ingin dicari,
                                jujur selain pemesanannya yg gampang
                                ternyata homestay nya juga bagus kualitasnya mulai dari ruang tidur dll. Untuk harganya
                                juga sesuai di kantong Thanks a lot Bro..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="review-add">
                    <h4>Add Review</h4>
                    <form action="#" class="ra-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name*">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email*">
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <h5>You Rating:</h5>
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                </div>
                                <textarea placeholder="Your Review"></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="room-booking">
                    <h3>Your Reservation</h3>
                    <form action="/homestay/{{$data_homestay->id}}/check" method="post">
                        {{ csrf_field() }}
                        <div class="check-date">
                            <label for="date-in">Check Date:</label>
                            <input type="text" id="range-tanggal" class="form-control" placeholder="dd/mm/yyyy-dd/mm/yyyy" name="tanggal">
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
                            </select>
                        </div>
                        <button type="submit">Check Availability</button>
                    </form>
                    @if (session('check'))
                    @if(session('check') == 'Room Available')
                    <div class="alert alert-success">
                        {{ session('check') }}
                    </div>
                    @else
                    <div class="alert alert-danger">
                        {{ session('check') }}
                    </div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Details Section End -->
@endsection

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Visitor Information</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('booking') }}">
                    @csrf
                    <input name="homestay_id" value="{{ $data_homestay->id }}" type="hidden">
                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="check_in" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Keluar</label>
                        <input type="date" name="check_out" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Visitor</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Visitor</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="number" name="notel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Payment</label>
                        <select id="payment" name="payment" class="form-control">
                            ({{$data_homestay->no_rekening}})
                            <option value="cash">Cash</option>
                            <option value="transfer">Transfer</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="myFunction()">Booking</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        var payment = document.getElementById('payment').value;
        if (payment === 'transfer') {
            window.alert('You can transfer for payment : ({{$data_homestay->no_rekening}})');
        }
    }
</script>