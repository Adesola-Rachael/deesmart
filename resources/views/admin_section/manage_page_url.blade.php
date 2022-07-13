@extends('../../layouts.admin_sec')
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
<!-- /. Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->

    @section('content')
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Course Category</h3>
                <button  id="AddPageUrl" class="float-right   btn btn-primary">Add New Page Url</button><br>

                <div id="PageUrl_success_message"></div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        
                      <th style="width: 10px">S/N</th>
                      <th>Page Name</th>
                      <th>Page Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        @foreach($urls as $url)
                      <td>{{$loop->iteration}}</td>
                      <td>{{$url->page_name}}</td>
                      <td>{{$url->page_link}}</td>
                      <td>
                          <span><button value="{{$url->id}}" class="edit_cat" style="color:green; border:none"><i class="fa fa-edit"></i> </button></span>
                          <span><button value="{{$url->id}}" class="trash_cat" style="color:red; border:none"><i class="fa fa-trash"></i> </button></span>

                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            </div>
            
            <!-- /.card -->

       
         <!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    </section>
    <!-- /.content -->
    @include('admin_section.modal_includes.page_url_modal')
  @endsection





  