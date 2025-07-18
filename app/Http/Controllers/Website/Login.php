<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
     /**
     * @return view Login
     */

    public function index(Request $request)
    { 
        $branch_id = $request->branch_id;
        $table_id = $request->table_id;
       return view('website.login', compact('branch_id', 'table_id'));
    }

    /**
     * @return view Otp Form
     */
    public function opt_view(Request $request)
    {
        $id = $request->id;
        $branch_id = $request->branch_id;
        $table_id = $request->table_id;
        return view('website.otp' , compact('id', 'branch_id', 'table_id'));
    }
}
