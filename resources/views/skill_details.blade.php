
@extends('layouts.pageCon')
@section('content')


<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

<main id="main">
  
    
  <section>
<div class="services-area2">
<div class="container">
<div class="row">
<iv class="col-xl-9 col-lg-9 col-md-6">
<div class="row">
<div class="col-xl-12">

<div class="single-services d-flex align-items-center mb-0">
<div class="features-img">
<img src="{{ Storage::url($skill->book_cover) }}" alt="">
</div>
<div class="features-caption">
<h3>{{ucfirst($skill->book_title)}}</h3>
<p>{{ucfirst($skill->category->category ?? 'None' )}}</p>
<div class="price">
<span>₦{{$skill->price}}</span>
</div>
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div> 
<!-- <p>(120 Review)</p> -->
</div>
<button id="" class="white-btn mr-10"><i class="fa fa-download"> </i>Buy Course Now</button>
<button id="" class="white-btn mr-10"><i class="fa fa-download"> </i>Know More</button>

<button  href="#" class="border-btn share-btn"><i class="fas fa-share-alt"></i></button >
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="our-client section-padding best-selling">
<div class="container">
<div class="row">
<div class="offset-xl-1 col-xl-10">
<div class="nav-button f-left">

<nav>
<div class="nav nav-tabs " id="nav-tab" role="tablist">
<a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Description</a>
<a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">Author</a>
<a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Comments</a>
<a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Review</a>
</div>
</nav>

</div>
</div>
</div>
</div>
<div class="container">

<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

<div class="row">
<div class="offset-xl-1 col-lg-7">
<p>{{ucfirst($skill->book_desc)}}</p>
</div>
</div>
</div>


</div>
</section>


</main>



<!-- Authors Modal -->
<!-- <div class="modal fade" id="SendEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Your Information is save</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

 
    
      </div>
      <form id="downloadEmail">
      <div class="modal-body">-->
        <!-- input title -->
        
        
       <!--  <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="" id="email" class="email form-control">

         </div>

        <div class="form-group mb-3">
            <label for="name">Phone Number</label>
            <input type="text" name="phone" placeholder="e.g +2347012345678" id="phone" class="phone form-control">
        </div> 
    
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary SendEmail">Send</button>
      </div>
      </form>
    </div>
  </div>
</div> -->
@endsection



<!-- end add author -->
