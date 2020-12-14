<div class="mt-5 flex flex-col space-y-3 w-full">
	@if($message != '')
	<p><span class="font-bold text-red-500">{{$message}}</span></p>
	@endif
	<p>Email : </p>
	<input wire:model="email" type="text" name="email" id="" placeholder="example@email.com" class="px-4 py-3 w-full bg-gray-200">
	<p>Password : </p>
	<input wire:model="password" type="password" name="password" id="" placeholder="********" class="px-4 py-3 w-full bg-gray-200">
	<button wire:click="login()" class="bg-brown text-yellow px-4 py-2">Log in</button>
</div>