@extends('layouts.client')
@section('title')
{{ $title }}
@endsection

@section('content')
<h1>them san pham</h1>
<form action="" method="POST" name="">


      @if ($errors->any())
      <div class="alert alert-danger">
            <ul>
                  {{$err}}
            </ul>
      </div>
      @endif



      <div class="mb-3">
            <label for="">Tên sản phẩm</label>
            <input type="text" value="{{old('product_name')}}" class="type-control" name="product_name"
                  placeholder="Tên sản phẩm..">
            <br>
            @error('product_name')
            <span style="color:red">{{$message}}</span>
            @enderror
      </div>
      <div class="mb-3">
            <label for="">Giá sản phẩm</label>
            <input type="text" class="type-control" value="{{old('product_price')}}" name="product_price"
                  placeholder="Giá sản phẩm..">
            <br>
            @error('product_price')
            <span style="color:red">{{$message}}</span>
            @enderror
      </div>

      <button type="submit" class="btn btn-primary" name="">Thêm mới</button>
      @csrf
</form>
@endsection


@section('css')
@endsection



@section('js')
@endsection