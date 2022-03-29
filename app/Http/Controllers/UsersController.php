<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {

        $users = DB::select('SELECT * from users');

        return view('clients.users.list', [
            'title' => 'danh sách người dùng',
            'users' => $users
        ]);
    }
}