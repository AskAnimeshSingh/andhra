<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }
}
