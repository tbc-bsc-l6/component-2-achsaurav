<x-header>
    <div class="md:max-w-[60%] md:m-auto md:text-[.9em]">

        <form action="/register" method="post">
            @csrf
            <fieldset class="mb-[30px] border-none">
                <legend class="text-[2.4em] font-medium mb-[30px] odd:pt-[40px] text-center">Contact Register</legend>

                <div class="md:flex">
                    <label for="name"
                        class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium">
                        Full Name </label>
                    <input required type="text"
                        class="md:flex-[2_550px] md:max-w-[100%] text-[16px] w-[100%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100 placeholder-shown:text-right"
                        id="name" name="name" value="{{ old('name') }}" placeholder="Required">
                    @error('name')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:flex">
                    <label for="mail"
                        class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium">
                        Email Address </label>
                    <input required type="email"
                        class="md:flex-[2_550px] md:max-w-[100%] text-[16px] w-[100%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100 placeholder-shown:text-right"
                        id="mail" name="email" value="{{ old('email') }}" placeholder="Required">
                    @error('email')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:flex">
                    <label for="password"
                        class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium">
                        Password </label>
                    <input type="password"
                        class="md:flex-[2_550px] md:max-w-[100%] text-[16px] w-[100%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100 "
                        id="pass" name="password">
                    @error('password')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="md:flex">
                    <label for="tel"
                        class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium">
                        Phone Number </label>
                    <input type="text"
                        class="md:flex-[2_550px] md:max-w-[100%] text-[16px] w-[100%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100 "
                        id="tel" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="md:flex">
                    <label for="city"
                        class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium">
                        City </label>
                    <input type="text"
                        class="md:flex-[2_550px] md:max-w-[100%] text-[16px] w-[100%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100"
                        id="city" name="city" value="{{ old('city') }}">
                    @error('city')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:flex">
                    <label for="state"
                        class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium">
                        State </label>
                    <input type="text"
                        class="md:flex-[2_550px] md:max-w-[100%] text-[16px] w-[100%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100"
                        id="state" name="state" value="{{ old('state') }}">
                    @error('state')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="md:flex">
                    <label for="zip_code"
                        class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium">
                        Zip Code </label>
                    <input type="text"
                        class="md:flex-[2_550px] md:max-w-[100%] md:max-w-[25%] text-[16px] w-[100%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100"
                        id="zip_code" name="zip" value="{{ old('zip') }}">
                    @error('zip')
                        <p class="text-red-500 text-[18px] mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="p-[19px_39px_18px_39px] text-[18px] text-center not-italic rounded-[5px] w-[100%] border-[1px] border-solid border-[1px_1px_3px] shadow-[0_-1px_0_rgba(255,255,255,0.1)] mb-[10px] mt-[25px] font-medium hover:bg-gray-400 hover:rounded-[20px] hover:transition-all">
                    Sign Up</button>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-[18px]">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </fieldset>
        </form>
    </div>
</x-header>
