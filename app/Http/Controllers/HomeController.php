<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\sliders;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use app\Models\user;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == '0') {
                $sliders = sliders::all();
                return view('user.home', compact('sliders'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $sliders = sliders::all();
            return view('user.home', compact('sliders'));
        }
    }

    

}
