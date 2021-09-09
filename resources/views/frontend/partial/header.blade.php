<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/logo.png" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home"><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><span>About</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#menu"><span>Menu</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#gallery"><span>Gallery</span></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#chef"><span>Chef</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pricing"><span>Pricing</span></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog"><span>Blog</span></a>
            </li>
            @if(auth()->user())
         <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="{{route('customer.logout')}}"><span>Logout</span></a>
         </li>
         <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href= "">{{auth()->user()->name}}</a>
         </li>

         @else
         <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('customer.login')}}"><span>Login</span></a>
       </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('user.signup')}}"><span>Signup</span></a>
            </li>
           @endif

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span>Contect Us</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
