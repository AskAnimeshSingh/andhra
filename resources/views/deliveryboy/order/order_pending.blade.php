@extends('deliveryboy.layout.layouts')
@section('extra_css')
<style>
    .timer-container {
        display: flex;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }

    .timer-values {
        display: flex;
        justify-content: center;
        margin-top: 10px;
        font-size: 28px;
        gap: 35px;
    }

    .timer-value {
        margin: 0 10px;
    }

    .timer-labels {
        display: flex;
        justify-content: center;
        margin-top: 5px;
        font-size: 15px;
    }

    .timer-label {
        margin: 0 10px;
    }
</style>
@endsection

@section('content')
    <section class="section">
        <div class="section body">
            <div class="card">
                <div class="card-header">
                    <h5>New Deliveries</h5>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-12"> --}}

                    @foreach ($groups as $order)
                        @php

                        @endphp
                        <div class="col-lg-4 col-sm-12 col-md-6">
                            <div class="card">


                                {{-- <img src="..." class="card-img-top" alt="..."> --}}

                                <div class="card-body">

                                    <div class="row mb-2">
                                        @php
                                            $startTime = strtotime($order->endcooking);
                                        @endphp

                                        <div class="col-12 order-item">

                                            <div class="timer-container">
                                                <span class="timer" data-start-time="{{ $startTime }}"></span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4 mb-2">
                                            <span>User Number :</span>
                                        </div>
                                        <div class="col-8">

                                            <strong>{{ $order->uname }}</strong>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-4 mb-2">
                                            <span>Address :</span>
                                        </div>
                                        <div class="col-8">

                                            <strong>{{ $order->house.', '.$order->street.', '.$order->apartment.', '.$order->city.', '.$order->state }}</strong>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4 mb-2">
                                            <span>User Number :</span>
                                        </div>
                                        <div class="col-8">

                                            <strong>{{ $order->user_phone }}</strong>
                                        </div>
                                    </div>
                                    <div class=""><a href="{{ url('deliveryboy/view-product-details', $order->id) }}"
                                        class="btn btn-warning btn-sm w-100" style="width: 120px">View Order Details
                                    </a></div>
                                    <div class="mt-2">
                                        @if( $order->status == "COOKING" || $order->status == "DISPATCHED")

                                           <button class="statusdeliver btn btn-sm btn-warning w-100" data-status="COMPLETED" data-id="{{$order->id}}">Deliver</button>

                                        @elseif($order->status == "COOKING")

                                           <button class="btn btn-sm btn-info">Pickup the food</button>

                                        @endif
                                    </div>
                                    <div class="mt-2">
                                        @if( $order->payment_status == "PENDING")

                                            <button class="statuspaid btn btn-sm btn-warning w-100" data-payment_status="PAID"  data-id="{{$order->id}}">Change Payment Status</button>

                                        @else

                                            <button class="btn btn-sm btn-success w-100" style="filter: brightness(80%);">Paid<i class="fa fa-check"></i> </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                {{-- </div> --}}
            </div>
        </div>


    </section>




@section('extra_js')
    <script>

function updateTimers() {
            const timerElements = document.getElementsByClassName('timer');
            for (let i = 0; i < timerElements.length; i++) {
                const timerElement = timerElements[i];
                const startTime = parseInt(timerElement.getAttribute('data-start-time'), 10);
                const currentTime = Math.floor(Date.now() / 1000);
                const elapsedSeconds = currentTime - startTime;
                const hours = Math.floor(elapsedSeconds / 3600);
                const minutes = Math.floor((elapsedSeconds % 3600) / 60);
                const seconds = elapsedSeconds % 60;
                timerElement.innerHTML = `
                        <div class="timer-values">
                            <div class="timer-value">${hours}</div>
                            <div class="timer-value">${minutes}</div>
                            <div class="timer-value">${seconds}</div>
                        </div>
                        <div class="timer-labels">
                            <div class="timer-label">HOURS</div>
                            <div class="timer-label">MINUTES</div>
                            <div class="timer-label">SECONDS</div>
                        </div>
                    `;
            }
        }


        updateTimers();


        setInterval(updateTimers, 1000);

        var tables = $('#detail').DataTable({
            "processing": true,
            pageLength: 10,
            "serverSide": true,
            "ajax": {
                url: "{{ route('deliveryboy.order_list.pending.ajax') }}",
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
                    "name": "created_at",
                    'searchable': false,
                    'orderable': false
                },
                {
                    "targets": 1,
                    "name": "name",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 2,
                    "name": "name",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 3,
                    "name": "name",
                    'searchable': true,
                    'orderable': true
                },

                {
                    "targets": 4,
                    "name": "name",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 5,
                    "name": "name",
                    'searchable': true,
                    'orderable': true
                },

            ],
        });

        $("body").on("click", ".statusdeliver", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var status = $(this).attr('data-status');
            // alert(status);
            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('status', status);
            fd.append('id', id);
            // alert(status);
            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to change status?',
                buttons: {
                    yes: function() {
                        $.ajax({
                                url: "{{ route('deliveryboy.update.order.status.approve') }}",
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

        $("body").on("click", ".statuspaid", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var payment_status = $(this).attr('data-payment_status');
            // alert(status);
            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('payment_status', payment_status);
            fd.append('id', id);
            // alert(status);
            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to change payment status?',
                buttons: {
                    yes: function() {
                        $.ajax({
                                url: "{{ route('deliveryboy.update.order.status.payment') }}",
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
