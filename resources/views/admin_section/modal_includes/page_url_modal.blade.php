<!-- Authors Modal -->
<div class="modal fade" id="AddPageUrlModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Page Url</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

 
    
      </div>
      <form id="PageUrl">
      <div class="modal-body">
        <!-- input title -->
        
        <div class="form-group mb-3">
            <label for="cat"> Page Name </label>
            <input type="text" name="page_name" placeholder="" id="page_name" class="page_name form-control">

            <!-- <input type="text" name="course" id="course" class="course form-control"> -->
        </div> 
        <div class="form-group mb-3">
            <label for="cat"> Page Link </label>
            <input type="text" name="page_link" placeholder="" id="page_link" class="page_link form-control">

            <!-- <input type="text" name="course" id="course" class="course form-control"> -->
        </div> 
       
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewPageUrl">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add author -->

<!--View course  -->




<!-- end view course -->


<!-- Edit department Modal -->
<div class="modal fade" id="EditCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Course</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_cat">
        <div class="modal-body">
          <!-- input title -->
          <input type="hidden" id="edit_cat_id">

          <div class="form-group mb-3">
            <label for="cat"> Edit Course Category</label>
            <input type="text" name="edit_cat" id="edit_cat" class="edit_cat form-control">
            <!-- <input type="text" name="course" id="course" class="course form-control"> -->
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



