
<!-- <!doctype html>
<html class="no-js" lang="zxx"> -->

<!-- Mirrored from preview.colorlib.com/theme/abcbook/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Apr 2022 04:12:14 GMT -->
<!-- <head><script nonce="b06277aa-b000-428c-aa6c-068f0cf06139">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>asfaaua|ebookstore</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="book_assets/img/icon/favicon.png">

 <link rel="stylesheet" href="book_assets/css/main.css">
<link rel="stylesheet" href="book_assets/css/style.css">
</head><body>
<main>
<div class="slider-area">
<div class="container-fluid">
<div class="row">
<div class="col-xl-12">
<div class="slider-active dot-style">

<div class="single-slider slider-height slider-bg1 d-flex align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
<div class="hero-caption text-center">
<span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
<h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
<a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
</div>
</div>
</div>
</div>
</div>

<div class="single-slider slider-height slider-bg2 d-flex align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
<div class="hero-caption text-center">
<span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
<h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
<a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
</div>
</div>
</div>
</div>
</div>

<div class="single-slider slider-height slider-bg3 d-flex align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
<div class="hero-caption text-center">
<span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
<h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
<a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
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
  -->
@extends('layouts.pageCon')

@section('event_empty',$event_empty)
@section('event_empty_detail', $event_empty_detail)

@section('page_title',$page_title)
@section('title',$title)
@section('title_details', $title_details)
@section('content')




  <main id="main">

    <!-- ======= About Section ======= -->
    @include('includes.breadcrumbs')


<div class="listing-area pt-50 pb-50">
<div class="container">
<div class="row">



<div class="col-xl-8 col-lg-8 col-md-6">
@if($books->isNotEmpty())

<div class="row justify-content-end">
  <div class="col-xl-4">
    <div class="product_page_tittle">
      <div class="short_by">
        <form id=>
          <input type="search" name="search" class="search" placeholder="search"><input class="" type="submit" name="submit" style="background:green;"/>
        </form>
      </div>
    </div>
  </div>

  <div class="col-xl-4">
    <div class="product_page_tittle">
      <div class="short_by">
        <select name="#" id="product_short_list">
        <option>Browse by popularity</option>
        <option>Name</option>
        <option>NEW</option>
        <option>Old</option>
        <option>Price</option>
        </select>
      </div>
    </div>
  </div>
</div>

<!-- <div class="row justify-content-end">
<div class="col-xl-4">
<div class="product_page_tittle">
<div class="short_by">
<select name="#" id="product_short_list">
<option>Browse by popularity</option>
<option>Name</option>
<option>NEW</option>
<option>Old</option>
<option>Price</option>
</select>
</div>
</div>
</div>
</div> -->


<div class="best-selling p-0">
<div class="row">

@foreach($books as $book)
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="{{url ('book_details/'.$book->id) }}"><img src="{{ Storage::url($book->book_cover) }}" alt="" style="width:200px; height:200px;"></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">{{ucfirst($book->book_title)}}</a></h3>
<p class="cat">{{ucfirst($book->category->category ?? 'None' )}}</p>

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
<span class="cat">₦{{$book->price}}</span>

</div>
</div>
</div>
</div>
</div>
</div>

@endforeach
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
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
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
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

<div class="row">
<div class="col-xl-12">
<div class="more-btn text-center mt-15">
<a href="#" class="border-btn border-btn2 more-btn2">Show More</a>
</div>
</div>
</div>
@else
  @include('includes.book_not_found')
@endif
</div>





<div class="col-xl-4 col-lg-4 col-md-6">

<div class="category-listing mb-50">

<div class="single-listing">

<div class="select-Categories pb-30">
<div class="small-tittle mb-20">
<h4>Filter by Genres</h4>
</div>
<label class="container">History
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Horror - Thriller
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
<label class="container">Love Stories
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Science Fiction
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Biography
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>


<aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow mb-40">
<div class="small-tittle">
<h4>Filter by Price</h4>
</div>
<div class="widgets_inner">
<div class="range_item">
<input type="text" class="js-range-slider" value="" />
<div class="d-flex align-items-center">
<div class="price_value d-flex justify-content-center">
<input type="text" class="js-input-from" id="amount" readonly />
<span>to</span>
<input type="text" class="js-input-to" id="amount" readonly />
</div>
</div>
</div>
</div>
</aside>


<div class="select-job-items2 mb-30">
<div class="col-xl-12">
<select name="select2">
<option value="">Filter by Rating</option>
<option value="">5 Star Rating</option>
<option value="">4 Star Rating</option>
<option value="">3 Star Rating</option>
<option value="">2 Star Rating</option>
<option value="">1 Star Rating</option>
</select>
</div>
</div>


<div class="select-Categories pt-100 pb-60">
<div class="small-tittle mb-20">
<h4>Filter by Publisher</h4>
</div>
<label class="container">Green Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Anondo Publications
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
<label class="container">Rinku Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Sheba Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Red Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>


<div class="select-Categories">
<div class="small-tittle mb-20">
<h4>Filter by Author Name</h4>
</div>
<label class="container">Buster Hyman
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Phil Harmonic
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
<label class="container">Cam L. Toe
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Otto Matic
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Juan Annatoo
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>

</div>
</div>

</div>

</div>
</div>
</div>


</main>
@endsection


