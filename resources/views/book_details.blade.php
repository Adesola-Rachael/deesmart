
@extends('layouts.pageCon')
@section('page_title',$page_title)
@section('title',$title)
@section('title_details', $title_details)
@section('content')



<main id="main">
  @include('includes.breadcrumbs')
    
  
    
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
<a href="{{ Storage::url($books->book_file)}}" class="white-btn mr-10" download><i class="fa fa-download"> </i>Download</a>
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



<!-- Authors Modal -->
<!-- <button  id="share" class='btn btn-danger fa fa-trash' data-toggle='modal' data-target='#share' data-backdrop='static' data-keyboard='false'> -->

@include('modal_includes.shareBook_modal')






<div class="modal fade" id="S" data-backdrop='static' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Course</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_cat">
        <div class="modal-body">
          <!-- input title -->
          <input type="hidden" id="edit_cat_id">

          <div class="form-group mb-3">
            <label for="cat"> Edit Course Category</label>
            <input type="text" name="edit_cat" id="edit_cat" class="edit_cat form-control">
            <!-- <input type="text" name="course" id="course" class="course form-control"> -->
        </div> 


                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_cat">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<!-- </button> -->
<!-- end edit auhtor -->





<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Share <h3>{{ucfirst($books->book_title)}}</h3></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>

 
    
      </div>
      
      <div class="modal-body">
        <!-- input title -->
        
        <div class="share-btn-container">
            <a href="#" class="facebook-btn">
              <i class="fa icon-facebook"></i>
            </a>
            <a href="#" class="twitter-btn">
              <i class="fa icon-twitter"></i>
            </a>
            <a href="#" class="linkedin-btn"> 
              <i class="fa icon-linkedin"></i>
            </a>
            
            <a href="#" class="whatsapp-btn">
              <i class="fa icon-whatsapp"></i>
            </a>
        </div>
      
    </div>
  </div>
</div>
@endsection



<!-- end add author -->

