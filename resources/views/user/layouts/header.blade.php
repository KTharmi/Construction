<div class="top_menu row m0">
           		<div class="container">
					<div class="float-right ">
						<a class="dn_btn" href="{{route('home')}}">Login</a>
					</div>
           		</div>	
</div>	
<div class="main_menu">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<a class="navbar-brand logo_h" href="{{route('user.home')}}"><img src="{{asset('user/img/logo3.jpg')}}" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
				<ul class="nav navbar-nav menu_nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="{{route('user.home')}}">Home</a></li> 
					<li class="nav-item"><a class="nav-link" href="{{route('user.about')}}">About</a></li> 
					<li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{route('service.buildingDrawing')}}">Building Drawings</a>
								<li class="nav-item"><a class="nav-link" href="{{route('service.electrical')}}">Electrical </a>
								<li class="nav-item"><a class="nav-link" href="{{route('service.painting')}}">Painting </a>
								<li class="nav-item"><a class="nav-link" href="{{route('service.plumbing')}}">Plumbing </a>
								<li class="nav-item"><a class="nav-link" href="{{route('service.roofing')}}">Roofing </a>
								<li class="nav-item"><a class="nav-link" href="{{route('service.tiles')}}">Tiles Fitting</a>
							</ul>
					</li> 
					
					<li class="nav-item"><a class="nav-link" href="{{route('user.project')}}">Projects </a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('user.contact')}}">Contact</a></li>
				</ul>
				
			</div> 
		</div>
	</nav>
</div>