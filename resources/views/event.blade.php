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
      <div class="container" data-aos="fade-up">
      @if($events ->isNotEmpty())
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
          
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ Storage::url($event->image) }}" alt="..." style="width:100%; height:300px;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{$event->title}}</a></h5>
                <p class="fst-italic text-center">{{$day_name}}, {{$month}}  {{$day}}{{$day_suffix}} at  {{$hrs}}:{{$min}} {{$mer}}</p>
                <p class="card-text">{{$event->desc}} </p>
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



@endsection