@extends('admin.layout.layouts')
@section('extra_css')
    <style>
    </style>

@endsection

@section('content')
@if(session('message'))
    <div class="alert alert-success" id="alertMessage">
        {{ session('message') }}
    </div>
@endif
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h4>Edit Branch</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.branch.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="infoInput">Name:</label>
                                    {{-- < class="form-control" id="story_eng" name="name"  rows="15" style="resize: vertical;" placeholder="Enter details"><//textarea> --}}
                                    <input type="text"  class="form-control" id="story_eng" name="name" value="@if(isset($data->name)) {{$data->name}} @endif" placeholder="Enter Brach Name">
                                    @error('name')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="infoInput">Type:</label>
                                    {{-- < class="form-control" id="story_eng" name="name"  rows="15" style="resize: vertical;" placeholder="Enter details"><//textarea> --}}
                                    <input type="text"  class="form-control" id="type" name="type" value="@if(isset($data->type)) {{$data->type}} @endif" placeholder="Enter Brach Type">
                                    @error('type')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="infoTextArea">Phone:</label>
                                    {{-- <textarea class="form-control" id="story_jpn" name="phone" rows="10" placeholder="Enter details">@if(isset($data->our_story_jp)) {{$data->our_story_jp}} @endif</textarea> --}}
                                    <input type="text"  class="form-control" id="story_eng" name="phone" value="@if(isset($data->phone)) {{$data->phone}} @endif" placeholder="Enter Brach Name">
                                    
                                    @error('phone')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoInput">Address</label>
                                    {{-- <textarea class="form-control" id="andra" name="address" rows="10" placeholder="Enter details">@if(isset($data->andra)) {{$data->andra}} @endif</textarea> --}}
                                    <input type="text"  class="form-control" id="story_eng" name="address" value="@if(isset($data->address)) {{$data->address}} @endif" placeholder="Enter Brach Name">
                                    
                                    @error('address')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Distence From:</label>
                                    <textarea class="form-control" id="andra_jpn" name="distence_from" rows="10" placeholder="Enter details">@if(isset($data->distence_from)) {{$data->distence_from}} @endif</textarea>
                                    @error('distence_from')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Dilevery Link:</label>
                                    <input type="text" class="form-control" name="dilivery_link" id="infoTextArea" placeholder="Ente Dilevery Link" value="{{ (isset($data->dilivery_app_link)) ? $data->dilivery_app_link : '' }}">
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Reservation Link:</label>
                                    <input type="text" class="form-control" name="reservation_link" id="infoTextArea" placeholder="Ente Reservation Link" value="{{ (isset($data->reservation_link)) ? $data->reservation_link : '' }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Seating Availability:</label>
                                    <input type="text" class="form-control" name="seating_availability" id="infoTextArea" placeholder="Ente Seating Availability" value="{{ (isset($data->seating_ability)) ? $data->seating_ability : '' }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Number of tables:</label>
                                    <input type="text" class="form-control" name="table_no" id="infoTextArea" placeholder="Enter Number of Tables" value="{{ (isset($data->table_no)) ? $data->table_no : '' }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Gooogle map Link:</label>
                                    <input type="text" class="form-control" name="google_map_link" id="infoTextArea" placeholder="Ente Google Map Link" value="{{ (isset($data->google_map_link	)) ? $data->google_map_link	 : '' }}">

                                </div>
                                <div class="col-md-12">
                                <h3>Timing For Weekdays</h3>
                                </div>
                                <div class="col-md-12">
                                    <h4>Morning to Afternoon</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Opening Time:</label>
                                    
                                    <input type="time" class="form-control" name="weekday_opening" id="infoTextArea" value="{{ isset($data->weekday_opening) ? date("H:i", strtotime($data->weekday_opening)) : '' }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Closing Time:</label>
                                    <input type="time" class="form-control" name="weekday_afternoonc" id="infoTextArea" value="{{ (isset($data->weekday_noon_close)) ? date("H:i", strtotime($data->weekday_noon_close)) : '' }}">

                                </div>
                                
                                <div class="col-md-12">
                                    <h4>Afternoon to Night</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Opening Time:</label>
                                    <input type="time" class="form-control" name="weekday_afternoono" id="infoTextArea" value="{{ (isset($data->weekday_noon_open)) ? date("H:i", strtotime($data->weekday_noon_open)) : '' }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Closing Time:</label>
                                    <input type="time" class="form-control" name="weekday_closing" id="infoTextArea" value="{{ (isset($data->weekday_closing)) ? date("H:i", strtotime($data->weekday_closing)) : '' }}">

                                </div>
                                <div class="col-md-12">
                                <h3>Timing For Weekends</h3>
                                </div>
                                <div class="col-md-12">
                                    <h4>Morning to Afternoon</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Opening Time:</label>
                                    <input type="time" class="form-control" name="weekend_opening" id="infoTextArea" value="{{ isset($data->weekend_opening) ? date("H:i", strtotime($data->weekend_opening)) : '' }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Closing Time:</label>
                                    <input type="time" class="form-control" name="weekend_afternoonc" id="infoTextArea" value="{{ (isset($data->weekend_noon_close)) ? date("H:i", strtotime($data->weekend_noon_close)) : '' }}">

                                </div>
                                
                                <div class="col-md-12">
                                    <h4>Afternoon to Night</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Opening Time:</label>
                                    <input type="time" class="form-control" name="weekend_afternoono" id="infoTextArea" value="{{ (isset($data->weekend_noon_open)) ? date("H:i", strtotime($data->weekend_noon_open)) : '' }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Closing Time:</label>
                                    <input type="time" class="form-control" name="weekend_closing" id="infoTextArea" value="{{ (isset($data->weekend_closing)) ? date("H:i", strtotime($data->weekend_closing)) : '' }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Branch Icon:</label>
                                    <input type="file" class="form-control" name="branch_icon" id="infoTextArea" >
                                    @if(isset($data->branch_banner))
                                    <img src="{{ url($data->branch_banner) }}" height="100" width="100"> 
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Branch Banner:</label>
                                    <input type="file" class="form-control" name="branch_banner" id="infoTextArea" >
                                    @if(isset($data->banner))
                                    <img src="{{ url($data->banner) }}" height="100" width="100"> 
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 1:</label>
                                    <input type="file" class="form-control" name="specialty_1" id="infoTextArea" >
                                    @if(isset($data->specialty_1))
                                    <img src="{{ url($data->specialty_1) }}" height="100" width="100"> 
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 1 Title:</label>
                                    <input type="text" class="form-control" name="specialty_1_title" placeholder="Enter Title" value="{{ isset($data->specialty_1_title) ? $data->specialty_1_title : '' }}">
                                    {{-- <textarea class="form-control" id="andra_jpn" name="specialty_1_title" rows="10" placeholder="Enter Title">@if(isset($data->specialty_1_desccription)) {{$data->specialty_1_desccription}} @endif</textarea> --}}
                                    @error('specialty_1_title')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 1 Description:</label>
                                    <textarea class="form-control" id="andra_jpn" name="specialty_1_description" rows="10" placeholder="Enter details">@if(isset($data->specialty_1_desccription)) {{$data->specialty_1_desccription}} @endif</textarea>
                                    @error('specialty_1_description')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 1 Title Japanese:</label>
                                    <input type="text" class="form-control" name="specialty_1_title_jpn" placeholder="Enter Title" value="{{ isset($data->specialty_1_title_jpn) ? $data->specialty_1_title_jpn : '' }}" >
                                    {{-- <textarea class="form-control" id="andra_jpn" name="specialty_1_title" rows="10" placeholder="Enter Title">@if(isset($data->specialty_1_desccription)) {{$data->specialty_1_desccription}} @endif</textarea> --}}
                                    @error('specialty_1_title_jpn')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="infoTextArea">Specialty 1 Description Japanese:</label>
                                    <textarea class="form-control" id="andra_jpn" name="specialty_1_description_jpn" rows="10" placeholder="Enter details">@if(isset($data->specialty_1_description_jpn)) {{$data->specialty_1_description_jpn}} @endif</textarea>
                                    @error('specialty_1_description_jpn')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 2:</label>
                                    <input type="file" class="form-control" name="specialty_2" id="infoTextArea" >
                                    @if(isset($data->specialty_2))
                                    <img src="{{ url($data->specialty_2) }}" height="100" width="100"> 
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 2 Title:</label>
                                    <input type="text" class="form-control" name="specialty_2_title" placeholder="Enter Title"  value="{{ isset($data->specialty_2_title) ? $data->specialty_2_title : '' }}"  >
                                    {{-- <textarea class="form-control" id="andra_jpn" name="specialty_1_title" rows="10" placeholder="Enter Title">@if(isset($data->specialty_1_desccription)) {{$data->specialty_1_desccription}} @endif</textarea> --}}
                                    @error('specialty_2_title')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 2 Description:</label>
                                    <textarea class="form-control" id="andra_jpn" name="specialty_2_description" rows="10" placeholder="Enter details">@if(isset($data->specialty_2_description)) {{$data->specialty_2_description}} @endif</textarea>
                                    @error('specialty_2_description')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Specialty 2 Title Japanese:</label>
                                    <input type="text" class="form-control" name="specialty_2_title_jpn" placeholder="Enter Title"   value="{{ isset($data->specialty_2_title_jpn) ? $data->specialty_2_title_jpn : '' }}"   >
                                    {{-- <textarea class="form-control" id="andra_jpn" name="specialty_1_title" rows="10" placeholder="Enter Title">@if(isset($data->specialty_1_desccription)) {{$data->specialty_1_desccription}} @endif</textarea> --}}
                                    @error('specialty_2_title_jpn')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="infoTextArea">Specialty 2 Description Japanese:</label>
                                    <textarea class="form-control" id="andra_jpn" name="specialty_2_description_jpn" rows="10" placeholder="Enter details">@if(isset($data->specialty_2_description_jpn)) {{$data->specialty_2_description_jpn}} @endif</textarea>
                                    @error('specialty_2_description_jpn')
                                        <div class="" style="color:red">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Footer Banner:</label>
                                    <input type="file" class="form-control" name="footer_banner" >
                                    @if(isset($data->footer_banner))
                                    <img src="{{ url($data->footer_banner) }}" height="100" width="100"> 
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Branch Map:</label>
                                    <input type="file" class="form-control" name="branch_map" >
                                    @if(isset($data->branch_map))
                                    <img src="{{ url($data->branch_map) }}" height="100" width="100"> 
                                    @endif
                                </div>
                                <input type="hidden" name='edit_branch_id' value="{{$data->id}}">
                            <div style="display:flex;justify-content:end;padding:42px;">
                                <Button type="submit" class="btn btn-primary" >Store</Button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script>
        // JavaScript to make the alert disappear after 5 seconds
        setTimeout(function() {
            document.getElementById('alertMessage').style.display = 'none';
        }, 5000);
    </script>
</section>

    <!-- Modal with form -->
    
        <!-- Modal Edit form -->
        
    </section>
<script>

</script>
@endsection