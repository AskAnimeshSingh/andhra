<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branches;
use App\Models\Delivery;
use App\Models\Products;
use App\Models\WebOrder;
use App\Models\Price;
use Illuminate\Http\Request;
use App\Models\WebOrderProduct;
use App\Models\HomeDeliveryAddress;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class PriceController extends Controller
{
    /**
     * @return view group index
     */
    public function index()
    {
        return view('admin.set_price.index');
    }

    /**
     * @method use for show coupon ajax list
     */
    public function priceeAjaxList(Request $request)
    {
        if (isset($_GET['search']['value'])) {
            $search = $_GET['search']['value'];
        } else {
            $search = '';
        }
        if (isset($_GET['length'])) {
            $limit = $_GET['length'];
        } else {
            $limit = 10;
        }

        if (isset($_GET['start'])) {
            $ofset = $_GET['start'];
        } else {
            $ofset = 0;
        }

        $orderType = $_GET['order'][0]['dir'];
        $nameOrder = $_GET['columns'][$_GET['order'][0]['column']]['name'];

        $total = Branches::orWhere(function ($query) use ($search) {
            $query->orWhere('name', 'like', '%' . $search . '%');
            $query->orWhere('address', 'like', '%' . $search . '%');
            $query->orWhere('address', 'like', '%' . $search . '%');
        })->count();

        $groups = Branches::orWhere(function ($query) use ($search) {
            $query->orWhere('name', 'like', '%' . $search . '%');
            $query->orWhere('address', 'like', '%' . $search . '%');
            $query->orWhere('address', 'like', '%' . $search . '%');
        })
            ->offset($ofset)->limit($limit)
            ->orderBy($nameOrder, $orderType)->get();

        $i = 1 + $ofset;
        $data = [];

        foreach ($groups as $cate) {

            $status = '<button class="statusVerifiedClick btn ' . ($cate->status == 1 ? "btn-success btn-sm" : "btn-danger btn-sm") . '  " data-status="' . ($cate->status == 1 ? '0' : '1') . '" data-id="' . $cate->id . '">' . ($cate->status == 1 ? "Active" : "De-Active") . '</button>
                       ';
            $data[] = array(
                $i++,
                $cate->name,
                $cate->phone,
                $cate->address,
                '<a href="' . route("admin.price.add", ["id" => $cate->id]) . '" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a> | <a href="' . route("admin.price.view", ["id" => $cate->id]) . '" class="btn btn-info btn-sm"  data-id="' . $cate->id . '" data-name="' . $cate->name . '" data-phone="' . $cate->phone . '" data-address="' . $cate->address . '" data-delivery_fee="' . $cate->delivery_fee . '"> <i class="fa fa-eye"></i></a>',
            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] = $total;
        $records['data'] = $data;
        echo json_encode($records);
    }

    /**
     * @param Request $request
     * @method use for store new blogs
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'distence_from' => 'required',
            'dilevery_link' => 'required',
            'reservation_link' => 'required',
            'seating_availability' => 'required',
            'google_mao_link' => 'required',
            'weekday_morning' => 'required',
            'weekday_afternoonc' => 'required',
            'weekday_afternoono' => 'required',
            'weekday_close' => 'required',
            'weekend_morning' => 'required',
            'weekend_noonc' => 'required',
            'weekend_noono' => 'required',
            'weekend_close' => 'required',
            'branch_icon' => 'required',
            'branch_banner' => 'required',
            'specialty_1' => 'required',
            'specialty_1_description' => 'required',
            'specialty_2' => 'required',
            'specialty_2_description' => 'required',
            'footer_banner' => 'required',
            'branch_map' => 'required',



            // 'delivery_fee' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'msg' => $validator->errors()->first()]);
            exit;
        } else {
            // dd($request->all());
            $data = new Branches();
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            // $data->delivery_fee = $request->delivery_fee;
            $data->distence_from = $request->distence_from;
            $data->dilivery_app_link = $request->dilevery_link;
            $data->reservation_link = $request->reservation_link;
            $data->seating_ability = $request->seating_availability;
            $data->google_map_link = $request->google_mao_link;
            $data->weekday_opening = $request->weekday_morning;
            $data->weekday_noon_close = $request->weekday_afternoonc;
            $data->weekday_noon_open = $request->weekday_afternoono;
            $data->weekday_closing = $request->weekday_close;

            $data->weekend_opening = $request->weekend_morning;
            $data->weekend_noon_close = $request->weekend_noonc;
            $data->weekend_noon_open = $request->weekend_noono;
            $data->weekend_closing = $request->weekend_close;

            if ($request->file('branch_icon') != "") {

                $branch_icon = uniqid(time()) . '.' . $request->branch_icon->extension();
                $request->branch_icon->move(public_path('assets/admin/assets/img/banner'), $branch_icon);
                $branch_icon = "/public/assets/admin/assets/img/banner/" . $branch_icon;
            }

            if ($request->file('branch_banner') != "") {

                $branch_banner = uniqid(time()) . '.' . $request->branch_banner->extension();
                $request->branch_banner->move(public_path('assets/admin/assets/img/banner'), $branch_banner);
                $branch_banner = "/public/assets/admin/assets/img/banner/" . $branch_banner;
            }

            if ($request->file('specialty_1') != "") {

                $specialty_1 = uniqid(time()) . '.' . $request->specialty_1->extension();
                $request->specialty_1->move(public_path('assets/admin/assets/img/banner'), $specialty_1);
                $specialty_1 = "/public/assets/admin/assets/img/banner/" . $specialty_1;
            }

            if ($request->file('specialty_2') != "") {

                $specialty_2 = uniqid(time()) . '.' . $request->specialty_2->extension();
                $request->specialty_2->move(public_path('assets/admin/assets/img/banner'), $specialty_2);
                $specialty_2 = "/public/assets/admin/assets/img/banner/" . $specialty_2;
            }


            if ($request->file('footer_banner') != "") {

                $footer_banner = uniqid(time()) . '.' . $request->footer_banner->extension();
                $request->footer_banner->move(public_path('assets/admin/assets/img/banner'), $footer_banner);
                $footer_banner = "/public/assets/admin/assets/img/banner/" . $footer_banner;
            }
            if ($request->file('branch_map') != "") {

                $branch_map = uniqid(time()) . '.' . $request->branch_map->extension();
                $request->branch_map->move(public_path('assets/admin/assets/img/banner'), $branch_map);
                $branch_map = "/public/assets/admin/assets/img/banner/" . $branch_map;
            }
            $data->specialty_1_desccription = $request->specialty_1_description;
            $data->specialty_2_description = $request->specialty_2_description;
            $data->branch_banner = $branch_icon;
            $data->banner = $branch_banner;
            $data->specialty_1 = $specialty_1;
            $data->specialty_2 = $specialty_2;
            $data->footer_banner = $footer_banner;
            $data->branch_map = $branch_map;


            $save = $data->save();
            if ($save) {
                return response()->json(['status' => true, 'msg' => "Branch created successfully"]);
                exit;
            } else {
                return response()->json(['status' => false, 'msg' => "Error's Occour try again later"]);
                exit;
            }
        }
    }

    /**
     * @param Request $request
     * @method use for update blog
     */
    public function edit($id)
    {
        // dd($id);
        $data = Branches::find($id);
        // dd($data);
        return view('admin.branches.edit', compact('data'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $rules = [
            'name' => 'required',
            'address' => 'required',
            // 'delivery_fee' => 'required',
            'phone' => 'required',
            'distence_from' => 'required',
            'dilivery_link' => 'required',
            'reservation_link' => 'required',
            'seating_availability' => 'required',
            'google_map_link' => 'required',
            'weekday_opening' => 'required',
            'weekday_afternoonc' => 'required',
            'weekday_afternoono' => 'required',
            'weekday_closing' => 'required',
            'weekend_opening' => 'required',
            'weekend_afternoonc' => 'required',
            'weekend_afternoono' => 'required',
            'weekend_closing' => 'required',
            'specialty_1_description' => 'required',
            'specialty_2_description' => 'required',

        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'msg' => $validator->errors()->first()]);
            exit;
        } else {
            $data = Branches::findOrFail($request->edit_branch_id);
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->distence_from = $request->distence_from;
            $data->dilivery_app_link = $request->dilivery_link;
            $data->reservation_link = $request->reservation_link;
            $data->seating_ability = $request->seating_availability;
            $data->google_map_link = $request->google_map_link;
            $data->weekday_opening = $request->weekday_opening;
            $data->weekday_noon_close = $request->weekday_afternoonc;
            $data->weekday_noon_open = $request->weekday_afternoono;
            $data->weekday_closing = $request->weekday_closing;
            $data->weekend_opening = $request->weekend_opening;
            $data->weekend_noon_close = $request->weekend_afternoonc;
            $data->weekend_noon_open = $request->weekend_afternoono;
            $data->weekend_closing = $request->weekend_closing;
            $data->specialty_1_desccription = $request->specialty_1_description;
            $data->specialty_2_description = $request->specialty_2_description;

            if ($request->file('branch_icon') != "") {

                if ($data->branch_banner) {
                    $old_image_path = public_path($data->branch_banner);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
                $branch_icon = uniqid(time()) . '.' . $request->branch_icon->extension();
                $request->branch_icon->move(public_path('assets/admin/assets/img/banner'), $branch_icon);
                $branch_icon = "/public/assets/admin/assets/img/banner/" . $branch_icon;

                $data->branch_banner = $branch_icon;
            }
            if ($request->file('branch_banner') != "") {
                if ($data->banner) {
                    $old_image_path = public_path($data->banner);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }

                $branch_banner = uniqid(time()) . '.' . $request->branch_banner->extension();
                $request->branch_banner->move(public_path('assets/admin/assets/img/banner'), $branch_banner);
                $branch_banner = "/public/assets/admin/assets/img/banner/" . $branch_banner;
                $data->banner    = $branch_banner;
            }
            if ($request->file('specialty_1') != "") {
                if ($data->specialty_1) {
                    $old_image_path = public_path($data->specialty_1);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }

                $specialty_1 = uniqid(time()) . '.' . $request->specialty_1->extension();
                $request->specialty_1->move(public_path('assets/admin/assets/img/banner'), $specialty_1);
                $specialty_1 = "/public/assets/admin/assets/img/banner/" . $specialty_1;
                $data->specialty_1    = $specialty_1;
            }
            if ($request->file('specialty_2') != "") {
                if ($data->specialty_2) {
                    $old_image_path = public_path($data->specialty_2);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }

                $specialty_2 = uniqid(time()) . '.' . $request->specialty_2->extension();
                $request->specialty_2->move(public_path('assets/admin/assets/img/banner'), $specialty_2);
                $specialty_2 = "/public/assets/admin/assets/img/banner/" . $specialty_2;
                $data->specialty_2    = $specialty_2;
            }


            if ($request->file('footer_banner') != "") {
                if ($data->footer_banner) {
                    $old_image_path = public_path($data->footer_banner);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }

                $footer_banner = uniqid(time()) . '.' . $request->footer_banner->extension();
                $request->footer_banner->move(public_path('assets/admin/assets/img/banner'), $footer_banner);
                $footer_banner = "/public/assets/admin/assets/img/banner/" . $footer_banner;
                $data->footer_banner = $footer_banner;
            }
            if ($request->file('branch_map') != "") {
                if ($data->branch_map) {
                    $old_image_path = public_path($data->branch_map);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }

                $branch_map = uniqid(time()) . '.' . $request->branch_map->extension();
                $request->branch_map->move(public_path('assets/admin/assets/img/banner'), $branch_map);
                $branch_map = "/public/assets/admin/assets/img/banner/" . $branch_map;
                $data->branch_map = $branch_map;
            }


            $save = $data->update();
        }

        if ($save) {
            return Redirect::route('admin.branch.edit', ['id' => $data->id])->with('message', 'Branch Update successfully');

            exit;
        } else {
            return response()->json(['status' => false, 'msg' => "Error's Occurs !! Try again later"]);
            exit;
        }
    }

    /**
     * @param $coupon_id
     * @method use for Request $request
     */
    public function statusUpdate(Request $request)
    {
        $where = array('id' => $request->id);
        $data = array(
            'status' => $request->status,
        );

        $update = Branches::where($where)->update($data);

        if ($update) {
            return response()->json(array('status' => true, 'msg' => "Successfully Updated !"));
            exit;
        } else {
            return response()->json(array('status' => false, 'msg' => "Error Occured, please try again"));
            exit;
        }
    }

    /**
     * @param Request $request
     * @method use for delete sub Category
     */
    public function destroy(Request $request)
    {
        try {
            $where = array('id' => $request->id);
            $del = Price::where($where)->delete();
            if ($del) {
                return response()->json(array('status' => true, 'msg' => "Successfully Deleted !!!!"));
                exit;
            } else {
                return response()->json(array('status' => false, 'msg' => "Error Occured, please try again"));
                exit;
            }
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(array('status' => false, 'msg' => 'Something went wrong !!!!'));
        }
    }

    //Order Details

    public function order_details()
    {
        $delivery = Delivery::select('deliveries.id', 'deliveries.name')->get();
        return view('admin.order.list', compact('delivery'));
    }

    public function order_ajax(Request $request)
    {
        if (isset($_GET['search']['value'])) {
            $search = $_GET['search']['value'];
        } else {
            $search = '';
        }
        if (isset($_GET['length'])) {
            $limit = $_GET['length'];
        } else {
            $limit = 10;
        }

        if (isset($_GET['start'])) {
            $ofset = $_GET['start'];
        } else {
            $ofset = 0;
        }

        $orderType = $_GET['order'][0]['dir'];
        $nameOrder = $_GET['columns'][$_GET['order'][0]['column']]['name'];


        $total = WebOrder::select(
            "web_orders.*",
            'deliveries.name',
            'users.name as uname',
            'users.phone as users_phone',
            'user_addresses.city',
            'user_addresses.state',
            'user_addresses.house',
            'user_addresses.street',
            'user_addresses.apartment',
            'user_addresses.cross_street',
        )
            ->leftjoin('deliveries', 'web_orders.delivery_user_id', '=', 'deliveries.id')
            ->leftjoin('users', 'web_orders.user_id', '=', 'users.id')
            ->leftjoin('user_addresses', 'web_orders.shipping_address', '=', 'user_addresses.id')
            ->orWhere(function ($query) use ($search) {
                $query->orWhere('txn_id', 'like', '%' . $search . '%');
            })->count();

        $groups = WebOrder::select(
            "web_orders.*",
            'deliveries.name',
            'users.name as uname',
            'users.phone as users_phone',
            'user_addresses.city',
            'user_addresses.state',
            'user_addresses.house',
            'user_addresses.street',
            'user_addresses.apartment',
            'user_addresses.cross_street',
        )
            ->leftjoin('deliveries', 'web_orders.delivery_user_id', '=', 'deliveries.id')
            ->leftjoin('users', 'web_orders.user_id', '=', 'users.id')
            ->leftjoin('user_addresses', 'web_orders.shipping_address', '=', 'user_addresses.id')
            ->orWhere(function ($query) use ($search) {
                $query->orWhere('txn_id', 'like', '%' . $search . '%');
            })
            ->offset($ofset)->limit($limit)
            ->orderBy($nameOrder, $orderType)->get();
        $i = 1 + $ofset;

        // print_r($groups);exit;
        $data = [];

        foreach ($groups as $cate) {

            $data[] = array(

                date('d-m-Y', strtotime($cate->created_at)),
                $cate->uname,
                $cate->users_phone,
                $cate->house . ', ' . $cate->street . ', ' . $cate->apartment . ', ' . $cate->city . ', ' . $cate->state,
                $cate->txn_id,
                $cate->invoice_id,
                $cate->payment_mode,
                $cate->pay_amount,
                '<select name="status" style="width: 120px"  id="status_update" data-status="' . $cate->status . '" class="form-control list-dropdown ' . ($cate->status == "PENDING" ? 'bg-secondary' : ($cate->status == "COMPLETED" ? 'bg-success' : ($cate->status == "CANCELLED" ? 'bg-warning' : ''))) . '" data-id="' . $cate->id . '">
                    <option value="PENDING" ' . ($cate->status == "PENDING" ? 'selected' : '') . ' data-value ="PENDING">Pending</option>
                    <option value="COMPLETED" ' . ($cate->status == "COMPLETED" ? 'selected' : '') . ' data-value ="COMPLETED" >Completed</option>
                    <option value="CANCELLED" ' . ($cate->status == "CANCELLED" ? 'selected' : '') . ' data-value ="CANCELLED" >Cancelled</option>
                    </select>',
                '<div class=""><a href="' . url("admin/order-particular-details", $cate->id) . '" class="btn btn-warning btn-sm" style="width: 120px"> Order Details </a></div>' . '' .
                    '<div class="mt-2"><a href="javascript: void(0);" class="editUser btn btn-primary btn-sm" data-id="' . $cate->id . '" style="width: 120px"> <i class="fa fa-plus"></i>Delivery Boy</a>&emsp;</div>'

            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] = $total;
        $records['data'] = $data;
        echo json_encode($records);
    }


    public function order_particular_details($id)
    {


        $data = WebOrderProduct::select(
            "web_order_products.*",
            'products.product_name',
            'products.qty',
            'products.price',
            'products.type as product_type',
            'products.size',
            'combopacks.package_name',
            'combopacks.image',
            'web_order_products.qty as pro_qty'
        )
            ->leftjoin('products', 'web_order_products.product_id', '=', 'products.id')
            ->leftjoin('combopacks', 'web_order_products.combo_pack_id', '=', 'combopacks.id')
            ->where('web_order_products.order_id', $id)->get();

        return view('admin.order.detail', compact('data'));
    }


    public function orderStoreDeliveryboy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'delivery_user_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'msg' => $validator->errors()->first()]);
            exit;
        } else {
            $data = WebOrder::findOrFail($request->order_id);
            $data->delivery_user_id = $request->delivery_user_id;
            $save = $data->update();
        }
        if ($save) {
            return response()->json(['status' => true, 'msg' => "Updated successfully"]);
            exit;
        } else {
            return response()->json(['status' => false, 'msg' => "Error's Occour try again later"]);
            exit;
        }
    }

    public function updateOrderDeliveryStatus(Request $request)
    {
        // print_r($request->all());
        // exit;
        $where = array('id' => $request->id);
        $data = array(
            'status' => $request->status,
        );

        $update = WebOrder::where(["id" => $request->id])->update(["status" => $request->status]);

        if ($update) {
            return response()->json(array('status' => true, 'msg' => "Successfully Updated !"));
            exit;
        } else {
            return response()->json(array('status' => false, 'msg' => "Error Occured, please try again"));
            exit;
        }
    }
    public function addFoodPrice($id)
    {
        try {
            $food = Products::where('status', 1)->get();
            $branch = Branches::where('status', 1)->find($id);
            if (!$branch) {
                return redirect()->route('admin.price.index')->withErrors(['error' => 'Branch not found.']);
            }
            return view('admin.set_price.add', compact('food', 'id'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function saveFoodPrice(Request $request, $id)
    {
        // dd($request->all());
        try {
            $branch = Branches::where('status', 1)->find($id);
            if (!$branch) {
                return redirect()->route('admin.price.index')->withErrors(['error' => 'Branch not found.']);
            }
            $validator = Validator::make($request->all(), [
                'food'  => 'required',
                'price' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                if($request->recmd){
                    $remd = 1;
                }
                else{
                    $remd = 0;
                }
                $data = new Price();
                $data->branch_id = $id;
                $data->product_id = $request->food;
                $data->price = $request->price;
                $data->recommend = $remd;
                $save = $data->save();
            }

            if ($save) {
                return redirect()->route('admin.price.index')->with(['status' => true, 'msg' => "Information stored successfully"]);
            } else {
                return redirect()->back()->withErrors(['error' => "Error occurred. Please try again."]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function viewPrice($id)
    {
        $branch = Branches::where('status', 1)->find($id);
        if (!$branch) {
            return redirect()->route('admin.price.index')->withErrors(['error' => 'Branch not found.']);
        }
        $price = Price::where('branch_id', $id)->get();
        $countproduct = count($price);
        if ($countproduct == 0) {
            return redirect()->route('admin.price.index')->withErrors(['error' => 'No food added in this Branch yet.']);
        }
        return view('admin.set_price.view', compact('price', 'id'));
    }
    public function viewPriceeAjaxList(Request $request)
    {
        // dd($request->id);
        if (isset($_GET['search']['value'])) {
            $search = $_GET['search']['value'];
        } else {
            $search = '';
        }
        if (isset($_GET['length'])) {
            $limit = $_GET['length'];
        } else {
            $limit = 10;
        }

        if (isset($_GET['start'])) {
            $ofset = $_GET['start'];
        } else {
            $ofset = 0;
        }

        $orderType = $_GET['order'][0]['dir'];
        $nameOrder = $_GET['columns'][$_GET['order'][0]['column']]['name'];

        $total = Price::leftjoin('branches', 'branches.id', 'prices.branch_id')
            ->leftjoin('products', 'products.id', 'prices.product_id')
            ->select('prices.price', 'products.product_name', 'products.id as prdoductId', 'branches.id as breanchId')
            ->where('prices.branch_id', $request->id)
            ->where(function ($query) use ($search) {
                $query->orWhere('products.product_name', 'like', '%' . $search . '%');
            })->count(); 

        $groups =  Price::leftjoin('branches', 'branches.id', 'prices.branch_id')
            ->leftjoin('products', 'products.id', 'prices.product_id')
            ->select('prices.price', 'products.product_name', 'products.id as prdoductId', 'branches.id as breanchId', 'prices.status', 'prices.id as idMain')
            ->where('prices.branch_id', $request->id)
            ->where(function ($query) use ($search) {
                $query->orWhere('products.product_name', 'like', '%' . $search . '%');
            })
            ->offset($ofset)->limit($limit)
            ->orderBy($nameOrder, $orderType)->get();
        // dd($groups);
        $i = 1 + $ofset;
        $data = [];

        foreach ($groups as $cate) {

            $status = '<button class="statusVerifiedClick btn ' . ($cate->status == 1 ? "btn-success btn-sm" : "btn-danger btn-sm") . '  " data-status="' . ($cate->status == 1 ? '0' : '1') . '" data-id="' . $cate->idMain . '">' . ($cate->status == 1 ? "Active" : "De-Active") . '</button>
                       ';
            $data[] = array(
                $i++,
                $cate->product_name,
                $cate->price,
                $status,
                '<a  href="' . route('admin.price.editPrice', ['id' => $cate->idMain]) . '" class="editCategory btn btn-info btn-sm " > <i class="fa fa-edit"></i></a> |
                <a href="#" class="btn btn-danger btn-sm branch-delete" data-id="' . $cate->idMain . '"><i class="fa fa-trash"></i></a>',

            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] = $total;
        $records['data'] = $data;
        echo json_encode($records);
    }
    public function editPrice($id)
    {
        $getData = Price::where('id', $id)->first();
        $food = Products::where('status', 1)->get();

        return view('admin.set_price.edit', compact('getData', 'food','id'));
    }
    public function updatePrice(Request $request, $id)
    {
        try {
            // dd($request->all());
            $validator = Validator::make($request->all(), [
                'food'  => 'required',
                'price' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $data = Price::find($id);

                if($request->recmd){
                    $remd = 1;
                }
                else{
                    $remd = 0;
                }

                $data->product_id = $request->food;
                $data->price = $request->price;
                $data->recommend = $remd;
                $save = $data->save();
            }

            if ($save) {
                return redirect()->route('admin.price.index')->with(['status' => true, 'msg' => "Information Update successfully"]);
            } else {
                return redirect()->back()->withErrors(['error' => "Error occurred. Please try again."]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
        return view('admin.set_price.index');
    }

    public function priceStatusUpdate(Request $request)
    {
        $where = array('id' => $request->id);
        $data = array(
            'status' => $request->status,
        );

        $update = Price::where($where)->update($data);

        if ($update) {
            return response()->json(array('status' => true, 'msg' => "Successfully Updated !"));
            exit;
        } else {
            return response()->json(array('status' => false, 'msg' => "Error Occured, please try again"));
            exit;
        }
    }
    public function priceDelete(Request $request)
    {
        try {
            $where = array('id' => $request->id);
            $del = Price::where($where)->delete();
            if ($del) {
                return response()->json(array('status' => true, 'msg' => "Successfully Deleted !!!!"));
                exit;
            } else {
                return response()->json(array('status' => false, 'msg' => "Error Occured, please try again"));
                exit;
            }
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(array('status' => false, 'msg' => 'Something went wrong !!!!'));
        }
    }
}
