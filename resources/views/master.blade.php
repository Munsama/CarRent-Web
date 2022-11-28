<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS 
			============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}"> 
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">					
			<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('css/main.css')}}">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="carrent"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="carrent">Beranda</a></li>
				          <li class="menu-active">><a href="tentang">Tentang Kami</a></li>
									<li class="menu-active">><a href="cars">List Kendaraan</a></li>
									<li class="menu-active">><a href="pw">Paket Wisata</a></li>
									<li class="menu-active">><a href="blog">Blog</a></li>	
									<li class="menu-active">><a href="testimonial">Testimonial</a></li>
									<li class="menu-active">><a href="kontak">Kontak Kami</a></li>
									@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Hello {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest	
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
 
 
	<!-- bagian konten blog -->
	@yield('konten')

				<!-- start footer Area -->		
                <footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Tentang Carrent</h6>
								
							<p align=justify>
							Rental Mobil Surabaya murah hadir di Surabaya – Selamat datang di website kami.
							Kami Berkomitmen untuk melayani Anda berlibur ke tempat wisata manapun dengan berbagai jenis kendaraan.
							<br>
							Dan sebagai salah satu tempat sewa mobil di Surabaya, kami selalu berusaha meningkatkan dan menjaga pelayanan kepada para pelanggan.
							Kami juga selalu menjaga kondisi kendaraan secara berkala demi menambah kenyamanan para wisatawan yang menggunakan jasa kami. 


							</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-7 col-sm-7">
							<div class="single-footer-widget">
								<h6>Komentar Terbaru</h6>
								<ul>
									<li><a  align=justify class="fa fa-circle" href="#"> Sangat bermanfaat, memberi wadah informasi tentang rental mobil di Surabaya </a></li>
									<li><a  align=justify class="fa fa-circle" href="#"> Kurang menyeluruh informasi rental mobil yang diberikan</a></li>
									<li><a  align=justify class="fa fa-circle" href="#"> Bagus, sangat membantu</a></li>
									<li><a  align=justify class="fa fa-circle" href="#"> Informatif, tetapi lebih diperbaiki lagi</a></li>
									<li><a  align=justify class="fa fa-circle" href="#"> Sangat menarik, cukup dibuat untuk referensi menyewa mobil dan melihat-lihat paket wisata</a></li>
									<li><a  align=justify class="fa fa-circle" href="#"> Informasi penyewaan sangat lengkap dan informatif sekali. Terimakasih Carrent</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>												
												
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-50 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>											
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="{{asset('js/easing.min.js')}}"></script>			
			<script src="{{asset('js/hoverIntent.js')}}"></script>
			<script src="{{asset('js/superfish.min.js')}}"></script>	
			<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>			
			<script src="{{asset('js/jquery.sticky.js')}}"></script>
			<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>	
			<script src="{{asset('js/waypoints.min.js')}}"></script>
			<script src="{{asset('js/jquery.counterup.min.js')}}"></script>					
			<script src="{{asset('js/parallax.min.js')}}"></script>		
			<script src="{{asset('js/mail-script.js')}}"></script>	
            <script src="{{asset('js/main.js')}}"></script>
		</body>
	</html>