@extends('layouts.client')
@section('title')
{{ $title }}
@endsection

@section('content')
<h1>them san pham</h1>
<form action="" method="POST" name="">
      <input type="text" value=" " name="username">
      <!-- <input type="hidden" value="{{csrf_token()}}" name="_token"> -->

      <button type="submit" name="">Submit</button>
      @csrf
</form>
@endsection


@section('css')
@endsection



@section('js')
@endsection