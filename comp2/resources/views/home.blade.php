<x-header>
    <!-- review section starts  -->

    <section class="lg:p-[2rem] p-[2rem_9%]" id="review">

        <h1 class="text-center text-[4rem] p-[1rem] uppercase text-[#2c2c54]"> All <span
                class="uppercase text-[#ff9f1a]">Products</span> </h1>

        <div class="flex flex-wrap gap-[1.5rem]">
            @foreach ($posts as $post)
                <div
                    class="flex-[1_1_30rem] text-center rounded-[.5rem] p-[2rem] bg-[#f9f9f9] border-[.1rem] border-solid border-[rgba(0,0,0,.1)] ">
                    <h3 class="text-[2.5rem] text-[#2c2c54]">{{$post->title}}</h3>
                    <h5 class="text-[2rem]">{{$post->firstname}} {{$post->surname}}</h5>

                    <p class="text-[1.6rem] text-[#666] p-[1rem_0] "><span>Category:</span><a href="#"
                            class="hover:text-blue-600 underline hover:italic">BOOK</a></p>

                    <p class="text-[1.6rem] text-[#666] p-[1rem_0]">Price: ${{$post->price}}</p>
                    <p class="text-[1.6rem] text-[#666] p-[1rem_0]">Number of pages: {{$post->pages}}</p>
                    {{-- <p class="text-[1.6rem] text-[#666] p-[1rem_0]">Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Fugiat, quos eum. Laborum aut a consequatur
                    ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab
                    asperiores?
                </p> --}}
                </div>
            @endforeach
        </div>

    </section>

    <!-- review section ends -->
</x-header>
