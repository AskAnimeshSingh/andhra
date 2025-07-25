
<?php $__env->startSection('extra_css'); ?>
<style>
    input[type="time"] {
        position: relative;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }

    .time-picker {
        margin-right: 10px;
        background-color: white;
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .form-row {
        margin-bottom: 20px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        place-items: center;
        gap: 15px;
        color: #3E2622;
        font-family: var(--fontFamily-dm_sans);
        text-transform: uppercase;
        font-size: 15px;
    }

    .form-row input[type="text"] {
        background-color: white;
        padding: 8px;
    }

    .form-row input,
    .form-row textarea {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    .form-row input[type="number"],
    .form-row input[type="date"],
    .form-row input[type="time"],
    .form-row input[type="tel"],
    .form-row input[type="email"] {
        background-color: white;
        padding: 8px;
    }

    .form-row p {
        background-color: white;
        padding: 8px;
    }

    .form-row p {
        margin: 0;
    }

    .second-con {
        min-height: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Lato', sans-serif;
        overflow-x: hidden;
    }


    .one-container {
        max-width: 1100px;
        width: 100%;
        padding: 20px 0;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: transparent;
        border-radius: 5px;

        .left-side {

            height: 450px;
            flex: 3;

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }

        .right-side {
            flex: 2;
            text-align: left;
            padding: 0 5rem 0 2rem;
            color: #fff;
            margin: 0;

            h4 {
                opacity: 0.5;
                margin: -0.8rem 0 1.2rem 0;
            }

            ul {
                margin-top: 3rem;
                padding: 0;
                list-style: none;

                li {

                    margin: 2.5rem 0;

                    p {
                        opacity: 0.5;
                    }

                    h3 {
                        margin: -0.5rem 0;
                    }
                }
            }

            .btn {
                border: none;
                outline: none;
                color: #3E2622;
                padding: 1rem;
                width: 100%;
                font-size: 1.5rem;
                cursor: pointer;
                font-family: var(--fontFamily-dm_sans);
                width: 100%;

                /* &:hover {
                    background-color: #f3f3f3;
                    color: #3E2622;
                    transition: 0.4s ease all;
                } */
            }
        }
    }


    @media(max-width: 800px) {

        .second-con {
            padding: 5rem 0;
        }

        .one-container {
            width: 100%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: transparent;

            .left-side {

                height: 450px;
                flex: 3;

                img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                }
            }

            .right-side {
                flex: 3;
                text-align: center;
                color: #fff;
                padding: 0 2rem 0 2rem;
                margin: 0;

                ul {
                    margin-top: 3rem;
                    list-style: none;
                }

                .btn {
                    margin: 1.5rem 0;
                }
            }
        }
    }

    @media(max-width: 550px) {

        .one-container {
            width: 100%;
        }
    }

    @media(max-width: 400px) {

        .one-container {
            width: 100%;
        }
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="regis-container" style="color:black; background-color:#F2F2F2; padding-bottom:50px;">

    <div>
        <h2 class="headline-1 section-title mx-auto" style="text-align:center; margin-top:84px; padding-top:50px;"><?php echo app()->getLocale() == 'ja' ? $branchData->type_jpn : $branchData->type; ?></h2>
        <h2 class="headline-1 section-title mx-auto" style="text-align:center; color:black; font-family: var(--fontFamily-dm_sans); font-size: 38px; text-transform:uppercase; letter-spacing:8px;"><?php echo app()->getLocale() == 'ja' ?  strtoupper($branchData->name_jpn) : strtoupper($branchData->name); ?></h2>
    </div>

    <div class="second-con">
        <div class="one-container">


            <div class="right-side">
                <form action="<?php echo e(route('website.reservation')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-row">
                        <input type="text" name="firstName" placeholder="<?php echo stripParagraphTags(translate('first_name')); ?>">
                        <?php $__errorArgs = ['firstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="" style="color:red">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <input type="text" name="lastName" placeholder="<?php echo stripParagraphTags(translate('last_name')); ?>">
                        <?php $__errorArgs = ['lastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="" style="color:red">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-row">
                        <input type="number" name="people" placeholder="<?php echo stripParagraphTags(translate('number_of_people')); ?>">
                        <?php $__errorArgs = ['people'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="" style="color:red">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-row">
                        <input type="text" id="datepicker" name="days" placeholder="<?php echo stripParagraphTags(translate('select_date')); ?>">
                        <?php $__errorArgs = ['days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="" style="color:red">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="time-picker">
                            <input type="time" name="start_time" id="start_time" placeholder="Select hour">

                            <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="" style="color:red">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="time-picker">
                            <input type="time" name="till" id="till" placeholder="Select hour">

                            <?php $__errorArgs = ['till'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="" style="color:red">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <input type="tel" name="phone" placeholder="<?php echo stripParagraphTags(translate('phone_number')); ?>">
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="" style="color:red">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input type="email" name="email" placeholder="<?php echo stripParagraphTags(translate('Email')); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="" style="color:red">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-row" style="background-color:white;">
                        <textarea placeholder="<?php echo stripParagraphTags(translate('do_you_have_any_dietary_requirements')); ?>" class="special-reqField" name="requirements"></textarea>
                        <?php $__errorArgs = ['requirements'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="" style="color:red">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <input type="hidden" name="id" value="<?php echo e($id); ?>">
                    <div class="form-row" style="background-color: #E7E5DC;">
                        <button type="submit" class="btn"><?php echo stripParagraphTags(translate('book_now')); ?></button>
                    </div>
                </form>
            </div>

            <div class="left-side">
                <img src="<?php echo e(url($branchData->branch_banner)); ?>" alt="">
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('extra_js'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script>
    $(document).ready(function () {
        $('form').submit(function (event) {
            var startTime = $('#start_time').val();
            var endTime = $('#till').val();
    
            if (!startTime || !endTime) {
                iziToast.error({
                    title: 'Error',
                    message: 'Both start time and end time are required.',
                    position: 'topRight',
                    timeout: 5000
                });
                event.preventDefault();
                return;
            }
    
            // Convert time strings to Date objects for comparison
            var startDate = new Date("2000-01-01 " + startTime);
            var endDate = new Date("2000-01-01 " + endTime);
    
            // Define the allowed time range (5:00 PM to 9:30 PM)
            var minTime = new Date("2000-01-01 17:00"); // 5:00 PM
            var maxTime = new Date("2000-01-01 21:30"); // 9:30 PM
    
            // Validate start and end time within the allowed range
            if (startDate < minTime || startDate > maxTime) {
                iziToast.error({
                    title: 'Error',
                    message: 'Start time must be between 5:00 PM and 9:30 PM.',
                    position: 'topRight',
                    timeout: 5000
                });
                event.preventDefault();
                return;
            }
    
            if (endDate < minTime || endDate > maxTime) {
                iziToast.error({
                    title: 'Error',
                    message: 'End time must be between 5:00 PM and 9:30 PM.',
                    position: 'topRight',
                    timeout: 5000
                });
                event.preventDefault();
                return;
            }
    
            // Ensure start time is less than end time
            if (startDate >= endDate) {
                iziToast.error({
                    title: 'Error',
                    message: 'Start time must be earlier than end time.',
                    position: 'topRight',
                    timeout: 5000
                });
                event.preventDefault();
            }
        });
    });
    </script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                minDate: 0 
            });        
        });
    </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/reservationPage.blade.php ENDPATH**/ ?>