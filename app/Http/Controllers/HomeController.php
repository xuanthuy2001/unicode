<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['title'] = "hoc lap trinh";

        $users = DB::select('SELECT * from users');

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
        $this->data['err'] = "sai roi kia";

        return view('clients.add', $this->data);
    }



    public function postAdd(Request $request)
    {

        $rules = [
            'product_name' => 'required|min:6',
            'product_price' => 'required|integer',
        ];

        // $message = [
        //     'product_name.required' => 'tên sản phẩm không được để trống',
        //     'product_name.min' => ' sản phẩm phải lớn hơn 6 ký tự',
        //     'product_price.required' => 'giá sản phẩm không được để trống',
        //     'product_price.integer' => ' sản phẩm phải phải là số',
        // ];
        $message = [
            'required' => 'trường :attribute không được để trống',
            'min' => ' trường :attribute  lớn hơn :min ký tự',
            'integer' => 'trường :attribute  phải phải là số',
        ];

        $attribute = [
            'product_name' => 'Tên sản phẩm',
            'product_price' => 'Giá sản phẩm',

        ];

        $validator =   Validator::make($request->all(), $rules, $message, $attribute);
        // $validator->Validated();

        if ($validator->fails()) {
            $validator->errors()->add('msg', 'vui long kiem tra lai du lieu');


            // return 'thất bại';
        } else {
            // return ' thanh cong';
            return redirect()->route('product')->with('msg', 'thanh cong');
        }
        return back()->withErrors($validator);

        // $message = [
        //     'required' => 'trường :attribute không được để trống',
        //     'min' => ' trường :attribute  lớn hơn :min ký tự',
        //     'integer' => 'trường :attribute  phải phải là số',
        // ];
        // $request->validate($rules, $message);
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
            return response()->download($image);
        }
    }
}