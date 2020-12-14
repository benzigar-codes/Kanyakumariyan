@extends('template.default')

@section('title','Kanyakumariyan')

@section('content')
	@auth
	<h1>Hello world {{auth()->id()}}</h1>
	@endauth
@endsection