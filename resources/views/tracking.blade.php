<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>CGX || Tracking</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{ secure_asset('TourNest-master/assets/logo/favicon2.png')}}"/>

		<!--font-awesome.min.css-->
		<!-- <link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/font-awesome.min.css')}}" /> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

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
		<!-- <link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/bootstrap.min.css')}}" /> -->
        <link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/bootstrap-3.3.1.css')}}" />

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
						<div class="col-sm-2" style="z-index: 10;">
							<div class="logo">
								<a href="{{ url('/')}}">
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
										<li class=""><a href="{{ route('home')}}/#home">Home</a></li>
										<li class=""><a href="{{ route('home')}}/#service">Service</a></li>
										<li class=""><a href="{{ route('home')}}/#faq">FAQ</a></li>
										<li class=""><a href="{{ route('home')}}/#contact-us">Contact Us </a></li>
										<li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ __('home.switch_language') }}&nbsp;<i class="fas fa-caret-down"></i>
                                            </a>
                                            <div class="dropdown-menu language" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item language-option {{ app()->getLocale() == 'en' ? 'active' : '' }}" style="padding: 10px 0 10px" href="{{ route('localization.switch', 'en') }}">English</a>
                                                <a class="dropdown-item language-option {{ app()->getLocale() == 'id' ? 'active' : '' }}" style="padding: 10px 0 10px" href="{{ route('localization.switch', 'id') }}">Bahasa Indonesia</a>
                                            </div>
                                        </li>
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
							<strong style="font-weight:450;">Track Shipment</strong>
						</h2>

					</div><!--/.gallery-header-->

					<div class="track-shipment-content">
                        <form>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="track-shipment-textarea">
                                        <textarea class="form-control" placeholder="You can track up to 3 Airwaybill Number (separated by commas)"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="track-shipment-captcha">
                                        <p for="captcha">Please check the box below to proceed.</p>
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
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

        <!--track-result start-->
		<section id="track-result" class="track-result">
			<div class="container">

				<div class="track-result-counter text-center">
                    <div class="track-result-header text-center">
						<h2>
							<strong  style="font-weight:450;">Your Track Information</strong>
						</h2>

					</div><!--/.gallery-header-->
                    <div class="accordion" id="accordionExample">
                        <div class="col-md-12 col-sm-12">
                            <div class="single-track-result-box">
                                <div class="track-result-content">
                                    <div class="row">
                                        <div class="col-md-5ths airwaybill">
                                            <div class="track-result-title ">
                                                <h2>Airwaybill Number</h2>
                                            </div>
                                            <div class="track-result-text">
                                                <p>12345</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5ths statusbill">
                                            <div class="track-result-title">
                                                <h2>Status</h2>
                                            </div>
                                            <div class="track-result-text">
                                                <p>Order Finished</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5ths recipient" style="">
                                            <div class="track-result-title">
                                                <h2>Recipient</h2>
                                            </div>
                                            <div class="track-result-text">
                                                <p>Jane Yarwood</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5ths dateandtime" style="">
                                            <div class="track-result-title">
                                                <h2>Date And Time Received</h2>
                                            </div>
                                            <div class="track-result-text">
                                                <p>02-07-2020, 16:06</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5ths detailbillbutton">
                                            <div class="track-result-detail" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
                                                <!-- <div class="parent" style="background:lightyellow; padding:6em"> -->
                                                    <a class="btn book-btn " aria-expanded="true" aria-controls="collapseOne">Detail</a>
                                                    <!-- <div class="child" style="background:gold; padding:1em">&mdash;</div> -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <hr class="haer" style="">
                                            <div class="track-result-expand">
                                                <!-- <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="containerrr">
                                                            <div class="circle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="detail-expand">
                                                        Completed
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="containerrr">
                                                        <ul>
                                                            <li>
                                                            <div class="detail-expand">
                                                                <div class="row">
                                                                    <div class="title col-md-3">Completed</div><div class="title-time col-md-3">05-07-2020, 16:06</div>
                                                                </div>
                                                                <div class="info">Package received by customer.</div>
                                                            </div><span class="number"></span>
                                                            </li>
                                                            <li>
                                                            <div class="detail-expand">
                                                                <div class="row">
                                                                    <div class="title col-md-3">In Transit</div><div class="title-time col-md-3">04-07-2020, 16:06</div>
                                                                </div>
                                                                <div class="info">Driver arrived at transit destination. Package sent to customer.</div>
                                                            </div><span class="number"></span>
                                                            </li>
                                                            <li>
                                                            <div class="detail-expand">
                                                                <div class="row">
                                                                    <div class="title col-md-3">Package Process</div><div class="title-time col-md-3">02-07-2020, 16:06</div>
                                                                </div>
                                                                <div class="info">Package received by driver. Reached halfway mark.</div>
                                                            </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.track-result-content-->
                            </div><!--/.single-track-result-box-->
                        </div><!--/.col-->
                    </div>

				</div><!--/.statistics-counter-->
			</div><!--/.container-->

		</section><!--/.track-result-->
        <!--track-result end-->

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
                                <a href="{{ route('home')}}/#home"><h2><strong>Company</strong></h2></a>
                                <br>
								<a href="{{ route('home')}}/#service"><h2>About</h2></a>
                                <br>
								<a href="{{ route('home')}}/#contact-us"><h2>Contact Us</h2></a>
                                <br>
								<a href="{{ route('home')}}/#faq"><h2>FAQ</h2></a>
                                <br>
								<a href="#track-shipment"><h2>Tracking</h2></a>
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
                            <a href="https://www.facebook.com/cgxlogistic"><img src="{{ secure_asset('TourNest-master/assets/images/home/fb.png')}}"/></a>
                            <a href="https://www.linkedin.com/company/pt.-citra-global-ekspresindo/"><img src="{{ secure_asset('TourNest-master/assets/images/home/li.png')}}"/></a>
                            <a href="https://www.instagram.com/cgx.id/"><img src="{{ secure_asset('TourNest-master/assets/images/home/ig.png')}}"/></a>
                            <a href="https://api.whatsapp.com/send?phone=6281311869937"><img src="{{ secure_asset('TourNest-master/assets/images/home/wa.png')}}"/></a>
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
