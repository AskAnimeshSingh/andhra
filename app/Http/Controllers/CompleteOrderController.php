<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WebOrder;
use Illuminate\Http\Request;
use App\Models\Branches;


class CompleteOrderController extends Controller
{
    public function completeOrderindex()
    {
        $branch = Branches::where('status',1)->get();
        return view('admin.complete_order.index',compact('branch'));
    }

    public function completeOrderList(Request $request)
    {
        // dd($request->all());
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
        if (isset($_GET['branch_id']) && $_GET['branch_id'] == 'all') {
            $branchId = null; 
        } else {
            $branchId = $_GET['branch_id']; 
        }

        $orderType = $_GET['order'][0]['dir'];
        $nameOrder = 'users.name';

        $total = WebOrder::select("web_orders.*", 'users.name as uname', 'users.phone as users_phone','branches.name as branch_name')
            // ->join('deliveries', 'web_orders.delivery_user_id', '=', 'deliveries.id')
            ->join('users', 'web_orders.user_id', '=', 'users.id')
            // ->join('home_delivery_addresses', 'web_orders.shipping_address', '=', 'home_delivery_addresses.id')
            ->orWhere(function ($query) use ($search) {
                $query->orWhere('txn_id', 'like', '%' . $search . '%');

            })
            ->leftjoin('branches','branches.id','web_orders.branch_id')
            ->when($branchId, function ($query, $branchId) {
                if ($branchId === null) {
                    return $query; 
                } else {
                    return $query->where('web_orders.branch_id', $branchId); 
                }
            })
            ->where('web_orders.status', '=', 'COMPLETED')
            ->offset($ofset)->limit($limit)
            ->orderBy($nameOrder, $orderType)->count();

        $groups = WebOrder::select("web_orders.*", 'users.name as uname', 'users.phone as users_phone','branches.name as branch_name')
            // ->join('deliveries', 'web_orders.delivery_user_id', '=', 'deliveries.id')
            ->join('users', 'web_orders.user_id', '=', 'users.id')
            // ->join('home_delivery_addresses', 'web_orders.shipping_address', '=', 'home_delivery_addresses.id')
            ->orWhere(function ($query) use ($search) {
                $query->orWhere('txn_id', 'like', '%' . $search . '%');

            })
            ->leftjoin('branches','branches.id','web_orders.branch_id')
            ->when($branchId, function ($query, $branchId) {
                if ($branchId === null) {
                    return $query; 
                } else {
                    return $query->where('web_orders.branch_id', $branchId); 
                }
            })
            ->where('web_orders.status', '=', 'COMPLETED')
            ->offset($ofset)->limit($limit)
            ->orderBy($nameOrder, $orderType)->get();
            // dd($groups);
        $i = 1 + $ofset;

        $data = [];
        $blank= '';
        foreach ($groups as $cate) {

            $data[] = array(
                date('d-m-Y', strtotime($cate->created_at)),
                $cate->uname,
                $cate->users_phone,
                $cate->branch_name,
                $blank,
                $cate->txn_id,
                $cate->invoice_id,
                $cate->payment_mode,
                $cate->pay_amount,
                '<button class="btn btn-success" >Completed</button>',
                
            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] = $total;
        $records['data'] = $data;
        echo json_encode($records);
    }
}
