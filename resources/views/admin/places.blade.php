@extends('template.admin')

@section('title','Admin')

@section('places','border-l-4 border-white bg-green-800')

@section('content')
	<div class="flex flex-wrap">
        <div class="w-1/2 md:w-1/3">
            <div class="p-4 bg-white m-4 rounded-lg h-full">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-green-600">Users</h1>
                    <a href="">
                        <button class="px-3 py-2 bg-green-200 hover:bg-green-300 text-green-700 rounded-lg">View All</button>
                    </a>
                </div>
                <hr class="my-3">
                <ul>
                    <li class="font-bold text-xl">Total : <span class="text-2xl">32</span></li>
                    <li class="font-bold text-xl">Today : <span class="text-2xl">10 <span class="text-gray-500">(new)</span></span></li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 md:w-1/3">
            <div class="p-4 bg-white m-4 rounded-lg h-full">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-green-600">Posts</h1>
                    <a href="">
                        <button class="px-3 py-2 bg-green-200 hover:bg-green-300 text-green-700 rounded-lg">View All</button>
                    </a>
                </div>
                <hr class="my-3">
                <ul>
                    <li class="font-bold text-xl">Total : <span class="text-2xl">32</span></li>
                    <li class="font-bold text-xl">Today : <span class="text-2xl">10 <span class="text-gray-500">(new)</span></span></li>
                    <li class="font-bold text-xl">Liked : <span class="text-2xl">32</span></li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 md:w-1/3">
            
        </div>
    </div>
@endsection