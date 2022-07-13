<div class="modal fade" id="regEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false"> 
    
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Be a part of {{ucfirst($event->title)}} event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    
      </div>
      <div class="modal-body">
        <form id="addEvent">
          <input type="hidden" name="event_id" value="{{$event->id}}"  id="event_id" class="event_id form-control">

          <div class="form-group mb-3">
              <label for="event">Name</label>
              <input type="text" name="name" placeholder="Please Enter Your Name" id="name" class="name form-control">
          </div> 
          <div class="form-group mb-3">
              <label for="email">Email</label>
              <!-- <input type="email" name="email" id="email" placeholder="Enter Your Email"  class="email" class="image form-control"> -->
              <input type="email" name="email" placeholder="Please Enter Your Email" id="email" class="email form-control">

          </div>

          <div class="form-group mb-3">
              <label for="name">Phone</label>
              <input type="text" name="phone" id="phone" class="phone  form-control">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary attendEvent">Save</button>
      </div>
     
    </div>  
  </div>
</div>


<!-- 
</div> -->