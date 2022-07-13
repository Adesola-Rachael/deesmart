@extends('../../layouts.admin_sec')

    @section('content')
    <section class="content">
        <div class="callout callout-info " style="height:100px;">
              <h5>All Testimonial</h5>
              <!-- <button class=" btn btn-info"> </button> -->

              <button  id="addtestimonial" class="float-left  btn btn-primary">Add New Testimonial</button>
              <!-- <a id=""  href="{{url('admin_section/cat')}}"  style="text-decoration:none;color:#fff;" class="float-right btn btn-info">Add New Category</a> -->
        </div>
        <div id='Testimonial_success_message'> </div>
        <div class="container-fluid">  
        
            <div class="card-group  ">
            @if($tests->isNotEmpty())
                @foreach($tests as $test)
               
               

              


                <div class=" col-md-3">
                <div class="card" style="">
                    <img src="{{ Storage::url($test->image) }}" class="card-img-top" alt="...">
               
                    <div class="card-body">
                        <h5 class="card-title">{{ucfirst ($test->name)}}</h5>
                        <p class="card-text"></p>
                        <div class="app-doc-meta">
                        <p>{{ucfirst($test->desc)}}</p>
						</div><!--//app-doc-meta-->
							    
                    </div>
                    <div class="card-footer">

                        <p><small class="float-right">
 
                            <span style="margin:4px;"><button  style="border:0px; color:green; font-size:15px; " id="viewCourse"  value="{{$test->id}}"><i class="fa fa-eye"></i></button></span>
                            <span style="margin:4px;"><button  style="border:0px; color:#000080;font-size:15px; " value="{{$test->id}}" id="edit_event"><i class="fa fa-edit"></i></button></span>
                            <span style="margin:4px;"><button  style="color:red; font-size:15px;border:0px; "value="{{$test->id}}" id="delete_event"><i class="fa fa-trash"></i></button></span>
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
    @include('admin_section.modal_includes.testimonial_modal')
  @endsection


  


  