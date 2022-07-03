
@extends('layouts.pageCon')
@section('page_title',$page_title)

@if ($books->price >0)

@section('title',$skill_title)
@section('title_details', $skill_title_details)
@else
@section('title',$title)
@section('title_details', $title_details)
@endif

@section('content')



<main id="main">
@include('includes.breadcrumbs')
@if ($books->price >0)
<section>
<div class="services-area2">
<div class="container">
<div class="row">
<iv class="col-xl-9 col-lg-9 col-md-6">
<div class="row">
<div class="col-xl-12">

<div class="single-services d-flex align-items-center mb-0">
<div class="features-img">
<img src="{{ Storage::url($books->book_cover) }}" alt="">
</div>
<div class="features-caption">
  
<h3>{{ucfirst($books->book_title)}}</h3>
<p>{{ucfirst($books->category->category ?? 'None' )}}</p>
<div class="price">
<span>₦{{$books->price}}</span>
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

<a href="{{$books->cta_link_buy}}" class="white-btn mr-10"> Know More</a>
<!-- <a href="{{$books->cta_link_admin}}" class="white-btn mr-10">Talk To Admin</a> -->



<a  href="#" class="border-btn share-btn"><i class="fas fa-share-alt"></i></a >
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
<p>{{ucfirst($books->book_desc)}}</p>
</div>
</div>
</div>


</div>
</section>
@else
  <section>
<div class="services-area2">
<div class="container">
<div class="row">
<iv class="col-xl-9 col-lg-9 col-md-6">
<div class="row">
<div class="col-xl-12">

<div class="single-services d-flex align-items-center mb-0">
<div class="features-img">
<img src="{{ Storage::url($books->book_cover) }}" alt="">
</div>
<div class="features-caption">
<h3>{{ucfirst($books->book_title)}}</h3>
<p>{{ucfirst($books->category->category ?? 'None' )}}</p>
<div class="price">
<span>₦{{$books->price}}</span>
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
<a href="{{ Storage::url($books->book_file) }}" id="sendmail" class="white-btn mr-10" download><i class="fa fa-download"> </i>Download</a>
<button  href="#" value="{{$books->id}}"  id="share" class="border-btn   share-btn"><i class="fas fa-share-alt"></i>Share</button>
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
<p>{{ucfirst($books->book_desc)}}</p>
</div>
</div>
</div>


</div>
</section>


</main>

@endif


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
@include('modal_includes.shareBook_modal')
@endsection



<!-- end add author -->

