<div class="popup content_holder_black hidden  ">
    <div class="w-full h-full absolute left-0 top-0  bg-white py-6  z-50 space-y-7 mx-auto max-w-8xl px-10 lg:px-8 sm:px-3" x-data="{selected:null}">
        <!-- close -->
        <div class="absolute top-3 right-4 close-white-gallery">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>

        </div>

        <div class="pb-20 space-y-7">
            <!-- search bar -->
            <div class=" flex" x-cloak @click.away="open = false" x-data="{ open: false}">
                <div class="relative w-full border-gray-200">
                    <input @click="open = !open" class="w-full px-4 py-2 font-medium rounded appearance-none placeholder-gray-500 placeholder-opacity-100 border " placeholder="Search by Location Keyword, Property Name or Developer Name">
                    <!-- dropdown menu -->
                    <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute w-full shadow-lg z-30 bg-white min-h-[50px] max-h-[250px] overflow-scroll ">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- All states -->
            <select class="w-full  font-bold border-gray-200 rounded">
                <option class="font-bold" value="Malaysia">All States</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
                <option value="Johor">Johor</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Pahang">Pahang</option>
                <option value="Melaka">Melaka</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Putrajaya">Putrajaya</option>
                <option value="Perlis">Perlis</option>
                <option value="Labuan">Labuan</option>
            </select>
            <!-- property type -->
            <select class="w-full  font-bold border-gray-200 rounded">
                <option value="Malaysia">Property type</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
                <option value="Johor">Johor</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Pahang">Pahang</option>
                <option value="Melaka">Melaka</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Putrajaya">Putrajaya</option>
                <option value="Perlis">Perlis</option>
                <option value="Labuan">Labuan</option>
            </select>
            <!-- price range -->
            <div class="space-y-4">
                <div class="font-bold text-sm">Price range</div>
                <div class="flex justify-between items-center space-x-6">
                    <!-- price col -->
                    <select class="w-full border-gray-200 rounded">
                        <option value="0">Any</option>
                        <option value="100000">RM 100,000</option>
                        <option value="200000">RM 200,000</option>
                        <option value="300000">RM 300,000</option>
                        <option value="400000">RM 400,000</option>
                        <option value="500000">RM 500,000</option>
                        <option value="600000">RM 600,000</option>
                        <option value="700000">RM 700,000</option>
                        <option value="800000">RM 800,000</option>
                        <option value="900000">RM 900,000</option>
                        <option value="1000000">RM 1,000,000</option>
                        <option value="1500000">RM 1,500,000</option>
                        <option value="2000000">RM 2,000,000</option>
                        <option value="2500000">RM 2,500,000</option>
                        <option value="3000000">RM 3,000,000</option>
                        <option value="3500000">RM 3,500,000</option>
                        <option value="4000000">RM 4,000,000</option>
                        <option value="4500000">RM 4,500,000</option>
                        <option value="5000000">RM 5,000,000</option>
                    </select>
                    <div class="">-</div>
                    <select class="w-full border-gray-200 rounded">
                        <option value="0">Any</option>
                        <option value="100000">RM 100,000</option>
                        <option value="200000">RM 200,000</option>
                        <option value="300000">RM 300,000</option>
                        <option value="400000">RM 400,000</option>
                        <option value="500000">RM 500,000</option>
                        <option value="600000">RM 600,000</option>
                        <option value="700000">RM 700,000</option>
                        <option value="800000">RM 800,000</option>
                        <option value="900000">RM 900,000</option>
                        <option value="1000000">RM 1,000,000</option>
                        <option value="1500000">RM 1,500,000</option>
                        <option value="2000000">RM 2,000,000</option>
                        <option value="2500000">RM 2,500,000</option>
                        <option value="3000000">RM 3,000,000</option>
                        <option value="3500000">RM 3,500,000</option>
                        <option value="4000000">RM 4,000,000</option>
                        <option value="4500000">RM 4,500,000</option>
                        <option value="5000000">RM 5,000,000</option>
                    </select>
                </div>
            </div>
            <!-- built up size -->
            <div class="space-y-4">
                <div class="font-bold ">Built-up size</div>
                <div class="flex justify-between items-center space-x-6">
                    <!-- price col -->
                    <select class="w-full border-gray-200 rounded">
                        <option value="0">Any</option>
                        <option value="250">250 sqft</option>
                        <option value="300">300 sqft</option>
                        <option value="350">350 sqft</option>
                        <option value="400">400 sqft</option>
                        <option value="450">450 sqft</option>
                        <option value="500">500 sqft</option>
                        <option value="550">550 sqft</option>
                        <option value="600">600 sqft</option>
                        <option value="650">650 sqft</option>
                        <option value="700">700 sqft</option>
                        <option value="750">750 sqft</option>
                        <option value="800">800 sqft</option>
                        <option value="850">850 sqft</option>
                        <option value="900">900 sqft</option>
                        <option value="950">950 sqft</option>
                        <option value="1000">1,000 sqft</option>
                        <option value="1050">1,050 sqft</option>
                        <option value="1100">1,100 sqft</option>
                        <option value="1150">1,150 sqft</option>
                        <option value="1200">1,200 sqft</option>
                        <option value="1250">1,250 sqft</option>
                        <option value="1300">1,300 sqft</option>
                        <option value="1350">1,350 sqft</option>
                        <option value="1400">1,400 sqft</option>
                        <option value="1450">1,450 sqft</option>
                        <option value="1500">1,500 sqft</option>
                        <option value="1550">1,550 sqft</option>
                        <option value="1600">1,600 sqft</option>
                        <option value="1650">1,650 sqft</option>
                        <option value="1700">1,700 sqft</option>
                        <option value="1750">1,750 sqft</option>
                        <option value="1800">1,800 sqft</option>
                        <option value="1850">1,850 sqft</option>
                        <option value="1900">1,900 sqft</option>
                        <option value="1950">1,950 sqft</option>
                        <option value="2000">2,000 sqft</option>
                        <option value="2050">2,050 sqft</option>
                        <option value="2100">2,100 sqft</option>
                        <option value="2150">2,150 sqft</option>
                        <option value="2200">2,200 sqft</option>
                        <option value="2250">2,250 sqft</option>
                        <option value="2300">2,300 sqft</option>
                        <option value="2350">2,350 sqft</option>
                        <option value="2400">2,400 sqft</option>
                        <option value="2450">2,450 sqft</option>
                        <option value="2500">2,500 sqft</option>
                        <option value="2550">2,550 sqft</option>
                        <option value="2600">2,600 sqft</option>
                        <option value="2650">2,650 sqft</option>
                        <option value="2700">2,700 sqft</option>
                        <option value="2750">2,750 sqft</option>
                        <option value="2800">2,800 sqft</option>
                        <option value="2850">2,850 sqft</option>
                        <option value="2900">2,900 sqft</option>
                        <option value="2950">2,950 sqft</option>
                        <option value="3000">3,000 sqft</option>
                        <option value="3050">3,050 sqft</option>
                        <option value="3100">3,100 sqft</option>
                        <option value="3150">3,150 sqft</option>
                        <option value="3200">3,200 sqft</option>
                        <option value="3250">3,250 sqft</option>
                        <option value="3300">3,300 sqft</option>
                        <option value="3350">3,350 sqft</option>
                        <option value="3400">3,400 sqft</option>
                        <option value="3450">3,450 sqft</option>
                        <option value="3500">3,500 sqft</option>
                        <option value="3550">3,550 sqft</option>
                        <option value="3600">3,600 sqft</option>
                        <option value="3650">3,650 sqft</option>
                        <option value="3700">3,700 sqft</option>
                        <option value="3750">3,750 sqft</option>
                        <option value="3800">3,800 sqft</option>
                        <option value="3850">3,850 sqft</option>
                        <option value="3900">3,900 sqft</option>
                        <option value="3950">3,950 sqft</option>
                        <option value="4000">4,000 sqft</option>
                        <option value="4050">4,050 sqft</option>
                        <option value="4100">4,100 sqft</option>
                        <option value="4150">4,150 sqft</option>
                        <option value="4200">4,200 sqft</option>
                        <option value="4250">4,250 sqft</option>
                        <option value="4300">4,300 sqft</option>
                        <option value="4350">4,350 sqft</option>
                        <option value="4400">4,400 sqft</option>
                        <option value="4450">4,450 sqft</option>
                        <option value="4500">4,500 sqft</option>
                        <option value="4550">4,550 sqft</option>
                        <option value="4600">4,600 sqft</option>
                        <option value="4650">4,650 sqft</option>
                        <option value="4700">4,700 sqft</option>
                        <option value="4750">4,750 sqft</option>
                        <option value="4800">4,800 sqft</option>
                        <option value="4850">4,850 sqft</option>
                        <option value="4900">4,900 sqft</option>
                        <option value="4950">4,950 sqft</option>
                        <option value="5000">5,000 sqft</option>
                        <option value="5050">5,050 sqft</option>
                        <option value="5100">5,100 sqft</option>
                        <option value="5150">5,150 sqft</option>
                        <option value="5200">5,200 sqft</option>
                        <option value="5250">5,250 sqft</option>
                        <option value="5300">5,300 sqft</option>
                        <option value="5350">5,350 sqft</option>
                        <option value="5400">5,400 sqft</option>
                        <option value="5450">5,450 sqft</option>
                        <option value="5500">5,500 sqft</option>
                        <option value="5550">5,550 sqft</option>
                        <option value="5600">5,600 sqft</option>
                        <option value="5650">5,650 sqft</option>
                        <option value="5700">5,700 sqft</option>
                        <option value="5750">5,750 sqft</option>
                        <option value="5800">5,800 sqft</option>
                        <option value="5850">5,850 sqft</option>
                        <option value="5900">5,900 sqft</option>
                        <option value="5950">5,950 sqft</option>
                        <option value="6000">6,000 sqft</option>
                        <option value="6050">6,050 sqft</option>
                        <option value="6100">6,100 sqft</option>
                        <option value="6150">6,150 sqft</option>
                        <option value="6200">6,200 sqft</option>
                        <option value="6250">6,250 sqft</option>
                        <option value="6300">6,300 sqft</option>
                        <option value="6350">6,350 sqft</option>
                        <option value="6400">6,400 sqft</option>
                        <option value="6450">6,450 sqft</option>
                        <option value="6500">6,500 sqft</option>
                        <option value="6550">6,550 sqft</option>
                        <option value="6600">6,600 sqft</option>
                        <option value="6650">6,650 sqft</option>
                        <option value="6700">6,700 sqft</option>
                        <option value="6750">6,750 sqft</option>
                        <option value="6800">6,800 sqft</option>
                        <option value="6850">6,850 sqft</option>
                        <option value="6900">6,900 sqft</option>
                        <option value="6950">6,950 sqft</option>
                        <option value="7000">7,000 sqft</option>
                        <option value="7050">7,050 sqft</option>
                        <option value="7100">7,100 sqft</option>
                        <option value="7150">7,150 sqft</option>
                        <option value="7200">7,200 sqft</option>
                        <option value="7250">7,250 sqft</option>
                        <option value="7300">7,300 sqft</option>
                        <option value="7350">7,350 sqft</option>
                        <option value="7400">7,400 sqft</option>
                        <option value="7450">7,450 sqft</option>
                        <option value="7500">7,500 sqft</option>
                        <option value="7550">7,550 sqft</option>
                        <option value="7600">7,600 sqft</option>
                        <option value="7650">7,650 sqft</option>
                        <option value="7700">7,700 sqft</option>
                        <option value="7750">7,750 sqft</option>
                        <option value="7800">7,800 sqft</option>
                        <option value="7850">7,850 sqft</option>
                        <option value="7900">7,900 sqft</option>
                        <option value="7950">7,950 sqft</option>
                        <option value="8000">8,000 sqft</option>
                        <option value="8050">8,050 sqft</option>
                        <option value="8100">8,100 sqft</option>
                        <option value="8150">8,150 sqft</option>
                        <option value="8200">8,200 sqft</option>
                        <option value="8250">8,250 sqft</option>
                        <option value="8300">8,300 sqft</option>
                        <option value="8350">8,350 sqft</option>
                        <option value="8400">8,400 sqft</option>
                        <option value="8450">8,450 sqft</option>
                        <option value="8500">8,500 sqft</option>
                        <option value="8550">8,550 sqft</option>
                        <option value="8600">8,600 sqft</option>
                        <option value="8650">8,650 sqft</option>
                        <option value="8700">8,700 sqft</option>
                        <option value="8750">8,750 sqft</option>
                        <option value="8800">8,800 sqft</option>
                        <option value="8850">8,850 sqft</option>
                        <option value="8900">8,900 sqft</option>
                        <option value="8950">8,950 sqft</option>
                        <option value="9000">9,000 sqft</option>
                        <option value="9050">9,050 sqft</option>
                        <option value="9100">9,100 sqft</option>
                        <option value="9150">9,150 sqft</option>
                        <option value="9200">9,200 sqft</option>
                        <option value="9250">9,250 sqft</option>
                        <option value="9300">9,300 sqft</option>
                        <option value="9350">9,350 sqft</option>
                        <option value="9400">9,400 sqft</option>
                        <option value="9450">9,450 sqft</option>
                        <option value="9500">9,500 sqft</option>
                        <option value="9550">9,550 sqft</option>
                        <option value="9600">9,600 sqft</option>
                        <option value="9650">9,650 sqft</option>
                        <option value="9700">9,700 sqft</option>
                        <option value="9750">9,750 sqft</option>
                        <option value="9800">9,800 sqft</option>
                        <option value="9850">9,850 sqft</option>
                        <option value="9900">9,900 sqft</option>
                        <option value="9950">9,950 sqft</option>
                        <option value="10000">10,000 sqft</option>
                    </select>
                    <div class="">-</div>
                    <select class="w-full border-gray-200 rounded">
                        <option value="0">Any</option>
                        <option value="250">250 sqft</option>
                        <option value="300">300 sqft</option>
                        <option value="350">350 sqft</option>
                        <option value="400">400 sqft</option>
                        <option value="450">450 sqft</option>
                        <option value="500">500 sqft</option>
                        <option value="550">550 sqft</option>
                        <option value="600">600 sqft</option>
                        <option value="650">650 sqft</option>
                        <option value="700">700 sqft</option>
                        <option value="750">750 sqft</option>
                        <option value="800">800 sqft</option>
                        <option value="850">850 sqft</option>
                        <option value="900">900 sqft</option>
                        <option value="950">950 sqft</option>
                        <option value="1000">1,000 sqft</option>
                        <option value="1050">1,050 sqft</option>
                        <option value="1100">1,100 sqft</option>
                        <option value="1150">1,150 sqft</option>
                        <option value="1200">1,200 sqft</option>
                        <option value="1250">1,250 sqft</option>
                        <option value="1300">1,300 sqft</option>
                        <option value="1350">1,350 sqft</option>
                        <option value="1400">1,400 sqft</option>
                        <option value="1450">1,450 sqft</option>
                        <option value="1500">1,500 sqft</option>
                        <option value="1550">1,550 sqft</option>
                        <option value="1600">1,600 sqft</option>
                        <option value="1650">1,650 sqft</option>
                        <option value="1700">1,700 sqft</option>
                        <option value="1750">1,750 sqft</option>
                        <option value="1800">1,800 sqft</option>
                        <option value="1850">1,850 sqft</option>
                        <option value="1900">1,900 sqft</option>
                        <option value="1950">1,950 sqft</option>
                        <option value="2000">2,000 sqft</option>
                        <option value="2050">2,050 sqft</option>
                        <option value="2100">2,100 sqft</option>
                        <option value="2150">2,150 sqft</option>
                        <option value="2200">2,200 sqft</option>
                        <option value="2250">2,250 sqft</option>
                        <option value="2300">2,300 sqft</option>
                        <option value="2350">2,350 sqft</option>
                        <option value="2400">2,400 sqft</option>
                        <option value="2450">2,450 sqft</option>
                        <option value="2500">2,500 sqft</option>
                        <option value="2550">2,550 sqft</option>
                        <option value="2600">2,600 sqft</option>
                        <option value="2650">2,650 sqft</option>
                        <option value="2700">2,700 sqft</option>
                        <option value="2750">2,750 sqft</option>
                        <option value="2800">2,800 sqft</option>
                        <option value="2850">2,850 sqft</option>
                        <option value="2900">2,900 sqft</option>
                        <option value="2950">2,950 sqft</option>
                        <option value="3000">3,000 sqft</option>
                        <option value="3050">3,050 sqft</option>
                        <option value="3100">3,100 sqft</option>
                        <option value="3150">3,150 sqft</option>
                        <option value="3200">3,200 sqft</option>
                        <option value="3250">3,250 sqft</option>
                        <option value="3300">3,300 sqft</option>
                        <option value="3350">3,350 sqft</option>
                        <option value="3400">3,400 sqft</option>
                        <option value="3450">3,450 sqft</option>
                        <option value="3500">3,500 sqft</option>
                        <option value="3550">3,550 sqft</option>
                        <option value="3600">3,600 sqft</option>
                        <option value="3650">3,650 sqft</option>
                        <option value="3700">3,700 sqft</option>
                        <option value="3750">3,750 sqft</option>
                        <option value="3800">3,800 sqft</option>
                        <option value="3850">3,850 sqft</option>
                        <option value="3900">3,900 sqft</option>
                        <option value="3950">3,950 sqft</option>
                        <option value="4000">4,000 sqft</option>
                        <option value="4050">4,050 sqft</option>
                        <option value="4100">4,100 sqft</option>
                        <option value="4150">4,150 sqft</option>
                        <option value="4200">4,200 sqft</option>
                        <option value="4250">4,250 sqft</option>
                        <option value="4300">4,300 sqft</option>
                        <option value="4350">4,350 sqft</option>
                        <option value="4400">4,400 sqft</option>
                        <option value="4450">4,450 sqft</option>
                        <option value="4500">4,500 sqft</option>
                        <option value="4550">4,550 sqft</option>
                        <option value="4600">4,600 sqft</option>
                        <option value="4650">4,650 sqft</option>
                        <option value="4700">4,700 sqft</option>
                        <option value="4750">4,750 sqft</option>
                        <option value="4800">4,800 sqft</option>
                        <option value="4850">4,850 sqft</option>
                        <option value="4900">4,900 sqft</option>
                        <option value="4950">4,950 sqft</option>
                        <option value="5000">5,000 sqft</option>
                        <option value="5050">5,050 sqft</option>
                        <option value="5100">5,100 sqft</option>
                        <option value="5150">5,150 sqft</option>
                        <option value="5200">5,200 sqft</option>
                        <option value="5250">5,250 sqft</option>
                        <option value="5300">5,300 sqft</option>
                        <option value="5350">5,350 sqft</option>
                        <option value="5400">5,400 sqft</option>
                        <option value="5450">5,450 sqft</option>
                        <option value="5500">5,500 sqft</option>
                        <option value="5550">5,550 sqft</option>
                        <option value="5600">5,600 sqft</option>
                        <option value="5650">5,650 sqft</option>
                        <option value="5700">5,700 sqft</option>
                        <option value="5750">5,750 sqft</option>
                        <option value="5800">5,800 sqft</option>
                        <option value="5850">5,850 sqft</option>
                        <option value="5900">5,900 sqft</option>
                        <option value="5950">5,950 sqft</option>
                        <option value="6000">6,000 sqft</option>
                        <option value="6050">6,050 sqft</option>
                        <option value="6100">6,100 sqft</option>
                        <option value="6150">6,150 sqft</option>
                        <option value="6200">6,200 sqft</option>
                        <option value="6250">6,250 sqft</option>
                        <option value="6300">6,300 sqft</option>
                        <option value="6350">6,350 sqft</option>
                        <option value="6400">6,400 sqft</option>
                        <option value="6450">6,450 sqft</option>
                        <option value="6500">6,500 sqft</option>
                        <option value="6550">6,550 sqft</option>
                        <option value="6600">6,600 sqft</option>
                        <option value="6650">6,650 sqft</option>
                        <option value="6700">6,700 sqft</option>
                        <option value="6750">6,750 sqft</option>
                        <option value="6800">6,800 sqft</option>
                        <option value="6850">6,850 sqft</option>
                        <option value="6900">6,900 sqft</option>
                        <option value="6950">6,950 sqft</option>
                        <option value="7000">7,000 sqft</option>
                        <option value="7050">7,050 sqft</option>
                        <option value="7100">7,100 sqft</option>
                        <option value="7150">7,150 sqft</option>
                        <option value="7200">7,200 sqft</option>
                        <option value="7250">7,250 sqft</option>
                        <option value="7300">7,300 sqft</option>
                        <option value="7350">7,350 sqft</option>
                        <option value="7400">7,400 sqft</option>
                        <option value="7450">7,450 sqft</option>
                        <option value="7500">7,500 sqft</option>
                        <option value="7550">7,550 sqft</option>
                        <option value="7600">7,600 sqft</option>
                        <option value="7650">7,650 sqft</option>
                        <option value="7700">7,700 sqft</option>
                        <option value="7750">7,750 sqft</option>
                        <option value="7800">7,800 sqft</option>
                        <option value="7850">7,850 sqft</option>
                        <option value="7900">7,900 sqft</option>
                        <option value="7950">7,950 sqft</option>
                        <option value="8000">8,000 sqft</option>
                        <option value="8050">8,050 sqft</option>
                        <option value="8100">8,100 sqft</option>
                        <option value="8150">8,150 sqft</option>
                        <option value="8200">8,200 sqft</option>
                        <option value="8250">8,250 sqft</option>
                        <option value="8300">8,300 sqft</option>
                        <option value="8350">8,350 sqft</option>
                        <option value="8400">8,400 sqft</option>
                        <option value="8450">8,450 sqft</option>
                        <option value="8500">8,500 sqft</option>
                        <option value="8550">8,550 sqft</option>
                        <option value="8600">8,600 sqft</option>
                        <option value="8650">8,650 sqft</option>
                        <option value="8700">8,700 sqft</option>
                        <option value="8750">8,750 sqft</option>
                        <option value="8800">8,800 sqft</option>
                        <option value="8850">8,850 sqft</option>
                        <option value="8900">8,900 sqft</option>
                        <option value="8950">8,950 sqft</option>
                        <option value="9000">9,000 sqft</option>
                        <option value="9050">9,050 sqft</option>
                        <option value="9100">9,100 sqft</option>
                        <option value="9150">9,150 sqft</option>
                        <option value="9200">9,200 sqft</option>
                        <option value="9250">9,250 sqft</option>
                        <option value="9300">9,300 sqft</option>
                        <option value="9350">9,350 sqft</option>
                        <option value="9400">9,400 sqft</option>
                        <option value="9450">9,450 sqft</option>
                        <option value="9500">9,500 sqft</option>
                        <option value="9550">9,550 sqft</option>
                        <option value="9600">9,600 sqft</option>
                        <option value="9650">9,650 sqft</option>
                        <option value="9700">9,700 sqft</option>
                        <option value="9750">9,750 sqft</option>
                        <option value="9800">9,800 sqft</option>
                        <option value="9850">9,850 sqft</option>
                        <option value="9900">9,900 sqft</option>
                        <option value="9950">9,950 sqft</option>
                        <option value="10000">10,000 sqft</option>
                    </select>
                </div>
            </div>
            <!-- bedrooms -->
            <select class="w-full  font-bold border-gray-200 rounded">
                <option value="Malaysia">Bedrooms</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
                <option value="Johor">Johor</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Pahang">Pahang</option>
                <option value="Melaka">Melaka</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Putrajaya">Putrajaya</option>
                <option value="Perlis">Perlis</option>
                <option value="Labuan">Labuan</option>
            </select>
            <!-- tenure -->
            <select class="w-full  font-bold border-gray-200 rounded">
                <option value="Malaysia">Tenure</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
                <option value="Johor">Johor</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Pahang">Pahang</option>
                <option value="Melaka">Melaka</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Putrajaya">Putrajaya</option>
                <option value="Perlis">Perlis</option>
                <option value="Labuan">Labuan</option>
            </select>
            <!-- completion year -->
            <select class="w-full  font-bold border-gray-200 rounded">
                <option value="Malaysia">Completion Year</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
                <option value="Johor">Johor</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Pahang">Pahang</option>
                <option value="Melaka">Melaka</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Putrajaya">Putrajaya</option>
                <option value="Perlis">Perlis</option>
                <option value="Labuan">Labuan</option>
            </select>
            <!-- live virtual -->
            <div class="">
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-guyub-green ">
                    <div class="">Live Virtual Tour Only</div>

                </label>

            </div>


        </div>
    </div>

    <div class="fixed bottom-0 w-full z-50">
        <!-- clear.apply -->
        <div class=" px-2 py-3 border bg-white ">

            <a class="close-white-gallery" href="">
                <div class="btn-small w-full bg-guyub-green font-medium text-white">Show Properties</div>
            </a>
        </div>
    </div>
</div>