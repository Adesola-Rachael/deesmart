@extends('../../layouts.admin_sec')

    @section('content')
    <section class="content">
        <div class="callout callout-info " style="height:100px;">
              <h5>All Registered Courses</h5>
              <!-- <button class=" btn btn-info"> </button> -->

              <button  id="addcourse" class="float-right   btn btn-primary">Add New Course</button>
        </div>
        <div id='course_success_message'> </div>
        <div class="container-fluid">  
        
            <div class="card-group  ">

                @foreach($courses as $course)
                <div class=" col-md-3">
                <div class="card" style="">
                    <img src="{{$course->course_img_link}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ucfirst($course->course_title)}}</h5>
                        <p class="card-text"></p>
                        <div class="app-doc-meta">
                            <ul class="list-unstyled mb-0">
                                <li><span class="text-muted" style="text">Type:</span>{{ucfirst($course->cat->category ?? 'None' )}}</li>
                                <li><span class="text-muted">Size:</span> &#8358{{$course->price}} </li>
                             </ul>
						</div><!--//app-doc-meta-->
							    
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last Updated {{$course->updated_at}}</small>
                        
                        <p><small class="float-right">
 
                            <span style="margin:4px;"><button  style="border:0px; color:green; font-size:15px; " id="viewCourse"  value="{{$course->id}}"><i class="fa fa-eye"></i></button></span>
                            <span style="margin:4px;"><button  style="border:0px; color:#000080;font-size:15px; " value="{{$course->id}}" id="edit_course"><i class="fa fa-edit"></i></button></span>
                            <span style="margin:4px;"><button  style="color:red; font-size:15px;border:0px; "value="{{$course->id}}" id="delete_course"><i class="fa fa-trash"></i></button></span>
</small></p>
                        
                    </div>
                </div>
                </div>
                @endforeach
                <div> <!-- //row -->

        </div>
    </section>
    <!-- /.content -->
    @include('admin_section.modal_includes.course_modal')
  @endsection


  


  