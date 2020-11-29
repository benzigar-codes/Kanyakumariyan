@extends('template.default')

@section('title','Sign up')

@section('content')
    <div class="min-h-screen flex justify-center items-center bg-gray-500">
		<div class="w-full h-full rounded-none sm:w-auto bg-white p-10 shadow-lg sm:rounded-lg flex flex-col items-center min-w-64 space-y-3">
			<div>
				<h1 class="text-3xl font-bold text-brown"><i class="fa fa-user mr-2"></i>Kanyakumariyan</h1>
				<p class="text-gray-600 text-sm text-center">Don't have an account ? <a class="text-red-600" href="{{route('user.register')}}">Go here</a></p>
			</div>
			<p><span class="font-bold text-red-500">This email is already taken</span></p>
			<div class="mt-5 flex flex-col space-y-3 w-full">
				<p>Email : </p>
				<input type="text" name="email" id="" placeholder="example@email.com" class="px-4 py-3 w-full bg-gray-200">
				<p>Password : </p>
				<input type="text" name="password" id="" placeholder="********" class="px-4 py-3 w-full bg-gray-200">
				<button class="bg-brown text-yellow px-4 py-2">Log in</button>
			</div>
		</div>
	</div>
@endsection