<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Restaurant POS Admin Panel</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/app.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/bootstrap-social/bootstrap-social.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/custom.css')); ?>">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo e(url('public/assets/website/images/logo.webp')); ?>'/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/izitoast/css/iziToast.min.css')); ?>">
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

<body
    style="background-image: url('public/assets/website/images/slide2.webp');background-repeat:no-repeat;background-size: cover ">
<div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container centered-container">
            <div class="row">
                <div class="col-12 col-sm-8  col-md-6  col-lg-6  col-xl-4 ">
                    <div class="card card-primary">
                        <div class="card-header justify-content-center">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" class="needs-validation login-submit" novalidate="">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                           required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                           tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                               id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>
</div>

<script src="<?php echo e(asset('assets/admin/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/assets/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/assets/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/assets/bundles/izitoast/js/iziToast.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/assets/js/page/toastr.js')); ?>"></script>
<script>

    $(function () {

        $('.login-submit').on('submit', function (e) {
            e.preventDefault()

            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('admin.submit_login')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#login-button').prop('disabled', true);
                    $('.loader').show();
                },
                success: function (result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        setTimeout(function () {
                            window.location.href = result.location;
                        }, 500);
                    } else {
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
                error: function (jqXHR, exception) {
                    $('.loader').hide();
                    console.log(jqXHR.responseText);
                }
            });
        })
    });
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\andhra\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>