<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>CGX || Tracking</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{ secure_asset('TourNest-master/assets/logo/favicon.png')}}"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/font-awesome.min.css')}}" />

		<!--animate.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/animate.css')}}" />

		<!--hover.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/hover-min.css')}}">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="{{ secure_asset('TourNest-master/assets/css/datepicker.css')}}" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/owl.theme.default.min.css')}}"/>

		<!-- range css-->
        <link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/jquery-ui.min.css')}}" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/bootstrap.min.css')}}" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/bootsnav.css')}}"/>

		<!--style.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/style.css')}}" />

		<!--responsive.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/responsive.css')}}" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
                                <img src="{{ secure_asset('TourNest-master/assets/images/home/cgxlogo.png')}}"/>
									<!-- C<span>GX</span> -->
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">

								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">Home</a></li>
										<li class="smooth-menu"><a href="#service">Service</a></li>
										<li class="smooth-menu"><a href="#faq">FAQ</a></li>
										<li class="smooth-menu"><a href="#contact-us">Contact Us </a></li>
										<!-- <li class="smooth-menu"><a href="#blog">blog</a></li>
										<li class="smooth-menu"><a href="#subs">subscription</a></li> -->
										<li>
											<button class="book-btn">Tracking
											</button>
										</li><!--/.project-btn-->
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->

				</div><!-- /.container-->
			</div><!-- /.header-area -->
            <div class="home-border"></div><!-- /.home-border-->
		</header><!-- /.top-area-->
		<!-- main-menu End -->


        <!--track-shipment start-->
		<section id="track-shipment" class="track-shipment">
			<div class="container">


                    <div class="service-header text-center">
						<h2>
							<strong>Track Shipment</strong>
						</h2>

					</div><!--/.gallery-header-->

					<div class="track-shipment-content">
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="track-shipment-textarea">
                                        <textarea class="form-control" placeholder="You can track up to 10 Airwaybill Number (separated by commas, spaces, or newlines)"></textarea>
                                    </div>
                                </div>
                                <div class="btn-track-shipment">
                                    <button type="submit" class="btn">Track
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


			</div><!--/.container-->

		</section><!--/.track-shipment-->
        <!--track-shipment end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-2">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="index.html">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/home/cgxlogo.png')}}"/>
									</a>
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-2">
							<div class="single-footer-item">
                                <h2><strong>Company</strong></h2>
                                <br>
								<h2>About</h2>
                                <br>
								<h2>Contact Us</h2>
                                <br>
								<h2>FAQ</h2>
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-4">
							<div class="single-footer-item">
								<div class="single-footer-txt">
                                    <p>Office:</p>
									<p>Jalan Raya Pondok Gede No. 1 8R,</p>
									<p>Jakarta Timur, Indonesia I 3810</p>
                                    <br>
                                    <p>Werehouse :</p>
                                    <p>Jalan Wibawa Mukti No.90,</p>
                                    <p>Jati Asih, Bekasi, Indonesia</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-4">
							<div class="single-footer-item text-center">
								<div class="single-footer-txt text-left">
									<p>Phone:</p>
									<p>Phone: 021 8243 5678</p>
									<p>Mobile: +62 813-8595-4267</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>&copy; 2019 CGXLOGISTICS</p>
                        </div>
                        <div class="col-sm-6 img-footer">
                            <img src="{{ secure_asset('TourNest-master/assets/images/home/social.png')}}"/>
                        </div>
                    </div>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
        $(document).ready(function(){
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function(){
                $(this).prev(".card-header").addClass("highlight");
            });

            // Highlight open collapsed element
            $(".card-header .btn").click(function(){
                $(".card-header").not($(this).parents()).removeClass("highlight");
                $(this).parents(".card-header").toggleClass("highlight");
            });
        });
        </script>


		<script src="{{ secure_asset('TourNest-master/assets/js/jquery.js')}}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="{{ secure_asset('TourNest-master/assets/js/bootstrap.min.js')}}"></script>

		<!-- bootsnav js -->
		<script src="{{ secure_asset('TourNest-master/assets/js/bootsnav.js')}}"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="{{ secure_asset('TourNest-master/assets/js/jquery.filterizr.min.js')}}"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="{{ secure_asset('TourNest-master/assets/js/jquery-ui.min.js')}}"></script>

        <!-- counter js -->
		<script src="{{ secure_asset('TourNest-master/assets/js/jquery.counterup.min.js')}}"></script>
		<script src="{{ secure_asset('TourNest-master/assets/js/waypoints.min.js')}}"></script>

		<!--owl.carousel.js-->
        <script  src="{{ secure_asset('TourNest-master/assets/js/owl.carousel.min.js')}}"></script>

        <!-- jquery.sticky.js -->
		<script src="{{ secure_asset('TourNest-master/assets/js/jquery.sticky.js')}}"></script>

        <!--datepicker.js-->
        <script  src="{{ secure_asset('TourNest-master/assets/js/datepicker.js')}}"></script>

		<!--Custom JS-->
		<script src="{{ secure_asset('TourNest-master/assets/js/custom.js')}}"></script>


	</body>

</html>
