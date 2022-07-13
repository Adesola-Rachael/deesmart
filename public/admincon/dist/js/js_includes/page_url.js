// create new main_cat
$(document).on('click', '#AddPageUrl',function(e){
    e.preventDefault();
    // console.log('connected')
    
     $('#AddPageUrlModal').modal('show');
});

$(document).on('click', '.AddNewPageUrl',function(){
  var PageUrl=$("#PageUrl").serialize();
  console.log(PageUrl);
   console.log("clicked");

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"/pageurl",
    type:"POST",
    data:PageUrl,
    success:function(response){
      console.log(response);
      $('#AddPageUrlModal').modal('hide');
      if(response.status==200){
        $('#PageUrl_success_message').html(
        '<div class="alert alert-success alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        '</h5></div>'
        );
        // window.location="book_book";
      }else{
        console.log(response.message);
        var message=JSON.stringify(response.message)
        $('#PageUrl_success_message').html(
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

  $(document).on('click', '.edit_cat', function(e){
    e.preventDefault();
    var cat_id=$(this).val();
    console.log("cat_dcard"+cat_id);
      $('#EditCatModal').modal('show');
      $.ajax({
      type: "GET",
      url:"/getcatById/"+cat_id,
        dataType:"json",
      success:function(response){
         console.log(response);
        // alert("edit_main_cat").val(response.data.main_cat);
        // $('.verse').val(response.data.verse);
        // $('.scripture').val(response.data.scripture);
        // $('.date_display').val(response.data.date_display);
         $('.edit_cat').val(response.data.category);
        // $('#edit_cat_id').val(cat_id);
        
      }  
    });
  
  
      // End of edit main_cat from database/////////////////////
      //update main_cat and store into  database////////////////////////////
    $(document).on('click', '.update_quote', function(e){
      e.preventDefault();
      console.log('welcome');
      var cat_id=$('#edit_cat_id').val();
        console.log(cat_id);
        var quote=$("#edit_quote").serialize();
        // console.log(main_cat+"then the no :"+main_cat_id)
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "PUT",
        url:"/updateQuote/"+cat_id,
        data:quote,
        dataType:"json",
        success:function(response){
          $('#EditQuoteModal').modal('hide');
            if(response.status==200){
            $('#Quote_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="main_cat_main_cat";
            }else{
            console.log(response.message);
            $('#Quote_success_message').html(
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
      // delete main_cat
  // $(document).on('click', '.delete_quote', function(e){
  //     e.preventDefault();
  //       var delete_cat_id=$(this).val();
  //       $('#delete_cat_id').val(delete_cat_id);
  //        console.log(delete_cat_id);
  //     $('#deleteQuoteModal').modal('show');
  //   $(document).on('click', '.delete_quote_btn', function(e){
  //       e.preventDefault();
  //       var delete_cat_id=$('#delete_cat_id').val();
  //       // var message="Post Deleted Successfully";
  //           console.log(delete_cat_id);
  //           $.ajaxSetup({
  //       headers: {
  //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //       }
  //     });
  //     $.ajax({
  //       type: "GET",
  //       url:"/delete-quote/"+delete_cat_id,
      
  //       dataType:"json",
  //       success:function(response){
  //         $('#deleteQuoteModal').modal('hide');
  //         if(response.status==200){
  //           $('#Quote_success_message').html(
  //           '<div class="alert alert-success alert-dismissible">'+
  //             '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
  //             '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
  //           '</h5></div>'
  //           );
            
  //           // window.location="dept_main_cat";
  
  //         }else{
  //           console.log(response.message);
  //           $('#Quote_uccess_message').html(
  //           '<div class="alert alert-danger alert-dismissible">'+
  //             '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
  //             '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
  //           '</div>'
  //           );
  
  //         }
  //       }
  //     });
  //   });

