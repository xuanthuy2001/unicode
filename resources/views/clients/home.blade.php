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

 @endsection


 @section('css')

 @endsection



 @section('js')


 @endsection