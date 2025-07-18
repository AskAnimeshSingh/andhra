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
                        <form action="{{route('admin.about_us.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="infoInput">Our story:</label>
                                    <textarea class="form-control summernote" id="story_eng" name="story_eng"  rows="15" style="resize: vertical;" placeholder="Enter details">@if(isset($data->our_story)) {{$data->our_story}} @endif</textarea>
                                    @error('story_eng')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Our story Jpn:</label>
                                    <textarea class="form-control summernote" id="story_jpn" name="story_jpn" rows="10" placeholder="Enter details">@if(isset($data->our_story_jp)) {{$data->our_story_jp}} @endif</textarea>
                                    @error('story_jpn')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoInput">About Andra</label>
                                    <textarea class="form-control summernote" id="andra" name="andra" rows="10" placeholder="Enter details">@if(isset($data->andra)) {{$data->andra}} @endif</textarea>
                                    @error('andra')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">About Andra Jpn:</label>
                                    <textarea class="form-control summernote" id="andra_jp" name="andra_jp" rows="10" placeholder="Enter details">@if(isset($data->andra_jp)) {{$data->andra_jp}} @endif</textarea>
                                    @error('andra_jp')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Banner for story:</label>
                                    <input type="file" class="form-control" name="banner_story" id="infoTextArea" >
                                    @if(isset($data->story_banner))
                                    <img src="{{ url($data->story_banner) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Banner for Andra:</label>
                                    <input type="file" class="form-control" name="banner_abdra"  id="banner_abdra" >
                                    @if(isset($data->story_banner))
                                    <img src="{{ url($data->andra_banner) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-12">
                                <h3>Images for Story</h3>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Story Image 1:</label>
                                    <input type="file" class="form-control" name="story_img1" id="infoTextArea" >
                                    @if(isset($data->story_image1))
                                    <img src="{{ url($data->story_image1) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Story Image 2:</label>
                                    <input type="file" class="form-control" name="story_img2" id="infoTextArea" >
                                    @if(isset($data->story_image2))
                                    <img src="{{ url($data->story_image2) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Story Image 3:</label>
                                    <input type="file" class="form-control" name="story_img3" id="infoTextArea" >
                                    @if(isset($data->story_image3))
                                    <img src="{{ url($data->story_image3) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Story Image 4:</label>
                                    <input type="file" class="form-control" name="story_img4" id="infoTextArea" >
                                    @if(isset($data->story_image4))
                                    <img src="{{ url($data->story_image4) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <h3>Images for Andra</h3>
                                    </div>

                                <div class="col-md-6">
                                    <label for="infoTextArea">Andra Image 1:</label>
                                    <input type="file" class="form-control" name="andra_img1" >
                                    @if(isset($data->andra_image1))
                                    <img src="{{ url($data->andra_image1) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Andra Image 2:</label>
                                    <input type="file" class="form-control" name="andra_img2" >
                                    @if(isset($data->andra_image2))
                                    <img src="{{ url($data->andra_image2) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Andra Image 3:</label>
                                    <input type="file" class="form-control" name="andra_img3" >
                                    @if(isset($data->andra_image3))
                                    <img src="{{ url($data->andra_image3) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Andra Image 4:</label>
                                    <input type="file" class="form-control" name="andra_img4" >
                                    @if(isset($data->andra_image4))
                                    <img src="{{ url($data->andra_image4) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <h3>Chef Information</h3>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Head Chef Name:</label>
                                    <input type="text" name="head_chef_name" id="head_chef_name" class="form-control" placeholder="Enter Head Chef Name" value="{{ isset($data->head_chef_name) ? $data->head_chef_name : '' }}">

                                    @error('head_chef_name')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Head Chef Name japanese:</label>
                                    <input type="text" name="head_chef_name_jpn" id="head_chef_name_jpn" class="form-control" placeholder="Enter Head Chef Name" value="{{ isset($data->head_chef_name_jpn) ? $data->head_chef_name_jpn : '' }}">
                                    @error('head_chef_name_jpn')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Head Chef Description:</label>
                                    <textarea class="form-control summernote" id="head_chef_description" name="head_chef_description" rows="10" placeholder="Enter details">@if(isset($data->head_chef_description)) {{$data->head_chef_description}} @endif</textarea>
                                    @error('head_chef_description')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Head Chef Description Japanese:</label>
                                    <textarea class="form-control summernote" id="head_chef_descr_jpn" name="head_chef_descr_jpn" rows="10" placeholder="Enter details">@if(isset($data->head_chef_description_jpn)) {{$data->head_chef_description_jpn}} @endif</textarea>
                                    @error('head_chef_descr_jpn')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Banner for Head Chef:</label>
                                    <input type="file" class="form-control" name="banner_head_chef" id="banner_head_chef" >
                                    @if(isset($data->head_chef_banner))
                                    <img src="{{ url($data->head_chef_banner ) }}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-md-12"></div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Our Chef Description:</label>
                                    <textarea class="form-control summernote" id="chef_description" name="chef_description" rows="10" placeholder="Enter details">@if(isset($data->chef_description)) {{$data->chef_description}} @endif</textarea>
                                    @error('chef_description')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Our Chef Description Japanese:</label>
                                    <textarea class="form-control summernote" id="chef_descr_jpn" name="chef_description_jpn" rows="10" placeholder="Enter details">@if(isset($data->chef_description_jpn)) {{$data->chef_description_jpn}} @endif</textarea>
                                    @error('chef_description_jpn')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Banner for Chef:</label>
                                    <input type="file" class="form-control" name="banner_chef" id="infoTextArea" >
                                    @if(isset($data->chef_banner))
                                    <img src="{{ url($data->chef_banner ) }}" height="100" width="100">
                                    @endif
                                </div>
                            </div>
                            <div style="display:flex;justify-content:end;padding:42px;">
                                <Button type="submit" class="btn btn-primary" >Store</Button>
                            </div>
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
