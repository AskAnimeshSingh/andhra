
@extends('admin.layout.layouts')
@section('extra_css')
    <style>
    </style>

@endsection

@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h4>Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="infoInput">Table Number:</label>    
                                      <input type="text" name="table_no" class="form-control" id="table_no">
                                    @error('table_no')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div style="display:flex;justify-content:end;padding:42px;">
                                        <Button type="button" class="btn btn-primary" id="qr_create">Create Qr</Button>
                                    </div>
                                </div>   
                                <div class="col-md-6" id="qrIamge">
                                
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">URl:</label>
                                    <input type="text" name="url" class="form-control" placeholder="Url will create here" id="url" readonly>
                                    <input type="hidden" name="qr_path" class="form-control"  id="qr_path" >
                                    <input type="hidden" name="branch_id" class="form-control"  id="branch_id" value="{{ $id }}">
                                    @error('url')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                               
                                
                                
                            </div>
                            {{-- <div style="display:flex;justify-content:end;padding:42px;">
                                <Button type="submit" class="btn btn-primary" >Store</Button>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

    <!-- Modal with form -->
    
        <!-- Modal Edit form -->
        
    </section>
@section('extra_js')

<script>
    
        // $("#qr_create").click(function() {
        //     // alert("hello");
        //     var table_no = $("#table_no").val();
        //     var branch_id = $("#branch_id").val();
        //     // alert(branchId);
        //     if (table_no === "") {
        //         alert("Please enter a table number.");
        //         return;
        //     }
        //     else {

        //         $.ajax({
        //             url: "{{ route('admin.qr.create.info') }}",
        //             type: "POST",
                    
        //             data: {
        //                 "table_no" : table_no,
        //                 "branch_id" : branch_id,
        //                 "_token": "{{ csrf_token() }}",
        //             },
        //             dataType: 'json',
        //             success: function (result) {
        //     if (result.status === 'success') {
        //         $('#qrIamge').html(result.image);
        // // Set URL
        // $('#url').val(result.url);
        //         iziToast.success({
        //             title: 'Success',
        //             message: 'QR code created successfully.',
        //             position: 'topRight'
        //         });
        //         console.log(result);





        //         // Additional action if needed for success
        //     } else {
        //         iziToast.error({
        //             title: 'Error',
        //             message: 'Error creating QR code. Table limit exceeded.',
        //             position: 'topRight'
        //         });
        //         console.log(result);
        //     }
        // },
        // complete: function () {
        //     $('.loader').hide();
        // },
        // error: function (jqXHR, exception) {
        //     $('.loader').hide();
        //     console.log(jqXHR.responseText);
        // }
        //         });
        //     }
            
        // });
        $("#qr_create").click(function() {
    var table_no = $("#table_no").val();
    var branch_id = $("#branch_id").val();

    if (table_no === "") {
        iziToast.warning({
            title: 'Required',
            message: 'Please enter a table number.',
            position: 'topRight'
        });
        return;
    }

    $.ajax({
        url: "{{ route('admin.qr.create.info') }}",
        type: "POST",
        data: {
            "table_no": table_no,
            "branch_id": branch_id,
            "_token": "{{ csrf_token() }}",
        },
        dataType: 'json',
        beforeSend: function () {
            $('.loader').show();
        },
        success: function(result) {
            if (result.status === 'success') {
                $('#qrIamge').html(result.image);
                $('#url').val(result.url);

                iziToast.success({
                    title: 'Success',
                    message: 'QR code created successfully.',
                    position: 'topRight'
                });
            } else if (result.status === 'duplicate') {
                iziToast.error({
                    title: 'Duplicate Table',
                    message: result.message,
                    position: 'topRight'
                });
            } else if (result.status === 'limit_exceeded') {
                iziToast.error({
                    title: 'Limit Exceeded',
                    message: result.message,
                    position: 'topRight'
                });
            } else {
                iziToast.error({
                    title: 'Error',
                    message: 'Something went wrong. Please try again.',
                    position: 'topRight'
                });
            }
        },
        complete: function () {
            $('.loader').hide();
        },
        error: function(jqXHR, exception) {
            $('.loader').hide();
            console.log(jqXHR.responseText);
        }
    });
});

    
</script>




    <script>
        // Image preview
        function readURL(input, place) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    if (place === 'add') {
                        $('#previewImage').attr('src', e.target.result);
                    } else {
                        $('#editpreviewImage').attr('src', e.target.result);
                    }
                };
                reader.readAsDataURL(input.files[0]);
            }
        }


        // Category Store
        $("body").on("submit", ".store_cate", function (e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('admin.category.store') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#login-button').prop('disabled', true);
                    $('.loader').show();
                },
                success: function (result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $(".store_cate")[0].reset();
                        $("#exampleModal").modal("toggle");
                        $('#category').DataTable().ajax.reload(null, false);

                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                    }
                },
                complete: function () {
                    $('.loader').hide();
                },
                error: function (jqXHR, exception) {
                    $('.loader').hide();
                    console.log(jqXHR.responseText);
                }
            });
        })

        // Datatable
        // $.fn.tableload = function (e) {
        var tables = $('#category').DataTable({
            "processing": true,
            pageLength: 10,
            "serverSide": true,
            "ajax": {
                url: "{{route('admin.category_ajax_list')}}",
                dataFilter: function (data) {
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
                    "name": "cate_name",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 2,
                    "name": "cate_img",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 3,
                    "name": "status",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 4,
                    "name": "action",
                    'searchable': true,
                    'orderable': true
                },
            ],
        });


        // Update Category
        $("body").on("click", ".editCategory", function (e) {
            var name = $(this).data('name');
            var img = $(this).data('img');
            var id = $(this).data('id');
            $('#editIcon').val("")
            $("#edit_cate").val(name)
            $('#cateid').val(id);
            $('#oldicon').val(img);
            $('#image-icon').html('<img class="img-thumbnail image-width mt-4 mb-3" id="editpreviewImage" src="{{url('')}}' + img + '" alt="" />')
            $('#editModal').modal('toggle')
        });


        // Category Edit
        $("body").on("submit", ".edit_cate", function (e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('admin.category.update') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#login-button').prop('disabled', true);
                    $('.loader').show();
                },
                success: function (result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $(".edit_cate")[0].reset();
                        $("#editModal").modal("toggle");
                        $('#category').DataTable().ajax.reload(null, false);

                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                    }
                },
                complete: function () {
                    $('.loader').hide();
                },
                error: function (jqXHR, exception) {
                    $('.loader').hide();
                    console.log(jqXHR.responseText);
                }
            });
        })

        // Update status for category
        $("body").on("click", ".statusVerifiedClick", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var status = $(this).data('status');
            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('status', status);
            fd.append('id', id);
            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to change category status?',
                buttons: {
                    yes: function () {
                        $.ajax({
                            url: "{{ route('admin.category.status') }}",
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
                                    $('#category').DataTable().ajax.reload(null, false);

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


        // Category delete
        $("body").on("click", ".category-delete", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('id', id);
            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to delete this category ?',
                buttons: {
                    yes: function () {
                        $.ajax({
                            url: "{{ route('admin.category.destroy') }}",
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
                                    $('#category').DataTable().ajax.reload(null, false);

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
@endsection
@endsection
