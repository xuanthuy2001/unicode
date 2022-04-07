@extends('layouts.client')
@section('title')
{{ $title }}
@endsection


@section('content')
@if(session('msg'))
<div class="alert alert-info">
      {{ session('msg')}}
</div>
@endif
<h1>{{ $title }}</h1>
<button class="btn btn-dark">
      <a href="{{route('users.add')}}">Thêm</a>
</button>
<table class="table table-bordered">
      <tr>
            <th width="5%">stt</th>
            <th>ten</th>
            <th>Email</th>
            <th width="15%">Thoi gian</th>

            <th>Sửa</th>
            <th>Xóa</th>
      </tr>
      @if(!empty($usersList))
      @foreach($usersList as $user => $item )
      <tr>
            <td>{{$item -> id}}</td>
            <td>{{$item -> fullname}}</td>
            <td>{{$item -> email}}</td>
            <td>{{$item -> create_at}}</td>
            <td><a class="btn btn-warning" href="{{route('users.edit' , ['id' =>$item ->id])}}">

                        Sửa
                  </a></td>
            <td><a onClick="return confirm ('Bạn có chắc chắn muốn xóa') " class="btn btn-danger"
                        href="{{route('users.delete' , ['id' =>$item ->id])}}">
                        Xóa

                  </a></td>
      </tr>
      @endforeach
      @else
      <td colspan="6">
            không có người dùng
      </td>
      @endif

</table>
@endsection