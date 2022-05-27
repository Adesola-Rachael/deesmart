@extends('../../layouts.admin_sec')

    @section('content')
    <section class="content">
        <div class="callout callout-info " style="height:100px;">
              <h5>All Books</h5>
              <!-- <button class=" btn btn-info"> </button> -->

              <button  id="addcourse" class="float-left  btn btn-primary">Add New Book</button>
              <a id=""  href="{{url('admin_section/cat')}}"  style="text-decoration:none;color:#fff;" class="float-right btn btn-info">Add New Category</a>
        </div>
        <div id='book_success_message'> </div>
        <div class="container-fluid">  
        
            <div class="card-group  ">

                @foreach($books as $book)
                <div class=" col-md-3">
                <div class="card" style="">
                    <img src="{{ Storage::url($book->book_cover) }}" class="card-img-top" alt="...">
               
                    <div class="card-body">
                        <h5 class="card-title">{{ucfirst($book->book_title)}}</h5>
                        <p class="card-text"></p>
                        <div class="app-doc-meta">
                            <ul class="list-unstyled mb-0">
                                <li><span class="text-muted" style="text">Category:</span>{{ucfirst($book->category->category )}}</li>
                                <li><span class="text-muted">Price:</span> ₦{{$book->price}} </li>
                             </ul>
						</div><!--//app-doc-meta-->
							    
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last Updated {{$book->updated_at}}</small>
                        
                        <p><small class="float-right">
 
                            <span style="margin:4px;"><button  style="border:0px; color:green; font-size:15px; " id="viewCourse"  value="{{$book->id}}"><i class="fa fa-eye"></i></button></span>
                            <span style="margin:4px;"><button  style="border:0px; color:#000080;font-size:15px; " value="{{$book->id}}" id="edit_course"><i class="fa fa-edit"></i></button></span>
                            <span style="margin:4px;"><button  style="color:red; font-size:15px;border:0px; "value="{{$book->id}}" id="delete_course"><i class="fa fa-trash"></i></button></span>
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


  


  