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
<form action="{{ route('users.postEdit') }}" method="post">
      họ tên
      <input type="text" name="fullname" value="{{old('fullname') ?? $userDetail -> fullname }} ">
      <br>
      @error('fullname')
      <span class="text-danger">
            {{ $message }}

      </span>
      @enderror
      <br>

      Email
      <input type="text" name="email" value="{{old('email')  ?? $userDetail -> email}}">
      <br>
      @error('email')
      <span class="text-danger">
            {{ $message }}
      </span>
      @enderror
      <br>
      <button class="btn btn-primary ">Cập nhật</button>
      <a class="btn btn-warning" href="{{route('users.index')}}">Quay lại</a>
      @csrf
</form>

@endsection