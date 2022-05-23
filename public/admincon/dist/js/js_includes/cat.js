// create new main_cat
$(document).on('click', '#addcat',function(e){
    e.preventDefault();
    // console.log('connected')
    
     $('#AddCatModal').modal('show');
});

$(document).on('click', '.AddNewCat',function(){
  var cat=$("#cat").serialize();
  console.log(cat);
   console.log("clicked");

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"/cat",
    type:"POST",
    data:cat,
    success:function(response){
      console.log(response);
      $('#AddCatModal').modal('hide');
      if(response.status==200){
        $('#cat_success_message').html(
        '<div class="alert alert-success alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        '</h5></div>'
        );
        // window.location="book_book";
      }else{
        console.log(response.message);
        var message=JSON.stringify(response.message)
        $('#cat_success_message').html(
        '<div class="alert alert-danger alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
        '</div>'
        );
      }
     
    }
  });
});

  // update main_cat
  // edit main_cat////////////////////////////////////////////
$(document).on('click', '#edit_course', function(e){
  e.preventDefault();
  var course_id=$(this).val();
  console.log(course_id);
    $('#EditCourseModal').modal('show');
    $.ajax({
    type: "GET",
    url:"//getcatById/"+course_id,
      dataType:"json",
    success:function(response){
      console.log(response);
      // alert("edit_main_cat").val(response.data.main_cat);
       $('.img').val(response.data.course_img_link);
      $('.title').val(response.data.course_title);
      $('.desc').val(response.data.course_desc);
      $('.price').val(response.data.price);

      $('.cta').val(response.data.cta_link);

      $('#edit_course_id').val(course_id);
      
    }  
  });


    // End of edit main_cat from database/////////////////////
    //update main_cat and store into  database////////////////////////////
    // console.log("another"+course_id)
  $(document).on('click', '.update_course', function(e){
    e.preventDefault();
    console.log('welcome');
    var course_id=$('#edit_course_id').val();
      console.log("edit course"+course_id)
      //  var course=$("#edit_course").serialize();
       var course=$("#edit_course").serialize();
  //     var course={
  //       'title' : $('#course_title').val(),
  // };
    console.log('well'+course)
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    // $.ajax({
    //   type: "PUT",
    //   url:"//updatecat/"+course_id,
    //   data:course,
    //   dataType:"json",
    //   success:function(response){
    //     $('#EditCourseModal').modal('hide');
    //       if(response.status==200){
    //       $('#course_success_message').html(
    //       '<div class="alert alert-success alert-dismissible">'+
    //         '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
    //         '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
    //       '</h5></div>'
    //       );
          
    //       // window.location="main_cat_main_cat";
    //       }else{
    //       console.log(response.message);
    //       $('#course_success_message').html(
    //       '<div class="alert alert-danger alert-dismissible">'+
    //         '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
    //         '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
    //       '</div>'
    //       );

    //     }
    //   }
    // });
  });
  
});
    // delete main_cat
$(document).on('click', '#trash_cat', function(e){
    e.preventDefault();
      var delete_cat_id=$(this).val();
      $('#delete_cat_id').val(delete_cat_id);
       console.log( delete_cat_id);
    $('#deleteCatModal').modal('show');
  $(document).on('click', '.delete_cat_btn', function(e){
      e.preventDefault();
      var  delete_cat_id=$('#delete_cat_id').val();

      // var message="Post Deleted Successfully";

          console.log(delete_cat_id);
          $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "PUT",
      url:"/delete-cat/"+ delete_cat_id,
      dataType:"json",
      success:function(response){
          console.log('data')
        $('#deleteCatModal').modal('hide');
        if(response.status==200){
          $('#cat_success_message').html(
          '<div class="alert alert-success alert-dismissible">'+
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
            '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
          '</h5></div>'
          );
          
          // window.location="dept_main_cat";

        }else{
          console.log(response.message);
          $('#cat_success_message').html(
          '<div class="alert alert-danger alert-dismissible">'+
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
            '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
          '</div>'
          );

        }
      }
    });
  });
});




// js for sub book cat


// create new main_cat
// $(document).on('click', '#add_sub_book_cat',function(e){
//   e.preventDefault();
  
//   $('#AddSubCatModal').modal('show');
// });

// $(document).on('click', '.AddSubCat',function(){
// var sub_cat=$("#sub_cat").serialize();
// console.log(sub_cat);
// console.log("clicked");

// $.ajaxSetup({
//   headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   }
// });
// $.ajax({
//   url:"/sub_cat",
//   type:"POST",
//   data:sub_cat,
//   success:function(response){
//     // console.log(response);
//     $('#AddSubCatModal').modal('hide');
//     if(response.status==200){
//       $('#sub_cat_success_message').html(
//       '<div class="alert alert-success alert-dismissible">'+
//       '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//       '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
//       '</h5></div>'
//       );
//       // window.location="book_book";
//     }else{
//       console.log(response.message);
//       var message=JSON.stringify(response.message)
//       $('#sub_cat_success_message').html(
//       '<div class="alert alert-danger alert-dismissible">'+
//       '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//       '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
//       '</div>'
//       );
//     }
//     $('#AddbookModal').modal('hide');
//   }
// });
// });


// view course
$(document).on('click', '#viewCourse', function(e){
  e.preventDefault();
  var course_id=$(this).val();
  console.log(course_id);
    $('#ViewCourseModal').modal('show');
    fetch_data();
    function fetch_data(){
    $.ajax({
    type: "GET",
    url:"/getCourseById/"+course_id,
      dataType:"json",
    success:function(response){
      console.log(response)
      // $.each(response.data,function(key,item){

        $('#admin_course_view').append( 
            // ///////////////////////////////////////////////////////////////////////////////
          '<div class="row">'+
            '<div class="col-md-6">'+
              '<h5> Course Title</h5>'+
            '<p>'+response.data.course_title+'</p>'+
                // description
              '<h5>Course Description</h5>'+
              '<p>'+response.data.course_desc+'</p>'+
              // price
              '<h5>Course Price</h5>'+
              '<p>'+response.data.price+'</p>'+
              // cta link
              '<h5>Course CTA link</h5>'+
              '<p>'+response.data.cta_link+'</p>'+
              // category
              // '<h5>Course Category</h5>'+
              // '<p>'+item.title+'</p>'+
            '</div>'+
            '<div class="col-md-6">'+
            '<h5>Course Image</h5>'+

            '<img class="img-size" src="'+response.data.course_img_link+'"  />'+

              // '<img scr="'+response.data.course_img_link+'">'+
              // '<img class="thumb-image" src="" alt="">'+
            '</div>'+
          '</div>'
        );
      // });

       console.log(response);
      // alert("edit_main_cat").val(response.data.main_cat);
      $('.title').val(response.data.course_title);
      $('.desc').val(response.data.course_desc);
      $('.img_link)').val(response.data.course_img_link);
      $('.price').val(response.data.price);

      $('.cta_link').val(response.data.cta_link);

      // $('#edit_main_cat').val('bio');
      // $('#edit_content').val(response.data.content);
      // $('#edit_sub_cat_id').val(sub_cat_id);
      
    }  
  });
}
});




// update main_cat
// edit main_cat////////////////////////////////////////////
// $(document).on('click', '.edit_sub_book_cat', function(e){
// e.preventDefault();
// var sub_cat_id=$(this).val();
// console.log(sub_cat_id);
//   $('#EditSubCatModal').modal('show');
//   $.ajax({
//   type: "GET",
//   url:"/getSubCatById/"+sub_cat_id,
//     dataType:"json",
//   success:function(response){
//     //  console.log(response);
//     // alert("edit_main_cat").val(response.data.main_cat);
//     $('.title').val(response.data.title);
//     $('.main_cat').val(response.data.main_book_cat_id);
//     // $('#edit_main_cat').val('bio');
//     // $('#edit_content').val(response.data.content);
//     $('#edit_sub_cat_id').val(sub_cat_id);
    
//   }  
//  });


  // End of edit main_cat from database/////////////////////
  //update main_cat and store into  database////////////////////////////
// $(document).on('click', '.update_sub_cat', function(e){
//   e.preventDefault();
//   var sub_cat_id=$('#edit_sub_cat_id').val();
//     // console.log("this data 111" +main_cat_id+ "mydata");
//     var sub_cat=$("#edit_sub_cat").serialize();
//     // console.log(main_cat+"then the no :"+main_cat_id)
//   $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });
//   $.ajax({
//     type: "PUT",
//     url:"/update_sub_cat/"+sub_cat_id,
//     data:sub_cat,
//     dataType:"json",
//     success:function(response){
//       $('#EditSubCatModal').modal('hide');
//         if(response.status==200){
//         $('#sub_cat_success_message').html(
//         '<div class="alert alert-success alert-dismissible">'+
//           '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//           '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
//         '</h5></div>'
//         );
        
//         // window.location="main_cat_main_cat";
//         }else{
//         console.log(response.message);
//         $('#sub_cat_success_message').html(
//         '<div class="alert alert-danger alert-dismissible">'+
//           '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//           '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
//         '</div>'
//         );

//       }
//     }
//   });
// });

 //});


  // delete main_cat
// $(document).on('click', '.delete_sub_book_cat', function(e){
//   e.preventDefault();
//     var delete_sub_cat_id=$(this).val();
//     $('#delete_sub_cat_id').val(delete_sub_cat_id);
//      console.log(delete_sub_cat_id);
//   $('#deleteSubCatModal').modal('show');
// $(document).on('click', '.delete_sub_cat_btn', function(e){
//     e.preventDefault();
//     var delete_sub_cat_id=$('#delete_sub_cat_id').val();
//     // var message="Post Deleted Successfully";
//         console.log(delete_sub_cat_id);
//         $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });
//   $.ajax({
//     type: "GET",
//     url:"/delete-sub_cat/"+delete_sub_cat_id,
  
//     dataType:"json",
//     success:function(response){
//       $('#deletesub_catModal').modal('hide');
//       if(response.status==200){
//         $('#sub_cat_success_message').html(
//         '<div class="alert alert-success alert-dismissible">'+
//           '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//           '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
//         '</h5></div>'
//         );
        
//         // window.location="dept_main_cat";

//       }else{
//         console.log(response.message);
//         $('#sub_cat_success_message').html(
//         '<div class="alert alert-danger alert-dismissible">'+
//           '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
//           '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
//         '</div>'
//         );

//       }
//     }
//   });
//});
//});


