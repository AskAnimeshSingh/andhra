
<?php $__env->startSection('extra_css'); ?>
<style>
    /* .profile-icon {
                    margin-left: 80px;
                    margin-top: -30px;
                } */
    @media  only screen and (min-width: 320px) and (max-width: 480px) {
        .row {
            flex-wrap: wrap;
        }

        .details-row {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            /* -ms-flex-wrap: wrap; */
            flex-direction: column;
            width: 100%;
            margin: auto;
            height: 100%;
            justify-content: center;
            place-items: center;
        }

        .col-4 {
            width: 100%;
            max-width: 100%;
        }
    }
    @media  only screen and (min-width: 481px) and (max-width: 767px) {
        .row {
            flex-wrap: wrap;
        }

        .details-row {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            /* -ms-flex-wrap: wrap; */
            flex-direction: column;
            width: 100%;
            margin: auto;
            height: 100%;
            justify-content: center;
            place-items: center;
        }

        .col-4 {
            width: 100%;
            max-width: 100%;
        }
    }

    @media  only screen and (min-width: 768px) and (max-width: 1024px) {
        .row {
            flex-wrap: wrap;
        }

        .details-row {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            margin: auto;
            height: 100%;
            justify-content: center;
            place-items: center;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }

    @media  only screen and (min-width: 1025px) and (max-width: 1280px) {
        .row {
            flex-wrap: wrap;
        }

        .details-row {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            margin: auto;
            height: 100%;
            justify-content: center;
            place-items: center;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }
    @media  only screen and (min-width: 1281px) {
        .row {
            flex-wrap: inherit;
        }

        .details-row {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            margin: auto;
            height: 100%;
            justify-content: center;
            place-items: center;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }

    @media  only screen and (min-width: 1400px) {
        .row {
            flex-wrap: inherit;
        }

        .details-row {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            margin: auto;
            height: 100%;
            justify-content: center;
            place-items: center;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }
    @media  only screen and (min-width: 1600px) {
        .row {
            flex-wrap: inherit;
        }

        .details-row {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            margin: auto;
            height: 100%;
            justify-content: center;
            place-items: center;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-body">
        <div class="row mt-sm-4" style="justify-content:center; place-items:flex-start; gap:30px;">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box" style="margin-bottom: 30px;">
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image" src="<?php echo e(asset(Auth::guard('admin')->user()->img)); ?>" class="rounded-circle author-box-picture profile-icon">

                            <input type="file" name="image" class="image" style="display:none">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <a href="#"><?php echo e(Auth::guard('admin')->user()->fname); ?>&nbsp;<?php echo e(Auth::guard('admin')->user()->lname); ?></a>
                            </div>
                            <div class="author-box-job">Kitchen</div>
                        </div>
                        <div class="text-center">

                            <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <div class="w-100 d-sm-none"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left">
                                    Birthday
                                </span>
                                <span class="float-right text-muted">
                                    <?php echo e(Auth::guard('admin')->user()->birthday == '' ? '' : date('d-m-Y', strtotime(Auth::guard('admin')->user()->birthday))); ?>

                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Phone
                                </span>
                                <span class="float-right text-muted">
                                    <?php echo e(Auth::guard('admin')->user()->phone); ?>

                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Mail
                                </span>
                                <span class="float-right text-muted">
                                    <?php echo e(Auth::guard('admin')->user()->email); ?>

                                </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-8">
                <div class="card" style="margin-bottom: 30px;">
                    <div class="padding-20">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-bordered" id="myTab3Content">
                            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                <div class="row details-row">
                                    <div class="col-md-4 col-4 b-r">
                                        <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">
                                            <?php echo e(Auth::guard('admin')->user()->fname . ' ' . Auth::guard('admin')->user()->lname); ?>

                                        </p>
                                    </div>
                                    <div class="col-md-4 col-4 b-r">
                                        <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted"><?php echo e(Auth::guard('admin')->user()->phone); ?></p>
                                    </div>
                                    <div class="col-md-4 col-4 b-r">
                                        <strong>Email</strong>
                                        <br>
                                        <p class="text-muted"><?php echo e(Auth::guard('admin')->user()->email); ?></p>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                                <form method="POST" class="needs-validation update_profile" id="update_profileid">
                                    <div class="card-header">
                                        <h4>Edit Profile</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="fname" value="<?php echo e(Auth::guard('admin')->user()->fname); ?>">
                                                <div class="invalid-feedback">
                                                    Please fill in the last name
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lname" value="<?php echo e(Auth::guard('admin')->user()->lname); ?>">
                                                <div class="invalid-feedback">
                                                    Please fill in the last name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7 col-12">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" value="<?php echo e(Auth::guard('admin')->user()->email); ?>">
                                                <div class="invalid-feedback">
                                                    Please fill in the email
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5 col-12">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" name="phone" value="<?php echo e(Auth::guard('admin')->user()->phone); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Select Image</label>
                                            <input type="file" class="form-control" name="image" onchange="stocks(this);">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <div class="row justify-content-left">
                                                <div class="col-4 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <img class="img-thumbnail image-width mt-4 mb-3" id="previewImage" src="<?php echo e(asset(Auth::guard('admin')->user()->img)); ?>" alt="your image" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label>Bio</label>
                                                <textarea class="form-control summernote-simple" name="bio"><?php echo e(Auth::guard('admin')->user()->bio); ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <form method="post" role="form" class="updatepassword" id="updatepasswordform">
                            <div class="card-header">
                                <div class="card-title">
                                    <h4>Update Password</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-body">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <div class="">
                                                    <input class="form-control" name="old_password" placeholder="Your Current Password" type="password">
                                                    <?php if($errors->has('old_password')): ?>
                                                    <span class="text-danger">
                                                        <?php echo e($errors->first('old_password')); ?>

                                                    </span>
                                                    <?php else: ?>
                                                    <?php if($errors->first('oldPassMatch')): ?>
                                                    <span class="text-danger">
                                                        Old password doesn't match with the existing password!
                                                    </span>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <div class="">
                                                    <input class="form-control" name="password" placeholder="New Password" type="password">
                                                    <?php if($errors->has('password')): ?>
                                                    <span class="text-danger">
                                                        <?php echo e($errors->first('password')); ?>

                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>New Password Again</label>
                                                <div class="">
                                                    <input class="form-control" name="password_confirmation" placeholder="New Password Again" type="password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php $__env->startSection('extra_js'); ?>
<script>
    function stocks(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#previewImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {

        // Update profile
        $('.update_profile').on('submit', function(e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('kitchen.profile_update')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#login-button').prop('disabled', true);
                    $('.loader').show();
                },
                success: function(result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);7

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
                    console.log(jqXHR.responseText);
                }
            });
        })
    })

    $('.updatepassword').on('submit', function(e) {
        e.preventDefault()
        let fd = new FormData(this)
        fd.append('_token', "<?php echo e(csrf_token()); ?>");
        $.ajax({
            url: "<?php echo e(route('kitchen.updatepassword')); ?>",
            type: "POST",
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#login-button').prop('disabled', true);
                $('.loader').show();
            },
            success: function(result) {
                if (result.status) {
                    iziToast.success({
                        title: '',
                        message: result.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
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
                console.log(jqXHR.responseText);
            }
        });
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kitchen.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\andhra\resources\views/kitchen/profile/profile.blade.php ENDPATH**/ ?>