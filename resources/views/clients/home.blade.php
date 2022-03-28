@extends('layouts.client')
@section('title')
{{ $title }}
@endsection


@section('sidebar')
@parent
<h3> day la Home sidebar</h3>
@endsection


@section('content')
<h1>trang chu</h1>
@include('clients.contents.slide')
@include('clients.contents.about ')

@env ('producttions')

<p>moi trung producttions</p>
@elseenv('test')
<p>moi trung test</p>
@else
<p>moi trung dev</p>

@endenv

<x-alert type="warning " content="dat hang thanh cong" />

{{--
<x-input.button />
<x-forms.button />
<x-lables.lable />
<x-divs.div /> --}}



<p><img src="https://icdn.dantri.com.vn/zoom/540_360/2022/03/28/ukraineafp-1648423318555.jpg" alt=""></p>
{{-- <p>

      <a href="{{Route('downloadImg').'?image=https://icdn.dantri.com.vn/zoom/540_360/2022/03/28/ukraineafp-1648423318555.jpg'}}"
            class="
btn btn-primary"> down anh</a>
</p> --}}

<p>
      <a href="{{route('downloadImg').'?image='.public_path('storage/276315395_1108464093340464_6475278352110996542_n.jpg')}}"
            class="
btn btn-primary"> down anh</a>
</p>
@endsection


@section('css')
<style>
      img {
            max-width: 100%;
            height: auto;
      }
</style>
@endsection



@section('js')


@endsection