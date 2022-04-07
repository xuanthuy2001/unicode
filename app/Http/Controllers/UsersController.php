<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    private $users;

    public function __construct()
    {
        $this->users = new Users();
    }

    public function index()
    {

        $usersList = $this->users->getAllUsers();
        $title = 'danh sach nguoi dung';
        return view('clients.users.list', compact('title', 'usersList'));
    }

    public function add()
    {
        $title = 'them nguoi dung';
        return view('clients.users.add', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required|min:5',
                'email' => 'required|email|unique:users',
            ],

            [
                'fullname.required' => 'họ tên bắt buộc phải nhập',
                'fullname.min' => 'họ tên phải từ :min ký tự trở lên ',
                'email.required' => 'Email bắt buộc phait nhập',
                'email.unique' => 'Email đã tồn tại',
                'email.email' => 'dữ liệu nhập phải là email',

            ]
        );
        $dateInsert =  [
            $request->fullname,
            $request->email,
            date('Y-m-d'),
        ];

        $this->users->addUSer($dateInsert);

        return redirect()->route('users.index')->with('msg', 'Thêm người dùng thành công');
    }
    public function getEdit(Request $request, $id = 0)
    {
        $title = 'trang sửa người dùng';
        if (!empty($id)) {
            $userDetail = $this->users->getDetail($id);

            if (!empty($userDetail[0])) {
                $request->session()->put('id', $id);
                $userDetail = $userDetail[0];
            } else {
                return redirect()->route('users.index')->with('msg', 'người dùng không tồn tại');
            }
        } else {
            return redirect()->route('users.index')->with('msg', 'người dùng không tồn tại');
        }

        return view('clients.users.edit', compact('title', 'userDetail'));
    }
    public function postEdit(Request $request, $id = 0)
    {
        $id = session('id');
        if (empty($id)) {
            return back()->with('msg', ' người đùng không tồng tại');
        }
        $request->validate(
            [
                'fullname' => 'required|min:5',
                'email' => 'required|email|unique:users,email,' . $id,
            ],
            [
                'fullname.required' => 'họ tên bắt buộc phải nhập',
                'fullname.min' => 'họ tên phải từ :min ký tự trở lên ',
                'email.required' => 'Email bắt buộc phait nhập',
                'email.unique' => 'Email đã tồn tại',
                'email.email' => 'dữ liệu nhập phải là email',
            ]
        );
        $dataUpdate =
            [
                $request->fullname,
                $request->email,
                date('Y-m-d'),
            ];
        $this->users->userUpdate($dataUpdate, $id);

        return back()->with('msg', 'Cập nhật người dùng thành công');
    }
    public function delete($id = 0)
    {
        if (!empty($id)) {
            $userDetail = $this->users->getDetail($id);
            if (!empty($userDetail[0])) {
                $deleteStatus =   $this->users->deleteUser($id);
                if ($deleteStatus) {
                    $msg  = 'Xóa người dùng thành công ';
                } else {
                    $msg  = 'Bạn không thể xóa vui long';
                }
            } else {

                $msg = 'người dùng không tồn tại';
            }
        } else {
            $msg = 'người dùng không tồn tại';
        }
        return redirect()->route('users.index')->with('msg', $msg);
    }
}