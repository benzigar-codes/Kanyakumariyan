@extends('template.default')

@section('title','Log up')

@section('content')
    <div class="min-h-screen flex justify-center items-center bg-gray-500">
		<div class="w-full h-full rounded-none sm:w-auto bg-white p-10 shadow-lg sm:rounded-lg flex flex-col items-center min-w-64 space-y-3">
			<div>
				<h1 class="text-3xl font-bold text-brown flex items-center">
				<svg class="h-10 w-10 bg-brown text-white rounded-full mr-3 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
	            </svg>
			Kanyakumariyan</h1>
				<p class="text-gray-600 text-sm text-center">Don't have an account ? <a class="text-red-600" href="{{route('user.register')}}">Go here</a></p>
			</div>
			<p><span class="font-bold text-red-500">This email is already taken</span></p>
			<div class="mt-5 flex flex-col space-y-3 w-full">
				<p>Email : </p>
				<input type="text" name="email" id="" placeholder="example@email.com" class="px-4 py-3 w-full bg-gray-200">
				<p>Password : </p>
				<input type="password" name="password" id="" placeholder="********" class="px-4 py-3 w-full bg-gray-200">
				<button class="bg-brown text-yellow px-4 py-2">Log in</button>
			</div>
		</div>
	</div>
@endsection