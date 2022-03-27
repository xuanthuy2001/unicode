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

 <x-alert type = "warning " content = "dat hang thanh cong"/>

 {{--  <x-input.button />
 <x-forms.button />
 <x-lables.lable />
 <x-divs.div />  --}}

 @endsection


 @section('css')

 @endsection



 @section('js')


 @endsection