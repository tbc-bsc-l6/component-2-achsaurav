<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STORE</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.7.1/cdn.min.js" integrity="sha512-gJEPTYpQVWBbJrUDHGLwMaDXRtGRnAym+3egw7LDYzSzMEqSWSj64wW5JZxcgJFSLXSf93t5sE9shlQDZsbyAQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <div class="text-[35px] font-semibold">
                        store
                    </div>
                </a>
            </div>

            {{-- @guest
                <li class="m-[0_5px]"><a href="/register" class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]">REGISTER</a></li>
           @endguest --}}
            {{-- @unless(auth()->check())
                <li class="m-[0_5px]"><a href="/register" class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]">REGISTER</a></li>
           @endunless --}}


            @auth
                <div class="mt-8 md:mt-0 flex">{{--flex-row-reverse--}}
                    <div x-data="{show: false}" @click.away="show=false">
                        <button @click="show= !show"
                            class="py-2 pl-3 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex bg-blue-500 rounded-full text-white">{{auth()->user()->name}}
                            
                        </button>
                        @can('admin')
                            <div x-show="show" class="absolute bg-gray-100 z-50 overflow-auto max-h-52">
                                
                                <a href="/admin/posts" class="block text-left px-3 hover:bg-gray-300  mt-1">Dashboard</a>
                                <a href="/admin/posts/create" class="block text-left px-3 hover:bg-gray-300  mt-1">New Post</a>
                                
                            </div>
                        @endcan
                       
                    </div>
                    {{-- <a href="/" class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</a> --}}
                    {{-- <a href="/" class="text-xs font-bold uppercase">Welcome</a> --}}

                    
                    <form action="/logout" method="post" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                        
                    
                </div>

            @else
                <div class="mt-8 md:mt-0">
                    <a href="/login" class="text-xs font-bold uppercase">Login</a>

                    <a href="/register" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Sign Up
                    </a>
                </div>

            @endauth

        </nav>


        {{ $slot }}

        @if (session()->has('success'))
            <div class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-[16px]">
                <p>{{ session('success') }}</p>
            </div>
        @endif



</body>

</html>
