<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function langchange(Request $request)
    {
        return "ok";
        App::setLocale($request->lang);
        session()->get('locale',$request->lang);
        return redirect()->back();
    }
}
