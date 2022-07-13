<!-- ======= Footer ======= -->
<footer id="footer">
  <div id="download_success_message"></div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-sm-6 footer-contact">
        <h3>Readal</h3>
        <p>
          Bamidele Street  <br>
          Ikorodu, Lagos<br>
          Nigeria <br><br>
          <strong>Phone:</strong> +1 234 7035190263<br>
          <strong>Email:</strong> readal@fgmail.com<br>
        </p>
      </div>

      <div class="col-md-4 col-sm-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('index')}} ">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('about')}} ">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('inde')}} ">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('terms')}} ">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('privacy')}} ">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Digital Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>



    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Readal</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->

<script src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="{{asset('assets/js/jquery/jquery.min.js')}}"></script> -->
@stack('custom-scripts')

<script>

// create new main_cat
$(document).on('click', '#sendmail',function(e){
    e.preventDefault();
     console.log('connected')
    
     $('#SendEmailModal').modal('show');
});

$(document).on('click', '.SendEmail',function(){
   var download=$("#downloadEmail").serialize();
  console.log();
   console.log(download);

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"/new-email",
    type:"POST",
    // data:cat,
    success:function(response){
      console.log(response);
      $('#SendEmailModal').modal('hide');
      if(response.status==200){
        $('#download_success_message').html(
        '<div class="alert alert-success alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        '</h5></div>'
        );
        // window.location="book_book";
      }else{
        console.log(response.message);
        var message=JSON.stringify(response.message)
        $('#download_success_message').html(
        '<div class="alert alert-danger alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
        '</div>'
        );
      }
     
    }
  });
});






// for event registration

// $(document).on('click', '#reg',function(e){
//     e.preventDefault();
//      console.log('connected');
    
//      $('#regEvent').modal('show');

//     //  console.log('clicked')
// });
// $(document).on('click', '.attendEvent',function(){

//   const data=$('#addEvent').serialize();          

//   console.log(data);

//   $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });
//   $.ajax({
//     url:"/attendEvent",
//     type:"POST",
//      data:data,
//     success:function(response){
//       $('#regEvent').modal('hide');  

//       console.log(response);
//       // $('#SendMessage').modal('hide');
//       if(response.status==200){
//         $('#RegEventMessage').html(
//         '<div class="alert alert-success alert-dismissible">'+
//         // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//         '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
//         '</h5></div>'
//         );
//         // window.location="book_book";
//       }else{
//         console.log(response.message);
//         var message=JSON.stringify(response.message)
//         $('#RegEventMessage').html(
//         '<div class="alert alert-danger alert-dismissible">'+
//         // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//         '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
//         '</div>'
//         );
//       }
     
//     }
//     });

// });






$(document).on('click', '.SendEmail',function(){
  //  var download=$("#downloadEmail").serialize();
  // console.log();
  //  console.log(download);

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"/new-email",
    type:"POST",
    // data:cat,
    success:function(response){
      console.log(response);
      $('#SendEmailModal').modal('hide');
      if(response.status==200){
        $('#download_success_message').html(
        '<div class="alert alert-success alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        '</h5></div>'
        );
        // window.location="book_book";
      }else{
        console.log(response.message);
        var message=JSON.stringify(response.message)
        $('#download_success_message').html(
        '<div class="alert alert-danger alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
        '</div>'
        );
      }
     
    }
  });
});



// var getid= document.getElementById('.cat_check').value; 
//     $("label").click(function(){    
//         alert(getid);   
//     });


// $("label").on('click',function(){
//   var serializeVal = $( "form" ).serialize();
//   alert(serializeVal);
// });

    // $("label").click(function(){    
    //   var getid= $(this).children('.cat_check').val(); 
         
    //     // var data=$('gettingCat').serialize();
    //       alert(getid );
    //       // alert(data);
   

        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

//  });

$.ajax({
    url:"/book",
    type:"GET",
     data:{
      cat:'1'
     },
    success:function(response){
      // console.log(response);
      // $('#SendEmailModal').modal('hide');
      // if(response.status==200){
      //   $('#download_success_message').html(
      //   '<div class="alert alert-success alert-dismissible">'+
      //   '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
      //   '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
      //   '</h5></div>'
      //   );
        // window.location="book_book";
      // }else{
      //   // console.log(response.message);
      //   // var message=JSON.stringify(response.message)
      //   // $('#download_success_message').html(
      //   // '<div class="alert alert-danger alert-dismissible">'+
      //   // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
      //   // '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
      //   // '</div>'
      //   );
      }
     
    //}
  });




   // });



// $(document).on('click', 'label',function(e){
//   e.preventDefault();

//   //  var download=$("#downloadEmail").serialize();
//   // console.log();
//   //  console.log(download);

//   var cat_id=$('.cat_check').val();
//    alert(cat_id);



  // $.ajaxSetup({
  //   headers: {
  //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   }
  // });

  // $.ajax({
  //   url:"/book",
  //   type:"GET",
  //   // data:cat_id,
  //   success:function(response){
  //     console.log(response);
  //     $('#SendEmailModal').modal('hide');
  //     if(response.status==200){
  //       $('#download_success_message').html(
  //       '<div class="alert alert-success alert-dismissible">'+
  //       '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
  //       '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
  //       '</h5></div>'
  //       );
  //       // window.location="book_book";
  //     }else{
  //       console.log(response.message);
  //       var message=JSON.stringify(response.message)
  //       $('#download_success_message').html(
  //       '<div class="alert alert-danger alert-dismissible">'+
  //       '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
  //       '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
  //       '</div>'
  //       );
  //     }
     
  //   }
  // });
//});






// for search
//  returnbook();
function returnbook(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });


  $.ajax({
    url:"/search",
    type:"GET",
    dataType:"json",
    contentType: false, 
    processData: false, 
    success:function(response){
      console.log(response);
      // if(response.status==200){
        $.each(response.data,function(key,item){
         
          const fullimage=item.book_cover;
          const [first, ...rest]=fullimage.split('/');
          const realimage=rest.join('/');
          // alert(realimage);
                

          $('.properties').append(`
            <div class="properties-card">   
            <div class="properties-img">  
              <a href=""><img src="{{asset('storage/`+realimage+`')}}"  alt=""  style="width:200px; height:200px;></a>
            </div>
            <div class="properties-caption properties-caption2">
              <h3><a href="{{url ('details/`+item.id+`') }}">`+item.book_title+`</a></h3>
              <p class="cat">`+item.category.category+`</p>

              <div class="properties-footer d-flex justify-content-between align-items-center">
                <!-- <p></p> -->
                <p>`+item.book_desc.split(/\s+/).slice(0,10).join(" ")+`<span><a href="">...Read More</a></span></p>
                <div class="review">
                  <!-- <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  </div> -->
                  <!-- <p>(<span>120</span> Review)</p> -->
                </div>
                <div class="price">
                  <span class="cat">₦`+item.price+`</span>
                </div>
              </div>
            </div></div>
            </div>`
          );
        });
      }
      });
}

$(document).ready(function(){
  $('.getsearch').click(function(e){
  
  var $this = $(this);
  if($this.data('clicked',true)){

    e.preventDefault(); 
    var search=$("#formsearch").serialize();  

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


  $.ajax({
    url:"/search",
    type:"GET",
    data:search,
    dataType:"json",
    contentType: false, 
    processData: false, 
    success:function(response){
      console.log(response);
      // if(response.status==200){
        $.each(response.data,function(key,item){
         
          const fullimage=item.book_cover;
          const [first, ...rest]=fullimage.split('/');
          const realimage=rest.join('/');
          // alert(realimage);
                

          $('.properties').append(`
            <div class="properties-card">   
            <div class="properties-img">  
              <a href=""><img src="{{asset('storage/`+realimage+`')}}"  alt=""  style="width:200px; height:200px;></a>
            </div>
            <div class="properties-caption properties-caption2">
              <h3><a href="{{url ('details/`+item.id+`') }}">`+item.book_title+`</a></h3>
              <p class="cat">`+item.category.category+`</p>

              <div class="properties-footer d-flex justify-content-between align-items-center">
                <!-- <p></p> -->
                <p>`+item.book_desc.split(/\s+/).slice(0,10).join(" ")+`<span><a href="">...Read More</a></span></p>
                <div class="review">
                  <!-- <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  </div> -->
                  <!-- <p>(<span>120</span> Review)</p> -->
                </div>
                <div class="price">
                  <span class="cat">₦`+item.price+`</span>
                </div>
              </div>
            </div></div>
            </div>`
          );
        });
      }
      });
   

  }

  else{
    // returnbook();
  }


  // console.log();
  // alert(search)

});
  
          // alert(item.book_it)
        });
        
        // $('#download_success_message').html(
        // '<div class="alert alert-success alert-dismissible">'+
        // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        // '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        // '</h5></div>'
        // );
        // window.location="book_book";
      // }else{
        // console.log(response.message);
        // var message=JSON.stringify(response.message)
        // $('#download_success_message').html(
        // '<div class="alert alert-danger alert-dismissible">'+
        // '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        // '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
        // '</div>'
        // );
      // }
     
    


// });


// for book Sharing








$(document).on('click', '.SendEmail',function(){
   var download=$("#downloadEmail").serialize();
  console.log();
   console.log(download);

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"/new-email",
    type:"POST",
    // data:cat,
    success:function(response){
      console.log(response);
      $('#SendEmailModal').modal('hide');
      if(response.status==200){
        $('#download_success_message').html(
        '<div class="alert alert-success alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        '</h5></div>'
        );
        // window.location="book_book";
      }else{
        console.log(response.message);
        var message=JSON.stringify(response.message)
        $('#download_success_message').html(
        '<div class="alert alert-danger alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
        '</div>'
        );
      }
     
    }
  });
});


// $(document).on('click', '#share',function(e){
//     e.preventDefault();
//      console.log('connected')
    
//      $('#ShareBook').modal('show');
// });

// $(document).on('click', '.SendEmail',function(){
//    var download=$("#downloadEmail").serialize();
//   console.log();
//    console.log(download);

//   $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });
//   $.ajax({
//     url:"/new-email",
//     type:"POST",
//     // data:cat,
//     success:function(response){
//       console.log(response);
//       $('#SendEmailModal').modal('hide');
//       if(response.status==200){
//         $('#download_success_message').html(
//         '<div class="alert alert-success alert-dismissible">'+
//         '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//         '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
//         '</h5></div>'
//         );
//         // window.location="book_book";
//       }else{
//         console.log(response.message);
//         var message=JSON.stringify(response.message)
//         $('#download_success_message').html(
//         '<div class="alert alert-danger alert-dismissible">'+
//         '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//         '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
//         '</div>'
//         );
//       }
     
//     }
//   });
//});











</script>

<script type="text/javascript">
// $(document).on('click','.share', function(){
//   // e.preventDefault();
//   $('#share').modal('show');
//   // $('#share').modal('show'); 
//   const share=$('#share').val();
//   console.log(share);

  // 

</script>
  



<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>




<script src="{{asset('book_assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('book_assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('book_assets/js/popper.min.js')}}">
<script>eval(mod_pagespeed_64J4x1U9Lt);</script>

<script src="{{asset('book_assets/js/owl.js')}}"></script><script>eval(mod_pagespeed_2b_kILWYuf);</script>
<script>eval(mod_pagespeed_YcgqpOO3k2);</script>
<script src="{{asset('book_assets/js/slick.js')}}"></script><script>eval(mod_pagespeed_W070UA44Fy);</script>

<script>eval(mod_pagespeed_HHFEHFyfva);</script>
<script>eval(mod_pagespeed_He4JmNoJSL);</script>
<script>eval(mod_pagespeed_Vq55GYBaD4);</script>
<script>eval(mod_pagespeed_urzCQ$ljEK);</script>
<script>eval(mod_pagespeed_yBL9chaY8Z);</script>
<script src="{{asset('book_assets/js/price_range.js')}}"></script><script>eval(mod_pagespeed_6gHvth7EP8);</script>

<script>eval(mod_pagespeed_gVyWNPnP1a);</script>
<script src="{{asset('book_assets/js/form.js')}}"></script><script>eval(mod_pagespeed_WxueWYkioV);</script>
<script>eval(mod_pagespeed_JeTX5oy9W7);</script>
<script>eval(mod_pagespeed_Dfx$DMKuSV);</script>
<script>eval(mod_pagespeed_In2a_xtXil);</script>

<script>eval(mod_pagespeed_ADDajFRwXo);</script>
<script>eval(mod_pagespeed_R473QNJAOB);</script>
<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>