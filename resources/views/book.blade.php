
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
  <!--<div class="col-xl-4">
    <div class="product_page_tittle">
      <div class="short_by">
        <form id=>
          <input type="search" name="search" class="search" placeholder="search"><input class="" type="submit" name="submit" style="background:green;"/>
        </form>
      </div>
    </div>
  </div> -->

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
<h3><a href="{{url ('details/'.$book->id) }}">{{ucfirst($book->book_title)}}</a></h3>
<p class="cat">{{ucfirst($book->category->category ?? 'None' )}}</p>

<div class="properties-footer d-flex justify-content-between align-items-center">
<!-- <p>{{\Illuminate\Support\Str::limit($book->book_desc, 30)}}...</p> -->
<p>{{Str::of($book->book_desc)->words(10,'...')}}<span><a href="{{url ('details/'.$book->id) }}">Read More</a></span></p>
<div class="review">
<!-- <div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div> -->
<!-- <p>(<span>120</span> Review)</p> -->
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

{!! $books->links() !!} 

</div>
</div>

<div class="row">
<div class="col-xl-12">
<div class="more-btn text-center mt-15">
<!-- <a href="#" class="border-btn border-btn2 more-btn2">Show More</a> -->
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
<h4>Filter by Categories</h4>
</div>
@if($cat->isNotEmpty())
@foreach($cat as $caty)
<form id ="getting_Cat">
<!-- <form id ="gettingCat"> -->

<label for="">
  
  <input type="hidden" class="cacheck"
  value="{{$caty->id}}" name="cat_id_no" >
  <!-- <input type="hidden" class="cat_check"
  value="{{$caty->id}}" name="cat_id_no" > -->

{{ucfirst($caty->category)}}</label>
</form>



@endforeach
@endif


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




<div class="google-add">
  @if($adverts)
  @foreach($adverts as $advert)

<a href="{{$advert->link}}"><img src="{{ Storage::url($advert->image) }}" alt="" class="w-100" style="margin-bottom:5px;"></a>
@endforeach
@else
<h2></h3>
@endif
</div>


</div>
</div>

</div>

</div>
</div>
</div>


</main>
@endsection


