<?php
$title = "Guyub - News Listing";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>
<!-- featured -->
<div class="pt-28 lgg:pt-0 px-10 lgg:px-0  mx-auto max-w-8xl">
    <div class="grid grid-cols-3 gap-x-5 lgg:grid-cols-1 xl:grid-x-0 xl:gap-y-5">
        <!-- image -->
        <div class="col-span-2 relative">
            <div class="absolute bottom-6 left-5 hidden lgg:block ">
                <div class="btn bg-white text-guyub-green">Learn more</div>
            </div>
            <img class="rounded-lg lgg:rounded-none" src="./assets/images/inspire-01.jpg" alt="">
    
        </div>
    
        <!--text-content-->
        <div class="space-y-8 px-9 xl:px-0 flex flex-col justify-center lgg:hidden">
    
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
</div>

<!-- max-width-holder -->
<div class="space-y-16 pb-12 pt-28 px-10 lg:px-8 sm:px-3 mx-auto max-w-8xl ">

    <!-- stay informed  -->
    <section class="space-y-12">



        <div class="space-y-6">

            <!-- title -->
            <div class="space-y-1">
                <div class="text-xl font-bold">Browse lifestyle guides</div>
                <div class="font-semibold">Explore 100 lifestyle guides on Guyub</div>
                <!-- <div class="font-medium">Explore 5,127 listings on Guyub</div> -->
            </div>

            <div class="space-y-8" x-cloak x-data="{active: 0}">

                <!-- tab -->
                <div x-cloak class="flex w-full items-center space-x-3  xs:items-start mdd:space-x-0">
                    <button class="tab-small-2 xs:w-full" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>Home Improvement</button>
                    <button class="tab-small-2 xs:w-full" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Hobbies & Leisure</button>
                    <button class="tab-small-2 xs:w-full" x-on:click.prevent="active = 2" x-bind:class="{'text-white bg-guyub-green': active === 2}" x-cloak>Travel & Culture</button>
                </div>

                <!-- article-item-holder -->
                <div class="grid grid-cols-3 gap-10 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6" x-show="active === 0" x-cloak>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                </div>

                <!-- article-item-holder -->
                <div class="grid grid-cols-3 gap-6 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6" x-show="active === 1" x-cloak>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                </div>

                <!-- article-item-holder -->
                <div class="grid grid-cols-3 gap-6 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6" x-show="active === 2" x-cloak>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                    <!--article item -->
                    <?php include './inc/article-listing.php'; ?>
                </div>



            </div>

        </div>

    </section>

</div>





<?php include './inc/footer.php'; ?>