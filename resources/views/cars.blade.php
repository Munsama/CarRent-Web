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
								Mobil			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars.html"> Mobil</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

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
								<img class="img-fluid" src="{{asset('img/car.jpg')}}" alt="">
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
			</section>
				
 
@endsection