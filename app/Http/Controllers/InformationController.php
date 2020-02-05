<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;

class InformationController extends Controller
{
    function index(){
    return view('information/index');
    }



    function create(Request $request)
    {

      information::insert([
        'name'          =>$request->name,
        'email'         =>$request->email,
        'project_name'  =>$request->project_name,
        'github_link'   =>$request->github_link

      ]);
      return back();


    }

function information_list()
{
  $lists = information::latest()->paginate(3);
    return view('information/information_list',compact('lists') );
}


    // END

}
