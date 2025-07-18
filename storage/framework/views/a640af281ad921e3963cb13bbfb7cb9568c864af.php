
<?php $__env->startSection('extra_css'); ?>
<style>
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    
                    <div class="card-header justify-content-between">
                        <div class="">Chef List</div>
                        <div class=""><a href="<?php echo e(route('admin.chef')); ?>" class="btn btn-primary btn-sm">Add Chef</a></div>
                    </div>
                    <div class="card-body">
                        <select class="form-group" name="select_branch" id="select_branch">
                            <option value="all">All</option>
                            <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="table-responsive">
                            <table class="table table-striped" id="detail">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Branch</th>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>




<?php $__env->startSection('extra_js'); ?>
<script>
    var tables = $('#detail').DataTable({
            "processing": true,
            pageLength: 10,
            "serverSide": true,
            "ajax": {
                url: "<?php echo e(route('admin.list_ajax.chef')); ?>",
                data: function(d) {
                    // Append the selected branch value to the AJAX request
                    d.branch = $('#select_branch').val();
                },
                dataFilter: function(data) {
                    var json = jQuery.parseJSON(data);
                    json.recordsTotal = json.recordsTotal;
                    json.recordsFiltered = json.recordsFiltered;
                    json.data = json.data;
                    return JSON.stringify(json);
                }
            },

        'order': [
            [1, 'desc']
        ],
        'columnDefs': [{
                "targets": 0,
                "name": "id",
                'searchable': false,
                'orderable': false
            },
            {
                "targets": 1,
                "name": "first_name",
                'searchable': true,
                'orderable': true
            },
            {
                "targets": 2,
                "name": "last_name",
                'searchable': true,
                'orderable': true
            },
            {
                "targets": 2,
                "name": "branchName",
                'searchable': true,
                'orderable': true
            },
            {
                "targets": 3,
                "name": "image",
                'searchable': true,
                'orderable': true
            },

            {
                "targets": 4,
                "name": "email",
                'searchable': true,
                'orderable': true
            },
            {
                "targets": 5,
                "name": "phone",
                'searchable': true,
                'orderable': true
            },
            {
                "targets": 6,
                "name": "status",
                'searchable': true,
                'orderable': true
            },
            {
                "targets": 7,
                "name": "action",
                'searchable': true,
                'orderable': true
            },
        ],
    });
    $('#select_branch').change(function() {
            // Reload the DataTable with the new branch value
            tables.ajax.reload();
        });s
    $(function() {
            // alert('hello');
            $("body").on("click", ".delete_chef", function(e) {

                e.preventDefault()

                let id = $(this).attr('data-id');
                // alert('l');
                let fd = new FormData();
                fd.append('id', id);
                fd.append('_token', '<?php echo e(csrf_token()); ?>');

                $.ajax({
                    method: "POST",
                    url: "<?php echo e(route('admin.delete.chef')); ?>",
                    data: fd,
                    dataType: "JSON",
                    contentType: false,
                    processData: false,
                    success: function(result) {

                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            setTimeout(function() {
                                window.location.reload()
                            }, 2000);

                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    }
                })
            })






        });


        $("body").on("click", ".statusVerifiedClick", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var status = $(this).data('status');
            let fd = new FormData()
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('status', status);
            fd.append('id', id);
            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to change chef status?',
                buttons: {
                    yes: function () {
                        $.ajax({
                            url: "<?php echo e(route('admin.status.chef')); ?>",
                            type: 'POST',
                            data: fd,
                            dataType: "JSON",
                            contentType: false,
                            processData: false,
                        })
                            .done(function (result) {
                                if (result.status) {
                                    iziToast.success({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                    $('#detail').DataTable().ajax.reload(null, false);

                                } else {
                                    iziToast.error({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                }
                            })
                            .fail(function (jqXHR, exception) {
                                console.log(jqXHR.responseText);
                            })


                    },
                    no: function () {
                    },
                }
            })
        })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/chef/chef_list.blade.php ENDPATH**/ ?>