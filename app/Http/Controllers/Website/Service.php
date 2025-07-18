<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class Service extends Controller
{
    /**
     * @return view Service
     */

    public function index()
    {
        $data = Contact::first();    
       return view('website.contact',compact('data'));
    }
}
