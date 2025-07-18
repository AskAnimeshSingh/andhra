@extends('admin.layout.layouts')
@section('extra_css')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pos-new.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/2c36a586e9.js" crossorigin="anonymous"></script>
@endsection
<style>
  /* Adjust the modal body height to enable scrolling */
  .modal-body {
    max-height: calc(100vh - 200px); /* Change the height value as needed */
    overflow-y: auto; /* Enable vertical scrolling */
  }
</style>
<style>
body{
    height: 100vh;
    position: relative;
    overflow: hidden;
}

   #posTableBody {
    max-height: 380px; /* Adjust the height as needed */
    overflow-y: scroll;
}

  .btn-1{
    background: #484848;
    color: white;
    font-size: 20px;
    font-weight: 600;
    padding: 10px 55px;
  }

  </style>
@section('main-content')
 
<div class="container-fluid">
  <div class="row d-flex justify-content-between">
    <div class="col-sm-8  pos-new">
      <button class="btn btn-success custom-btn" id="quickSaleBTN">Custom</button>
      <div class="row pos-add1 mt-2">
        <div class="col-sm-12" style="overflow-y:scroll; height:61vh;">
        <div id="QuickSaleData" style="display: flex; flex-wrap: wrap; gap: 10px;"></div>                     
          </div>
          <div class="pos-btn">
         <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  Payment
  </button>
  <ul class="dropdown-menu">     
    <li><a class="dropdown-item" href="#" id="payoutid">Pay Out</a></li>
    <li><a class="dropdown-item" href="#" id="receiveCustomer_id">Receive on Shop Account</a> </li>   
  </ul>
</div>
  <button class="btn btn-info  show_sale_id">{{ __('levels.search_sell')}}</button>
  <button class="btn btn-info" id="cancel-order">{{ __('sale.cancel') }}</button>
  </div>
        </div>
    </div>
    <div class="col-sm-4 item-new pos-item_cart">
<div class="pos-item-bg">
  <div class="d-flex justify-content-between p-2" style="background-color:#0a971f;">
     <!-- <i class="fa-solid fa-user-large"></i> &nbsp; Add Customer .... -->
     <button id="add_cust" class="customer_list" data-bs-toggle="modal" data-bs-target="#listcustomerModal">
                            <i class="fa-solid fa-user-large "></i> &nbsp; <span id="customer_name"></span>
                            <input type="hidden" id="customer_id_modal" name="customer_id">
                          </button>
                          {{-- <button id="add_cust" class="add_customer">
                            <i class="fa-solid fa-file-pen"></i>
                          </button> --}}
</div>
<div id="posTableBody">{{-- append code here  --}}</div>  
</div>
 

<div >
  <button class="btn btn-success w-100 show_product_list" id="show_product_list_id" type="submit" > <span style="font-size:25px;">{{ __('Add Product') }}</span></button>
</div>
<div class="p-2">
<div class="d-flex justify-content-between discount-btn">
  <p>Discount</p>
  <p>Sub Total</p>
</div>
<div class="d-flex justify-content-between discount-btn mt-3">
  <p id="total_discount_amount">0.00</p>
  <p id="total_subtotal">0.00</p>
</div>
</div>
<button class="btn btn-success w-100" id="payment"> <span style="font-size:25px;">Pay</span></button>
<div>

</div>
    </div>
  </div>
</div>

@php
    // $paym = \DB::table('payment_modemodules')->get();
@endphp

<div>
        <!-- add customers modal  -->
        <div class="modal bd-example-modal-lg" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header modal-primary">
                <h4 class="modal-title">{{ __('sale.add_customer') }}</h4>
                <button type="button" class="close customerclose" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="add_m_modal">
                <div class="modal-body">
                  <div class="form-row">
                    <div class="form-group col-12">
                      <label for="first_name">{{ __('sale.customer_first_name') }}</label>
                      <span class="text-danger">*</span>
                      <input name="first_name" type="text" class="form-control"> @error('first_name') <div class="invalid-feedback">
                        {{ $message }}
                      </div> @enderror
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12">
                      <label for="last_name">{{ __('sale.customer_last_name') }}</label>
                      {{-- <span class="text-danger">*</span> --}}
                      <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"> @error('last_name') <div class="invalid-feedback">
                        {{ $message }}
                      </div> @enderror
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12">
                      <label for="phone">{{ __('sale.customer_phone') }}</label>
                      {{-- <span class="text-danger">*</span> --}}
                      <input name="phone" type="number" class="form-control @error('phone') is-invalid @enderror"> @error('phone') <div class="invalid-feedback">
                        {{ $message }}
                      </div> @enderror
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12">
                      <label for="email">{{ __('email') }}</label>
                      {{-- <span class="text-danger">*</span> --}}
                      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"> @error('email') <div class="invalid-feedback">
                        {{ $message }}
                      </div> @enderror
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default pull-left customerclose" data-dismiss="modal">
                    {{ __('sale.close') }} </button>
                  <button type="submit" class="btn btn-primary"> {{ __('sale.add_customer') }} </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end customers modal here -->
      </div>

      <div>
        <!-- start payment modal  -->
        <div class="modal bd-example-modal-lg" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">{{ __('sale.payment') }}</h4>
                <button type="button" class="close closepayment" data-dismiss="modal" aria-hidden="true">
                  <i class="fa fa-times"></i>
                </button>
              </div>
              <div class="modal-body justify-content-between">
                <div class="row">
                  <div class="col-12">
                    <div class="font16">
                      <table class="table table-bordered table-condensed">
                        <tbody>
                          <tr>
                            <td width="25%" class="pos-table-total-css">
                              {{ __('sale.total_items') }}
                            </td>
                            <td width="25%" class="text-right">
                              <span id="item_count"></span>
                              {{-- {{ $totalItem }} ({{ $totalQty }}) --}}
                            </td>
                            <td width="25%" class="pos-table-total-css">
                              {{ __('sale.total_payable') }}
                            </td>
                            <td width="25%" class="text-right">
                              <input type="hidden" id="verfiAmt_id">
                              <span id="total_payable"></span>
                            </td>
                            <td width="25%" class="text-right">
                              <span id="total_discount"></span>
                            </td>
                            {{-- {{ ($totalAmount) }} --}}
                          </tr>
                          <tr>
                            <td class="pos-table-total-css">{{ __('sale.total_shop_balance') }}
                              <span><input type="checkbox" id="remanining_balance_selected" name="remanining_balance"></span>
                            </td>
                            <td class="text-right">
                              <span id="total_credit">0</span>
                            </td>
                            {{-- {{ ($customerBalance) }} --}} <td class="pos-table-total-css">{{ __('sale.total_paying') }}</td>
                            <td class="text-right">
                              <span id="total_paying"></span>
                            </td>
                            {{-- {{ ($cash_paying) }} --}}
                          </tr>
                        </tbody>
                      </table>
                      <div class="clearfix"></div>
                    </div>
                     
                    </div>
                     
                  </div>
                  <div class="row">
                  <div class="col-sm-12">
                    <div id="paymentbutton-groups-container">
                      <!-- Initial button group -->                       
                      <div class="btn-group" role="group" aria-label="Basic example" style="display: flex;">
                          <div class="form-group col">
                            <label for="payment_mode">{{ __('levels.payment_mode') }}</label>
                            <span class="text-danger">*</span>
                            <select class="form-control p-mode-select" name="p_mode[]" id="p_mode_type">
                              {{-- @foreach ($paym as $item)
                                  <option value="{{ $item->payment_mode }}">{{ $item->payment_mode }}</option>
                              @endforeach                             --}}
                            </select>              
                        </div>
                        <div class="form-group col">
                            <label for="customer_amount_reason">{{ __('levels.price') }}</label>
                            <span class="text-danger">*</span>
                            <input name="p_amount[]" id="p_amount_id" onkeypress="return isNumberDecimal(event)" type="text"  class="form-control customer-amount-input admininputvalue">
                        </div>
                        <div class="form-group col">
                            <label for="">Add / Remove</label>
                            <button class="form-control addpmode" data-payment-mode="1"> <i class="fa fa-plus" aria-hidden="true"></i> </button>
                            <!-- Add Remove button for this group -->
                            <button class="form-control removepmode" style="display: none;"> <i class="fa fa-minus" aria-hidden="true"></i> </button>
                        </div>
                         </div>
                    </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="note">{{ __('sale.note') }}</label>
                      <textarea id="note" name="description" class="pa form-control"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default pull-left closepayment" data-dismiss="modal">
                  {{ __('sale.close') }} </button>
                <button class="btn btn-primary" name="store" id="p_payment">{{ __('levels.submit') }}</button>
              </div>
            </div>
          </div>
        </div>
        <!-- end payment modal  -->
      </div>

      <div class="modal bd-example-modal" id="printOrderModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{ __('sale.print_order') }}</h4>
              <div>
                <button type="button" class="close closeprintorder" data-dismiss="modal" aria-hidden="true">
                  <i class="fa fa-times"></i>
                </button>
                <button type="button" class="close mr10" onclick="printDiv('print_order_body')">
                  <i class="fa fa-print"></i>
                </button>
              </div>
            </div>
            <div class="modal-body">
              <div id="print_order_body">
                <style>
                  .bb td,
                  .bb th {
                    border-bottom: 1px solid #DDD;
                    border-top: 1px solid #DDD;
                  }
                </style>
                <span class="text-center">
                  <h3></h3>
                  <h4>{{ __('sale.order') }}</h4>
                </span>              
              
                <div class="d-flex justify-content-between">
                  <div>
                    <h6>{{ __('sale.t') }}: <?= date('d M Y h:m A') ?> </h6>
                  </div>
                  <div>
                     right
                  </div>
             </div>
                
                <h6 id="customer_n"> {{ __('sale.c') }}:</h6>
                
                <table id="order-table" class="table table-condensed">
                  <thead>
                    <tr>
                      {{-- <th>#ID</th> --}}
                      <th>{{ __('levels.product') }}</th>
                      <th>{{ __('levels.price')}}</th>
                      <th>{{ __('levels.tax')}}</th>
                      <th>{{ __('levels.total_qty') }}</th>
                      <th>{{ __('levels.total_price') }} </th>
                      {{-- <th>{{ __('levels.action')}}</th> --}}
                    </tr>
                  </thead>
                  <tbody id="print_p_order" class="table table-condensed"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!--  add action error message modal  -->
       <div class="modal fade" id="actionError" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body">
              <div>{{ __('sale.please_add_product') }}</div>
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" aria-hidden="true" type="button" class="btn btn-sm btn-primary">{{ __('OK') }}</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end action error message here -->

      
      <!-- cancelOrder modal  -->
      <div class="modal fade" tabindex="-1" role="dialog" id="cancelOrder" aria-modal="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">{{ __('sale.cancel_order') }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">Ã—</span>
              </button>
            </div>
            <div class="modal-body">{{ __('sale.do_you_want_to_continue') }}</div>
            <div class="modal-footer">
              <a type="button" class="btn btn-danger btn-shadow" href="#" id="sale_cancel">{{ __('sale.yes') }}</a>
              {{-- {{ route('admin.pos') }} --}} <button type="button" data-dismiss="modal" class="btn btn-secondary" id="">{{ __('sale.cancel') }}</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end cancelOrder modal  -->

      <div class="modal bd-example-modal-lg" id="showInvoideModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Search Product</h5>
              <button type="button" class="close searchproductclose" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div style="overflow-x: auto;">
                  <table id="demand-list-admin" class="table display nowrap" style="width: 100%">
                    <thead>
                      <tr>
                        <th>Id #</th>
                        <th>{{ __('levels.product_name') }}</th>
                        <th>{{ __('levels.avl_stock') }}</th>
                        <th>{{ __('levels.price') }} </th>
                        <th>{{ __('levels.barcode')}}</th>
                        {{-- <th>{{ __('levels.refcode')}}</th> --}}

                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary searchproductclose" data-dismiss="modal">Close</button>
              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>



     
      {{-- For Show Hold Sales  --}}
      <div class="modal bd-example-modal-lg" id="showHoldInvoideModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">{{ __('levels.all_hold_sales') }}</h5>
              <button type="button" class="close showholdsales" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="showholdidtable" class="table display nowrap" style="width: 100%">
                <thead>
                  <tr>
                    <th>Id #</th>
                    <th>{{ __('levels.customer_name') }}</th>
                    <th>{{ __('levels.invoice_id') }}</th>
                    <th>{{ __('levels.total_qty') }}</th>
                    <th>{{ __('levels.total_price') }} </th>
                    <th>{{ __('levels.action') }}</th>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary showholdsales" data-dismiss="modal">Close</button>
              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>
     

      {{-- Modal for Change Qty --}}
      <div class="modal fade" id="qty_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{ __('levels.qty')}}</h5>
              <button type="button" class="close closeQty" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="enter_qty">{{ __('levels.enter_qty') }}</label>
                    <span class="text-danger">*</span>
                    <input type="hidden" name="product_id_list" value="" class="product_id_list">
                    <input type="hidden" name="product_price_list" value="" class="product_price_list">
                    <input name="enter_qty" id="enter_qty" type="text" onkeypress="return isNumber(event)" class="form-control"> @error('enter_qty') <div class="invalid-feedback">
                      {{ $message }}
                    </div> @enderror
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary closeQty" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary qty_modal_save" >Save changes</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Sell Modal  --}}
      <div class="modal fade" id="sell_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sell</h5>
              <button type="button" class="close closesellmodal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                  <div class="form-group col-12">
                    <input type="hidden" name="sell_modal_product_id_list" value="" class="sell_modal_product_id_list">
                    <input type="hidden" name="sell_modal_product_price_list" value="" class="sell_modal_product_price_list">
                    <label for="enter_selling_price">{{ __('levels.enter_selling_price') }}</label>
                    <span class="text-danger">*</span>
                    <input name="enter_selling_price" type="text" onkeypress="return isNumberDecimal(event)" class="form-control"> @error('enter_selling_price') <div class="invalid-feedback">
                      {{ $message }}
                    </div> @enderror
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary closesellmodal" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary sell_modal_price">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      {{-- modal for note  --}}
      <div class="modal fade" id="note_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Note</h5>
              <button type="button" class="close closeNoteModal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="enter_note">{{ __('levels.enter_note') }}</label>
                    <span class="text-danger">*</span>
                    <input name="enter_note" type="text" class="form-control"> @error('enter_note') <div class="invalid-feedback">
                      {{ $message }}
                    </div> @enderror
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary closeNoteModal" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      {{-- modal for discount  --}}
      <div class="modal fade" id="discount_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Discount</h5>
              <button type="button" class="close closeDiscount" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                <div class="form-group col-12">
                    <label for="enter_discount_reason">{{ __('levels.enter_discount_reason') }}</label>
                    <span class="text-danger">*</span>
                    <input name="enter_discount_reason" id="enter_discount_reason" type="text" class="form-control"> @error('enter_discount_reason') <div class="invalid-feedback">
                        {{ $message }}
                    </div> @enderror
                    </div>
                  <div class="form-group col-12">
                    <label for="enter_discount_amount">{{ __('levels.enter_discount_amount') }}</label>
                    <span class="text-danger">*</span>
                    <input name="enter_discount_amount" id="enter_discount_amount" type="text" onkeypress="return isNumberDecimal(event)" class="form-control"> @error('enter_discount_amount') <div class="invalid-feedback">
                      {{ $message }}
                    </div> @enderror
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary closeDiscount" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary updateDiscount">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      

      {{-- modal for discount  --}}
      <div class="modal fade" id="quickSaleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Search Product</h5>
              <button type="button" class="close searchproductclose" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Add QuickSale</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Remove QuickSale</button>
                </li>                
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><div class="container">
                  <div style="overflow-x: auto;">
                    <table id="productListQuickSale" class="table display nowrap" style="width: 100%">
                      <thead>
                        <tr>
                          <th>Id #</th>
                          <th>{{ __('levels.product_name') }}</th>
                          <th>{{ __('levels.avl_stock') }}</th>
                          <th>{{ __('levels.price') }} </th>
                          <th>{{ __('levels.barcode')}}</th>
                          {{-- <th>{{ __('levels.refcode')}}</th> --}}  
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div></div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><div class="container">
                  <div style="overflow-x: auto;">
                    <table id="removeQuickSale" class="table display nowrap" style="width: 100%">
                      <thead>
                        <tr>
                          <th>Id #</th>
                          <th>{{ __('levels.product_name') }}</th>
                          <th>{{ __('levels.avl_stock') }}</th>
                          <th>{{ __('levels.price') }} </th>
                          <th>{{ __('levels.barcode')}}</th>
                          {{-- <th>{{ __('levels.refcode')}}</th> --}}
  
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div></div>
                
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary searchproductclose" data-dismiss="modal">Close</button>
              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>

       {{-- modal for receiveCustomer  --}}
       <div class="modal fade" id="receiveCustomer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Receive on Shop Account</h5>
              <button type="button" class="close receiveCustomer" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
                <div class="form-row">
                  <div class="col-12">
                    <div class="form-group">
                        <label for="shop_id">{{ __('levels.shop_name') }}</label> <span class="text-danger">*</span>
                        {{-- <button type="click" class="form-control">{{ __('levels.customer_name') }}</button> --}}
                        <input type="hidden" name="" id="receive_customer_name">
                      
                        <a href="#" class="form-control receivedCustomerClick" id="customer_name_id">
                          <span id="cust_name">{{ __('levels.customer_name') }}</span>
                        </a>
                    </div>
                </div> 
                <div class="col-12">
                  <div class="form-group">
                      <label for="shop_id">{{ __('levels.remaining_balance') }}</label> <span class="text-danger">*</span>
                      {{-- <button type="click" class="form-control">{{ __('levels.customer_name') }}</button> --}}
                      <input type="text" class="form-control" name="" id='remainingbalid' readonly>
                  </div>
                </div>   

                
                <div class="form-group col-12">
                    <label for="enter_amount">{{ __('levels.enter_reason') }}</label>
                    <span class="text-danger">*</span>
                    <input name="customerReason" id="customer_amount_reason_id" type="text" class="form-control"> @error('customer_amount') <div class="invalid-feedback">
                        {{ $message }}
                    </div> @enderror
                </div>

                <div id="button-groups-container">
                  <!-- Initial button group -->
                  <div class="btn-group" role="group" aria-label="Basic example">
                      <div class="form-group col">
                          <label for="payment_mode">{{ __('levels.payment_mode') }}</label>
                          <span class="text-danger">*</span>
                          <select class="form-control payment-mode-select" name="payment_mode[]" id="payment_mode_type">
                            
                        
                        {{-- @foreach ($paym as $item)
                            @if ($item->id !== 2)
                                <option value="{{ $item->payment_mode }}">{{ $item->payment_mode }}</option>
                            @endif
                        @endforeach --}}
                                                
                          </select>              
                      </div>
                      <div class="form-group col">
                          <label for="customer_amount_reason">{{ __('levels.price') }}</label>
                          <span class="text-danger">*</span>
                          <input name="customer_amount_reason[]" id="customer_amount_id" onkeypress="return isNumberDecimal(event)" type="text"  class="form-control customer-amount-input">
                      </div>
                      <div class="form-group col">
                          <label for="">Add / Remove</label>
                          <button class="form-control addpaymentmode" data-payment-mode="1"> <i class="fa fa-plus" aria-hidden="true"></i> </button>
                          <!-- Add Remove button for this group -->
                          <button class="form-control removepaymentmode" style="display: none;"> <i class="fa fa-minus" aria-hidden="true"></i> </button>
                      </div>
                  </div>
              </div>
          
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary receiveCustomer" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary receiveCustomerAccount">Save changes</button>
            </div>
          </div>
        </div>
      </div>
       <!-- Modal -->
       <div class="modal fade" id="listcustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title fs-5" id="exampleModalLabel">{{ __('levels.shop_name')}}</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="ajextablecustomer" class="table display nowrap" style="width: 100%">
                <thead>
                  <tr class="customer_list_modal">
                    <th>ID</th>
                    <th>{{ __('levels.shop_user') }}</th>
                    <th>{{ __('levels.email') }}</th>
                    <th>{{ __('levels.phone') }}</th>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
{{-- modal for search Sell --}}
      <div class="modal fade" id="modalforsearchsell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title fs-5" id="exampleModalLabel">{{ __('levels.shop_name')}}</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @php
              // $shops = \DB::table('shop_logins')->get();
            @endphp
            <div class="modal-body">

              <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="shop_id">{{ __('levels.shop') }}</label> <span class="text-danger">*</span>
                            <select name="shop_id" id="shop_id"
                                class="form-control @error('shop_id') is-invalid red-border @enderror">
                                <option value="">{{ __('levels.select_shop') }}</option>
                                {{-- @if (!blank($shops))
                                    @foreach ($shops as $shop)
                                        <option value="{{ $shop->id }}">{{ $shop->first_name }}</option>
                                    @endforeach
                                @endif --}}
                            </select>
                            @error('shop_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                     
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>{{ __('levels.from_date') }}</label>
                            <input type="date" name="from_date" id="f_date" class="form-control datepicker">
                            @error('from_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>{{ __('levels.to_date') }}</label>
                            <input type="date" name="to_date" id="l_date" class="form-control datepicker">
                            @error('to_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                     
                    <div class="col-sm-12">
                        <label for="">&nbsp;</label>
                        <button class="btn btn-primary form-control" id="form_submit"
                            type="button">{{ __('levels.get_report') }}</button>
                    </div>
                   
                </div>
            </form>
            <br>
            <div class="table-responsive" style="display: contents">
              <table id="sales_report_table" class="table display nowrap">
                  <thead>
                      <tr>
                          <th>S.NO</th>
                          <th>{{ __('levels.invoice')}}</th>
                          <th>{{ __('levels.date') }}</th>
                          {{-- <th>{{ __('levels.unit_price_in_yuan') }}</th> --}}
                          <th>{{ __('levels.unit_price_in_rand') }}</th>
                          {{-- <th>{{ __('levels.stock_reference') }}</th> --}}
                          {{-- <th>{{ __('levels.description') }}</th> --}}
                          <th>{{ __('levels.qty') }}</th>
                      </tr>
                  </thead>
              </table>
          </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      {{-- modal for search sell end --}}
    {{-- modal for payoutid  --}}
    <div class="modal fade" id="payoutid_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pay Out</h5>
            <button type="button" class="close closepayout" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body">
              <div class="form-row">
              <div class="form-group col-12">
                  <label for="payout_discount_reason">{{ __('levels.reason') }}</label>
                  <span class="text-danger">*</span>
                  <input name="payout_discount_reason" id="payout_discount_reason_id" type="text" class="form-control"> @error('payout_discount_reason') <div class="invalid-feedback">
                      {{ $message }}
                  </div> @enderror
                  </div>

                {{-- <div class="form-group col-12">
                  <label for="payout_amount">{{ __('levels.enter_amount') }}</label>
                  <span class="text-danger">*</span>
                  <input name="payout_amount" id="payout_amount_id" type="text" onkeypress="return isNumberDecimal(event)" class="form-control"> @error('payout_amount') <div class="invalid-feedback">
                    {{ $message }}
                  </div> @enderror
                </div> --}}

                <div class="col-sm-12">
                  <div id="poutbutton-groups-container">
                    <!-- Initial button group -->
                     
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <div class="form-group col">
                          <label for="payment_mode">{{ __('levels.payment_mode') }}</label>
                          <span class="text-danger">*</span>
                          <select class="form-control pout-mode-select" name="pout_mode[]" id="pout_mode_type">
                            @php
                              // $paym = \DB::table('payment_modemodules')->get();
                            @endphp
                              {{-- @foreach ($paym as $item)
                              <option value="{{ $item->payment_mode}}">{{ $item->payment_mode}}</option>
                              @endforeach --}}
                          
                          </select>              
                      </div>
                      <div class="form-group col">
                          <label for="customer_amount_reason">{{ __('levels.price') }}</label>
                          <span class="text-danger">*</span>
                          <input name="pout_amount[]" id="pout_amount_id" onkeypress="return isNumberDecimal(event)" type="text"  class="form-control payout-amount-input">
                      </div>
                      <div class="form-group col">
                          <label for="">Add / Remove</label>
                          <button class="form-control addpoutmode" data-payment-mode="1"> <i class="fa fa-plus" aria-hidden="true"></i> </button>
                          <!-- Add Remove button for this group -->
                          <button class="form-control removepoutmode" style="display: none;"> <i class="fa fa-minus" aria-hidden="true"></i> </button>
                      </div>
                     </div>                     
                  </div>
                </div>
                
                <div class="form-group col-12">
                  <label for="payout_issued_to">{{ __('levels.issued_to') }}</label>
                  <span class="text-danger">*</span>
                  <input name="payout_issued_to" id="payout_issued_to_id" type="text" class="form-control"> @error('payout_issued_to') <div class="invalid-feedback">
                    {{ $message }}
                  </div> @enderror
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closepayout" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary payoutSave" id="payoutSave_id">Save changes</button>
          </div>
        </div>
      </div>
    

    
@endsection

@section('scripts')
 
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/modules/onscan.js/onscan.min.js') }}"></script> --}}

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/decimal.js/10.3.1/decimal.min.js"></script>

    <script>

        "use strict";
        @if ($errors->any())
            $('#depositModal').modal('show');
        @endif

        $(document).ready(function() {
            $('.select2').select2();
              $('.modal-backdrop').hide();
                          // Get the current date in the format yyyy-mm-dd
              var currentDate = new Date().toISOString().slice(0, 10);
                
              // Set the current date as the default value for the input field
              $('#l_date').val(currentDate);
              $('#f_date').val(currentDate);
            // $('[data-toggle="sidebar"]').trigger('click');
        });
         
    </script>

    <script>
        $(function() {
            $('.note').click(function(e){
                e.preventDefault()
                $('#noteCart').modal('show').attr('style', 'display: block; opacity:1')
            })
            
            $('body').on("submit", "#add_m_modal", function(e) {
                e.preventDefault();
                let fd = new FormData(this);
                fd.append('_token', "{{ csrf_token() }}");
                $.ajax({
                        url: "#",
                        type: 'POST',
                        data: fd,
                        dataType: "JSON",
                        contentType: false,
                        processData: false,
                    })
                    .done(function(result) {
                        if (result.status) {
                            window.location.reload();
                        } else {}
                    })
                    .fail(function(jqXHR, exception) {
                        console.log(jqXHR.responseText);
                    })

            })

        });
    </script>


    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('openModal', function() {
                // Emit an event to open the modal
                Livewire.emit('open-modal');
            });
        });

$(document).ready(function() {
// new code start

var sum = 0;
var sub_total = 0;
var TotalQtyProduct = 0;
var product_details = [];
var currentlyExpandedProduct = null;
$(function() {

  function addToCart(productId, newQty, totalPrice, response, loopPrice) {
  
  var sellingprice = 0;
  var html = '';
  
  // Check if the product with the same productId already exists
  var existingProduct = product_details.find(function(detail) {
    return detail.productId === productId;
  });
 
 
  if (existingProduct) {
    alert('Product already added!');
    return; // Stop adding the product
  } 
// Collapse the currently expanded product, if any
if (currentlyExpandedProduct) {
        $('#collapseOne_' + currentlyExpandedProduct).removeClass('show');
    }

    // Expand the newly added product
    $('#collapseOne_' + productId).addClass('show');

    // Update the currently expanded product ID
    currentlyExpandedProduct = productId;

  // Determine the selling price
  if (loopPrice && loopPrice.length > 0) {
    sellingprice = loopPrice;
  } else if (response.carts.length > 0) {
    sellingprice = response.carts[0].price;
  }


  var existingProductElement = $('.getproductid[value="' + productId + '"]').closest('.qiuck-sale2');
  

  if (existingProductElement.length > 0) {
    var productQtyElement = existingProductElement.find('.product_qty');
    var existingQty = parseInt(productQtyElement.text());
    var updatedQty = existingQty + 1; // Increment the quantity by 1
    var updatedTotalPrice = response.carts[0].price * updatedQty;

    productQtyElement.text(updatedQty);
    sum -= totalPrice; // Subtract the previous total price from the sum
    sum += updatedTotalPrice; // Add the updated total price to the sum

    var subTotal = updatedQty * response.carts[0].price;
    updateProductSubTotal(productId, subTotal); // Update the sub_total display
     // Update 'perform' variable based on changes in 'html'
    perform.find('td:nth-child(4)').text(updatedQty);
    perform.find('td:nth-child(5)').text(subTotal.toFixed(2));
  } else {
    var subTotal = newQty * sellingprice;
 
    updateProductSubTotal(productId, subTotal); // Update the sub_total display
 
    html += '<div class="accordion qiuck-sale2" id="accordionExample_'+productId+'">';
    html += '<div class="accordion-item">';
    html += '<h6 class="accordion-header" id="heading_'+productId+'">';
    html += '<button class="accordion-button headingOneClass" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_'+productId+'" aria-expanded="true" aria-controls="collapseOne"><p id="sale-text"> ' + response.carts[0].name + ' @ <span id="product_newPrice_' + productId + '"> ' + (Number(sellingprice) || 0).toFixed(2) + ' </span> X <span class="product_qty "  id="product_newQty_' + productId + '">' + newQty + ' </span> @  <span class="product_qty prd_sub_total" id="product_subTotal_' + productId + '"> </span> </p></h6>';
    html += '<div id="collapseOne_'+productId+'" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample_'+productId+'">';
    html += '<div class = "accordian-body">';
    html += '<div class="quick-design">';
    html += '<input type="hidden" value="' + productId + '" class="getproductid">';
    html += '</button>';     
    html += '<div class="sale-button">';
    html += '<button class="Qtymin" id="min">-</button>';
    html += '<button class="Qtypls" id="pls">+</button>';
    html += '</div>'; 
    html += '<div class="lower-btn">';
    html += '<button class="lw-btn" id="lw-btn" data-toggle="modal" data-productid="' + productId + '" data-productprice="' + response.carts[0].price + '" data-target="#qty_modal">Qty.</button>';
    html += '<button class="lw-btn" id="lw-btn" data-toggle="modal" data-productid="' + productId + '" data-productprice="' + response.carts[0].price + '" data-target="#sell_modal">Sell</button>';
    html += '<button class="lw-btn" id="lw-btn" data-toggle="modal" data-productid="' + productId + '" data-productprice="' + response.carts[0].price + '" data-target="#discount_modal">Discount</button>';
    html += '<button class="delete" id="delete">';
    html += '<i class="fa-regular fa-trash-can"></i>';
    html += '</button>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
 
    $('#posTableBody').append(html);
    var cartList = $('#posTableBody');
    cartList.scrollTop(cartList[0].scrollHeight);
    sum += subTotal; // Add the total price to the sum
 
    // Store product details
    var productDetail = {
      productId: productId,
      qty: newQty,
      price: response.carts[0].price,
      sub_total: subTotal
    };
    product_details.push(productDetail);
  }
  calculateSubtotal()

  // $('#total_subtotal').text(sum.toFixed(2));
}


// Initialize a variable to keep track of the currently expanded product
var currentlyExpandedProduct = null;

// Listen for click events on elements with the class "headingOneClass"
$(document).on('click', '.headingOneClass', function () {
    var productId = $(this).closest('.accordion-item').find('.getproductid').val();
    
    // Collapse the previously expanded product, if any
    if (currentlyExpandedProduct && currentlyExpandedProduct !== productId) {
        $('#collapseOne_' + currentlyExpandedProduct).removeClass('show');
    }

    // Toggle the visibility of the clicked element's content
    $('#collapseOne_' + productId).toggleClass('show');

    // Update the currently expanded product
    currentlyExpandedProduct = productId;
});



$('body').on('click', '.show_sale_p', function() {
  var hold_id = $(this).data('id');
  var cart_itemid = $("input[name='first_name[]']").map(function() {
    return $(this).val();
  }).get();

  var myarray = [];
  myarray.push(cart_itemid);

  // if ($.inArray(product_id, cart_itemid) === -1) {
  $.ajax({
    url: "#",
    method: "POST",
    data: {
      hold_id: hold_id
    },
    dataType: 'json',
    success: function(response) {
          var carts = response.carts; // Store the carts array in a separate variable
          var totalprice, productId; // Declare the variables outside the loop
          $.each(carts, function(key, val) {
            totalprice = val.price * val.qty; // Use the 'val' directly instead of 'response.carts[key]'
            productId = val.productId;
            var loopPrice = val.price;
            addToCart(productId, val.qty, totalprice, response, loopPrice);
          });
          $('#showholdidtable').DataTable().ajax.reload();
        }

  });
});

// Event delegation for "Qtymin" button
$(document).on('click', '.Qtymin', function() {
    var productElement = $(this).closest('.qiuck-sale2');
    var productId = productElement.find('.getproductid').val();
    var productQty = parseFloat($('#product_newQty_' + productId).text());

    // Decrease quantity by 1
    var newQty = productQty - 1;

    if (newQty <= 0) {
      // If quantity becomes zero or negative, remove the product from the list and the array
      var productPrice = parseFloat(productElement.find('#product_newPrice_' + productId).text());
      var productTotalPrice = productQty * productPrice;
      removeProduct(productId, productTotalPrice);
    } else {
      updateProductQty(productId, newQty);
    }
  });

  // Event delegation for "Qtypls" button
  $(document).on('click', '.Qtypls', function() {
    var productElement = $(this).closest('.qiuck-sale2');
    var productId = productElement.find('.getproductid').val();
    var productQty = parseFloat($('#product_newQty_' + productId).text());
    // Increase quantity by 1
    var newQty = productQty + 1;
    updateProductQty(productId, newQty);
  });

	function updateProductQty(productId, newQty) {
  var productPrice = parseFloat($('#product_newPrice_' + productId).text());
  var subTotal = newQty * productPrice;
  $('#product_newQty_' + productId).text(newQty);
 
  // Update the product_details array with the new quantity
  var productDetail = product_details.find(function(detail) {
    return detail.productId == productId;
  });

  if (productDetail) {
    
    productDetail.qty = newQty;
    productDetail.sub_total = subTotal;
  }

  updateProductSubTotal(productId, subTotal);
}


 // Function to update the price of a product
function updateProductPrice(productId, newPrice) {
  var productQty = parseFloat($('#product_newQty_' + productId).text());
  var subTotal = productQty * newPrice;
  $('#product_newPrice_' + productId).text(newPrice);

  // Update the product_details array with the new price
  var productDetail = product_details.find(function(detail) {
    return detail.productId == productId;
  });

  if (productDetail) {
    // Update the price and sub_total properties
    productDetail.price = newPrice;
    productDetail.sub_total = subTotal;
  }

  updateProductSubTotal(productId, subTotal);
}


  function updateProductSubTotal(productId, sub_total) {
    $('#product_subTotal_' + productId).text(sub_total.toFixed(2));
    calculateSubtotal()
  }
  function calculateSubtotal(){
      var str = 0;

      $('.prd_sub_total').each(function(){
          str += parseFloat($(this).text());
      })
      $('#total_subtotal').text(str.toFixed(2))
      $('#total_paying').text(str.toFixed(2))
  }

   
  function removeProduct(productId, price) {
  var productQty = parseFloat($('#product_newQty_' + productId).text());
  var productPrice = parseFloat($('#product_newPrice_' + productId).text());
  var productTotalPrice = productQty * productPrice;

  $('.getproductid[value="' + productId + '"]').closest('.qiuck-sale2').remove();
  sum -= productTotalPrice;

  // Remove the product from product_details array
  var productIndex = product_details.findIndex(function(detail) {
    return detail.productId == productId;
  });

  if (productIndex !== -1) {
    // Splice the product out of the array
    product_details.splice(productIndex, 1);
  }

  // Check if the product_details array is empty
  if (product_details.length === 0) {
    $('#total_discount_amount').text('0');
  }

  calculateSubtotal();
}

 

  function initializeDataTable() {
    $('#demand-list-admin').DataTable({
      "processing": false,
      pageLength: 25,
      "serverSide": true,
      'checkboxes': {
        'selectRow': true
      },
      "ajax": {
        url: "#",
        dataFilter: function(data) {
          var json = jQuery.parseJSON(data);
          json.recordsTotal = json.recordsTotal;
          json.recordsFiltered = json.recordsFiltered;
          json.data = json.data;
          return JSON.stringify(json); // return JSON string
        }
      },
      "order": [
        [0, 'desc']
      ],
      "columns": [
        { "targets": 0, "name": "id", 'searchable': true, 'orderable': true },
        { "targets": 1, "name": "name", 'searchable': true, 'orderable': true },
        { "targets": 2, "name": "unit_price", 'searchable': false, 'orderable': false },
        { "targets": 3, "name": "available_stock", 'searchable': false, 'orderable': false },
        { "targets": 4, "name": "barcode", 'searchable': true, 'orderable': true },
      ],
      "rowCallback": function(row, data) {
            $(row).css("cursor", "pointer");
            
            var avgStock = $(row).find("[data-avgstock]").data("avgstock");
            if (avgStock === 0) {
              $(row).css('background-color', 'yellow');
            }

            $(row).on("click", function() {
                    var dataId = $(row).find("[data-id]").data("id");
                    var productId = dataId;
                    
                    $.ajax({
                      url: "#",
                      method: "POST",
                      data: { productId: productId },
                      dataType: 'json',
                      success: function(response) {
                        var productId = response.carts[0].itemID;
                        var newQty = response.carts[0].qty;
                        var totalPrice = response.carts[0].price * newQty;

                        addToCart(productId, newQty, totalPrice, response);
                        updateProductQty(productId, newQty);
                        $('#showInvoideModal').hide();
                      },
                      error: function(xhr, status, error) {
                        // Handle error if necessary
                      }
                    });
                  });
          }
    });
  }

  $(document).on('click','.addQuickSale',function(){
  var productId =  $(this).attr("data-productId"); 
  var quickSale = 'quickSale';
   
  $.ajax({
            url: "#",
            method: "POST",
            data: { productId: productId , quickSale: quickSale},
            dataType: 'json',
            success: function(response) {
              var productId = response.carts[0].itemID;
              var newQty = response.carts[0].qty;
              var totalPrice = response.carts[0].price * newQty;
 
              addToCart(productId, newQty, totalPrice, response);
              updateProductQty(productId, newQty);
            },
            error: function(xhr, status, error) {
              // Handle error if necessary
            }
      });
});

  initializeDataTable();
  function disableScroll() {
    $('body').addClass('modal-open');
    $('body').css('overflow', 'hidden');
  }

  function enableScroll() {
    $('body').removeClass('modal-open');
    $('body').css('overflow', 'auto');
  }
   
// Event delegation for "Qty." button
$(document).on("click", ".lw-btn[data-target='#qty_modal']", function() {
  var productId = $(this).data("productid");
  $('.product_id_list').val(productId);
  var productPrice = $(this).data("productprice");
  $('.product_price_list').val(productPrice);
  disableScroll(); // Disable scrolling when the modal is opened
});

// Event delegation for "Sell" button
$(document).on("click", ".lw-btn[data-target='#sell_modal']", function() {
  var productId = $(this).data("productid");
  $('.sell_modal_product_id_list').val(productId);
  var productPrice = $(this).data("productprice");
  $('.sell_modal_product_price_list').val(productPrice);
  disableScroll(); // Disable scrolling when the modal is opened
});

// Event delegation for updating quantity in the modal
$(document).on("click", "#qty_modal .qty_modal_save", function() {
  var newQty = $("#qty_modal input[name='enter_qty']").val();
  var productId = $('.product_id_list').val();
  updateProductQty(productId, newQty);
  $("#qty_modal").hide();
  $('.modal-backdrop').hide();
  enableScroll(); // Enable scrolling when the modal is closed
});

// Event delegation for updating selling price in the modal
$(document).on("click", "#sell_modal .sell_modal_price", function() {
  var newPrice = $("#sell_modal input[name='enter_selling_price']").val();
  var productId = $('.sell_modal_product_id_list').val();
  updateProductPrice(productId, newPrice);
  $("#sell_modal").hide();
  $('.modal-backdrop').hide();
  enableScroll(); // Enable scrolling when the modal is closed
});

  
  // Event delegation for updating selling price in the modal
  $(document).on("click", "#sell_modal .sell_modal_price", function() {
    var newPrice = $("#sell_modal input[name='enter_selling_price']").val();
    var productId = $('.sell_modal_product_id_list').val();
    updateProductPrice(productId, newPrice);
    $("#sell_modal").hide();
    $('.modal-backdrop').hide();
    enableScroll(); // Enable scrolling when the modal is closed
  });

  // Event delegation for updating discount in the modal
  $(document).on("click", "#discount_modal .updateDiscount", function() {
    var discountPrice = $("#discount_modal input[name='enter_discount_reason']").val();
    var discountAmount = $("#discount_modal input[name='enter_discount_amount']").val();
    var productId = $('.sell_modal_product_id_list').val();
    $('#total_discount_amount').text(discountAmount);
    
   // applyDiscount(productId, discountPrice);
    $("#discount_modal").hide();
    $('.modal-backdrop').hide();
    enableScroll(); // Enable scrolling when the modal is closed
  });

  // Event delegation for removing discount in the modal
  $(document).on("click", "#discount_modal .removeDiscount", function() {
    var productId = $('.sell_modal_product_id_list').val();
    removeDiscount(productId);
    $("#discount_modal").hide();
    $('.modal-backdrop').hide();
    enableScroll(); // Enable scrolling when the modal is closed
  });

  // Event delegation for "Delete" button
  $(document).on('click', '.delete', function() {
    var productElement = $(this).closest('.qiuck-sale2');
    var productId = productElement.find('.getproductid').val();
    var productQty = parseFloat(productElement.find('.product_qty').text());
    var productPrice = parseFloat(productElement.find('#product_newPrice_' + productId).text());
    var productTotalPrice = productQty * productPrice;

    removeProduct(productId, productTotalPrice);
  });

  $('body').on('click', '#p_payment', function() {
    $("#p_payment").prop("disabled", true);
    var payment_mode = $('#payment_mode_id').val();
    var d_note = $('#note').val();
    var amount = $('#finalamount').val();
    var cust_name = $('#customer_id_modal').val();
    var enter_discount_amount = $('#enter_discount_amount').val();
    var enter_discount_reason = $('#enter_discount_reason').val();
    var verfiAmt = $('#verfiAmt_id').val();

 // Create arrays to store the data from the button groups
        var pTypes = [];
        var pAmount = [];

    // Loop through each button group
    $('.btn-group').each(function () {
        var pModeSelect = $(this).find('.p-mode-select');
        var pAmountInput = $(this).find('.customer-amount-input');

        // Push the values into the respective arrays
        pTypes.push(pModeSelect.val());
        pAmount.push(pAmountInput.val());
    });


    var dataToSend = {
      payment_mode: payment_mode,
      description: d_note, 
      customerId: cust_name,
      enter_discount_amount : enter_discount_amount,
      enter_discount_reason : enter_discount_reason,
      product_details: product_details,
      pTypes : pTypes,
      pAmount : pAmount,
      verfiAmt : verfiAmt,
    };

    // Remove null values from product_details
    dataToSend.product_details = dataToSend.product_details.filter(function(detail) {
      return detail !== null;
    });
   

    $.ajax({
      url: "#",
      method: "POST",
      data: dataToSend,
      dataType: 'json',
      success: function(response) {
         
          
        if (response.status === true) {
          // iziToast.success({
          //   title: 'Success',
          //   message: response.msg,
          //   position: 'topRight'
          // });
 
          printInvoiceFn(response);
          // setTimeout(function() {
          //     window.location.href = "#" + "?sale=" + encodeURIComponent(JSON.stringify(response.sale.id));
          // }, 3000);

        } else {
          iziToast.error({
            title: 'Error',
            message: response.msg,
            position: 'topRight'
          });
        
        }
      }
    });
  });


  function printInvoiceFn(data){

function formatDate(dateString) {
  const options = { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' };
  const date = new Date(dateString);
  return date.toLocaleString('en-US', options);
}

  // var date = new Date(data.payout.created_at);
// Check if 'data' is not null or undefined
if (data) {
  // Rest of your code here...
  console.log(data);
  // Example of accessing 'data.sale.sale_no' with optional chaining
  var invoiceNumber = data.sale?.sale_no || 'N/A';

  // Example of accessing 'data.shopname' with optional chaining
  var shopName = data?.shopname || 'Lite Smart';


  // Example of accessing 'data.customerdata.name' with optional chaining
  var customerfirstName = data.customerdata?.first_name || 'Shop Not Selected';
  var customerlastName = data.customerdata?.last_name || '';

  // Example of accessing 'data.customerdata.email' with optional chaining
  var customerEmail = data.customerdata?.email || ' ';

  // Example of accessing 'data.customerdata.phone' with optional chaining
  var customerPhone = data.customerdata?.phone || ' ';

  
  // var paymentMode = data.paymentMode || 'Cash';
  // var paymentModeAmount = data.paymentModeAmount || '0';

  // Rest of your code here...
} else {
  // Handle the case where 'data' is null or undefined
  console.error('Data is null or undefined.');
}
        // Create a new window or tab
        var printWindow = window.open('', '_blank', 'width=1024,height=600');


        // Add styles and content to the new window
        
        // Close the document and initiate printing
        printWindow.document.write(`<body><style> body{font-family:Arial,sans-serif;margin:20px}.invoice{border:1px solid #ccc;padding:10px;max-width:400px;margin:0 auto}.invoice-header{text-align:center}.invoice-details{margin-top:10px}.hardware-details{margin-top:20px}p{margin-top:-15px}.item-container{display:flex;justify-content:space-between}.right{text-align:right}.footer{text-align:center;margin-top:20px}</style>
                          <div class="invoice">
                              <div class="invoice-header">
                                  <h1>Smart Shop</h1>
                                  <p>#Invoice:`+ data.sale.sale_no +`</p>
                              </div>
                               
                              <div class="invoice-details">
                                  <h3>To</h3>
                                  <p><strong>Shop:</strong> `+ customerfirstName + ' ' + customerlastName +`</p>
                                  <p><strong>Email:</strong> ` + customerEmail + ` </p>
                                  <p><strong>Phone:</strong> `+ customerPhone  +`</p>
                                  <p>Date :`+ formatDate(data.sale.created_at) +`</p>
                              </div>

                              <div class="hardware-details">
                                  <h3>Items</h3>
                                  ${data.productdata.map(item => `
                                      <div class="item-container">
                                          <div class="left">
                                              <div>
                                                  <p><strong>${item.name}</strong></p>
                                                  <p>${item.quantity} # ${item.unit_price}</p>
                                              </div>
                                          </div>
                                          <div class="right">
                                              <p>R ${item.total_amount}</p>
                                          </div>
                                      </div>
                                      <div style="height: 2px; background-color: #e4e4e4;"></div>
                                    `).join('')}
                              </div>
                              <br>

                              <div class="hardware-details">

                                  <div class="item-container">
                                      <div class="left">
                                          <div>
                                              <p><strong>Sub Total:</strong></p>
                                
                                          </div>
                                      </div>
                                      <div class="right">
                                          <p>R  `+ data.sale.sub_total +`</p>
                                      </div>
                                  </div>
                                  <div class="item-container">
                                      <div class="left">
                                          <div>
                                              <p><strong>Discount Amount:</strong></p>
                                
                                          </div>
                                      </div>
                                      <div class="right">
                                        <p>R `+ ((data.sale.discount) ? (data.sale.discount) : '0') +`</p>
                                    </div>

                                  </div>

                                  <div class="item-container">
                                      <div class="left">
                                          <div>
                                              <p><strong>Total Amount:</strong></p>                                
                                          </div>
                                      </div>
                                      <div class="right">
                                          <p>R `+ data.sale.paid_amount+`</p>
                                      </div>
                                  </div>
                                  <div class="item-container">
                                      <div class="left">
                                          <div>
                                              <p><strong>Paid Amount:</strong></p>                                
                                          </div>
                                      </div>
                                      <div class="right">
                                          <p>R `+ data.sale.paid_amount+`</p>
                                      </div>
                                  </div>
                                    
                                  <div class="item-container">
                                      <div class="left">
                                          <div>
                                              <p><strong>Payment Mode:</strong></p>                                
                                          </div>
                                      </div>
                                      <div class="right">
                                        <p>`+ (data.paymentMode[0] ? (data.paymentMode[0].payment_type + ' : ' + data.paymentMode[0].payment_amount) : '') +`</p>  
                                        <p>`+ (data.paymentMode[1] ? (data.paymentMode[1].payment_type + ' : ' + data.paymentMode[1].payment_amount) : '') +`</p> 
                                        <p>`+ (data.paymentMode[2] ? (data.paymentMode[2].payment_type + ' : ' + data.paymentMode[2].payment_amount) : '') +`</p>
                                        <p>`+ (data.paymentMode[3] ? (data.paymentMode[3].payment_type + ' : ' + data.paymentMode[3].payment_amount) : '') +`</p>
                                    </div>

                                  </div> 
                              </div>

                              <!-- signatue  -->
                              <div class="footer">
                                  <h2 class="text-center">
                                      Signature</h2>
                              </div>
                              <div class="footer">
                                  <p>Thank you for your purchase!</p>
                              </div>
                          </div>
                      </body>`);
        
printWindow.document.close();
printWindow.print();
printWindow.close();
setTimeout(function() {
window.location.reload();   
}, 2000);

}

   

  $('#hold_sale').click(function() {
    var payment_mode = $('#payment_mode_id').val();
    var d_note = $('#note').val();
    var amount = $('#amount').val();
    var cust_name = $('#customer_id_modal').val();

    var dataToSend = {
      payment_mode: payment_mode,
      description: d_note,
      cash_amount: amount,
      customerId: cust_name,
      product_details: product_details
    };

    // Remove null values from product_details
    dataToSend.product_details = dataToSend.product_details.filter(function(detail) {
      return detail !== null;
    });

  // Make AJAX request to save the product list
  $.ajax({
      type: "POST",
      url: "#",
      data: dataToSend,
      success: function(response) {
           
          // Handle the success response
          if (response.status === true) {
              iziToast.success({
                  title: 'Success',
                  message: 'Product list saved successfully!',
                  position: 'topRight'
              });
          } else {
              iziToast.error({
                  title: 'Error',
                  message: 'Product list could not be saved.',
                  position: 'topRight'
              });
          }

          setTimeout(function() {
              window.location.reload();
          }, 3000);
      },
      error: function(xhr, status, error) {
          // Handle the error response
          console.error('Error saving the product list:', error);
          iziToast.error({
              title: 'Error',
              message: 'Error saving the product list. Please try again later.',
              position: 'topRight'
          });
      }
  });
      // }

  });
});

$('body').on('click', '#print_order', function() {
  
    var payment_mode = $('#payment_mode_id').val();
    var d_note = $('#note').val();
    var amount = $('#amount').val();
    var cust_name = $('#customer_id_modal').val();
    var enter_discount_amount = $('#enter_discount_amount').val();
    var enter_discount_reason = $('#enter_discount_reason').val();

    var dataToSend = {
      payment_mode: payment_mode,
      description: d_note,
      cash_amount: amount,
      customerId: cust_name,
      enter_discount_amount : enter_discount_amount,
      enter_discount_reason : enter_discount_reason,
      product_details: product_details
    };

    // Remove null values from product_details
    dataToSend.product_details = dataToSend.product_details.filter(function(detail) {
      return detail !== null;
    });
 
    var perform = '';
    // Clear the existing rows in the table before appending new data
    $('#print_p_order').empty();

    // Loop through the product details in dataToSend and append each row
    for (var i = 0; i < dataToSend.product_details.length; i++) {
      var product = dataToSend.product_details[i];
      var name = ''; // Set the product name
      var sellingprice = 0; // Set the selling price
      var newQty = product.qty;
      var subTotal = product.sub_total.toFixed(2);

      // You need to determine the name and selling price based on the product ID (product.productId)
      // Assuming you have the product name and selling price available in a separate data source or API response
      // Replace the 'product_id_to_name_map' and 'product_id_to_sellingprice_map' with your actual data sources.

      // if (dataToSend.product_details.hasOwnProperty(product.productId)) {
      //   name = dataToSend.product_details[product.productId];
      // }

      // if (product_id_to_sellingprice_map.hasOwnProperty(product.productId)) {
      //   sellingprice = product_id_to_sellingprice_map[product.productId];
      // }

      // Append the row to the table body
      perform += '<tr>';
      perform += '<td>' + name + '</td>';
      perform += '<td>' + sellingprice.toFixed(2) + '</td>';
      perform += '<td>0</td>';
      perform += '<td>' + newQty + '</td>';
      perform += '<td>' + subTotal + '</td>';
      perform += '</tr>';
    }

    $('#print_p_order').append(perform);
    $('#printOrderModal').show();
});


   // new code end
 
$('.closeQty').click(function() {
                $('#qty_modal').hide();
                $('.modal-backdrop').hide();
                $("#enter_qty").val('');
            });


            $('.closesellmodal').click(function(){
                $('#sell_modal').hide();
                $('.modal-backdrop').hide();
            });

            $('.closeDiscount').click(function(){
                $('#discount_modal').hide();
                $('.modal-backdrop').hide();
            });

            $('.closeNoteModal').click(function(){
                $('#note_modal').hide();
                $('.modal-backdrop').hide();
            });

            // Open modal when a button is clicked
            $('.show_sale_id').click(function() {
                 $('#modalforsearchsell').modal('show');
            });

            $('.add_customer').click(function() {
                $('#customerModal').show();
            });

            $('.customerclose').click(function() {
                $('#customerModal').hide();
            });

           $('.show_product_list').click(function(){
            $('#showInvoideModal').show();  
           })
            
            $('#payoutid').on("click" , function(){
              $('#payoutid_modal').modal('show');
            });

            $('#receiveCustomer_id').on("click", function(){
               $('#receiveCustomer_modal').modal('show');
            });
             
            // Close modal when the close button or outside the modal is clicked
            $('.searchproductclose').click(function() {
                $('#showInvoideModal').hide();
            });
          
            $('#payment').click(function() {
              // Calculate the total_paying and total quantity by iterating through the product_details array
              var total_paying = 0;
              var totalQtyProduct = 0;

              for (var i = 0; i < product_details.length; i++) {
                total_paying += parseFloat(product_details[i].sub_total);
                totalQtyProduct += parseFloat(product_details[i].qty);
              }

              // Get the discount amount entered by the user
              var discountAmount = parseFloat($('#enter_discount_amount').val()) || 0;

              // Subtract the discount amount from the total_paying
              total_paying -= discountAmount;

               
              
              // Update the total_paying and total quantity values in the modal
              $('#total_paying').text(total_paying.toFixed(2));
              $('#finalamount').val(total_paying.toFixed(2));              
              $('#item_count').text(totalQtyProduct); // Display the total quantity in the modal
              $('#total_payable').text(total_paying.toFixed(2));
              $('#verfiAmt_id').val(total_paying.toFixed(2));
              $('.admininputvalue').val(total_paying.toFixed(2));

              $('#paymentModal').modal('show'); // Use modal('show') instead of show() to display the modal
            });

            $('.closepayment').click(function() {
                $('#paymentModal').hide();
            });
            $('.closeprintorder').click(function() {
                $('#printOrderModal').hide();

            });


        });
        $(document).ready(function() {
            var dataTable = null; // Initialize the DataTable variable

            // Open modal when a button is clicked
            $('#show_holdsale_id').click(function() {
                $('#showHoldInvoideModal').show();

                // Load or reload the DataTable when the modal is opened
                if (dataTable === null) {
                    // Initialize the DataTable
                    dataTable = $('#showholdidtable').DataTable({
                        "processing": false,
                        pageLength: 10,
                        "serverSide": true,
                        'checkboxes': {
                            'selectRow': true
                        },
                        "ajax": {
                            url: "#",
                            dataFilter: function(data) {
                                var json = jQuery.parseJSON(data);
                                json.recordsTotal = json.recordsTotal;
                                json.recordsFiltered = json.recordsFiltered;
                                json.data = json.data;
                                return JSON.stringify(json); // return JSON string
                            }
                        },
                        "order": [
                            [0, 'desc']
                        ],
                        "columns": [{
                                "targets": 0,
                                "name": "id",
                                "searchable": true,
                                "orderable": true
                            },
                            {
                                "targets": 1,
                                "name": "customer_name",
                                "searchable": false,
                                "orderable": false
                            },
                            {
                                "targets": 2,
                                "name": "hold_id",
                                "searchable": true,
                                "orderable": true
                            },
                            {
                                "targets": 3,
                                "name": "available_stock",
                                "searchable": false,
                                "orderable": false
                            },
                            {
                                "targets": 4,
                                "name": "created_at",
                                "searchable": false,
                                "orderable": false
                            },
                            {
                                "targets": 5,
                                "name": "created_at",
                                "searchable": false,
                                "orderable": false
                            }
                        ]
                    });
                } else {
                    // Reload the DataTable if it's already initialized
                    dataTable.ajax.reload();
                }
            });

            // show customer list
          
var dataTable = null;

$('.customer_list').click(function() {
    $('#listcustomerModal').modal('show');
    
    // Destroy the existing DataTable instance if it exists
    if (dataTable !== null) {
        dataTable.destroy();
    }
    
     dataTable = $('#ajextablecustomer').DataTable({
            "processing": false,
            pageLength: 10,
            "serverSide": true,
            'checkboxes': {
                'selectRow': true
            },
            "ajax": {
                url: "#",
                dataFilter: function(data) {
                    var json = jQuery.parseJSON(data);
                    json.recordsTotal = json.recordsTotal;
                    json.recordsFiltered = json.recordsFiltered;
                    json.data = json.data;
                    return JSON.stringify(json); // return JSON string
                }
                
            },
            "order": [
                [0, 'desc']
            ],
            "columns": [
                {
                    "targets": 0,
                    "name": "id",
                    "searchable": true,
                    "orderable": true
                },
                {
                    "targets": 1,
                    "name": "customer_name",
                    "searchable": false,
                    "orderable": false
                },
                {
                    "targets": 2,
                    "name": "customer_name",
                    "searchable": false,
                    "orderable": false
                },
                {
                    "targets": 3,
                    "name": "hold_id",
                    "searchable": true,
                    "orderable": true
                }
            ],
            "rowCallback": function(row, data) {
            $(row).css("cursor", "pointer");
            $(row).on("click", function() {
            // Find the data-id attribute within the row's descendants
            var dataId = $(row).find("[data-id]").data("id");
            var balance = $(row).find("[data-balance]").data("balance");
            if (balance === '') {
              balance = 0;
            }
            $("#total_credit").text(balance);
            $("#customer_id_modal").val(dataId);
            $("#customer_name").text(data[1]);
            $('#listcustomerModal').modal('hide');
    });
}

        });
});


            // Close modal when the close button or outside the modal is clicked
            $('.showholdsales').click(function() {
                $('#showHoldInvoideModal').hide();
            });



        });
    </script>
    <script>
        document.getElementById("sale_cancel").addEventListener("click", function() {
            location.reload();
        });
        $(document).ready(function() {
        // Add click event handler to the cancel-order button
        $("#cancel-order").click(function() {
            // Reload the page
            $("#cancelOrder").modal("show");
            // location.reload();
        });
       

        });
  
      

    </script>

<script>

function printDiv(divId) {
    var printContents = document.getElementById(divId).innerHTML;

    var printWindow = window.open('', '_blank');
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Print Bill Order</title></head><body>' + printContents + '</body></html>');
    printWindow.document.close();

    printWindow.onload = function() {
        printWindow.print();
        printWindow.close();
    };
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function isNumberDecimal(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    var inputChar = String.fromCharCode(charCode);

    // Allow digits, backspace, and decimal point
    if (/^\d$/.test(inputChar) || charCode === 8 || inputChar === '.') {
        // Limit the input to two decimal places
        if (inputChar === '.' && evt.target.value.indexOf('.') !== -1) {
            // If the input already contains a decimal point, prevent adding another one
            return false;
        }
        if (evt.target.value.indexOf('.') !== -1 && /\.\d{2}$/.test(evt.target.value)) {
            // If there are already two decimal places, prevent further input
            return false;
        }
        return true;
    }

    return false;
}



$(function () {
    // Select the loader element
    var loader = $('.loader');
    // Define variables to hold the DataTable instances
    var productListQuickSaleTable;
    var removeQuickTable;

    // Function to initialize the DataTable for productListQuickSale
    $.fn.tableload = function (e) {
        // Check if the DataTable instance already exists and destroy it if it does
        if ($.fn.dataTable.isDataTable('#productListQuickSale')) {
            $('#productListQuickSale').DataTable().destroy();
        }

       productListQuickSaleTable = $('#productListQuickSale').DataTable({
            "processing": false,
            pageLength: 25,
            "serverSide": true,
            'checkboxes': {
                'selectRow': true
            },
            "ajax": {
                url: "#",
                dataFilter: function (data) {
                    var json = jQuery.parseJSON(data);
                    json.recordsTotal = json.recordsTotal;
                    json.recordsFiltered = json.recordsFiltered;
                    json.data = json.data;
                    return JSON.stringify(json); // return JSON string
                },
                // Show the loader before sending the request
                beforeSend: function () {
                    loader.show();
                },
                // Hide the loader when the request is complete
                complete: function () {
                    loader.hide();
                }
            },
            "order": [[0, 'desc']],
            "columns": [
                { "targets": 0, "name": "id", 'searchable': true, 'orderable': true },
                { "targets": 1, "name": "name", 'searchable': true, 'orderable': true },
                { "targets": 2, "name": "unit_price", 'searchable': false, 'orderable': false },
                { "targets": 3, "name": "available_stock", 'searchable': false, 'orderable': false },
                { "targets": 4, "name": "barcode", 'searchable': true, 'orderable': true },
            ],

            "rowCallback": function (row, data) {
                $(row).css("cursor", "pointer");
                $(row).on("click", function () {
                    var dataId = $(row).find("[data-id]").data("id");                  
                    var prodiD = $(row).find("[data-productid]").data("productid");
                    var productId = prodiD;
                    
                    $.ajax({
                        url: "#",
                        method: "POST",
                        data: { productId: productId },
                        dataType: 'json',
                        success: function (response) {
                            // Handle the success response
                            if (response.status === true) {
                                iziToast.success({
                                    title: 'Success',
                                    message: response.msg,
                                    position: 'topRight'
                                });

                                // Reload the DataTable
                                productListQuickSaleTable.ajax.reload(null, false);
                                
                                $.fn.getQuick();
                                
                                $('#quickSaleModal').modal('hide');
                            } else {
                                iziToast.error({
                                    title: 'Error',
                                    message: response.msg,
                                    position: 'topRight'
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            // Handle error if necessary
                        }
                    });
                });
            }
        });
    }

    // Function to initialize the DataTable for removeQuick
    $.fn.removeQuick = function (e) {
        // Check if the DataTable instance already exists and destroy it if it does
        if ($.fn.dataTable.isDataTable('#removeQuickSale')) {
            $('#removeQuickSale').DataTable().destroy();
        }

         removeQuickTable = $('#removeQuickSale').DataTable(
            {
                "processing": false,
                pageLength: 25,
                "serverSide": true,
                'checkboxes': {
                    'selectRow': true
                },
                "ajax": {
                    url: "#",
                    dataFilter: function (data) {
                        var json = jQuery.parseJSON(data);
                        json.recordsTotal = json.recordsTotal;
                        json.recordsFiltered = json.recordsFiltered;
                        json.data = json.data;
                        return JSON.stringify(json); // return JSON string
                    }
                },
                "order": [[0, 'desc']],
                "columns": [
                    { "targets": 0, "name": "id", 'searchable': true, 'orderable': true },
                    { "targets": 1, "name": "name", 'searchable': true, 'orderable': true },
                    { "targets": 2, "name": "unit_price", 'searchable': false, 'orderable': false },
                    { "targets": 3, "name": "available_stock", 'searchable': false, 'orderable': false },
                    { "targets": 4, "name": "barcode", 'searchable': true, 'orderable': true },     
                ],
                "rowCallback": function(row, data) {
                    $(row).css("cursor", "pointer");
                    $(row).on("click", function() {
                        var dataId = $(row).find("[data-id]").data("id");
                        var productId = dataId;
                        
                        $.ajax({
                            url: "#",
                            method: "POST",
                            data: { productId: productId },
                            dataType: 'json',
                            success: function(response) {                              
                                // Handle the success response
                                if (response.status === true) {
                                    iziToast.success({
                                        title: 'Success',
                                        message: response.msg,
                                        position: 'topRight'
                                    });
                                    
                                    // Reload the DataTable
                                    removeQuickTable.ajax.reload(null, false);
                                    $.fn.getQuick();                         

                                } else {
                                    iziToast.error({
                                        title: 'Error',
                                        message: response.msg,
                                        position: 'topRight'
                                    });
                                }                             
                            },
                            error: function(xhr, status, error) {
                                // Handle error if necessary
                            }
                        });
                    });
                }
            });
    }

    // Function to call both tableload and removeQuick
    function initializeTables() {
        $.fn.tableload();
        $.fn.removeQuick();
    }

    // Call the initializeTables function to initialize both DataTables
    initializeTables();

    // Bind the function to the click event of #quickSaleBTN
    $('#quickSaleBTN').click(function () {
        initializeTables(); // Call both functions when the button is clicked
        $('#quickSaleModal').modal('show');
    });
});


$.fn.getQuick = function(e) {
    $.ajax({
        type: "GET",
        url: "#",
        success: function(data) {
          // console.log(data.saleData.length);            
            let load = '';

            if (data.saleData.length > 0) {
                
                $.each(data.saleData, function(index, value) {
                  
                  var productId = value.product_id;
                  
                    // if (value) {
                        load +=    '<button class="btn-1 addQuickSale" style="font-size: 12px;" data-productId="'+productId+'"> '+ value.name +' </button>';                                
                        //  }  

                        });
                    } else {
                        console.log('error');
                    }

                    $("#QuickSaleData").html(load);
                },
                complete: function() {},
            })
        }
$.fn.getQuick();


$('.payoutSave').click(function(e){
  e.preventDefault();
  $("#payoutSave_id").prop("disabled", true);
      var payout_discount_reason = $('#payout_discount_reason_id').val();
      var payout_amount = $('#payout_amount_id').val();
      var payout_issued_to = $('#payout_issued_to_id').val(); 
      
      // Create arrays to store the data from the button groups
      var poutTypes = [];
      var poutAmount = [];

    // Loop through each button group
    $('.btn-group').each(function () {
        var poutModeSelect = $(this).find('.pout-mode-select'); 
        var poutAmountInput = $(this).find('.payout-amount-input');

        // Push the values into the respective arrays
        poutTypes.push(poutModeSelect.val());
        poutAmount.push(poutAmountInput.val());
    });


      $.ajax({
      url: "#",
      method: "POST",
      data: { payout_discount_reason : payout_discount_reason, 
              payout_amount : payout_amount , 
              payout_issued_to : payout_issued_to,
              poutTypes : poutTypes,
              poutAmount : poutAmount
            },
      dataType: 'json',
      success: function(response) {
         
        if (response.status === true) {
                    
          var date = new Date(response.payout.created_at);                 
          var options = {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            hour12: true, // Use 12-hour format
          };

          var formattedDate = date.toLocaleString('en-US', options);

           // Create a new window or tab
           var printWindow = window.open('', '_blank', 'width=1024,height=600');

          // Add styles and content to the new window
          // printWindow.document.write('<html><head><title>Invoice</title></head><body>');
          printWindow.document.write(`<body>
<style> body{font-family:Arial,sans-serif;margin:20px}.invoice{border:1px solid #ccc;padding:10px;max-width:400px;margin:0 auto}.invoice-header{text-align:center}.invoice-details{margin-top:10px}.hardware-details{margin-top:20px}p{margin-top:-15px}.item-container{display:flex;justify-content:space-between}.right{text-align:right}.footer{text-align:center;margin-top:20px}</style>
    <div class="invoice">
        <div class="invoice-header">
            <h1>`+ response.shopname +`</h1>
            <p>#Invoice: `+ response.payout.invoice_number +`</p>
        </div>
        <div class="invoice-details">
                <p><strong>Counter Person Name:</strong>  `+ response.shoppersonname +`</p>
                <p><strong>Phone :</strong> `+ response.shopPhone +` </p>
                <p><strong>Addrss :</strong>`+ response.shopAddress+ `</p>                                          
        </div>
        <div class="footer">
        <h3><strong>Payout Receipt</strong></h3>
        <p>`+ formattedDate +`</p>  
        </div>
        <div class="hardware-details">
             
             <div class="item-container">
                <div class="left">
                    <div>
                        <p><strong>Amount:</strong></p>
           
                    </div>
                </div>
                <div class="right">
                    <p>R `+ response.payout.payout_amount +` </p>
                </div>
            </div>
            <div class="item-container">
                <div class="left">
                    <div>
                        <p><strong>Issue to:</strong></p>
           
                    </div>
                </div>
                <div class="right">
                    <p> `+ response.payout.payout_issued_to +` </p>
                </div>
            </div>
            <br>
            <div class="item-container">
                <div class="left">
                    <div>
                        <p><strong>Note:</strong></p>
           
                    </div>
                </div>
                <div class="right">
                    <p>`+ response.payout.payout_discount_reason+`</p>
                </div>
            </div>
        </div>
        <br>

        <div class="hardware-details">

            <div class="item-container">
                <div class="left">
                    <div>
                        <p><strong>Payment Mode:</strong></p>
           
                    </div>
                </div>
                <div class="right">
                    <p>`+ response.paymentMethod +`</p>
                </div>
            </div> 
                    
        </div>

        <!-- signatue  -->
        <div class="footer">
            <h2 class="text-center">
                Signature</h2>
        </div>
        <div class="footer">
            <p>Thank you for your purchase!</p>
        </div>
    </div>
</body>`);
          

          // Close the document and initiate printing
          printWindow.document.close();
          printWindow.print();
          printWindow.close();
          $('#payoutid_modal').modal('hide');

          setTimeout(function(){
            location.reload(true);
          }, 2000);
          
        } else {
          iziToast.error({
            title: 'Error',
            message: response.msg, // Display the error message from the controller
            position: 'topRight'
          });
        }
      }

    });
});

var dataTable = null;
$('.receivedCustomerClick').click(function() {
   
   $('#listcustomerModal').modal('show');
     if (dataTable === null) {
         dataTable = $('#ajextablecustomer').DataTable({
             "processing": false,
             pageLength: 10,
             "serverSide": true,
             'checkboxes': {
                 'selectRow': true
             },
             "ajax": {
                 url: "#",
                 dataFilter: function(data) {
                     var json = jQuery.parseJSON(data);
                     json.recordsTotal = json.recordsTotal;
                     json.recordsFiltered = json.recordsFiltered;
                     json.data = json.data;
                     return JSON.stringify(json); // return JSON string
                 }
             },
             "order": [
                 [0, 'desc']
             ],
             "columns": [
                 {
                     "targets": 0,
                     "name": "id",
                     "searchable": true,
                     "orderable": true
                 },
                 {
                     "targets": 1,
                     "name": "customer_name",
                     "searchable": false,
                     "orderable": false
                 },
                 {
                     "targets": 2,
                     "name": "customer_name",
                     "searchable": false,
                     "orderable": false
                 },
                 {
                     "targets": 3,
                     "name": "hold_id",
                     "searchable": true,
                     "orderable": true
                 }
             ],
             "rowCallback": function(row, data) {
                 
             $(row).css("cursor", "pointer");
             $(row).on("click", function() {
             // Find the data-id attribute within the row's descendants
             var dataId = $(row).find("[data-id]").data("id");
             var remaingbalance = $(row).find("[data-balance]").data("balance");
             $("#remainingbalid").val(remaingbalance);
            
             $("#receive_customer_name").val(dataId);
             $("#customer_name_id").text(data[1]);
             $('#listcustomerModal').modal('hide');
     });
 }
 
         });
     } else {
         dataTable.ajax.reload();
     }
 });


 // jquery function to use shop payment
 $('.receiveCustomerAccount').on('click',function(e){
      e.preventDefault();
      $(".receiveCustomerAccount").prop("disabled", true);

        var receiveCustomer = $('#receive_customer_name').val();      
        var customerReason = $('#customer_amount_reason_id').val(); 
        var remainingbal = $('#remainingbalid').val();

        // Create arrays to store the data from the button groups
        var paymentTypes = [];
        var customerAmount = [];

    // Loop through each button group
    $('.btn-group').each(function () {
        var paymentModeSelect = $(this).find('.payment-mode-select');
        var customerAmountInput = $(this).find('.customer-amount-input');

        // Push the values into the respective arrays
        paymentTypes.push(paymentModeSelect.val());
        customerAmount.push(customerAmountInput.val());
    });

      $.ajax({
      url: "#",
      method: "POST",
      data: {  
            receiveCustomer: receiveCustomer,
            customerAmount: customerAmount,
            customerReason: customerReason,
            remainingbal: remainingbal,
            paymentTypes: paymentTypes, // Send payment types as an array
            customerAmount: customerAmount // Send customer amounts as an array
          },
      dataType: 'json',
      success: function(response) {
        
        if (response.status === true) {
          // iziToast.success({
          //   title: 'Success',
          //   message: response.msg,
          //   position: 'topRight'
          // });
         
          var date = new Date(response.paymentLog.created_at);
                                  
          var options = {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            hour12: true, // Use 12-hour format
          };

          var formattedDate = date.toLocaleString('en-US', options);
           // Create a new window or tab
           var printWindow = window.open('', '_blank', 'width=1024,height=600');

          // Add styles and content to the new window
          // printWindow.document.write('<html><head><title>Invoice</title></head><body>');
          printWindow.document.write(`<body><style>body{font-family:Arial,sans-serif;margin:20px}.invoice{border:1px solid #ccc;padding:10px;max-width:400px;margin:0 auto}.invoice-header{text-align:center}.invoice-details{margin-top:10px}.hardware-details{margin-top:20px}p{margin-top:-15px}.item-container{display:flex;justify-content:space-between}.right{text-align:right}.footer{text-align:center;margin-top:20px}</style>
    <div class="invoice">
        <div class="invoice-header">
            <h1>`+ response.shopname +`</h1>
            
            <p>#Invoice: `+ response.paymentLog.invoice_number +`</p>
        </div>
        <div class="invoice-details">
                <p><strong>Counter Person Name:</strong>  `+ response.counterperson +`</p>
                <p><strong>Phone :</strong> `+ response.counterPhone +` </p>
                <p><strong>Addrss :</strong>`+ response.counteraddress+ `</p>                                          
        </div>
        <div class="footer">
        <h3><strong>Payout Receipt</strong></h3>
        <p>`+ formattedDate +`</p>  
        </div>
        <br>
        <div class="invoice-details">
    <p><strong>Customer :</strong> `+ response.user.first_name + (response.user.last_name ? ' ' + response.user.last_name : '') +`</p>
    <p><strong>Email :</strong> `+ (response.user.email ? ' ' + response.user.email : '') +` </p>
    <p><strong>Phone :</strong> `+ (response.user.phone ? ' ' + response.user.phone : '') +`</p>
</div>

        <br>
        <div class="hardware-details">
             
             <div class="item-container">
                <div class="left">
                    <div>
                        <p><strong>Amount:</strong></p>
                    </div>
                </div>
                <div class="right">
                    <p>R ` + response.paymentLog.amount +` </p>
                </div>
            </div>
             
             
        </div>
        <br>

        <div class="hardware-details">

            <div class="item-container">
                <div class="left">
                    <div>
                        <p><strong>Payment Mode:</strong></p>
           
                    </div>
                </div>
                <div class="right">
                    <p>` + response.paymentMethod +`</p>
                </div>
            </div> 

            <div class="item-container">
                <div class="left">
                    <div>
                        <p><strong>Note:</strong></p>
           
                    </div>
                </div>
                <div class="right">
                    <p>` + response.paymentLog.reason +`</p>
                </div>
            </div> 
                       
        </div>

        <!-- signatue  -->
        <div class="footer">
            <h2 class="text-center">
                Signature</h2>
        </div>
        <div class="footer">
            <p>Thank you for your purchase!</p>
        </div>
    </div>
</body>`);
          

          // Close the document and initiate printing
          printWindow.document.close();
          printWindow.print();
          printWindow.close();
          $('#receiveCustomer_modal').modal('hide');
          setTimeout(function(){
              location.reload(true);
            }, 1000);
        } else {
          iziToast.error({
            title: 'Error',
            message: response.msg, // Display the error message from the controller
            position: 'topRight'
          });
        }
      }

    });
      
    });

</script>
<script>
  $(document).ready(function() {
            // Add new button group
            $("#button-groups-container").on("click", ".addpaymentmode", function() {
                var paymentModeSelect = $(this).closest(".btn-group").find(".payment-mode-select");
                var selectedValue = paymentModeSelect.val();

                var newButtonGroup = $("#button-groups-container .btn-group").first().clone();
                newButtonGroup.find("input").val(""); // Clear input values
                newButtonGroup.find(".addpaymentmode").hide();
                newButtonGroup.find(".removepaymentmode").show();
                $("#button-groups-container").append(newButtonGroup);
            });

            // Remove button group
            $("#button-groups-container").on("click", ".removepaymentmode", function() {
                if ($("#button-groups-container .btn-group").length > 1) {
                    $(this).closest(".btn-group").remove();
                } else {
                    // If only one group is left, hide the remove button
                    $(this).hide();
                }
            });


            
            $("#paymentbutton-groups-container").on("click", ".addpmode", function() {
                var pModeSelect = $(this).closest(".btn-group").find(".p-mode-select");
                var selectedValue = pModeSelect.val();

                var newButtonGroup = $("#paymentbutton-groups-container .btn-group").first().clone();
                newButtonGroup.find("input").val(""); // Clear input values
                newButtonGroup.find(".addpmode").hide();
                newButtonGroup.find(".removepmode").show();
                $("#paymentbutton-groups-container").append(newButtonGroup);
            });

            // Remove button group
            $("#paymentbutton-groups-container").on("click", ".removepmode", function() {
                if ($("#paymentbutton-groups-container .btn-group").length > 1) {
                    $(this).closest(".btn-group").remove();
                } else {
                    // If only one group is left, hide the remove button
                    $(this).hide();
                }
            });

            

            $("#poutbutton-groups-container").on("click", ".addpoutmode", function() {

                var poutModeSelect = $(this).closest(".btn-group").find(".pout-mode-select");
                var selectedValue = poutModeSelect.val();

                var newButtonGroup = $("#poutbutton-groups-container .btn-group").first().clone();
                newButtonGroup.find("input").val(""); // Clear input values
                newButtonGroup.find(".addpoutmode").hide();
                newButtonGroup.find(".removepoutmode").show();
                $("#poutbutton-groups-container").append(newButtonGroup);

            });

            // Remove button group
            $("#poutbutton-groups-container").on("click", ".removepoutmode", function() {
                if ($("#poutbutton-groups-container .btn-group").length > 1) {
                    $(this).closest(".btn-group").remove();
                } else {
                    // If only one group is left, hide the remove button
                    $(this).hide();
                }
            });


    $('#form_submit').on('click', function(e) {
        e.preventDefault();
        
        var shopId = $('#shop_id').val();
        var fDate = $('#f_date').val();
        var lDate = $('#l_date').val();
        var categoryID = $('#category_id').val();
        var referenceID = $('#reference_id').val();
        
        $.fn.tableload(shopId, fDate, lDate, categoryID,referenceID);
    });

    $.fn.tableload = function(shopId = null, fDate = null, lDate = null, categoryID = null , referenceID = null) {
        var data = new Array();
        data.push({
            'f_date': fDate
        });
        data.push({
            'l_date': lDate
        });
        data.push({
            'shopId': shopId
        });
        data.push({
            'categoryID': categoryID
        });
        data.push({
            'referenceID' : referenceID
        })
        
        $('#sales_report_table').dataTable({
            "processing": false,
            "pageLength": 25,
            "serverSide": true,
            "bDestroy": true,
            'checkboxes': {
                'selectRow': true
            },
            "ajax": {
                url: "#",
                "type": "POST",
                "data": function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.data = data;
                },
                dataFilter: function(data) {
                    var json = jQuery.parseJSON(data);
                    json.recordsTotal = json.recordsTotal;
                    json.recordsFiltered = json.recordsFiltered;
                    json.data = json.data;
                    return JSON.stringify(json); // return JSON string
                }
            },
            "order": [
                [0, 'desc']
            ],
            "columns": [{
                    "targets": 0,
                    "name": "id",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 1,
                    "name": "sale_no",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 2,
                    "name": "date",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 3,
                    "name": "categories",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 4,
                    "name": "barcode",
                    'searchable': true,
                    'orderable': true
                }
              
            ]
        });
    }


        });

$(document).ready(function() {
    
    $('#remanining_balance_selected').on('click', function() {
        var isChecked = $(this).prop('checked'); // Check if checkbox is checked
        var oldAmount = parseFloat($('#total_paying').text());// Store the initial amount
    
        if (isChecked) {
            var totalremaining = parseFloat($('#total_credit').text());
            var sumQ = oldAmount + totalremaining;         
            $('.admininputvalue').val(sumQ);
        } else {
            $('.admininputvalue').val(oldAmount); // Revert to the initial amount
        }
    });
});
</script>
@endsection