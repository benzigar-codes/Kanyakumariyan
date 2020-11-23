@extends('template.default')

@section('title','Sign up')

@section('content')
    <div class="min-h-screen flex justify-center items-center bg-gray-500">
		<div class="w-full h-full rounded-none sm:w-auto bg-white p-10 shadow-lg sm:rounded-lg flex flex-col items-center min-w-64">
			<h1 class="text-3xl font-bold text-brown"><i class="fa fa-user mr-2"></i>Kanyakumariyan</h1>
			<p class="text-gray-600 text-sm text-center">Create an account to get Started !!!</p>
			<div class="flex w-full mt-2 space-x-2">
				<div class="w-1/3 h-2 bg-brown"></div>
				<div class="w-1/3 h-2 bg-gray-200"></div>
				<div class="w-1/3 h-2 bg-gray-200"></div>
			</div>
			<div class="flex mt-2">
				<p class="my-3 font-bold text-brown">Step 1 of 3 :</p>
			</div>
			<div class="flex flex-col space-y-3 w-full">
				<p>Name : </p>
				<input type="text" name="username" id="" placeholder="Ex: Benzigar" class="px-4 py-3 w-full bg-gray-200">
				<p>Email : {{-- <span class="font-bold text-red-500">This email is already taken</span> --}} </p>
				<input type="text" name="email" id="" placeholder="example@email.com" class="px-4 py-3 w-full bg-gray-200">
				<p>Password : </p>
				<input type="text" name="password" id="" placeholder="********" class="px-4 py-3 w-full bg-gray-200">
				<p>Re-Type Password : </p>
				<input type="text" name="password" id="" placeholder="********" class="px-4 py-3 w-full bg-gray-200">
				<button class="bg-brown text-yellow px-4 py-2">Continue</button>
			</div>
		</div>
	</div>
@endsection