
<?php $__env->startSection('extra_css'); ?>
    <style>
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(session('message')): ?>
    <div class="alert alert-success" id="alertMessage">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h4>Edit Branch</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.branch.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="infoInput">Name:</label>
                                    
                                    <input type="text"  class="form-control" id="story_eng" name="name" value="<?php if(isset($data->name)): ?> <?php echo e($data->name); ?> <?php endif; ?>" placeholder="Enter Brach Name">
                                    <?php $__errorArgs = ['name'];
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

                                <div class="col-md-6">
                                    <label for="infoInput">Type:</label>
                                    
                                    <input type="text"  class="form-control" id="type" name="type" value="<?php if(isset($data->type)): ?> <?php echo e($data->type); ?> <?php endif; ?>" placeholder="Enter Brach Type">
                                    <?php $__errorArgs = ['type'];
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

                                <div class="col-md-6">
                                    <label for="infoTextArea">Phone:</label>
                                    
                                    <input type="text"  class="form-control" id="story_eng" name="phone" value="<?php if(isset($data->phone)): ?> <?php echo e($data->phone); ?> <?php endif; ?>" placeholder="Enter Brach Name">
                                    
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
                                </div>
                                <div class="col-md-6">
                                    <label for="infoInput">Address</label>
                                    
                                    <input type="text"  class="form-control" id="story_eng" name="address" value="<?php if(isset($data->address)): ?> <?php echo e($data->address); ?> <?php endif; ?>" placeholder="Enter Brach Name">
                                    
                                    <?php $__errorArgs = ['address'];
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
                                <div class="col-md-6">
                                    <label for="infoTextArea">Distence From:</label>
                                    <textarea class="form-control" id="andra_jpn" name="distence_from" rows="10" placeholder="Enter details"><?php if(isset($data->distence_from)): ?> <?php echo e($data->distence_from); ?> <?php endif; ?></textarea>
                                    <?php $__errorArgs = ['distence_from'];
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
                                <div class="col-md-6">
                                    <label for="infoTextArea">Dilevery Link:</label>
                                    <input type="text" class="form-control" name="dilivery_link" id="infoTextArea" placeholder="Ente Dilevery Link" value="<?php echo e((isset($data->dilivery_app_link)) ? $data->dilivery_app_link : ''); ?>">
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Reservation Link:</label>
                                    <input type="text" class="form-control" name="reservation_link" id="infoTextArea" placeholder="Ente Reservation Link" value="<?php echo e((isset($data->reservation_link)) ? $data->reservation_link : ''); ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Seating Availability:</label>
                                    <input type="text" class="form-control" name="seating_availability" id="infoTextArea" placeholder="Ente Seating Availability" value="<?php echo e((isset($data->seating_ability)) ? $data->seating_ability : ''); ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Number of tables:</label>
                                    <input type="text" class="form-control" name="table_no" id="infoTextArea" placeholder="Enter Number of Tables" value="<?php echo e((isset($data->table_no)) ? $data->table_no : ''); ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Gooogle map Link:</label>
                                    <input type="text" class="form-control" name="google_map_link" id="infoTextArea" placeholder="Ente Google Map Link" value="<?php echo e((isset($data->google_map_link	)) ? $data->google_map_link	 : ''); ?>">

                                </div>
                                <div class="col-md-12">
                                <h3>Timing For Weekdays</h3>
                                </div>
                                <div class="col-md-12">
                                    <h4>Morning to Afternoon</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Opening Time:</label>
                                    
                                    <input type="time" class="form-control" name="weekday_opening" id="infoTextArea" value="<?php echo e(isset($data->weekday_opening) ? date("H:i", strtotime($data->weekday_opening)) : ''); ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Closing Time:</label>
                                    <input type="time" class="form-control" name="weekday_afternoonc" id="infoTextArea" value="<?php echo e((isset($data->weekday_noon_close)) ? date("H:i", strtotime($data->weekday_noon_close)) : ''); ?>">

                                </div>
                                
                                <div class="col-md-12">
                                    <h4>Afternoon to Night</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Opening Time:</label>
                                    <input type="time" class="form-control" name="weekday_afternoono" id="infoTextArea" value="<?php echo e((isset($data->weekday_noon_open)) ? date("H:i", strtotime($data->weekday_noon_open)) : ''); ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Closing Time:</label>
                                    <input type="time" class="form-control" name="weekday_closing" id="infoTextArea" value="<?php echo e((isset($data->weekday_closing)) ? date("H:i", strtotime($data->weekday_closing)) : ''); ?>">

                                </div>
                                <div class="col-md-12">
                                <h3>Timing For Weekends</h3>
                                </div>
                                <div class="col-md-12">
                                    <h4>Morning to Afternoon</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Opening Time:</label>
                                    <input type="time" class="form-control" name="weekend_opening" id="infoTextArea" value="<?php echo e(isset($data->weekend_opening) ? date("H:i", strtotime($data->weekend_opening)) : ''); ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Closing Time:</label>
                                    <input type="time" class="form-control" name="weekend_afternoonc" id="infoTextArea" value="<?php echo e((isset($data->weekend_noon_close)) ? date("H:i", strtotime($data->weekend_noon_close)) : ''); ?>">

                                </div>
                                
                                <div class="col-md-12">
                                    <h4>Afternoon to Night</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Opening Time:</label>
                                    <input type="time" class="form-control" name="weekend_afternoono" id="infoTextArea" value="<?php echo e((isset($data->weekend_noon_open)) ? date("H:i", strtotime($data->weekend_noon_open)) : ''); ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Closing Time:</label>
                                    <input type="time" class="form-control" name="weekend_closing" id="infoTextArea" value="<?php echo e((isset($data->weekend_closing)) ? date("H:i", strtotime($data->weekend_closing)) : ''); ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Branch Icon:</label>
                                    <input type="file" class="form-control" name="branch_icon" id="infoTextArea" >
                                    <?php if(isset($data->branch_banner)): ?>
                                    <img src="<?php echo e(url($data->branch_banner)); ?>" height="100" width="100"> 
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Branch Banner:</label>
                                    <input type="file" class="form-control" name="branch_banner" id="infoTextArea" >
                                    <?php if(isset($data->banner)): ?>
                                    <img src="<?php echo e(url($data->banner)); ?>" height="100" width="100"> 
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 1:</label>
                                    <input type="file" class="form-control" name="specialty_1" id="infoTextArea" >
                                    <?php if(isset($data->specialty_1)): ?>
                                    <img src="<?php echo e(url($data->specialty_1)); ?>" height="100" width="100"> 
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 1 Title:</label>
                                    <input type="text" class="form-control" name="specialty_1_title" placeholder="Enter Title" value="<?php echo e(isset($data->specialty_1_title) ? $data->specialty_1_title : ''); ?>">
                                    
                                    <?php $__errorArgs = ['specialty_1_title'];
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
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 1 Description:</label>
                                    <textarea class="form-control" id="andra_jpn" name="specialty_1_description" rows="10" placeholder="Enter details"><?php if(isset($data->specialty_1_desccription)): ?> <?php echo e($data->specialty_1_desccription); ?> <?php endif; ?></textarea>
                                    <?php $__errorArgs = ['specialty_1_description'];
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
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 1 Title Japanese:</label>
                                    <input type="text" class="form-control" name="specialty_1_title_jpn" placeholder="Enter Title" value="<?php echo e(isset($data->specialty_1_title_jpn) ? $data->specialty_1_title_jpn : ''); ?>" >
                                    
                                    <?php $__errorArgs = ['specialty_1_title_jpn'];
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
                                <div class="col-md-12">
                                    <label for="infoTextArea">Specialty 1 Description Japanese:</label>
                                    <textarea class="form-control" id="andra_jpn" name="specialty_1_description_jpn" rows="10" placeholder="Enter details"><?php if(isset($data->specialty_1_description_jpn)): ?> <?php echo e($data->specialty_1_description_jpn); ?> <?php endif; ?></textarea>
                                    <?php $__errorArgs = ['specialty_1_description_jpn'];
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
                                
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 2:</label>
                                    <input type="file" class="form-control" name="specialty_2" id="infoTextArea" >
                                    <?php if(isset($data->specialty_2)): ?>
                                    <img src="<?php echo e(url($data->specialty_2)); ?>" height="100" width="100"> 
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 2 Title:</label>
                                    <input type="text" class="form-control" name="specialty_2_title" placeholder="Enter Title"  value="<?php echo e(isset($data->specialty_2_title) ? $data->specialty_2_title : ''); ?>"  >
                                    
                                    <?php $__errorArgs = ['specialty_2_title'];
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
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 2 Description:</label>
                                    <textarea class="form-control" id="andra_jpn" name="specialty_2_description" rows="10" placeholder="Enter details"><?php if(isset($data->specialty_2_description)): ?> <?php echo e($data->specialty_2_description); ?> <?php endif; ?></textarea>
                                    <?php $__errorArgs = ['specialty_2_description'];
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
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 2 Title Japanese:</label>
                                    <input type="text" class="form-control" name="specialty_2_title_jpn" placeholder="Enter Title"   value="<?php echo e(isset($data->specialty_2_title_jpn) ? $data->specialty_2_title_jpn : ''); ?>"   >
                                    
                                    <?php $__errorArgs = ['specialty_2_title_jpn'];
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
                                <div class="col-md-12">
                                    <label for="infoTextArea">Specialty 2 Description Japanese:</label>
                                    <textarea class="form-control" id="andra_jpn" name="specialty_2_description_jpn" rows="10" placeholder="Enter details"><?php if(isset($data->specialty_2_description_jpn)): ?> <?php echo e($data->specialty_2_description_jpn); ?> <?php endif; ?></textarea>
                                    <?php $__errorArgs = ['specialty_2_description_jpn'];
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
                                <div class="col-md-6">
                                    <label for="infoTextArea">Footer Banner:</label>
                                    <input type="file" class="form-control" name="footer_banner" >
                                    <?php if(isset($data->footer_banner)): ?>
                                    <img src="<?php echo e(url($data->footer_banner)); ?>" height="100" width="100"> 
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Branch Map:</label>
                                    <input type="file" class="form-control" name="branch_map" >
                                    <?php if(isset($data->branch_map)): ?>
                                    <img src="<?php echo e(url($data->branch_map)); ?>" height="100" width="100"> 
                                    <?php endif; ?>
                                </div>
                                <input type="hidden" name='edit_branch_id' value="<?php echo e($data->id); ?>">
                            <div style="display:flex;justify-content:end;padding:42px;">
                                <Button type="submit" class="btn btn-primary" >Store</Button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script>
        // JavaScript to make the alert disappear after 5 seconds
        setTimeout(function() {
            document.getElementById('alertMessage').style.display = 'none';
        }, 5000);
    </script>
</section>

    <!-- Modal with form -->
    
        <!-- Modal Edit form -->
        
    </section>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/branches/edit.blade.php ENDPATH**/ ?>