<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
    }
    // phuong thuc get
    public function index()
    {
        return
            view('clients/categories/list');
    }
    // phuong thuc get

    public function getCategory($id)
    {
        return
            view('clients/categories/edit');
    }
    // phuong thuc post
    public function updateCategory($id)
    {
        return 'sua danh muc ' . $id;
    }
    // phuong thuc get

    public function addCategory()
    {

        return
            view('clients/categories/add');
    }

    // phuong thuc post
    public function handleCategory()
    {
        return 'xoa danh muc ';
    }
    // phuong thuc delete
    // public function deleteCategory($id)

    // {
    //     return 'xoa danh muc ' . $id;
    // }
}