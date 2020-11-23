@extends('template.default')

@section('title','Kanyakumariyan')

@section('content')
    {{-- mobile nav --}}
    <div class="flex md:hidden justify-between p-5 items-center md:px-10 bg-brown text-white fixed top-0 w-full z-8 border-4 border-white border-bottom-2" id="menu-toggler">
        <h1 class="text-white font-bold text-2xl">Kanyakumariyan</h1> 
        <i class="fa fa-bars text-3xl cursor-pointer"></i>
    </div>
    <div class="fixed hidden inset-0 z-10 bg-yellow w-full p-4 " id="menu">
        <div class="flex flex-col justify-between h-full">
            <div class="flex justify-end">
                <i class="fa fa-window-close text-brown text-4xl cursor-pointer" id="menu-close"></i>
            </div>
            <div class="flex flex-col justify-center items-center space-y-5 p-10">
                <a href="{{route('register')}}" class="w-full">
                    <div class="bg-white hover:bg-gray-200 py-4 px-8 w-full border-l-8 border-black">
                        <h1 class="text-5xl">Sign up</h1>
                    </div>
                </a>
                <a href="" class="w-full">
                    <div class="bg-white hover:bg-gray-200 py-4 px-8 w-full border-l-8 border-black">
                        <h1 class="text-5xl">Log in</h1>
                    </div>
                </a>
            </div>
            <div>
                
            </div>
        </div>
    </div>
    {{-- navbar --}}
    <div class="hidden md:flex justify-between p-5 items-center md:px-10 bg-brown text-white fixed top-0 w-full z-8 border-4 border-white border-bottom-2">
        <h1 class="text-white font-bold text-2xl">Kanyakumariyan</h1> 
        <ul class="flex space-x-4 items-center">
            <li>
                <a href="" class="bg-white flex items-center text-brown py-2 px-3 rounded-lg hover:bg-gray-200">
                    <img src="svg/login.svg" class="h-5 w-5 text-green-700 mr-2" alt="">
                    Log in
                </a>
            </li>
            <li>
                <a href="{{route('register')}}" class="border-2 border-white py-2 px-3 rounded-lg hover:bg-white hover:text-black">Sign in</a>
            </li>
        </ul>
    </div>
    {{-- hero --}}
    <div class="min-h-screen bg-brown text-yellow flex justify-center items-center">
        <div class="mt-12 h-full w-full flex flex-col lg:flex-row justify-center items-center text-white text-center border-bottom">
            <div class="flex flex-col justify-center items-center lg:w-2/3 p-10">
                <h1 class="text-xl sm:text-3xl text-yellow"><span class="text-4xl md:text-6xl font-bold text-yellow">Kanyakumari <br> </span> Welcomes you</h1>
                <p>Explore the real kanyakumari here.. </p>
                <button class="text-2xl px-4 py-2 rounded-lg shadow-lg mt-5 bg-white text-black w-64 hover:bg-gray-800 hover:text-white">Get Started</button>
                <div class="mt-10 h-2 w-32 bg-brown"></div>
            </div>
            <img src="images/kk.jpeg" class="hidden lg:block bg-white lg:min-h-screen w-1/3 object-cover">
        </div>
    </div>
    {{-- tourist place --}}
    <div class="min-h-screen bg-white bg-gray-300 bg-white p-8 lg:p-10">
        <h1 class="text-brown text-4xl font-bold mb-5">Best Tourist Places here . </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10">
            {{-- kanyakumari beach --}}
            <div class="bg-white rounded-lg shadow-lg w-full overflow-hidden border-4 border-black">
                <img class="h-64 w-full object-cover" src="images/kk.jpeg" alt="">
                <div class="flex">
                    <div class="w-4/5 p-4">
                        <h1 class="text-xl font-bold">Kanyakumari beach</h1>
                        <p class="text-sm text-gray-600">Kanyakumari . 629001</p>
                  </div>
                    <div class="w-1/5 bg-yellow flex justify-center items-center">
                        <img class="h-10 w-10 cursor-pointer" src="svg/login.svg
                        " alt="">
                    </div>
                </div>
            </div>
            {{-- muttam beach --}}
            <div class="bg-white rounded-lg shadow-lg w-full overflow-hidden border-4 border-black">
                <img class="h-64 w-full object-cover" src="images/muttam.jpg" alt="">
                <div class="flex">
                    <div class="w-4/5 p-4">
                        <h1 class="text-xl font-bold">Muttam beach</h1>
                        <p class="text-sm text-gray-600">Kallukulam . 629202</p>
                  </div>
                    <div class="w-1/5 bg-yellow flex justify-center items-center">
                        <img class="h-10 w-10 cursor-pointer" src="svg/login.svg
                        " alt="">
                    </div>
                </div>
            </div>
            {{-- colachel beach --}}
            <div class="bg-white rounded-lg shadow-lg w-full overflow-hidden border-4 border-black">
                <img class="h-64 w-full object-cover" src="images/colachel.jpg" alt="">
                <div class="flex">
                    <div class="w-4/5 p-4">
                        <h1 class="text-xl font-bold">Colachel Harbour</h1>
                        <p class="text-sm text-gray-600">Colachel . 629251</p>
                  </div>
                    <div class="w-1/5 bg-yellow flex justify-center items-center">
                        <img class="h-10 w-10 cursor-pointer" src="svg/login.svg
                        " alt="">
                    </div>
                </div>
            </div>
            {{-- mathur beach --}}
            <div class="bg-white rounded-lg shadow-lg w-full overflow-hidden border-4 border-black">
                <img class="h-64 w-full object-cover" src="images/mathur.jpg" alt="">
                <div class="flex">
                    <div class="w-4/5 p-4">
                        <h1 class="text-xl font-bold">Mathur Aquaduct</h1>
                        <p class="text-sm text-gray-600">Mathur . 629251</p>
                  </div>
                    <div class="w-1/5 bg-yellow flex justify-center items-center">
                        <img class="h-10 w-10 cursor-pointer" src="svg/login.svg
                        " alt="">
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg w-full flex flex-col justify-center items-center overflow-hidden p-10 bg-brown">
                <h1 class="text-3xl text-yellow font-bold text-center">Sign in to see more tourist places..</h1>
                <a href="{{route('register')}}">
                    <button class="bg-white py-2 mt-5 px-5 text-brown">Get Started</button>
                </a>
            </div>
        </div> 
    </div>

    <div class="min-h-screen flex flex-col lg:flex-row">
        {{-- Events --}}
        <div class="lg:w-1/3">
            <h1 class="font-bold text-3xl p-10 bg-brown text-white"><i class="fa fa-clock mr-3"></i>Upcoming Events ... 
            </h1>
            <div class="flex items-center m-4 bg-yellow p-5 rounded-lg shadow-lg mx-10">
                <div class="w-1/5">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="w-2/5">
                    <p class="font-bold text-sm">3 - March - 2021</p>
                </div>
                <div class="w-2/5 ml-2">
                    <p>Mandaikadu festival</p>
                    <p></p>
                </div>
            </div>
            <div class="flex items-center m-4 bg-yellow p-5 rounded-lg shadow-lg mx-10">
                <div class="w-1/5">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="w-2/5">
                    <p class="font-bold text-sm">20 - July - 2021</p>
                </div>
                <div class="w-2/5 ml-2">
                    <p>Vaavubali</p>
                    <p></p>
                </div>
            </div>
            <div class="mt-4 h-2 w-full bg-yellow"></div>
        </div>
        {{-- Lost --}}
        <div class="p-10 lg:w-1/3 bg-yellow flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-lg p-5 flex flex-col items-center justify-center space-y-5">
                <i class="fa fa-passport text-6xl text-center text-brown"></i>
                <h1 class="font-bold text-3xl">Lost your passport???</h1>
                <p class="text-sm">You can complain, We help you retrive it.</p>
                <a href="{{route('register')}}">
                    <button class="bg-brown px-4 py-3 text-white rounded-lg shadow-lg">Get Started <i class="ml-3 fa fa-sign"></i></button>
                </a>
            </div>
        </div>
        {{-- Community --}}
        <div class="lg:w-1/3 bg-brown flex justify-center items-center p-10">
            <div class="bg-white rounded-lg shadow-lg p-5 flex flex-col items-center justify-center space-y-5">
                <div>
                    <i class="fa fa-user-friends text-brown"></i>
                    <h1 class="font-bold text-3xl">Explore the Kanyakumariyans</h1>
                </div>
                <p class="text-sm">You can connect and follow people here to get more socialized.</p>
                <div class="flex space-x-4">
                    <img class="h-10 w-10 border-2 shadow-lg border-black object-cover rounded-full" src="images/ben.jpg" alt="">
                    <img class="h-10 w-10 border-2 shadow-lg border-black object-cover rounded-full" src="images/ligen.jpg" alt="">
                    <img class="h-10 w-10 border-2 shadow-lg border-black object-cover rounded-full" src="images/vinith.jpg" alt="">
                    <img class="h-10 w-10 border-2 shadow-lg border-black object-cover rounded-full" src="images/kk.jpeg" alt="">
                </div>
                <a href="{{route('register')}}">
                    <button class="bg-brown px-4 py-3 text-white rounded-lg shadow-lg">Get Started <i class="ml-3 fa fa-sign"></i></button>
                </a>
            </div>
        </div>
    </div>

    <div class="min-h-screen flex flex-col lg:flex-row">
        {{-- Job --}}
        <div class="p-10 lg:w-1/3 bg-yellow flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-lg p-5 flex flex-col items-center justify-center space-y-5">
                <i class="fa fa-biking text-6xl text-center text-brown"></i>
                <h1 class="font-bold text-3xl">Lost your Job???</h1>
                <p class="text-sm">We help you get hired. You can see the latest job post and apply</p>
                <a href="{{route('register')}}">
                    <button class="bg-brown px-4 py-3 text-white rounded-lg shadow-lg">Get Started <i class="ml-3 fa fa-sign"></i></button>
                </a>
            </div>
        </div>
        {{-- Shops --}}
        <div class="p-10 lg:w-1/3 bg-brown flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-lg p-5 flex flex-col items-center justify-center space-y-5">
                <i class="fa fa-shopping-bag text-6xl text-center text-brown"></i>
                <h1 class="font-bold text-3xl">Track the best shops around you </h1>
                <p class="text-sm">We help you get you to best nearest shops</p>
                <a href="{{route('register')}}">
                    <button class="bg-brown px-4 py-3 text-white rounded-lg shadow-lg">Get Started <i class="ml-3 fa fa-sign"></i></button>
                </a>
            </div>
        </div>
        {{-- about us --}}
        <div class="p-10 lg:w-1/3 bg-black text-white space-y-5">
            <h1 class="text-4xl font-bold border-b-4">About Us</h1>
            <p>Kanyakumariyan is a concept of helping new people or tourist in this city.</p>
            <p>We help the people to get connected and get more knowledge about this city.</p>
            <div class="flex justify-center items-center text-white space-x-4">
                <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                <div class="h-2 w-2 bg-white rounded-full"></div>
                <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                <div class="h-2 w-2 bg-white rounded-full"></div>
                <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#menu-toggler").click(
                function () {
                    $("#menu").fadeIn(300);
                }
            );
            $("#menu-close").click(
                function () {
                    $("#menu").fadeOut(300);
                }
            );      
        });
    </script>
@endsection