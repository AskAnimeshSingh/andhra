<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
     /**
     * @return view Login
     */

    public function index()
    {
       return view('website.login');
    }

    /**
     * @return view Otp Form
     */
    public function opt_view(Request $request)
    {
        $id = $request->id;
        return view('website.otp' , compact('id'));  
    }
}
