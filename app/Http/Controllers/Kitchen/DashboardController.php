<?php

namespace App\Http\Controllers\Kitchen;

use App\Models\WebOrder;
use App\Models\Branches;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        // dd($admin->branch_id);
        $status = WebOrder::where('branch_id',$admin->branch_id)->get();
        $branch = Branches::find($admin->branch_id);

        $groups = WebOrder::select(
            "web_orders.*",
            'deliveries.name',
            'users.name as uname',
            'user_addresses.city',
            'user_addresses.state',
            'user_addresses.house',
            'user_addresses.street',
            'user_addresses.apartment',
            'user_addresses.cross_street',
        )
        ->where('web_orders.branch_id',$admin->branch_id)

            ->leftjoin('deliveries', 'web_orders.delivery_user_id', '=', 'deliveries.id')
            ->leftjoin('users', 'web_orders.user_id', '=', 'users.id')
            ->leftjoin('user_addresses', 'web_orders.shipping_address', '=', 'user_addresses.id')
            ->where('web_orders.status', 'PENDING')->orderBy('web_orders.id', 'ASC')->get();

        return view('kitchen.dashboard',compact('status','groups','branch'));
    }

   
   


    
}
