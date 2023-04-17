<?php
$title = "Guyub - agent-detail";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>


<!-- max-width-holder -->
<section class="mx-auto max-w-8xl relative block py-14 space-y-10 px-10 lg:px-8 sm:px-3 ">
    <!-- back button -->
    <div class="flex space-x-2 ">
        <!-- back button -->
        <a class="">
            <div class="flex items-center justify-center ">
                <!-- arrow -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <!-- title-->
                <div class="font-medium">Back to rent listing</div>
            </div>
        </a>
    </div>

    <!-- agent-top -->
    <div class="flex justify-between items-center md:items-start md:flex-col md:space-y-8 ">
        <!-- left -->
        <div class="flex space-x-2">
            <!-- photo -->
            <div class=" w-20 h-20 bg-gray-100">
                <img class="rounded-full object-cover w-full h-full object-center" src="./assets/images/agent-photo.jpg" alt="">
            </div>

            <!-- details -->
            <div class="space-y-2">
                <div class="space-y-1">
                    <div class="">James Wong</div>
                    <div class="">REN20176</div>
                </div>
                <div class="">IQI Reality Sdn Bhd</div>
            </div>

        </div>

        <!-- right -->
        <div class="flex flex-col items-end md:items-start space-y-5 xs:w-full">
            <!-- share -->
            <div class="xs:w-full">
                <a class="btn-small w-[150px] xs:w-full text-guyub-black border-[1px] border-gray-300 flex space-x-2 items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                    </svg>
                    <div class="font-medium text-base text-guyub-black">Share</div>
                </a>
            </div>

            <!-- 3 buttons -->
            <div class="flex space-x-2 xs:flex-col xs:space-y-3 xs:space-x-0 xs:w-full">
                <!-- email -->
                <a href="" class="btn bg-guyub-green flex space-x-2 items-center">
                    <!-- phone icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <!-- text -->
                    <div class="flex items-center">
                        <div class="text-white">Email</div>
                    </div>

                </a>
                <!-- phone -->
                <a href="" class="btn bg-gray-100 flex space-x-2 items-center">
                    <!-- phone icon -->
                    <img class="w-5 h-5" src="./assets/images/phone.svg" alt="">
                    <!-- number -->
                    <div class="flex items-center">
                        <div class="">016435...</div>
                        <div class="underline">Show</div>
                    </div>
                    <!-- whatsapp -->
                    <div class=""></div>
                </a>
                <!-- whatsapp -->
                <a href="" class="btn bg-gray-100 flex space-x-2 items-center">
                    <!-- phone icon -->
                    <img class="w-5 h-5" src="./assets/images/whatsapp.svg" alt="">
                    <!-- number -->
                    <div class="flex items-center">
                        <div class="">Whatsapp</div>
                    </div>
                    <!-- whatsapp -->
                    <div class=""></div>
                </a>

            </div>




        </div>

    </div>

    <div class="space-y-5">
        <!-- title -->
        <div class="space-y-1">
            <div class="text-xl font-medium"><span class="text-xl font-bold">89</span> Properties by James Wong </div>
        </div>
        <!-- tab -->
        <div class="space-y-9" x-cloak x-data="{active: 0}">
            <!-- tab -->
            <div x-cloak class="flex w-full items-center space-x-3 mdd:hidden">
                <button class="tab-small-2" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>All</button>
                <button class="tab-small-2" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Buy</button>
                <button class="tab-small-2" x-on:click.prevent="active = 2" x-bind:class="{'text-white bg-guyub-green': active === 2}" x-cloak>Rent</button>
            </div>

            <!-- item -->
            <div class="space-y-8" x-show="active === 0" x-cloak>
                <!-- article-item-holder -->
                <div class="grid grid-cols-3 gap-14 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                </div>
                <!-- pagination -->
                <div class="">
                    <!-- rent listing card -->
                    <?php include './inc/pagination.php'; ?>
                </div>
            </div>

            <!-- item -->
            <div class="space-y-8" x-show="active === 1" x-cloak>
                <!-- article-item-holder -->
                <div class="grid grid-cols-3 gap-14 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                </div>
                <!-- pagination -->
                <div class="">
                    <!-- rent listing card -->
                    <?php include './inc/pagination.php'; ?>
                </div>
            </div>

            <!-- item -->
            <div class="space-y-8" x-show="active === 2" x-cloak>
                <!-- article-item-holder -->
                <div class="grid grid-cols-3 gap-14 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                    <?php include './inc/rent-suggested.php'; ?>
                </div>
                <!-- pagination -->
                <div class="">
                    <!-- rent listing card -->
                    <?php include './inc/pagination.php'; ?>
                </div>
            </div>
        </div>
    </div>



</section>

<?php include './inc/footer.php'; ?>