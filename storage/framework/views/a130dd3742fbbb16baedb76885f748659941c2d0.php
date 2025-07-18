

<?php $__env->startSection('extra_css'); ?>
    <style>
    td.actions {
    display: flex;
    align-items: center;
}

td.actions .btn {
    margin-right: 5px;
}
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3><?php echo e(ucfirst($section)); ?> Translations</h3>
                            <a href="<?php echo e(route('translations.create', $section)); ?>" class="btn btn-primary mb-3"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>English</th>
                                        <th>Japanese</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $translation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($translation->key); ?></td>
                                            <td><?php echo e($translation->translations['en']); ?></td>
                                            <td><?php echo e($translation->translations['ja']); ?></td>
                                            
                                            <td class="actions">
                                                <a href="<?php echo e(route('translations.edit', ['section' => $section, 'id' => $translation->id])); ?>" class="btn btn-sm btn-success">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="<?php echo e(route('translations.destroy', ['section' => $section, 'id' => $translation->id])); ?>" method="POST" style="display: inline-block;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this translation?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/translations/show.blade.php ENDPATH**/ ?>