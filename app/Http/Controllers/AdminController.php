<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adeverinta;
class AdminController extends Controller
{
    //
     public function index()
    {
        //
         $adeverinte = Adeverinta::get();
        return view('admin.index')->with('adeverinte',$adeverinte);
    }

}
