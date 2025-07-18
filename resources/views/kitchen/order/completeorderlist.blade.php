@extends('kitchen.layout.layouts')
@section('extra_css')
    <style>
    </style>
@endsection

@section('content')
    <section class="section">
        <div class="section body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header float-right">
                            <h4>Ready Orders</h4> <!-- Updated title to reflect only READY orders -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            {{-- <th>Date</th>
                                            <th></th>
                                            <th>Cooking Time</th>
                                            <th>Delivery Time</th>
                                            <th>Status</th> --}}
                                            <th>Date</th>
                                            <th>Branch</th>
                                            <th>Table No</th>
                                            <th>Order No</th>
                                            <th>Status</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                            <?php
                                                $startCooking = \Carbon\Carbon::parse($order->cookingstart);
                                                $endCooking = \Carbon\Carbon::parse($order->endcooking);
                                                $timeDifference = $startCooking->diff($endCooking)->format('%HH:%IM:%SS');
                                                
                                                $endCooking = \Carbon\Carbon::parse($order->endcooking);
                                                $deliveryTime = \Carbon\Carbon::parse($order->delivery_time);
                                                $deliveryDifference = $endCooking->diff($deliveryTime)->format('%HH:%IM:%SS');
                                            ?>
                                            <tr>
                                                <td>{{ date('d-m-Y', strtotime($order->created_at)) }}</td>
                                                <td>{{ $branch->name }}</td>
                                                <td>{{ $order->table_no }}</td> <!-- Simplified as all orders are READY -->
                                                <td>{{ $order->id }}</td>
                                                <!-- Delivery time will be -- as it's not yet delivered -->
                                                <td><badge class="badge badge-sm badge-warning w-100">Cooking Complete</badge></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $orders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal remains the same -->
    <div class="modal fade" id="chefclick" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Chef</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('kitchen.assign.chef') }}" method="POST" class="submitchef">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="weborder_id" id="weborder_id">
                        <div class="form-group">
                            <label for="chef_id">Select Chef</label>
                            <select class="form-control show-tick ms select2" name="chef_id">
                                @foreach ($chefs as $chef)
                                    <option value="{{ $chef->id }}">{{ $chef->first_name . ' ' . $chef->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('extra_js')
    <script>
        $("body").on("click", ".chefmodal", function(e) {
            var id = $(this).data('id'); // Fixed syntax error here
            $('#weborder_id').val(id)
;
            $('#chefclick').modal('toggle');
        });
    </script>
@endsection