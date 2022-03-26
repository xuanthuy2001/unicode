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
 @include('clients.contents.about')

 @endsection


 @section('css')
 <style type="text/css">
header {
      color: blue;
      background-color: #ccc;

}
 </style>

 @endsection



 @section('js')
 <script type="text/javascript">
document.querySelector('.show').onclick = function() {
      alert('thanh cong');
}
 </script>

 @endsection