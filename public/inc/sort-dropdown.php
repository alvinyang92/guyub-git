<div class="flex space-x-2 items-center">

    <div class="font-medium text-guyub-black">Sort</div>

    <!-- item-->
    <div class=" px-3 py-2 border rounded-lg flex " x-cloak @click.away=" open=false" x-data="{ open: false }">

        <!-- button -->
        <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">

            <!-- word -->
            <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Newest</button>

            <!-- arrow -->
            <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        </a>

        <!-- dropdown menu -->
        <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="w-[223px] absolute mt-[33px] ml-[-136px] md:ml-[-10px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

            <!--max width container-->
            <div class=" bg-white rounded-md nav-shadow w-full py-4">

                <div class="flex flex-col justify-start space-y-3">
                    <!-- item-->
                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Newest</a>

                    <!-- item-->
                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Lower price</a>

                    <!-- item-->
                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Highest price</a>

                    <!-- item-->
                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">PSF (lowest to highest)</a>

                    <!-- item-->
                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">PSF (highest to lower)</a>

                    <!-- item-->
                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Built-up size (large to small)</a>

                   

                </div>

            </div>

        </div>

    </div>


    
</div>