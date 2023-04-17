<!-- tab container -->
<div x-cloak x-data="{active: 0}">

    <!-- tab -->
    <div class="flex justify-between">

        <!-- Furnishing -->
        <button class="tab-detail w-full pb-3 border-b-2  " x-on:click.prevent="active = 0" x-bind:class="{'border-guyub-green border-b-2': active === 0}" x-cloak>
            Furnishing
        </button>

        <!-- Utilities -->
        <button class="tab-detail w-full pb-3 border-b-2 " x-on:click.prevent="active = 1" x-bind:class="{'border-guyub-green border-b-2': active === 1}" x-cloak>
            Utilities
        </button>
    </div>

    <!-- tab content item -->
    <div class="" x-show="active === 0">
        <div class="content">
            <div class="js-excerpt excerpt-hidden grid grid-cols-2 gap-10 xs:grid-cols-1 pt-6  w-full ">
                <!-- content -2cols -->
                <!-- item -->
                <div class="space-y-10">
                    <!-- item title-->
                    <div class="flex items-center space-x-2 w-full">
                        <div class="text-base font-bold text-guyub-black">Malaysian</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">NRIC</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">NRIC</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">NRIC</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">Student ID / Employment Letter</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">NRIC</div>
                    </div>
                </div>

                <!-- item -->
                <div class="space-y-10">
                    <!-- item title-->
                    <div class="flex items-center space-x-2 w-full">
                        <div class="text-base font-bold text-guyub-black">Non - Malaysian</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">Refundable Utility Deposit</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">Refundable Security Deposit</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">First Month Rental</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">Stamping Fee</div>
                    </div>

                    <!-- item -->
                    <div class="flex items-center space-x-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="text-base font-medium text-guyub-black">NRIC</div>
                    </div>
                </div>
            </div>
        </div>

        <a role="button" class=" mt-8 btn-small border border-guyub-black js-show-more  ">Show more</a>
    </div>

    <!-- tab content item -->
    <div class="" x-show="active === 1">
        <div class="content">
            <div class="js-excerpt excerpt-hidden grid grid-cols-2 gap-10 xs:grid-cols-1 pt-6  w-full ">
                <!-- content -2cols -->
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>

                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>
                <!-- item -->
                <div class="flex items-center space-x-2 w-full">
                    <img class="w-4 h-4" src="./assets/images/star.svg" alt="">
                    <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units 2</div>
                </div>



            </div>
        </div>

        <a role="button" class=" mt-8 btn border border-guyub-black js-show-more  ">Show more</a>
    </div>
















</div>