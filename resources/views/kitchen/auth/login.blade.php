<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jan 2020 05:40:04 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/admin/assets/img/favicon.ico')}}' />
  <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/izitoast/css/iziToast.min.css')}}">
  <style>
        /* Ensure full height for centering */
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        /* Center the container */
        .centered-container {
            min-height: 100vh; /* Full viewport height */
            display: flex;
            justify-content: left; /* Horizontal centering */
            align-items: left; /* Vertical centering */
            width: 100%; /* Ensure it spans full width */
        }
        /* Remove Bootstrap container padding if causing issues */
        .container {
            padding: 0; /* Override default padding if needed */
        }
        </style>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container centered-container">
        <div class="row">
          <div class="col-12 col-sm-8 2 col-md-6  col-lg-6  col-xl-4" style="margin: auto;">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" class="needs-validation login-submit" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="{{ route('admin.forget_password')}}" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                {{-- <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/admin/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ asset('assets/admin/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/admin/assets/js/custom.js')}}"></script>
  <script src="{{ asset('assets/admin/assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
 <script src="{{ asset('assets/admin/assets/js/page/toastr.js')}}"></script>
  <script>

     $(function (){

    $('.login-submit').on('submit', function(e){
        e.preventDefault()

        let fd = new FormData(this)
        fd.append('_token',"{{ csrf_token() }}");
        $.ajax({
            url: "{{ route('admin.submit_login') }}",
            type:"POST",
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function () {
                $('#login-button').prop('disabled', true);
                $('.loader').show();
            },
            success:function(result){
                if(result.status)
                {
                    iziToast.success({
                      title: '',
                      message: result.msg,
                      position: 'topRight'
                    });
                    setTimeout(function(){
                        window.location.href = result.location;
                    }, 500);
                }
                else
                {
                  iziToast.error({
                      title: '',
                      message: result.msg,
                      position: 'topRight'
                    });
                }
            },
            complete: function () {
              $('.loader').hide();
            },
            error: function(jqXHR, exception) {
              $('.loader').hide();
                console.log(jqXHR.responseText);
            }
        });
    })
    });
  </script>
</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jan 2020 05:40:04 GMT -->
</html>
