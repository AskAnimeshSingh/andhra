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
                    <div class="card-header float-right">
                        <h4>Food Purchase History List</h4>
                        <button class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="food_history">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Supplier</th>
                                        <th>Invoice</th>
                                        <th>Purchased</th>
                                        <th>Total</th>
                                        <th>Due</th>
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
    </div>

</section>
<?php $__env->startSection('extra_js'); ?>
<script>
    $(function() {
        var tables = $('#food_history').DataTable({
            "processing": true,
            pageLength: 10,
            "serverSide": true,
            "ajax": {
                url: "<?php echo e(route('admin.food_purchase.food_purchase_ajax_list')); ?>",
                dataFilter: function(data) {
                    var json = jQuery.parseJSON(data);
                    json.recordsTotal = json.recordsTotal;
                    json.recordsFiltered = json.recordsFiltered;
                    json.data = json.data;
                    return JSON.stringify(json); // return JSON string
                }
            },

            'order': [
                [1, 'desc']
            ],
            'columnDefs': [{
                    "targets": 0,
                    "name": "id",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 1,
                    "name": "supplier_id",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 2,
                    "name": "invoice",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 3,
                    "name": "purchase_date",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 4,
                    "name": "total_amnt",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 5,
                    "name": "due_amnt",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 6,
                    "name": "action'",
                    'searchable': false,
                    'orderable': false
                },
            ],
        });
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/admin/food_purchase/purchase_history.blade.php ENDPATH**/ ?>