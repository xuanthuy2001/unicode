<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['title'] = "hoc lap trinh";
        return view('clients.home', $this->data);
    }
    public function products()
    {
        $this->data['title'] = "san pham";
        return view('clients.products', $this->data);
    }
}