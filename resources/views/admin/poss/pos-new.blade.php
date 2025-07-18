@extends('admin.layout.poslayout')

@section('extra_css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <style>
        / Existing styles /
        .table-select {
            max-height: 80px; / Set desired height /
    overflow-y: auto;
    max-width: 70px; / Adjust to your desired width /
    overflow: hidden; / Hide overflow content /
    text-overflow: ellipsis; / Add "..." for long content /
    white-space: nowrap; / Prevent line break /
}

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
            padding: 10px;
        }

        .grid-item {
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .grid-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card {
            border-radius: 6px;
            overflow: hidden;
        }

        .disc-body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .disc-container {
            display: flex;
            align-items: center;
        }

        .disc {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .disc.paid {
            background-color: #ff6347;
        }

        .disc.printed {
            background-color: #4682b4;
        }

        .disc.reserved {
            background-color: greenyellow;
        }

        .disc.running {
            background-color: gray;
        }

        .disc.blank {
            background-color: #cdcec8;
        }

        .text {
            font-size: 14px;
            margin-right: 15px;
        }

        .card-body {
            padding: 10px;
            min-height: 80px;
        }

        / New styles for right-side cards /
        .reservation-card {
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            margin-bottom: 10px;
            background-color: #e9f5f9;
        }

        .reservation-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .reservation-card .card-body {
            padding: 10px;
        }

        .reservation-card h6 {
            font-size: 14px;
            margin-bottom: 3px;
        }

        .reservation-card p {
            font-size: 12px;
            margin-bottom: 3px;
        }

        .reservation-card .text-sm {
            font-size: 12px;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Left Side: Table Grid -->
                <div class="w-full md:w-2/3">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{ $branchName->type . ' ' . $branchName->name }}</h4>

                            <!-- Date and Time Filters -->
                            <form action="{{ route('admin.index.pos') }}" method="GET" class="mb-6">
                                <div class="flex gap-2 flex-wrap col-md-6">
                                <input type="date" name="date" value="{{ request('date') ?? now()->format('Y-m-d') }}" class="form-control w-36">
                                    <button type="submit" class="btn btn-primary text-sm py-1 px-3">Filter</button>
                    
                                </div>
                            </form>

                            <!-- Legend for Table Status -->
                            <div class="disc-body">
                                <div class="disc-container">
                                    <div class="disc reserved"></div>
                                    <span class="text">Reserved</span>
                                    <div class="disc running"></div>
                                    <span class="text">Running</span>
                                    <div class="disc blank"></div>
                                    <span class="text">Available</span>
                                </div>
                            </div>

                            <!-- Table Grid -->
                            <div class="grid-container" id="tableGrid">
                            
                                @foreach ($tables as $data)
                                    @php
                                        $reservation = $reservations->where('table_no', (string) $data->table_no)->first();
                                        $hasProducts = $data->has_products;
                                        $cookingStarted = $data->cooking_started;
                                    @endphp
                                    <div class="grid-item">
                                        <a href="{{ route('admin.pos', ['branchId' => $branchName->id, 'tableId' => $data->table_no]) }}"
                                            class="j-nav class-add" data-target="#menus" data-name="menus">
                                            <div class="card text-center mb-3 food-card repair-active-new">
                                            @if ($reservation) <!-- Table is reserved for the selected date -->
                                                    <div class="card-body" style="color:white;background-color: greenyellow;">
                                                        <p class="mb-0 text-sm">Table {{ $data->table_no }}<br>(Reserved)</p>
                                                    </div>
                                                @elseif ($cookingStarted && $hasProducts)
                                                    <div class="card-body" style="color:white;background-color: #555;">
                                                        <p class="mb-0 text-sm">Table {{ $data->table_no }}<br>(Running)</p>
                                                    </div>
                                                @elseif ($cookingStarted)
                                                    <div class="card-body" style="color:white;background-color: gray;">
                                                        <p class="mb-0 text-sm">Table {{ $data->table_no }}<br>(Running)</p>
                                                    </div>
                                                @elseif ($hasProducts)
                                                    <div class="card-body" style="color:white;background-color: #999;">
                                                        <p class="mb-0 text-sm">Table {{ $data->table_no }}<br>(Running)</p>
                                                    </div>
                                                @else
                                                    <div class="card-body" style="color:white;background-color: #cdcec8;">
                                                        <p class="mb-0 text-sm">Table {{ $data->table_no }}<br>(Available)</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                @endforeach


                            </div>


                            
                        </div>



                    </div>
                </div>

               

<!-- Right Side: Order Listing -->
<div class="w-full md:w-1/3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-3">Reservations</h4>
            <input type="text" placeholder="Search reservations..." class="form-control mb-3" id="reservationSearch">

            <div class="reservation-list-container">
                @if ($resList->isEmpty())
                    <p class="text-sm text-muted">No reservations found for the selected date and time.</p>
                @else
                @foreach ($resList as $list)
    <div class="reservation-card mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="fw-bold mb-0">Reservation - Table
                    <select class="form-select form-select-sm table-select w-auto rounded-pill shadow-sm px-3 py-1 status-dropdown"
                            id="table_select_{{ $list->id }}" 
                            data-id="{{ $list->id }}" 
                            style="max-height: 150px; overflow-y: auto;">
                        <option value="">Select</option>
                        @foreach ($tables as $table)
                            <option value="{{ $table->table_no }}" 
                                {{ $list->table_no == $table->table_no ? 'selected' : '' }}>
                                {{ $table->table_no }}
                            </option>
                        @endforeach
                    </select>
                </h6>
                <div class="text-end">
                    <span class="text-sm d-block">
                        {{ \Carbon\Carbon::parse($list->start_from)->format('h:i A') }} -
                        {{ \Carbon\Carbon::parse($list->till)->format('h:i A') }}
                    </span>
                    <small class="text-muted">Booked for: {{ $list->day }}</small>
                </div>
            </div>

            <p class="mb-1">Name: {{ $list->fname }} {{ $list->lname }}</p>
            <p class="mb-1">People: {{ $list->people }}</p>

            <!-- Status Section -->
            <div class="d-flex align-items-center">
                <p class="text-sm text-muted me-2 mb-0">Status:</p>
                <div class="btn-group status" role="group">
                    <button type="button" 
                        class="btn btn-sm {{ $list->status == 1 ? 'btn-primary' : 'btn-outline-primary' }} status-button"
                        data-status="1" data-id="{{ $list->id }}">
                        Pending
                    </button>
                    <button type="button" 
                        class="btn btn-sm {{ $list->status == 2 ? 'btn-success' : 'btn-outline-success' }} status-button"
                        data-status="2" data-id="{{ $list->id }}">
                        Accept
                    </button>
                    <button type="button" 
                        class="btn btn-sm {{ $list->status == 3 ? 'btn-danger' : 'btn-outline-danger' }} status-button"
                        data-status="3" data-id="{{ $list->id }}">
                        Cancel
                    </button>
                </div>
            </div>
            <!-- End Status Section -->
        </div>
    </div>
@endforeach
                @endif
            </div>
        </div>
    </div>
</div>


            </div>
        </div>
    </section>
@endsection

@section('extra_js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // auto refresh 
         setTimeout(function() {
            location.reload();
        }, 10000); 
        
        $(document).ready(function() {
            // Handle table selection change
            $('body').on('change', '.table-select', function(e) {
                const select = $(this);
                const reservationId = select.data('id');
                const newTableNo = select.val();

                if (!newTableNo) return; // Skip if no table selected

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to update the table for this reservation?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#9a9fa5',
                    cancelButtonColor: '#c58686',
                    confirmButtonText: 'Yes, update it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        updateReservation(reservationId, newTableNo, null);
                    } else {
                        select.val(''); // Reset dropdown if canceled
                    }
                });
            });

            // Handle status button clicks
            $('body').on('click', '.status-button', function(e) {
                const button = $(this);
                const reservationId = button.data('id');
                const newStatus = button.data('status');
                const tableNo = $(`#table_select_${reservationId}`).val();

                if (!tableNo && newStatus == 2) { // Check if table is selected when accepting
                    Swal.fire({
                        title: 'Error!',
                        text: 'Please select a table number before accepting the reservation.',
                        icon: 'error'
                    });
                    return;
                }

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to update this reservation?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#9a9fa5',
                    cancelButtonColor: '#c58686',
                    confirmButtonText: 'Yes, update it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        updateReservation(reservationId, tableNo, newStatus);
                    }
                });
            });

            function updateReservation(reservationId, tableNo, status) {
                const formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('id', reservationId);
                formData.append('table_no', tableNo);
                if (status) formData.append('status', status);

                $.ajax({
                    url: '{{ route('admin.resPosStatus') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success'
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error'
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while updating the reservation.',
                            icon: 'error'
                        });
                    }
                });
            }

            // Table Search Functionality
            document.getElementById('tableSearch')?.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const gridItems = document.querySelectorAll('.grid-item');
                gridItems.forEach(item => {
                    const tableText = item.querySelector('.card-body p').textContent.toLowerCase();
                    item.style.display = tableText.includes(searchTerm) ? '' : 'none';
                });
            });

            // Reservation Search Functionality
            document.getElementById('reservationSearch')?.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const reservations = document.querySelectorAll('.reservation-list-container .reservation-card');
                reservations.forEach(reservation => {
                    const reservationText = reservation.textContent.toLowerCase();
                    reservation.style.display = reservationText.includes(searchTerm) ? '' : 'none';
                });
            });
        });
    </script>
@endsection