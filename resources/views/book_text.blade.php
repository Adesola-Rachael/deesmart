
@extends('layouts.pageCon')


@section('content')

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('includes.breadcrumbs')


<div class="listing-area pt-50 pb-50">
<div class="container">
<div class="row">



<div class="col-xl-8 col-lg-8 col-md-6">


<div class="row justify-content-end">
  <div class="col-xl-4">
    <div class="product_page_tittle">
      <div class="short_by">

      <form id="formsearch" >
  <input type="text" placeholder="Search.." id="mysearch" class="mysearch" name="search">
  <button type="submit" class="getsearch"><i class="fa fa-search"></i>serach</button>
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


<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">







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

</div>





<div class="col-xl-4 col-lg-4 col-md-6">

<div class="category-listing mb-50">

<div class="single-listing">

<div class="select-Categories pb-30">
<div class="small-tittle mb-20">
<h4>Filter by Genres</h4>
</div>
@if($cat->isNotEmpty())
@foreach($cat as $caty)
<form id ="gettingCat">
<label for="">
  
  <input type="hidden" class="cat_check"
  value="{{$caty->id}}" name="cat_id_no" >

{{$caty->id}} {{$caty->category}}</label>  
</form>

<!-- <input type="checkbox"  id="cat_check" class="cat_id_check"value="{{$caty->id}}"> -->


<!-- <label class="container" id="cat_id_check">{{$caty->category}}
<input type="hidden" id="cat_check" class="caty_check_value" value="{{$caty->id}} " >
<<span class="checkmark"></span> 
</label> -->

@endforeach
@endif

</div>


<!-- <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow mb-40">
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
</aside> -->


<!-- <div class="select-job-items2 mb-30">
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
</div> -->


<!-- <div class="select-Categories pt-100 pb-60">
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
</div> -->

<!-- 
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
</div> -->





</div>
</div>

</div>

</div>
</div>
</div>


</main>
@endsection


