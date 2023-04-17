<body>
    <header>
        <!--navigation-->
        <nav class=" lg:hidden ">
            <div class=" w-full absolute inset-x-0 top-0 z-10">
                <div class="flex items-center justify-between py-2 px-20 xl:px-8 lg:px-10 sm:px-3 mx-auto max-w-8xl">

                    <!-- logo -->
                    <a class="mr-12" href="./index.php">
                        <img src="./assets/images/guyub-white-logo.svg" alt="">
                    </a>

                    <!---------------------------------------------------------------------------------------------->

                    <!-- right nav -->
                    <div class="flex items-center space-x-6 ">

                        <!--Search -->
                        <div class="relative">
                            <div x-cloak @click.away="open = false" x-data="{ open: false }">

                                <!-- button -->
                                <div class="py-5 relative ">
                                    <a @click="open = !open" class="e flex items-center justify-center space-x-2    ">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>

                                        <!-- word -->
                                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-normal text-white transition ease-in duration-200  " href="./irobot-home-app.php">Search
                                        </button>
                                    </a>
                                </div>

                                <!-- dropdown menu -->
                                <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-end="transition ease-out duration-300 " class="absolute min-w-[550px]  origin-top top-[60px] rounded-md shadow-lg z-30 bg-white  ">

                                    <!--max width container-->
                                    <div class="w-full bg-white rounded-md nav-shadow px-6 py-8">

                                        <!-- search content -->
                                        <div class="space-y-9" x-cloak x-data="{active: 0}">

                                            <!-- tab -->
                                            <div x-cloak class="flex w-full items-center space-x-3 mdd:hidden">
                                                <button class="tab-small-2" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>Buy</button>
                                                <button class="tab-small-2" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Rent</button>
                                                <button class="tab-small-2" x-on:click.prevent="active = 2" x-bind:class="{'text-white bg-guyub-green': active === 2}" x-cloak>Neighbourhood</button>
                                                <button class="tab-small-2" x-on:click.prevent="active = 3" x-bind:class="{'text-white bg-guyub-green': active === 3}" x-cloak>Agent</button>
                                            </div>

                                            <!-- tab-content -->
                                            <div class="space-y-8 flex flex-col" x-show="active === 0" x-cloak>

                                                <!-- search bar -->
                                                <?php include './inc/searchbar.php'; ?>

                                            </div>

                                            <!-- tab-content -->
                                            <div class="space-y-8 flex flex-col" x-show="active === 1" x-cloak>

                                                <!-- search bar -->
                                                <?php include './inc/searchbar.php'; ?>

                                            </div>

                                            <!-- tab-content -->
                                            <div class="space-y-8 flex flex-col" x-show="active === 2" x-cloak>

                                                <!-- search bar -->
                                                <?php include './inc/searchbar.php'; ?>

                                            </div>

                                            <!-- tab-content -->
                                            <div class="space-y-8 flex flex-col" x-show="active === 3" x-cloak>

                                                <!-- search bar -->
                                                <?php include './inc/searchbar.php'; ?>

                                            </div>


                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <!--buy -->
                        <div class="relative">
                            <div x-cloak @click.away="open = false" x-data="{ open: false }">

                                <!-- button -->
                                <div class="py-5 relative ">
                                    <a @click="open = !open" class="text-white flex items-center justify-center space-x-1">
                                        <!-- word -->
                                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-normal transition ease-in duration-200  " href="./irobot-home-app.php">Buy
                                        </button>
                                        <!-- arrow -->
                                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg> -->
                                        </button>
                                    </a>
                                </div>

                                <!-- dropdown menu -->
                                <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute min-w-[550px]  origin-top top-[60px] rounded-md shadow-lg z-30 bg-white  ">

                                    <!--max width container-->
                                    <div class="w-full bg-white rounded-md nav-shadow flex justify-between  px-6 py-8">

                                        <!-- arrow triangle -->
                                        <!-- <div class="absolute w-5 h-5 transform rotate-45 left-2/4 bg-white -mt-2"></div> -->

                                        <!-- 2cols -->
                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Buy Property</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">All Property for Sale</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Non-Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Commercial</a>




                                        </div>

                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Tools & Resources</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Loan Eligibility Calculator</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Mortgage Loan Calculator</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Buy & Sell Guides </a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Explore Neighbourhoods</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Live Virtual Tour</a>




                                        </div>




                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- rent -->
                        <div class="relative">
                            <div x-cloak @click.away="open = false" x-data="{ open: false }">

                                <!-- button -->
                                <div class="py-5 relative ">
                                    <a @click="open = !open" class="text-white flex items-center justify-center space-x-1">
                                        <!-- word -->
                                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-normal transition ease-in duration-200  " href="./irobot-home-app.php">Rent
                                        </button>
                                        <!-- arrow -->
                                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg> -->
                                        </button>
                                    </a>
                                </div>

                                <!-- dropdown menu -->
                                <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100 " class="absolute min-w-[550px]  origin-top top-[60px] rounded-md shadow-lg z-30 bg-white  ">

                                    <!--max width container-->
                                    <div class="w-full bg-white rounded-md nav-shadow flex justify-between  px-6 py-8">

                                        <!-- arrow triangle -->
                                        <!-- <div class="absolute w-5 h-5 transform rotate-45 left-2/4 bg-white -mt-2"></div> -->

                                        <!-- 2cols -->
                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Buy Property</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">All Property for Sale</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Non-Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Commercial</a>




                                        </div>

                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Tools & Resources</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Loan Eligibility Calculator</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Mortgage Loan Calculator</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Buy & Sell Guides </a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Explore Neighbourhoods</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Live Virtual Tour</a>




                                        </div>




                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- New Launches -->
                        <div class="relative">
                            <div x-cloak @click.away="open = false" x-data="{ open: false }">

                                <!-- button -->
                                <div class="py-5 relative ">
                                    <a @click="open = !open" class="text-white flex items-center justify-center space-x-1">
                                        <!-- word -->
                                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-normal transition ease-in duration-200  " href="./irobot-home-app.php">New Launches
                                        </button>
                                        <!-- arrow -->
                                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg> -->
                                        </button>
                                    </a>
                                </div>

                                <!-- dropdown menu -->
                                <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute min-w-[550px]  origin-top top-[60px] rounded-md shadow-lg z-30 bg-white  ">

                                    <!--max width container-->
                                    <div class="w-full bg-white rounded-md nav-shadow flex justify-between  px-6 py-8">

                                        <!-- arrow triangle -->
                                        <!-- <div class="absolute w-5 h-5 transform rotate-45 left-2/4 bg-white -mt-2"></div> -->

                                        <!-- 2cols -->
                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Buy Property</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">All Property for Sale</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Non-Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Commercial</a>




                                        </div>

                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Tools & Resources</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Loan Eligibility Calculator</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Mortgage Loan Calculator</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Buy & Sell Guides </a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Explore Neighbourhoods</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Live Virtual Tour</a>




                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>


                        <!-- | -->
                        <div class="">
                            <a href="./about.php" class="font-normal text-white">|</a>
                        </div>

                        <!-- Guide -->
                        <div class="relative">
                            <div x-cloak @click.away="open = false" x-data="{ open: false }">

                                <!-- button -->
                                <div class="py-5 relative ">
                                    <a @click="open = !open" class="text-white flex items-center justify-center space-x-1">
                                        <!-- word -->
                                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-normal transition ease-in duration-200  " href="./irobot-home-app.php">Guide
                                        </button>
                                        <!-- arrow -->
                                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg> -->
                                        </button>
                                    </a>
                                </div>

                                <!-- dropdown menu -->
                                <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute min-w-[250px]  origin-top top-[60px] rounded-md shadow-lg z-30 bg-white  ">

                                    <!--max width container-->
                                    <div class="w-full bg-white rounded-md nav-shadow flex justify-between  px-6 py-8">

                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Buy Property</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">All Property for Sale</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Non-Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Commercial</a>




                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Inspire -->
                        <div class="relative">
                            <div x-cloak @click.away="open = false" x-data="{ open: false }">

                                <!-- button -->
                                <div class="py-5 relative ">
                                    <a @click="open = !open" class="text-white flex items-center justify-center space-x-1">
                                        <!-- word -->
                                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-normal transition ease-in duration-200  " href="./irobot-home-app.php">Inspire
                                        </button>
                                        <!-- arrow -->
                                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg> -->
                                        </button>
                                    </a>
                                </div>
                                <!-- dropdown menu -->
                                <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute min-w-[250px]  origin-top top-[60px] rounded-md shadow-lg z-30 bg-white  ">

                                    <!--max width container-->
                                    <div class="w-full bg-white rounded-md nav-shadow flex justify-between  px-6 py-8">

                                        <!-- arrow triangle -->
                                        <!-- <div class="absolute w-5 h-5 transform rotate-45 left-2/4 bg-white -mt-2"></div> -->

                                        <!-- 2cols -->
                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Buy Property</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">All Property for Sale</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Non-Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Commercial</a>




                                        </div>





                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Resources -->
                        <div class="relative">
                            <div x-cloak @click.away="open = false" x-data="{ open: false }">

                                <!-- button -->
                                <div class="py-5 relative ">
                                    <a @click="open = !open" class="text-white flex items-center justify-center space-x-1">
                                        <!-- word -->
                                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-normal transition ease-in duration-200  " href="./irobot-home-app.php">Resources
                                        </button>
                                        <!-- arrow -->
                                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg> -->
                                        </button>
                                    </a>
                                </div>

                                <!-- dropdown menu -->
                                <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute min-w-[250px]  origin-top top-[60px] rounded-md shadow-lg z-30 bg-white  ">

                                    <!--max width container-->
                                    <div class="w-full bg-white rounded-md nav-shadow flex justify-between  px-6 py-8">

                                        <!-- arrow triangle -->
                                        <!-- <div class="absolute w-5 h-5 transform rotate-45 left-2/4 bg-white -mt-2"></div> -->

                                        <!-- 2cols -->
                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">Buy Property</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">All Property for Sale</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Residential (Non-Landed)</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Commercial</a>




                                        </div>





                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Resources -->
                        <div class="relative">
                            <div x-cloak @click.away="open = false" x-data="{ open: false }">

                                <!-- button -->
                                <div class="py-5 relative ">
                                    <a @click="open = !open" class="border border-white text-white px-3  py-2 rounded font-normal">
                                        <!-- word -->
                                        <button :class="{'text-fnb-yellow transform transition duration-200 ease-in ': open, 'transform transition duration-200 ease-in ': !open}" class="font-normal transition ease-in duration-200  " href="./irobot-home-app.php">Account
                                        </button>
                                        <!-- arrow -->
                                        <button :class="{'text-fnb-yellow rotate-180 transform transition duration-200 ease-in ': open, 'rotate-0 transform transition duration-200 ease-in ': !open}" class="transition ease-in duration-200 ">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg> -->
                                        </button>
                                    </a>
                                </div>

                                <!-- dropdown menu -->
                                <div x-cloak x-show="open" x-transition:enter="transition opacity-0  ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100  " class="absolute min-w-[153px]  origin-top top-[60px] rounded-md shadow-lg z-30 bg-white  ">

                                    <!--max width container-->
                                    <div class="w-full bg-white rounded-md nav-shadow flex justify-between  px-6 py-8">

                                        <!-- arrow triangle -->
                                        <!-- <div class="absolute w-5 h-5 transform rotate-45 left-2/4 bg-white -mt-2"></div> -->

                                        <!-- 2cols -->
                                        <!-- item-listing -->
                                        <div class="w-full flex flex-col justify-start space-y-3">
                                            <!-- title -->
                                            <a href="./community.php" class="relative -full  hover:text-guyub-green transition duration-200 ease-in font-semibold">My Dashboard</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Account Settings</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Logout</a>

                                            <!-- item-->
                                            <a href="./member-stories.php" class="relative w-full hover:text-guyub-green transition duration-200 ease-in">Faq & Support</a>





                                        </div>





                                    </div>

                                </div>

                            </div>
                        </div>




                    </div>
                    <!---------------------------------------------------------------------------------------------->

                </div>
            </div>
        </nav>




        <!--mobile navigation-->
        <div class="hidden lg:block ">
            <!-- black overlay -->
            <div id="black-overlay-1" class="bg-black opacity-60 z-20 hidden w-full h-full fixed top-0"></div>
            <!-- top menu -->
            <div class="bg-white relative border-b border-gray-200  z-30 py-3 px-5 flex justify-between items-center">
                <!-- menu button -->
                <div class="hamburger" onclick="myFunctionMobile()">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <!-- logo -->
                <a href="#">
                    <img class="w-32" src="./assets/images/guyub-green-logo.svg" alt="">
                </a>
                <!-- empty element -->
                <span></span>
            </div>


            <!-- bottom menu -->
            <div class="relative">
                <!-- main container -->
                <div class="nav-menu z-20 absolute overflow-hidden top-full left-0 right-0 w-full flex flex-col transform translate-y-[-1990px]">

                    <div x-data="{selected:null}">


                        <!-- buy -->
                        <div class="relative bg-white border-b border-gray-200">

                            <!-- toggle -->
                            <button type="button" class="w-full px-8 py-4 text-left border-b border-gray-200 " @click="selected !== 2 ? selected = 2 : selected = null">
                                <div class="flex items-center justify-between">
                                    <div>Buy</div>
                                    <!-- arrow -->
                                    <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 2, 'rotate-0 transform transition duration-200 ease-in ': selected !== 2}" class="transition ease-in duration-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <!-- content -->
                            <!-- buy -->
                            <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <!-- content start -->
                                <div class="bg-gray-50 flex flex-col py-4 space-y-3">

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item title -->
                                        <div href="" class="py-3 px-8 text-base font-semibold">Buy Property</div>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">All Property for Sale</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Residential (Landed)</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Residential (Non-Landed)</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Commercial</a>
                                    </div>

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item title -->
                                        <div href="" class="py-3 px-8 text-base font-semibold">Tools & Resources</div>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Loan Eligibility Calculator</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Buy & Sell Guides </a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Explore Neighbourhoods</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Live Virtual Tour</a>
                                    </div>



                                </div>

                            </div>


                        </div>

                        <!-- rent -->
                        <div class="relative bg-white border-b border-gray-200">

                            <!-- toggle -->
                            <button type="button" class="w-full px-8 py-4 text-left border-b border-gray-200 " @click="selected !== 3 ? selected = 3 : selected = null">
                                <div class="flex items-center justify-between">
                                    <div>Rent</div>
                                    <!-- arrow -->
                                    <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 3, 'rotate-0 transform transition duration-200 ease-in ': selected !== 3}" class="transition ease-in duration-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <!-- content -->

                            <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                <!-- content start -->
                                <div class="bg-gray-50 flex flex-col py-4 space-y-3">

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item title -->
                                        <div href="" class="py-3 px-8 text-base font-semibold">Rent Property</div>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">All Property for Sale</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Residential (Landed)</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Residential (Non-Landed)</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Commercial</a>
                                    </div>

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item title -->
                                        <div href="" class="py-3 px-8 text-base font-semibold">Tools & Resources</div>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Loan Eligibility Calculator</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Buy & Sell Guides </a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Explore Neighbourhoods</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Live Virtual Tour</a>
                                    </div>



                                </div>

                            </div>


                        </div>

                        <!-- new-launch -->
                        <div class="relative bg-white border-b border-gray-200">

                            <!-- toggle -->
                            <button type="button" class="w-full px-8 py-4 text-left border-b border-gray-200 " @click="selected !== 4 ? selected = 4 : selected = null">
                                <div class="flex items-center justify-between">
                                    <div>New Launches</div>
                                    <!-- arrow -->
                                    <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 4, 'rotate-0 transform transition duration-200 ease-in ': selected !== 4}" class="transition ease-in duration-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <!-- content -->

                            <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                <!-- content start -->
                                <div class="bg-gray-50 flex flex-col py-4 space-y-3">

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item title -->
                                        <div href="" class="py-3 px-8 text-base font-semibold">All New Launches</div>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">All Property for Sale</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Residential (Landed)</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Residential (Non-Landed)</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Commercial</a>
                                    </div>

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item title -->
                                        <div href="" class="py-3 px-8 text-base font-semibold">Tools & Resources</div>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Loan Eligibility Calculator</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Buy & Sell Guides </a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Explore Neighbourhoods</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Live Virtual Tour</a>
                                    </div>



                                </div>

                            </div>


                        </div>

                        <!-- Guide -->
                        <div class="relative bg-white border-b border-gray-200">

                            <!-- toggle -->
                            <button type="button" class="w-full px-8 py-4 text-left border-b border-gray-200 " @click="selected !== 5 ? selected = 5 : selected = null">
                                <div class="flex items-center justify-between">
                                    <div>Guide</div>
                                    <!-- arrow -->
                                    <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 5, 'rotate-0 transform transition duration-200 ease-in ': selected !== 5}" class="transition ease-in duration-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <!-- content -->

                            <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container5" x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                                <!-- content start -->
                                <div class="bg-gray-50 flex flex-col py-4 space-y-3">

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Explore Neighbourhoods</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Developer's Catalogue</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Property Guides</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Lifestyle Guides</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Live Virtual Tour</a>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <!-- inspire -->
                        <div class="relative bg-white border-b border-gray-200">

                            <!-- toggle -->
                            <button type="button" class="w-full px-8 py-4 text-left border-b border-gray-200 " @click="selected !== 6 ? selected = 6 : selected = null">
                                <div class="flex items-center justify-between">
                                    <div>Inspire</div>
                                    <!-- arrow -->
                                    <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 6, 'rotate-0 transform transition duration-200 ease-in ': selected !== 6}" class="transition ease-in duration-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <!-- content -->

                            <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container6" x-bind:style="selected == 6 ? 'max-height: ' + $refs.container6.scrollHeight + 'px' : ''">
                                <!-- content start -->
                                <div class="bg-gray-50 flex flex-col py-4 space-y-3">

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Explore Neighbourhoods</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Developer's Catalogue</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Property Guides</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Lifestyle Guides</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Live Virtual Tour</a>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <!-- resources -->
                        <div class="relative bg-white border-b border-gray-200">

                            <!-- toggle -->
                            <button type="button" class="w-full px-8 py-4 text-left border-b border-gray-200 " @click="selected !== 7 ? selected = 7 : selected = null">
                                <div class="flex items-center justify-between">
                                    <div>Resources</div>
                                    <!-- arrow -->
                                    <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 7, 'rotate-0 transform transition duration-200 ease-in ': selected !== 7}" class="transition ease-in duration-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <!-- content -->

                            <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container7" x-bind:style="selected == 7 ? 'max-height: ' + $refs.container7.scrollHeight + 'px' : ''">
                                <!-- content start -->
                                <div class="bg-gray-50 flex flex-col py-4 space-y-3">

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Loan Eligibility Calculator</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Mortgage Loan Calculator</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Find Agent</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Property News</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Property Events</a>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <!-- login -->
                        <div class="relative bg-white border-b border-gray-200">

                            <!-- toggle -->
                            <button type="button" class="w-full px-8 py-4 text-left border-b border-gray-200 " @click="selected !== 8 ? selected = 8 : selected = null">
                                <div class="flex items-center justify-between">
                                    <div>Login/signup</div>
                                    <!-- arrow -->
                                    <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 8, 'rotate-0 transform transition duration-200 ease-in ': selected !== 8}" class="transition ease-in duration-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <!-- content -->

                            <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container8" x-bind:style="selected == 8 ? 'max-height: ' + $refs.container8.scrollHeight + 'px' : ''">
                                <!-- content start -->
                                <div class="bg-gray-50 flex flex-col py-4 space-y-3">

                                    <!-- item -->
                                    <div class="flex flex-col">
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Log In</a>
                                        <!-- item -->
                                        <a href="" class="py-4 px-8 text-base font-normal">Sign Up</a>

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>


                </div>
            </div>
        </div>

    </header>

    <!-- opacity-0 invisible -->