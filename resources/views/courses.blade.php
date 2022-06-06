
@extends('layouts.app')
@section('page_title',$page_title)
@section('title',$title)
@section('title_details', $title_details)
@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    @include('includes.breadcrumbs')

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Web Development</h4>
                  <p class="price">$169</p>
                </div>

                <h3><a href="course-details.html">Website Design</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Marketing</h4>
                  <p class="price">$250</p>
                </div>

                <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Content</h4>
                  <p class="price">$180</p>
                </div>

                <h3><a href="course-details.html">Copywriting</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Courses Section -->






    <div class="best-selling section-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-8">
<div class="section-tittle text-center mb-55">
<h2>Best Selling Books Ever</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12">
<div class="selling-active">

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling1.jpg" alt=""></a>
</div>
<div class="properties-caption">
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

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling2.jpg" alt=""></a>
</div>
<div class="properties-caption">
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

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling3.jpg" alt=""></a>
</div>
<div class="properties-caption">
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

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling4.jpg" alt=""></a>
</div>
<div class="properties-caption">
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

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling5.jpg" alt=""></a>
</div>
<div class="properties-caption">
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

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling6.jpg" alt=""></a>
</div>
<div class="properties-caption">
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

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/best_selling4.jpg" alt=""></a>
</div>
<div class="properties-caption">
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
</div>
</div>


<div class="services-area2 top-padding">
<div class="container">
<div class="row">
<div class="col-xl-9 col-lg-9 col-md-8">
<div class="row">

<div class="col-xl-12">
<div class="section-tittle d-flex justify-content-between align-items-center mb-40">
<h2 class="mb-0">Featured This Week</h2>
<a href="#" class="browse-btn">View All</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12">
<div class="services-active">

<div class="single-services d-flex align-items-center">
<div class="features-img">
<img src="book_assets/img/gallery/best-books1.jpg" alt="">
</div>
<div class="features-caption">
<img src="book_assets/img/icon/logo.html" alt="">
<h3>The Rage of Dragons</h3>
<p>By Evan Winter</p>
<div class="price">
<span>$50.00</span>
</div>
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(120 Review)</p>
</div>
<a href="book-details.html" class="border-btn">View Details</a>
</div>
</div>

<div class="single-services d-flex align-items-center">
<div class="features-img">
<img src="book_assets/img/gallery/best-books1.jpg" alt="">
</div>
<div class="features-caption">
<img src="book_assets/img/icon/logo.html" alt="">
<h3>The Rage of Dragons</h3>
<p>By Evan Winter</p>
<div class="price">
<span>$50.00</span>
</div>
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(120 Review)</p>
</div>
<a href="book-details.html" class="border-btn">View Details</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

<div class="google-add">
<img src="book_assets/img/gallery/ad.jpg" alt="" class="w-100">
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
<a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">Horror</a>
<a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Thriller</a>
<a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Science Fiction</a>
<a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five" role="tab" aria-controls="nav-five" aria-selected="false">History</a>
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
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="book_assets/img/gallery/2.jpg" alt=""></a>
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
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12">
<div class="more-btn text-center mt-15">
<a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
</div>
</div>
</div>
</div>
</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @endsection