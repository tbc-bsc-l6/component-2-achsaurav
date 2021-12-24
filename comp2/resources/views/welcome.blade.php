<x-header>
    <div class="md:max-w-[60%] md:m-auto md:text-[.9em]">
        
        <form action="" method="post" >
            <fieldset class="mb-[30px] border-none">
                <legend class="text-[2.4em] font-medium mb-[30px] odd:pt-[40px] text-center">Contact Login</legend>

                <div class="md:flex">
                    <label for="mail" class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium"> Email Address </label>
                    <input required type="email" class="md:flex-[2_550px] md:max-w-[60%] text-[16px] w-[60%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100 placeholder-shown:text-right" id="mail" name="user_email" placeholder="Required">
                </div>

                <div class="md:flex">
                    <label for="tel" class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium"> Password </label>
                    <input type="tel" class="md:flex-[2_550px] md:max-w-[60%] text-[16px] w-[60%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100 placeholder-shown:text-right" id="pass" name="user_pass" placeholder="Required">
                </div>
 
                <button type="submit" class="p-[19px_39px_18px_39px] text-[18px] text-center not-italic rounded-[5px] w-[60%] border-[1px] border-solid border-[1px_1px_3px] shadow-[0_-1px_0_rgba(255,255,255,0.1)] mb-[10px] mt-[25px] font-medium hover:bg-gray-400 hover:rounded-[20px] hover:transition-all"> Sign In</button>
            </fieldset>
        </form>
    </div>
</x-header>