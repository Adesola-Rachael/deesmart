@extends('layouts.pageCon')
@section('page_title',$page_title)

@section('title',$title)
@section('title_details', $title_details)


@section('event_empty',$event_empty)
@section('event_empty_detail', $event_empty_detail)

@section('content')


<main id="main">

@include('includes.breadcrumbs')

   

    <!-- ======= Events Section ======= -->

    <section id="events" class="events">
      <div class="container" >

      @if($events ->isNotEmpty())
      <div class="row"><div class="col-md-12 "><div id="RegEventMessage" style="text-align:center;"></div></div></div>
        <div class="row">

        @foreach($events as $event)


        <?php
					$date=date("Y-m-d- h:i a",strtotime($event->date));
                    
					 $now=date("Y-m-d");
					//  $fivedays=date("Y-m-d",strtotime($now.'+5 days'));
                   
					$day_name= date('l', strtotime($event->date));
                     if($day_name==1){
                        $day_suffix="1st";
                     }
                     elseif($day_name==2){
                        $day_suffix="nd";
                     }
                     elseif($day_name==3){
                        $day_suffix="rd";
                     }
                     elseif($day_name>3){
                        $day_suffix="th";
                     }
                     else{
                        $day_suffix="";
                     }
                    // $time=date(STR($event->date), ' ',2);
                    // preg_split('/[|!|?]/', $str);
					  
					$temp = explode('-',$date);
                    $temp2 = explode(' ',$date);

					$day=$temp[2];
					$month=date("F", mktime(0, 0, 0,$temp[1] , 1));
					$year=$temp[0];
                    $hr=$temp2[1];
                    $mer=$temp2[2];

                    // explode colon for time
                    $tempTime = explode(':',$hr);

                    $hrs=$tempTime[0];
                    $min=$tempTime[1];
				?>
        @include('modal_includes.event_modal')

          
          <div class="col-md-6 " data-aos="fade-up">
            <div class="card">
           

              <div class="card-img">
                <img src="{{ Storage::url($event->image) }}" alt="..." style="width:100%; height:300px;" >
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{$event->title}}</a></h5>
                <p class="fst-italic text-center">{{$day_name}}, {{$month}}  {{$day}}{{$day_suffix}} at  {{$hrs}}:{{$min}} {{$mer}}</p>
                <p class="card-text"> {{$event->desc}} </p>
                <!-- < class="" style="margin:auto;">Register For This Event </div> -->
                <div class="btn btn-primary" class="regEvent" id="reg" style="color:#fff; ">Register Here</div>  
                 <button class="right" value="{{$event->id}}" title="share" class="regEvent" id="shareEvent" style="border:0px; "><i class="fas fa-share-alt" style="color:brown;"></i></button>

              </div> 
         
            </div>

          </div>

         


          <!-- <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Marketing Strategies</a></h5>
                <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
              </div>
            </div>

          </div> -->


          @endforeach
         <!-- </div> -->


        </div>
        @else
        @include('includes.book_not_found')
        @endif

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  @include('modal_includes.share_event_modal')

@endsection


@push('custom-scripts')
<script>
  // for share event
  $(document).on('click', '#shareEvent',function(e){
    e.preventDefault();
    //  console.log('connected')
    
    $('#shareEventMmodal').modal('show');

    var book_id= $('#shareEvent').val();
    // console.log(book_id+"1");
    const facebookBtn=document.querySelector(".facebook-btn");
    const twitterBtn=document.querySelector(".twitter-btn");
    const linkedinBtn=document.querySelector(".linkedin-btn");
    const pinterestBtn=document.querySelector(".pinterest-btn");
    const whatsappBtn=document.querySelector(".whatsapp-btn");
    function init(){
  
      const pintImage=document.querySelector("#pint_image");
      let posturl=encodeURI(document.location.href);
      let posttitle=<?php echo json_encode($event->title); ?>;
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

// for reg event

$(document).on('click', '#reg',function(e){
  e.preventDefault();
    console.log('connected');
  
    $('#regEvent').modal('show');

  //  console.log('clicked')
});
$(document).on('click', '.attendEvent',function(){

  const data=$('#addEvent').serialize();          

  console.log(data);

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"/attendEvent",
    type:"POST",
     data:data,
    success:function(response){
      $('#regEvent').modal('hide');  

      console.log(response);
      // $('#SendMessage').modal('hide');
      if(response.status==200){
        $('#RegEventMessage').html(
        '<div class="alert alert-success alert-dismissible">'+
        // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        '</h5></div>'
        );
        // window.location="book_book";
      }else{
        console.log(response.message);
        var message=JSON.stringify(response.message)
        $('#RegEventMessage').html(
        '<div class="alert alert-danger alert-dismissible">'+
        // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
        '</div>'
        );
      }
     
    }
  });

});

</script>
@endpush