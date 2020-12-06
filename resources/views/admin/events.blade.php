@extends('template.admin')

@section('title','Admin')

@section('events','border-l-4 border-white bg-green-800')

@section('content')
    <div class="p-4 bg-white m-4">
        <div class="flex justify-between">
            <h1 class="font-bold text-2xl">Blogs</h1>
            <button class="bg-green-800 text-white p-2 px-4 rounded-lg">New Blog</button>
        </div>
    </div>
    <div class="p-4 m-4">
        <div class="flex flex-wrap">
            <div class="w-1/4 p-2">
                <div class="bg-white p-3 rounded-lg">
                    <h1 class="text-lg">
                        How to find the lost Passport
                    </h1>
                    <hr class="mt-3">
                    <div class="flex mt-3 space-x-2">
                        <div class="w-1/2">
                            <button class="bg-gray-200 px-3 p-2 text-black w-full">
                                Edit
                            </button>
                        </div>
                        <div class="w-1/2">
                            <button class="bg-red-600 px-3 p-2 text-white w-full">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/4 p-2">
                <div class="bg-white p-3 rounded-lg">
                    <h1 class="text-lg">
                        Finding your favorite shops nearby
                    </h1>
                    <hr class="mt-3">
                    <div class="flex mt-3 space-x-2">
                        <div class="w-1/2">
                            <button class="bg-gray-200 px-3 p-2 text-black w-full">
                                Edit
                            </button>
                        </div>
                        <div class="w-1/2">
                            <button class="bg-red-600 px-3 p-2 text-white w-full">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection