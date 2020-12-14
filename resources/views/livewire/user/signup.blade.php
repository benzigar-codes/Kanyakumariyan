<div class="w-full h-full rounded-none sm:w-auto bg-white p-10 shadow-lg sm:rounded-lg flex flex-col items-center min-w-64">
	<h1 class="text-3xl font-bold text-brown flex items-center">
	<svg class="h-10 w-10 bg-brown text-white rounded-full mr-3 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
    </svg>
	Kanyakumariyan</h1>
	<p class="text-gray-600 text-sm text-center">Already have an account ? <a class="text-red-500" href="{{route('user.login')}}">Sign in here</a></p>
	@if($step == 1)
	<div class="flex w-full mt-2 space-x-2">
		<div class="w-1/3 h-2 bg-brown"></div>
		<div class="w-1/3 h-2 bg-gray-200"></div>
		<div class="w-1/3 h-2 bg-gray-200"></div>
	</div>
	<div class="flex mt-2">
		<p class="my-3 font-bold text-brown">Step {{$step}} of 3 :</p>
	</div>
	<div class="flex flex-col space-y-3 w-full">
		<p>User-Name : 
		@error("username")
		<span class="font-bold text-red-500">{{$message}}</span> </p>
		@enderror
		</p>
		<input type="text" name="username" id="" wire:model.lazy="username" placeholder="Ex: Benzigar" class="px-4 py-3 w-full bg-gray-200">
		<p>Email : 
		@error("email")
		<span class="font-bold text-red-500">{{$message}}</span> </p>
		@enderror
		</p>
		<input type="text" name="email" id="" wire:model.lazy="email" placeholder="example@email.com" class="px-4 py-3 w-full bg-gray-200">
		<p>Password : 
		@error("password")
		<span class="font-bold text-red-500">{{$message}}</span> </p>
		@enderror
		</p>
		<input type="password" name="password" wire:model.lazy="password" id="" placeholder="********" class="px-4 py-3 w-full bg-gray-200">
		<button wire:click="nextStep()" class="bg-brown text-yellow px-4 py-2">Continue to Step 2</button>
	</div>
	@endif
	{{-- Step 2 --}}
	@if($step == 2)
	<div class="w-full">
		<div class="flex w-full mt-2 space-x-2">
			<div class="w-1/3 h-2 bg-brown"></div>
			<div class="w-1/3 h-2 bg-brown"></div>
			<div class="w-1/3 h-2 bg-gray-200"></div>
		</div>
		<div class="flex mt-2">
			<p class="my-3 font-bold text-brown">Step 2 of 3 :</p>
		</div>
		<div class="flex flex-col space-y-3 w-full">
			<p>Enter your Phone number : 
			@error("phone")
			<span class="font-bold text-red-500">{{$message}}</span> </p>
			@enderror
			</p>
			<input type="number" wire:model="phone" name="phone" class="px-4 py-3 w-full bg-gray-200" placeholder="Ex: 9876543212" id="">
			<hr>
			<p>Choose your gender : 
			@error("gender")
			<span class="font-bold text-red-500">{{$message}}</span> </p>
			@enderror
			</p>
			<select name="gender" wire:model="gender" class="px-4 py-3 w-full bg-gray-200" id="">
				<option value="male" selected="selected">Male</option>
				<option value="female">Female</option>
			</select>
			<hr>
			<p>Choose your account type : 
			@error("privacy")
			<span class="font-bold text-red-500">{{$message}}</span> </p>
			@enderror
			</p>
			<select name="privacy" wire:model="privacy" class="px-4 py-3 w-full bg-gray-200" id="">
				<option value="public" selected="selected">Public</option>
				<option value="private">Private</option>
			</select>
			<hr>
			<button wire:click="nextStep()" class="bg-brown text-yellow px-4 py-2">Continue to Step 3</button>
		</div>
	</div>
	@endif
	@if($step == 3)
	{{-- Step 3 --}}
	<div class="w-full">
		<div class="flex w-full mt-2 space-x-2">
			<div class="w-1/3 h-2 bg-brown"></div>
			<div class="w-1/3 h-2 bg-brown"></div>
			<div class="w-1/3 h-2 bg-brown"></div>
		</div>
		<div class="flex mt-2">
			<p class="my-3 font-bold text-brown">Step 3 of 3 :</p>
		</div>
		<div class="flex flex-col justify-center items-center space-y-3 w-full">
			<p>Choose a Profile Picture for you .,,,
			@error("image")
			<span class="font-bold text-red-500">{{$message}}</span> </p>
			@enderror
			</p>
			@if($image)
				<img src="{{$image->temporaryUrl()}}" alt="" class="w-64 bg-brown rounded-full object-cover">
			@endif
			<label for="image">
				<div class="bg-gray-200 text-brown px-4 py-2 text-center cursor-pointer">Upload an Image <i class="fa fa-upload"></i></div>
			</label>
			<input type="file" wire:model="image" class="hidden" name="image" id="image">
			
			<button wire:click="finalStep()" class="bg-brown text-yellow px-4 py-2">Done !</button>
		</div>
	</div>
	@endif
</div>