@extends('user/app')
@section('main-contend')
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
			<img src="{{asset('user/img/banner/banner.jpeg')}}">
			<!-- <div class="overlay bg-parallax" data-stellar-ratio="0.5" data-stellar-vertical-offset="100%" data-background="fixed"></div>
				<div class="container">
					<div class="banner_content text-center">
						<h3>Build Your Dream <span>With Us</span></h3>
						<p>We will give live to your dream house</p>
						<p>Dream better To live better<p>
					</div>
            </div> -->
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Services Area =================-->
        <section class="services_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Our Offered Services</h2>
        			<h3>Other than building houses we offer more services to make your house more beautiful</h3>
        		</div>
        		<div class="row services_inner">
        			<div class="col-lg-4">
        				<div class="services_item">
        					<img src="{{asset('user/img/architect.jpg')}}" alt="">
							<a href="{{route('service.buildingDrawing')}}"><h4>Building Drawings</h4></a>
        					<p>The main purpose of construction drawings is to provide a graphic representation of what is to be built. </p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="services_item">
						<img src="{{asset('user/img/painter.jpg')}}" alt="">
        					<a href="{{route('service.painting')}}"><h4>Painting Constructions</h4></a>
        					<p>A good paint job beautifies and adds character and personality to your home. it's important to take sufficient time planning which colors, shades, and paint styles you want to decorate your home with.</p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="services_item">
						<img src="{{asset('user/img/plumbern.jpg')}}" alt="">
        					<a href="{{route('service.plumbing')}}"><h4>Plumbing Constructions</h4></a>
        					<p> Plumbing uses pipes, valves, plumbing fixtures, tanks, and other apparatuses to convey fluids.</p>
        				</div>
        			</div>
					<div class="col-lg-4">
        				<div class="services_item">
        					<img src="{{asset('user/img/electrician.jpg')}}" alt="">
							<a href="{{route('service.electrical')}}"><h4>Electrical Services</h4></a>
        					<p>You can get help of our electricians for installing electric switches, switchboards, fans, and appliances.</p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="services_item">
						<img src="{{asset('user/img/roofing.jpg')}}" alt="">
        					<a href="{{route('service.roofing')}}"><h4>Roofing Constructions</h4></a>
        					<p>A healthy roof protects your home from the elements, saves energy, helps avoid serious leaks, adds curb appeal and value and can even help keep your family healthy.</p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="services_item">
						<img src="{{asset('user/img/tiles.jpg')}}" alt="">
        					<a href="{{route('service.tiles')}}"><h4>Tiles Fittings</h4></a>
        					<p>These tiles have a number of qualities that make them perfect for tiling almost any part of the building. Delivering thermal, chemical, and mechanical characteristics, ceramic tiles are resistant to impact, force, stain, and water absorption.</p>
        				</div>
        			</div>
					
        		</div>
        	</div>
        </section>
        <!--================End Services Area =================-->
        
        <!--================Builder Image Area =================-->
        <section class="builder_area">
        	<div class="main_title">
        		<h3>Our Latest Projects</h3>
        	
				<div class="row m0 builder_inner">
					<div class="builder_item">
					<img src="{{asset('user/img/1.jpg')}}" alt="">
						<div class="hover">
							<h4>House Project 1</h4>
							<p>Sangaththanai, Chavakachcheri</p>
						</div>
					</div>
					<div class="builder_item">
					<img src="{{asset('user/img/6.jpg')}}" alt="">
						<div class="hover">
							<h4>House Project 2</h4>
							<p>Kaithady , Jaffna</p>
						</div>
					</div>
					<div class="builder_item">
					<img src="{{asset('user/img/5.jpg')}}" alt="">
						<div class="hover">
							<h4>House Project 3</h4>
							<p>Avarangal, Pointpedro</p>
						</div>
					</div>
				</div>	
			</div>
        </section>
        <!--================End Builder Image Area =================-->
        
        <!--================Team Area =================-->
        <section class="team_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Meet Our Expert Members</h2>
        			<p>Get our experts' advice before starting your dream project</p>
        		</div>
        		<div class="row team_inner">
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="img-fluid" src="{{asset('user/img/team/team-2.jpg')}}" alt="">
        						<div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Pragash</h4>
        						<p>Owner Of The Company</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="img-fluid" src="{{asset('user/img/team/team-4.jpg')}}" alt="">
        						<div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Hajany</h4>
        						<p>Architect</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="img-fluid" src="{{asset('user/img/team/team-1.jpg')}}" alt="">
        						<div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Rega Theepan</h4>
        						<p>Site Engineer</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="img-fluid" src="{{asset('user/img/team/team-3.jpg')}}" alt="">
        						<div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Sarangan</h4>
        						<p>Construction Manager</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Team Area =================-->
        
        <!--================Counter Area =================-->
        <section class="counter_area">
        	<div class="container">
        		<div class="row counter_inner">
        			<div class="counter_item">
        				<h4 class="counter">8</h4>
        				<p>Projects Completed</p>
        			</div>
        			<div class="counter_item">
        				<h4 class="counter">8</h4>
        				<p>Really Happy Clients</p>
        			</div>
					<div class="counter_item">
        				<h4 class="counter">0</h4>
        				<p>unsatisfied clients</p>
        			</div>
        			<div class="counter_item">
        				<h4 class="counter">5</h4>
        				<p>On Going Projects</p>
        			</div>
						<div class="counter_item">
        				<h4 class="counter">2</h4>
        				<p>Projects Not Yet Started</p>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Counter Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Some Features that Made us Unique</h2>
        			<p>This is how we outshine in our industry </p>
        		</div>
        		<div class="row feature_inner">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-user"></i>Expert Technicians</h4>
        					<p>We have well performing technicians who are very talented in construction works</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-license"></i>Professional Service</h4>
        					<p>We give more services professionaly to our customers</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-phone"></i>Great Support</h4>
        					<p>We will give such a great support to build your dream building</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-rocket"></i>Technical Skills</h4>
        					<p>We are much talented in technical side</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-diamond"></i>Highly Recomended</h4>
        					<p>We are highly recommended in our surrounding areas</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Positive Reviews</h4>
        					<p>Almost all our clients are really happy in seeing the final output and giving positive reviews</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
		@endsection       
    