<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class FashionController extends Controller
{
    public function getList() {
        $vestiti = Dress::all();
        $data = [
            'dresses'=> $vestiti
        ];

        return view('home', $data);
    }

    public function getArmani() {
        $brands = Dress::where('brand', 'armani')->get();
        $data = [
            'brand'=>$brands
        ];
        return view('armani', $data);
    }

    
}
