<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}">
        <style>
            *{
                font-family: "Poppins", sans-serif;
            }
            .bg-brown{
                background-color: #38191C;
            }
            .text-brown{
                color: #38191C;
            }
            .bg-yellow{
                background-color: #FDBB5F;
            }
            .text-yellow{
                color: #FDBB5F;
            }
            .bg-violet{
                background-color: #371757;
            }
            .text-violet{
                color: #371757;
            }
        </style>
        @yield('style')
    </head>
    <body>
        <div class="fixed bottom-0 right-0 hidden lg:block">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
        </div>
        <div class="min-h-screen flex">
        <div class="hidden lg:block lg:w-1/5 bg-green-700">
            <div class="font-bold text-xl bg-green-900 text-white w-full py-4 px-3 flex items-center border-b-4 border-green-500 mb-2">
                <svg class="h-10 w-10 bg-green-800 rounded-full mr-3 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
                <p>Kanyakumariyan</p>
            </div>
            {{-- Lists --}}
            <div class="flex flex-col">
                <a href="{{route('admin.home')}}" class="p-4 pl-5 flex items-center hover:bg-green-900 @yield('home')">
                    <div class="bg-white h-10 w-10 rounded-full text-green-600 p-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <h1 class="text-lg text-white">Home</h1>
                </a>
                <a href="{{route('admin.blogs')}}" class="p-4 pl-5 flex items-center hover:bg-green-900 @yield('blogs')">
                    <div class="bg-white h-10 w-10 rounded-full text-green-600 p-2 mr-4">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <h1 class="text-lg text-white">Blogs</h1>
                </a>
                <a href="{{route('admin.messages')}}" class="p-4 pl-5 flex items-center hover:bg-green-900 @yield('messages')">
                    <div class="bg-white h-10 w-10 rounded-full text-green-600 p-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </div>
                    <h1 class="text-lg text-white">Messages</h1>
                </a>
                <a href="{{route('admin.events')}}" class="p-4 pl-5 flex items-center hover:bg-green-900 @yield('events')">
                    <div class="bg-white h-10 w-10 rounded-full text-green-600 p-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h1 class="text-lg text-white">Events</h1>
                </a>
                <a href="{{route('admin.places')}}" class="p-4 pl-5 flex items-center hover:bg-green-900 @yield('places')">
                    <div class="bg-white h-10 w-10 rounded-full text-green-600 p-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </div>
                    <h1 class="text-lg text-white">Places</h1>
                </a>
                <a href="{{route('admin.reports')}}" class="p-4 pl-5 flex items-center hover:bg-green-900 @yield('reports')">
                    <div class="bg-white h-10 w-10 rounded-full text-green-600 p-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </div>
                    <h1 class="text-lg text-white">Reports</h1>
                </a>
            </div>
        </div>
        <div class="w-full lg:w-4/5 bg-gray-200">
            @yield('content')
        </div>
    </div>
        <script src="js/jquery.js"></script>
        @yield('script')
    </body>
</html>
