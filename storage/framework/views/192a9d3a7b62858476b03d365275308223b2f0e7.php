
<?php $__env->startSection('extra_css'); ?>
    <style>
        .hp-13{
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }

        .hp-12{
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: 600;
        }
        .font-light{
            font-weight: 400;
        }
        dt{
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: 600;
        }

        dd{
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: 400;
        }
        .pymnt{
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: 400;
        }
        .thnk{
            font-size: 21px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: 700;
        }


    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section body">
            <input type="button" class="btn btn-primary non-printable" onclick="printDiv('printableArea')" value="Print" fdprocessedid="s93gho">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    
                    <hr class="non-printable" >
                    <div class="row justify-content-center" id="printableArea">
                        <div class="col-5">
                            <div class="row justify-content-center">
                                <img src="https://stackfood-admin.6amtech.com/public/assets/admin/img/restaurant-invoice.png"
                                    class="initial-38-2" alt="">
                            </div>
                            <div class="text-center pt-2 mb-3">
                                <h2 class="hp-13">XYZ FOOD</h2>
                                <h5 class="text-break hp-13">
                                    House: <?php echo e($status->house); ?>,  Floor: <?php echo e($status->apartment); ?>, Street: <?php echo e($status->street); ?>, City: <?php echo e($status->city); ?>

                                </h5>
                                <h5 class="hp-13">
                                    <span>Phone</span> <span>:</span> <span><?php echo e($status->uphone); ?></span>
                                </h5>
                            </div>
                            <span
                                class="initial-38-5">-----------------------------------------------------------------------------</span>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <h5 class="hp-12">Order ID :
                                        <span class="font-light"> <?php echo e($order_id); ?> </span>
                                    </h5>
                                </div>
                                <div class="col-6">
                                    <span class="font-light">
                                        <?php echo e(date('Y-m-d H:i:s')); ?>


                                    </span>
                                </div>
                                <div class="col-12">
                                    <h5 class="hp-12">
                                        Customer Name :
                                        <span class="font-light">
                                            <?php echo e($status->name ?? 'N/A'); ?>

                                        </span>
                                    </h5>
                                    <?php if($status->delivery_type === 'Take Away'): ?>
                                    <h5 class="hp-12">
                                        Delivery Type :
                                        <span class="font-light">
                                            Take Away
                                        </span>
                                    </h5>
                                    <h5 class="hp-12">
                                        Branch :
                                        <span class="font-light">
                                            <?php echo e($branchss->address); ?>

                                        </span>
                                    </h5>
                                    <?php else: ?>
                                    <h5 class="hp-12">
                                        Delivery Type :
                                        <span class="font-light">
                                         <?php echo e($status->delivery_type); ?>

                                        </span>
                                    </h5>
                                    <h5 class="hp-12">
                                        Phone :
                                        <span class="font-light">
                                            +<?php echo e($status->uphone); ?>

                                        </span>
                                    </h5>
                                    <h5 class="hp-12">
                                        Address :
                                        <span class="font-light">
                                            <?php echo e($status->house); ?>,<?php echo e($status->apartment); ?>,<?php echo e($status->street); ?>,<?php echo e($status->city); ?>,<?php echo e($status->state); ?>

                                         
                                              <!-- <?php echo e($status->house); ?> -->
                                        </span>
                                    </h5>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <h5 class="text-uppercase"></h5>
                            <span
                                class="initial-38-5">-----------------------------------------------------------------------------</span>
                            <table class="table table-bordered mt-1 mb-1">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <!-- <th>Package Type</th> -->
                                        <th>Base Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0; ?>
                                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                    $id = $dat->combo_pack_id;
                                                ?>
                                                <tr>
                                                    <?php $total += $dat->base_price * $dat->pro_qty;?>
                                                    <?php $vat = $status->pay_amount - $total; ?>
                                                    <?php if($dat->type == 'combo'): ?>
                                                        <td style="padding-left: 30px;">
                                                            
                                                            <div class="">

                                                                <span>
                                                                    <?php
                                                                        $combo_products = App\Models\ComboProduct::where('pack_id', $id)->get();
                                                                    ?>
                                                                    <?php
                                                                        foreach ($combo_products as $co) {
                                                                            $prod = App\Models\Products::where('id', $co->product_id)->get();
                                                                            foreach ($prod as $key => $value) {
                                                                                echo '<br>';
                                                                                echo $value->product_name;
                                                                            }
                                                                        }

                                                                    ?>
                                                                </span>
                                                            </div>


                                </div>

                                </td>
                            <?php else: ?>
                                <td style="padding-left: 30px;">
                                    
                                        <span><?php echo e($dat->product_name); ?></span>
                                    
                                    <?php if($dat->toppings != null || $dat->varients != null || $dat->properties != null): ?>
                                        <div class=" mt-2"><span style="font-weight:800">Product
                                                Details</span></div>
                                    <?php endif; ?>
                                    <?php endif; ?>


                                    <div class="">
                                        <?php if(!empty($dat->toppings) && count(json_decode($dat->toppings)) > 0): ?>
                                            <?php $crust = ''; ?>
                                            <?php $__currentLoopData = json_decode($dat->toppings); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyTop => $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $topping = App\Models\IndItem::where(['id' => $top])->first(); ?>
                                                <span style="font-weight:700">Crust
                                                    :</span><span><?php echo e($topping->name); ?></span><br>

                                                <?php if(!$loop->last): ?>
                                                    ,
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <?php echo e($crust = ''); ?>

                                        <?php endif; ?>
                                    </div>

                                    <div class="">
                                        <?php if(!empty($dat->varients)): ?>
                                            <?php $varientDetails = App\Models\Variation::where(['id' => $dat->varients])->first(); ?>
                                            <span style="font-weight:700">Size :
                                            </span><span><?php echo e($varientDetails->name); ?></span>
                                        <?php else: ?>
                                            <?php echo e($varient = ''); ?>

                                        <?php endif; ?>
                                    </div>

                                    <div class="mb-2">
                                        <?php if(!empty($dat->properties) && count(json_decode($dat->properties)) > 0): ?>
                                            <?php
                                                $toppings = '<span style="font-weight:700">Toppings :</span><span>';
                                                $properties = App\Models\PropertiesItems::whereIn('id', json_decode($dat->properties))->get();
                                            ?>
                                            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyPOP => $pop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $toppings .= $pop->name . ', '; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $toppings; ?></span><br>
                                        <?php endif; ?>
                                    </div>
                                    
                                </td>

                                <!-- <td><?php echo e($dat->package_name); ?></td> -->
                                <td><?php echo e($dat->base_price); ?></td>
                                <td><?php echo e($dat->pro_qty); ?></td>
                                <td><?php echo e($dat->base_price * $dat->pro_qty); ?></td>

                                </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <span
                                class="initial-38-5">-----------------------------------------------------------------------------</span>
                            <div class="mb-2 initial-38-9">
                                <div class="px-3">
                                    <dl class="row text-right">
                                        <?php $sub_total = $total; ?>


                                        <?php if($dat->toppings != null || $dat->varients != null || $dat->properties != null): ?>
                                        <dt class="col-6 text-left">Addons:
                                        </dt>
                                        <dd class="col-6 text-right">
                                            + $ <?php echo e(($status->pay_amount + $status->discount_value) - ($total + $status->tax + $status->delivery_charge)); ?>


                                        </dd>
                                        <?php endif; ?>
                                    <dt class="col-6 text-left">Sub Total:
                                   
                                    </dt>
                                    <dd class="col-6 text-right">
                                        <!-- + $ <?php echo e($total + (($status->pay_amount + $status->discount_value) - ($total + $status->tax + $status->delivery_charge))); ?> -->
                                        ¥ <?php echo e(number_format($total, 2)); ?>





                                    </dd>
                                    <dt class="col-6 text-left">Tax (Included):
                                    </dt>
                                    <dd class="col-6 text-right">
                                   + ¥ <?php echo e($status->tax); ?>


                                    </dd>
                                    <dt class="col-6 text-left">Discount Price:
                                    </dt>
                                    <dd class="col-6 text-right">
                                   - ¥  <?php echo e($status->discount_value); ?>

                                    </dd>
                                    <dt class="col-6 text-left">
                                    <?php if($status->delivery_type === 'Home Delivery'): ?>
                                    Delivery Charge:
                                    
                                    <?php endif; ?>
                                    </dt>
                                    <dd class="col-6 text-right">
                                        <?php if($status->delivery_type === 'Home Delivery'): ?>
                                        + ¥ <?php echo e($status->delivery_charge); ?>

                                        <?php endif; ?>
                                    </dd>
                                    <hr>
                                    <dt class="col-6 text-left">Total:</dt>
                                    <dd class="col-6 text-right">
                                    <?php if($status->delivery_type === 'Home Delivery'): ?>
                                    ¥ <?php echo e(number_format(($total + $status->tax + $status->delivery_charge) - $status->discount_value, 2)); ?>

                                    <?php else: ?>
                                    ¥ <?php echo e(number_format(($total + $status->tax) - $status->discount_value, 2)); ?>

                                    <?php endif; ?>
                                    </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between border-top pt-3">
                                <span class="pymnt d-flex"><span>Payment Method</span> <span>:</span> <span> &nbsp; <?php echo e($status->payment_mode); ?></span></span>
                            </div>
                            <span
                                class="initial-38-7">-------------------------------------------------------------------</span>
                            <h5 class="text-center pt-1 justify-content-center">
                                <span class="thnk d-block">"""THANK YOU"""</span>
                            </h5>
                            <!-- <span
                                class="initial-38-7">-------------------------------------------------------------------</span> -->
                            <!-- <span class="d-block text-center">© 2023 Restaurant Pos. All rights reserved.</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->startSection('extra_js'); ?>

  <script>
    function printDiv(divName) {

        if($('html').attr('dir') === 'rtl') {
            $('html').attr('dir', 'ltr')
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            $('.initial-38-1').attr('dir', 'rtl')
            window.print();
            document.body.innerHTML = originalContents;
            $('html').attr('dir', 'rtl')
            location.reload();
        }else{
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }

    }

        //     function printDiv(tagid) {

        // var hashid = "#"+ tagid;
        //     var tagname =  $(hashid).prop("tagName").toLowerCase() ;
        //     var attributes = "";
        //     var attrs = document.getElementById(tagid).attributes;
        //     $.each(attrs,function(i,elem){
        //         attributes +=  " "+  elem.name+" ='"+elem.value+"' " ;
        //     })
        //     var divToPrint= $(hashid).html() ;
        //     var head = "<html><head>"+ $("head").html() + "</head>" ;
        //     var allcontent = head + "<body  onload='window.print()' >"+ "<" + tagname + attributes + ">" +  divToPrint + "</" + tagname + ">" +  "</body></html>"  ;
        //     var newWin=window.open('','Print-Window');
        //     newWin.document.open();
        //     newWin.document.write(allcontent);
        //     newWin.document.close();

        // }
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kitchen.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/kitchen/order/order_details_print.blade.php ENDPATH**/ ?>