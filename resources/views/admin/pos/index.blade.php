@extends('admin.layout.poslayout')
@section('extra_css')
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha384-xxxxx" crossorigin="anonymous" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .save-btn {
            position: relative;
            color: #A07E55;
            font-size: var(--fontSize-label-2);
            font-weight: var(--weight-bold);
            text-transform: uppercase;
            letter-spacing: var(--letterSpacing-2);
            max-width: max-content;
            border: 2px solid #A07E55;
            padding: 8px 35px;
            overflow: hidden;
            z-index: 1;
        }

        .funkyradio div {
            clear: both;
            overflow: hidden;
        }

        .funkyradio label {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #D1D3D4;
            font-weight: normal;
        }

        .funkyradio input[type="radio"]:empty,
        .funkyradio input[type="checkbox"]:empty {
            display: none;
        }

        .funkyradio input[type="radio"]:empty~label,
        .funkyradio input[type="checkbox"]:empty~label {
            position: relative;
            line-height: 2.5em;
            text-indent: 3.25em;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .funkyradio input[type="radio"]:empty~label:before,
        .funkyradio input[type="checkbox"]:empty~label:before {
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            content: '';
            width: 2.5em;
            background: #D1D3D4;
            border-radius: 3px 0 0 3px;
        }

        .funkyradio input[type="radio"]:hover:not(:checked)~label,
        .funkyradio input[type="checkbox"]:hover:not(:checked)~label {
            color: #888;
        }

        .funkyradio input[type="radio"]:hover:not(:checked)~label:before,
        .funkyradio input[type="checkbox"]:hover:not(:checked)~label:before {
            content: '\2714';
            text-indent: .9em;
            color: #C2C2C2;
        }

        .funkyradio input[type="radio"]:checked~label,
        .funkyradio input[type="checkbox"]:checked~label {
            color: #777;
        }

        .funkyradio input[type="radio"]:checked~label:before,
        .funkyradio input[type="checkbox"]:checked~label:before {
            content: '\2714';
            text-indent: .9em;
            color: #333;
            background-color: #ccc;
        }

        .funkyradio input[type="radio"]:focus~label:before,
        .funkyradio input[type="checkbox"]:focus~label:before {
            box-shadow: 0 0 0 3px #999;
        }

        .funkyradio-default input[type="radio"]:checked~label:before,
        .funkyradio-default input[type="checkbox"]:checked~label:before {
            color: #333;
            background-color: #ccc;
        }

        .funkyradio-primary input[type="radio"]:checked~label:before,
        .funkyradio-primary input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #337ab7;
        }

        .funkyradio-success input[type="radio"]:checked~label:before,
        .funkyradio-success input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #fe4e2b;
        }

        .funkyradio-danger input[type="radio"]:checked~label:before,
        .funkyradio-danger input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #d9534f;
        }

        .funkyradio-warning input[type="radio"]:checked~label:before,
        .funkyradio-warning input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #f0ad4e;
        }

        .funkyradio-info input[type="radio"]:checked~label:before,
        .funkyradio-info input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #5bc0de;
        }

        .custom-check {
            display: none;
        }

        :checked+label {
            /* border: 1px solid rgb(238 81 81); */
            /* box-shadow: 0 0 5px rgb(238 117 81) !important; */
            width: 100%;
            padding: 0% 2%;
            /* background-color: #fe4e2b; */
            color: #000 !important;
        }

        .custom-label {
            width: 100%;
            padding: 0% 2%;
            height: 46px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            line-height: 17px;
        }

        .owl-dots {
            display: none;
        }

        .owl-next {
            position: absolute;
            right: -30px;
            font-size: 26px !important;
            top: 11px;
            color: #fe4e2b !important;
        }

        .owl-prev {
            position: absolute;
            left: -30px;
            font-size: 26px !important;
            top: 11px;
            color: #fe4e2b !important;
        }

        .card-add-button {
            position: absolute;
            width: 89%;
            bottom: 17px;
        }

        .display-flex-space-between {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        @media (min-width: 576px) {
            .modal-sm-mid {
                max-width: 400px;
            }
        }


        input.toppingdirection[type=radio] {
            display: none;
        }

        input.toppingdirection:checked+label {
            border: solid 5px #5ed05e;
            box-shadow: 0 0 5px #95f895 !important;
            width: 40px;
            height: 40px;
        }

        input.toppingdirection:checked+label:before {
            /*content: "✓ ";*/
        }

        .custom-label:hover {
            cursor: pointer;
        }

        .sidebar{ width:100%;  background-color:#000;transition: all 0.5s  ease-in-out; }
.bg-defoult{background-color:#222;}
.sidebar ul{ list-style:none; margin:0px; padding:0px; }
.sidebar li a,.sidebar li a.collapsed.active{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding:8px 12px;
    color:#0e0d0d;
    border-left:0px solid #dedede;
    text-decoration:none}
.sidebar li a.active{background-color:#ffffff;border-left:5px solid #dedede; transition: all 0.5s  ease-in-out}
.sidebar li a:hover{background-color:#d3d3d3 !important;}
.sidebar li a i{ padding-right:5px;}
.sidebar ul li .sub-menu li a{ position:relative}
/* .sidebar ul li .sub-menu li a:before{
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 0px;
    padding-right: 10px;
    vertical-align: middle;
} */
.sidebar ul li .sub-menu li a:hover:after {
    content: "";
    position: absolute;
    left: -5px;
    top: 0;
    width: 5px;
    background-color: #111;
    height: 100%;
}
.sidebar ul li .sub-menu li a:hover{ background-color:#e9d5d5; padding-left:20px; transition: all 0.5s  ease-in-out}
.sub-menu{ border-left:5px solid #dedede;}
	.sidebar li a .nav-label,.sidebar li a .nav-label+span{ transition: all 0.5s  ease-in-out}


	.sidebar.fliph li a .nav-label,.sidebar.fliph li a .nav-label+span{ display:none;transition: all 0.5s  ease-in-out}
	.sidebar.fliph {
    width: 42px;transition: all 0.5s  ease-in-out;

}

.sidebar.fliph li{ position:relative}
.sidebar.fliph .sub-menu {
    position: absolute;
    left: 39px;
    top: 0;
    background-color: #f0bfbf;
    width: 150px;
    z-index: 100;
}
.card .card-body {
    padding: 0px 5px;
}
@media only screen and (min-width: 1200px) and (max-width: 1439px) {
    .main-content {
        padding-top: 75px;
        padding-left: 255px;
        padding-right: 5px;
    }
}
a:hover, .increment, .decrement{
    cursor: pointer!important;
}
.clearfixx{
    display: flex;
    justify-content: space-between
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.description,
th.description {
    width: 75px;
    max-width: 75px;
}

td.quantity,
th.quantity {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

td.price,
th.price {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

.centered {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 155px;
    max-width: 155px;
}

img {
    max-width: inherit;
    width: inherit;
}

@media print {
    body {
    visibility: hidden;
    }
  .section-to-print {
    visibility: visible;
    position: absolute;
    left: 0;
    top: 0;
  }

}
    </style>
@endsection
@section('content')
    <section class="hidden-print" style="background-color: var(--eerie-black-4);">
        <div class="the-div" style="background-color:white; width:100%;">
            <div class="container-fluid">
                <div class="row" style="align-items: flex-start;">
                    <div class="col-md-12">


                    </div>

                    <!-- First column -->

                    <div class="col-md-2 p-2">
                        <div class="row pt-3 menu-add-class">
                            <div class="col-lg-6 col-md-12">
                                <a href="" class="j-nav class-add" data-target="#menus" data-name="menus">
                                    <div class="card text-center mb-3 food-card repair-active-new" style="width: 95%;">
                                        <div class="card-body" style="padding: 2px 0px;">
                                            <p class="mb-0">Menus</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <a href="" class="j-nav class-add" data-target="#combo" data-name="combo">
                                    <div class="card text-center mb-3 food-card " style="width: 95%;">
                                        <div class="card-body" style="padding: 2px 0px;">
                                            <p class="mb-0">Combo</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-12">
                                <div class="sidebar left ">
                                    <ul class="list-sidebar bg-defoult" style="background-color:#d7d5d5">
                                      <li> <a href="javascript:void(0)" class="get_menu1"><i class="fa fa-pie-chart"></i> <span class="nav-label">All</span> </a></li>
                                    @foreach ($category as $item)
                                        <li> <a href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard{{$item->id}}" data-id="{{$item->id}}" class="collapsed active get_menu" > <img src="{{url($item->cate_img)}}" style="height:23px; width:23px" alt=""> <span class="nav-label"> {{$item->cate_name}} </span> <span class="fa fa-chevron-left pull-right"></span> </a>
                                            <ul class="sub-menu collapse sub_category_list" id="dashboard{{$item->id}}">
                                            </ul>
                                        </li>
                                    @endforeach
                                    </ul>
                                  </div>
                            </div>

                        </div>
                    </div>



                    <!-- Second Column -->

                    <div class="col-md-7 p-2">
                        <div class="bg-lights ms-2">

                            <!-- MENUS -->

                            <div id="menus" class="j-tab">
                                <div class="row">
                                    <div class="col-md-12 mb-3">

                                        <!-- Tab Content -->

                                        <div class="tab-content main-scrollbar">
                                            <div class="tab-pane fade show active mx-2 p-0" id="all">
                                                <div class="row" id="menu_list">
                                                </div>
                                                <div class="more">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Combo Pack-->
                            <div id="combo" class="j-tab p-3">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <h3
                                            style="font-family: var(--fontFamily-forum); font-size:18px; color:#A07E55; padding:5px;">
                                            Combo Pack</h3>


                                        <!-- Tab Content -->

                                        <div class="tab-content main-scrollbar">
                                            <div class="tab-pane fade show active mx-2" id="all">
                                                <div class="row" id="combo_pack_list">
                                                </div>
                                                <div class="load_more">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Cart -->
                            <div id="cart" class="j-tab p-3" style="display: none;">
                                <div class="row">
                                    <div class="col-md-12 mb-3">

                                        <div style="padding:5px;">
                                            <h3
                                                style="font-family: var(--fontFamily-forum); font-size:35px; color:#A07E55;">
                                                Cart</h3>
                                            <p
                                                style="font-family: var(--fontFamily-dm_sans); font-size:15px; color:#2D1E16;">
                                                Choose</p>
                                        </div>
                                        <div class="main-scrollbar">
                                            <div class="mx-2" id="cart_list">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Orders -->


                            {{-- <div id="orders" class="j-tab p-3" style="display: none;">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div style="padding:5px;">
                                            <h3
                                                style="font-family: var(--fontFamily-forum); font-size:35px; color:#A07E55;">
                                                Orders</h3>
                                            <p
                                                style="font-family: var(--fontFamily-dm_sans); font-size:15px; color:#2D1E16;">
                                                Details</p>
                                        </div>

                                        <div class="main-scrollbar">
                                            <div class="card table-card mx-2">
                                                <div class="card-body">
                                                    <div class="table-responsive" style="background: #fe4e2b !important;">
                                                        <table id="example"
                                                            class="table table-striped table-order text-nowrap"
                                                            style="width: 100%">
                                                            <thead>
                                                                <tr>
                                                                    <th><i class="fa fa-calendar"></i> Date</th>
                                                                    <th><i class="fa fa-cutlery"
                                                                            aria-hidden="true"></i>User Phone</th>
                                                                    <th><i class="fa fa-cutlery"></i>User Name</th>
                                                                    <th><i class="fa fa-cutlery"></i>User Address</th>
                                                                    <th><i class="fa fa-cutlery"></i> Txn id</th>
                                                                    <th><i class="fa fa-cutlery"></i> Invoice id</th>
                                                                    <th><i class="fa fa-receipt"></i> Transaction Type</th>
                                                                    <th><i class="fa fa-money"></i> Price</th>
                                                                    <th><i class="fa fa-money"></i>Status</th>
                                                                    <th><i class="fa-solid fa-money-bill"></i>Action</th>
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
                            </div> --}}

                            <!-- profile -->

                            {{-- <div id="profile" class="j-tab p-3" style="display: none;">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <h3
                                            style="font-family: var(--fontFamily-forum); font-size:35px; color:#A07E55; padding:5px;">
                                            Profile</h3>
                                        <div class="card bg-white border-0">
                                            <div class="col-md-12">
                                                <div class="mb-3 float-end">
                                                    <div class="mb-0 text-center btnsubmit">
                                                        <button class="save-btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#addressModal" type="button"><i
                                                                class="fa fa-plus"></i> Add Address</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="menubar">
                                                <div class="contact-form">
                                                    <form method="POST" class="update_profile">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Name*" name="name"
                                                                        value="@if (!empty(Auth::user()->name)) {{ Auth::user()->name }} @endif"
                                                                        style="font-size: 14px; font-family: var(--fontFamily-dm_sans);">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <input type="email" class="form-control"
                                                                        placeholder="Email*" name="email"
                                                                        value="@if (!empty(Auth::user()->email)) {{ Auth::user()->email }} @endif"
                                                                        style="font-size: 14px; font-family: var(--fontFamily-dm_sans);">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <input type="date" class="form-control"
                                                                        placeholder="Date of Birth*(m-d-Y)" name="dob"
                                                                        value="@if (!empty(Auth::user()->dob)) {{ date('dd-mm-yyyy', strtotime(Auth::user()->dob)) }} @endif"
                                                                        style="font-size: 14px; font-family: var(--fontFamily-dm_sans);">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <select name="age" id="age-group"
                                                                        class="form-control">
                                                                        <option>Age Group</option>
                                                                        <option value="10-25"
                                                                            @if (!empty(Auth::user()->age)) {{ Auth::user()->age == '10-25' ? 'selected' : '' }} @endif>
                                                                            10 - 25</option>
                                                                        <option value="15-25"
                                                                            @if (!empty(Auth::user()->age)) {{ Auth::user()->age == '15-25' ? 'selected' : '' }} @endif>
                                                                            15 - 25</option>
                                                                        <option value="20-25"
                                                                            @if (!empty(Auth::user()->age)) {{ Auth::user()->age == '20-25' ? 'selected' : '' }} @endif>
                                                                            20 - 25</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="mb-3 ">
                                                                    <textarea class="form-control" placeholder="Address*" name="address">@if (!empty(Auth::user()->address)) {{Auth::user()->address}} @endif</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                               <div class="mb-0 text-center btnsubmit">
                                                                  <button name="submit" type="submit" class="save-btn btn-primary">Save</button>
                                                               </div>

                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="row">
                                                    <div class="user_address_show"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <!-- Add Address-->
                        {{-- <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"
                                            style="font-family: var(--fontFamily-forum); font-size:35px; color:#A07E55; padding:5px;">
                                            Add New Address</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="contact-form" style="padding: 20px !important;">
                                            <form class="user_address" method="POST">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="City*" name="city"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="State*" name="state"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="House*" name="house"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Street*" name="street"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Apartment*" name="apartment"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Cross Street*" name="cross_street"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3 "
                                                            style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                            <textarea class="form-control" placeholder="special Instruction" name="instruction"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 formrow formbtn">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary w-100">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!--Edit User Address-->
                        {{-- <div class="modal fade" id="editAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Address</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="contact-form" style="padding: 20px !important;">
                                            <form class="update_user_address" method="POST">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="City*" id="edit_city" name="city">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="State*" id="edit_state" name="state">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="House*" id="edit_house" name="house">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Street*" id="edit_street" name="street">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Apartment*" id="edit_apartment"
                                                                name="apartment">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Cross Street*" id="edit_cross_street"
                                                                name="cross_street">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3 ">
                                                            <textarea class="form-control" placeholder="special Instruction" name="instruction" id="edit_instruction"></textarea>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="address_id" id="edit_address_id">
                                                    <div class="col-lg-12 formrow formbtn">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary w-100">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!--order details -->

                        <!--Order history detail-->
                        {{-- <div class="modal fade" id="order_history_detail" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Order History Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-12">
                                            <table class="table table-striped w-100 text-center" id="order_detail">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Base Price</th>
                                                        <th>Quantity</th>
                                                        <th>Total Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!--Order History detail-->

                    </div>

                <!-- Third  Column -->

                <div class="col-md-3 mt-2">
                    <div class=" mt-3 border-bottom">

                        <!-- Clearfix 1-->

                        <div class="clearfix">
                            <div class="float-start">
                                <h6>New Order</h6>
                            </div>
                            <div class="float-end">
                                <p class="small"> {{ date('D m, Y') }}</p>
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; justify-content: space-between">
                            <button class="btn btn-sm btn-success" style="color: black;
                             border: 2px solid black;" id="payNow">Pay Now</button>
                             <button class="btn btn-sm btn-success print-kot" style="color: black;
                             border: 2px solid black;">Print Invoice</button>
                          </div>
                    </div>

                    <!-- End Clearfix 1 -->

                    <div class="cart-scrollbar">

                        <div class="mx-2" id="side_card">
                            <!-- Cart 1 -->
                            <!-- End Cart 1 -->
                        </div>
                    </div>

                    <!--Scroll End -->



                    <!-- Clearfix 2-->
                    <div id="coupon-hide" class="mt-3"
                        style="display: flex;justify-content: space-betwwen;align-items: stretch;">
                        <input type="text" class="form-control-sm w-100" placeholder="Apply Coupon"
                            id="apply_coupon"><button style="padding: 1px 8px;font-size: 10px;" class="btn btn-danger" id="coupon_apply">Apply</button>
                    </div>
                    <div id="coupon_selected">

                    </div>
                    <div class="">
                        <div class="clearfixx pt-3">
                            <p style="line-height: 2px" class="mb-0 small">Sub Total</p>
                            <p style="line-height: 2px" class="fw-bold" id="sub_total"></p>
                        </div>
                        <div class="clearfixx">
                            <p style="line-height: 2px" class="mb-0 small">Discount</p>
                            <p style="line-height: 2px" class="fw-bold" id="total_discount"> - 0.00</p>
                        </div>
                    </div>



                    <!-- End Clearfix 2-->


                    <!-- Clearfix 3-->

                    <div class="" style="border-bottom: 1px dashed #000;">
                        <div class="clearfixx">
                            <p style="line-height: 2px" class="mb-0 small">Tax (Included)</p>
                            <p style="line-height: 2px" class="fw-bold" id="tax_inc"></p>
                        </div>
                    </div>

                    <div class="delivery_inc_show" style="border-bottom: 1px dashed #000;">
                        <div class="clearfixx">
                            <p style="line-height: 17px" class="mb-0 small">Delivery</p>
                            <p style="line-height: 17px" class="fw-bold" id="delivery_inc"></p>
                                <input type="hidden" name="delivery_ch" class="delivery_inc">
                        </div>
                    </div>

                    {{-- <div id="redeem-points" class="mt-3">
                        <div style="display: flex;justify-content: space-between;align-items: center;">
                            <div> Redeem points:  {{$UserPoints->points}} </div> <div><span><button style="padding: 1px 8px;font-size: 10px;" class="btn btn-danger" id="redeem">Redeem</button></span></div>
                        </div>
                        <input type="hidden" value="{{$UserPoints->points}}" class="form-control-sm w-100" placeholder="Reedem now"
                            id="redeem_value">
                    </div> --}}

                    {{-- <div id="points-redeemed">

                    </div> --}}



                    <!-- End Clearfix 3-->

                    <!-- Clearfix 3-->

                    <div class="mt-1">
                        <div class="clearfixx">
                            <p style="line-height: 11px; font-size: 18px; font-weight:500" class="mb-0 fw-bold text-warning">Total</p>
                            <p style="line-height: 11px; font-size: 18px; font-weight:500" class="fw-bold text-success" id="total"></p>
                            <input type="hidden" name="sub_total" class="sub_total">
                            <input type="hidden" name="tax" class="tax_inc">
                            <input type="hidden" name="tax" class="discount_value" value="0">
                            <input type="hidden" name="net_amnt" class="total" id="net_amnt">
                        </div>
                    </div>

                    <!-- End Clearfix 3-->

                    <div class="row mt-2">
                        <!-- <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input hmd" id="hmd" value="Home Delivery"
                                    name="home_delivery">
                                <label class="form-check-label" for="hmd">Home Delivery</label>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input ta" id="ta" value="Take Away"
                                    name="home_delivery">
                                <label class="form-check-label" for="ta">Take Away</label>
                            </div>
                        </div> -->

                        {{-- <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" value="Dine-In"
                                    name="home_delivery" checked readonly>
                                <label class="form-check-label din" for="ta">Dine-in</label>
                            </div>
                        </div> --}}


                    </div>


                    {{-- <div class="row branches mt-3 mb-4">

                        <select class="form-select" name="branch_id" id="branchId" aria-label="Default select example">
                            <option selected>Select Branch</option>
                            @foreach ($branches as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->address }}</option>
                            @endforeach
                        </select>
                    </div> --}}


                    {{-- <div class="adres">
                        <h5 class="my-3" style="display: flex;justify-content: space-between;align-items: center;">
                            Shipping Address <button style="font-size: 11px;padding: 6px 10px;" class="btn btn-primary"
                                data-bs-toggle="modal" data-bs-target="#addressModal" type="button"><i
                                    class="fa fa-plus"></i> Add Address</button></h5>
                        <div class="row">

                            @if ($ship)
                                @foreach ($ship as $item)
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input check1" name="address"
                                                value="{{ $item->id }}">
                                            <label class="form-check-label" for="check1">
                                                {{ $item->state }},{{ $item->house }},{{ $item->street }}
                                                {{ $item->apartment }},{{ $item->cross_street }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div> --}}
                    {{-- <h5 class="my-3">Payment Method</h5> --}}

                    <div class="row payment">
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card text-center mb-4 payment-item">
                                <div class="card-body">
                                    <label>
                                        <div class="h3 mb-0">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <p class="mb-0 small fw-bold">Cash</p>
                                        <input type="radio" name="payment" value="Cash">
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        {{--                  <div class="col-xl-4 col-lg-6 col-md-6"> --}}
                        {{--                     <div class="card text-center mb-4 payment-item"> --}}
                        {{--                        <div class="card-body"> --}}
                        {{--                           <label> --}}
                        {{--                              <div class="h3 mb-0"> --}}
                        {{--                                 <i class="fa fa-credit-card"></i> --}}
                        {{--                              </div> --}}
                        {{--                              <p class="mb-0 small fw-bold">Card/Debit</p> --}}
                        {{--                              <input type="radio" name="payment" value="Card"> --}}
                        {{--                           </label> --}}
                        {{--                        </div> --}}
                        {{--                     </div> --}}
                        {{--                  </div> --}}
                        {{--                  <div class="col-xl-4 col-lg-6 col-md-6"> --}}
                        {{--                     <div class="card text-center mb-4 payment-item"> --}}
                        {{--                        <div class="card-body"> --}}
                        {{--                           <label> --}}
                        {{--                              <div class="h3 mb-0"> --}}
                        {{--                                 <i class="fa-solid fa-wallet"></i> --}}
                        {{--                              </div> --}}
                        {{--                              <p class="mb-0 small fw-bold">E-Wallet</p> --}}
                        {{--                              <input type="radio" name="payment" value="Wallet"> --}}
                        {{--                           </label> --}}
                        {{--                        </div> --}}
                        {{--                     </div> --}}
                        {{--                  </div> --}}
                    </div>
                    <div class="row" style="display: flex; justify-content: space-between">
                     <button class="btn btn-sm btn-warning" id="place_order" style="color: black;
                     border: 2px solid black;">KOT / Place Order</button>
                     <button class="btn btn-sm btn-warning print-kot" style="color: black;
                     border: 2px solid black;">Print KOT</button>
                     <button class="btn btn-sm btn-info" style="color: black;
                     border: 2px solid black;" id="cart_cancel">Cancel</button>
                  </div>

                </div>
            </div>
         </div>

            <!-- Payment Method -->

            {{--            <button class="btn btn-primary w-100" id="place_order">Place Order</button> --}}
        </div>
        </div>
        </div>

        <div class="modal fade" id="print-kot" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Print KOT</h5>
                        <button type="button" class="btn-close print-kot-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="container px-0 mt-3">
                            <div class="ticket section-to-print">
                                <img src="{{ url('public/assets/website/indexImages/changed_logo.png')}}" alt="Logo">
                                <p class="centered">KOT Receipt
                                    <br>Date: {{ date('D m, Y') }}
                                    <br>Table No 2</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="quantity">Q.</th>
                                            <th class="description">Name</th>
                                            <th class="price">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id='cart-data'>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Subtotal</th>
                                            <th id="Psubtotal">200</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Discount</th>
                                            <th id="Pdiscount">200</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Tax</th>
                                            <th id="Ptax">200</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            <th id="Ptotal">200</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <p class="centered">Thanks for your purchase!</p>
                            </div>
                            <button id="btnPrint" class="hidden-print">Print</button>
                        </div>
                    </div>
                    <!-- End Modal Body -->
                </div>
            </div>
        </div>


        <div class="modal fade" id="customisable" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Customise</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="container px-4">
                            <div class="row" class="accordion" id="new_point">
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Body -->
                </div>
            </div>
        </div>


        {{-- Combo Pack detail --}}
        <div class="modal fade" id="combo_detail" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Combo Pack Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="container px-0 mt-3">
                            <div class="row" class="accordion" id="combo_pack_detail">
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Body -->
                </div>
            </div>
        </div>

        <div class="modal fade" id="pizzaSidesModal" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered modal-sm-mid">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 14px">Select the side you want
                            your
                            toppings</h5>
                        {{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body display-flex-space-between">
                                        <div class="text-center">
                                            <input class="toppingdirection" id="left" type="radio" value="left"
                                                name="spreadPart" />
                                            <label class="avatar-container p--50" for="left"></label>
                                            <p><span>Left side</span></p>
                                        </div>
                                        <div class="text-center">
                                            <input class="toppingdirection" id="whole" type="radio" value="whole"
                                                checked name="spreadPart" />
                                            <label class="avatar-container p-100" for="whole"></label>
                                            <p><span>Whole pizza</span></p>
                                        </div>
                                        <div class="text-center">
                                            <input class="toppingdirection" id="right" type="radio" value="right"
                                                name="spreadPart" />
                                            <label class="avatar-container p-50" for="right"></label>
                                            <p><span>Right side</span></p>
                                        </div>
                                        <div class="text-center">
                                            <input class="toppingdirection" id="quarter" type="radio"
                                                value="quarter" name="spreadPart" />
                                            <label class="avatar-container p-25" for="quarter"></label>
                                            <p><span>Per Slice</span></p>
                                        </div>
                                        <input type="hidden" id="poperty_id_for_sides">
                                    </div>
                                    <div class="card-fotter text-center">
                                        <button class="btn btn-success selectSidesButton"
                                            style="margin-bottom: 4%;padding: 7px 25px;">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Body -->
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@section('extra_js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script>
        const $btnPrint = document.querySelector("#btnPrint");
        $btnPrint.addEventListener("click", () => {
            window.print();
        });

        $(document).on('change', '.abc', function(e) {
            e.preventDefault()
            var property_id = $(this).val()
            if ($(this).is(':checked')) {
                $('#poperty_id_for_sides').val(property_id)
                $('#pizzaSidesModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $('#pizzaSidesModal').modal('show');
            } else {
                $('.appendSide-' + property_id).html('')
            }
        });

        $(function() {

            $('.print-kot').click(function(e){
                e.preventDefault()

                var branch_id = {{ $branch_id }}
                var table_id = {{ $table_id }}
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.get_cart_list_ajax') }}",
                    data: {
                        branch_id: branch_id,
                        table_id: table_id,
                    },
                    beforeSend: function() {
                        $('.loaded').show();
                    },
                    success: function(data) {
                        console.log(data)
                        let datas = '';
                        var sub_total = 0;
                        var net_amnt = 0;
                        var tax = 0;
                        if (data.products.length > 0) {
                            $.each(data.products, function(i, val) {
                                if (val.discount) {
                                    if (val.hasVarient) {
                                        var price = val.grandTotal;
                                    } else {
                                        var dis = val.discount;
                                        var price = (val.grandTotal - (val.grandTotal * val
                                            .discount / 100));
                                    }
                                } else {
                                    var dis = 0;
                                    var price = val.grandTotal;
                                }
                                sub_total += (val.qty * price);
                                net_amnt += (val.qty * price + (val.qty * price * val.tax) /
                                    100)
                                tax += ((val.tax / 100) * price) * val.qty
                                if (val.type == "combo") {
                                    var url = "{{ url('') }}" + val.image;
                                    var name = val.package_name;
                                } else {
                                    var url = "{{ url('') }}" + val.product_img;
                                    var name = val.product_name;
                                }
                                if (val.hasVarient) {
                                    var varient = '<br><span><b>Size : </b>' + val
                                        .varientName + '</span>'
                                } else {
                                    var varient = ''
                                }

                                if (val.hasProperties) {
                                    var Properties = '<div><b>Toppings : </b>'
                                    $.map(val.propertyItems, function(elem, index) {
                                        Properties +=
                                            '<p style="display: flex; align-items: center;justify-content: space-between;padding: 3% 18% 0% 0%;">' +
                                            elem.name + '</p>'
                                    })
                                    Properties += '</div>'
                                } else {
                                    var Properties = ''
                                }

                                if (val.hasToppings) {
                                    var Toppings = '<br><span><b>Crust : </b>'
                                    $.map(val.ToppingItems, function(elem, index) {
                                        Toppings += elem.name + ','
                                    })
                                    Toppings += '</span>'
                                } else {
                                    var Toppings = ''
                                }

                                datas += `<tr>
                                            <td class="quantity">${val.qty}</td>
                                            <td class="description">${name}</td>
                                            <td class="price">${price}</td>
                                        </tr>`

                                // datas += '<div class="card mb-2 bg-cart">' +
                                //     '<div class="row align-items-center">' +
                                //     '<div class="col-md-12" style="position: absolute;top: -14px;left: -13px;">' +
                                //     '<p class="small mb-0 text-end">' +
                                //     '<a href="javascript:void(0)" class="remove_to_cart" data-id="' +
                                //     val.id + '"><button style="line-height: 14px; border-radius: 50%;padding: 0px 3px;" class="btn btn-sm btn-danger"><i class="fa fa-close  me-2"></i></button>  </a>' +
                                //     '</p>' +
                                //     '</div>' +
                                //     '<div class="col-xl-5 col-md-6">' +
                                //     '<div class="card-body p-xl-0" style="padding-left: 5% !important;">' +
                                //     '<p style="line-height: 17px" class="card-title mb-0 fw-bold n-size pt-2">' + name +
                                //     '</p>' +
                                //     '</div>' +
                                //     '</div>' +
                                //     '<div class="col-xl-4 col-md-6">' +
                                //     '<div class="qty-block">' +
                                //     '<div class="qty">' +
                                //     '<div class="qty_inc_dec" style="display: flex;justify-content: space-evenly;">' +
                                //     '<i class="increment" data-id="' + val.id +
                                //     '" data-qty="' + val.qty + '" style="font-size: 20px;font-weight: 900;font-style:normal">+</i>' +
                                //     '<input type="text" name="qty" maxlength="12" value="' +
                                //     val.qty + '" title="" class="input-text" style="width:30px" readonly/>' +
                                //     '<i class="decrement" data-id="' + val.id +
                                //     '" data-qty="' + val.qty + '" style="font-size: 20px;font-weight: 900;font-style:normal">-</i>' +
                                //     '</div>' +
                                //     '</div>' +
                                //     '</div>' +
                                //     '</div>' +
                                //     '<div class="col-xl-3 col-md-6">' +
                                //     '<div class="card-body p-xl-0" style="padding-left: 5% !important;">' +
                                //     '<p style="line-height: 17px; text-align: end" class="card-text mb-0 pr-1"><span class="text-success"><b>	&#165;' +
                                //     price + '</b>' + varient + Toppings + '</p>' +
                                //     '</div>' +
                                //     '</div>' +
                                //     '<div class="offset-xl-3 col-xl-9 col-md-12">' +
                                //     Properties + '</div>' +
                                //     '</div>' +
                                //     '</div>';
                            })
                        } else {

                        }
                        // $('.delivery_inc_show').hide()
                        $('#cart-data').html(datas);
                        $("#Psubtotal").text(parseFloat(sub_total).toFixed(2))
                        $("#Ptax").text(parseFloat(tax).toFixed(2))
                        // $("#total").text(parseFloat(net_amnt).toFixed(2))
                        if (typeof data.deliveryCharges.hasDeliveryCharges != "undefined") {
                            if (data.deliveryCharges.hasDeliveryCharges) {
                                // alert('ok')
                                $('.delivery_inc_show').show()
                                var delivery_chagre = data.deliveryCharges.deliveryChargesss
                                $("#delivery_inc").text(parseFloat(delivery_chagre).toFixed(2))
                                $(".delivery_inc").val(parseFloat(delivery_chagre).toFixed(2))
                                var priceAfterDelivery = parseFloat(net_amnt) + parseFloat(
                                    delivery_chagre)
                                var coupon_code_percentage = $('.coupon_code_percent').val()
                                if(isNaN(coupon_code_percentage)) {
                                    var coupon_code_percent = 0;
                                }else{
                                    var coupon_code_percent = coupon_code_percentage;
                                }
                                var coupon_discount = (coupon_code_percent / 100) * priceAfterDelivery
                                $('#Pdiscount').text(coupon_discount)
                                var total_after_coupon_discount = priceAfterDelivery - coupon_discount;

                                var redeem_discount = $('#red_dis').text();
                                if(isNaN(redeem_discount)) {
                                    var red_discount = 0;
                                }else{
                                    var red_discount = redeem_discount;
                                }

                                var total_after_redeem_discount = total_after_coupon_discount - red_discount

                                if(parseFloat(total_after_redeem_discount).toFixed(2) < 0){
                                    $granddTotal = 0;
                                }else{
                                    $granddTotal = parseFloat(total_after_redeem_discount).toFixed(2);
                                }

                                $("#Ptotal").text($granddTotal)
                            } else {
                                // alert('no')
                                $('.delivery_inc_show').hide()
                                var coupon_code_percent = $('.coupon_code_percent').val()
                                if(isNaN(coupon_code_percentage)) {
                                    var coupon_code_percent = 0;
                                }else{
                                    var coupon_code_percent = coupon_code_percentage;
                                }
                                var coupon_discount = (coupon_code_percent / 100) * net_amnt
                                $('#Pdiscount').text(coupon_discount)
                                var total_after_coupon_discount = net_amnt - coupon_discount;

                                var redeem_discount = $('#red_dis').text();
                                if(isNaN(redeem_discount)) {
                                    var red_discount = 0;
                                }else{
                                    var red_discount = redeem_discount;
                                }

                                var total_after_redeem_discount = total_after_coupon_discount - red_discount

                                if(parseFloat(total_after_redeem_discount).toFixed(2) < 0){
                                    $granddTotal = 0;
                                }else{
                                    $granddTotal = parseFloat(total_after_redeem_discount).toFixed(2);
                                }

                                $("#Ptotal").text($granddTotal)
                            }
                        }


                    },
                    complete: function() {
                        $('.loaded').hide();

                    },
                })

                $('#print-kot').modal('show')
            })

            $('.print-kot-close').click(function(e){
                e.preventDefault()
                $('#print-kot').modal('hide')
            })

            $('.selectSidesButton').click(function(e) {
                e.preventDefault()
                var property_id = $('#poperty_id_for_sides').val()
                if ($('.toppingdirection:checked').val() == 'left') {
                    $('.appendSide-' + property_id).html(
                        `<div class="avatar-container p--50"></div><input type="hidden" name="p-${property_id}" value="left">`
                    )
                } else if ($('.toppingdirection:checked').val() == 'right') {
                    $('.appendSide-' + property_id).html(
                        `<div class="avatar-container p-50"></div><input type="hidden" name="p-${property_id}" value="right">`
                    )
                } else if ($('.toppingdirection:checked').val() == 'quarter') {
                    $('.appendSide-' + property_id).html(
                        `<div class="avatar-container p-25"></div><input type="hidden" name="p-${property_id}" value="quarter">`
                    )
                } else {
                    $('.appendSide-' + property_id).html(
                        `<div class="avatar-container p-100"></div><input type="hidden" name="p-${property_id}" value="whole">`
                    )
                }
                $('#pizzaSidesModal').modal('hide');
            })
        })

        $(document).ready(function() {

            $('.adres').hide();
            $('.branches').hide();

            $("input[id$='hmd']").click(function() {
                $('.adres').show();
                $('.branches').hide();
            });

            $("input[id$='ta']").click(function() {
                $('.adres').hide();
                $('.branches').show();
            });
        });

        $(document).ready(function() {
            sessionStorage.clear();
            const url = String(window.location.href)
            const u = url.split('?=')
            if (u.length === 2) {
                const a = u[1]
                $('.food-card').removeClass('repair-active-new')
                $(`a[data-target="#${a}"] .card`).addClass('repair-active-new')
                $('.j-tab').hide()
                $(`#${a}`).show()
            }
            $(".j-nav").click(function(e) {
                e.preventDefault();
                const target = $(this).attr('data-target')
                $('.j-tab').hide()
                $(target).show()
                const name = $(this).attr('data-name')
                // history.pushState({}, "POS", "pos.html?=" + name)
            });
            $('.sel-portion').click(function() {
                let portionId = $(this).val()
                let itemNumber = $(this).parent().parent().siblings('.itemNumber').val()
                let itemId = $(this).parent().parent().siblings('.itemNumber').val()

                sessionStorage.setItem(`ITEM_NUMBER${itemNumber}`, `${itemId},${portionId}`);

            })
            $('.accordion-button ').click(function() {
                let button = $(this).siblings().children().children().children('.itemNumber').val()
                $("input[type=radio][name=portion" + button + "]").prop('checked', false);

                sessionStorage.removeItem(`ITEM_NUMBER${button}`);
            })

            $('.add_topping').click(function() {
                // alert('hello');
                exit;
                let totalItems = '<?php echo count($extra); ?>';
                let fd = new FormData();
                fd.append('_token', "{{ csrf_token() }}");
                let obj = {};

                for (let i = 1; i <= totalItems; i++) {
                    // obj[i] = sessionStorage.getItem(`ITEM_NUMBER${i}`)
                    fd.append(i, sessionStorage.getItem(`ITEM_NUMBER${i}`))
                }
                //  echo($i);
                // console.log(fd);

                $.ajax({
                    url: "{{ route('website.extra_topping') }}",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        // $('.loader').show();
                    },
                    success: function(result) {
                        console.log(result)
                        // $('#customisable').modal('hide')
                    },
                    complete: function() {
                        // $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })



        });
    </script>

    <script>
        $(document).ready(function() {
            $('.menu-add-class .class-add .food-card').click(function() {
                $('.food-card').removeClass("repair-active-new");
                $(this).addClass("repair-active-new");
            });
            $('.click-menu').click(function() {
                $('.click-menu').removeClass("add-menu");
                $(this).addClass("add-menu");
            });
            $('.click-menu-2').click(function() {
                $('.click-menu-2').removeClass("add-menu-2");
                $(this).addClass("add-menu-2");
            });
            $('.click-menu-3').click(function() {
                $('.click-menu-3').removeClass("add-menu-3");
                $(this).addClass("add-menu-3");
            });
            $('.payment .payment-item').click(function() {
                $('.payment-item').removeClass("repair-active");
                $(this).addClass("repair-active");
            });
        });
        $(document).ready(function() {
            $('#example').DataTable();
            $('.catg-link').click(function(argument) {
                $(this)[0].scrollIntoView({
                    behavior: "smooth",
                    block: "nearest",
                    inline: "center"
                })
            })
        });
    </script>

    <script>
        // Topping Added
        $("body").on("click", ".topping_added", function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log(id);
            let fd = new FormData()
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('id', id);
            $.ajax({
                url: "{{ route('website.extra_variants') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    console.log(result)
                    $("#new_point").html(result.data);
                    // $('.owl-carousel').owlCarousel({
                    //     loop: true,
                    //     margin: 30,
                    //     dots: true,
                    //     nav: false,
                    //     responsiveClass: true,
                    //     responsive: {
                    //         0: {
                    //             items: 2,
                    //             margin: 10,
                    //             stagePadding: 20,
                    //         },
                    //         600: {
                    //             items: 3,
                    //             margin: 20,
                    //             stagePadding: 50,
                    //         },
                    //         1000: {
                    //             items: 4
                    //         }
                    //     }
                    // });
                    $('.owl-carousel').owlCarousel({
                        loop: false,
                        margin: 10,
                        nav: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 5
                            }
                        },
                        navText: ["<i class='fa fa-chevron-left'></i>",
                            "<i class='fa fa-chevron-right'></i>"
                        ]

                    })
                },
                complete: function() {
                    // $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
            $("#customisable").modal("toggle");
        })

        $(function() {
            var limit = 15;
            var newest = "";
            var asc = "";
            var cate_id = "";
            var sub_cate_id = "";
            var branch_id = {{ $branch_id }};
            // alert(branch_id);
            //load products
            $.fn.product = function(limit, newest, asc, cate_id, sub_cate_id) {

                $.ajax({
                    type: "GET",
                    data: {
                        "limit": limit,
                        "newest": newest,
                        "asc": asc,
                        "cate_id": cate_id,
                        "sub_cate_id": sub_cate_id,
                        "branch_id": branch_id,
                    },
                    url: "{{ route('admin.get_menu') }}",
                    beforeSend: function() {
                        $('.loaded').show();
                    },
                    success: function(data) {
                        console.log(data)
                        let datas = '';
                        let load = '';
                        if (data.products.length > 0) {
                            $.each(data.products, function(i, val) {
                                if (val.discount) {
                                    var dis = val.discount;
                                    var price = (val.new_price - (val.new_price * dis / 100));
                                    var discount = '<strike><span class="text-danger">¥' +
                                        parseFloat(val.new_price).toFixed(2) +
                                        '</span></strike><span> <br> <span><b>Discount&nbsp</b>' +
                                        dis + '%</span>'
                                    var multipleDiscount =
                                        '<strike><span class="text-danger">¥' + parseFloat(
                                            val.new_price).toFixed(2) + '</span></strike>'
                                    var discountPercent =
                                        '<span>  <span><b>Discount&nbsp</b>' + dis +
                                        '%</span>'
                                } else {
                                    var dis = 0;
                                    var price = (val.new_price)
                                    var discount = ''
                                    var multipleDiscount = ''
                                    var discountPercent = ''
                                }
                                if (val.hasDefaultVarient) {
                                    var custom = '<a href="" data-id="' + val.id +
                                        '" class="topping_added"><i class="fa fa-cutlery"></i> Customize</a>'
                                    var add =
                                        '<a class="p-2 btn-primary topping_added" data-id="' +
                                        val.id +
                                        '"><i class="fa fa-cart-shopping"></i> Add</a>'
                                    if (val.discount) {
                                        var discountedPrice =
                                            '<strike><span class="text-danger">¥' +
                                            parseFloat(val.total_default_price).toFixed(2) +
                                            '</span></strike>'
                                        var discpuntedMprice = val.total_default_price - ((
                                            dis / 100) * val.total_default_price)
                                    } else {
                                        var discountedPrice = ''
                                        var discpuntedMprice = val.total_default_price
                                    }
                                    var priceC = '<b><span><span class="text-success">¥' +
                                        parseFloat(discpuntedMprice).toFixed(2) +
                                        '</b></span>&nbsp;&nbsp;' + discountedPrice + '<br>'
                                    var sty = 'style="font-size: 12px;line-height: 16px;"'
                                } else {
                                    if (val.hasVarient) {
                                        var custom = '<a href="" data-id="' + val.id +
                                            '" class="topping_added"><i class="fa fa-cutlery"></i> Customize</a>'
                                        var add =
                                            '<a class="p-2 btn-primary topping_added" data-id="' +
                                            val.id +
                                            '"><i class="fa fa-cart-shopping"></i> Add</a>'
                                        var priceC = ''
                                        $.map(val.allVarients, function(value, index) {
                                            if (val.discount) {
                                                var discountedPrice =
                                                    '<strike><span class="text-danger">¥' +
                                                    parseFloat(value.price).toFixed(
                                                        2) + '</span></strike>'
                                                var discpuntedMprice = value.price -
                                                    ((dis / 100) * value.price)
                                            } else {
                                                var discountedPrice = ''
                                                var discpuntedMprice = value.price
                                            }
                                            priceC +=
                                                '<b><span class="text-muted">' +
                                                value.name +
                                                '</span> : <span><span class="text-success">¥' +
                                                parseFloat(discpuntedMprice)
                                                .toFixed(2) +
                                                '</b></span>&nbsp;&nbsp;' +
                                                discountedPrice + '<br>'
                                        })
                                        priceC += discountPercent
                                        var sty =
                                            'style="font-size: 12px;line-height: 16px; height:192px; overflow:scroll;"'
                                    } else {
                                        var custom = ''
                                        var add =
                                            '<a class="p-2 btn-primary add_to_cart" data-discount_percent="' +
                                            dis + '" data-normal_price="' + parseFloat(val
                                                .price).toFixed(2) +
                                            '" data-discounted_price="' + parseFloat(price)
                                            .toFixed(2) + '" data-id="' + val.id +
                                            '" style="padding: 1px 5px !important; color: #fff!important"><i class="fa fa-cart-shopping"></i> Add</a>'
                                        var priceC =
                                            '<b><span><span class="text-success">¥' +
                                            parseFloat(price).toFixed(2) +
                                            '</b></span>&nbsp;&nbsp;' + discount;
                                        var sty = '';
                                    }
                                }
                                var url = "{{ url('') }}" + val.product_img;
                                datas += '<div class="col-xl-3 col-lg-6 col-md-12 p-1">' +
                                    '<div class="card card-menu">' +
                                    '<div class="card-body" style="height: 102px;">' +
                                    '<p class="text-center fw-bold mb-0" style="line-height: 12px;padding: 5%;">' + val
                                    .product_name + '</p>' +
                                    '<p class="text-center" ' + sty + ' style="line-height: 12px;margin-bottom: 0rem;">' + priceC +
                                    '</p>' +
                                    '<div class="clearfix card-add-button" style="text-align: center; position: relative; width:100%; bottom: 0px;">' +
                                    '<div class="float-start c-text">' +
                                    custom +
                                    '</div>' +
                                    '<div class="float-end mt-2">' +
                                    add +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>';
                            })



                            if (data.limit <= data.total) {
                                load += '<div class="page-pagination">' +
                                    '<ul class="pagination justify-content-center">' +
                                    '<button class="btn btn-primary load_more" data-load_more="' +
                                    data.limit +
                                    '"><i class="fas fa-spinner fa-spin load_more_spin p-2"></i>Load More</button>' +
                                    '</ul>' +
                                    '</div>'
                            }
                        } else {

                        }
                        $('#menu_list').html(datas);
                        $(".more").html(load);
                    },
                    complete: function() {
                        $('.loaded').hide();

                    },
                })
            }
            $.fn.product();

            $('body').on('click', '.load_more', function(e) {
                var load_more = $(this).data('load_more');
                limit = 10 + load_more;
                $.fn.product(limit, newest, asc, cate_id, sub_cate_id);
            });

            $('body').on('click', '.get_menu1', function(e) {
                var sub_cate_id = $(this).data('id');
                $.fn.product(limit, newest, asc, cate_id, sub_cate_id);

            });


            //   // filter
            $('body').on('click', '.get_menu', function(e) {
                var cate_id = $(this).data('id');
                $.fn.subCateory(cate_id);
                $.fn.product(limit, newest, asc, cate_id, sub_cate_id);

            });

            // Get Sub Category
            $.fn.subCateory = function(cate_id) {
                $.ajax({
                    type: "GET",
                    data: {
                        "limit": limit,
                        "newest": newest,
                        "asc": asc,
                        "cate_id": cate_id
                    },
                    url: "{{ route('admin.get_sub_category') }}",
                    beforeSend: function() {
                        $('.loaded').show();
                    },
                    success: function(data) {
                        let datas = '';

                        if (data.data.length > 0) {

                            $.each(data.data, function(i, val) {
                                var url = "{{ url('') }}" + val.image;
                                // datas += '<li class="nav-item">' +
                                //     '<button class="nav-link catg-link d-flex align-items-center rounded-pill px-4 get_menu1" data-id="' +
                                //     val.id +
                                //     '" id="pills-all" data-bs-toggle="pill" data-bs-target="#all">' +
                                //     '<img src="' + url +
                                //     '" alt="" style="width:40px;height: 40px;border-radius: 50%;" class="me-4">' +
                                //     val.name + '</button>' +
                                //     '</li>';
                                datas += '<li><a href="javascript:void(0)" class="get_menu1" data-id="' + val.id +'">' + val.name + '</li>';
                            })
                        } else {
                            datas = '';
                        }
                        $('.sub_category_list').html(datas);
                    },
                    complete: function() {
                        $('.loaded').hide();

                    },
                })
            }



            // Add to cart
            $("body").on("click", ".add_to_cart", function(e) {
                e.preventDefault();
                // alert()
                var id = $(this).data('id');
                var branch_id = {{ $branch_id }}
                var discount_percent = $(this).data('discount_percent');
                var discounted_price = $(this).data('discounted_price');
                var normal_price = $(this).data('normal_price');
                let fd = new FormData()
                fd.append('_token', "{{ csrf_token() }}");
                fd.append('branch_id', branch_id);
                fd.append('table_id', '{{$table_id}}');
                fd.append('id', id);
                fd.append('discount_percent', discount_percent);
                fd.append('discounted_price', discounted_price);
                fd.append('normal_price', normal_price);
                $.ajax({
                    url: "{{ route('admin.add_to_cart') }}",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        // $('.loader').show();
                    },
                    success: function(result) {
                        console.log(result)
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            $.fn.sideCart();
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function() {
                        // $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })


            // Remove for cart
            $("body").on("click", ".remove_to_cart", function(e) {
                e.preventDefault();
                var cart_id = $(this).data('id');
                let fd = new FormData()
                fd.append('_token', "{{ csrf_token() }}");
                fd.append('cart_id', cart_id);
                $.ajax({
                    url: "{{ route('admin.remove_from_cart') }}",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.loader').show();
                    },
                    success: function(result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            $.fn.sideCart();
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
                    }
                });
            })

            // Increament Qty
            $("body").on("click", ".increment", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var qty = $(this).data('qty');
                let fd = new FormData()

                fd.append('_token', "{{ csrf_token() }}");
                fd.append('qty', qty);
                fd.append('id', id);
                $.ajax({
                    url: "{{ route('admin.qty_increase') }}",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        // $('.loader').show();
                    },
                    success: function(result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            $.fn.sideCart();
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function() {
                        // $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })

            // Qty decrese
            $("body").on("click", ".decrement", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var qty = $(this).data('qty');
                let fd = new FormData()

                fd.append('_token', "{{ csrf_token() }}");
                fd.append('qty', qty);
                fd.append('id', id);
                $.ajax({
                    url: "{{ route('admin.qty_decrease') }}",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        // $('.loader').show();
                    },
                    success: function(result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            $.fn.sideCart();
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function() {
                        // $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })

            // Side cart show
            $.fn.sideCart = function() {
            // alert();
                var branch_id = {{ $branch_id }}
                var table_id = {{ $table_id }}
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.get_cart_list_ajax') }}",
                    data: {
                        branch_id: branch_id,
                        table_id: table_id,
                    },
                    beforeSend: function() {
                        $('.loaded').show();
                    },
                    success: function(data) {
                        console.log(data)
                        let datas = '';
                        var sub_total = 0;
                        var net_amnt = 0;
                        var tax = 0;
                        if (data.products.length > 0) {
                            $.each(data.products, function(i, val) {
                                if (val.discount) {
                                    if (val.hasVarient) {
                                        var price = val.grandTotal;
                                    } else {
                                        var dis = val.discount;
                                        var price = (val.grandTotal - (val.grandTotal * val
                                            .discount / 100));
                                    }
                                } else {
                                    var dis = 0;
                                    var price = val.grandTotal;
                                }
                                sub_total += (val.qty * price);
                                net_amnt += (val.qty * price + (val.qty * price * val.tax) /
                                    100)
                                tax += ((val.tax / 100) * price) * val.qty
                                if (val.type == "combo") {
                                    var url = "{{ url('') }}" + val.image;
                                    var name = val.package_name;
                                } else {
                                    var url = "{{ url('') }}" + val.product_img;
                                    var name = val.product_name;
                                }
                                if (val.hasVarient) {
                                    var varient = '<br><span><b>Size : </b>' + val
                                        .varientName + '</span>'
                                } else {
                                    var varient = ''
                                }

                                if (val.hasProperties) {
                                    var Properties = '<div><b>Toppings : </b>'
                                    $.map(val.propertyItems, function(elem, index) {
                                        Properties +=
                                            '<p style="display: flex; align-items: center;justify-content: space-between;padding: 3% 18% 0% 0%;">' +
                                            elem.name + '</p>'
                                    })
                                    Properties += '</div>'
                                } else {
                                    var Properties = ''
                                }

                                if (val.hasToppings) {
                                    var Toppings = '<br><span><b>Crust : </b>'
                                    $.map(val.ToppingItems, function(elem, index) {
                                        Toppings += elem.name + ','
                                    })
                                    Toppings += '</span>'
                                } else {
                                    var Toppings = ''
                                }

                                datas += '<div class="card mb-2 bg-cart"';
                                if(val.kot_status == 1){
                                    datas += 'style="border: 3px solid #50c063;"';
                                }
                                datas += '>' +
                                    '<div class="row align-items-center">';
                                if(val.kot_status != 1){
                                    datas += '<div class="col-md-12" style="position: absolute;top: -14px;left: -13px;">' +
                                    '<p class="small mb-0 text-end">' +
                                    '<a href="javascript:void(0)" class="remove_to_cart" data-id="' +
                                    val.id + '"><button style="line-height: 14px; border-radius: 50%;padding: 0px 3px;" class="btn btn-sm btn-danger"><i class="fa fa-close  me-2"></i></button>  </a>' +
                                    '</p>' +
                                    '</div>';
                                }
                                datas += '<div class="col-xl-5 col-md-6">' +
                                    '<div class="card-body p-xl-0" style="padding-left: 5% !important;">' +
                                    '<p style="line-height: 17px" class="card-title mb-0 fw-bold n-size pt-2">' + name +
                                    '</p>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="col-xl-4 col-md-6">' +
                                    '<div class="qty-block">' +
                                    '<div class="qty">' +
                                    '<div class="qty_inc_dec" style="display: flex;justify-content: space-evenly;">';
                                if(val.kot_status != 1){
                                    datas += '<i class="increment" data-id="' + val.id +
                                    '" data-qty="' + val.qty + '" style="font-size: 20px;font-weight: 900;font-style:normal">+</i>';
                                }
                                datas += '<input type="text" name="qty" maxlength="12" value="' +
                                    val.qty + '" title="" class="input-text" style="width:30px" readonly/>';
                                if(val.kot_status != 1){
                                    datas +='<i class="decrement" data-id="' + val.id +
                                    '" data-qty="' + val.qty + '" style="font-size: 20px;font-weight: 900;font-style:normal">-</i>';
                                }
                                datas += '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="col-xl-3 col-md-6">' +
                                    '<div class="card-body p-xl-0" style="padding-left: 5% !important;">' +
                                    '<p style="line-height: 17px; text-align: end" class="card-text mb-0 pr-1"><span class="text-success"><b>	&#165;' +
                                    price + '</b>' + varient + Toppings + '</p>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="offset-xl-3 col-xl-9 col-md-12">' +
                                    Properties + '</div>' +
                                    '</div>' +
                                    '</div>';
                            })
                        } else {

                        }
                        $('.delivery_inc_show').hide()
                        $('#side_card').html(datas);
                        $("#sub_total").text(parseFloat(sub_total).toFixed(2))
                        $("#tax_inc").text(parseFloat(tax).toFixed(2))
                        // $("#total").text(parseFloat(net_amnt).toFixed(2))
                        if (typeof data.deliveryCharges.hasDeliveryCharges != "undefined") {
                            if (data.deliveryCharges.hasDeliveryCharges) {
                                // alert('ok')
                                $('.delivery_inc_show').show()
                                var delivery_chagre = data.deliveryCharges.deliveryChargesss
                                $("#delivery_inc").text(parseFloat(delivery_chagre).toFixed(2))
                                $(".delivery_inc").val(parseFloat(delivery_chagre).toFixed(2))
                                var priceAfterDelivery = parseFloat(net_amnt) + parseFloat(
                                    delivery_chagre)
                                var coupon_code_percentage = $('.coupon_code_percent').val()
                                if(isNaN(coupon_code_percentage)) {
                                    var coupon_code_percent = 0;
                                }else{
                                    var coupon_code_percent = coupon_code_percentage;
                                }
                                var coupon_discount = (coupon_code_percent / 100) * priceAfterDelivery
                                $('#total_discount').text(coupon_discount)
                                var total_after_coupon_discount = priceAfterDelivery - coupon_discount;

                                var redeem_discount = $('#red_dis').text();
                                if(isNaN(redeem_discount)) {
                                    var red_discount = 0;
                                }else{
                                    var red_discount = redeem_discount;
                                }

                                var total_after_redeem_discount = total_after_coupon_discount - red_discount

                                if(parseFloat(total_after_redeem_discount).toFixed(2) < 0){
                                    $granddTotal = 0;
                                }else{
                                    $granddTotal = parseFloat(total_after_redeem_discount).toFixed(2);
                                }

                                $("#total").text($granddTotal)
                                $(".total").val($granddTotal)
                            } else {
                                // alert('no')
                                $('.delivery_inc_show').hide()
                                var coupon_code_percent = $('.coupon_code_percent').val()
                                if(isNaN(coupon_code_percentage)) {
                                    var coupon_code_percent = 0;
                                }else{
                                    var coupon_code_percent = coupon_code_percentage;
                                }
                                var coupon_discount = (coupon_code_percent / 100) * net_amnt
                                $('#total_discount').text(coupon_discount)
                                var total_after_coupon_discount = net_amnt - coupon_discount;

                                var redeem_discount = $('#red_dis').text();
                                if(isNaN(redeem_discount)) {
                                    var red_discount = 0;
                                }else{
                                    var red_discount = redeem_discount;
                                }

                                var total_after_redeem_discount = total_after_coupon_discount - red_discount

                                if(parseFloat(total_after_redeem_discount).toFixed(2) < 0){
                                    $granddTotal = 0;
                                }else{
                                    $granddTotal = parseFloat(total_after_redeem_discount).toFixed(2);
                                }

                                $("#total").text($granddTotal)
                                $(".total").val($granddTotal)
                            }
                        }

                        $(".sub_total").val(parseFloat(sub_total).toFixed(2))
                        $(".tax_inc").val(parseFloat(tax).toFixed(2))
                        // $(".total").val(parseFloat(net_amnt).toFixed(2))


                    },
                    complete: function() {
                        $('.loaded').hide();

                    },
                })
            }
            $.fn.sideCart();

            //Place Order Confirm
            $("body").on("click", "#place_order", function(e) {
                e.preventDefault();
                var sub_total = $(".sub_total").val();
                var tax = $(".tax_inc").val();
                var discount_value = $(".discount_value").val();
                var total = $(".total").val();
                if (typeof($(".coupon_code").val()) == "undefined") {
                    var coupon_code = '';
                } else {
                    var coupon_code = $(".coupon_code").val();
                }
                if (typeof($(".delivery_inc").val()) == "undefined") {
                    var delivery_charge = 0;
                } else {
                    var delivery_charge = $(".delivery_inc").val();
                }
                var branch_idd = {{ $branch_id }};
                var table_id = {{ $table_id }};
                // alert(branch_id);
                var type = $('input[name="payment"]:checked').val();
                var type_of_delivery = $('input[name="home_delivery"]:checked').val();
                var address = $("input[name='address']:checked").val();
                var branch_id = $('#branchId').find(":selected").val();
                var redeem_points_discount = $('#red_dis').text();
                let fd = new FormData()
                fd.append('_token', "{{ csrf_token() }}");
                fd.append('sub_total', sub_total);
                fd.append('branch_idd', branch_idd);
                fd.append('table_id', table_id);
                fd.append('tax', tax);
                fd.append('discount_value', discount_value);
                fd.append('total', total);
                fd.append('coupon_code', coupon_code);
                fd.append('delivery_charge', delivery_charge);
                fd.append('type', type);
                fd.append('address', address);
                fd.append('type_of_delivery', type_of_delivery);
                fd.append('branch_id', branch_idd);
                fd.append('redeem_points_discount', redeem_points_discount);

                if (type != "") {
                    $.ajax({
                        url: "{{ route('admin.place_order') }}",
                        type: "POST",
                        data: fd,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            $('.loader').show();
                        },
                        success: function(result) {
                            // console.log(result)
                            if (result.status) {
                                iziToast.success({
                                    title: '',
                                    message: result.msg,
                                    position: 'topRight'
                                });
                                $.fn.sideCart();
                                setTimeout(() => {
                                    window.location.reload();
                                }, 1000);
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
                        }
                    });
                } else {
                    iziToast.error({
                        title: '',
                        message: "select payment method",
                        position: 'topRight'
                    });
                }
            })
        })


        // Extra add to cart
        $("body").on("submit", ".new_add_to_cart", function(e) {
            e.preventDefault();
            let fd = new FormData(this)
            fd.append('_token', "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('website.extra_add_to_cart') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    console.log(result)
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $.fn.sideCart();
                        $('#customisable').modal('hide')
                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                    }
                },
                complete: function() {
                    // $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
        })













        // Apply coupon
        $("body").on("click", "#coupon_apply", function(e) {
            e.preventDefault();
            let value = $("#apply_coupon").val();
            let fd = new FormData();
            var total = $("#net_amnt").val();
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('value', value);
            $.ajax({
                url: "{{ route('admin.check_coupon') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    if (result.data) {
                        var dis = result.data.discount
                        var total_dis = (dis / 100) * total;
                        var cal = total - ((dis / 100) * total);
                        $("#net_amnt").val(cal);

                        $("#total").text(parseFloat(cal).toFixed(2));
                        $("#total_discount").text(parseFloat(total_dis).toFixed(2))
                        $(".discount_value").val(parseFloat(total_dis).toFixed(2))
                        iziToast.success({
                            title: '',
                            message: 'Coupon applied Successfully',
                            position: 'topRight'
                        });
                        $('#coupon-hide').hide()
                        $('#coupon_selected').html(
                            '<input class="coupon_code" type="hidden" name="coupon_code" value="' +
                            value + '"><input class="coupon_code_percent" type="hidden" name="coupon_code_percent" value="' +
                            dis + '">')
                    } else {
                        $(".discount_value").val('0')
                        iziToast.error({
                            title: '',
                            message: 'Coupon is not vaild!',
                            position: 'topRight'
                        });
                        $('#coupon_selected').html('')
                    }
                },
                complete: function() {
                    // $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
        })

        // Apply redeem
        $("body").on("click", "#redeem", function(e) {
            e.preventDefault();
            let fd = new FormData();
            var total = $("#net_amnt").val();
            $('#redeem-points').hide()
            fd.append('_token', "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('website.check_redeem') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    var redeem_money = result.data.yen / result.data.points
                    var limit = result.data.limit

                    var net_amnt = $("#net_amnt").val();
                    var total = $("#total").text();
                    var redeem_value = $("#redeem_value").val();

                    var redeem_discount = redeem_value * redeem_money
                    if(redeem_discount > limit){
                       var re_discount = limit
                    }else{
                        var re_discount = redeem_discount
                    }

                    var discounted_total = net_amnt - re_discount

                    if(discounted_total < 0) {
                        var final_discounted_price = 0;
                    }else{
                        var final_discounted_price = discounted_total;
                    }

                    $("#net_amnt").val(parseFloat(final_discounted_price).toFixed(2));
                    $("#total").text(parseFloat(final_discounted_price).toFixed(2));

                    $("#points-redeemed").html(`<div class="clearfix">
                            <div class="float-start">
                                <p class="mb-0 small">Redeem points discount</p>
                            </div>
                            <div class="float-end">
                                <p class="fw-bold" id="red_dis">${parseFloat(re_discount).toFixed(2)}</p>
                            </div>
                        </div>`)

                    // console.log(redeem_money)
                    // if (result.data) {
                    //     var dis = result.data.discount
                    //     var total_dis = (dis / 100) * total;
                    //     var cal = total - ((dis / 100) * total);
                    //     $("#net_amnt").val(cal);

                    //     $("#total").text(parseFloat(cal).toFixed(2));
                    //     $("#total_discount").text(parseFloat(total_dis).toFixed(2))
                    //     $(".discount_value").val(parseFloat(total_dis).toFixed(2))
                    //     iziToast.success({
                    //         title: '',
                    //         message: 'Coupon applied Successfully',
                    //         position: 'topRight'
                    //     });
                    //     $('#coupon-hide').hide()
                    //     $('#coupon_selected').html(
                    //         '<input class="coupon_code" type="hidden" name="coupon_code" value="' +
                    //         value + '">')
                    // } else {
                    //     $(".discount_value").val('0')
                    //     iziToast.error({
                    //         title: '',
                    //         message: 'Coupon is not vaild!',
                    //         position: 'topRight'
                    //     });
                    //     $('#coupon_selected').html('')
                    // }
                },
                complete: function() {
                    // $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
        })

        // Combo Pack
        let newlimit = 10;

        $.fn.combo = function(newlimit) {
            $.ajax({
                type: "GET",
                data: {
                    "limit": newlimit,
                },
                url: "{{ route('admin.get_combo_pack') }}",
                beforeSend: function() {
                    $('.loaded').show();
                },
                success: function(data) {
                    let datas = '';
                    let load = '';
                    if (data.products.length > 0) {
                        $.each(data.products, function(i, val) {

                            var url = "{{ url('') }}" + val.image;
                            datas += '<div class="col-xl-4 col-lg-6 col-md-12 px-1">' +
                                '<div class="card card-menu mb-3">' +
                                '<div class="card-body">' +
                                '<p class="text-center fw-bold mt-3 mb-0">' + val.package_name +
                                '</p>' +
                                '<p class="text-center mb-0"><b><span><span class="text-success">¥' +
                                parseFloat(val.price).toFixed(2) +
                                '</b></span>&nbsp;&nbsp; <strike><span class="text-danger">¥' +
                                parseFloat(val.price).toFixed(2) + '</span></strike> <span></p>' +
                                '<div class="clearfix text-center m-3">' +
                                '<div class="float-start c-text">' +
                                '<a href="javascript:void(0);" data-id="' + val.id +
                                '" class="show_combo_detail">Detail</a>' +
                                '</div>' +
                                '<div class="float-end">' +
                                '<a class="p-2 btn-primary combo_add_to_cart" data-id="' + val.id +
                                '"><i class="fa fa-cart-shopping"></i> Add</a>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                        })
                        if (data.limit <= data.total) {
                            load += '<div class="page-pagination">' +
                                '<ul class="pagination justify-content-center">' +
                                '<button class="btn btn-primary load_more" data-load_more="' + data.limit +
                                '"><i class="fas fa-spinner fa-spin load_more_spin p-2"></i>Load More</button>' +
                                '</ul>' +
                                '</div>';
                        }
                    } else {

                    }
                    $('#combo_pack_list').html(datas);
                    $(".load_more").html(load);
                },
                complete: function() {
                    $('.loaded').hide();

                },
            })
        }
        $.fn.combo();

        // Show combo Pack detail
        $("body").on("click", ".show_combo_detail", function(e) {
            e.preventDefault()
            let combo_id = $(this).attr('data-id');
            let fd = new FormData();
            fd.append("_token", "{{ csrf_token() }}"),
                fd.append("combo_id", combo_id);
            $.ajax({
                url: "{{ route('website.get_combo_pack_detail') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loader').show();
                },
                success: function(result) {
                    let combo_data = '';
                    if (result.data.length > 0) {
                        $.each(result.data, function(i, val) {
                            var url = "{{ url('') }}" + val.product_img;
                            combo_data += '<div class="card" style="width: 10rem; ">';
                            combo_data += '<img src="' + url +
                                '" class="card-img-top" alt="...">';
                            combo_data += '<div class="card-body">';
                            combo_data += '<h5 class="card-title">' + val.product_name +
                                '</h5>';
                            combo_data += '</div>';
                            combo_data += '</div>';
                        })

                        $("#combo_pack_detail").html(combo_data)
                        $("#combo_detail").modal("toggle")
                    } else {

                    }
                },
                complete: function() {
                    $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
        })


        //Combo pack add to cart
        $("body").on("click", ".combo_add_to_cart", function(e) {
            e.preventDefault();
            let combo_id = $(this).attr('data-id');
            let fd = new FormData();
            var branch_id = {{ $branch_id }}
            var table_id = {{ $table_id }}
            fd.append('_token', "{{ csrf_token() }}");
            fd.append('combo_id', combo_id);
            fd.append('branch_id', branch_id);
            fd.append('table_id', table_id);

            $.ajax({
                url: "{{ route('admin.combo_pack_add_to_cart') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loader').show();
                },
                success: function(result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $.fn.sideCart();
                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $.fn.sideCart();
                    }

                },
                complete: function() {
                    $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            })
        })

        // Show Detail
        $("body").on("click", ".show_detail", function(e) {
            e.preventDefault();
            let combo_id = $(this).attr('data-id');
            let fd = new FormData();
            fd.append("_token", "{{ csrf_token() }}"),
                fd.append("combo_id", combo_id);
            $.ajax({
                url: "{{ route('website.get_combo_pack_detail') }}",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loader').show();
                },
                success: function(result) {
                    let combo_data = '';
                    if (result.data.length > 0) {
                        $.each(result.data, function(i, val) {
                            var url = "{{ url('') }}" + val.product_img;
                            combo_data += '<div class="card" style="width: 10rem; ">';
                            combo_data += '<img src="' + url +
                                '" class="card-img-top" alt="...">';
                            combo_data += '<div class="card-body">';
                            combo_data += '<h5 class="card-title">' + val.product_name +
                                '</h5>';
                            combo_data += '</div>';
                            combo_data += '</div>';
                        })

                        $("#combo_pack_detail").html(combo_data)
                        $("#combo_detail").modal("toggle")
                    } else {

                    }
                },
                complete: function() {
                    $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });

        })
        //    Cancel Order
        $("body").on("click", ".statuscancel", function(e) {
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
                content: 'Sure you want to cancel the order?',
                buttons: {
                    yes: function() {
                        $.ajax({
                                url: "{{ route('website.cancel_order') }}",
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

<script>
    $(document).ready(function() {
        var branch_id = {{ $branch_id }};
        var table_id = {{ $table_id }};
        
        $('#payNow').click(function() {
            // Show a custom confirmation toast
            iziToast.show({
                theme: 'dark',
                overlay: true,
                close: false,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                timeout: 500000,
                title: 'Confirmation',
                message: 'Are you sure you want to proceed with payment?',
                position: 'center',
                buttons: [
                    ['<button>Yes</button>', function(instance, toast) {
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        var fd = new FormData();
                        fd.append('branch_id', branch_id);
                        fd.append('table_id', table_id);
                        fd.append('_token', "{{ csrf_token() }}");
                        
                        $.ajax({
                            url: '{{ route('admin.payNow')}}', 
                            method: 'POST', 
                            processData: false,  // Prevent jQuery from processing data
                            contentType: false,  // Prevent jQuery from setting contentType
                            data: fd,
                            success: function(response) {
                                    if (response.status === 'true') {
                                        iziToast.success({
                                            title: 'Success',
                                            message: 'Payment successful!',
                                            position: 'topCenter',
                                            timeout: 2000
                                        });
                                        $.fn.sideCart();
                                        // Here you can further handle data if needed
                                        console.log('Payment data:', response.data);
                                    } else {
                                        console.error('Payment was not successful:', response.error);
                                        iziToast.error({
                                            title: 'Error',
                                            message: 'Payment failed!',
                                            position: 'topCenter',
                                            timeout: 2000
                                        });
                                    }
                                },
                            error: function(xhr, status, error) {
                                // Handle AJAX error
                                iziToast.error({
                                    title: 'Error',
                                    message: 'Failed to process payment.',
                                    position: 'topCenter',
                                    timeout: 2000
                                });
                            }
                        });
                    }, true], // true to close the toast
                    ['<button>No</button>', function(instance, toast) {
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        // Handle cancellation or further action if needed
                        iziToast.warning({
                            title: 'Canceled',
                            message: 'Payment canceled.',
                            position: 'topCenter',
                            timeout: 2000
                        });
                    }]
                ]
            });
        });
    });
</script>
<!-- <script>
    
    $(document).ready(function() {
        var branch_id = {{ $branch_id }};
        var table_id = {{ $table_id }};
        $('#cart_cancel').click(function() {
            iziToast.show({
                theme: 'dark',
                overlay: true,
                close: false,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                timeout: 500000,
                title: 'Confirmation',
                message: 'Are you sure you want to cancel the current order?',
                position: 'center',
                buttons: [
                    ['<button>Yes</button>', function(instance, toast) {
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        var fd = new FormData();
                        fd.append('branch_id', branch_id);
                        fd.append('table_id', table_id);
                        fd.append('_token', "{{ csrf_token() }}");
                        
                        $.ajax({
                            url: '{{ route('admin.cancel')}}', 
                            method: 'POST', 
                            processData: false,  // Prevent jQuery from processing data
                            contentType: false,  // Prevent jQuery from setting contentType
                            data: fd,
                            success: function(response) {
                                    if (response.status === 'true') {
                                        iziToast.success({
                                            title: 'Success',
                                            message: 'Order Cancel successful!',
                                            position: 'topCenter',
                                            timeout: 2000
                                        });

                                        $.fn.sideCart();
                                        // Here you can further handle data if needed
                                        console.log('Payment data:', response.data);
                                     } 
                                    else {
                                        console.error('Odrer Cancel was not successful:', response.error);
                                        iziToast.error({
                                            title: 'Error',
                                            message: 'Odrer Cancel was not successful!',
                                            position: 'topCenter',
                                            timeout: 2000
                                        });
                                    }
                                },
                            error: function(xhr, status, error) {
                                // Handle AJAX error
                                iziToast.error({
                                    title: 'Error',
                                    message: 'Failed to process order cancel.',
                                    position: 'topCenter',
                                    timeout: 2000
                                });
                            }
                        });
                    }, true], // true to close the toast
                    ['<button>No</button>', function(instance, toast) {
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        // Handle cancellation or further action if needed
                        iziToast.warning({
                            title: 'Canceled',
                            message: 'Order not canceled.',
                            position: 'topCenter',
                            timeout: 2000
                        });
                    }]
                ]
            });
        });
    });
</script> -->
<script>
$(document).ready(function() {
    var branch_id = {{ $branch_id ?? 'null' }};
    var table_id = {{ $table_id ?? 'null' }};

    $('#cart_cancel').click(function() {
        iziToast.show({
            theme: 'dark',
            overlay: true,
            close: false,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            timeout: 500000,
            title: 'Confirmation',
            message: 'Are you sure you want to cancel the current order?',
            position: 'center',
            buttons: [
                ['<button>Yes</button>', function(instance, toast) {
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    var fd = new FormData();
                    fd.append('branch_id', branch_id);
                    fd.append('table_id', table_id);
                    fd.append('_token', "{{ csrf_token() }}");

                    $.ajax({
                        url: '{{ route('admin.cancel') }}',
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: fd,
                        success: function(response) {
                            console.log('Response:', response); // Debug the response
                            if (response.status === 'true') {
                                iziToast.success({
                                    title: 'Success',
                                    message: response.message || 'Order canceled successfully!',
                                    position: 'topCenter',
                                    timeout: 2000
                                });
                                $.fn.sideCart();
                            } else {
                                iziToast.error({
                                    title: 'Error',
                                    message: response.message || 'Order cancellation failed!',
                                    position: 'topCenter',
                                    timeout: 2000
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error:', xhr);
                            iziToast.error({
                                title: 'Error',
                                message: 'Failed to process order cancellation.',
                                position: 'topCenter',
                                timeout: 2000
                            });
                        }
                    });
                }, true],
                ['<button>No</button>', function(instance, toast) {
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    iziToast.warning({
                        title: 'Canceled',
                        message: 'Order not canceled.',
                        position: 'topCenter',
                        timeout: 2000
                    });
                }]
            ]
        });
    });
});
</script>

@endsection
@endsection
