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
<table class="table table-bordered">
      <tr>
            <th width="5%">stt</th>
            <th>ten</th>
            <th>Email</th>
            <th width="15%">Thoi gian</th>
      </tr>
      @if(!empty($users))
      @foreach($users as $user => $item )
      <tr>
            <td>{{$item -> id}}</td>
            <td>{{$item -> fullname}}</td>
            <td>{{$item -> email}}</td>
            <td>{{$item -> create_at}}</td>
      </tr>
      @endforeach
      @else
      <td colspan="4">
            không có người dùng
      </td>
      @endif

</table>
@endsection