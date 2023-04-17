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

        <a role="button" class=" mt-8 btn-small border border-guyub-black js-show-more ">Show more</a>
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

        <a role="button" class=" mt-3 btn-small border border-guyub-black js-show-more ">Show more</a>
    </div>
















</div>