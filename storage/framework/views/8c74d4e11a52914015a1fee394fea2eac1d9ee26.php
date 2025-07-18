

<?php $__env->startSection('extra_css'); ?>
    <style>
        /* Hiding the checkbox, but allowing it to be focused */
        .badgebox
        {
            opacity: 0;
        }

        .badgebox + .badge
        {
            /* Move the check mark away when unchecked */
            text-indent: -999999px;
            /* Makes the badge's width stay the same checked and unchecked */
            width: 27px;
        }

        .badgebox:focus + .badge
        {
            /* Set something to make the badge looks focused */
            /* This really depends on the application, in my case it was: */

            /* Adding a light border */
            box-shadow: inset 0px 0px 10px;
            /* Taking the difference out of the padding */
        }

        .badgebox:checked + .badge
        {
            /* Move the check mark back when checked */
            text-indent: 0;
            font-size: 18px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php

        /**
         * @This Method use to enter module and submodules which are newly created in erp for assigns the privileges to the users
        */

           /** @module list array */

    $modules = [ '1'  => 'Dashboard' ,
                 '2'  => 'Category',
                 '3'  => 'Food' ,
                 '4'  => 'Discount' ,
                 '5'  => 'Offers' ,
                 '6'  => 'Blogs',
                 '7'  => 'Setting' ,
                 '8'  => 'Combo Pack' ,
                 '9'  => 'Manage Stock',
                 '10' => 'User Management',
                 '11' => 'Delivery Feedback',
                 '12' => 'Complete Order',
                 '13' => 'Restaurant',
                 '14' => 'Order',
                 '15' => 'Help',
                 '16' => 'Table',
                 '17' => 'POS',
                 ];

         /** @submodule list array */

    $submodule = [
        'Dashboard' => [
                '1' => 'Dashboard',
            ],
        'Category' => [
            '1'  => 'Category',
            '2'  => 'Sub Category',
            '3'  => 'Child Category',
        ],
        'Food' => [
            '1' => 'Add New Item',
            '2' => 'All Item',
            '3' => 'Properties',
            '4' => 'Variations'
           ],
        'Discount' => [
            '1' => 'Discount',
            ],
        'Offers' => [
            '1' => 'Offers',
            ],
        'Blogs' => [
            '1' => 'Blogs List',
            '2' => 'Blogs Create'
            ],
        'Setting' => [
            '1' => 'Size Setting',
            '2' => 'Type Setting',
            '3' => 'Extra',
            '4' => 'Currencies',
            '5' => 'General Setting',
            '6' => 'Email/Smtp',
            '7' => 'Language',
            '8' => 'Privacy policy',
            '9' => 'Term and Condition'
            ],
        'Combo Pack' => [
            '1' => 'Combo Pack',
            ],
        'Manage Stock' => [
            '1' => 'Food Purchase',
            '2' => 'Purchase History',
            '3' => 'Ingredient Group',
            '4' => 'Ingredient Item',
            '5' => 'Ingredient Purchase',
            '6' => 'Ingredient Purchase History',
            '7' => 'Manage Supplier',
            '8' => 'Supplier History',
            ],
        'User Management' => [
            '1' => 'Admin/Staff',
            '2' => 'Customer',
            '3' => 'Waiters',
            '4' => 'Role Group',
            '5' => 'Delivery User',
            ],
        'Delivery Feedback' => [
             '1' => 'Delivery Feedback',
            ],
        'Complete Order' => [
             '1' => 'Complete Order',
            ],
        'Restaurant' => [
             '1' => 'Branches',
             '2' => 'Dept Tags',
             '3' => 'Tables',
             '4' => 'Payment Types',
            ],
        'Order' => [
            '1' => 'Details',
            ],
        'Help' => [
            '1' => 'Help',
            ],
        'Table' => [
            '1' => 'Table',
            ],
        'POS' => [
            '1' => 'POS',
        ],
        
    ];

    ?>
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Privilage Manage
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Privilage Manage</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-1 col-sm-12 col-xs-12 col-md-1"></div>
                <div class="col-lg-10 col-sm-12 col-xs-12 col-md-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" style="text-decoration: none" class="btn btn-xs btn-success m-2 float-left" title="Back"><i class="fa fa-arrow-left"> </i></a>
                            <br>
                            <form action="#" id="setPrivilages">
                                <input type="hidden" name="staff_id" value="<?php echo e($id); ?>">
                                <table class="table table-responsive" id="privilege-list" style="width: 100%">
                                    <thead>
                                    <tr class="text-center">
                                        <th>Check</th>
                                        <th>Module</th>
                                        <th>Privilage</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php
                                                if(App\Helpers\MyHelper::getUserPrivilages($id , $key) === $key){  $modulecheck =  'checked'; $removeModule = '<a href="" class="text-danger">Remove</a>';}
                                                    else{$modulecheck = ''; $removeModule ='';}
                                            ?>
                                            <td><input type="checkbox" class="form-control" style="height: 18px; width: 18px" <?php echo e($modulecheck); ?> value="<?php echo e($key); ?>" name="moduleNo[]">

                                            </td>
                                            <td><b><?php echo e($items); ?></b></td>
                                            <td style="width: 70%">
                                                <p>
                                                    <a class="btn-sm btn-primary" data-toggle="collapse" href="#multiCollapseExample1<?php echo e($key); ?>" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-plus"></i> </a>
                                                </p>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="collapse multi-collapse" id="multiCollapseExample1<?php echo e($key); ?>">
                                                            <div class="card card-body">
                                                                <?php $__currentLoopData = $submodule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $items1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($key1 === $items): ?>
                                                                        <table class="table table-responsive">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Sub modules</th>
                                                                                <th>Access</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php $__currentLoopData = $items1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3 => $items2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <tr>
                                                                                    <?php
                                                                             $privilage = App\Helpers\MyHelper::getUserPrivilages($id , $key , $key3);

                                                                         if($privilage && $privilage['submodule'] === $key3)
                                                                            {
                                                                                $checkbox = 'checked';
                                                                            }
                                                                            else{
                                                                                $checkbox = '';
                                                                            }
                                                                            if($privilage && $privilage['result'][0]['access'] === 'Read')
                                                                            {
                                                                                $read = 'selected';
                                                                                $write = '';
                                                                                $hidden = 'd-none';
                                                                                $add    = '';
                                                                                $edit    = '';
                                                                                $delete    = '';

                                                                            }
                                                                            elseif ($privilage && $privilage['result'][0]['access'] === 'Write' )
                                                                            {
                                                                                $read = '';
                                                                                $write = 'selected';
                                                                                $hidden = '';
                                                                                if($privilage['result'][0]['add'] === 'on')
                                                                                {
                                                                                $add    = 'checked';
                                                                                }
                                                                                else
                                                                                {
                                                                                $add = '';
                                                                                }
                                                                                if($privilage['result'][0]['edit'] === 'on')
                                                                                {
                                                                                    $edit = 'checked';
                                                                                }
                                                                                else{
                                                                                    $edit = '';
                                                                                }
                                                                                if($privilage['result'][0]['delete'] === 'on')
                                                                                {
                                                                                    $delete = 'checked';
                                                                                }
                                                                                else
                                                                                {
                                                                                    $delete = '';
                                                                                }
                                                                            }
                                                                            else{
                                                                                 $read = '';
                                                                                 $write = '';
                                                                                 $hidden = 'd-none';
                                                                                 $add    = '';
                                                                                 $edit    = '';
                                                                                 $delete    = '';
                                                                            }

                                                                                    ?>
                                                                                    <td><input type="checkbox" class="form-control submodules" style="width: 20px; height: 20px" value="<?php echo e($key3); ?>" <?php echo e($checkbox); ?>  name="submodule<?php echo e($key); ?>[]"></td>
                                                                                    <td><?php echo e($items2); ?></td>
                                                                                    <td> <select class="form-control" name="access<?php echo e($key.$key3); ?>[]" onchange="$.fn.showaccess(this.value , 'writeAcc<?php echo e($key.$key3); ?>')">
                                                                                            <option value="">Please Select</option>
                                                                                            <option value="Read" <?php echo e($read); ?>>Read</option>
                                                                                            <option value="Write" <?php echo e($write); ?>>Write</option>
                                                                                        </select>
                                                                                        <br>







                                                                                    </td>
                                                                                </tr>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </tbody>
                                                                        </table>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="modal-footer center">
                                    <span class="error"></span>
                                    <a href="#" class="btn cancel-button" data-dismiss="modal">Cancel</a>  
                                    <button type="submit" class="btn btn-success add_privilege add-button" disabled id="saveData"> 
                                        <i class="fa fa-spinner fa-spin " id="spin-privilege-add"></i>  Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_js'); ?>
    <script>
        $(function (e) {

            $.fn.showaccess = function (e , f) {
                if(e === 'Write'){
                    $('#'+f).removeClass('d-none').show();
                    $('#saveData').removeAttr('disabled');
                }
                else if(e === 'Read')
                {
                    $('#'+f).addClass('d-none').hide();
                    $('#saveData').removeAttr('disabled');
                }
                else if(e === ''){
                    $('#'+f).addClass('d-none').hide();
                }
            }

            $('.badgebox , .submodules').on('click', function (e) {
                $('#saveData').removeAttr('disabled');
            })


            $('#spin-privilege-add').hide();

            // method use for save category
            $('#setPrivilages').on('submit', function (e) {
                e.preventDefault()

                let fd = new FormData(this)
                fd.append('_token', "<?php echo e(csrf_token()); ?>");
                $.ajax({
                    url: "<?php echo e(route('admin.staff.save_permission')); ?>",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('.add-button').prop('disabled', true);
                        $('.cancel-button').prop('disabled', true);
                        $('#spin-privilege-add').show();
                    },
                    success: function (result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function () {
                        $("#spin-privilege-add").hide();
                        $('.add-button').prop('disabled', false);
                        $('.cancel-button').prop('disabled', false);
                    },
                    error: function (jqXHR, exception) {
                        $("#spin-privilege-add").hide();
                        $('.add-button').prop('disabled', false);
                        $('.cancel-button').prop('disabled', false);
                        console.log(jqXHR.responseText);
                    }
                });
            })


        })
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/staff/permission.blade.php ENDPATH**/ ?>