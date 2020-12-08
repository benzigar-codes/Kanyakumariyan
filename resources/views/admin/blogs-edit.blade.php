@extends('template.admin')

@section('title','Admin')

@section('blogs','border-l-4 border-white bg-green-800')

@section('content')
    <div>
    <div class="absolute inset-0 bg-green-800 opacity-75m">
        
    </div>
    {{-- Add blog --}}
    <div x-show="add" class="absolute inset-0 flex justify-center items-center z-5">
        <form action="{{route('admin.blogs.edit')}}" method="post" class="bg-white p-4 shadow-lg rounded-lg">
            @csrf
            <input type="hidden" name="id" value="{{$blog->id}}">
            <div class="flex justify-between">
                <input type="text" name="title" class="text-red-600 font-bold outline-none w-full text-3xl my-3" value="{{$blog->title}}" id="">
                <button @click.prevent="add=false" class="text-red-600">
                    <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <textarea name="blog">{!! htmlspecialchars($blog->blog) !!}</textarea>
            <button class="mt-4 border-4 border-green-800 px-4 py-2 hover:bg-green-900 hover:border-0 outline-none hover:text-white focus:outline-none">Update</button>
        </form>
    </div>
        <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'addBlog' );
        </script>
    </div>
</div>
@endsection