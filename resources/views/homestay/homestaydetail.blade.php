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
                                <a href="./bookingform">Booking Now</a>
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
                        <p class="f-para">Sidauruk Homestay menawarkan homestay yang unik di mana visitor dapat
                            merasakan budaya Batak setempat dan
                            membantu memberdayakan masyarakat Batak. Kami memiliki 3 kamar tidur twin dengan kamar mandi
                            pribadi, Anda dapat menyewa
                            secara individu atau terpisah. Homestay ini menggabungkan akomodasi yang menyenangkan dengan
                            kesempatan untuk belajar lebih
                            banyak tentang budaya Batak: seperti tarian tradisional, memasak, bertani, memancing,
                            menenun, dan bahasa. Harga per malam
                            per orang termasuk cathering(optional) + 3 pengalaman budaya. Namun apabila visitor ingin
                            menggunakan dapur, sudah tersedia.
                            <p>
                                <br>
                                Harga untuk satu malam per orang termasuk:
                                <br>
                                -Jasa cathering(optional)
                                <br>
                                -Akses Wifi tanpa batas
                                <br>
                                -Kamar tidur serta Kamar mandi dan ruangan lainnya
                                <br>
                                -Television LCD, AC, Kendaraan yang dapat dipergunakan(optional)
                                <br>
                            </p>
                    </div>
                </div>
                <div class="rd-reviews">
                    <h4>Reviews</h4>
                    <div class="review-item">
                        <div class="ri-pic">
                            <img src="img/room/avatar/avatar-1.jpg" alt="">
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
                            <img src="img/room/avatar/avatar-2.jpg" alt="">
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
                    <form action="#">
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
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
                            </select>
                        </div>
                        <button type="submit">Check Availability</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Details Section End -->
@endsection