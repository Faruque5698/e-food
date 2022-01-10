<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        return view('adminPanel.Banner.banner');
    }

    public function add_banner(){
        return view('adminPanel.banner.add-banner');
    }
}
