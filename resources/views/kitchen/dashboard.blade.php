@extends('kitchen.layout.layouts')
@section('extra_css')
@endsection

@section('content')
<section class="section">
    <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row justify-evenly items-center gap-4" style="width:100%; height:120px;">
        <div class="w-full h-full">
            <a href="{{ route('kitchen.order_list') }}" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0">
                                    <div class="card-content">
                                        <h5 class="font-15">Total Orders</h5>
                                        <h2 class="mb-3 font-18">{{$status->where('status', '!=','CANCELLED')->count()}}</h2>
                                        {{-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img  mr-5 mt-2">
                                        <img src="{{ asset('assets/kitchen/assets/img/dashboard/order.png')}}" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="w-full h-full">
            <a href="{{ route('kitchen.order_pending_list') }}" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">New Orders</h5>
                                        <h2 class="mb-3 font-18">{{$status->where('status', 'PENDING')->count()}}</h2>
                                        {{-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img  mr-5 mt-2">
                                        <img src="{{ asset('assets/kitchen/assets/img/dashboard/delivery-service.png')}}" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="w-full h-full">
            <a href="{{ route('kitchen.order_cooking_list') }}" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15"> Cooking</h5>
                                        <h2 class="mb-3 font-18">{{$status->where('status', 'COOKING')->count()}}</h2>
                                        {{-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img  mr-5 mt-2">
                                        <img src="{{ asset('assets/kitchen/assets/img/dashboard/cooking.png')}}" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="w-full h-full">
            <a href="{{ route('kitchen.completed_order_list') }}" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Orders Ready</h5>
                                        <h2 class="mb-3 font-18">{{$status->where('status', 'READY')->count()}}</h2>
                                        {{-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img  mr-5 mt-2">
                                        <img src="{{ asset('assets/kitchen/assets/img/dashboard/checked.png')}}" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- <div class="" style="width: 19%;">--}}
        {{-- <a href="{{ route('kitchen.order_cooked_list') }}" class="text-decoration-none">--}}
        {{-- <div class="card">--}}
        {{-- <div class="card-statistic-4">--}}
        {{-- <div class="align-items-center justify-content-between">--}}
        {{-- <div class="row ">--}}
        {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">--}}
        {{-- <div class="card-content">--}}
        {{-- <h5 class="font-15">Food on the Way</h5>--}}
        {{-- <h2 class="mb-3 font-18">{{$status->where('status', 'DISPATCHED')->count()}}</h2>--}}
        {{-- --}}{{-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> --}}
        {{-- </div>--}}
        {{-- </div>--}}
        {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">--}}
        {{-- <div class="banner-img  mr-5 mt-2">--}}
        {{-- <img src="{{ asset('assets/kitchen/assets/img/dashboard/delivery.png')}}" alt="" width="40px">--}}
        {{-- </div>--}}
        {{-- </div>--}}
        {{-- </div>--}}
        {{-- </div>--}}
        {{-- </div>--}}
        {{-- </div>--}}
        {{-- </a>--}}
        {{-- </div>--}}

        <div class="w-full h-full">
            <a href="#" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Cancelled Order</h5>
                                        <h2 class="mb-3 font-18">{{$status->where('status', 'CANCELLED')->count()}}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img mr-5 mt-2">
                                        <img src="{{ asset('assets/kitchen/assets/img/dashboard/cancelled.png')}}" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


</section>

    <section class="section">
        <div class="section body">
            {{-- <div class="row"> --}}
                <div class="card my-3">
                    <div class="card-header">
                        <h5>New Orders List</h5>
                    </div>
                </div>
            <div class="col-12">
                <div class="row">
                    {{-- @php
                    echo "<pre>";
                        print_r($groups);exit;
                    @endphp --}}
                    @if (count($groups) > 0)
                        @foreach ($groups as $order)
                            @php

                            @endphp
                            <div class="col-lg-4 col-sm-12 col-md-6" style="    padding: 7px !important;
}">
                                <div class="card">
                                    @if ($order->status == 'PENDING')
                                    <button class="btn btn-primary btn-sm" style="float: right; width:100px; font-weight:700;">New Order</button>

                                    @elseif($order->status == 'COOKING')
                                    <button class="btn btn-success btn-sm" style="float: right; width:100px; font-weight:700;">Cooking</button>
                                    @endif
                                    {{-- <img src="..." class="card-img-top" alt="..."> --}}

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Date :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong>{{ date('d-m-y, h:i a', strtotime($order->created_at)) }}</strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Order Number :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong>{{ $order->id }}</strong>
                                            </div>
                                        </div>

                                        {{-- <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Customer Name :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong>{{ $order->uname }}</strong>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Branch :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong>{{ $branch->name }}</strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Table Number :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong>{{ $order->table_no }}</strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Delivery Type :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong>{{ $order->delivery_type }}</strong>
                                            </div>
                                        </div>

                                        @if ($order->delivery_type == 'Home Delivery')
                                                @if (!empty($order->chef_id))
                                                    @if ($order->delivery_user_id == '')
                                                        <div class="mb-2"><button class="btn btn-warning btn-sm w-100 dboymodal"
                                                                data-id="{{ $order->id }}" style="width: 120px">Assign Delivery
                                                                Boy+
                                                            </button></div>
                                                    @elseif ($order->delivery_user_id != '')
                                                        <div class="row">
                                                            <div class="col-5 mb-2">
                                                                <span>Delivery Boy:</span>
                                                            </div>
                                                            <div class="col-7">
                                                                <strong>{{ $order->name }}</strong>
                                                            </div>
                                                        </div>
                                                    @endif
                                               @endif
                                        @endif
                                        <div class=""><a href="{{ url('kitchen/order-details', $order->id) }}"
                                                class="btn btn-warning btn-sm w-100">View Order Details
                                            </a></div>
                                        @if ($order->status == 'COOKING' && $order->delivery_user_id != '')
                                            <button class="statusrdispatch btn btn-sm btn-primary w-100 mt-2"
                                                data-status="DISPATCHED" data-id={{ $order->id }}>Make Ready For
                                                Handover</button>
                                        @elseif (($order->status == 'COOKING') && ($order->delivery_type == 'Take Away'))
                                                <button class="statusrdispatch btn btn-sm btn-primary w-100 mt-2"
                                                data-status="DISPATCHED" data-id={{ $order->id }}>Make Ready For
                                                Handover</button>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        @endforeach


                    @else
                    {{-- <div class="row"> --}}
                        <div class="col-12">
                            <div class="justify-content-center" style="text-align: center; font-size:24px;">No Record Found</div>
                        </div>
                    {{-- </div> --}}
                    @endif
                </div>
                {{-- <div class="d-flex justify-content-center">
                    <div class="your-paginate mt-4">
                        {{$groups->links("pagination::bootstrap-4")}}
                    </div>
                </div> --}}
            </div>
            {{-- </div> --}}

        </div>


    </section>
@section('extra_js')
<script>
    setTimeout(function() {
        location.reload();
    }, 5000); 

</script>

@endsection
@endsection
