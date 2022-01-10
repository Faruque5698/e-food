<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index(){
        return view('adminPanel.attribute.attribute');
    }



    public function attribute_value(){
        return view('adminPanel.attribute.attribute_value');
    }
}
