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

@if($errors ->any())
<div class="alert alert-danger">
      dữ liệu nhập vào không hợp lệ
</div>
@endif


<h1>{{ $title }}</h1>
<form action="{{route('users.store')}}" method="post">
      họ tên
      <input type="text" name="fullname" value="{{old('fullname')}}">
      <br>
      @error('fullname')
      <span class="text-danger">
            {{ $message }}

      </span>
      @enderror
      <br>

      Email
      <input type="text" name="email" value="{{old('email')}}">
      <br>
      @error('email')
      <span class="text-danger">
            {{ $message }}
      </span>
      @enderror
      <br>
      <button class="btn btn-primary ">Thêm mới</button>
      <a class="btn btn-warning" href="{{route('users.index')}}">Quay lại</a>
      @csrf
</form>

@endsection