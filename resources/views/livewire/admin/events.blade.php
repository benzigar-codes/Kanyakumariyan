<div x-data="{loading:false}">
    @if($add)
    <div class="absolute inset-0 bg-green-800 opacity-75 z-5">
        
    </div>
    @endif
    {{-- <div x-show="loading" class="fixed inset-0 bg-green-800 text-white z-10 flex justify-center items-center">
        <div class="h-10 w-10 text-white mr-4 animate-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
        </div>
        <h1 class="text-4xl font-bold animate-pulse">Loading</h1>
    </div> --}}
    {{-- Add Event --}}
    @if($add)
    <div class="absolute inset-0 flex justify-center items-center z-5">
        <form wire:submit.prevent="addEvent()" method="post" class="bg-white p-4 shadow-lg rounded-lg flex flex-col space-y-3" style="width:400px">
        	<div class="flex justify-between items-center">
        		<h1 class="font-bold text-3xl text-green-700">Add a new Event</h1>
        		<div wire:click="hideAdd" class="h-5 w-5 text-green-700 cursor-pointer">
        			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
        		</div>
        	</div>
        	<hr>
        	<p class="font-bold">Step {{$step}} of 2</p>
        	@if($message != '')
        		<p class="my-2 text-red-600 font-bold">{{$message}}</p>
        	@endif
        	<hr>
        	{{-- step 1 --}}
        	@if($step == 1)
				<p>Name of the event : <span class="text-red-600">*</span></p>
	      		<input type="text" wire:model.lazy="addTitle" name="title" class="bg-gray-200 p-2" id="">
	      		<p>Description of the event : <span class="text-red-600">*</span></p>
	      		<textarea name="desc" wire:model.lazy="addDesc" id="" cols="30" class="bg-gray-200 p-2" rows="10"></textarea>
	            <button wire:loading.remove wire:click.prevent="nextStep()" class="border-4 p-2 hover:bg-gray-200">
	            	<span>Next Step</span>
	            </button>
	            <button wire:loading wire:click.prevent="nextStep()" class="border-4 p-2 bg-green-800 text-white">
	            	<span>Loading</span>
	            </button>
        	@endif
        	{{-- step 2 --}}
        	@if($step == 2)
        		{{-- Date --}}
	        	<div class="flex">
	        		<button class="h-5 w-5 text-green-700 mr-2">
		        		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
						</svg>
		        	</button>
					<p>Choose the date of the event : <span class="text-red-600">*</span></p>
	        	</div>
	      		<input type="datetime-local" wire:model="addDate" name="title" class="bg-gray-200 p-2" id="">
	      		{{-- Location --}}
	      		<div class="flex">
	        		<button class="h-5 w-5 text-green-700 mr-2">
		        		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
						</svg>
		        	</button>
					<p>Choose the location of the event : <span class="text-red-600">*</span></p>
	        	</div>
	      		<input type="text" wire:model="addLocation" name="title" class="bg-gray-200 p-2" id="">
				{{-- Google Map --}}
				<div class="flex">
	        		<button class="h-5 w-5 text-green-700 mr-2">
		        		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
						</svg>
		        	</button>
					<p>Paste the google map code (Optional) :</p>
	        	</div>
	      		<input type="text" wire:model="addGoogle" name="title" class="bg-gray-200 p-2" id="">
	      		{{-- Pincode --}}
	      		<div class="flex">
	        		<button class="h-5 w-5 text-green-700 mr-2">
		        		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
						</svg>
		        	</button>
					<p>Pincode (Important, Should be correct) : <span class="text-red-600">*</span></p>
	        	</div>
	      		<input type="number" wire:model="addPincode" name="title" class="bg-gray-200 p-2" id="">
	      		{{-- Buttons --}}
	      		<div class="flex space-x-3">
	      			<button wire:click.prevent="prevStep()" class="border-4 p-2 hover:bg-gray-200 w-1/2">
	            	Previous Step
		            </button>
		            <button wire:loading.remove wire:target="addEvent()"  class="border-4 p-2 hover:bg-gray-200 w-1/2">
	            		<span>Submit</span>
		            </button>
		            <button wire:loading wire:target="addEvent()" class="border-4 p-2 bg-green-800 text-white w-1/2">
		            	<span>Loading</span>
		            </button>
	      		</div>
        	@endif
        </form>
    </div>
    @endif
    <div>
        {{-- Event heading --}}
        <div class="p-4 bg-white m-4 shadow-lg">
            <div class="flex justify-between">
                <h1 class="font-bold text-2xl flex items-center">
                    <div class="bg-white h-10 w-10 rounded-full text-green-600 p-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    Events
                    <div wire:loading class="h-8 w-8 animate-spin text-green-700 ml-3 z-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </h1>
                <button wire:click="showAdd()" class="bg-green-800 text-white p-2 px-4 rounded-lg hover:bg-green-700 flex items-center">
                <div class="h-6 w-6 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div> 
                    New Event
                </button>
            </div>
        </div>
        {{-- All Blogs --}}
        <div class="p-4 m-4">
            <div class="flex flex-wrap bg-white p-3">
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">SI.NO</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">Event Name</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">Location</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">Date</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">Pincode</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">Action</h1>
            	 </div>
            	 @foreach($events as $event)
            	 <div class="w-1/5 text-center p-2 border-t-2 border-grey-400">
            	 	<h1 class="text-md">{{$loop->index + 1}}</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2 border-t-2 border-grey-400">
            	 	<h1 class="text-md">{{$event->title}}</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2 border-t-2 border-grey-400">
            	 	<h1 class="text-md">{{$event->location}}</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2 border-t-2 border-grey-400">
            	 	<h1 class="text-md">{{\Carbon\Carbon::parse($event->date)->toFormattedDateString()}}</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2 border-t-2 border-grey-400">
            	 	<h1 class="text-md">{{$event->pincode}}</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2 border-t-2 border-grey-400 flex">
            	 	
            	 </div>
            	 @endforeach
            	 {{$events->links('pagination-links')}}
            </div>
        </div>
        <script src="{{asset('js/alpine.min.js')}}"></script>
    </div>
</div>