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
            <textarea name="addBlog"></textarea>
            <button class="mt-4 border-4 border-green-800 px-4 py-2 hover:bg-green-900 hover:border-0 outline-none hover:text-white focus:outline-none">Publish</button>
        </form>
    </div>
    <div>
        {{-- Blog heading --}}
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
            <div class="flex flex-wrap">
                @foreach(\App\Guide::orderBy('id','desc')->get() as $blog)
                <div class="w-1/1 md:w-1/4 p-2">
                    <div class="bg-white p-3 rounded-lg">
                        <h1 class="text-lg">
                            {{$blog->title}}
                        </h1>
                        <hr class="mt-3">
                        <div class="flex mt-3 space-x-2">
                            <div class="w-1/2">
                                <a href="{{url('/admin561890/blogs/edit/'.$blog->id)}}">
                                    <button class="bg-gray-200 hover:bg-gray-300 px-3 p-2 text-black w-full flex items-center focus:outline-none">
                                        <div class="h-5 w-5 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        Edit
                                    </button>
                                </a>
                            </div>
                            <div class="w-1/2">
                                <button wire:click.prevent="deleteBlog({{$blog->id}})" class="bg-red-600 px-3 p-2 text-white w-full hover:bg-red-700 flex items-center focus:outline-none">
                                    <div class="h-5 w-5 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
        <script src="{{asset('js/alpine.min.js')}}"></script>
        <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'addBlog' );
        </script>
    </div>
</div>