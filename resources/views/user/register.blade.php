@extends('template.default')

@section('title','Sign up')

@section('content')
    <div class="min-h-screen flex justify-center items-center bg-gray-500">
		<div class="w-full h-full rounded-none sm:w-auto bg-white p-10 shadow-lg sm:rounded-lg flex flex-col items-center min-w-64">
			<h1 class="text-3xl font-bold text-brown"><i class="fa fa-user mr-2"></i>Kanyakumariyan</h1>
			<p class="text-gray-600 text-sm text-center">Already have an account ? <a class="text-red-500" href="{{route('user.login')}}">Sign in here</a></p>
			{{-- Step 1 --}}
			<div class="flex w-full mt-2 space-x-2">
				<div class="w-1/3 h-2 bg-brown"></div>
				<div class="w-1/3 h-2 bg-gray-200"></div>
				<div class="w-1/3 h-2 bg-gray-200"></div>
			</div>
			<div class="flex mt-2">
				<p class="my-3 font-bold text-brown">Step 1 of 3 :</p>
			</div>
			<div class="flex flex-col space-y-3 w-full">
				<p>User-Name : </p>
				<input type="text" name="username" id="" placeholder="Ex: Benzigar" class="px-4 py-3 w-full bg-gray-200">
				<p>Email : <span class="font-bold text-red-500">This email is already taken</span> </p>
				<input type="text" name="email" id="" placeholder="example@email.com" class="px-4 py-3 w-full bg-gray-200">
				<p>Password : </p>
				<input type="text" name="password" id="" placeholder="********" class="px-4 py-3 w-full bg-gray-200">
				<p>Re-Type Password : </p>
				<input type="text" name="password" id="" placeholder="********" class="px-4 py-3 w-full bg-gray-200">
				<button class="bg-brown text-yellow px-4 py-2">Continue to Step 2</button>
			</div>


			{{-- Step 2 --}}

			{{-- <div class="flex w-full mt-2 space-x-2">
				<div class="w-1/3 h-2 bg-brown"></div>
				<div class="w-1/3 h-2 bg-brown"></div>
				<div class="w-1/3 h-2 bg-gray-200"></div>
			</div>
			<div class="flex mt-2">
				<p class="my-3 font-bold text-brown">Step 2 of 3 :</p>
			</div>
			<div class="flex flex-col space-y-3 w-full">
				<p>Enter your Phone number : </p>
				<input type="number" name="phone" class="px-4 py-3 w-full bg-gray-200" placeholder="Ex: 9876543212" id="">
				<hr>
				<p>Choose your gender : </p>
				<select name="privacy" class="px-4 py-3 w-full bg-gray-200" id="">
					<option value="public">Male</option>
					<option value="private">Female</option>
				</select>
				<hr>
				<p>Choose your account type : </p>
				<select name="privacy" class="px-4 py-3 w-full bg-gray-200" id="">
					<option value="public">Public</option>
					<option value="private">Private</option>
				</select>
				<hr>
				<button class="bg-brown text-yellow px-4 py-2">Continue to Step 3</button>
			</div> --}}

			{{-- Step 3 --}}
			{{-- <div class="flex w-full mt-2 space-x-2">
				<div class="w-1/3 h-2 bg-brown"></div>
				<div class="w-1/3 h-2 bg-brown"></div>
				<div class="w-1/3 h-2 bg-brown"></div>
			</div>
			<div class="flex mt-2">
				<p class="my-3 font-bold text-brown">Step 3 of 3 :</p>
			</div>
			<div class="flex flex-col justify-center items-center space-y-3 w-full">
				<p>Choose a Profile Picture for you .,,,</p>
				<img src="images/ben.jpg" alt="" class="w-64 bg-brown rounded-full">
				<label for="image">
					<div class="bg-gray-200 text-brown px-4 py-2 text-center cursor-pointer">Upload an Image <i class="fa fa-upload"></i></div>
				</label>
				<input type="file" class="hidden" name="image" id="image">
				
				<button class="bg-brown text-yellow px-4 py-2">Done !</button>
			</div> --}}
		</div>
	</div>
@endsection