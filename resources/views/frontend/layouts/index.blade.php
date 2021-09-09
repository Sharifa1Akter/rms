@extends('frontend.master')
@section('content')


<section id="home" class="main-banner">

		<div class="slider-new-2 owl-carousel owl-theme">

			<div class="item slider-screen">
				<div class="slider-img-full">
					<img src="{{ asset('frontend/uploads/slider-01.jpg') }}" alt="" />
				</div>
				<div class="container">
					<div class="slider-content text-white">
						<div class="in-box">
							<h2>Awesome Restaurant, Best Recipes for Dinner </h2>
							<p>Specialized in design and coding graphics and websites.</p>
							<a class="btn-slider hvr-radial-in" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item slider-screen">
				<div class="slider-img-full">
					<img src="{{ asset('frontend/uploads/slider-02.jpg') }}"" alt="" />
				</div>
				<div class="container">
					<div class="slider-content text-white">
						<div class="in-box">
							<h2>Awesome Restaurant, Best Recipes for Dinner</h2>
							<p>Specialized in design and coding graphics and websites.</p>
							<a class="btn-slider hvr-radial-in" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item slider-screen">
				<div class="slider-img-full">
					<img src="{{ asset('frontend/uploads/slider-03.jpg') }}" alt="" />
				</div>
				<div class="container">
					<div class="slider-content text-white">
						<div class="in-box">
							<h2>Awesome Restaurant, Best Recipes for Dinner</h2>
							<p>Specialized in design and coding graphics and websites.</p>
							<a class="btn-slider hvr-radial-in" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>



    <div id="about" class="section lb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Welcome to Green Special Restaurant.</h2>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
						<p>Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero,
						   eu bibendum risus. Phasellus et congue justo.</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Nullam ut massa id odio imperdiet consequat.</li>
							<li>Cras ullamcorper nisi eget condimentum aliquet. </li>
							<li>Cras id libero iaculis, sodales ligula vitae, egestas odio.</li>
							<li>Aenean congue ex et bibendum porta.</li>
						</ul>
                        <a href="#" class="sim-btn hvr-radial-in"><span>Contact Us</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="{{ asset('frontend/uploads/about_01.png') }}" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<div class="section cont-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="inner-cont-box">
						<i class="flaticon-review"></i>
						<h3 class="counter-number">5000</h3>
						<h4>Client</h4>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="inner-cont-box">
						<i class="flaticon-alarm-clock"></i>
						<h3 class="counter-number">3000</h3>
						<h4>Time Of Work</h4>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="inner-cont-box">
						<i class="flaticon-idea"></i>
						<h3 class="counter-number">2000</h3>
						<h4>Ideas</h4>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="inner-cont-box">
						<i class="flaticon-projector-screen"></i>
						<h3 class="counter-number">8000</h3>
						<h4>Project Done</h4>
					</div>
				</div>
			</div>
		</div>
	</div>




    <div id="menu" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Menu</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->


            <div class="row">
                @foreach($items as $data)
				<div class="col-md-3">
                    <div class="services-inner-box">
					<p class="best_text">{{$data->name}} </p>
						<div class="ser-icon">
							<img src="{{ asset('app/uploads/'.$data->image) }}" class="img-fluid" alt="" />
						</div>
						<h2>Vegetable Name rty..</h2>
						<a class="hvr-radial-in" href="#">{{$data->price}}</a>
					</div>
                </div><!-- end col -->


                @endforeach

            </div><!-- end row -->
        </div><!-- end container -->

    </div><!-- end section -->




	<div id="gallery" class="section wb">
		<div class="container-fluid">
			<div class="section-title text-center">
                <h3>Gallery</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

			<div class="gallery-menu text-center row">
				<div class="col-md-12">
					<div class="button-group filter-button-group">
						<button class="hvr-radial-in active" data-filter="*">All</button>
						<button class="hvr-radial-in" data-filter=".gal_a">Starters</button>
						<button class="hvr-radial-in" data-filter=".gal_b">Shops</button>
						<button class="hvr-radial-in" data-filter=".gal_c">Main Course </button>
						<button class="hvr-radial-in" data-filter=".gal_d">Desserts</button>
					</div>
				</div>
			</div>

			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food</h3>
							<a href="{{ asset('frontend/uploads/gallery_img-01.jpg') }}uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-02.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food</h3>
							<a href="{{ asset('frontend/uploads/gallery_img-02.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('frontend/uploads/gallery_img-03.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food</h3>
							<a href="{{ asset('frontend/uploads/gallery_img-03.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="{{ asset('frontend/uploads/gallery_img-04.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food</h3>
							<a href="{{ asset('frontend/uploads/gallery_img-04.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
					<div class="gallery-single fix">
						<img src="{{ asset('frontend/uploads/gallery_img-05.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{ asset('frontend/uploads/gallery_img-05.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
					<div class="gallery-single fix">
						<img src="{{ asset('frontend/uploads/gallery_img-06.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{ asset('frontend/uploads/gallery_img-06.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="{{ asset('frontend/uploads/gallery_img-07.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{ asset('frontend/') }}uploads/gallery_img-07.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_d gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('frontend/uploads/gallery_img-08.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{ asset('frontend/uploads/gallery_img-08.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_d gal_a">
					<div class="gallery-single fix">
						<img src="{{ asset('frontend/uploads/gallery_img-09.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{ asset('frontend/uploads/gallery_img-09.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	 <div id="testimonials" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="{{ asset('frontend/uploads/img-1.jpg') }}" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="uploads/img-2.jpg" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="uploads/img-3.jpg" alt="" class="img-fluid">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team. </p>
                            </div>
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="uploads/img-1.jpg" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="uploads/img-2.jpg" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="uploads/img-3.jpg" alt="" class="img-fluid">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team. </p>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<div id="chef" class="section wb">
		<div class="container-fluid">
			<div class="section-title text-center">
                <h3>Meet Our Team</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

			<div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="uploads/img-1.png" alt="">
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Senior Chef</span>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="uploads/img-2.png" alt="">
                        <div class="team-content">
                            <h3 class="title">kristina</h3>
                            <span class="post">Senior Chef</span>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="uploads/img-3.png" alt="">
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">Senior Chef</span>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="uploads/img-4.png" alt="">
                        <div class="team-content">
                            <h3 class="title">Miranda joy</h3>
                            <span class="post">Senior Chef</span>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>

	<div id="pricing" class="section lb">
		<div class="container-fluid">
			<div class="section-title text-center">
                <h3>Our Pricing</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable pri-bg-a">
						<div class="pricingTable-header">
							<h3 class="title">Basic</h3>
							<div class="price-value">
								<div class="value">
									<span class="amount">$10.00</span>
									<span class="month">per Month</span>
								</div>
							</div>
						</div>
						<ul class="pricing-content">
							<li>50GB Disk Space</li>
							<li>50 Email Accounts</li>
							<li>50GB Monthly Bandwidth</li>
							<li>10 Subdomains</li>
							<li>15 Domains</li>
						</ul>
						<a href="#" class="hvr-radial-in pricingTable-signup"><i class="fa fa-dot-circle-o"></i>Buy Now</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="pricingTable pri-bg-b">
						<div class="pricingTable-header">
							<h3 class="title">Standard</h3>
							<div class="price-value">
								<div class="value">
									<span class="amount">$20.00</span>
									<span class="month">per Month</span>
								</div>
							</div>
						</div>
						<ul class="pricing-content">
							<li>60GB Disk Space</li>
							<li>60 Email Accounts</li>
							<li>60GB Monthly Bandwidth</li>
							<li>15 Subdomains</li>
							<li>20 Domains</li>
						</ul>
						<a href="#" class="hvr-radial-in pricingTable-signup"><i class="fa fa-dot-circle-o"></i>Buy Now</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="pricingTable pri-bg-c">
						<div class="pricingTable-header">
							<h3 class="title">Premium</h3>
							<div class="price-value">
								<div class="value">
									<span class="amount">$30.00</span>
									<span class="month">per Month</span>
								</div>
							</div>
						</div>
						<ul class="pricing-content">
							<li>70GB Disk Space</li>
							<li>70 Email Accounts</li>
							<li>70GB Monthly Bandwidth</li>
							<li>20 Subdomains</li>
							<li>25 Domains</li>
						</ul>
						<a href="#" class="hvr-radial-in pricingTable-signup"><i class="fa fa-dot-circle-o"></i>Buy Now</a>
					</div>
				</div>
			</div>

		</div>
	</div>


	<div id="blog" class="section wb">
		<div class="container-fluid">
			<div class="section-title text-center">
                <h3>Blog</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="uploads/blog-01.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="uploads/blog-02.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="uploads/blog-03.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Contact</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="date" type="text" placeholder="Date" required="required" data-validation-required-message="Please enter Date.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="time" type="text" placeholder="Time" required="required" data-validation-required-message="Please enter Time.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-radial-in" data-text="Send Message" type="submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->





@endsection
