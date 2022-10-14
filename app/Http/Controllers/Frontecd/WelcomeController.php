<?php

namespace App\Http\Controllers\Frontecd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $specials = Category::where('name','SPECIAL')->first();

        return view('welcome', compact('specials'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
