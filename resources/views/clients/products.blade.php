@extends('layouts.client')
@section('title')
{{ $title }}
@endsection


@section('sidebar')
@parent
<h3> day la product sidebar</h3>
@endsection


@section('content')
<h1>san pham</h1>

<x-package-alert />
@endsection


@section('css')
<style type="text/css">
header {
      color: orange;
}
</style>

@endsection



@section('js')


@endsection