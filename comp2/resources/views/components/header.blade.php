
<!DOCTYPE html>
<html lang="en" class="text-[62.5%]">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
</head>
<body class="bg-gray-100">

    <nav class="flex h-[80px] w-[100%] items-center justify-between p-[0_50px_0_100px] flex-wrap">
        <div class="text-[35px] font-semibold">
           store
        </div>
        
        <ul class="flex flex-wrap list-none	">
            <form action="#" method="get">
                <input type="text" name="search" id="search" placeholder="search" value="{{request('search')}}" class="rounded-[5px] h-[40px] w-[150px] text-[16px]">
            </form>
            <li class="m-[0_5px]"><a class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]" href="/">HOME</a></li>
           <li class="m-[0_5px]"><a class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]" href="#">BOOK</a></li>
           <li class="m-[0_5px]"><a href="#" class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]">CD</a></li>
           <li class="m-[0_5px]"><a href="#" class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]">GAME</a></li>
           {{-- @guest
                <li class="m-[0_5px]"><a href="/register" class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]">REGISTER</a></li>
           @endguest --}}
           {{-- @unless (auth()->check())
                <li class="m-[0_5px]"><a href="/register" class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]">REGISTER</a></li>
           @endunless --}}

           @auth
                <li class="m-[0_5px] text-[18px] font-medium">Welcome, {{auth()->user()->name}}</li>
                <li class="m-[0_5px] text-[18px] font-medium">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="bg-red-500">Logout</button>
                    </form>
                </li>
            @else
                <li class="m-[0_5px]"><a href="/login" class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]">LOGIN</a></li>

                <li class="m-[0_5px]"><a href="/register" class="no-underline text-[18px] font-medium p-[8px_15px] rounded-[5px] tracking-[1px] transition-all delay-[0.3s]">REGISTER</a></li>
           @endauth
        </ul>
    </nav>

    
    {{$slot}}

    @if (session()->has('success'))
        <div class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-[16px]">
            <p>{{session('success')}}</p>
        </div>
    @endif
</body>
</html>