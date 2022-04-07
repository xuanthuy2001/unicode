<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUsers()
    {
        $users = DB::select('SELECT * from users');
        return $users;
    }
    public function testUsers()
    {
        $users = DB::select('SELECT * from users');
        return $users;
    }
    public function addUSer($data)
    {
        DB::insert('INSERT into users ( fullname ,  email , update_at) values (?, ?,?)', $data);
    }

    public function getDetail($id)
    {
        return DB::select('SELECT * from ' . $this->table . ' where id = ?', [$id]);
    }
    public function userUpdate($data, $id)
    {
        $data[] = $id;
        return DB::update(
            'UPDATE ' . $this->table . ' set fullname = ?, email = ? , create_at = ? where id = ?',
            $data
        );
    }
    public function deleteUser($id)
    {
        return  DB::delete("DELETE from $this->table  where id = ?", [$id]);
    }
}