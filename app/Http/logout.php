<?php

namespace App\Http;

use Illuminate\Support\Facades\Auth;

class Logout
{
    public function handle()
    {
        if (Auth::check()) {
            Auth::logout();
        }
    }
}
