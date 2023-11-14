<?php

namespace App\Http\Controllers;

use App\Models\orderdetail;
use Illuminate\Http\Request;
use App\Models\orderdetails;  


class orderdetailController extends Controller
{
    public function index(){
        return view('orderdetail')->with(["orderdetails" => orderdetails::first()]);
    }
}
