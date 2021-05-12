<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class FashionController extends Controller
{
    // public function getList() {
    //     $vestiti = Dress::all();
    //     $vdata = [
    //         'dresses'=> $vestiti
    //     ];

    //     return view('home', $vdata);
    // }

    public function getArmani() {
        $brands = Dress::where('brand', 'armani')->get();
        $bdata = [
            'brand'=>$brands
        ];
        return view('home', $bdata);
    }

    
}
