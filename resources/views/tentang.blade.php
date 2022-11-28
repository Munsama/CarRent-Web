<!-- Menghubungkan dengan view template master -->
@extends('master')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

 <!-- start banner Area -->
 <section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Tentang Kami				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> Tentang Kami</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="{{asset('img/about-img.jpg')}}" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h2>Carrent Surabaya<br>
						Car Rental Murah dan Profesional</h1>
							<p>
								<span>Kami hadir disini mendengarkan Anda untuk memberikan keunggulan</span>
							</p>
							<p align=justify>
							Rental Mobil Surabaya murah hadir di Surabaya – Selamat datang di website kami.
							Kami Berkomitmen untuk melayani Anda berlibur ke tempat wisata manapun dengan berbagai jenis kendaraan.
							<br>
							Dan sebagai salah satu tempat sewa mobil di Surabaya, kami selalu berusaha meningkatkan dan menjaga pelayanan kepada para pelanggan.
							Kami juga selalu menjaga kondisi kendaraan secara berkala demi menambah kenyamanan para wisatawan yang menggunakan jasa kami. 


							</p>	
			</section>
			<!-- End home-about Area -->	

			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Apa yang Harus Anda Ketahui?</h1>
							<p>
								Let's Get Start it!
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4 align = center></span>Sejarah Carrent</h4>
								<p align =justify>
								Carrent adalah sebuah website yang bergerak di bidang IT dan jasa transportasi. Selama berkecimpung di bidang jasa transportasi. Banyak di antara pelaku jasa sewa mobil kurang memperhatikan kemudahan calon pelanggan untuk mendapatkan mobil yang benar-benar mereka inginkan.
Carrent yang menyadari perkembangan pesat penggunaan website mempunyai inisiatif untuk mencarikan solusi antara pelaku jasa rental mobil dengan calon pelanggan. Dilandasi keinginan Carrent untuk membantu penyewa mobil mendapatkan mobil pilihan, dan membantu rental mobil memasarkan produk-produk jasa sewa mobil online, serta mendukung pariwisata Indonesia.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4 align=center></span>Keunggulan Carrent</h4>
								<p align = justify>
								Layanan  mudah diakses, fleksibel, mampu menampilkan harga termurah, dan meliputi banyak varian mobil. <br><br>
								Carrent benar-benar mendata setiap mobil secara detail.<br><br>
								Carrent menyediakan informasi lengkap mulai dari kondisi umum mobil hingga plat nomor mobil.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4 align=center></span>Bantuan Layanan Carrent</h4>
								<p align = justify>
								Jika Anda mempunyai pertanyaan tentang rencana perjalanan atau belanja Anda, mohon Kontak Kami <br><br>
								Email : carrent@gmail.com<br>
								</p>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			
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
							<h1>Ulasan</h1>
							<p class="mb-10 text-center">
								Kritik Saran Rating
							</p>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Muqit NS</h4>
								<p>
									Sangat bermanfaat, memberi wadah informasi tentang rental mobil di Surabaya
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Renanda Faulina</h4>
								<p>
									Kurang menyeluruh informasi rental mobil yang diberikan
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Alya Ramadhani</h4>
								<p>
									Bagus, sangat membantu
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
								<h4>Aulia Mufidatur</h4>
								<p>
									Informatif, tetapi lebih diperbaiki lagi
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
								<h4>Pratiwi</h4>
								<p>
									Sangat menarik, cukup dibuat untuk referensi menyewa mobil dan melihat-lihat paket wisata
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Sherlyani</h4>
								<p>
									Informasi penyewaan sangat lengkap dan informatif sekali. Terimakasih Carrent
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End reviews Area -->
 
@endsection