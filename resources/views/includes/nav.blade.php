 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Readal</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
       
          <li><a href="{{url('index')}} ">Home</a></li>
          <li><a class="active" href=" {{url('about')}} ">About</a></li>
          <li><a href="{{url('book')}} ">Courses</a></li>
          <li><a href="{{url('event')}} ">Events</a></li> 

          <li><a href="{{url('contact')}} ">Contact</a></li> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{url('book')}}" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->