<div x-data="{add:false,loading:false}">
    <div x-show="add" class="absolute inset-0 bg-green-800 opacity-75m">
        
    </div>
    <div x-show="loading" class="fixed inset-0 bg-green-800 text-white z-10 flex justify-center items-center">
        <div class="h-10 w-10 text-white mr-4 animate-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
        </div>
        <h1 class="text-4xl font-bold animate-pulse">Loading</h1>
    </div>
    {{-- Add Event --}}
    <div x-show="add" class="absolute inset-0 flex justify-center items-center z-5">
        <form action="" method="post" class="bg-white p-4 shadow-lg rounded-lg">
            @csrf
            <div class="flex justify-between">
                <input type="text" name="addTitle" class="text-red-600 font-bold outline-none w-full text-3xl my-3" value="Title Here" id="">
                <button @click.prevent="add=false" class="text-red-600">
                    <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <button class="mt-4 border-4 border-green-800 px-4 py-2 hover:bg-green-900 hover:border-0 outline-none hover:text-white focus:outline-none">Publish</button>
        </form>
    </div>
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
                    <div wire:loading class="h-8 w-8 animate-spin text-green-700 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </h1>
                <button @click="add = true" class="bg-green-800 text-white p-2 px-4 rounded-lg hover:bg-green-700 flex items-center">
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
            	 	<h1 class="font-bold text-md">Name</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">Location</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">Time & Date</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2">
            	 	<h1 class="font-bold text-md">Pincode</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2 border-t-2 border-green-500">
            	 	<h1 class="text-md">1</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2 border-t-2 border-green-500">
            	 	<h1 class="text-md">Christmas Celebration</h1>
            	 </div>
            	 <div class="w-1/5 text-center p-2 border-t-2 border-green-500">
            	 	<h1 class="text-md">21 January</h1>
            	 </div>
            </div>
        </div>
        <script src="{{asset('js/alpine.min.js')}}"></script>
    </div>
</div>