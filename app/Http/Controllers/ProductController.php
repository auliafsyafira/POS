<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() {
        return view('FoodBeverage');
    }

    public function beautyHealth() {
        return view('BeautyHealth');
    }

    public function homeCare() {
        return view('HomeCare');
    }

    public function babyKid() {
        return view('BabyKid');
    }
}

