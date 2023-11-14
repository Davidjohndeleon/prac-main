<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\orderdetail;  


class orderdetailController extends Controller
{
    public function index(){
        return view('orderdetail')->with(["orderdetails" => orderdetail::all()]);
    }
}
