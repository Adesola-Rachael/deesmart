@extends('../../layouts.admin_sec')

    @section('content')
    <section class="content">
        <div class="callout callout-info " style="height:100px;">
              <h5>All Events</h5>
              <!-- <button class=" btn btn-info"> </button> -->

              <button  id="addevent" class="float-left  btn btn-primary">Add New event</button>
              <!-- <a id=""  href="{{url('admin_section/cat')}}"  style="text-decoration:none;color:#fff;" class="float-right btn btn-info">Add New Category</a> -->
        </div>
        <div id='Event_success_message'> </div>
        <div class="container-fluid">  
        
            <div class="card-group  ">
            @if($events->isNotEmpty())
                @foreach($events as $event)
               
                <?php
					$date=date("Y-m-d- h:i a",strtotime($event->date));
                    
					 $now=date("Y-m-d");
					//  $fivedays=date("Y-m-d",strtotime($now.'+5 days'));
					$day_name= date('l', strtotime($event->date));
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






                    // $year=$temp[0];
				?>

              


                <div class=" col-md-3">
                <div class="card" style="">
                    <img src="{{ Storage::url($event->image) }}" class="card-img-top" alt="...">
               
                    <div class="card-body">
                        <h5 class="card-title">{{ucfirst($event->title)}}</h5>
                        <p class="card-text"></p>
                        <div class="app-doc-meta">
                            <p>{{ucfirst($event->desc)}}</p>
						</div><!--//app-doc-meta-->
							    
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Date:  {{$day_name}}, {{$day}}, {{$month}} {{$year}}</small><br>

                        <!-- <small class="text-muted">Time: {{$event->date}}{{$event->month}}, {{$event->Day}}</small> -->
                        <small class="text-muted"> Time:{{$hrs}}:{{$min}} {{$mer}} </small>
                        <p><small class="float-right">
 
                            <span style="margin:4px;"><button  style="border:0px; color:green; font-size:15px; " id="viewCourse"  value="{{$event->id}}"><i class="fa fa-eye"></i></button></span>
                            <span style="margin:4px;"><button  style="border:0px; color:#000080;font-size:15px; " value="{{$event->id}}" id="edit_event"><i class="fa fa-edit"></i></button></span>
                            <span style="margin:4px;"><button  style="color:red; font-size:15px;border:0px; "value="{{$event->id}}" id="delete_event"><i class="fa fa-trash"></i></button></span>
</small></p>
                        
                    </div>
                </div>
                </div>
                @endforeach
                @else
                <h1>There is no Event for Now</h1>
                @endif
                <div> <!-- //row -->

        </div>
    </section>
    <!-- /.content -->
    @include('admin_section.modal_includes.event_modal')
  @endsection


  


  