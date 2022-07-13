<!-- Authors Modal -->
<div class="modal fade" id="AddAdvertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Advert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

 
    
      </div>
      <form id="advert">
      <div class="modal-body">
        <!-- input title -->
        
        <div class="form-group mb-3">
            <label for="event">Title</label>
            <input type="text" name="title" placeholder="Enter The title " id="title" class="title form-control">
            <!-- <input type="text" name="event" id="event" class="event form-control"> -->
        </div> 
        <div class="form-group mb-3">
            <label for="name"> Advert Link</label>
            <input type="text" name="link" placeholder="Enter The link " id="link" class="link form-control">
        </div>

        <div class="form-group mb-3">
            <label for="name">Advert Image</label>
            <input type="file" name="image" id="image" class="image form-control">
        </div>

       
        
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewAdvert">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add author -->

<!--View event  -->
<div class="modal fade" id="VieweventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="admin_event_view">
        <!-- <div class="row">
          <div class="col-md-4">
            <h5> event Title</h5>
            <p>New title</p>

            <h5>event Description</h5>
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
<!-- /.view eventr -->


<!-- <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View event:<small id="event_id"> <small></h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_event">
        <div class="modal-body">
          input title -->
          <!-- <input type="hidden" id="event_id">

          <div class="form-group mb-3">
            <label for="event">event/event_title</label>
            <div id="title" class="title"></div>
            <textarea name="title" col="5"  form-control></textarea> -->

            <!-- <input type="text" name="event" id="event" class="event form-control"> -->
          <!-- </div> 
          <div class="form-group mb-30">
                        <label>Gender:</label><span class="price"></span>
                      </div>

          <div class="form-group mb-3">
              <label for="name">event_img_link/event Author</label>
              <input type="text" name="img_link" id="event_img_link" class="event_img_link form-control">
          </div>
        
          <input type="text" name="cta_link" id="cta_link" class="cta_link form-control">
          <input type="text" name="price" id="price" value="Free" class="price form-control">
          <textarea name="desc" id="desc" placeholder="Enter The event Description" col="5" class="desc form-control"></textarea>

                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_event">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div> - -->
<!-- end view event -->


<!-- Edit department Modal -->
<!-- <div class="modal fade" id="EditeventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit event</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_event">
        <div class="modal-body">-->
          <!-- input title -->
          <!-- <input type="hidden" id="edit_event_id">

          <div class="form-group mb-3">
            <label for="event">event Title</label>
            <input  name="event_title" type="text" id="event_title"  class="title form-control">

           </div> 

          <div class="form-group mb-3">
            <label for="event">event Description</label>
            <textarea name="event_desc" id="event_desc" col="5" class="desc form-control"></textarea>
           </div> 

          <div class="form-group mb-3">
            <label for="event">event Image Link</label>
            <input  name="event_img_link" type="text" id="img_link"   class="img form-control">
          </div> 

          <div class="form-group mb-3">
            <label for="event">CTA link For Admin(Applicable To paid Books)</label>
            <input  type="text" name="cta_link_buy" id="cta_link_buy"   class="cta_link_buy form-control">
          </div> 

          <div class="form-group mb-3">
            <label for="event">CTA link For Admin(Applicable To paid Books)</label>
            <input  type="text" name="cta_link_admin" id="cta_link_admin"   class="cta_link_admin form-control">
          </div> 

          <div class="form-group mb-3">
            <label for="event">Price</label>
            <input  type="text" name="price" id="price" class="price form-control">
          </div> 


                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_event">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div> -->
<!-- end edit auhtor -->
<!-- Modal for confirm and delete author -->
<!-- <div class="modal fade" id="deleteeventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> -->
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <!-- <input type="hidden" id="delete_event_id">
            <h4> Are You Sure you Want To Delete This event</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_event_btn">Yes</button>
      </div>
    </div>
  </div>
</div> -->
<!--End of modal for confirm nad delete author -->



