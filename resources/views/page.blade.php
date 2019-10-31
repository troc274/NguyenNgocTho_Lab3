@extends('layout.master')

@section('title', 'Page Title')
@section('header')
@section('sidebar')

<p>ĐÂY LÀ LÀ TRANG PAGE KẾ THỪA MASTER PAGE</p>

@endsection

@section('content')

	<h2>{{$name}}</h2>
	<h3>if Statement</h3>
	@if ($day == 'Friday')
		<p>Time to party</p>
	@else
		<p>Time to make money</p>
	@endif
	<h2>Foreach Loop </h2>
	@foreach ($drinks as $drink)
	{{$drink}} <br>
	@endforeach

<p>THIS IS BODY CONTEN</p>
	<h2>Excute PHP Funtion</h2>
	<p>The date is {{date('D-M-Y')}}</p>
@endsection

