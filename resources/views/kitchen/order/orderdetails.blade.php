@extends('kitchen.layout.layouts')
@section('extra_css')
    <style>
        h6 {
            font-size: 13px;
            color: black;
        }

        dt {
            font-size: 16px;
            color: rgb(63, 62, 62);
        }

        #table2 {
            border-collapse: collapse;
        }

        .avatar-container {
            position: relative;
            display: inline-block;
            border-radius: 50%;
            overflow: hidden;
            height: 35px;
            width: 35px;
            padding: 0;
            border: none;
            background: #efefef;
            cursor: pointer;
        }
        .avatar-container .avatar {
            display: block;
            margin: 15px;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            overflow: hidden;
            z-index: 100;
        }
        .avatar-container .info {
            display: none;
            font-weight: bold;
            font-size: 2rem;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 187, 255, 0.2);
            color: white;
            z-index: 1000;
        }
        .avatar-container .info.js-active {
            display: table;
        }
        .avatar-container .info .info-inner {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }

        .p--50 {
            background-image: linear-gradient(-90deg, #fe4e2b 50%, transparent 50%, transparent), linear-gradient(270deg, #fe4e2b 50%, #efefef 50%, #efefef);
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }
        .p-100 {
            background-image: linear-gradient(90deg, #fe4e2b 50%, transparent 50%, transparent), linear-gradient(270deg, #fe4e2b 50%, #efefef 50%, #efefef);
        }
        .p-50 {
            background-image: linear-gradient(-90deg, #fe4e2b 50%, transparent 50%, transparent), linear-gradient(270deg, #0BF 50%, #efefef 50%, #efefef);
        }
        .p-25 {
            background-image: linear-gradient(90deg, #efefef 50%, transparent 50%, transparent), linear-gradient(180deg, #fe4e2b 50%, #efefef 50%, #efefef);
        }

        /* Stopwatch container */
        .stopwatch {
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Time elements */
        .time {
            font-size: 48px;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            padding: 0 10px;
        }
        /* .row{
            flex-wrap: inherit;
            gap: 30px;
        } */
    </style>
@endsection

@section('content')
    <section class="section">
        <div class="section body">
            <div class="det-row">
                <div class="col-12">
                    <div class="content container-fluid item-box-page">
                        <div class="page-header">
                            <h1 class="page-header-title text-capitalize">

                                <span style="font-size: 21px; color:rgb(41, 40, 40);">
                                   New Order Details
                                </span>

                            </h1>
                        </div>
                        <div class="det-row mt-4">
                            <div class="col-lg-8">
                                <div class="card mb-3 mb-lg-5">

                                    <div class="card-header">
                                        <div class="col align-self-start">
                                            <h1 class="page-header-title mt-2">
                                                <span style="font-size: 21px; color:rgb(41, 40, 40);">
                                                    Order #{{ $order_id }}
                                                </span>
                                                <a class="btn btn--primary m-2 print--btn d-sm-none ml-auto" href="#">
                                                    <i class="mr-1"></i>
                                                </a>
                                            </h1>
                                            <span class="mt-2 d-block">

                                                <i class="fa fa-calendar"></i>&nbsp;
                                                {{ date('d-M-y h:i', strtotime($status->created_at)) }}
                                            </span>
                                        </div>
                                        {{-- <div class="">
                                            <a href="{{ url("kitchen/order-details", $status->id) }}" class="btn btn-warning btn-sm" style="width: 120px"> Order Details </a></div> --}}
                                        <div class="col align-self-end">
                                            <div class="text-right">
                                                <a class="tn btn-sm btn-success w-30 "
                                                    href="{{ url('kitchen/order-detail-invoice/' . $status->id) }}">
                                                    <i class=""></i> Print Invoice
                                                </a>

                                            </div>

                                            <div class="text-right mt-3 text-capitalize">
                                                <!-- <h6>
                                                    <span>Status :</span>
                                                    <span class="badge badge-soft-info ml-2 ml-sm-3">
                                                        {{ $status->status }}
                                                    </span>
                                                </h6> -->
                                        <div class="row">

                                                <!--<div class="col-md-8 mb-2 d-flex align-items-center flex-nowrap">-->
                                                <!--    <h6 class="mb-0 mr-2" style="white-space: nowrap;">Payment Status Kitchen:</h6>-->
                                                <!--    <select name="payment_update" id="payment_update" class="form-control w-auto">-->
                                                <!--        <option>Select One</option>-->
                                                <!--        <option value="PENDING" {{ $status->payment_status == 'PENDING' ? 'selected' : '' }}>Pending</option>-->
                                                <!--        <option value="COMPLETED" {{ $status->payment_status == 'PAID' ? 'selected' : '' }}>Completed</option>-->
                                                <!--    </select>-->
                                                <!--    <input type="hidden" id="order_id" name="order_id" value="{{ $order_id }}">-->

                                                <!--</div>-->
                                        </div>
                                                <div class="row">

                                              

                                                 {{-- <div class="col-md-8 mb-2 d-flex align-items-center flex-nowrap">
                                                    <h6 class="mb-0 mr-2" style="white-space: nowrap;">Payment Status:</h6>
                                                    <select name="payment_update" id="payment_update" class="form-control w-auto">
                                                        <option>Select One</option>
                                                        <option value="PENDING" {{ $status->payment_status == 'PENDING' ? 'selected' : '' }}>Pending</option>
                                                        <option value="COMPLETED" {{ $status->payment_status == 'PAID' ? 'selected' : '' }}>Completed</option>
                                                    </select>
                                                    <input type="hidden" id="order_id" name="order_id" value="{{ $order_id }}">

                                                </div> --}}

                                              

                                                <!--<div class="col-md-6 mb-2">-->
                                                <!--    <h6><span>Status :</span> -->
                                                <!--        <span class="badge badge-info ml-2">{{ $status->status }}</span>-->
                                                <!--    </h6>-->
                                                <!--</div>-->

                                                <!-- <h6>
                                                    <span>Branch :</span>
                                                    <span class="badge badge-soft-info ml-2 ml-sm-3">
                                                        {{ $branch->name }}
                                                    </span>
                                                </h6> -->

                                                <div class="col-md-6 mb-2">
                                                    <h6><span>Branch :</span> 
                                                        <span class="badge badge-info ml-2">{{ $branch->name }}</span>
                                                    </h6>
                                                </div>

                                                <div class="col-md-6 mb-2">
                                                    <h6><span>Table Number :</span> 
                                                        <span class="badge badge-info ml-2">{{ $status->table_no }}</span>
                                                    </h6>
                                                </div>
                                                {{-- <h6>
                                                    <span>
                                                        Payment Method :</span>
                                                    <strong>
                                                        {{ $status->payment_mode }}</strong>
                                                </h6> --}}
                                                <!-- <h6>
                                                    <span>Order Type :</span>
                                                    <strong class="text--title">{{ $status->delivery_type }}</strong>
                                                </h6> -->

                                                <div class="col-md-6 mb-2">
                                                    <h6><span>Order Type :</span> 
                                                        <!-- <strong class="text-primary">{{ $status->delivery_type }}</strong> -->
                                                        <strong class="text--title">{{ $status->delivery_type }}</strong>
                                                    </h6>
                                                </div>
                                                {{-- <h6>
                                                    <span>User Payment Status :</span>
                                                        <strong class="text--title">{{ $status->payment_status }}</strong>
                                                </h6> --}}
                                                <!-- <h6>
                                                    <span>Payment Status Kitchen:</span>
                                                    @if ($status->payment_status == "PENDING")
                                                    <select  name="payment_update" id="payment_update">
                                                        <option value="PENDING">Pending</option>
                                                        <option value="COMPLETED">Completed</option>
                                                    </select>
                                                    <input type="hidden" id="order_id" name="order_id" value={{ $order_id }}>
                                                        @else

                                                        <strong class="text--title">{{ $status->payment_status}}</strong>
                                                    @endif

                                                </h6> -->

                                                <!-- <div class="col-md-6 mb-2">
                                                    <h6><span>Payment Status :</span></h6>
                                                    <select name="payment_update" id="payment_update" class="form-control d-inline-block w-auto">
                                                        <option>Select One</option>
                                                        <option value="PENDING" {{ $status->payment_status == 'PENDING' ? 'selected' : '' }}>Pending</option>
                                                        <option value="COMPLETED" {{ $status->payment_status == 'PAID' ? 'selected' : '' }}>Completed</option>
                                                    </select>
                                                    <input type="hidden" id="order_id" name="order_id" value="{{ $order_id }}">
                                                </div> -->

                                              


                                                

                                                </div>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table id="table2"
                                                class="table table-bordered table-thead-bordered table-nowrap card-table no-footer mb-0">
                                                <thead
                                                    style="background-color:#0123ff;  border:none; text-transform: uppercase; font-weight:700;">
                                                    <tr>
                                                        <th style="padding-left: 30px; color: white;">Product Name</th>
                                                        <th style="color: white;">Base Price</th>
                                                        <th style="color: white;">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $total = 0; ?>
                                                    @foreach ($data as $dat)
                                                        @php
                                                            $id = $dat->combo_pack_id;
                                                        @endphp
                                                        <tr>
                                                            <?php $total += $dat->base_price * $dat->pro_qty; ?>
                                                            <?php $vat = $status->pay_amount - $total; ?>
                                                            @if ($dat->type == 'combo')
                                                                <td style="padding-left: 30px;">

                                                                    <div class="">

                                                                        <span>
                                                                            @php
                                                                                $combo_products = App\Models\ComboProduct::where('pack_id', $id)->get();
                                                                            @endphp
                                                                            @php
                                                                                foreach ($combo_products as $co) {
                                                                                    $prod = App\Models\Products::where('id', $co->product_id)->get();
                                                                                    foreach ($prod as $key => $value) {
                                                                                        echo '<br>';
                                                                                        echo $value->product_name;
                                                                                    }
                                                                                }

                                                                            @endphp
                                                                        </span>
                                                                    </div>

                                        </td>
                                    @else
                                        <td style="padding-left: 30px;">
                                            <span>{{ $dat->product_name }}</span>

                                            @if ($dat->toppings != null || $dat->varients != null || $dat->properties != null)
                                                <div class=" mt-2"><span style="font-weight:800">Product
                                                        Details</span></div>
                                            @endif
                                            @endif


                                            <div class="">
                                                @if (!empty($dat->toppings) && count(json_decode($dat->toppings)) > 0)
                                                    <?php $crust = ''; ?>
                                                    @foreach (json_decode($dat->toppings) as $keyTop => $top)
                                                        <?php $topping = App\Models\IndItem::where(['id' => $top])->first(); ?>
                                                        <span style="font-weight:700">Crust
                                                            :</span><span>{{ $topping->name }}</span><br>

                                                        @if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                @else
                                                    {{ $crust = '' }}
                                                @endif
                                            </div>

                                            <div class="">
                                                @if (!empty($dat->varients))
                                                    <?php $varientDetails = App\Models\Variation::where(['id' => $dat->varients])->first(); ?>
                                                    <span style="font-weight:700">Size :
                                                    </span><span>{{ $varientDetails->name }}</span>
                                                @else
                                                    {{ $varient = '' }}
                                                @endif
                                            </div>

                                            <div class="mb-2">
                                                @if (!empty($dat->properties) && count(json_decode($dat->properties)) > 0)
                                                    @php
                                                        $toppings = '<span style="font-weight:700">Toppings :</span><span>';
                                                            $propertiesSides = App\Models\PropertiesSidesInCart::whereIn('property_id', json_decode($dat->properties))->where(['usercart_id' => $dat->cart_id, 'product_id' => $dat->product_id])->get();
                                                        $pWhhole = '';
                                                        $pLeft = '';
                                                        $pRight = '';
                                                        $pQuater = '';
                                                        foreach ($propertiesSides as $pp){
                                                            if ($pp->sides == 'whole'){
                                                                $pWhhole .= App\Models\PropertiesItems::where('id', $pp->property_id)->first()->name.', ';
                                                            }
                                                            if ($pp->sides == 'left'){
                                                                $pLeft .= App\Models\PropertiesItems::where('id', $pp->property_id)->first()->name.', ';
                                                            }
                                                            if ($pp->sides == 'right'){
                                                                $pRight .= App\Models\PropertiesItems::where('id', $pp->property_id)->first()->name.', ';
                                                            }
                                                            if ($pp->sides == 'quarter'){
                                                                $pQuater .= App\Models\PropertiesItems::where('id', $pp->property_id)->first()->name.', ';
                                                            }
                                                        }
                                                    @endphp

                                                    <span style="font-weight:700">Toppings:
                                                        @if(!empty($pWhhole))
                                                            <div style="font-weight: 500">{!! $pWhhole !!} </div> <div style="display: flex;justify-content: center;"><div class="avatar-container p-100"></div></div> <hr>

                                                        @endif
                                                        @if(!empty($pLeft))
                                                            <div style="font-weight: 500">{{$pLeft}} </div> <div style="display: flex;justify-content: center;"><div class="avatar-container p--50"></div></div><hr>
                                                        @endif
                                                        @if(!empty($pRight))
                                                            <div style="font-weight: 500">{{$pRight}} </div> <div style="display: flex;justify-content: center;"><div class="avatar-container p-50"></div></div><hr>
                                                        @endif
                                                        @if(!empty($pQuater))
                                                            <div style="font-weight: 500">{{$pQuater}} </div> <div style="display: flex;justify-content: center;"><div class="avatar-container p-25"></div></div><hr>
                                                        @endif
                                                    </span><br>
                                                @endif
                                            </div>

                                        </td>
                                        <td>{{ $dat->base_price }}</td>
                                        <td>{{ $dat->pro_qty }}</td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 order-print-area-right">

                            <div class="card mb-2">

                                <div class="card-header border-0 py-0">
                                    <h4 class="card-header-title border-bottom py-3 m-0  w-100 text-center">Order Setup
                                    </h4>
                                </div>


                                <div class="card-body">
                                    @if($status->status == 'COOKING')
                                    <h3 class="text-center">Running Table</h3>
                                        @php
                                            $cookStart = $status->cookingstart;

                                        @endphp

                                        <div id="stopWatch" style="text-align: center;margin: 1% 0% 4% 0%;font-size: 31px;font-weight: 700;color: green;">30:00</div>


                                    @endif


                                    @if ($status->delivery_type == 'Take Away')
                                        <div class="order-btn-wraper">
                                            @if ($status->status == 'PENDING' || $status->status == 'COOKING')

                                                <table id="table2"
                                                       class="table table-bordered table-thead-bordered table-nowrap card-table no-footer mb-0">
                                                    <thead
                                                        style="background-color:#0123ff;  border:none; text-transform: uppercase; font-weight:700;">
                                                    <tr>
                                                        <th style="padding-left: 30px; color: white;">Product Name</th>
                                                        <th style="color: white;">Assign Chef</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $total = 0; ?>
                                                    @foreach ($data as $dat)
                                                        @php
                                                            $id = $dat->combo_pack_id;
                                                        @endphp
                                                        <tr>
                                                                <?php $total += $dat->base_price * $dat->pro_qty; ?>
                                                                <?php $vat = $status->pay_amount - $total; ?>
                                                            @if ($dat->type == 'combo')
                                                                <td style="padding-left: 30px;">
                                                                    <div class="">

                                                                        <span>
                                                                            <b>{{ $dat->package_name }}</b>
                                                                            <br>
                                                                            <b>Quantity:</b> {{ $dat->pro_qty }}
                                                                            @php
                                                                                $combo_products = App\Models\ComboProduct::where('pack_id', $id)->get();
                                                                                foreach ($combo_products as $co) {
                                                                                    $prod = App\Models\Products::where('id', $co->product_id)->get();
                                                                                    foreach ($prod as $key => $value) {
                                                                                        echo '<br>';
                                                                                        echo $value->product_name.', ';
                                                                                    }
                                                                                }
                                                                            @endphp
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                            @else

                                                            @endif


                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                @elseif($status->status == 'PENDING')
                                                <button class=" btn btn-sm btn-info w-100 mb-3 mt-3 assign_chef"
                                                data-status="READY" data-id={{ $status->user_id }} data-web_order_id={{ $order_id }}> Start Cooking</button>
                                                @elseif($status->status == 'COOKING')
                                                <button class="statusrdispatch btn btn-sm btn-primary w-100 mb-3 mt-3 "
                                                        data-status="READY" data-id={{ $status->user_id }}>Ready to Serve</button>
                                            @elseif ($status->status == 'READY')
                                                <badge class="badge badge-sm badge-info w-100 mb-3">Cooking Complete, Ready For HandOver</badge>
                                            @elseif ($status->status == 'COMPLETED')
                                                <button class="btn btn-sm btn-success w-100 mb-3">Takeaway Completed
                                                </button>
                                            @endif
                                        </div>
                                    @else
                                        <div class="order-btn-wraper">

                                            @if ($status->status == 'PENDING' )

                                                {{-- <table id="table2"
                                                       class="table table-bordered table-thead-bordered table-nowrap card-table no-footer mb-0">
                                                    <thead
                                                        style="background-color:#0123ff;  border:none; text-transform: uppercase; font-weight:700;">
                                                    <tr>
                                                        <th style="padding-left: 30px; color: white;">Product Name</th>
                                                        <th style="color: white;">Assign Chef</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $total = 0; ?>
                                                    @foreach ($data as $dat)
                                                        @php
                                                            $id = $dat->combo_pack_id;
                                                        @endphp
                                                        <tr>
                                                                <?php $total += $dat->base_price * $dat->pro_qty; ?>
                                                                <?php $vat = $status->pay_amount - $total; ?>
                                                            @if ($dat->type == 'combo')
                                                                <td style="padding-left: 30px;">
                                                                    <div class="">

                                                                        <span>
                                                                            <b>{{ $dat->package_name }}</b>
                                                                            <br>
                                                                            <b>Quantity:</b> {{ $dat->pro_qty }}
                                                                            @php
                                                                                $combo_products = App\Models\ComboProduct::where('pack_id', $id)->get();
                                                                                foreach ($combo_products as $co) {
                                                                                    $prod = App\Models\Products::where('id', $co->product_id)->get();
                                                                                    foreach ($prod as $key => $value) {
                                                                                        echo '<br>';
                                                                                        echo $value->product_name.', ';
                                                                                    }
                                                                                }
                                                                            @endphp
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                            @else
                                                                <td style="padding-left: 30px;">
                                                                    <span>{{ $dat->product_name }}</span>
                                                                    <br>
                                                                    <b>Quantity:</b> {{ $dat->pro_qty }}
                                                                </td>
                                                            @endif
                                                                <td>
                                                                    <select @if(!empty($dat->chef_id)) style="color: green" @endif  class="form-control assign_chef" name="chef_id" data-item-id="{{$dat->id}}">
                                                                        <option value="" selected style="display: none">Select Chef</option>
                                                                        @foreach($chefs as $cf)
                                                                            <option value="{{$cf->id}}" @if($dat->chef_id == $cf->id) selected @endif>{{$cf->first_name}} {{$cf->last_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table> --}}

                                                <button class="assign_chef btn btn-sm btn-info w-100 mb-3 mt-3"
                                                data-status="READY" data-id={{ $status->user_id }} data-web_order_id={{ $order_id }}> Start Cooking</button>
                                                @elseif($status->status == 'COOKING')
                                                <button class="statusrdispatch btn btn-sm btn-primary w-100 mb-3 mt-3"
                                                    data-status="READY" data-id={{ $status->id }}>Ready to Serve</button>
                                            @elseif ($status->status == 'READY')
                                                <badge class="badge badge-sm badge-info w-100 mb-3">Cooking Complete, Ready For HandOver</badge>
                                            @elseif ($status->status == 'DISPATCHED')
                                                <button class="btn btn-sm btn-info w-100 mb-3">Food on the way</button>
                                            @elseif ($status->status == 'COMPLETED')
                                                <button class="btn btn-sm btn-success w-100 mb-3">Delivered</button>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">
                                        <span class="card-header-icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <span style="font-size: 15px;">
                                            Customer Information
                                        </span>
                                    </h5>
                                    <div class="media align-items-center deco-none customer--information-single"
                                        href="javascript:">
                                        <div class="avatar avatar-circle">
                                            <img class="avatar-img  initial-81"
                                                onerror="this.src='https://stackfood-admin.6amtech.com/public/assets/admin/img/resturant-panel/customer.png'"
                                                src="https://stackfood-admin.6amtech.com/public/assets/admin/img/resturant-panel/customer.png"
                                                alt="Image Description">
                                        </div>
                                        <div class="ml-3">
                                            <span class="fz--14px text-title font-semibold text-hover-primary d-block">
                                                {{ $status->uname }}
                                            </span>
                                            <span class="d-block">
                                                <strong class="text--title font-semibold">
                                                    <?php $ct = App\Models\WebOrder::where('user_id', $status->user_id)->count(); ?>
                                                    {{ $ct }}
                                                </strong>
                                                Orders
                                            </span>
                                            <span class="d-block">
                                                <a class="text--title font-semibold" href="tel:+8801879762951">
                                                    <strong>
                                                        {{ $status->uphone }}
                                                    </strong>
                                                </a>
                                            </span>
                                            <span class="d-block">
                                                <strong class="text--title font-semibold">
                                                </strong>
                                                {{ $status->uemail }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card mt-2 mb-2">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">
                                            <span class="card-header-icon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <span style="font-size: 15px">
                                                Delivery Information
                                            </span>
                                        </h5>
                                    </div>
                                    @if ($status->delivery_type === 'Take Away')
                                        <div class="mt-3">


                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Delivery Type :</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>Take Away</strong>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Branch :</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>{{ $branch->address }}</strong>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Name &nbsp;&nbsp;&nbsp;:</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>{{ $status->uname }}</strong>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Contact :</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>{{ $status->uphone }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="mt-3">

                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Delivery Type :</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>Home Delivery</strong>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Name &nbsp;&nbsp;&nbsp;:</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>{{ $status->uname }}</strong>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Contact :</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>{{ $status->uphone }}</strong>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <span>House &nbsp;&nbsp;:</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>{{ $status->house }}</strong>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Floor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>{{ $status->apartment }}</strong>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Street &nbsp;&nbsp;&nbsp;:</span>
                                                </div>
                                                <div class="col-6">
                                                    <strong>{{ $status->street }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div> --}}
                            @if($status->status != 'PENDING' && $status->status != 'COOKING')
                                {{-- <div class="card">
                                    <div class="card-body">
                                        {{-- <table id="table2"
                                               class="table table-bordered table-thead-bordered table-nowrap card-table no-footer mb-0">
                                            <thead
                                                style="background-color:#0123ff;  border:none; text-transform: uppercase; font-weight:700;">
                                            <tr>
                                                <th style="padding-left: 30px; color: white;">Product Name1</th>
                                                <th style="color: white;">Assign Chef</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $total = 0; ?>
                                            @foreach ($data as $dat)
                                                @php
                                                    $id = $dat->combo_pack_id;
                                                @endphp
                                                <tr>
                                                        <?php $total += $dat->base_price * $dat->pro_qty; ?>
                                                        <?php $vat = $status->pay_amount - $total; ?>
                                                    @if ($dat->type == 'combo')
                                                        <td style="padding-left: 30px;">
                                                            <div class="">

                                                                        <span>
                                                                            <b>{{ $dat->package_name }}</b>
                                                                            <br>
                                                                            <b>Quantity:</b> {{ $dat->pro_qty }}
                                                                            @php
                                                                                $combo_products = App\Models\ComboProduct::where('pack_id', $id)->get();
                                                                                foreach ($combo_products as $co) {
                                                                                    $prod = App\Models\Products::where('id', $co->product_id)->get();
                                                                                    foreach ($prod as $key => $value) {
                                                                                        echo '<br>';
                                                                                        echo $value->product_name.', ';
                                                                                    }
                                                                                }
                                                                            @endphp
                                                                        </span>
                                                            </div>
                                                        </td>
                                                    @else
                                                        <td style="padding-left: 30px;">
                                                            <span>{{ $dat->product_name }}</span>
                                                            <br>
                                                            <b>Quantity:</b> {{ $dat->pro_qty }}
                                                        </td>
                                                    @endif
                                                    <td>
                                                        <select @if(!empty($dat->chef_id)) style="color: green" @endif  class="form-control" readonly="" disabled>
                                                            <option value="" selected style="display: none">Select Chef</option>
                                                            @foreach($chefs as $cf)
                                                                <option value="{{$cf->id}}" @if($dat->chef_id == $cf->id) selected @endif>{{$cf->first_name}} {{$cf->last_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div> --}}
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- Modal with form -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Delivery Boys List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="store_deliveryboy" method="POST">
                        <div class="form-group">
                            <label>Select Delivery Boy</label>
                            <select id="" class="form-control" name="delivery_user_id" required>
                                @foreach ($delivery as $del)
                                    <option value="{{ $del->id }}">{{ $del->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <input type="hidden" id="edit_id" name="order_id">

                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@section('extra_js')
    <script src="https://www.jqueryscript.net/demo/simple-rap-stopwatch/jsRapStopwatch.js?v5"></script>
    <script>
        setTimeout(function() {
            location.reload();
        }, 5000); 

$(document).ready(function() {
    function updateDropdownStyle() {
        var status = $('#payment_update').val();

        // Reset previous classes
        $('#payment_update').removeClass('bg-success bg-danger bg-warning text-white');

        if (status === 'COMPLETED') {
            $('#payment_update').addClass('bg-success text-white').prop('disabled', true);
        } else if (status === 'CANCELLED') {
            $('#payment_update').addClass('bg-danger text-white');
        }
    }

    // Call function when page loads
    updateDropdownStyle();

    // Call function when status changes
    $('#payment_update').change(function() {
        updateDropdownStyle();
    });
});

        $(document).ready(function() {
            $('#payment_update').change(function() {
                var orderId = $('#order_id').val();
            //    alert(orderId);
            let fd = new FormData()
            fd.append('oderId' , orderId);
            fd.append('_token' , "{{csrf_token()}}");

               $.ajax({
                url: "{{ route('kitchen.status.update') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {

                },
                success: function(result) {
                    console.log(result);
                    if (result.status === 'success') {
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
            });
        });
    </script>
    <script>
        // @if($status->status == 'COOKING')
        //     $(function(){
        //         myStopWatch = $('#stopWatch').jsRapStopwatch({
        //                         enabled:false
        //                       })[0];
        //         let d = '{{$cookStart}}';
        //         myStopWatch.opt.timeStart.setTime(Date.parse(d));
        //         });
        // @endif

        @if($status->status == 'COOKING')
$(function() {
        var maxTime = 1800; // 20 minutes in seconds
        let cookStart = '{{ $cookStart }}';
        let startTime = Date.parse(cookStart); // Parse cook start time
        let currentTime = Date.now();
        let elapsedSeconds = Math.floor((currentTime - startTime) / 1000);
        let timeLeft = maxTime - elapsedSeconds;

        function updateTimerDisplay(time) {
            let minutes = Math.floor(time / 60);
            let seconds = time % 60;
            $('#stopWatch').text(`${minutes}:${seconds < 10 ? "0" : ""}${seconds}`);
        }

        if (timeLeft <= 0) {
            $('#stopWatch').css('color', 'red').text('Time’s Up!');
            return;
        }

        updateTimerDisplay(timeLeft);

        let interval = setInterval(function() {
            timeLeft--;

            if (timeLeft <= 0) {
                clearInterval(interval);
                $('#stopWatch').css('color', 'red').text('Time’s Up!');
            } else {
                updateTimerDisplay(timeLeft);
            }
        }, 1000);
    });
@endif







        $("body").on("click", ".assign_chef", function(e) {
            e.preventDefault()
            var user = {{ $status->user_id }};
            var chef_id = 7;
            var order_id = $(this).attr('data-web_order_id')
            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('user', user);
            fd.append('chef_id', chef_id);
            fd.append('order_id', order_id);
            // alert(user);
            $.ajax({
                url: "{{ route('kitchen.assign.chef') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {

                },
                success: function(result) {
                    console.log(result);
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

        $("body").on("click", ".statusaapprove,.statuscancel", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var status = $(this).attr('data-status');

            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('status', status);
            fd.append('id', id);

            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to change status?',
                buttons: {
                    yes: function() {
                        $.ajax({
                                url: "{{ route('kitchen.update.order.status.approve') }}",
                                type: 'POST',
                                data: fd,
                                dataType: "JSON",
                                contentType: false,
                                processData: false,
                            })
                            .done(function(result) {
                                if (result.status) {
                                    iziToast.success({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                    // window.location.reload();
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
                            })
                            .fail(function(jqXHR, exception) {
                                console.log(jqXHR.responseText);
                            })


                    },
                    no: function() {},
                }
            })
        })

        $("body").on("click", ".statuscooking,.statusrdispatch", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var status = $(this).attr('data-status');
            var user = {{ $status->user_id}} ;
            // alert(user);

            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('status', status);
            fd.append('id', id);

            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to change status?',
                buttons: {
                    yes: function() {
                        $.ajax({
                                url: "{{ route('kitchen.update.order.status.dispatch') }}",
                                type: 'POST',
                                data: fd,
                                dataType: "JSON",
                                contentType: false,
                                processData: false,
                            })
                            .done(function(result) {
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
                            })
                            .fail(function(jqXHR, exception) {
                                console.log(jqXHR.responseText);
                            })


                    },
                    no: function() {},
                }
            })
        })


        $("body").on("click", ".editUser", function(e) {
            var id = $(this).data('id');
            $("#edit_id").val(id);
            $('#editModal').modal('toggle')
        });

        $("body").on("submit", ".store_deliveryboy", function(e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('kitchen.order.store_delivery_boy') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {

                },
                success: function(result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $(".store_deliveryboy")[0].reset();
                        $("#editModal").modal("toggle");
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

        $("body").on("click", ".takeaway", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var status = $(this).attr('data-status');

            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('status', status);
            fd.append('id', id);

            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to change status?',
                buttons: {
                    yes: function() {
                        $.ajax({
                                url: "{{ route('kitchen.update.order.status.takeaway') }}",
                                type: 'POST',
                                data: fd,
                                dataType: "JSON",
                                contentType: false,
                                processData: false,
                            })
                            .done(function(result) {
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
                            })
                            .fail(function(jqXHR, exception) {
                                console.log(jqXHR.responseText);
                            })


                    },
                    no: function() {},
                }
            })
        })
    </script>
@endsection
@endsection
