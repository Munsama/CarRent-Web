<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<!-- start banner Area -->
    <section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">Nikmati Perjalanan Anda Dengan Maksimal</h6>
							<h1 class="text-white text-uppercase">
								Carrent Surabaya <br> Murah	Dan Profesional			
							</h1>
							<p class="pt-20 pb-20 text-white" style="text-align:justify">  
							Berkunjung di Surabaya untuk berbagai keperluan seperti bisnis, wisuda, acara pernikahan hingga liburan kini semakin mudah dengan jasa transportasi di Surabaya yang murah, berkualitas, paham jalan dan berpengalaman.
							Jadikan pengalaman Anda dan rombongan selama di Surabaya penuh cerita bahagia dan bermakna. Bersama kami, jasa rental mobil di Surabaya Car Rentals yang murah dan profesional.
							</p>
							<b href="#" class="primary-btn text-uppercase">Hubungi: 082256651278</b>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Mengapa  Memilih Car Rental?</h1>
							<p>
								
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>24/7 Driver Siap Siaga</h4>
								<p>
									Sopir kami siap melayani perjalanan Anda. Sangat fleksibel bagi Anda yang memilik banyak kegiatan di Surabaya.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Layanan Profesional</h4>
								<p>
									Driver dan CS kami adalah orang-orang yang profesional dan ramah. Kami siap memberikan pelayanan yang terbaik dan pengalaman yang menyenangkan bersama kami
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-tag"></span>Harga Sewa Terjangkau</h4>
								<p>
								Kantong Anda akan tetap aman, dengan pelayanan yang maksimal tetapi harga.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Hemat Waktu</h4>
								<p>
								Pesan sewa mobil di Surabaya cukup dari hp Anda, bisa pesan kapan aja dan di mana saja. Dapatkan harga dan layanan terbaik.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-map-marker"></span>Drop off dimana saja</h4>
								<p>
								Kami siap mengantar anda ke banyak titik bersama sopir yang handal.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-list"></span>Banyak Pilihan</h4>
								<p>
								Kami memiliki banyak pilihan kendaraan yang selalu siap untuk anda sewa kapanpun untuk kerperluan personal ataupun bisnis yang anda jalani.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End feature Area -->		

			<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="{{asset('img/about-img.jpg')}}" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h2>Carrent Surabaya <br>
							Car Rental Murah dan Profesional</h2>
							<p>
								<span>Kami hadir disini mendengarkan Anda untuk memberikan keunggulan</span>
							</p>
							<p align=justify>
							Rental Mobil Surabaya murah hadir di Surabaya – Selamat datang di website kami.
							Kami Berkomitmen untuk melayani Anda berlibur ke tempat wisata manapun dengan berbagai jenis kendaraan.
							</p>
							
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	

			<!-- Start model Area -->
			<section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Pilihan Model Mobil</h1>
							<p class="text-center">
								Let's Get Start it!
							</p>
						</div>
					</div>				
					<div class="active-model-carusel">
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Toyota Avanza</h4>
									<h2>500.000<span>/day</span></h2>
								</div>
								<p>
									Harga sewa mobil Avanza yang kami tawarkan murah. Layanan rental mobil kami hadir untuk Anda semua.
								</p>
								<p>
									Tipe Mobil         	: Minivan <br>
									Durasi            	: 12 Jam <br>
									Merk Mobil   		: Avanza <br>
									Tahun Buat     		: 2010 <br>
									Warna Mobil			: Hitam <br>
									Kapasitas			: 4-6 Orang <br>
									Transmisi			: Manual/Otomatis
								</p>
								<a class="text-uppercase primary-btn" href="#">More Details</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="{{asset('img/toyota avanza.jpg')}}" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="{{asset('img/toyota camry.jpg')}}" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="{{asset('img/car.jpg')}}" alt="">
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End model Area -->


			<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">
					<div class="row">
						<div class="col single-fact">
							<h1 align=center class="counter">500</h1>
							<p align=center>Saran dan Kritik</p>
						</div>
						<div class="col single-fact">
							<h1 align=center class="counter">1200</h1>
							<p align=center>Pengunjung Website</p>
						</div>
						<div class="col single-fact">
							<h1 align=center class="counter">1000</h1>
							<p align=center>Pemberi Rating</p>
						</div>				
					</div>
				</div>	
			</section>
			<!-- end fact Area -->							

			<!-- Start reviews Area -->
			<section class="reviews-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text text-center">
							<h1>Some Features that Made us Unique</h1>
							<p class="mb-10 text-center">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Cody Hines</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Chad Herrera</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Andre Gonzalez</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>							
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Jon Banks</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Landon Houston</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Nelle Wade</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End reviews Area -->
			

			<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Experience Great Support</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest From Our Blog</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{asset('img/b1.jpg')}}" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{asset('img/b2.jpg')}}" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b3.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{asset('img/b4.jpg')}}" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->
 
@endsection