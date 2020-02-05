<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function insert(Request $request){
      $data= $request->product_name;
      return view('home',compact('data')); 
    }
}
