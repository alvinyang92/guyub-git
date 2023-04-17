<div class="w-full border-b lgg:hidden">
    <div class=" mx-auto max-w-8xl px-20 xl:px-8 lg:px-10  sm:px-3">
        <div class="flex  border-l border-r">
            


            <!-- All States -->
            <div class="p-3 border-r w-36 flex flex-grow-0 whitespace-nowrap " x-cloak @click.away="open = false" x-data="{ open: false }">

                <!-- button -->
                <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                    <!-- word -->
                    <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">All States</button>

                    <!-- arrow -->
                    <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>



                </a>

                <!-- dropdown menu -->
                <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[159px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                    <!--max width container-->
                    <div class=" bg-white rounded-md nav-shadow flex justify-between py-4">


                        <div class="flex flex-col justify-start space-y-3">
                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>






                        </div>






                    </div>

                </div>


            </div>

            <!-- Search -->
            <div class="flex flex-grow-[2]" x-cloak @click.away="open = false" x-data="{ open: false }">

                <div class="flex-grow-[2] p-4 border-r flex relative">

                    <input @click="open = !open" class="flex-grow-[2] font-medium placeholder-gray-500  " placeholder="Search by Location, Developer or Project">

                    <!-- dropdown menu -->
                    <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute left-0 top-[73px] w-full shadow-lg z-30 bg-white min-h-[50px] max-h-[250px] overflow-scroll ">

                        <!--max width container-->
                        <div class=" bg-white nav-shadow ">
                            <!-- District -->
                            <!-- General search -->
                            <!-- Projects -->
                            <!-- Neighbourhood -->

                            <div class="flex flex-col justify-start w-full space-y-3">
                                <!-- District - group suggest -->
                                <div class="">
                                    <!-- title-->
                                    <div class="px-4 py-2  cursor-pointer relative w-full uppercase text-[11px] tracking-[0.3em]">
                                        District
                                    </div>
                                    <!-- item-->
                                    <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                                        <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                            <div class="space-y-1">
                                                <div class="font-semibold leading-none">Bandar Sunway</div>
                                                <div class="text-[13px] leading-none">Selangor</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item-->
                                    <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                                        <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                            <div class="space-y-1">
                                                <div class="font-semibold leading-none">Bandar Sunway</div>
                                                <div class="text-[13px] leading-none">Selangor</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- General search - group suggest -->
                                <div class="">
                                    <!-- title-->
                                    <div class="px-4 py-2  cursor-pointer relative w-full uppercase text-[11px] tracking-[0.3em]">
                                        General search
                                    </div>
                                    <!-- item-->
                                    <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                                        <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <div class="">
                                                All in "Sunway"
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Projects - group suggest -->
                                <div class="">
                                    <!-- title-->
                                    <div class="px-4 py-2  cursor-pointer relative w-full uppercase text-[11px] tracking-[0.3em]">
                                        Projects
                                    </div>
                                    <!-- item-->
                                    <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                                        <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <div class="space-y-1">
                                                <div class="font-semibold leading-none">Bandar Sunway</div>
                                                <div class="text-[13px] leading-none">Selangor</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item-->
                                    <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                                        <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <div class="space-y-1">
                                                <div class="font-semibold leading-none">Bandar Sunway</div>
                                                <div class="text-[13px] leading-none">Selangor</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Projects - group suggest -->
                                <div class="">
                                    <!-- title-->
                                    <div class="px-4 py-2  cursor-pointer relative w-full uppercase text-[11px] tracking-[0.3em]">
                                        Neighbourhood
                                    </div>
                                    <!-- item-->
                                    <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                                        <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <div class="space-y-1">
                                                <div class="font-semibold leading-none">Bandar Sunway</div>
                                                <div class="text-[13px] leading-none">Selangor</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item-->
                                    <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                                        <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <div class="space-y-1">
                                                <div class="font-semibold leading-none">Bandar Sunway</div>
                                                <div class="text-[13px] leading-none">Selangor</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- property type -->
            <div class="p-3 border-r w-36 flex items-center flex-grow-0 whitespace-nowrap space-y-1  " x-cloak @click.away="open = false" x-data="{ open: false }">

                <!-- button -->
                <a @click="open = !open" class="text-guyub-black flex flex-col items-start overflow-hidden">
                    <div class="flex items-center justify-center space-x-1">
                        <!-- word -->
                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Property Type
                        </button>
                        <!-- arrow -->
                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>


                    <div class="text-gray-400 font-medium  ">All Non Landedn Landed </div>
                </a>

                <!-- dropdown menu -->
                <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[155px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                    <!--max width container-->
                    <div class=" bg-white rounded-md nav-shadow flex justify-between py-4">


                        <div class="flex flex-col justify-start space-y-3">
                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>






                        </div>






                    </div>

                </div>


            </div>

            <!-- Price Range -->
            <div class="p-3 border-r w-36 flex items-center flex-grow-0 whitespace-nowrap space-y-1  " x-cloak @click.away="open = false" x-data="{ open: false }">

                <!-- button -->
                <a @click="open = !open" class="text-guyub-black flex flex-col items-start overflow-hidden ">
                    <div class="flex items-center justify-center space-x-1">
                        <!-- word -->
                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Price Range </button>
                        <!-- arrow -->
                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>


                    <div class="text-gray-400 font-medium  ">All Non Landedn Landed </div>
                </a>

                <!-- dropdown menu -->
                <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[155px] -ml-64 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                    <!--max width container-->
                    <div class=" bg-white rounded-md nav-shadow w-[400px] pt-8  flex flex-col space-y-6 justify-between">

                        <div class="px-6">
                            <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative max-w-xl w-full ">
                                <!-- range slider -->
                                <div>
                                    <input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="mintrigger" x-model="minprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
                                    <input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="maxtrigger" x-model="maxprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
                                    <div class="relative z-10 h-1">
                                        <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>
                                        <div class="absolute z-20 top-0 bottom-0 rounded-md bg-guyub-green" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>
                                        <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-white border border-guyub-green rounded-full -mt-2 -ml-1" x-bind:style="'left: '+minthumb+'%'"></div>
                                        <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-white border border-guyub-green  rounded-full -mt-2 -mr-3" x-bind:style="'right: '+maxthumb+'%'"></div>
                                    </div>
                                </div>

                                <!-- price col -->
                                <div class="flex items-center justify-between pt-5 space-x-4 text-sm text-gray-700">

                                    <div class="space-y-2">
                                        <div class="font-medium">Min Price</div>

                                        <input type="text" maxlength="5" x-on:input.debounce="mintrigger" x-model="minprice" wire:model.debounce.300="minPrice" class="font-medium w-24 px-3 py-2 text-center border border-gray-200  rounded-lg focus:outline-none">
                                    </div>



                                    <div class="space-y-2">
                                        <div class="font-medium">Max Price</div>

                                        <input type="text" maxlength="5" x-on:input.debounce.300="maxtrigger" x-model="maxprice" wire:model.debounce="maxPrice" class="font-medium w-24 px-3 py-2 text-center border border-gray-200 rounded-lg  focus:outline-none">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-3 flex justify-between items-center border-t  ">
                            <a href="">
                                <div class="font-medium">Clear</div>
                            </a>
                            <a href="">
                                <div class="btn-small bg-guyub-green font-medium text-white">Apply</div>
                            </a>
                        </div>







                    </div>

                </div>


            </div>

            <!-- Bedrooms -->
            <div class="p-3 border-r w-36 flex items-center flex-grow-0 whitespace-nowrap space-y-1  " x-cloak @click.away="open = false" x-data="{ open: false }">

                <!-- button -->
                <a @click="open = !open" class="text-guyub-black flex flex-col items-start overflow-hidden">
                    <div class="flex items-center justify-center space-x-1">
                        <!-- word -->
                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Bedrooms</button>
                        <!-- arrow -->
                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>


                    <div class="text-gray-400 font-medium  ">All Non Landedn Landed </div>
                </a>

                <!-- dropdown menu -->
                <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[155px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                    <!--max width container-->
                    <div class=" bg-white rounded-md nav-shadow flex justify-between py-4">


                        <div class="flex flex-col justify-start space-y-3">
                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                            <!-- item-->
                            <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>






                        </div>






                    </div>

                </div>


            </div>

            <!-- Built-up Size -->
            <div class="p-3 border-r w-36 flex items-center flex-grow-0 whitespace-nowrap space-y-1  " x-cloak @click.away="open = false" x-data="{ open: false }">

                <!-- button -->
                <a @click="open = !open" class="text-guyub-black flex flex-col items-start overflow-hidden ">
                    <div class="flex items-center justify-center space-x-1">
                        <!-- word -->
                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Built-up Size</button>
                        <!-- arrow -->
                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>


                    <div class="text-gray-400 font-medium  ">All Non Landedn Landed </div>
                </a>

                <!-- dropdown menu -->
                <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[155px] -ml-64 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                    <!--max width container-->
                    <div class=" bg-white rounded-md nav-shadow w-[400px] pt-8  flex flex-col space-y-6 justify-between">

                        <div class="px-6">
                            <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative max-w-xl w-full ">
                                <!-- range slider -->
                                <div>
                                    <input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="mintrigger" x-model="minprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
                                    <input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="maxtrigger" x-model="maxprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
                                    <div class="relative z-10 h-1">
                                        <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>
                                        <div class="absolute z-20 top-0 bottom-0 rounded-md bg-guyub-green" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>
                                        <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-white border border-guyub-green rounded-full -mt-2 -ml-1" x-bind:style="'left: '+minthumb+'%'"></div>
                                        <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-white border border-guyub-green  rounded-full -mt-2 -mr-3" x-bind:style="'right: '+maxthumb+'%'"></div>
                                    </div>
                                </div>

                                <!-- price col -->
                                <div class="flex items-center justify-between pt-5 space-x-4 text-sm text-gray-700">

                                    <div class="space-y-2">
                                        <div class="font-medium">Min Sqft</div>

                                        <input type="text" maxlength="5" x-on:input.debounce="mintrigger" x-model="minprice" wire:model.debounce.300="minPrice" class="font-medium w-24 px-3 py-2 text-center border border-gray-200  rounded-lg focus:outline-none">
                                    </div>



                                    <div class="space-y-2">
                                        <div class="font-medium">Max Sqft</div>

                                        <input type="text" maxlength="5" x-on:input.debounce.300="maxtrigger" x-model="maxprice" wire:model.debounce="maxPrice" class="font-medium w-24 px-3 py-2 text-center border border-gray-200 rounded-lg  focus:outline-none">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-3 flex justify-between items-center border-t  ">
                            <a href="">
                                <div class="font-medium">Clear</div>
                            </a>
                            <a href="">
                                <div class="btn-small bg-guyub-green font-medium text-white">Apply</div>
                            </a>
                        </div>







                    </div>

                </div>


            </div>



            <!-- more filters -->
            <div class="p-3 w-36 flex justify-center flex-grow-0 whitespace-nowrap " x-cloak @click.away="open = false" x-data="{ open: false }">

                <!-- button -->
                <a @click="open = !open" class="text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                    <!-- word -->
                    <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">More Filters</button>

                    <!-- arrow -->
                    <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>



                </a>

                <!-- dropdown menu -->
                <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[159px] ml-[-22rem] rounded-md shadow-lg z-30 bg-white  overflow-scroll  ">

                    <!--max width container-->
                    <div class=" bg-white rounded-md nav-shadow w-[500px] pt-8 flex flex-col justify-between">

                        <!-- tab container -->
                        <div class="px-6" x-cloak x-data="{active: 0}">

                            <!-- tab -->
                            <div class="flex justify-between">

                                <!-- Residential -->
                                <button class="tab-detail w-full pb-3 border-b-2  " x-on:click.prevent="active = 0" x-bind:class="{'border-guyub-green border-b-2': active === 0}" x-cloak>
                                    Residential
                                </button>

                                <!-- All Commercial -->
                                <button class="tab-detail w-full pb-3 border-b-2 " x-on:click.prevent="active = 1" x-bind:class="{'border-guyub-green border-b-2': active === 1}" x-cloak>
                                    All Commercial
                                </button>
                            </div>

                            <!-- tab content item -->
                            <div class="flex justify-between py-6" x-show="active === 0">

                                <!-- all residential -->
                                <div class="w-full flex flex-col justify-start space-y-6">
                                    <!-- item-->
                                    <a href="" class=" relative w-full transition duration-200 ease-in">Residential</a>

                                    <!-- non landed -->
                                    <div class="flex flex-col space-y-2">
                                        <!-- item title-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in font-semibold">Non-Landed</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Condominium</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Service Residence</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Apartment</a>
                                    </div>

                                    <!-- landed -->
                                    <div class="flex flex-col space-y-2">
                                        <!-- item title-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in font-semibold">Landed</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Bungalow / Villa</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Link Bungalow </a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Semi-Detached House</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Terrace</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Town House</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Residential Land</a>
                                    </div>

                                </div>

                                <!-- dropdown -->
                                <div class="w-full flex flex-col justify-start space-y-6">

                                    <!-- item-->
                                    <div class=" px-3 py-2 border rounded-lg flex " x-cloak @click.away=" open=false" x-data="{ open: false }">

                                        <!-- button -->
                                        <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">

                                            <!-- word -->
                                            <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Tenure</button>

                                            <!-- arrow -->
                                            <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </button>
                                        </a>

                                        <!-- dropdown menu -->
                                        <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="w-[223px] absolute  mt-[37px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                            <!--max width container-->
                                            <div class=" bg-white rounded-md nav-shadow w-full py-4">

                                                <div class="flex flex-col justify-start space-y-3">
                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- item-->
                                    <div class=" px-3 py-2 border rounded-lg flex " x-cloak @click.away=" open=false" x-data="{ open: false }">

                                        <!-- button -->
                                        <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">

                                            <!-- word -->
                                            <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Completion Year</button>

                                            <!-- arrow -->
                                            <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </button>
                                        </a>

                                        <!-- dropdown menu -->
                                        <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="w-[223px] absolute  mt-[37px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                            <!--max width container-->
                                            <div class=" bg-white rounded-md nav-shadow w-full py-4">

                                                <div class="flex flex-col justify-start space-y-3">
                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- item-->
                                    <div class=" px-3 py-2 border rounded-lg flex " x-cloak @click.away=" open=false" x-data="{ open: false }">

                                        <!-- button -->
                                        <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">

                                            <!-- word -->
                                            <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Bathrooms</button>

                                            <!-- arrow -->
                                            <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </button>
                                        </a>

                                        <!-- dropdown menu -->
                                        <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="w-[223px] absolute  mt-[37px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                            <!--max width container-->
                                            <div class=" bg-white rounded-md nav-shadow w-full py-4">

                                                <div class="flex flex-col justify-start space-y-3">
                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- checkbox -->
                                    <div class="">
                                        <label class="inline-flex items-center space-x-2">
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-guyub-green ">
                                            <div class="">Live Virtual Tour Only</div>

                                        </label>

                                    </div>

                                </div>


                            </div>

                            <!-- tab content item -->
                            <div class="flex justify-between py-6" x-show="active === 1">

                                <!-- all residential -->
                                <div class="w-full flex flex-col justify-start space-y-6">
                                    <!-- item-->
                                    <a href="" class=" relative w-full transition duration-200 ease-in">All Commercial</a>

                                    <!-- non landed -->
                                    <div class="flex flex-col space-y-2">
                                        <!-- item title-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in font-semibold">Non-Landed</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Condominium</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Service Residence</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Apartment</a>
                                    </div>

                                    <!-- landed -->
                                    <div class="flex flex-col space-y-2">
                                        <!-- item title-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in font-semibold">Landed</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Bungalow / Villa</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Link Bungalow </a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Semi-Detached House</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Terrace</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Town House</a>
                                        <!-- item-->
                                        <a href="" class="relative w-full text-medium hover:text-guyub-green transition duration-200 ease-in">Residential Land</a>
                                    </div>

                                </div>

                                <!-- dropdown -->
                                <div class="w-full flex flex-col justify-start space-y-6">

                                    <!-- item-->
                                    <div class=" px-3 py-2 border rounded-lg flex " x-cloak @click.away=" open=false" x-data="{ open: false }">

                                        <!-- button -->
                                        <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">

                                            <!-- word -->
                                            <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Tenure</button>

                                            <!-- arrow -->
                                            <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </button>
                                        </a>

                                        <!-- dropdown menu -->
                                        <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="w-[223px] absolute  mt-[37px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                            <!--max width container-->
                                            <div class=" bg-white rounded-md nav-shadow w-full py-4">

                                                <div class="flex flex-col justify-start space-y-3">
                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- item-->
                                    <div class=" px-3 py-2 border rounded-lg flex " x-cloak @click.away=" open=false" x-data="{ open: false }">

                                        <!-- button -->
                                        <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">

                                            <!-- word -->
                                            <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Completion Year</button>

                                            <!-- arrow -->
                                            <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </button>
                                        </a>

                                        <!-- dropdown menu -->
                                        <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="w-[223px] absolute  mt-[37px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                            <!--max width container-->
                                            <div class=" bg-white rounded-md nav-shadow w-full py-4">

                                                <div class="flex flex-col justify-start space-y-3">
                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- item-->
                                    <div class=" px-3 py-2 border rounded-lg flex " x-cloak @click.away=" open=false" x-data="{ open: false }">

                                        <!-- button -->
                                        <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">

                                            <!-- word -->
                                            <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  " href="">Bathrooms</button>

                                            <!-- arrow -->
                                            <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </button>
                                        </a>

                                        <!-- dropdown menu -->
                                        <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="w-[223px] absolute  mt-[37px] -ml-3 rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                            <!--max width container-->
                                            <div class=" bg-white rounded-md nav-shadow w-full py-4">

                                                <div class="flex flex-col justify-start space-y-3">
                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All States</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Selangor</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kuala Lumpur</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perlis</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Perak</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Penang</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Negeri Sembilan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Kelantan</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Ipoh</a>

                                                    <!-- item-->
                                                    <a href="#" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Sabah</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- checkbox -->
                                    <div class="">
                                        <label class="inline-flex items-center space-x-2">
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-guyub-green ">
                                            <div class="">Live Virtual Tour Only</div>

                                        </label>

                                    </div>

                                </div>







                            </div>



                        </div>

                        <!-- clear.apply -->
                        <div class=" px-6 py-3 flex justify-between items-center border-t ">
                            <a href="">
                                <div class=" font-medium">Clear</div>
                            </a>
                            <a href="">
                                <div class="btn-small bg-guyub-green font-medium text-white">Apply</div>
                            </a>
                        </div>
                    </div>


                </div>

            </div>


        </div>


    </div>





</div>



</div>

</div>




</div>

</div>


</div>
</div>