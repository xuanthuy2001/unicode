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
    public function getAdd()
    {
        $this->data['title'] = "them san pham";

        return view('clients.add', $this->data);
    }
    public function postAdd(Request $request)
    {
        dd($request);
    }
    public function putAdd(Request $request)
    {
        dd($request);
    }
    public function getArr()
    {
        $contentArr = [
            'name' => "laravel 8.x",
            'leson' => "khóa học lập trình Laravel",
            'academy' => "Unicode academy",

        ];

        return $contentArr;
    }
    public function downImg(Request $request)
    {
        if (!empty($request->image)) {

            $image = trim($request->image);

            $fileName = basename($image);
            // return response()->streamDownload(function () use ($image) {
            //     $imagecontent = file_get_contents($image);
            //     echo $imagecontent;
            // }, $fileName);
            return response() -> download($image);
        }
    }
}