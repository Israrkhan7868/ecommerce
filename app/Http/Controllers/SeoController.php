<?php

namespace App\Http\Controllers;

use App\Models\seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function seo()
    {
        $setting = seo::first();
        return view('admin.seo', compact('setting'));
    }
    
    public function updateseo(Request $request)
    {
        $setting = seo::first();
        if (!$setting) {
            $setting = new seo;
        }
        $setting->keyword = $request->input('keyword');
        $setting->description = $request->input('description');
        $setting->aboutus = $request->input('aboutus');
        $setting->map = $request->input('map');
        
        $setting->save();
        
        return redirect()->back();

    }




}


