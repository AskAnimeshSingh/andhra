<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Combopack;
use App\Models\ComboProduct;
use App\Models\Coupons;
use App\Models\HomeDeliveryAddress;
use App\Models\ProductExtra;
use App\Models\Products;
use App\Models\TableQr;
use App\Models\Branches;
use App\Models\Reservation;
use App\Models\SubCategory;
use App\Models\UserAddress;
use App\Models\UserCart;
use App\Models\User;
use Illuminate\Support\Facades\DB;

// use App\Models\Branches;
use App\Models\WebOrder;
use App\Models\WebOrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\DeliveryCharges;
use App\Models\IndItem;
use App\Models\ProductProperty;
use App\Models\Price;
use App\Models\ProductToppings;
use App\Models\ProductVarients;
use App\Models\Propertie;
use App\Models\PropertiesItems;
use App\Models\PropertiesSidesInCart;
use App\Models\Variation;
use Illuminate\Routing\ResponseFactory;
use App\Models\AddtoExtra;
use App\Models\Point;
use App\Models\PointsRedeem;

use function Ramsey\Uuid\v1;
use Carbon\Carbon;

class PosController extends Controller
{
    //
    public function index($branch_id, $table_id)
    {
        
        
        // $branch_id = 7;
        // $table_id = 1;
        $branches = Branches::all();
        $category = Category::get();
        $ship = UserAddress::where('user_id', 11)->get();
        $extra = ProductExtra::get();
        $UserPoints = User::where('id', 11)->first();
        return view('admin.pos.index' , compact('category', 'extra', 'branches', 'ship', 'UserPoints', 'branch_id', 'table_id'));
    }

    /**
     * @param Request $request
     * @method use for get sub category
     */
    public function get_sub_category(Request $request)
    {
        $data = SubCategory::where(['cate_id' => $request->cate_id])->get();
        return response()->json(['data' => $data]);
    }


    /**
     * @param Request $request
     * @method use for get menu
     */
    public function get_menu(Request $request)
    {
        if ($request->limit) {
            $limit = $request->limit;
        }else{
            $limit = 15;
        }

            $order_by = 'ASC';
            $name = 'product_name';

        if ($request->asc) {
            $name = 'product_name';
            $order_by = 'ASC';
        } elseif ($request->newest) {
            $name = 'name';
            $order_by = 'DESC';
        }
        $price = $request->price_sort;
        $topic = $request->topic_sort;

        $products = Products::select("products.*" , "offers.name as offer_name" , 'offers.discount' ,
        'offers.start_date' , 'offers.end_date', "prices.price as new_price")
        ->join('prices', function($join)
        {
        // $join->on('prices.branch_id', '=', 'products.product_id');
        $join->on('prices.product_id', '=', 'products.id');
        })
        ->leftjoin('offers' , 'products.id' , '=' , 'offers.product_id')
        ->where('prices.branch_id', $request->branch_id);
        // ->whereDate('offers.start_date' , '>=' , date('Y-m-d'))
        // ->whereDate('offers.end_date' , '<=' , date('Y-m-d'));

        if($request->cate_id) {
            $products = $products->where(['category' => $request->cate_id]);
        }
        if($request->sub_cate_id) {
            $products = $products->where(['sub_category' => $request->sub_cate_id]);
        }
        $products = $products->limit($limit)->orderBy('products.'.$name, $order_by)
        ->get();
        // echo "<pre>";
        // echo json_encode($products[0]['new_price']);exit;
        $total = Products::select("products.*" , "offers.name as offer_name" , 'offers.discount' ,
        'offers.start_date' , 'offers.end_date')
        ->leftjoin('offers' , 'products.id' , '=' , 'offers.product_id')
        ->whereDate('offers.start_date' , '>=' , date('Y-m-d'))
        ->whereDate('offers.start_date' , '<=' , date('Y-m-d'));
        if($request->cate_id) {
            $total = $total->where(['category' => $request->cate_id]);
        }
        if($request->sub_cate_id) {
            $total = $total->where(['sub_category' => $request->sub_cate_id]);
        }
        $total = $total->limit($limit)->orderBy('products.'.$name, $order_by)
        ->count();
        return response()->json(['status' => true , 'products' => $products , "limit" => $limit , "total" => $total ]);
    }

    /**
     * @param Request $request
     * @method use for add to cart
     */
    public function add_to_cart(Request $request)
    {
        $checkIfCartIsEmpty = UserCart::where(['branch_id' => $request->branch_id, 'table_id' => $request->table_id])->get();
        if(count($checkIfCartIsEmpty) > 0){
            $unique_id = $checkIfCartIsEmpty[0]->unique_session_id;
        }else{
            $unique_id = uniqid().date('dmyhias');
        }

        $product = Products::findOrFail($request->id);
        $checkProductExixt = UserCart::where(['product_id' => $request->id, 'branch_id' => $request->branch_id, 'table_id' => $request->table_id])->count();

        $price = Price::where(['branch_id' => $request->branch_id, 'product_id' => $request->id])->first();

        // if($checkProductExixt == 0)
        // {
            $data                   = new UserCart();
            $input['product_id']    = $product->id;
            $input['user_id']       = Auth::guard('admin')->user()->id;
            $input['qty']           = 1;
            $input['price']         = $price->price;
            $input['discount_percent']         = $request->discount_percent;
            $input['discounted_price']         = $request->discounted_price;
            $input['branch_id']         = $request->branch_id;
            $input['table_id']         = $request->table_id;
            $input['tax']           = $product->tax;
            $input['unique_session_id']           = $unique_id;
            $save = $data->fill($input)->save();

            if($save)
            {
                return response()->json(['status' => true , 'msg' => 'Menu successfully added into cart', 'type'=>'new']);
                exit;
            }
            else
            {
                return response()->json(['status' => false , 'msg' => "Error's occurs try again later !!"]);
                exit;
            }
        // }
        // else
        // {
        //     $increaseProduct = UserCart::where(['product_id' => $request->id , 'branch_id' => $request->branch_id, 'table_id' => $request->table_id])->first();

        //     $increaseProduct->qty = ($increaseProduct->qty + 1);

        //     $update = $increaseProduct->update();
        //     if($update)
        //     {
        //         return response()->json(['status' => true , 'msg' => 'Menu successfully added into cart', 'type'=>'already_add']);
        //         exit;
        //     }
        //     else
        //     {
        //         return response()->json(['status' => false , 'msg' => "Error's occurs try again later !!"]);
        //         exit;
        //     }
        // }

    }

    //extra product
    public function extra_Prod(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'extra_prod'=>'required'
        ],
    [
        'extra_prod.required' => 'extra product is required',
    ]);
        if($validator->fails())
        {
            $this->sendResponse(400,$validator->errors()->first(),[]);
        }

        else
        {
            $input                   = new WebOrderProduct();
            $input['prod_extra_id']         = $request->prod_extra;
            $save =$input->save();

            if($save)
            {
                return response()->json(['status' => true , 'msg' => 'Extra Product successfully added into cart']);
                exit;
            }
            else
            {
                return response()->json(['status' => false , 'msg' => "Error's occurs try again later !!"]);
                exit;
            }
        }
        // else
        // {
        //     return response()->json(['status' => false , 'msg' => "Already exists !!"]);
        //     exit;
        // }


    }

    /**
     * @method use for show cart list ajax
     */
    public function get_cart_list_ajax(Request $request)
    {
        // dd($request->branch_id);
        $productss = [];
        $deliveryChargesData = [];
        $deliveryChargesData['hasDeliveryCharges'] = false;
        $deliveryChargesData['deliveryChargesss'] = 0;
        $products = UserCart::select("user_carts.*" , "products.product_img" , "products.product_name" ,
        "offers.discount" , "combopacks.package_name"  , "combopacks.image")
        ->leftjoin("products" , "user_carts.product_id" , "=" , "products.id")
        ->leftjoin("combopacks" , "user_carts.combo_id" , "=" , "combopacks.id")
        ->leftjoin("offers" , "user_carts.product_id" , "=" , "offers.product_id")
        ->where(['branch_id' => $request->branch_id, 'table_id' => $request->table_id,'user_carts.status' => 1,'user_carts.payment_status' => 0])->get();

        foreach($products as $key => $p){

            if($p->type != 'combo'){
                $price = Price::where('branch_id',$request->branch_id)->where('product_id',$p->product_id)->first();
                $p->price =$price->price;
            }

        }

        foreach($products as $key => $p){
            $productss[$key]['id'] = $p->id;
            $productss[$key]['product_id'] = $p->product_id;
            $productss[$key]['combo_id'] = $p->combo_id;
            $productss[$key]['user_id'] = $p->user_id;
            $productss[$key]['qty'] = $p->qty;
            $productss[$key]['price'] = $p->price;
            $productss[$key]['tax'] = $p->tax;
            $productss[$key]['status'] = $p->status;
            $productss[$key]['extra'] = $p->extra;
            $productss[$key]['varients'] = $p->varients;
            $productss[$key]['properties'] = $p->properties;
            $productss[$key]['toppings'] = $p->toppings;
            $productss[$key]['type'] = $p->type;
            $productss[$key]['created_at'] = $p->created_at;
            $productss[$key]['updated_at'] = $p->updated_at;
            $productss[$key]['product_img'] = $p->product_img;
            $productss[$key]['product_name'] = $p->product_name;
            $productss[$key]['discount'] = $p->discount;
            $productss[$key]['package_name'] = $p->package_name;
            $productss[$key]['kot_status'] = $p->kot_status;
            $productss[$key]['image'] = $p->image;

            if($p->type != 'combo'){
                $productsDEt = Products::select("products.*" , "offers.name as offer_name" , 'offers.discount' ,
                    'offers.start_date' , 'offers.end_date')
                    ->leftjoin('offers' , 'products.id' , '=' , 'offers.product_id')
                    ->where('products.id', $p->product_id)
                    ->first();
                    $priceFirst =Price::where('branch_id', $request->branch_id)->where('product_id',$productsDEt->id)->first();
                    $productsDEt->price = $priceFirst->price;
                if (!empty($productsDEt->discount)){
                    if (strtotime($productsDEt->start_date) <= strtotime(date('Y-m-d')) && strtotime($productsDEt->end_date) >= strtotime(date('Y-m-d'))){
                        $discount = $productsDEt->discount;
                    }else{
                        $discount = 0;
                    }
                }else{
                    $discount = 0;
                }
            }


            if (!empty($p->varients)){
                $Productvarient = ProductVarients::where(['product_id' => $p->product_id, 'varients_id' => $p->varients])->first();
                $varientPrice = $Productvarient->varients_price - (($discount/100)*$Productvarient->varients_price);
                $varients = Variation::where(['id' => $p->varients])->first();
                $varientName = $varients->name;
                $hasVarient = true;
            }else{
                $varientPrice = 0;
                $varientName = '';
                $hasVarient = false;
            }
            $productss[$key]['varientPrice'] = $varientPrice;
            $productss[$key]['varientName'] = $varientName;
            $productss[$key]['hasVarient'] = $hasVarient;
            if (!empty($p->properties)){
                if (isset($p->properties) && count(json_decode($p->properties)) > 0){
                    $ProductPropertiesItems = PropertiesItems::whereIn('id', json_decode($p->properties))->get();
                    $propertyItems = [];
                    $propertyItemTotalPrice = 0;
                    $wholeName = '';
                    $rightName = '';
                    $leftName = '';
                    $quatarName = '';
                    foreach($ProductPropertiesItems as $keyPI => $pi){
                        $properties_sides = PropertiesSidesInCart::where(['usercart_id' => $p->id, 'property_id' => $pi->id])->first();
                            if($properties_sides->sides === 'whole'){
                                $wholeName .= $pi->name.'('.$pi->price.'), ';
                                $wholesideZ = '<div class="avatar-container p-100"></div>';
                            }elseif($properties_sides->sides === 'left'){
                                $leftName .= $pi->name.'('.$pi->price.'), ';
                                $leftsideZ = '<div class="avatar-container p--50"></div>';
                            }elseif($properties_sides->sides === 'right'){
                                $rightName .= $pi->name.'('.$pi->price.'), ';
                                $rightsideZ = '<div class="avatar-container p-50"></div>';
                            }elseif($properties_sides->sides === 'quarter'){
                                $quatarName .= $pi->name.'('.$pi->price.'), ';
                                $quartersideZ = '<div class="avatar-container p-25"></div>';
                            }else{
                                $wholeName .= $pi->name.'('.$pi->price.'), ';
                            }

                            if (!empty($wholeName)){
                                $wholeSidePizza = '<div class="row"><div class="col-md-2" style="display: flex; justify-content: center;align-items: center"><span class="avatar-container p-100"></span></div><div class="col-md-10">'.$wholeName.'</div></div> <hr style="color: #ff9494;">';
                            }else{
                                $wholeSidePizza = '';
                            }

                            if (!empty($leftName)){
                                $leftSidePizza = '<div class="row"><div class="col-md-2" style="display: flex; justify-content: center;align-items: center"><span class="avatar-container p--50"></span></div><div class="col-md-10">'.$leftName.'</div></div> <hr style="color: #ff9494;">';
                            }else{
                                $leftSidePizza = '';
                            }

                            if (!empty($rightName)){
                                $rightSidePizza = '<div class="row"><div class="col-md-2" style="display: flex; justify-content: center;align-items: center"><span class="avatar-container p-50"></span></div><div class="col-md-10">'.$rightName.'</div></div> <hr style="color: #ff9494;">';
                            }else{
                                $rightSidePizza = '';
                            }

                            if (!empty($quatarName)){
                                $quatarSidePizza = '<div class="row"><div class="col-md-2" style="display: flex; justify-content: center;align-items: center"><span class="avatar-container p-25"></span></div><div class="col-md-10">'.$quatarName.'</div></div> <hr style="color: #ff9494;">    ';
                            }else{
                                $quatarSidePizza = '';
                            }

                        $propertyItems[0]['name'] = $wholeSidePizza.$leftSidePizza.$rightSidePizza.$quatarSidePizza;
                        $propertyItems[0]['price'] = $pi->price;
                        $propertyItemTotalPrice += $pi->price;
                    }
                    $hasProperties = true;
                }else{
                    $propertyItems = [];
                    $propertyItemTotalPrice = 0;
                    $hasProperties = false;
                }
            }else{
                $propertyItems = [];
                $propertyItemTotalPrice = 0;
                $hasProperties = false;
            }

            $productss[$key]['propertyItems'] = $propertyItems;
            $productss[$key]['propertyItemTotalPrice'] = $propertyItemTotalPrice;
            $productss[$key]['hasProperties'] = $hasProperties;

            if (!empty($p->toppings)){
                if (!empty($p->toppings) && count(json_decode($p->toppings)) > 0){

                    $ProductToppingsItems = IndItem::whereIn('id', json_decode($p->toppings))->get();
                    $ToppingItems = [];
                    $ToppingItemTotalPrice = 0;
                    foreach($ProductToppingsItems as $keyPT => $pt){
                        $ToppingItems[$keyPT]['name'] = $pt->name;
                        $ProductToppingsPrice = ProductToppings::where(['product_id' => $p->product_id, 'ingredients_id' => $pt->id])->first();
                        $ToppingItems[$keyPT]['price'] = $ProductToppingsPrice->ingredents_price;
                        $ToppingItemTotalPrice += $ProductToppingsPrice->ingredents_price;
                    }
                    $hasToppings = true;
                }else{
                    $ToppingItems = [];
                    $ToppingItemTotalPrice = 0;
                    $hasToppings = false;
                }
            }else{
                $ToppingItems = [];
                $ToppingItemTotalPrice = 0;
                $hasToppings = false;
            }

            $productss[$key]['ToppingItems'] = $ToppingItems;
            $productss[$key]['ToppingItemTotalPrice'] = $ToppingItemTotalPrice;
            $productss[$key]['hasToppings'] = $hasToppings;
            $grandTotal = 0;
            if (!empty($p->varients)){
                $grandTotal += $varientPrice;
                if (!empty($p->properties)){
                    if (isset($p->properties) && count(json_decode($p->properties)) > 0){
                        $grandTotal += $propertyItemTotalPrice;
                    }
                }
                if(!empty($p->toppings)){
                    if (!empty($p->toppings) && count(json_decode($p->toppings)) > 0){
                        $grandTotal += $ToppingItemTotalPrice;
                    }
                }
            }else{
                $grandTotal += $p->price;
            }
            $productss[$key]['grandTotal'] = $grandTotal;

            $deliveryPrices = DeliveryCharges::first();
            if ($deliveryPrices->status == 1){
                $deliveryChargesData = [];
                $deliveryChargesData['hasDeliveryCharges'] = true;
                $deliveryChargesData['deliveryChargesss'] = $deliveryPrices->charges;
            }else{
                $deliveryChargesData = [];
                $deliveryChargesData['hasDeliveryCharges'] = false;
                $deliveryChargesData['deliveryChargesss'] = 0;
            }
        }

        return response()->json(['products' => $productss, 'deliveryCharges' => $deliveryChargesData]);
    }

    /**
     * @param Request $request
     * @method use for remove product form user cart
     */
    public function remove_from_cart(Request $request)
    {

        try{
            $where = array('id' => $request->cart_id);
            $cate = UserCart::find($request->cart_id);
            $del = UserCart::where($where)->delete();
            if ($del) {
                return response()->json(array('status' => true, 'msg' => "Successfully remove !!!!"));
                exit;
            } else {
                return response()->json(array('status' => false, 'msg' => "Error Occured, please try again"));
                exit;
            }
        }
        catch (\Illuminate\Database\QueryException $e ) {
            return response()->json(array('status' => false, 'msg' => 'Something went wrong !!!!'));
        }
    }

    /**
     * @param Request $request
     * @method use for qty increase
     */
    public function qty_increase(Request $request)
    {
        $increaseProduct = UserCart::where(['id' => $request->id])->first();

        $increaseProduct->qty = ($request->qty + 1);

        $update = $increaseProduct->update();

        if($update)
        {
            return response()->json(['status' => true , 'msg' => "Qty increase successfully"]);
            exit;
        }
        else
        {
            return response()->json(['status' => false , 'msg' => "Something went wrong try again later"]);
            exit;
        }
    }

    /**
     * @param Request $request
     * @method use for qty qty_decrease
     */
    public function qty_decrease(Request $request)
    {
        $increaseProduct = UserCart::where(['id' => $request->id])->first();
        if($increaseProduct->qty > 1) {
            $increaseProduct->qty = ($request->qty - 1);

            $update = $increaseProduct->update();

            if($update)
            {
                return response()->json(['status' => true , 'msg' => "Qty increase successfully"]);
                exit;
            }
            else
            {
                return response()->json(['status' => false , 'msg' => "Something went wrong try again later"]);
                exit;
            }
        }
        else
        {
            return response()->json(['status' => false , 'msg' => "Minimum Qty 1"]);
            exit;
        }
    }

    /**
     * @param Request $request
     * @method use for place order
     */
//     public function place_order(Request $request)
//     {
// //        echo json_encode($request->all());exit;
//         $validator = Validator::make($request->all() , [
//             'type' => 'required',
//         ]);
//         if($validator->fails())
//         {
//             return response()->json(['status' => false , 'msg' => $validator->errors()->first()]);
//             exit;
//         }
//         else
//         {
//             // if($request->type == "undefined") {
//             //     return response()->json(['status' => false , 'msg' => "Select Payment Method!!"]);
//             //      exit;
//             // }
//             if($request->type_of_delivery === 'Home Delivery'){
//                 $shipping_address = UserAddress::where(['user_id' => Auth::user()->id])->first();
//                 // $extra = ProductExtra::where(['id' => Auth::user()->id])->first();

//                 if(!$shipping_address) {
//                     return response()->json(['status' => false , 'msg' => "Add shipping address first."]);
//                     exit;
//                 }
//             }

//             if(($request->type_of_delivery === 'Home Delivery' && $request->address == "undefined") ) {
//                 return response()->json(['status' => false , 'msg' => "Shipping address required!!"]);
//                  exit;
//             }

//             if(($request->type_of_delivery === 'Take Away' && $request->branch_id == "Select Branch") ) {
//                 return response()->json(['status' => false , 'msg' => "Please select branch!!"]);
//                 exit;
//             }


//             // dd($request->all());
//                 $checkCard = UserCart::where(['branch_id' => $request->branch_id, 'table_id' => $request->table_id])->get();
//                 // dd($request->address === 'undefined' ? 'Take Away' : 'Home Delivery');
//                 if($checkCard)
//                 {
//                     if($request->type_of_delivery === 'Take Away'){
//                         $shippingAddress = $request->branch_id;
//                         $typeOfDelivery = 'Take Away';
//                     }elseif($request->type_of_delivery === 'Home Delivery'){
//                         $shippingAddress = $request->address;
//                         $typeOfDelivery = 'Home Delivery';
//                     }else{
//                         $shippingAddress = $request->branch_idd;
//                         $typeOfDelivery = 'Dine-In';
//                     }

//                     if(empty($request->delivery_charge)){
//                         $dcharge = 0;
//                     }else{
//                         $dcharge = $request->delivery_charge;
//                     }

//                     WebOrder::where('unique_session_id', $checkCard[0]->unique_session_id)->delete();

//                     // $order                      = new WebOrder();
//                     $input['user_id']           = Auth::guard('admin')->user()->id;
//                     $input['payment_mode']      = $request->type;
//                     $input['branch_id']      = $request->branch_idd;
//                     $input['table_no']      = $request->table_id;
//                     $input['pay_amount']        = $request->total;
//                     $input['redeem_points_discount'] = $request->redeem_points_discount;
//                     $input['tax']        = $request->tax;
//                     $input['discount_value']        = $request->discount_value;
//                     $input['invoice_id']        = uniqid(time()) . "" . rand(0, 50);
//                     $input['txn_id']            = uniqid(time());
//                     $input['coupon_code']  = $request->coupon_code;
//                     $input['shipping_address']  = $shippingAddress;
//                     $input['delivery_type'] = $typeOfDelivery;
//                     $input['delivery_charge'] = $dcharge;
//                     $input['unique_session_id'] = $checkCard[0]->unique_session_id;
//                     $orderSave = $order->fill($input)->save();

//                     if($orderSave)
//                     {
//                         WebOrderProduct::where('unique_session_id', $checkCard[0]->unique_session_id)->delete();
//                         foreach($checkCard as $item) {
//                             // print_r($checkCard);
//                             $productsDEt = Products::select("products.*" , "offers.name as offer_name" , 'offers.discount' ,
//                                 'offers.start_date' , 'offers.end_date')
//                                 ->leftjoin('offers' , 'products.id' , '=' , 'offers.product_id')
//                                 ->where('products.id', $item->product_id)
//                                 ->first();

//                             if (!empty($productsDEt->discount)){
//                                 if (strtotime($productsDEt->start_date) <= strtotime(date('Y-m-d')) && strtotime($productsDEt->end_date) >= strtotime(date('Y-m-d'))){
//                                     $discount = $productsDEt->discount;
//                                 }else{
//                                     $discount = 0;
//                                 }
//                             }else{
//                                 $discount = 0;
//                             }

//                             if (!empty($item->varients)){
//                                 $Productvarient = ProductVarients::where(['product_id' => $item->product_id, 'varients_id' => $item->varients])->first();
//                                 $varientPrice = $Productvarient->varients_price - (($discount/100)*$Productvarient->varients_price);
//                                 $hasVarient = true;
//                             }else{
//                                 $varientPrice = 0;
//                                 $hasVarient = false;
//                             }
//                             if(!empty($item->properties)){
//                                 if (isset($item->properties) && count(json_decode($item->properties)) > 0){
//                                     $ProductPropertiesItems = PropertiesItems::whereIn('id', json_decode($item->properties))->get();
//                                     $propertyItemTotalPrice = 0;
//                                     foreach($ProductPropertiesItems as $keyPI => $pi){
//                                         $propertyItemTotalPrice += $pi->price;
//                                     }
//                                     $hasProperties = true;
//                                 }else{
//                                     $propertyItemTotalPrice = 0;
//                                     $hasProperties = false;
//                                 }
//                             }else{
//                                 $propertyItemTotalPrice = 0;
//                                 $hasProperties = false;
//                             }

//                             if (!empty($item->toppings)){
//                                 if (!empty($item->toppings) && count(json_decode($item->toppings)) > 0){

//                                     $ProductToppingsItems = IndItem::whereIn('id', json_decode($item->toppings))->get();
//                                     $ToppingItemTotalPrice = 0;
//                                     foreach($ProductToppingsItems as $keyPT => $pt){
//                                         $ProductToppingsPrice = ProductToppings::where(['product_id' => $item->product_id, 'ingredients_id' => $pt->id])->first();
//                                         $ToppingItemTotalPrice += $ProductToppingsPrice->ingredents_price;
//                                     }
//                                     $hasToppings = true;
//                                 }else{
//                                     $ToppingItemTotalPrice = 0;
//                                     $hasToppings = false;
//                                 }
//                             }else{
//                                 $ToppingItemTotalPrice = 0;
//                                 $hasToppings = false;
//                             }

//                             $grandTotal = 0;
//                             if (!empty($item->varients)){
//                                 $grandTotal += $varientPrice;
//                                 if (!empty($item->properties)){
//                                     if (isset($item->properties) && count(json_decode($item->properties)) > 0){
//                                         $grandTotal += $propertyItemTotalPrice;
//                                     }
//                                 }
//                                 if (!empty($item->toppings)){
//                                     if (!empty($item->toppings) && count(json_decode($item->toppings)) > 0){
//                                         $grandTotal += $ToppingItemTotalPrice;
//                                     }
//                                 }

//                             }else{
//                                 $grandTotal += $item->price;
//                             }


//                             $orderProduct           = new WebOrderProduct();
//                             $input1['user_id']      = Auth::guard('admin')->user()->id;
//                             $input1['product_id']   = $item->product_id;
//                             $input1['branch_id']   = $request->branch_idd;
//                             $input1['table_no']   = $request->table_id;
//                             $input1['cart_id']   = $item->id;
//                             $input1['qty']          = $item->qty;
//                             $input1['base_price']   = $item->discounted_price;
//                             $input1['discount_percent']   = $item->discount_percent;
//                             $input1['price_before_discount']   = $item->price;
//                             $input1['normal_price']   = $grandTotal;
//                             $input1['tax_percent']   = $item->tax;
//                             $input1['order_id']     = $order->id;
//                             $input1['combo_pack_id']= $item->combo_id;
//                             $input1['type']         = $item->type;
//                             $input1['varients']        = $item->varients;
//                             $input1['properties']        = $item->properties;
//                             $input1['toppings']        = $item->toppings;
//                             $input1['unique_session_id'] = $item->unique_session_id;
//                             $orderProductSave  = $orderProduct->fill($input1)->save();

//                             //change KOT status
//                             $kotStatus = UserCart::where(['id' => $item->id])->first();
//                             $kotStatus->kot_status = 1;
//                             $kotStatus->update();
//                         }

//                         if($orderProductSave)
//                             {

//                                 // delete product form cart
//                                 // UserCart::where(['branch_id' => $request->branch_id, 'table_id' => $request->table_id])->delete();

//                                 return response()->json(['status' => true , 'msg' => "Order Place successfully!!"]);
//                                 exit;
//                             }
//                             else
//                             {
//                                 return response()->json(['status' => false , 'msg' => "Something went wrong try again later!!"]);
//                                 exit;
//                             }

//                     }
//                     else
//                     {
//                         return response()->json(['status' => false , 'msg' => "Something went wrong try again later!!"]);
//                         exit;
//                     }

//                 }
//                 else
//                 {
//                     return response()->json(['status' => false , 'msg' => "First add product into cart"]);
//                     exit;
//                 }

//         }
//     }

public function place_order(Request $request)
{
    //        echo json_encode($request->all());exit;
    $validator = Validator::make($request->all(), [
        'type' => 'required',
    ]);
    if ($validator->fails()) {
        return response()->json(['status' => false, 'msg' => $validator->errors()->first()]);
        exit;
    } else {
        // if($request->type == "undefined") {
        //     return response()->json(['status' => false , 'msg' => "Select Payment Method!!"]);
        //      exit;
        // }
        if ($request->type_of_delivery === 'Home Delivery') {
            $shipping_address = UserAddress::where(['user_id' => Auth::user()->id])->first();
            // $extra = ProductExtra::where(['id' => Auth::user()->id])->first();

            if (!$shipping_address) {
                return response()->json(['status' => false, 'msg' => "Add shipping address first."]);
                exit;
            }
        }

        if (($request->type_of_delivery === 'Home Delivery' && $request->address == "undefined")) {
            return response()->json(['status' => false, 'msg' => "Shipping address required!!"]);
            exit;
        }

        if (($request->type_of_delivery === 'Take Away' && $request->branch_id == "Select Branch")) {
            return response()->json(['status' => false, 'msg' => "Please select branch!!"]);
            exit;
        }

        // dd($request->all());
        $checkCard = UserCart::where(['branch_id' => $request->branch_id, 'table_id' => $request->table_id])->get();
        // dd($request->address === 'undefined' ? 'Take Away' : 'Home Delivery');
        if ($checkCard) {
            if ($request->type_of_delivery === 'Take Away') {
                $shippingAddress = $request->branch_id;
                $typeOfDelivery = 'Take Away';
            } elseif ($request->type_of_delivery === 'Home Delivery') {
                $shippingAddress = $request->address;
                $typeOfDelivery = 'Home Delivery';
            } else {
                $shippingAddress = $request->branch_idd;
                $typeOfDelivery = 'Dine-In';
            }

            if (empty($request->delivery_charge)) {
                $dcharge = 0;
            } else {
                $dcharge = $request->delivery_charge;
            }

            // Check if order exists instead of deleting it
            $existingOrder = WebOrder::where('unique_session_id', $checkCard[0]->unique_session_id)
                                     ->where('table_no', $request->table_id)
                                     ->where('branch_id', $request->branch_idd)
                                     ->first();

            if ($existingOrder) {
                $order = $existingOrder; // Use existing order
                $input['pay_amount'] = $request->total; // Update total
                $input['redeem_points_discount'] = $request->redeem_points_discount;
                $input['tax'] = $request->tax;
                $input['discount_value'] = $request->discount_value;
                $input['delivery_charge'] = $dcharge;
                $input['payment_mode'] = $request->type;
                $input['shipping_address'] = $shippingAddress;
                $input['delivery_type'] = $typeOfDelivery;
                $orderSave = $order->update($input); // Update existing order
            } else {
                // Create new order if it doesn't exist
                $order = new WebOrder();
                $input['user_id'] = Auth::guard('admin')->user()->id;
                $input['payment_mode'] = $request->type;
                $input['branch_id'] = $request->branch_idd;
                $input['table_no'] = $request->table_id;
                $input['pay_amount'] = $request->total;
                $input['redeem_points_discount'] = $request->redeem_points_discount;
                $input['tax'] = $request->tax;
                $input['discount_value'] = $request->discount_value;
                $input['invoice_id'] = uniqid(time()) . "" . rand(0, 50);
                $input['txn_id'] = uniqid(time());
                $input['coupon_code'] = $request->coupon_code;
                $input['shipping_address'] = $shippingAddress;
                $input['delivery_type'] = $typeOfDelivery;
                $input['delivery_charge'] = $dcharge;
                $input['unique_session_id'] = $checkCard[0]->unique_session_id;
                $orderSave = $order->fill($input)->save();
            }

            if ($orderSave) {
                // Don't delete existing WebOrderProduct, update or add instead
                foreach ($checkCard as $item) {
                    // print_r($checkCard);
                    $productsDEt = Products::select("products.*", "offers.name as offer_name", 'offers.discount',
                        'offers.start_date', 'offers.end_date')
                        ->leftjoin('offers', 'products.id', '=', 'offers.product_id')
                        ->where('products.id', $item->product_id)
                        ->first();

                    if (!empty($productsDEt->discount)) {
                        if (strtotime($productsDEt->start_date) <= strtotime(date('Y-m-d')) && strtotime($productsDEt->end_date) >= strtotime(date('Y-m-d'))) {
                            $discount = $productsDEt->discount;
                        } else {
                            $discount = 0;
                        }
                    } else {
                        $discount = 0;
                    }

                    if (!empty($item->varients)) {
                        $Productvarient = ProductVarients::where(['product_id' => $item->product_id, 'varients_id' => $item->varients])->first();
                        $varientPrice = $Productvarient->varients_price - (($discount / 100) * $Productvarient->varients_price);
                        $hasVarient = true;
                    } else {
                        $varientPrice = 0;
                        $hasVarient = false;
                    }
                    if (!empty($item->properties)) {
                        if (isset($item->properties) && count(json_decode($item->properties)) > 0) {
                            $ProductPropertiesItems = PropertiesItems::whereIn('id', json_decode($item->properties))->get();
                            $propertyItemTotalPrice = 0;
                            foreach ($ProductPropertiesItems as $keyPI => $pi) {
                                $propertyItemTotalPrice += $pi->price;
                            }
                            $hasProperties = true;
                        } else {
                            $propertyItemTotalPrice = 0;
                            $hasProperties = false;
                        }
                    } else {
                        $propertyItemTotalPrice = 0;
                        $hasProperties = false;
                    }

                    if (!empty($item->toppings)) {
                        if (!empty($item->toppings) && count(json_decode($item->toppings)) > 0) {
                            $ProductToppingsItems = IndItem::whereIn('id', json_decode($item->toppings))->get();
                            $ToppingItemTotalPrice = 0;
                            foreach ($ProductToppingsItems as $keyPT => $pt) {
                                $ProductToppingsPrice = ProductToppings::where(['product_id' => $item->product_id, 'ingredients_id' => $pt->id])->first();
                                $ToppingItemTotalPrice += $ProductToppingsPrice->ingredents_price;
                            }
                            $hasToppings = true;
                        } else {
                            $ToppingItemTotalPrice = 0;
                            $hasToppings = false;
                        }
                    } else {
                        $ToppingItemTotalPrice = 0;
                        $hasToppings = false;
                    }

                    $grandTotal = 0;
                    if (!empty($item->varients)) {
                        $grandTotal += $varientPrice;
                        if (!empty($item->properties)) {
                            if (isset($item->properties) && count(json_decode($item->properties)) > 0) {
                                $grandTotal += $propertyItemTotalPrice;
                            }
                        }
                        if (!empty($item->toppings)) {
                            if (!empty($item->toppings) && count(json_decode($item->toppings)) > 0) {
                                $grandTotal += $ToppingItemTotalPrice;
                            }
                        }
                    } else {
                        $grandTotal += $item->price;
                    }

                    // Check if product already exists in WebOrderProduct
                    $existingOrderProduct = WebOrderProduct::where('order_id', $order->id)
                        ->where('product_id', $item->product_id)
                        ->where('varients', $item->varients)
                        ->where('properties', $item->properties)
                        ->where('toppings', $item->toppings)
                        ->first();

                    if ($existingOrderProduct) {
                        // Update existing product
                        $existingOrderProduct->qty += $item->qty;
                        $existingOrderProduct->normal_price = $grandTotal * $existingOrderProduct->qty;
                        $orderProductSave = $existingOrderProduct->save();
                    } else {
                        // Add new product
                        $orderProduct = new WebOrderProduct();
                        $input1['user_id'] = Auth::guard('admin')->user()->id;
                        $input1['product_id'] = $item->product_id;
                        $input1['branch_id'] = $request->branch_idd;
                        $input1['table_no'] = $request->table_id;
                        $input1['cart_id'] = $item->id;
                        $input1['qty'] = $item->qty;
                        $input1['base_price'] = $item->discounted_price;
                        $input1['discount_percent'] = $item->discount_percent;
                        $input1['price_before_discount'] = $item->price;
                        $input1['normal_price'] = $grandTotal;
                        $input1['tax_percent'] = $item->tax;
                        $input1['order_id'] = $order->id; // Use same order ID
                        $input1['combo_pack_id'] = $item->combo_id;
                        $input1['type'] = $item->type;
                        $input1['varients'] = $item->varients;
                        $input1['properties'] = $item->properties;
                        $input1['toppings'] = $item->toppings;
                        $input1['unique_session_id'] = $item->unique_session_id;
                        $orderProductSave = $orderProduct->fill($input1)->save();
                    }

                    // Change KOT status
                    $kotStatus = UserCart::where(['id' => $item->id])->first();
                    $kotStatus->kot_status = 1;
                    $kotStatus->update();
                }

                if ($orderProductSave) {
                    // delete product from cart (optional)
                    // UserCart::where(['branch_id' => $request->branch_id, 'table_id' => $request->table_id])->delete();

                    return response()->json(['status' => true, 'msg' => "Order updated successfully!!"]);
                    exit;
                } else {
                    return response()->json(['status' => false, 'msg' => "Something went wrong try again later!!"]);
                    exit;
                }
            } else {
                return response()->json(['status' => false, 'msg' => "Something went wrong try again later!!"]);
                exit;
            }
        } else {
            return response()->json(['status' => false, 'msg' => "First add product into cart"]);
            exit;
        }
    }
}

// public function place_order(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'type' => 'required',
//     ]);

//     if ($validator->fails()) {
//         return response()->json(['status' => false, 'msg' => $validator->errors()->first()]);
//     }

//     if ($request->type_of_delivery === 'Home Delivery') {
//         $shipping_address = UserAddress::where(['user_id' => Auth::user()->id])->first();

//         if (!$shipping_address) {
//             return response()->json(['status' => false, 'msg' => "Add shipping address first."]);
//         }
//     }

//     if (($request->type_of_delivery === 'Home Delivery' && $request->address == "undefined")) {
//         return response()->json(['status' => false, 'msg' => "Shipping address required!!"]);
//     }

//     if (($request->type_of_delivery === 'Take Away' && $request->branch_id == "Select Branch")) {
//         return response()->json(['status' => false, 'msg' => "Please select branch!!"]);
//     }

//     $checkCard = UserCart::where(['branch_id' => $request->branch_id, 'table_id' => $request->table_id])->get();

//     if ($checkCard) {
//         if ($request->type_of_delivery === 'Take Away') {
//             $shippingAddress = $request->branch_id;
//             $typeOfDelivery = 'Take Away';
//         } elseif ($request->type_of_delivery === 'Home Delivery') {
//             $shippingAddress = $request->address;
//             $typeOfDelivery = 'Home Delivery';
//         } else {
//             $shippingAddress = $request->branch_idd;
//             $typeOfDelivery = 'Dine-In';
//         }

//         if (empty($request->delivery_charge)) {
//             $dcharge = 0;
//         } else {
//             $dcharge = $request->delivery_charge;
//         }

//         $existingOrder = WebOrder::where('unique_session_id', $checkCard[0]->unique_session_id)->first();

//         if ($existingOrder && $existingOrder->payment_status === 'pending') {
//             // Update existing order
//             $order = $existingOrder;
//         } else {
//             // Create new order
//             WebOrder::where('unique_session_id', $checkCard[0]->unique_session_id)->delete();
//             $order = new WebOrder();
//         }

//         $input['user_id'] = Auth::guard('admin')->user()->id;
//         $input['payment_mode'] = $request->type;
//         $input['branch_id'] = $request->branch_idd;
//         $input['table_no'] = $request->table_id;
//         $input['pay_amount'] = $request->total;
//         $input['redeem_points_discount'] = $request->redeem_points_discount;
//         $input['tax'] = $request->tax;
//         $input['discount_value'] = $request->discount_value;
//         $input['invoice_id'] = uniqid(time()) . "" . rand(0, 50);
//         $input['txn_id'] = uniqid(time());
//         $input['coupon_code'] = $request->coupon_code;
//         $input['shipping_address'] = $shippingAddress;
//         $input['delivery_type'] = $typeOfDelivery;
//         $input['delivery_charge'] = $dcharge;
//         $input['unique_session_id'] = $checkCard[0]->unique_session_id;

//         $orderSave = $order->fill($input)->save();

//         if ($orderSave) {
//             WebOrderProduct::where('unique_session_id', $checkCard[0]->unique_session_id)->delete();

//             foreach ($checkCard as $item) {
//                 $productsDEt = Products::select("products.*", "offers.name as offer_name", 'offers.discount',
//                     'offers.start_date', 'offers.end_date')
//                     ->leftjoin('offers', 'products.id', '=', 'offers.product_id')
//                     ->where('products.id', $item->product_id)
//                     ->first();

//                 if (!empty($productsDEt->discount)) {
//                     if (strtotime($productsDEt->start_date) <= strtotime(date('Y-m-d')) && strtotime($productsDEt->end_date) >= strtotime(date('Y-m-d'))) {
//                         $discount = $productsDEt->discount;
//                     } else {
//                         $discount = 0;
//                     }
//                 } else {
//                     $discount = 0;
//                 }

//                 if (!empty($item->varients)) {
//                     $Productvarient = ProductVarients::where(['product_id' => $item->product_id, 'varients_id' => $item->varients])->first();
//                     $varientPrice = $Productvarient->varients_price - (($discount / 100) * $Productvarient->varients_price);
//                     $hasVarient = true;
//                 } else {
//                     $varientPrice = 0;
//                     $hasVarient = false;
//                 }

//                 if (!empty($item->properties)) {
//                     if (isset($item->properties) && count(json_decode($item->properties)) > 0) {
//                         $ProductPropertiesItems = PropertiesItems::whereIn('id', json_decode($item->properties))->get();
//                         $propertyItemTotalPrice = 0;
//                         foreach ($ProductPropertiesItems as $keyPI => $pi) {
//                             $propertyItemTotalPrice += $pi->price;
//                         }
//                         $hasProperties = true;
//                     } else {
//                         $propertyItemTotalPrice = 0;
//                         $hasProperties = false;
//                     }
//                 } else {
//                     $propertyItemTotalPrice = 0;
//                     $hasProperties = false;
//                 }

//                 if (!empty($item->toppings)) {
//                     if (!empty($item->toppings) && count(json_decode($item->toppings)) > 0) {
//                         $ProductToppingsItems = IndItem::whereIn('id', json_decode($item->toppings))->get();
//                         $ToppingItemTotalPrice = 0;
//                         foreach ($ProductToppingsItems as $keyPT => $pt) {
//                             $ProductToppingsPrice = ProductToppings::where(['product_id' => $item->product_id, 'ingredients_id' => $pt->id])->first();
//                             $ToppingItemTotalPrice += $ProductToppingsPrice->ingredents_price;
//                         }
//                         $hasToppings = true;
//                     } else {
//                         $ToppingItemTotalPrice = 0;
//                         $hasToppings = false;
//                     }
//                 } else {
//                     $ToppingItemTotalPrice = 0;
//                     $hasToppings = false;
//                 }

//                 $grandTotal = 0;
//                 if (!empty($item->varients)) {
//                     $grandTotal += $varientPrice;
//                     if (!empty($item->properties)) {
//                         if (isset($item->properties) && count(json_decode($item->properties)) > 0) {
//                             $grandTotal += $propertyItemTotalPrice;
//                         }
//                     }
//                     if (!empty($item->toppings)) {
//                         if (!empty($item->toppings) && count(json_decode($item->toppings)) > 0) {
//                             $grandTotal += $ToppingItemTotalPrice;
//                         }
//                     }
//                 } else {
//                     $grandTotal += $item->price;
//                 }

//                 $orderProduct = new WebOrderProduct();
//                 $input1['user_id'] = Auth::guard('admin')->user()->id;
//                 $input1['product_id'] = $item->product_id;
//                 $input1['branch_id'] = $request->branch_idd;
//                 $input1['table_no'] = $request->table_id;
//                 $input1['cart_id'] = $item->id;
//                 $input1['qty'] = $item->qty;
//                 $input1['base_price'] = $item->discounted_price;
//                 $input1['discount_percent'] = $item->discount_percent;
//                 $input1['price_before_discount'] = $item->price;
//                 $input1['normal_price'] = $grandTotal;
//                 $input1['tax_percent'] = $item->tax;
//                 $input1['order_id'] = $order->id;
//                 $input1['combo_pack_id'] = $item->combo_id;
//                 $input1['type'] = $item->type;
//                 $input1['varients'] = $item->varients;
//                 $input1['properties'] = $item->properties;
//                 $input1['toppings'] = $item->toppings;
//                 $input1['unique_session_id'] = $item->unique_session_id;
//                 $orderProductSave = $orderProduct->fill($input1)->save();

//                 // Change KOT status
//                 $kotStatus = UserCart::where(['id' => $item->id])->first();
//                 $kotStatus->kot_status = 1;
//                 $kotStatus->update();
//             }

//             if ($orderProductSave) {
//                 return response()->json(['status' => true, 'msg' => "Order placed successfully!!"]);
//             } else {
//                 return response()->json(['status' => false, 'msg' => "Something went wrong, try again later!!"]);
//             }
//         } else {
//             return response()->json(['status' => false, 'msg' => "Something went wrong, try again later!!"]);
//         }
//     } else {
//         return response()->json(['status' => false, 'msg' => "First add product into cart"]);
//     }
// }

    /**
     * @method use for show order history ajax list
     */
    public function order_history(Request $request)
    {
        if(isset($_GET['search']['value'])){
            $search = $_GET['search']['value'];
        }
        else{
            $search = '';
        }
        if(isset($_GET['length'])){
            $limit = $_GET['length'];
        }
        else{
            $limit = 10;
        }

        if(isset($_GET['start'])){
            $ofset = $_GET['start'];
        }
        else{
            $ofset = 0;
        }

        $orderType = $_GET['order'][0]['dir'];
        // $nameOrder = $_GET['columns'][$_GET['order'][0]['column']]['name'];

        $total = WebOrder::orWhere('txn_id' , 'like' , '%'. $search.'%')->where(['user_id' => Auth::user()->id])->count();
        $orders = WebOrder::select("web_orders.*" , 'users.name' , 'users.phone' , 'user_addresses.city' , 'user_addresses.state' ,
            'user_addresses.house' , 'user_addresses.street' , 'user_addresses.apartment' , 'user_addresses.cross_street')
            ->join('users' , 'web_orders.user_id' , '=' , 'users.id')
            ->join('user_addresses' , 'web_orders.shipping_address' , '=' , 'user_addresses.id')
            ->orWhere('txn_id' , 'like' , '%'. $search.'%')
            ->where(['web_orders.user_id' => Auth::user()->id])
            ->offset($ofset)->limit($limit)
            ->orderBy('id' , $orderType)->get();
        $i = 1 + $ofset;
        $data = [];
        foreach ($orders as $order) {
            $cancel = '';
             if( $order->status == "PENDING" || $order->status == "COOKING" || $order->status == "DISPATCHED")
            {
                $cancel = '<button class="statuscancel btn btn-sm btn-danger " data-status="' . "CANCELLED" . '" data-id="' . $order->id . '">' . "Cancel Order" . '  </button>';
            }
            $data[] = array(
                    date('d-m-Y' , strtotime($order->created_at)),
                    $order->phone,
                    $order->name,
                    $order->city . ' ' . $order->state . ' ' . $order->house . ' ' . $order->street . ' ' . $order->apartment . ' ' . $order->cross_street,
                    $order->txn_id,
                    $order->invoice_id,
                    $order->payment_mode,
                    $order->pay_amount,
                    ($order->status == "COMPLETED" ? '<button class="btn btn-sm btn-success">DELIVERED</button>' : ($order->status == "PENDING" ? '<button class="btn btn-sm btn-warning">PENDING</button>' : ($order->status == "CANCELLED" ? '<button class="btn btn-sm btn-danger">CANCELLED</button>' : ($order->status == "COOKING" ? '<button class="btn btn-sm btn-info">COOKING</button>' :($order->status == "DISPATCHED" ? '<button class="btn btn-sm btn-info">Food On the Way</button>' :''))))),
                    '<a href="javascript:void(0)" class="btn btn-warning btn-sm order_detail" data-id="'.$order->id.'"> Order Details </a>  '.$cancel.''

            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] =  $total;
        $records['data'] = $data;
        echo json_encode($records);
    }


    // Cancel Order
    public function candelOrder(Request $request)
    {
        $order = WebOrder::findOrFail($request->id);
        $order->status = $request->status;
        $update = $order->update();
        if($update)
        {
            return response()->json(array('status' => true,'msg' => "Successfully Updated !"));
            exit;
        }
        else
        {
            return response()->json(array('status' => false,'msg' => "Error Occured, please try again"));
            exit;
        }
    }

    public function Order_details($id)
    {
        $ship = HomeDeliveryAddress::where('user_id',Auth::guard('web')->user()->id)->first();


       $data = WebOrderProduct::select('web_order_products.*','products.product_name','products.product_name',
       'products.qty','products.price','products.type' , 'web_order_products.qty as order_qty')
        ->join('products','web_order_products.product_id','=','products.id')
        ->where('web_order_products.order_id',$id)
        ->paginate(10);

        return view('website.order_detail',compact('data','ship'));
    }
    public function extra_topping(Request $request)
    {
        $data = ProductExtra::where(['product_id' => $request->id])->get();
        return response()->json(['status' => true , "data" => $data]);
    }

    public function extra_variants(Request $request)
    {
        $products = Products::select("products.*" , "offers.name as offer_name" , 'offers.discount' ,
        'offers.start_date' , 'offers.end_date')
        ->leftjoin('offers' , 'products.id' , '=' , 'offers.product_id')
        ->where('products.id', $request->id)
        ->first();
        if (!empty($products->discount)){
            if (strtotime($products->start_date) <= strtotime(date('Y-m-d')) && strtotime($products->end_date) >= strtotime(date('Y-m-d'))){
                $discount = $products->discount;
            }else{
                $discount = 0;
            }
        }else{
            $discount = 0;
        }
        $data = ProductVarients::select('product_variants.*','variations.name')->where(['product_id' => $request->id])->join('variations','variations.id','=','product_variants.varients_id')->get();
        $html = '<form class="new_add_to_cart" method="POST">';
        if (count($data)){
            $html .= '<div class="col-md-12">
                    <h6 style="color: #fe4e2b;font-size: 1rem">Size</h6>
                        <div class="funkyradio row">
                        <input type="hidden" name="product_id" value="'.$request->id.'">
                        <input type="hidden" name="discount_percent" value="'.$discount.'">';
            foreach($data as $key => $var){
                $new_price = $var->varients_price - (($discount/100)*$var->varients_price);
                if ($var->varients_id == $products->default_varients){
                    $varientCheckedStatus = 'checked';
                }else{
                    $varientCheckedStatus = '';
                }
                $html .= '<div class="col">
                        <div class="funkyradio-success">
                            <input type="radio" name="varients" id="radio'.$key.'" value="'.$var->varients_id.'" '.$varientCheckedStatus.' required/>
                            <label for="radio'.$key.'"><span style="font-size: 12px">'.$var->name.' - $'.$new_price.'</span></label>
                        </div>
                    </div>';
            }

            $html .= '</div>
                    </div>';
        }

        $ProductToppings = ProductToppings::where(['product_id' => $request->id])->get();
        if (count($ProductToppings) > 0){
            $product_toppings_ids = [];
            foreach($ProductToppings as $ppI){
                $product_toppings_ids[] = $ppI->ingredients_id;
            }
            $html .= '<div class="col-md-12">
                    <h6 style="color: #fe4e2b;margin-top: 1%;font-size: 1rem">Select Crust</h6>
                    <div class="owl-carousel owl-theme">';
            $ProductToppingsItems = IndItem::whereIn('id', $product_toppings_ids)->get();
            foreach($ProductToppingsItems as $keyPTI => $pti){
                $ProductToppingsPrice = ProductToppings::where(['ingredients_id' => $pti->id])->first();
                if ($pti->id == $products->default_crust){
                    $crustCheckedStatus = 'checked';
                }else{
                    $crustCheckedStatus = '';
                }
                $html .=    '
                        <div class="item">
                            <div class="card">
                                <div class="card-body text-center" style="padding: 0">
                                   <span>
                                       <input id="top'.$keyPTI.'" type="radio" class="custom-check" name="toppings[]" value="'.$pti->id.'" '.$crustCheckedStatus.'/>
                                       <label for="top'.$keyPTI.'" class="custom-label">'.$pti->name.' - $'.$ProductToppingsPrice->ingredents_price.'</label>
                                    </span>
                                </div>
                            </div>
                        </div>';
            }
            $html .='</div>
                </div>';
        }

        $ProductProperty = ProductProperty::where(['product_id' => $request->id])->get();
        if (count($ProductProperty) > 0){
            foreach($ProductProperty as $keyPP => $pp){
                $PropertiesName = Propertie::where(['id' => $pp->properties_id])->first();
                $html .= '<div class="col-md-12">
                    <h6 style="color: #fe4e2b;margin-top: 1%;font-size: 1rem">'.$PropertiesName->name.'</h6>
                    <div class="owl-carousel owl-theme">';
                $PropertiesItems = PropertiesItems::where(['properties_id' => $pp->properties_id])->get();
                foreach($PropertiesItems as $keyPi => $pi){
                    if(!empty($products->default_toppings)){
                        if (in_array($pi->id, json_decode($products->default_toppings))){
                            $toppingsCheckedStatus = 'checked';
                            $pz_side = '<div class="avatar-container p-100"></div><input type="hidden" name="p-'.$pi->id.'" value="whole">';
                        }else{
                            $toppingsCheckedStatus = '';
                            $pz_side = '';
                        }
                    }else{
                        $toppingsCheckedStatus = '';
                        $pz_side = '';
                    }

                    $html .=    '<div class="item">
                            <div class="card">
                                <div class="card-body text-center" style="padding: 0">
                                   <span>
                                       <input id="bah'.$keyPi.$keyPP.'"  type="checkbox" class="custom-check abc" name="properties[]" value="'.$pi->id.'" '.$toppingsCheckedStatus.'/>
                                       <label for="bah'.$keyPi.$keyPP.'"  class="custom-label">'.$pi->name.' - $'.$pi->price.'</label>
                                    </span>
                                    <div class="text-center appendSide-'.$pi->id.' mt-2">'.$pz_side.'</div>
                                </div>
                            </div>
                        </div>';
                }
                $html .='</div>
                </div>';
            }


        }




        $html.= '<div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary add_topping" data-bs-target="modal">
                        <i class="fa fa-cart-shopping"></i> Add to Cart</button>
                    </div>
                   </form>';
        return response()->json(['status' => true , "data" => $html]);
    }

    /**
     * @method use for add extra into add to cart
     */
    public function extra_add_to_cart(Request $request)
    {
        $product = Products::findOrFail($request->product_id);
        $checkProductExixt = UserCart::where(['product_id' => $request->product_id , 'user_id' => Auth::user()->id, 'branch_id' => $request->branch_id, 'table_id' => $request->table_id])->count();

            if (!empty($request->varients)){
                $varient = $request->varients;
            }else{
                $varient = '';
            }

            if (!empty($request->properties)){
                $properties = json_encode($request->properties);
            }else{
                $properties = '';
            }

            if (!empty($request->toppings)){
                $toppings = json_encode($request->toppings);
            }else{
                $toppings = '';
            }

            if (!empty($varient)){
                $vv = ProductVarients::where(['varients_id' => $varient, 'product_id' => $product->id])->first();
                $v_price = $vv->varients_price;
            }else{
                $v_price = $product->price;
            }

            if ($request->discount_percent != 0){
                $price_after_discount = $v_price - (($request->discount_percent/100)*$v_price);
            }else{
                $price_after_discount = $v_price;
            }

            $data                   = new UserCart();
            $input['product_id']    = $product->id;
            $input['user_id']       = Auth::user()->id;
            $input['qty']           = 1;
            $input['price']         = $v_price;
            $input['tax']           = $product->tax;
            $input['varients']         = $varient;
            $input['properties']         = $properties;
            $input['toppings']         = $toppings;
            $input['discount_percent']         = $request->discount_percent;
            $input['discounted_price']         = $price_after_discount;
            $input['branch_id']         = $request->branch_id;
            $input['table_id']         = $request->table_id;
            $save = $data->fill($input)->save();

            if($save)
            {
                if(!empty($request->properties)){
                    foreach($request->properties as $sidekey => $sidep){
                        PropertiesSidesInCart::where(['usercart_id' => $data->id, 'property_id' => $sidep])->delete();
                    }

                    foreach($request->properties as $sidekey => $sidep){
                        $data2                   = new PropertiesSidesInCart();
                        $input2['usercart_id']    = $data->id;
                        $input2['product_id']    = $product->id;
                        $input2['property_id']       = $sidep;
                        $sd = 'p-'.$sidep;
                        $input2['sides']           = $request->$sd;
                        $save2 = $data2->fill($input2)->save();
                    }
                }

                return response()->json(['status' => true , 'msg' => 'Menu successfully added into cart']);
                exit;
            }
            else
            {
                return response()->json(['status' => false , 'msg' => "Error's occurs try again later !!"]);
                exit;
            }

    }

    /**
     * @method use for show order detail history
     */
    public function orderHistoryDetail(Request $request) {

        if(isset($_GET['search']['value'])){
            $search = $_GET['search']['value'];
        }
        else{
            $search = '';
        }
        if(isset($_GET['length'])){
            $limit = $_GET['length'];
        }
        else{
            $limit = 10;
        }

        if(isset($_GET['start'])){
            $ofset = $_GET['start'];
        }
        else{
            $ofset = 0;
        }

        $orderType = $_GET['order'][0]['dir'];
        $nameOrder = $_GET['columns'][$_GET['order'][0]['column']]['name'];
        $orders = WebOrderProduct::select("web_order_products.*" , "products.product_name" , "products.product_img" ,
        "products.size" , "products.type as product_type" , "combopacks.package_name" , "combopacks.image")
        ->leftjoin('products' , 'web_order_products.product_id' , '=' , 'products.id')
        ->leftjoin('combopacks' , 'web_order_products.combo_pack_id' , '=' , 'combopacks.id')
        ->where(['order_id' => $request->order_id])->get();

        $total = WebOrderProduct::select("web_order_products.*" , "products.product_name" , "products.product_img" ,
        "products.size" , "products.type" , "combopacks.package_name" , "combopacks.image")
        ->leftjoin('products' , 'web_order_products.product_id' , '=' , 'products.id')
        ->leftjoin('combopacks' , 'web_order_products.combo_pack_id' , '=' , 'combopacks.id')
        ->where(['order_id' => $request->order_id])->count();
        $i = 1 + $ofset;
        $data = [];

        foreach ($orders as $order) {
            if($order->type == "combo") {
                $img = $order->image;
                $new_name = $order->package_name;
            }else{
                $img = $order->product_img;
                $new_name = $order->product_name;
            }
            if(!empty($order->varients)){
                $varientDetails = Variation::where(['id' => $order->varients])->first();
                $varient = '<br><span>Size :</span><span>'.$varientDetails->name.'</span>';
            }else{
                $varient = '';
            }

            if(!empty($order->toppings) && count(json_decode($order->toppings)) > 0){
                $crust = '';
                foreach(json_decode($order->toppings) as $keyTop => $top){
                    $topping = IndItem::where(['id' => $top])->first();
                    $crust .= '<br><span>Crust :</span><span>'.$topping->name.'</span><br>';
                }
            }else{
                $crust = '';
            }

            if(!empty($order->properties) && count(json_decode($order->properties)) > 0){
                $toppings = '<span>Toppings :</span><span>';
                $properties = PropertiesItems::whereIn('id', json_decode($order->properties))->get();
                foreach($properties as $keyPOP => $pop){
                    $toppings .= $pop->name;
                }
                $toppings .= '</span><br>';
            }else{
                $toppings = '';
            }

            $data[] = array(
                    '<img src="'.url($img).'" class="rounded" style="height: 30px; width: 30px;"><br><b>'.$new_name .'</b>'.$varient.$crust.$toppings,
                    $order->base_price,
                    $order->qty,
                    // ($order->type == "combo" ? $order->type .'&nbsp;<a href="javascrit:void(0)" class="btn btn-success show_detail" data-id="'.$order->combo_pack_id.'"><i class="fa fa-eye"></i></a>' : $order->product_type),
                    number_format($order->qty * $order->base_price , 2),
            );

        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] = $total;
        $records['data'] = $data;
        echo json_encode($records);
    }

    /**
     * @method use for check coupon
     */
    public function check_coupon(Request $request)
    {
        $data   = Coupons::where(['coupon_name' => $request->value])
        // ->whereDate('start_date' , '>=' , date('Y-m-d'))->whereDate('end_date' , '<=' , date('Y-m-d'))
        ->first();

        return response()->json(['status' => true , 'data' => $data]);
    }

    public function check_redeem(Request $request)
    {
        $data   = Point::first();

        return response()->json(['status' => true , 'data' => $data]);
    }

    /**
     * @method use for get combo pack
     */
    public function get_combo_pack(Request $request) {
        if ($request->limit) {
            $limit = $request->limit;
        }else{
            $limit = 15;
        }

            $order_by = 'ASC';
            $name = 'package_name';

        if ($request->asc) {
            $name = 'package_name';
            $order_by = 'ASC';
        } elseif ($request->newest) {
            $name = 'name';
            $order_by = 'DESC';
        }

        $products = Combopack::select("combopacks.*");
        $products = $products->limit($limit)->orderBy('combopacks.'.$name, $order_by)
        ->get();
        $total = Combopack::select("combopacks.*");
        $total = $total->limit($limit)->orderBy('combopacks.'.$name, $order_by)
        ->count();

        return response()->json(['status' => true , 'products' => $products , "limit" => $limit , "total" => $total ]);
    }

    /**
     * @method use for get combo pack detail
     */
    public function combo_pack_detail(Request $request) {
        $data   = ComboProduct::select("combo_products.*" , "products.product_name" , "products.product_img" ,
        "products.price")
        ->join('products' , 'combo_products.product_id' , '=' , 'products.id')
        ->where(['combo_products.pack_id' => $request->combo_id])->get();

        return response()->json(['status' => true , 'data' => $data]);
    }

    /**
     * @method use for combo pack add to cart
     */
    public function comboPackAddToCart(Request $request){

        $product = Combopack::findOrFail($request->combo_id);
        $checkProductExixt = UserCart::where(['combo_id' => $request->combo_id , 'branch_id' => $request->branch_id, 'table_id' => $request->table_id])->count();

        if($checkProductExixt == 0)
        {
            $data                   = new UserCart();
            $input['combo_id']      = $product->id;
            $input['user_id']       = Auth::guard('admin')->user()->id;
            $input['qty']           = 1;
            $input['price']         = $product->price;
            $input['discount_percent']         = 0;
            $input['discounted_price']         = $product->price;
            $input['tax']           = $product->tax;
            $input['branch_id']           = $request->branch_id;
            $input['table_id']           = $request->table_id;
            $input['type']          = "combo";
            $save = $data->fill($input)->save();

            if($save)
            {
                return response()->json(['status' => true , 'msg' => 'Combo Package  successfully added into cart']);
                exit;
            }
            else
            {
                return response()->json(['status' => false , 'msg' => "Error's occurs try again later !!"]);
                exit;
            }
        }
        else
        {
            return response()->json(['status' => false , 'msg' => "Already exists !!"]);
            exit;
        }
    }

    // public function posIndex(){
        

    //     $today = Carbon::today();
    //     $currentTime = Carbon::now()->format('H:i:s');
    //     $currentDateTime = Carbon::now()->format('Y-m-d H:i:s');
    //    $user = Auth::guard('admin')->user();
    //     if($user->type == 'pos'){
    //         $branch =$user->branch_id;
    //         $resData= Reservation::where('branch_id',$branch)->where('day',$today)->get();
    //         $branchName = Branches::where('id', $branch)->first();
    //         // dd($branchName);
    //         $tables = TableQr::where('branch_id', $branch)->get();
    //         // dd($tables);
    //     return view('admin.poss.pos-new', compact('tables','branchName','resData','today','currentTime','branch','currentDateTime'));
    //     }

    // }



// public function posIndex(Request $request)
// {
//     $today = Carbon::today();
//     // $currentTime = Carbon::now()->format('H:i:s');
//     $currentTime = Carbon::now();
//     $user = Auth::guard('admin')->user();

    
//     // Get the selected date and time from the request
//     $selectedDate = $request->input('date', $today->format('Y-m-d'));
//     // $selectedTime = $request->input('time', $currentTime);

//     if ($user->type == 'pos') {
//         $branch = $user->branch_id;
//         $branchName = Branches::where('id', $branch)->first();
//         $tables = TableQr::where('branch_id', $branch)->get();

//         // Fetch reservations for the selected date and time
//         // $reservations = Reservation::where('branch_id', $branch)
//         //     ->where('day', $selectedDate)
//         //     ->where('start_from', '<=', $selectedTime)
//         //     ->where('till', '>=', $selectedTime)
//         //     ->get();

//         // Fetch reservations for the selected date and time
//         $reservations = Reservation::where('branch_id', $branch)
//         ->where('day', $selectedDate) // Filter by selected date
//         ->get();

//             $resList = Reservation::where('branch_id', $branch)->get();

//         // Check for products in the cart for each table
//         foreach ($tables as $table) {
//             $hasProducts = UserCart::where('table_id', $table->table_no) ->where('payment_status', 0)->exists();
//             $cookingData = WebOrder::where('table_no', $table->table_no)
//             ->whereNotNull('cookingstart') // Cooking has started
//             ->whereNull('endcooking') // Cooking has not ended
//             ->orderBy('cookingstart', 'desc')
//             ->first(); // Use first() to get the actual record

//         $cookingStarted = false;
//         if ($cookingData) {
//             // Calculate time difference in minutes between cookingstart and now
//             $cookingStartTime = Carbon::parse($cookingData->cookingstart);
//             $timeDifference = $currentTime->diffInMinutes($cookingStartTime);

//             // If less than or equal to 10 minutes have passed, consider cooking active
//             $cookingStarted = $timeDifference <= 1; // Changed from 1 to 10 minutes
//         } 
                

//             //dd($hasProducts);
//             $table->has_products = $hasProducts; // Flag for products
//             $table->is_reserved = $reservations->where('table_no', $table->table_no)->isNotEmpty();
//             $table->cooking_started = $cookingStarted;

//             // Debugging: Print table details
//             // echo "Table: {$table->table_no}, Reserved: {$table->is_reserved}, Has Products: {$table->has_products}<br>";
//         }

//         return view('admin.poss.pos-new', compact('tables', 'branchName', 'reservations', 'today', 'currentTime', 'branch', 'selectedDate','resList'));
//     }

//     return redirect()->back()->with('error', 'Unauthorized access.');
// }


public function posIndex(Request $request)
{
    //dd("index");
    $today = Carbon::today(); // Get today's date
    $user = Auth::guard('admin')->user();

    // Get the selected date from the request (default to today if not provided)
    $selectedDate = $request->input('date', $today->format('Y-m-d'));
    

    if ($user->type == 'pos') {
        $branch = $user->branch_id;
        $branchName = Branches::where('id', $branch)->first();
        $tables = TableQr::where('branch_id', $branch)->get();

        // Fetch reservations for the selected date only
        $reservations = Reservation::where('branch_id', $branch)
            ->where('day', $selectedDate) 
            ->get();
        //dd($selectedDate,$reservations);
        // Fetch all reservations for listing purposes
        $resList = Reservation::where('branch_id', $branch)
            ->get();

        // Check for products in the cart and cooking status for each table
        foreach ($tables as $table) {
            $hasProducts = UserCart::where('table_id', $table->table_no)
                ->where('payment_status', 0)
                ->exists();

            $cookingData = WebOrder::where('table_no', $table->table_no)
                ->whereNotNull('cookingstart') // Cooking has started
                ->whereNull('endcooking') // Cooking has not ended
                ->orderBy('cookingstart', 'desc')
                ->first();

            $cookingStarted = false;
            if ($cookingData) {
                // Calculate time difference in minutes between cookingstart and now
                $cookingStartTime = Carbon::parse($cookingData->cookingstart);
                $timeDifference = Carbon::now()->diffInMinutes($cookingStartTime);

                // If less than or equal to 10 minutes have passed, consider cooking active
                $cookingStarted = $timeDifference <= 10;
            }

            // Set table flags
            $table->has_products = $hasProducts; // Flag for products
            $table->is_reserved = $reservations->where('table_no', $table->table_no)->isNotEmpty(); // Flag for reservations
           
           // dd($table->is_reserved);
            $table->cooking_started = $cookingStarted; // Flag for cooking status
        }

        return view('admin.poss.pos-new', compact('tables', 'branchName', 'reservations', 'today', 'branch', 'selectedDate', 'resList'));
    }

    return redirect()->back()->with('error', 'Unauthorized access.');
}

public function resPosStatus(Request $request)
{
    $request->validate([
        'id' => 'required|exists:reservations,id',
        'table_no' => 'required|string',
        'status' => 'nullable|in:1,2,3' // Optional status validation
    ]);

    try {
        $reservation = Reservation::findOrFail($request->id);

        // Check if the selected table is available for this time slot
        $checktb = Reservation::where('id', '!=', $request->id) // Exclude current reservation
            ->whereDate('day', $reservation->day)
            ->where('branch_id', $reservation->branch_id)
            ->where('table_no', $request->table_no)
            ->where(function ($query) use ($reservation) {
                $query->where(function ($query) use ($reservation) {
                    $query->whereBetween('start_from', [$reservation->start_from, $reservation->till])
                          ->orWhereBetween('till', [$reservation->start_from, $reservation->till]);
                })
                ->orWhere(function ($query) use ($reservation) {
                    $query->where('start_from', '<=', $reservation->start_from)
                          ->where('till', '>=', $reservation->till);
                });
            })
            ->get();

        if ($checktb->count() > 0) {
            return response()->json([
                'success' => false,
                'message' => 'This table is already booked for the selected time slot. Please choose another table.'
            ], 400);
        }

        // If table is available, update the reservation
        $reservation->table_no = $request->table_no;
        if ($request->has('status')) {
            $reservation->status = $request->status;
        }
        $reservation->save();

        return response()->json([
            'success' => true,
            'message' => 'Reservation updated successfully.'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to update reservation: ' . $e->getMessage()
        ], 500);
    }
}
    
    public function povRes(Request $request){
        // dd($request->all());
        $resData= Reservation::find($request->resId);

        if ($resData) {
            return response()->json([
                'name' => $resData->fname.' '.$resData->lname,
                'date' => Carbon::parse($resData->date)->format('d-m-Y'),
                'start_time' => Carbon::parse($resData->start_from)->format('h:i A'),
                'end_time' => Carbon::parse($resData->end_time)->format('h:i A')
            ]);
        } else {
            return response()->json(['error' => 'Reservation not found'], 404);
        }

    }
    public function posAjax(Request $request)
    {
        // Handle request parameters
        $date = $request->date ?? Carbon::today()->format('Y-m-d');
        $start_time = $request->start_time ?? '';
        $end_time = $request->end_time ?? '';

        $currentDateTime = Carbon::now()->format('Y-m-d H:i:s');
        $user = Auth::guard('admin')->user();
        $branch = $user->branch_id;

        $tables = TableQr::where('branch_id', $branch)->get();

        $html = '';
        $today = Carbon::today()->format('Y-m-d');

        if($date < $today){
            $ResColor = 'greenyellow';
            $paidColod = '#ff6347';
            $status = 'PAID';
        }elseif($date > $today){
            $ResColor = 'greenyellow';
            $paidColod = 'gray';
            $status = 'PENDING';
        }else{
            $ResColor = 'greenyellow';
            $status = 'PENDING';
            $paidColod = 'gray';

        }
        // dd($branch);
        foreach ($tables as $data) {
            $query = Reservation::where('branch_id', $branch)
                                ->where('table_no', $data->table_no)
                                ->where('day', $date);

            if ($start_time != '') {
                $query->where('start_from', '>=', $start_time);
            }

            if ($end_time != '') {
                $query->where('till', '<=', $end_time);
            }

            $reservation = $query->first();
    
         
             $order =        WebOrder::where('branch_id', $branch)
                ->where('table_no', $data->table_no)
                ->whereDate('created_at', $date)
                ->where('payment_status', $status)
                ->first();
            // dd($order);
            $total = 0;
            if ($order != null) {
                $total = $order->pay_amount + $order->tax;
            }

            if ($reservation != null) {
                $html .= '<div class="grid-item">';
                $html .= '<div class="card text-center mb-3 food-card repair-active-new">';
                $html .= '<div class="card-body" style="color:white;background-color: '. $ResColor .'">';
                if($date == $today){
                    $html .= '<a href="' . route('admin.pos', ['branchId' => $branch, 'tableId' => $data->table_no]) . '" class="j-nav class-add" data-target="#menus" data-name="menus">';
                }
                $html .= '<div class="h3 mb-0"></div>';
                $html .= '<p class="mb-0" style="color:white;">' . $data->table_no . '</p>';
                $html .= '</div>';
                if($date == $today){
                    $html .= '</a>';
                }
                // $html .= '<i type="button" class="popUp" data-toggle="modal" data-target=".modal" data-feather="eye" data-reservation-id="' . $reservation->id . '" data-table-id="' . $data->table_no . '"></i>';
                $html .= '<i type="button" class="popUp" data-toggle="modal" data-target=".modal" data-feather="eye" data-reservation-id="' . $reservation->id . '" data-table-id="' . $data->table_no . '"></i>';

                if ($order != null) {
                    $html .= '<p>¥' . $total . '</p>';
                }
                $html .= '</div>';
                $html .= '</div>';
            } elseif ($reservation == null && $order != null) {
                $html .= '<div class="grid-item">';
                $html .= '<div class="card text-center mb-3 food-card repair-active-new">';
                $html .= '<div class="card-body" style="color:white;background-color: '. $paidColod .' ">';
                if($date == $today){
                    $html .= '<a href="' . route('admin.pos', ['branchId' => $branch, 'tableId' => $data->table_no]) . '" class="j-nav class-add" data-target="#menus" data-name="menus">';
                }
                $html .= '<div class="h3 mb-0"></div>';
                $html .= '<p class="mb-0">' . $data->table_no . '</p>';
                $html .= '</div>';
                if($date == $today){
                 $html .= '</a>';
                }
                $html .= '<p>¥' . $total . '</p>';
                $html .= '</div>';
                $html .= '</div>';
            } else {
                $html .= '<div class="grid-item">';
                $html .= '<div class="card text-center mb-3 food-card repair-active-new">';
                $html .= '<div class="card-body">';
                if($date == $today){
                    $html .= '<a href="' . route('admin.pos', ['branchId' => $branch, 'tableId' => $data->table_no]) . '" class="j-nav class-add" data-target="#menus" data-name="menus">';
                }
                $html .= '<div class="h3 mb-0"></div>';
                $html .= '<p class="mb-0">' . $data->table_no . '</p>';
                $html .= '</div>';
                if($date == $today){
                    $html .= '</a>';
                }
                $html .= '</div>';
                $html .= '</div>';
            }
        }

        // Return the generated HTML
        return response()->json(['html' => $html]);
    }

    public function payNow(Request $request){
        $today = Carbon::today()->format('Y-m-d');

        $data =WebOrder::where('branch_id',$request->branch_id)
        ->where('table_no',$request->table_id)
        ->where('payment_status','PENDING')
        // ->whereDate('created_at', $today)
        ->orderBy('id','DESC')
        ->first();
    //    dd($data);

        $data->payment_status = 'PAID';
        $data->save();
        // $updateweb = WebOrder::where('unique_session_id', $data->unique_session_id)
        // ->update(['payment_status' =>'PAID']);

        $updatecart = UserCart::where('branch_id',$request->branch_id)
        ->where('table_id',$request->table_id)
        ->where('payment_status', '0')
        ->get();
        // dd($updatecart->id);
        foreach($updatecart as $crtData){
           $crtr = UserCart::find($crtData->id);
           $crtr->payment_status =1;
           $crtr->save();

        }
     
        return response()->json(['status' => 'true']);
    }
    // public function cancelCart(Request $request){
    //       //dd($request->all());
    //      //$today = Carbon::today()->format('Y-m-d');
         
    // // If no products are found, show a message
    
    //      $affectedRows = UserCart::where('branch_id', $request->branch_id)
    //      ->where('table_id', $request->table_id)
    //      ->where('payment_status', '0') // Only pending items        
    //       ->where('status', 1)
    //      //->whereDate('created_at', $today)
    //      ->delete();
         

    //      // dd($data);
    //      return response()->json(['status' => 'true']);
    // }

    public function cancelCart(Request $request)
{
    // Log the request for debugging
    // \Log::info('Cancel Request:', $request->all());

    // Attempt to delete only pending items
    $affectedRows = UserCart::where('branch_id', $request->branch_id)
        ->where('table_id', $request->table_id)
        ->where('payment_status', '0') // Only pending items
        ->where('status', 1)
        ->delete();

    // Return appropriate response based on deletion success
    if ($affectedRows > 0) {
        return response()->json([
            'status' => 'true',
            'message' => 'Order canceled successfully!'
        ]);
    } else {
        return response()->json([
            'status' => 'false',
            'message' => 'Order cannot be canceled. Payment may already be completed or no pending order exists.'
        ]);
    }
}

    
}


