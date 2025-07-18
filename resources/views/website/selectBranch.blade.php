
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
.header-area{
    background: black;
} 
.images-container {
   display: flex;
   gap: 10px; /* Adjust the gap between images */
   padding: 10px; /* Add padding for better spacing */
}
.brach-card{
    border:1px solid black;
    height: 500px;
    width: 20vw;

}
.animated-image {
   animation: slideIn 0.5s ease-in-out forwards;
}
.main-img{
  width: 100%;
  height: 100vh;
  object-fit: contain;
   
}
.ayurveda p{-
    
   margin:100px;
   font-size: 21px
}
.row{
    margin-top: 30px
}
.card-main{
    margin-top: 200px;
    display: grid;
    grid-template-columns: repeat(3,1fr)
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
.branch-Image{
    border: 1px solid black;
    height:75%;
    object-fit: cover;

}
.txt1{
    font-size: 2rem;

}
.txt2{
    font-size: 2rem;
    font-weight: 600;
}
.branch-text{
    display: grid;
    place-items: center;
}
</style>
@endsection
@section('content')
<section class="home-banner ">
   
   <div id="menu"></div>
   <div class="row">
    <div class="card-main container ">
   @if($branchData)
   @foreach ($branchData as $data)
    <a href="{{ route('website.menuPage',['id' => $data->id]) }}">  
   <div class="col-md-4">
       <div class="brach-card">
        <div class="branch-Image">
            <img src="{{ url($data->branch_banner)}}" alt=""  height="100%" width="100%">
        </div>
        <div class="branch-text">
            <div class="txt1">Andhra Dining</div>
            <div class="txt2">{{$data->name}}</div>
        </div>
       </div>
    </div>
    </a>
    @endforeach 
    @else
    <h3>N0 information Added Yet</h3>   
    @endif
</div>
</div>
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
