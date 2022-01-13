<x-header>

    @include('_posts-header')


    <main class="max-w-6xl mx-auto mt-2 lg:mt-20 space-y-6">

        <div class="lg:grid lg:grid-cols-3">
            
            @foreach ($posts as $post)
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">


                        <div class="mt-4 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="/categories/{{ $post->category->slug }}"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px">{{ $post->category->name }}</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        {{ $post->title }}
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Updated <time>{{$post->created_at->diffForHumans()}}</time>
                                    </span>
                                </div>

                                <div>
                                    <span>Price : ${{ $post->price }}</span>
                                </div>
                                <div>
                                    
                                    <span>
                                        
                                        @if ($post->category->name=="BOOK")
                                            Pages:

                                        @elseif ($post->category->name=="GAME")
                                            Play Length:
                                        @else
                                            PEGI:
                                        @endif
                                        
                                        
                                        {{ $post->pages }}
                                    
                                    </span>
                                </div>
                            </header>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <div class="ml-3">
                                        <h5 class="font-bold">{{ $post->firstname }} {{ $post->surname }}</h5>
                                        <h6 class="text-blue-500">{{ $post->category->name }}</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"
                                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read
                                        More</a>
                                </div>
                            </footer>
                        </div>

                    </div>

                </article>
            @endforeach
            
        </div>
        {{-- {{$posts->links('pagination::simple-tailwind')}} --}}
        {{-- {{ $posts->links() }} --}}
        {{-- {{ $posts->links('pagination::tailwind') }} --}}
    </main>
    
</x-header>


