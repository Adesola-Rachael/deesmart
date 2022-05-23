<!-- Authors Modal -->
<div class="modal fade" id="AddCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

 
    
      </div>
      <form id="cat">
      <div class="modal-body">
        <!-- input title -->
        
        <div class="form-group mb-3">
            <label for="cat"> Course Category</label>
            <input type="text" name="cat" placeholder="" id="cat" class="cat form-control">
            <!-- <input type="text" name="course" id="course" class="course form-control"> -->
        </div> 
       
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewCat">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add author -->

<!--View course  -->



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
<div class="modal fade" id="deleteCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trash Course Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_cat_id">
            <input type="hidden" value="0" name="status" class="status" id="status">
            <h4> Are You Sure you Want To Trash This course   category</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_ccat_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confirm nad delete author -->



