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
		<title>CGX</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{ secure_asset('TourNest-master/assets/logo/favicon.png')}}"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/font-awesome.min.css')}}" />

		<!--animate.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/animate.css')}}" />

		<!--hover.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/hover-min.css')}}">

        <!--flickity.css-->
		<link rel="stylesheet" href="{{ secure_asset('TourNest-master/assets/css/flickity.css')}}">

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
										<li class="smooth-menu"><a href="#home">Home</a></li>
										<li class="smooth-menu"><a href="#service">Service</a></li>
										<li class="smooth-menu"><a href="#faq">FAQ</a></li>
										<li class="smooth-menu"><a href="#contact-us">Contact Us </a></li>
										<li>
											<a style="padding-top:9px;" class="book-btn btn" href="{{ url('/tracking')}}">Tracking
											</a>
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


		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
                                        &nbsp;Solution In Need&nbsp;
									</h2>
                                    <br>
                                    <br>
                                    <h4>
                                        Let us store, pick up, and ship for you! so you
                                        can focus on your customer and growth.
                                    </h4>

								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">

							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		<!--travel-box start-->
		<section  class="travel-box">
        	<div class="container">
        		<div class="row">
        			<!-- <div class="col-md-12"> -->
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">



								<!-- Tab panes -->
								<div class="tab-content">

									<div role="tabpanel" class="tab-pane active fade in" id="tours">
										<div class="tab-para">

											<div class="row">
                                            <h3 style="padding-left:10px">
                                                <strong style="font-weight:450;font-size:17px;">Track Shipment</strong>
                                            </h3>
											</div><!--/.row-->

											<div class="row">
												<div class="col-md-9 col-sm-8">
													<div class="travel-budget">
														<div class="row">

															<div class="co-md-12 col-sm-12">


                                                                <div class="price_slider_amount">
                                                                    <input type="text" name="price"  placeholder="Enter Your Airwaybill Number" />
                                                                    <span></span>
                                                                </div><!--/.price_slider_amount-->

															</div><!--/.col-->
														</div><!--/.row-->
													</div><!--/.travel-budget-->
												</div><!--/.col-->
												<div class="col-md-3 col-sm-4">
													<div class="about-btn travel-mrt-0">
														<button  class="about-view travel-btn">
															Track
														</button><!--/.travel-btn-->
													</div><!--/.about-btn-->
												</div><!--/.col-->

											</div><!--/.row-->
                                            <br>
										</div><!--/.tab-para-->

									</div><!--/.tabpannel-->



								</div><!--/.tab content-->
							</div><!--/.desc-tabs-->
        				</div><!--/.single-travel-box-->
        			<!-- </div>/.col -->
        		</div><!--/.row-->
        	</div><!--/.container-->

        </section><!--/.travel-box-->
		<!--travel-box end-->

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">
                    <div class="service-header text-center">
						<h2>
							<strong style="font-weight:450;">Our Service (Overflow-x / Lama)</strong>
						</h2>

					</div><!--/.gallery-header-->
                    <div class="service-content-box">
                        <div class="col-md-4 col-sm-4">
                            <div class="single-service-box">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/store-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">
                                    <h2>
                                        <a href="#">
                                        Fulfillment
                                        </a>
                                    </h2>
                                    <p>Fulfill you business’s needs from storing, preparing, packing, as well as delivering orders.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->
                        </div><!--/.col-->

                        <div class="col-md-4 col-sm-4">
                            <div class="single-service-box">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/ship-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">
                                    <h2>
                                        <a href="#">
                                            Shipping
                                        </a>
                                    </h2>
                                    <p>Delivery services that handles the process of moving commodities, merchandise goods and cargo.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->
                        </div><!--/.col-->

                        <div class="col-md-4 col-sm-4">
                            <div class="single-service-box">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/web-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">

                                    <h2>
                                        <a href="#">
                                            API Integration
                                        </a>
                                    </h2>
                                    <p>Integrate with just about anything to fulfill all your needs.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->
                        </div><!--/.col-->
                    </div>
				</div><!--/.statistics-counter-->
			</div><!--/.container-->

		</section><!--/.service-->
        <!--service end-->

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">
                    <div class="service-header text-center">
						<h2>
							<strong style="font-weight:450;">Our Service (Flickity)</strong>
						</h2>

					</div><!--/.gallery-header-->
                    <div class="service-content-box carousel" data-flickity='{ "wrapAround": true, }'>
                        <div class="col-md-4 col-sm-4">
                            <div class="single-service-box carousel-cell">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/store-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">
                                    <h2>
                                        <a href="#">
                                        Fulfillment
                                        </a>
                                    </h2>
                                    <p>Fulfill you business’s needs from storing, preparing, packing, as well as delivering orders.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->
                        </div><!--/.col-->

                        <div class="col-md-4 col-sm-4">
                            <div class="single-service-box carousel-cell">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/ship-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">
                                    <h2>
                                        <a href="#">
                                            Shipping
                                        </a>
                                    </h2>
                                    <p>Delivery services that handles the process of moving commodities, merchandise goods and cargo.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->
                        </div><!--/.col-->

                        <div class="col-md-4 col-sm-4">
                            <div class="single-service-box carousel-cell">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/web-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">

                                    <h2>
                                        <a href="#">
                                            API Integration
                                        </a>
                                    </h2>
                                    <p>Integrate with just about anything to fulfill all your needs.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->
                        </div><!--/.col-->
                    </div>
				</div><!--/.statistics-counter-->
			</div><!--/.container-->

		</section><!--/.service-->
        <!--service end-->

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">
                    <div class="service-header text-center">
						<h2>
							<strong style="font-weight:450;">Our Service (Carousel)</strong>
						</h2>

					</div><!--/.gallery-header-->
                    <div class="service-content-box owl-carousel owl-theme" id="service-carousel">

                            <div class="single-service-box2">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/store-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">
                                    <h2>
                                        <a href="#">
                                        Fulfillment
                                        </a>
                                    </h2>
                                    <p>Fulfill you business’s needs from storing, preparing, packing, as well as delivering orders.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->



                            <div class="single-service-box2">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/ship-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">
                                    <h2>
                                        <a href="#">
                                            Shipping
                                        </a>
                                    </h2>
                                    <p>Delivery services that handles the process of moving commodities, merchandise goods and cargo.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->



                            <div class="single-service-box2">
                                <div class="service-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/service/web-icon.png')}}" alt="service-icon" />
                                </div><!--/.service-img-->
                                <div class="service-content">

                                    <h2>
                                        <a href="#">
                                            API Integration
                                        </a>
                                    </h2>
                                    <p>Integrate with just about anything to fulfill all your needs.</p>
                                </div><!--/.service-content-->
                            </div><!--/.single-service-box-->

                    </div>
				</div><!--/.statistics-counter-->
			</div><!--/.container-->

		</section><!--/.service-->
        <!--service end-->

        <!--special-offer start-->
        <section id="benefits" class="special-offer">
			<div class="container">
				<div class="special-offer-content">
					<div class="row">
						<div class="col-lg-5">
							<div class="single-special-offer">
								<div class="single-special-offer-txt">
									<h2><strong style="font-weight: 550;line-height: 1.5;letter-spacing: 1.5px;">Save Time & <br>Enjoy Our Benefits!</strong></h2>
								</div><!--/.single-special-offer-txt-->
							</div><!--/.single-special-offer-->
                        </div><!--/.col-->
                        <div class="benefit">
                            <div class="col-lg-7">
                                <div class="row" style="padding-bottom:10px;">
                                    <div class="benefit-image">
                                        <div class="col-md-2">
                                            <img src="{{ secure_asset('TourNest-master/assets/images/benefit/scallable-1.png')}}" alt="benefit-icon" />
                                        </div>
                                    </div>
                                    <div class="benefit-content">
                                        <div class="col-md-10">
                                            <h3>Scalability Fulfillment</h3>
                                            <p>We store, regular quality control check, profesionally pack, and manage your inventory. No matter how big or small, our space is ready for your company growth</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="row" style="padding-bottom:10px;">
                                    <div class="benefit-image">
                                        <div class="col-md-2">
                                            <img src="{{ secure_asset('TourNest-master/assets/images/benefit/analitik-1.png')}}" alt="benefit-icon" />
                                        </div>
                                    </div>
                                    <div class="benefit-content">
                                        <div class="col-md-10">
                                            <h3>Analytical Evaluation</h3>
                                            <p>We don't just pack and ship, we will also give you an in-depth insight (e.g: which product sells the most in which time of the year, etc). Giving you a more accurate knowledge of your customer behavior</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom:10px;">
                                    <div class="benefit-image">
                                        <div class="col-md-2">
                                            <img src="{{ secure_asset('TourNest-master/assets/images/benefit/accurate-1.png')}}" alt="benefit-icon" />
                                        </div>
                                    </div>
                                    <div class="benefit-content">
                                        <div class="col-md-10">
                                            <h3>Accurate Logistical Services</h3>
                                            <p>We arrange your shipment accurately with the most efficient cost. Whether its by land, air, sea, or multi mode, we deliver on time to satisfy you and your customer needs.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom:10px;">
                                    <div class="benefit-image">
                                        <div class="col-md-2">
                                            <img src="{{ secure_asset('TourNest-master/assets/images/benefit/secured-1.png')}}" alt="benefit-icon" />
                                        </div>
                                    </div>
                                    <div class="benefit-content">
                                        <div class="col-md-10">
                                            <h3>Secured Facility</h3>
                                            <p>Our facilities have 'round the clock (24/7) supervision, we guarantee your products safety and security.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.col-->
                        </div>
					</div><!--/.row-->
				</div><!--/.special-offer-content-->
			</div><!--/.container-->

		</section><!--/.special-offer end-->
        <!--special-offer end-->



        <!--clients start-->
		<!-- <section id="clients" class="clients">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						<strong style="font-weight:450;" >Clients</strong>
					</h2>
				</div>
				<div class="clients-content">

                    <div class="row text-center">
                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-airnav.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-big.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-everwhite.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/pakdeHD2.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-cut-lane.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/geofreight.png')}}" alt="Image Description">
                    </div>
                    <div class="row text-center">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-ojk.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-woobiz.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-rollerover.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-fors.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-wif.png')}}" alt="Image Description">

                        <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-transvision.png')}}" alt="Image Description">
                    </div>
				</div>
			</div>

		</section> -->
		<!--clients end-->

		<!-- testemonial Start -->
		<section   class="testemonial">
			<div class="container">

				<div class="client-header text-center">
					<h2>
						<strong style="font-weight:450;">Clients</strong>
					</h2>

				</div>
                <div class="carousel-content">
                    <div class="owl-carousel owl-theme" id="testemonial-carousel">

                        <div class="home1-testm item">
                                <div class="home1-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-airnav.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home1-testm item">
                                <div class="home1-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-cut-lane.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home1-testm item">
                                <div class="home1-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/geofreight.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home1-testm item">
                                <div class="home1-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-big.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home1-testm item">
                                <div class="home1-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-everwhite.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home1-testm item">
                                <div class="home1-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/pakdeHD2.png')}}" alt="img"/>
                                </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-content2">
                    <div class="owl-carousel owl-theme" id="testemonial-carousel2">
                        <div class="home2-testm item">
                                <div class="home2-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-ojk.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home2-testm item">
                                <div class="home2-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-rollerover.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home2-testm item">
                                <div class="home2-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-transvision.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home2-testm item">
                                <div class="home2-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-fors.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home2-testm item">
                                <div class="home2-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-wif.png')}}" alt="img"/>
                                </div>
                        </div>

                        <div class="home2-testm item">
                                <div class="home2-testm-img">
                                    <img src="{{ secure_asset('TourNest-master/assets/images/client/bw-woobiz.png')}}" alt="img"/>
                                </div>
                        </div>
                    </div>
				</div>
			</div>

		</section>
        <!-- testemonial End -->

        <!-- testemonial Start -->
		<!-- <section   class="testemonial">
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						<strong style="font-weight:450;">Clients</strong>
					</h2>

				</div>

				<div class="owl-carousel owl-theme" id="testemonial-carousel2">

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-airnav.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-cut-lane.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/geofreight.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-big.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-everwhite.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/pakdeHD2.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

                    </div>

                    <div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-ojk.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-rollerover.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-transvision.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-fors.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

                    </div>

                    <div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-wif.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

                    </div>

                    <div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{ secure_asset('TourNest-master/assets/images/client/bw-woobiz.png')}}" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div>
						</div>

					</div>

				</div>
			</div>

		</section> -->
        <!-- testemonial End -->

        <section id="faq" class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-header text-center">
                            <h2>
                                <strong style="font-weight:450;">Frequently Asked Questions</strong>
                            </h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <hr>
                            <div class="card">
                                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
                                    <h2 class="clearfix mb-0">
                                        <a class="btnn btn-link"  aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-chevron-circle-down"></i> How much does the shipment and warehouse services cost at CGX?</a>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">Our prices and rates here at CGX are standard published rate that you can acquire by emailing us at support@cgx.co.id . However, we also offer customized prices and rates that can be adjusted based on your needs.</div>
                                </div>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo">
                                    <h2 class="mb-0">
                                        <a class="btnn btn-link collapsed"  aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-chevron-circle-down"></i> How does CGX shipment process works?</a>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">Our shipment process will be based on the type of service and mode of transportation of your choosing. After we receive a delivery order, our well-trained and experienced operational team will deliver your package safely & accurately.</div>
                                </div>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
                                    <h2 class="mb-0">
                                        <a class="btnn btn-link collapsed"  aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-chevron-circle-down"></i> What are the types of shipment services that CGX offer?</a>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">Ensuring that your package arrives safely is our number one priority. We offer various modes of transportation ranging from Land Transport, Sea Transport, Air Transport, as well as Multi Mode. We also offer shipment via our Courier Service. In addition, CGX also accepts overseas and international shipping services.</div>
                                </div>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour">
                                    <h2 class="mb-0">
                                        <a class="btnn btn-link collapsed"  aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-chevron-circle-down"></i> How does the fulfillment process works?</a>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">CGX fulfillment service manage three crucial parts in an operational system which includes; stock management, item delivery, as well as inventory that are done by professionals. We offer this service with reasonable prices, strategic location, and any risks that might occur in our warehouse are under our responsibility.</div>
                                </div>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive">
                                    <h2 class="mb-0">
                                        <a class="btnn btn-link collapsed"  aria-expanded="false" aria-controls="collapseFive"><i class="fa fa-chevron-circle-down"></i> Does CGX services includes insurance?</a>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">CGX offers the best treatment possible for all of our services. For risks that might occur in our warehouse are 100% covered by CGX and will be under our responsibility. However for any shipment services, insurance will be provided upon request depending on the value of items that you wish to insure.</div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us" class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h5>
                                CONTACT US
                            </h5>
                            <br >
                            <div class="client-header">
                                <h2 >
                                    <strong style="font-weight:450;">Let's Grow Together!</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="contact-us-content">
                            <form action="https://api.sheetmonkey.io/form/weGTtjNeSaDqYbg3qLbyhw" method="post">
                                <!-- {{ csrf_field() }} -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-contact-us">
                                            <div class="col-md-6">
                                                <div class="responsive-contact-us">
                                                    <input class="form-control" name="Name" placeholder="Name" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="responsive-contact-us">
                                                    <input class="form-control" name="Email" placeholder="Email" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-contact-us">
                                            <div class="col-md-6">
                                                <div class="responsive-contact-us">
                                                    <input class="form-control" name="Company" placeholder="Company" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="responsive-contact-us">
                                                    <input class="form-control" name="Phone-Number" placeholder="Phone Number" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-contact-us-textarea">
                                            <textarea  rows="4" cols="50" class="form-control" name="Project-Description" placeholder="How can we help you? Tell us about project description"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-contact-us">
                                        <button type="submit" class="btn">Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

								<h2>About</h2>

								<h2>Contact Us</h2>

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
				<div class="foot-icons">
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

		<!--flickity-->
        <script src="{{ secure_asset('TourNest-master/assets/js/flickity.js')}}"></script>

		<!--Custom JS-->
		<script src="{{ secure_asset('TourNest-master/assets/js/custom.js')}}"></script>


	</body>

</html>
