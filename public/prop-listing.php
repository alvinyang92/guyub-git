<?php
$title = "Guyub - Prop Listing";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/mobile-search.php';
include './inc/header-black.php';
include './inc/full-search.php';
?>


<!-- max-width-holder -->
<section class="content_holder mx-auto max-w-8xl relative block py-5 px-10 lg:px-8 sm:px-3 ">
    <!-- search -->
    <div class="hidden lgg:block">
        <button class="w-full open-white-gallery">
            <div class="flex w-full">
                <div class="px-4 py-3 font-medium border w-full ">
                    <div class="flex space-x-2 items-center">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <div class="truncate ">Search by Location Search by Location Search by Location Search by Location</div>
                    </div>
                </div>
                <!-- <div class="bg-guyub-green  text-white py-2 px-6 flex items-center justify-center  ">
                        <p class="font-medium text-base">Search</p>
                    </div> -->
            </div>
        </button>
    </div>


    <!-- 2cols holder -->
    <div class="relative flex justify-between xl:flex-col space-x-10 lgg:space-x-0 py-9 ">

        <!-- listing card holder -->
        <div class="space-y-10 ">

            <!-- ** rent/new title holder -->
            <div class="flex justify-between md:flex-col md:space-y-4">

                <!-- title -->
                <div class="">
                    <div class="text-lg">
                        <div class="">
                            <span>315</span> All
                            <span>Residential</span> for
                            <span>Sale</span> in
                        </div>
                        <div class=""><span class="font-bold">KL Sentral, Kuala Lumpur</span></div>
                    </div>
                    <!-- <div class="font-medium">Explore 5,127 listings on Guyub</div> -->
                </div>

                <?php include './inc/sort-dropdown.php'; ?>

            </div>

            <!-- card listing -->
            <div>
                <!-- listing -->
                <div class="space-y-9">
                    <!-- item -->

                    <!-- item -->
                    <?php include './inc/rent-listing-card.php'; ?>
                    <!-- item -->
                    <?php include './inc/rent-listing-card.php'; ?>
                    <!-- item -->
                    <?php include './inc/rent-listing-card.php'; ?>
                    <!-- item -->
                    <?php include './inc/rent-listing-card.php'; ?>
                </div>
                <!-- pagination -->
                <div>
                    <!-- rent listing card -->
                    <?php include './inc/pagination.php'; ?>
                </div>
            </div>
        </div>


        <!-- ads -->
        <section class="h-full sticky top-28 xl:top-0 xl:relative xl:h-auto  ">

            <?php include './inc/ads.php'; ?>

        </section>

    </div>
</section>
<?php include './inc/footer.php'; ?>