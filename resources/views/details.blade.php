
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
<!-- <div class="row">
  <div class="col-xl-10 col-lg-10 col-md-6"> -->
    @if ($books->price >0)
    
    <section>
      <div class="services-area2">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-6">
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
                      <button  href="#" value="{{$books->id}}"  id="share" class="border-btn   share-btn"><i class="fas fa-share-alt"></i>Share</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- get ad -->
              <div class="col-xl-3 col-lg-3 col-md-6"> 

              <div class="google-add">
                  @if($adverts)
                  @foreach($adverts->take(2) as $advert)
                 
                <a href="#"><img src="{{ Storage::url($advert->image) }}" alt="" class="w-100" style="margin-bottom:5px;"></a>                
                @endforeach

                @else
                <h2></h3>
                @endif
              </div>
              </div>
              <!-- // end get ad -->
            <!-- </div> -->
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

    <div class="offset-xl-1 col-lg-8">
      <p>{{ucfirst($books->book_desc)}}</p>
    </div>

    <div class="col-lg-3">
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
    </section>
    @else
    <section>
      <div class="services-area2">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-6">
              <div class="row">
                <div class="col-xl-12  ">

                  <div class="single-services d-flex align-items-center mb-0">
                    <div class="features-img">
                      <img src="{{ Storage::url($books->book_cover) }}" alt="">
                    </div>
                    <div class="features-caption">
                      <h3>{{ucfirst($books->book_title)}} </h3> 
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

                      <a href="{{ Storage::url($books->book_file) }}" style=" background:#fff;"  download><button style="border:0px;"><i class="bi bi-download" style="color:brown;"> </i></button></a>

                      <button  title="share"  value="{{$books->id}}"  id="share" style="border:0px; "><i class="fas fa-share-alt" style="color:brown;"></i></button>
                     
                     
                      <!-- <button  href="#" value="{{$books->id}}"  id="share" class="border-btn   share-btn"><i class="fas fa-share-alt"></i>Share</button> -->
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- get ad -->
            <div class="col-xl-3 col-lg-3 col-md-6"> 

                <div class="google-add">
                    @if($adverts)
                    @foreach($adverts->take(2) as $advert)

                  <a href="{{$advert->link}}"><img src="{{ Storage::url($advert->image) }}" alt="" class="w-100" style="margin-bottom:5px;"></a>
                    @endforeach
                    @else
                    <h2></h3>
                  @endif
                </div>
              </div>
              <!-- // end get ad -->
              <!-- </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- description -->

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
                  <div class="offset-xl-1 col-lg-8">
                    <p>{{ucfirst($books->book_desc)}}</p>
                  </div>

                  <div class="col-lg-3">
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
    </section>

      @endif
  <!-- </div> -->


<!-- </div>
  </div> -->
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
@include('modal_includes.shareBook_modal')
@endsection



<!-- end add author -->

@push('custom-scripts')
<script>
    $(document).on('click', '#share',function(e){
        e.preventDefault();
        //  console.log('connected')
        
        $('#ShareBook').modal('show');

        var book_id= $('#share').val();
        // console.log(book_id+"1");
        const facebookBtn=document.querySelector(".facebook-btn");
  const twitterBtn=document.querySelector(".twitter-btn");
  const linkedinBtn=document.querySelector(".linkedin-btn");
  const pinterestBtn=document.querySelector(".pinterest-btn");
  const whatsappBtn=document.querySelector(".whatsapp-btn");
  function init(){
   
    const pintImage=document.querySelector("#pint_image");
    let posturl=encodeURI(document.location.href);
    let posttitle=<?php echo json_encode($books->book_title); ?>;
    let pimage=encodeURI(pintImage);
    // console.log(posttitle);

    facebookBtn.setAttribute("href", `https://www.facebook.com/sharer.php?u=${posturl}`);
    linkedinBtn.setAttribute("href", `https://www.linkedin.com/shareArticle?url=${posturl}&title=${posttitle}`);
    whatsappBtn.setAttribute("href", `https://api.whatsapp.com/send?text=${posttitle} ${posturl}`);
    twitterBtn.setAttribute("href", `https://twitter.com/share?url=${posturl}&text=${posttitle}&via=[via]&hashtags=[hashtags]
    `);

    
}
init();


    });
</script>
@endpush
