
<?php $__env->startSection('extra_css'); ?>
    <style>
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Translations List</h4>
                            
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-striped text-center" id="translation">
                                    <thead>
                                        <tr>    
                                            <th>Section</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Navbar</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'navbar')); ?>"
                                                    class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Footer</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'footer')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Home</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'home')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>About Us</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'About-Us')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Branches Page</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'Branches-Page')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Branches</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'Branches')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ayurveda Page</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'Ayurveda-page')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>gallery</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'gallery')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Menu Page</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'menu-page')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Feedback</td>
                                            <td>
                                                <a href="<?php echo e(route('translations.show', 'feedback')); ?>" class="btn btn-sm btn-success">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/translations/index.blade.php ENDPATH**/ ?>