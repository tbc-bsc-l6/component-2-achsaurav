<x-header>
    <div class="md:max-w-[60%] md:m-auto md:text-[.9em]">
        
        <form action="" method="post" >
            <fieldset class="mb-[30px] border-none">
                <legend class="text-[2.4em] font-medium mb-[30px] odd:pt-[40px] text-center">Add Product</legend>

                <div class="md:flex">
                    <label for="state" class="md:flex-[1_200px] md:max-w-[150px] md:pb-[30px] m-[auto_0] block mb-[8px] text-[15px] font-medium"> Product Type: </label>
                    <select id="state" name="user_state" class="md:flex-[2_550px] md:max-w-[50%] opacity-50 p-[2px] h-[32px] rounded-[2px] focus:border-[2px] focus:border-solid focus:border-black opacity-100">
                      <option value="" selected disabled> Choose Product</option>
                      <option value="california"> CD </option>
                      <option value="kansas"> BOOK </option>
                      <option value="new_york"> GAME </option>
                    </select>
                </div>

                <div class="md:flex">
                    <input required type="text" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="name" name="user_name" placeholder="title">
                </div>

                <div class="md:flex">
                    <input required type="text" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="name" name="user_name" placeholder="firstName">
                </div>

                <div class="md:flex">
                    <input required type="text" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="name" name="user_name" placeholder="surname/brand">
                </div>
                
                <div class="md:flex">
                    <input required type="text" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="name" name="user_name" placeholder="Price">
                </div>

                <div class="md:flex">
                    <input required type="text" class="md:flex-[2_550px] md:max-w-[80%] text-[16px] w-[80%] rounded-[5px] shadow-[0_1px_0_rgba(0,0,0,0.03)] h-auto m-0 outline-0 p-[15px] mb-[30px] border-none opacity-50 focus:border-[2px] focus:border-solid focus:border-black opacity-100" id="name" name="user_name" placeholder="pages/ payLength">
                </div>

                <button type="submit" class="p-[19px_39px_18px_39px] text-[18px] text-center not-italic rounded-[5px] w-[50%] border-[1px] border-solid border-[1px_1px_3px] shadow-[0_-1px_0_rgba(255,255,255,0.1)] mb-[10px] mt-[25px] font-medium hover:bg-gray-400 hover:rounded-[20px] hover:transition-all"> Add New</button>
            </fieldset>
        </form>
    </div>
</x-header>