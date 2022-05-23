<!-- Authors Modal -->
<div class="modal fade" id="AddCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

 
    
      </div>
      <form id="course">
      <div class="modal-body">
        <!-- input title -->
        
        <div class="form-group mb-3">
            <label for="course">Course Title</label>
            <input type="text" name="course_title" placeholder="Enter The Course Title" id="course_title" class="course_title form-control">
            <!-- <input type="text" name="course" id="course" class="course form-control"> -->
        </div> 
        <div class="form-group mb-3">
            <label for="name">Course Description</label>
            <textarea name="course_desc" id="course_desc" placeholder="Enter The Course Description" col="5" class="course_desc form-control"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="name">course Image Link</label>
            <input type="text" name="course_img_link" id="course_img_link" class="course_img_link form-control">
        </div>

        <div class="form-group mb-3">
            <label for="name">Course Price</label>
            <input type="text" name="price" id="price" value="Free" class="price form-control">
        </div>
        
        <div class="form-group mb-3">
            <label for="diplay_date">Call to Action Link</label>
            <input type="text" name="cta_link" id="cta_link" class="cta_link form-control">
        </div>  
        <label for="">course category</label>
            <select class="form-control select2 cat" id="cat" name="cat" style="width: 100%;">
                <option selected="selected">Select Course Category</option>
                @foreach($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->category}}</option>
                @endforeach
            </select> 

                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewcourse">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add author -->

<!--View course  -->
<div class="modal fade" id="ViewCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="admin_course_view">
        <!-- <div class="row">
          <div class="col-md-4">
            <h5> Course Title</h5>
            <p>New title</p>

            <h5>Course Description</h5>
            <p>desc</p>
          </div>
          <div class="col-md-8">
            <img class='img-size' src='https://images.unsplash.com/photo-1485470733090-0aae1788d5af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1391&q=80' alt='First slide' />
          </div>
            
        </div> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- /.view courser -->


<!-- <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View course:<small id="course_id"> <small></h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_course">
        <div class="modal-body">
          input title -->
          <!-- <input type="hidden" id="course_id">

          <div class="form-group mb-3">
            <label for="course">course/course_title</label>
            <div id="title" class="title"></div>
            <textarea name="title" col="5"  form-control></textarea> -->

            <!-- <input type="text" name="course" id="course" class="course form-control"> -->
          <!-- </div> 
          <div class="form-group mb-30">
                        <label>Gender:</label><span class="price"></span>
                      </div>

          <div class="form-group mb-3">
              <label for="name">course_img_link/course Author</label>
              <input type="text" name="img_link" id="course_img_link" class="course_img_link form-control">
          </div>
        
          <input type="text" name="cta_link" id="cta_link" class="cta_link form-control">
          <input type="text" name="price" id="price" value="Free" class="price form-control">
          <textarea name="desc" id="desc" placeholder="Enter The Course Description" col="5" class="desc form-control"></textarea>

                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_course">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div> - -->
<!-- end view course -->


<!-- Edit department Modal -->
<div class="modal fade" id="EditCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Course</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_course">
        <div class="modal-body">
          <!-- input title -->
          <input type="hidden" id="edit_course_id">

          <div class="form-group mb-3">
            <label for="course">Course Title</label>
            <input  name="course_title" type="text" id="course_title"  class="title form-control">

           </div> 

          <div class="form-group mb-3">
            <label for="course">Course Description</label>
            <textarea name="course_desc" id="course_desc" col="5" class="desc form-control"></textarea>
           </div> 

          <div class="form-group mb-3">
            <label for="course">Course Image Link</label>
            <input  name="course_img_link" type="text" id="img_link"   class="img form-control">
          </div> 

          <div class="form-group mb-3">
            <label for="course">CTA Link</label>
            <input  type="text" name="cta_link" id="cta_link"   class="cta form-control">
          </div> 

          <div class="form-group mb-3">
            <label for="course">Price</label>
            <input  type="text" name="price" id="price" class="price form-control">
          </div> 

          <label for="">course category</label>
            <select class="form-control select2 cat" id="cat" name="cat" style="width: 100%;">
                <option selected="selected">Select Course Category</option>
                @foreach($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->category}}</option>
                @endforeach
            </select> 

                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_course">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<!-- end edit auhtor -->
<!-- Modal for confirm and delete author -->
<div class="modal fade" id="deleteCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_course_id">
            <h4> Are You Sure you Want To Delete This course</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_course_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confirm nad delete author -->



