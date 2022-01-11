<x-header>
    
    <div class="md:max-w-[60%] md:m-auto md:text-[.9em] " >
        
        <form action="/admin/posts/{{$post->id}}" method="post" >
            @csrf
            @method('PATCH')
            <fieldset class="mb-[30px] border-none ">
               
                <legend class="text-[2.4em] font-medium mb-[30px] odd:pt-[40px] text-center">Edit Product</legend>
                
                <div class="md:flex">
                    <label for="category_id" class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium"> Product Type: </label>
                    @php
                        $categories= \App\Models\Category::all();
                    @endphp
                    <select id="category_id" name="category_id" class="md:flex-[2_550px] md:max-w-[50%] opacity-50 p-[2px] h-[32px] rounded-[2px] focus:border-[2px] focus:border-solid focus:border-black opacity-100">
                      <option value="" selected disabled> Choose Product</option>
                      @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{old('category_id', $post->category_id)==$category->id ? 'selected':''}}> {{ucwords($category->name)}} </option>
                      @endforeach
                     
                    </select>
                    @error('category')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:flex">
                    <input required type="text" value="{{old('title'), $post->title}}" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="title" name="title" placeholder="title">
                    @error('title')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:flex">
                    <input required type="text" value="{{$post->firstname}}" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="firstname" name="firstname" placeholder="firstName">
                    @error('firstname')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:flex">
                    <input required type="text" value="{{$post->surname}}" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="surname" name="surname" placeholder="surname/brand">
                    @error('surname')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="md:flex">
                    <input required type="text" value="{{$post->price}}" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="price" name="price" placeholder="Price">
                    @error('price')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:flex">
                    <input required type="text" value="{{$post->pages}}" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="pages" name="pages" placeholder="pages/ payLength">
                    @error('pages')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="p-[19px_39px_18px_39px] text-[18px] text-center not-italic rounded-[5px] w-[50%] border-[1px] border-solid border-[1px_1px_3px] shadow-[0_-1px_0_rgba(255,255,255,0.1)] mb-[10px] mt-[25px] font-medium hover:bg-gray-400 hover:rounded-[20px] hover:transition-all"> Edit </button>
            </fieldset>
        </form>
    </div>
</x-header>