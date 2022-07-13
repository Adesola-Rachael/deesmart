
@extends('layouts.pageCon')
@section('page_title',$page_title)
@section('title',$title)
@section('title_details', $title_details)
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @include('includes.breadcrumbs')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" role="form" class="" id="contact_form">
              
              <div class="" id="SendSuccessMessage"></div>
              <div class="form-group mt-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">

                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" required>
                </div>
                <div class="col-md-6 form-group ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
             
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <!-- <div class="loading">Loading</div> -->
                <div class="error-message"></div>
              </div>
              <div class="text-center"><button type="submit" class="send_message btn">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection

  @push('custom-scripts')
  <script>
    //contact message

$(document).on('click','.send_message',function(e){
  e.preventDefault();
  console.log('clicked')
  const data=$('#contact_form').serialize();

  console.log(data);

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"/contact_form",
    type:"POST",
     data:data,
    success:function(response){
      console.log(response);
      // $('#SendMessage').modal('hide');
      if(response.status==200){
        $('#SendSuccessMessage').html(
        '<div class="alert alert-success alert-dismissible">'+
        // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        '</h5></div>'
        );
        // window.location="book_book";
      }else{
        console.log(response.message);
        var message=JSON.stringify(response.message)
        $('#SendSuccessMessage').html(
        '<div class="alert alert-danger alert-dismissible">'+
        // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
        '</div>'
        );
      }
     
    }
    });

});
  </script>
  @endpush