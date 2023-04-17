<?php
$title = "Guyub - Home";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-white.php';
?>

<!-- banner search -->
<section class="bg-home-top-banner img-position-50 h-[580px] lgg:h-[400px] relative">
    <!-- container -->
    <div class="mx-auto max-w-8xl px-64 h-full flex items-center xl:px-14 sm:px-3  ">

        <!-- find your belongings container -->
        <div class=" px-9 sm:px-4 py-6 opacity-95  w-full mx-auto bg-guyub-black rounded-lg space-y-6  ">

            <!-- title -->
            <h1 class="text-guyub-green">Find your belonging</h1>

            <!-- buy, rent.... -->
            <div class="space-y-4" x-cloak x-data="{active: 0}">

                <!-- tab -->
                <div x-cloak class="flex w-full items-center space-x-3 ">
                    <button class="tab-small" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>Buy</button>
                    <button class="tab-small" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Rent</button>
                    <button class="tab-small lgg:hidden" x-on:click.prevent="active = 2" x-bind:class="{'text-white bg-guyub-green': active === 2}" x-cloak>Neighbourhood</button>
                    <button class="tab-small lgg:hidden" x-on:click.prevent="active = 3" x-bind:class="{'text-white bg-guyub-green': active === 3}" x-cloak>Agent</button>
                </div>

                <!-- tab-content -->
                <div class="space-y-4 flex flex-col" x-show="active === 0" x-cloak>

                    <!-- search bar -->
                    <?php include './inc/searchbar.php'; ?>

                    <!-- type,price range.... -->
                    <div class="flex items-center space-x-8 relative lgg:hidden ">

                        <!-- Type -->
                        <div x-cloak @click.away="open = false" x-data="{ open: false }">

                            <!-- button -->
                            <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                                <!-- word -->
                                <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  text-white" href="">Type</button>

                                <!-- arrow -->
                                <button :class="{'text-white rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>



                            </a>

                            <!-- dropdown menu -->
                            <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute origin-top top-[35px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                <!--max width container-->
                                <div class=" bg-white rounded-md nav-shadow flex justify-between  py-4">


                                    <div class="flex flex-col justify-start space-y-3">
                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All Property for Sale</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Residential (Landed)</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Residential (Non-Landed)</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>






                                    </div>






                                </div>

                            </div>

                        </div>

                        <!-- | -->
                        <div class="flex items-center space-x-1">
                            <div class="text-white font-light" href="">|</div>
                        </div>

                        <!-- Price Range -->
                        <div x-cloak @click.away="open = false" x-data="{ open: false }">

                            <!-- button -->
                            <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                                <!-- word -->
                                <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  text-white" href="">Price Range</button>

                                <!-- arrow -->
                                <button :class="{'text-white rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </a>

                            <!-- dropdown menu -->
                            <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[35px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

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

                        <!-- | -->
                        <div class="flex items-center space-x-1">
                            <div class="text-white font-light" href="">|</div>
                        </div>

                        <!-- Built-up Size -->
                        <div x-cloak @click.away="open = false" x-data="{ open: false }">

                            <!-- button -->
                            <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                                <!-- word -->
                                <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  text-white" href="">Built-up Size</button>

                                <!-- arrow -->
                                <button :class="{'text-white rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </a>

                            <!-- dropdown menu -->
                            <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[35px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

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

                        <!-- | -->
                        <div class="flex items-center space-x-1">
                            <div class="text-white font-light" href="">|</div>
                        </div>

                        <!-- Bedrooms -->
                        <div x-cloak @click.away="open = false" x-data="{ open: false }">

                            <!-- button -->
                            <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                                <!-- word -->
                                <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  text-white" href="">Bedrooms</button>

                                <!-- arrow -->
                                <button :class="{'text-white rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </a>

                            <!-- dropdown menu -->
                            <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute origin-top top-[35px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                <!--max width container-->
                                <div class=" bg-white rounded-md nav-shadow flex justify-between  py-4">


                                    <div class="flex flex-col justify-start space-y-3">
                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All Property for Sale</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Residential (Landed)</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Residential (Non-Landed)</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- tab-content -->
                <div class="space-y-4 flex flex-col" x-show="active === 1" x-cloak>

                    <!-- search bar -->
                    <?php include './inc/searchbar.php'; ?>

                    <!-- type,price range.... -->
                    <div class="flex items-center space-x-8 relative lgg:hidden ">

                        <!-- Type -->
                        <div x-cloak @click.away="open = false" x-data="{ open: false }">

                            <!-- button -->
                            <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                                <!-- word -->
                                <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  text-white" href="">Type</button>

                                <!-- arrow -->
                                <button :class="{'text-white rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>



                            </a>

                            <!-- dropdown menu -->
                            <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute origin-top top-[35px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                <!--max width container-->
                                <div class=" bg-white rounded-md nav-shadow flex justify-between  py-4">


                                    <div class="flex flex-col justify-start space-y-3">
                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All Property for Sale</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Residential (Landed)</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Residential (Non-Landed)</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>






                                    </div>






                                </div>

                            </div>

                        </div>

                        <!-- | -->
                        <div class="flex items-center space-x-1">
                            <div class="text-white font-light" href="">|</div>
                        </div>

                        <!-- Price Range -->
                        <div x-cloak @click.away="open = false" x-data="{ open: false }">

                            <!-- button -->
                            <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                                <!-- word -->
                                <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  text-white" href="">Price Range</button>

                                <!-- arrow -->
                                <button :class="{'text-white rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>



                            </a>

                            <!-- dropdown menu -->
                            <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[35px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

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

                        <!-- | -->
                        <div class="flex items-center space-x-1">
                            <div class="text-white font-light" href="">|</div>
                        </div>

                        <!-- Built-up Size -->
                        <div x-cloak @click.away="open = false" x-data="{ open: false }">

                            <!-- button -->
                            <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                                <!-- word -->
                                <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  text-white" href="">Built-up Size</button>

                                <!-- arrow -->
                                <button :class="{'text-white rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>



                            </a>

                            <!-- dropdown menu -->
                            <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute top-[35px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

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

                        <!-- | -->
                        <div class="flex items-center space-x-1">
                            <div class="text-white font-light" href="">|</div>
                        </div>

                        <!-- Bedrooms -->
                        <div x-cloak @click.away="open = false" x-data="{ open: false }">

                            <!-- button -->
                            <a @click="open = !open" class="w-full text-guyub-black space-x-1 flex justify-between items-center overflow-hidden">
                                <!-- word -->
                                <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-medium transition ease-in duration-200  text-white" href="">Bedrooms</button>

                                <!-- arrow -->
                                <button :class="{'text-white rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>



                            </a>

                            <!-- dropdown menu -->
                            <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute origin-top top-[35px] rounded-md shadow-lg z-30 bg-white max-h-[250px] overflow-scroll ">

                                <!--max width container-->
                                <div class=" bg-white rounded-md nav-shadow flex justify-between  py-4">


                                    <div class="flex flex-col justify-start space-y-3">
                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">All Property for Sale</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Residential (Landed)</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Residential (Non-Landed)</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>

                                        <!-- item-->
                                        <a href="./member-stories.php" class="px-4 py-2  relative w-full hover:bg-gray-100 transition duration-200 ease-in">Commercial</a>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>

                <!-- tab-content -->
                <div class="space-y-4 flex flex-col lgg:hidden" x-show="active === 2" x-cloak>

                    <!-- search bar -->
                    <?php include './inc/searchbar.php'; ?>

                </div>

                <!-- tab-content -->
                <div class="space-y-4 flex flex-col lgg:hidden" x-show="active === 3" x-cloak>

                    <!-- search bar -->
                    <?php include './inc/searchbar.php'; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- max-width-holder -->
<div class="space-y-16 py-12 px-20 xl:px-8 lg:px-10 sm:px-3 mx-auto max-w-8xl ">

    <!-- Explore neighbourhoodsh (slider1) -->
    <section class="space-y-9">
        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Explore neighbourhoods</h4>


            <!-- view-more -->
            <a class="space-x-1 flex items-center" href="">
                <!-- title -->
                <div class="font-semibold">View More</div>
                <!-- arrow -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>


        </div>

        <!-- states select.... -->
        <div class="space-y-9" x-cloak x-data="{active: 0}">

            <!-- tab -->
            <div x-cloak class="flex w-full items-center space-x-3 lg:hidden ">
                <button class="tab" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>Selangor</button>
                <button class="tab" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Kuala Lumpur</button>
                <button class="tab" x-on:click.prevent="active = 2" x-bind:class="{'text-white bg-guyub-green': active === 2}" x-cloak>Johor</button>
                <button class="tab" x-on:click.prevent="active = 3" x-bind:class="{'text-white bg-guyub-green': active === 3}" x-cloak>Negeri Sembilan</button>
                <button class="tab" x-on:click.prevent="active = 4" x-bind:class="{'text-white bg-guyub-green': active === 4}" x-cloak>Malacca</button>
                <button class="tab" x-on:click.prevent="active = 5" x-bind:class="{'text-white bg-guyub-green': active === 5}" x-cloak>Kedah </button>
                <button class="tab" x-on:click.prevent="active = 6" x-bind:class="{'text-white bg-guyub-green': active === 6}" x-cloak>Sabah</button>
            </div>

            <!-- tab-content -->
            <div class="grid grid-cols-4 gap-5 lg:grid-cols-2 xs:grid-cols-1 sm:gap-x-8" x-show="active === 0" x-cloak>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

















            </div>

            <!-- tab-content -->
            <div class="grid grid-cols-4 gap-5 lg:grid-cols-2 sm:grid-cols-1 sm:gap-x-8" x-show="active === 1" x-cloak>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>
            </div>

            <!-- tab-content -->
            <div class="grid grid-cols-4 gap-5 lg:grid-cols-2 sm:grid-cols-1 sm:gap-x-8" x-show="active === 2" x-cloak>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>
            </div>

            <!-- tab-content -->
            <div class="grid grid-cols-4 gap-5 lg:grid-cols-2 sm:grid-cols-1 sm:gap-x-8" x-show="active === 3" x-cloak>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>
            </div>

            <!-- tab-content -->
            <div class="grid grid-cols-4 gap-5 lg:grid-cols-2 sm:grid-cols-1 sm:gap-x-8" x-show="active === 4" x-cloak>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>
            </div>

            <!-- tab-content -->
            <div class="grid grid-cols-4 gap-5 lg:grid-cols-2 sm:grid-cols-1 sm:gap-x-8" x-show="active === 5" x-cloak>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>

                <!-- item -->
                <div x-cloak class="space-y-3 ">
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                    <!-- neighbourhood item -->
                    <?php include './inc/neighbourhood-card.php'; ?>
                </div>
            </div>
        </div>

    </section>


    <!-- Discover new launch (slider2) -->
    <section class="space-y-9 overflow-hidden">
        <!-- title + arrow -->
        <div class="flex justify-between">
            <!-- left-title  -->
            <h4 class="section-title-home">Discover new launches</h4>
        </div>

        <!-- banner -->
        <?php include './inc/banner.php'; ?>

    </section>

    <!-- Live, learn & be inspired (slider3) -->
    <section class="space-y-9 overflow-hidden">
        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Live, learn & be inspired</h4>

            <!-- show more -->
            <div class="flex space-x-3 items-center">

                <!-- arrow left and right -->
                <div class="flex space-x-2">

                    <!-- left arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider3-prev-btn ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- right  arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider3-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <!-- view-more -->
                <a class="space-x-1 flex items-center" href="">
                    <!-- title -->
                    <div class="font-semibold">View More</div>
                    <!-- arrow -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

            </div>


        </div>

        <div class="owl-3 owl-carousel owl-theme flex justify-between items-center">

            <!--live- learn item -->
            <div class="flex bg-gray-50 h-[400px] items-center flex-col justify-between py-10 px-6">
                <div class=" flex flex-col space-y-4 items-center">
                    <img class="w-48" src="./assets/images/art.jpg" alt="">
                    <div class="space-y-3">
                        <h5 class="text-center">Property Guides</h5>
                        <p class="text-base text-center">Accompany you every step of the way in your property journey.</p>
                    </div>
                </div>
                <!-- view more button  -->
                <a href="" class="text-lg text-guyub-black flex items-center">
                    <div>View More</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <!--live- learn item -->
            <div class="flex bg-gray-50 h-[365px] items-center flex-col justify-between p-6">
                <div class=" flex flex-col space-y-4 items-center">
                    <img class="w-20 h-20" src="./assets/images/property-guides.svg" alt="">
                    <div class="space-y-3">
                        <h5 class="text-center">Property Guides</h5>
                        <p class="text-base text-center">Accompany you every step of the way in your property journey.</p>
                    </div>
                </div>
                <!-- view more button  -->
                <a href="" class="text-lg text-guyub-black flex items-center">
                    <div>View More</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <!--live- learn item -->
            <div class="flex bg-gray-50 h-[365px] items-center flex-col justify-between p-6">
                <div class=" flex flex-col space-y-4 items-center">
                    <img class="w-20 h-20" src="./assets/images/property-guides.svg" alt="">
                    <div class="space-y-3">
                        <h5 class="text-center">Property Guides</h5>
                        <p class="text-base text-center">Accompany you every step of the way in your property journey.</p>
                    </div>
                </div>
                <!-- view more button  -->
                <a href="" class="text-lg text-guyub-black flex items-center">
                    <div>View More</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <!--live- learn item -->
            <div class="flex bg-gray-50 h-[365px] items-center flex-col justify-between p-6">
                <div class=" flex flex-col space-y-4 items-center">
                    <img class="w-20 h-20" src="./assets/images/property-guides.svg" alt="">
                    <div class="space-y-3">
                        <h5 class="text-center">Property Guides</h5>
                        <p class="text-base text-center">Accompany you every step of the way in your property journey.</p>
                    </div>
                </div>
                <!-- view more button  -->
                <a href="" class="text-lg text-guyub-black flex items-center">
                    <div>View More</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>


        </div>
    </section>

    <!-- Browse curated catalogues (slider4) -->
    <section class="space-y-9 overflow-hidden">
        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Browse curated catalogues</h4>


            <!-- show more -->
            <div class="flex space-x-3">

                <!-- arrow left and right -->
                <div class="flex space-x-2">

                    <!-- left arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider4-prev-btn ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- right  arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider4-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <!-- view-more -->
                <a class="space-x-1 flex items-center" href="">
                    <!-- title -->
                    <div class="font-semibold">View More</div>
                    <!-- arrow -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>


        </div>

        <div class="owl-4 owl-carousel owl-theme flex justify-between items-center">

            <?php include './inc/catalogue-card-listing.php'; ?>
            <?php include './inc/catalogue-card-listing.php'; ?>
            <?php include './inc/catalogue-card-listing.php'; ?>
            <?php include './inc/catalogue-card-listing.php'; ?>
            <?php include './inc/catalogue-card-listing.php'; ?>
            <?php include './inc/catalogue-card-listing.php'; ?>
            <?php include './inc/catalogue-card-listing.php'; ?>
            <?php include './inc/catalogue-card-listing.php'; ?>


        </div>
    </section>

    <!-- seek your way of living (slider5) -->
    <section class="space-y-9 overflow-hidden">
        <!-- title + arrow -->
        <div class="flex justify-between">
            <!-- left-title  -->
            <h4 class="section-title-home">Seek your way of living</h4>
        </div>

        <!-- banner -->
        <?php include './inc/banner.php'; ?>
    </section>

    <!-- stay informed  -->
    <section class="space-y-9">

        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Stay informed</h4>

            <!-- view-more -->
            <a class="space-x-1 flex items-center" href="">
                <!-- title -->
                <div class="font-semibold">View More</div>
                <!-- arrow -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>


        </div>

        <!-- featured -->
        <div class="grid grid-cols-3 gap-x-5 xl:grid-cols-1 xl:grid-x-0 xl:gap-y-5">
            <!-- image -->
            <div class="col-span-2">
                <img class="rounded-lg object-cover object-center h-[450px]" src="https://www.guyub.co/wp-content/uploads/2022/06/4-new-residential-property-launches-in-Penang-in-Q12022..jpg    " alt="">
            </div>

            <!--text-content-->
            <div class="space-y-8 px-9 xl:px-0 flex flex-col justify-center">

                <div class="space-y-2">
                    <!-- date -->
                    <div class="text-base text-gray-500">14 August 2021</div>
                    <!-- title -->
                    <h4 class="section-title-home">ADIA looks to sell Darling Quater stake as city office heats up</h4>
                    <!-- sub copy -->
                    <div class="text-lg">
                        There is more empty space in office towers but landlords are confident that demand will recover as vaccines are rolled out with small..
                    </div>
                </div>

                <!-- button -->
                <button class="flex space-x-1 items-center ">
                    <div class="underline text-base text-guyub-black">Learn More</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- article-item-holder -->
        <div class="grid grid-cols-3 gap-6 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">

            <!--article item -->
            <div class="space-y-4">
                <img class="rounded-lg object-cover object-center h-[250px]" src="https://www.guyub.co/wp-content/uploads/2022/06/4-new-residential-property-launches-in-Penang-in-Q12022..jpg" alt="">

                <div class="space-y-2 flex flex-col">
                    <div class="text-base text-gray-500 relative">14 August 2021</div>
                    <h6 class="line-clamp-2">Whose house price have you snooped on?you snooped on?Whose house price have you snooped on?you snooped on?Whose house price have you snooped on?you snooped on?</h6>
                    <div class="text-base line-clamp-3 bottom-0 flex items-end">Gamuda Cove is a new 1530-acre township set next to wetlands and forest reserves in Southern Klang Valley.Gamuda Cove is a new 1530-acre township set next to wetlands and forest reserves in Southern Klang Valley. </div>
                </div>
            </div>

              <!--article item -->
              <div class="space-y-4">
                <img class="rounded-lg object-cover object-center h-[250px]" src="https://www.guyub.co/wp-content/uploads/2022/06/4-new-residential-property-launches-in-Penang-in-Q12022..jpg" alt="">

                <div class="space-y-2 flex flex-col">
                    <div class="text-base text-gray-500 relative">14 August 2021</div>
                    <h6 class="line-clamp-2">Whose house price have you snooped on?you snooped on?Whose house price have you snooped on?you snooped on?Whose house price have you snooped on?you snooped on?</h6>
                    <div class="text-base line-clamp-3 bottom-0 flex items-end">Gamuda Cove is a new 1530-acre township set next to wetlands and forest reserves in Southern Klang Valley.Gamuda Cove is a new 1530-acre township set next to wetlands and forest reserves in Southern Klang Valley. </div>
                </div>
            </div>

              <!--article item -->
              <div class="space-y-4">
                <img class="rounded-lg object-cover object-center h-[250px]" src="https://www.guyub.co/wp-content/uploads/2022/06/4-new-residential-property-launches-in-Penang-in-Q12022..jpg" alt="">

                <div class="space-y-2 flex flex-col">
                    <div class="text-base text-gray-500 relative">14 August 2021</div>
                    <h6 class="line-clamp-2">Whose house price have you snooped on?you snooped on?Whose house price have you snooped on?you snooped on?Whose house price have you snooped on?you snooped on?</h6>
                    <div class="text-base line-clamp-3 bottom-0 flex items-end">Gamuda Cove is a new 1530-acre township set next to wetlands and forest reserves in Southern Klang Valley.Gamuda Cove is a new 1530-acre township set next to wetlands and forest reserves in Southern Klang Valley. </div>
                </div>
            </div>

            

          


        </div>

    </section>

</div>





<?php include './inc/footer.php'; ?>