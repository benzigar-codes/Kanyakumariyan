@extends('template.default')

@section('title','Sign up')

@section('content')
    <div class="min-h-screen flex justify-center items-center bg-gray-500">
		@livewire('user.signup')
	</div>
@endsection