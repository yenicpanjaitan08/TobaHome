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

<!-- About Us Section Begin -->
<section class="aboutus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>Homestay Website <br />Kabupaten Tobasa</h2>
                    </div>
                    <p class="f-para">TobaHome.com is a leading online accommodation site. We’re passionate about
                        Homestay. Every day, we inspire and reach millions of visitor across Tobasa</p>
                    <p class="s-para">So when it comes to booking the perfect Homestay, Transportation rental, Food
                        Service,we’ve got you covered.</p>
                    <a href="#" class="primary-btn about-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-pic">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="img/about/about-1.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img src="img/about/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Services Section End -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>T o b a H o m e</span>
                    <h2>Menawarkan Homestay Impian Anda </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-036-parking"></i>
                    <h4>Travel Plan</h4>
                    <p>Membantu memberikan anda informasi travel sekitaran Tobasa</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-033-dinner"></i>
                    <h4>Catering Service</h4>
                    <p>Membantu menyediakan makanan sesuai kebutuhan visitor. Mulai dari makanan khas batak atau makanan
                        lainnya </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-026-bed"></i>
                    <h4>Rooms</h4>
                    <p>Menyediakan kamar Homestay yang nyaman dilengkapi dengan fasilitas terbaik</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-024-towel"></i>
                    <h4>Laundry</h4>
                    <p>Menyediakan layanan laundry, langsung diambil dan diantar ke tempat </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-044-clock-1"></i>
                    <h4>Layanan 24 Jam</h4>
                    <p>Memberikan layanan perlindungan 24 jam serta 24 layanan internet 24 jam dan layanan 24 jam
                        lainnya</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-012-cocktail"></i>
                    <h4>Cafe & Resto</h4>
                    <p>Meyediakan inforamsi temoat dan lokasi cafe & resto yang ada di sekitaran Tobasa</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Home Room Section Begin -->
<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
                        <div class="hr-text">
                            <h3>Double Room</h3>
                            <h2>Rp200.000<span>/Permalam</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Ukuran:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kapasitas:</td>
                                        <td>Maksimal 5 Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kasur:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Layanan:</td>
                                        <td>Wifi, Televisi LCD, Kamar mandi,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Informasi lainnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
                        <div class="hr-text">
                            <h3>Double Room</h3>
                            <h2>Rp200.000<span>/Permalam</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Ukuran:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kapasitas:</td>
                                        <td>Maksimal 5 Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kasur:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Layanan:</td>
                                        <td>Wifi, Televisi LCD, Kamar mandi,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Informasi lainnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
                        <div class="hr-text">
                            <h3>Double Room</h3>
                            <h2>Rp200.000<span>/Permalam</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Ukuran:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kapasitas:</td>
                                        <td>Maksimal 5 Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kasur:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Layanan:</td>
                                        <td>Wifi, Televisi LCD, Kamar mandi,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Informasi lainnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
                        <div class="hr-text">
                            <h3>Double Room</h3>
                            <h2>Rp200.000<span>/Permalam</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Ukuran:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kapasitas:</td>
                                        <td>Maksimal 5 Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kasur:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Layanan:</td>
                                        <td>Wifi, Televisi LCD, Kamar mandi,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Informasi lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Room Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Review</span>
                    <h2>What Visitors Say?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-slider owl-carousel">
                    <div class="ts-item">
                        <p>Jadi ceritanya kemarin kita tu lagi ada proyek lapangan di daerah Samosir, jadi teman aku
                            yang disamosir nyaranin nih
                            pake website TobaHome aja buat nyari infi Homestay dan itu ngebantu banget sih hehe :))
                        </p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> - Yunita Girsang</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                    <div class="ts-item">
                        <p>View tempat pemandangan nya cantik we gile parah.Fasilitas dan kamar nya juga oke layanannya
                            juga bagus
                            kapan-kapan klo misal mau holidei mesan sini lagi kok :D
                        </p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> - Tiur Panjaitan</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Homestay News</span>
                    <h2>Our Blog & Promo</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel Trip</span>
                        <h4><a href="#">Tremblant In Canada</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Camping</span>
                        <h4><a href="#">Choosing A Static Caravan</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-3.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Copper Canyon</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-wide.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-10.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel</span>
                        <h4><a href="#">Traveling To Barcelona</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection