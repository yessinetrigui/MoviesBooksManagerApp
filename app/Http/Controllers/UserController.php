<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $items = Item::all();
        return view("index", ["items"=>$items]);
    }
}
