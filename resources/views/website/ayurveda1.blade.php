
@extends('website.layout.layout')
@section('extra_css')
<style>
   .images-section {
   /* width: 100vw; */
   height: 150px; /* Adjust height as needed */
   display: flex;
   justify-content: center;
   align-items: center;
   overflow-x: auto; /* Enable horizontal scrolling if needed */
}

.images-container {
   display: flex;
   gap: 10px; /* Adjust the gap between images */
   padding: 10px; /* Add padding for better spacing */
}

.animated-image {
   animation: slideIn 0.5s ease-in-out forwards;
}
.main-img{
  width: 100%;
  height: 100vh;
  object-fit: contain;
  background:url('{{ url($info->ayurveda_banner) }}')
   
}
p {
      font-family: 'Lato', sans-serif;
   }
.ayurveda p{
    
   margin:100px;
   font-size: 21px
}
@keyframes slideIn {
   from {
      opacity: 0;
      transform: translateY(50px);
   }
   to {
      opacity: 1;
      transform: translateY(0);
   }
}

</style>
@endsection
@section('content')
<section class="home-banner ">
   
   <div id="menu"></div>
   @if($info)
   <div class="ayurveda">

  <div class="main-img">

  </div>
       {{-- <img class="main-img" src="{{ url($info->ayurveda_banner) }}" alt=""> --}}
      
       <p><h3 style="padding-left: 60px;">Ayurveda</h3></p>
      
       <p>{{$info->ayurveda_description}}</p>
       <img src="{{ url($info->philosophy_banner) }}" alt="">
       <p><h3 style="padding-left: 60px;">Our Philosophy</h3></p>
       <p>{{ $info->philosophy_description }}</p>
      </div>
       @else
   <h3>N0 information Added Yet</h3>   
   @endif

</section>

 @section('extra_js')

 <script>
   $(function()
   {
      $(".home_address").on("submit" , function(e) {
         e.preventDefault();
         let fd = new FormData(this)
         fd.append('_token', "{{ csrf_token() }}");

         $.ajax({
            url: "{{ route('website.home_address') }}",
            type: "POST",
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {
               $('.loader').show();
            },
            success: function(result) {
               if (result.status) {
                  iziToast.success({
                     title: '',
                     message: result.msg,
                     position: 'topRight'
                  });
               } else {
                  iziToast.error({
                     title: '',
                     message: result.msg,
                     position: 'topRight'
                  });
               }
            },
            complete: function() {
               $('.loader').hide();
            },
            error: function(jqXHR, exception) {
               $('.loader').hide();
            }
         });
      })

      // Pickup address
      $(".pickup_address").on("submit", function(e) {
         e.preventDefault();

         let fd = new FormData(this)
         fd.append('_token', "{{ csrf_token() }}");

         $.ajax({
            url: "{{ route('website.pickup_address_new') }}",
            type: "POST",
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {
               $('.loader').show();
            },
            success: function(result) {
               if (result.status) {
                  iziToast.success({
                     title: '',
                     message: result.msg,
                     position: 'topRight'
                  });
               } else {
                  iziToast.error({
                     title: '',
                     message: result.msg,
                     position: 'topRight'
                  });
               }
            },
            complete: function() {
               $('.loader').hide();
            },
            error: function(jqXHR, exception) {
               $('.loader').hide();
            }
         });
      })

      //book_table
      $("body").on("submit", ".formreply", function(e)
        {
            e.preventDefault()
            let fd = new FormData(this)

         fd.append('_token', "{{ csrf_token() }}");
         $.ajax({
            url: "{{ route('website.book_table') }}",
            type: "POST",
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {
               $('.loader').show();
               },
               success: function(result)
               {
                  if (result.status)
                  {
                     iziToast.success({
                        title: '',
                        message: result.msg,
                        position: 'topRight'
                     });
                     $(".formreply")[0].reset();
                     setTimeout(() =>
                        {window.location.reload()
                        },500);

                  } else
                  {
                     iziToast.error({
                        title: '',
                        message: result.msg,
                        position: 'topRight'
                     });
                  }
               },
               complete: function() {
               $('.loader').hide();
            },
            error: function(jqXHR, exception) {
               $('.loader').hide();
               console.log(jqXHR.responseText);
            }
         });
      })

      //qr code
      $('#table_no : selected').val();

      $('.generate-qr-code').on('click', function() {
         $(selector).val();
         // Clear Previous QR Code
         // $('#qrcode').empty();

         // // Set Size to Match User Input
         // $('#qrcode').css({
         // 'width' : $('.qr-size').val(),
         // 'height' : $('.qr-size').val()
         // })

         // Generate and Output QR Code
         // $('#qrcode').qrcode({
         //    width:200,
         //    height:200
         // });

      });

      // var hideAll = function() {
      // $('.generate-qr-code').hide();
      // }

      // $('#select').on('change', function() {
      // hideAll();
      // var category = $(this).val();

      // $(.generate-qr-code).show();
      // });

            // $(.generate-qr-code).show();
            // });

   })


</script>
 @endsection
 @endsection
