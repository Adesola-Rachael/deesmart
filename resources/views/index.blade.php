

  @extends('layouts.pageCon')
  @section('page_title',$page_title)

  @section('event_empty',$event_empty)
@section('event_empty_detail', $event_empty_detail)

@section('content')


<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Reading To Enhance<br>Creativity and Productivity</h1>
      <h2>We are team of Entrepreneurs making available resources for development</h2>
      <a href="{{url('book')}} " class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('includes.myabout')

    <!-- End About Section -->


      <!-- ======= Counts Section ======= -->
      @include('includes.counter')
      
    <!-- End Counts Section -->



    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" style="background:#e59560">
            <div class="content" style="background:#e59560">
              <h3 style="color:#fff;">Why Choose Readal?</h3>
              <p style="color:#fff;">
               Readal has made available books on skill acquisition, health, business, and on many other subject for free thereby contributing to the growth of the sociatry trheou the provision of valluable materials where people can build more on their knowlwge
              </p>
              <div class="text-center">
                <a href="{{url('about')}} " class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Acquire Skils</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Web Development</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Digital Marketing</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    

<div class="best-selling section-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-8">
<div class="section-tittle text-center mb-55">
<h2>Popular Books</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12">
<div class="selling-active">
@if($books->isNotEmpty())

  @foreach($books as $book)
  <div class="properties pb-20">
  <div class="properties-card">
  <div class="properties-img">
  <a href="{{url ('details/'.$book->id) }}"><img src="{{ Storage::url($book->book_cover) }}" alt="" style="height:250px; "></a>
  </div>
  <div class="properties-caption">
  <h3><a href="{{url ('details/'.$book->id) }}">{{ucfirst($book->book_title)}}</a></h3>
  <p class="cat">{{ucfirst($book->category->category ?? 'None' )}}</p>
  <div class="properties-footer d-flex justify-content-between align-items-center">
  <div class="review">
  <div class="rating">
  <!-- <i class="fas fssssssssssa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star-half-alt"></i> -->
  </div>
  <!-- <p>(<span>120</span> Review)</p> -->
  </div>
  <div class="price">
  <span>₦{{$book->price}}</span>
  </div>
  </div>
  </div>
  </div>
  </div>
  @endforeach
  @else
  @include('includes.book_not_found')
  
  @endif


</div>
</div>
</div>
</div>
</div>


<div class="services-area2 top-padding">
<div class="container">
<div class="row">
<div class="col-xl-9 col-lg-9 col-md-8">
<div class="row">

<div class="col-xl-12">
<div class="section-tittle d-flex justify-content-between align-items-center mb-40">
<h2 class="mb-0">High Income Skills</h2>
<a href="{{url('book')}}" class="browse-btn">View All</a>
</div>
</div>
</div>
<div class="row">
    @if($skills->isNotEmpty())
   
  <div class="col-xl-12 "style="background:s;">
  <div class="services-active" style="background:">
 @foreach($skills as $skill) 


    
    <div class="single-services d-flex align-items-center " style="background:#5fcf80;">
      <div class="features-img">
        <img src="{{ Storage::url($skill->book_cover) }}" alt=""  style="width:250px; height:350px;">
      </div>
      <div class="features-caption">
        <img src="book_assets/img/icon/logo.html" alt="">
        <h3>{{ucfirst($skill->book_title)}}</h3>
        <p style="background:">{{ucfirst($skill->category->category ?? 'None' )}}</p>
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
        <a href="{{url ('details/'.$skill->id) }}" class="border-btn">View Details</a>
      </div>
    </div>
@endforeach

  </div>
  </div>
  
  @else
  @include('includes.book_not_found')
  @endif
<!-- <div class="single-services d-flex align-items-center"> -->
<!-- <div class="features-img">
<img src="book_assets/img/gallery/best-books1.jpg" alt="">
</div> -->
<!-- <div class="features-caption">
<img src="book_assets/img/icon/logo.html" alt="">
<h3>The Rage of Dragons</h3>
<p>By Evan Winter</p>
<div class="price">
<span>$50.00</span>
</div> -->
<!-- <div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(120 Review)</p>
</div> -->
<!-- <a href="book-details.html" class="border-btn">View Details</a> -->

<!-- </div> -->
</div>
</div>
<!-- </div> -->

<div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

<div class="google-add">
  @if($adverts)
  @foreach($adverts as $advert)

<a href=""><img src="{{ Storage::url($advert->image) }}" alt="" class="w-100" style="margin-bottom:5px;"></a>
@endforeach
@else
<h2></h3>
@endif
</div>
</div>
</div>
</div>
</div>


<section class="our-client section-padding best-selling">
<div class="container">
<div class="row justify-content-between">
<div class="col-xl-5 col-lg-5 col-md-12">

<div class="section-tittle  mb-40">
<h2>Latest Published items</h2>
</div>
</div>
<div class="col-xl-7 col-lg-7 col-md-12">
<div class="nav-button mb-40">

<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">

<a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">All</a>
      @foreach($cat as $caty) 
<a class="nav-link" id="nav-two-tab"  href=" # " role="tab" aria-controls="nav-two" aria-selected="false">{{$caty->category }}</a>


@endforeach

<!-- <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">All</a>
<a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Thriller</a>
<a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Science Fiction</a>
<a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five" role="tab" aria-controls="nav-five" aria-selected="false">History</a> -->

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
 @if($books->isNotEmpty())

  @foreach($books->take(6) as $book)
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
  <div class="properties pb-30">
  <div class="properties-card">
  <div class="properties-img">
  <a href="{{url ('details/'.$book->id) }}"><img src="{{ Storage::url($book->book_cover) }}" alt="" style="width:130px; height:250px;"> </a>
  </div>
  <div class="properties-caption properties-caption2">
  <h3><a href="{{url ('details/'.$book->id) }}">{{ucfirst($book->book_title)}}</a></h3>
  <p class="cat">{{ucfirst($book->category->category ?? 'None' )}}</p>

  <div class="properties-footer d-flex justify-content-between align-items-center">
  <div class="review">
  <div class="rating">
  </div>
  <!-- <p>(<span>120</span> Review)</p> -->
  </div>
  <div class="price">
  <span>₦{{$book->price}}</span>

  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  @endforeach
  @else
  @include('includes.book_not_found')
  
  @endif
</div>



<!-- 

<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/4.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling6.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling4.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling9.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling2.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling4.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling9.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling2.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling7.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling8.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling6.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling7.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling8.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling6.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling4.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling9.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling2.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling9.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling2.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling7.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling8.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling6.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling4.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling7.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling8.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling6.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling4.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling9.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling2.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div> 
</div>
</div>-->
</div>
</div>
<div class="row">
<div class="col-xl-12">
<div class="more-btn text-center mt-15">
<a href="{{url('book')}}" class="border-btn border-btn2 more-btn2">Browse More</a>
</div>
</div>
</div>
</div>
</section>


<section class="container">
<h2 style="">Event</h2>
<div class="row align-items-center justify-content-between">
  @if($books->isNotEmpty())
  @foreach($events->take( 2) as $event)
 
<div class="col-xl-6 col-lg-6">
<!-- <div class="wantToWork-area w-padding2 mb-30" data-background="{{ Storage::url($event->image) }}"  style="background:{{ Storage::url($event->image) }}> -->
<div style="margin: 3%; position: relative;" > <img src="{{ Storage::url($event->image) }}"  style="width:100%; height:300px;" />
<!-- <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"> -->
  <!-- <div style=> -->
  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color:#fff; font-weight:bold;font-size:25px;">{{$event->title}}</div>
  <div class="linking">
  <a href="{{url ('event') }}" class="btn wantToWork-btn" style="position: absolute; top: 90%; left: 50%; transform: translate(-50%, -50%);">View Details</a>
  </div>
</div>

</div>
@endforeach
@else
@include('includes.book_not_found')

@endif

<!-- <div class="col-xl-6 col-lg-6">
<div class="wantToWork-area w-padding2 mb-30" style="background">
  <img src="book_assets/img/gallery/best_selling6.jpg">
<h2>Wilma Mumduya</h2>
<div class="linking">
<a href="#" class="btn wantToWork-btn">View Details</a>
</div>
</div> -->



</div>
</div>
</section>


</main>
@endsection

<!-- <footer>
<div class="footer-wrappper section-bg">
<div class="footer-area footer-padding">
<div class="container">
<div class="row justify-content-between">
<div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">

<div class="footer-logo mb-25">
<a href="index-2.html"><img src="book_assets/img/logo/logo2_footer.png" alt=""></a>
</div>
<div class="footer-tittle">
<div class="footer-pera">
<p>Get the breathing space now, and we’ll extend your term at the other end year for go.</p>
</div>
</div>

<div class="footer-social">
<a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin-in"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Book Category</h4>
<ul>
<li><a href="#">History</a></li>
<li><a href="#">Horror - Thriller</a></li>
<li><a href="#">Love Stories</a></li>
<li><a href="#">Science Fiction</a></li>
<li><a href="#">Business</a></li>
</ul>
</div>
</div> 
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>&nbsp;</h4>
<ul>
<li><a href="#">Biography</a></li>
<li><a href="#">Astrology</a></li>
<li><a href="#">Digital Marketing</a></li>
<li><a href="#">Software Development</a></li>
<li><a href="#">Ecommerce</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Site Map</h4>
<ul class="mb-20">
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">FAQs</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer-bottom-area">
<div class="container">
<div class="footer-border">
<div class="row d-flex align-items-center">
<div class="col-xl-12 ">
<div class="footer-copy-right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" style="color: black" target="_blank" rel="nofollow noopener">Colorlib</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>

<div id="back-top">
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>-->


<!-- <script src="book_assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="book_assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="book_assets/js/popper.min.js">
<script>eval(mod_pagespeed_64J4x1U9Lt);</script>

<script src="book_assets/js/owl.js"></script><script>eval(mod_pagespeed_2b_kILWYuf);</script>
<script>eval(mod_pagespeed_YcgqpOO3k2);</script>
<script src="book_assets/js/slick.js"></script><script>eval(mod_pagespeed_W070UA44Fy);</script>

<script>eval(mod_pagespeed_HHFEHFyfva);</script>
<script>eval(mod_pagespeed_He4JmNoJSL);</script>
<script>eval(mod_pagespeed_Vq55GYBaD4);</script>
<script>eval(mod_pagespeed_urzCQ$ljEK);</script>
<script>eval(mod_pagespeed_yBL9chaY8Z);</script>
<script src="book_assets/js/price_range.js"></script><script>eval(mod_pagespeed_6gHvth7EP8);</script>

<script>eval(mod_pagespeed_gVyWNPnP1a);</script>
<script src="book_assets/js/form.js"></script><script>eval(mod_pagespeed_WxueWYkioV);</script>
<script>eval(mod_pagespeed_JeTX5oy9W7);</script>
<script>eval(mod_pagespeed_Dfx$DMKuSV);</script>
<script>eval(mod_pagespeed_In2a_xtXil);</script>

<script>eval(mod_pagespeed_ADDajFRwXo);</script>
<script>eval(mod_pagespeed_R473QNJAOB);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script> -->
<!-- //   window.dataLayer = window.dataLayer || [];
//   function gtag(){dataLayer.push(arguments);}
//   gtag('js', new Date());

//   gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f5ef6f8ce820109","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/abcbook/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Apr 2022 04:12:34 GMT -->
<!-- </html> -->





