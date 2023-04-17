<?php
$title = "Guyub Property Platform";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/header-footer/meta.php';
include './inc/header-footer/header-black.php';
?>

<!-- max-width-holder -->
<section class="mx-auto max-w-8xl px-20 py-9 ">

    <!-- banner -->
    <div class="bg-interior-banner img-position-50 h-[500px] rounded-lg relative flex items-center  ">
        <div class="space-y-3 absolute z-10 px-36 py-20 w-[800px]  ">
            <!-- new launch badge -->
            <div class="uppercase bg-white p-1 rounded-md text-sm text-center w-28 ">New Launch</div>
            <!-- Title -->
            <h3 class="text-white">Facets of Malaysia</h3>
            <!-- sub copy -->
            <p class="text-white text-base">Condominium 1,636 sq ft</p>
            <!-- sub copy -->
            <h3 class="text-white text-lg font-semibold">from RM 150 psf</h3>
            <!-- button -->
            <button class="flex space-x-1 items-center ">
                <div class="underline text-base text-white">Learn More</div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        <!-- arrow left and right -->
        <div class="absolute w-full flex justify-between px-10 py-20 z-10">
            <!-- left arrow -->
            <div class="rounded-full bg-white p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
            <!-- right arrow -->
            <div class="rounded-full bg-white p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </div>



        <!-- gradient overlay -->
        <div class="bg-gradient-to-r from-gray-900 opacity-60 h-full w-full">
        </div>



    </div>


    <!-- 2cols holder -->
    <section class="flex justify-between space-x-6 py-9  ">

        <!-- listing card holder -->
        <div class="space-y-10">

            <!-- ** virtual/sale/interior title holder -->
            <div class="space-y-7">
                
                <div>
                   
                    <div class="text-2xl font-bold">Browse properties for rent in Malaysia </div>
                
                    <div class="text-sm">Explore 5,127 listings on Guyub</div>
                </div>

                
                <div class="flex justify-between">

                   
                    <div class="flex items-center space-x-3">
                        <a class="text-white rounded-full bg-guyub-green px-3 py-2 font-medium" href="">All</a>
                        <a class="text-guyub-black rounded-full bg-gray-100 px-3 py-2 font-medium" href="">Landed</a>
                        <a class="text-guyub-black rounded-full bg-gray-100 px-3 py-2 font-medium" href="">Non-Landed</a>
                        <a class="text-guyub-black rounded-full bg-gray-100 px-3 py-2 font-medium" href="">Commercial</a>
                    </div>

                 
                    <div class="flex space-x-2 items-center">
                       
                        <div class="font-bold text-guyub-black">Sort</div>
                      
                        <div class="relative inline-block p-2 border ">
                            <button>
                                <div class="flex space-x-1 items-center">
                                    <div class="">relevance</div>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ** rent/new title holder -->
            <!-- <div class="flex justify-between">

                <div>
                    <div class="text-2xl font-bold">Browse properties for rent in Malaysia </div>

                    <div class="text-sm">Explore 5,127 listings on Guyub</div>
                </div>

                <div class="flex space-x-2 items-center">

                    <div class="font-bold text-guyub-black">Sort</div>

                    <div class="relative inline-block p-2 border ">
                        <button>
                            <div class="flex space-x-1 items-center">
                                <div class="">relevance</div>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>


            </div> -->

            <!-- card listing -->
            <div class="">
                <!-- listing -->
                <div class="space-y-9">
                    <!-- interior listing card -->
                    <?php include './inc/listing/interior-listing-card.php'; ?>
                   
                </div>

                <!-- pagination -->
                <div class="">
                    <!-- rent listing card -->
                    <?php include './inc/listing/pagination.php'; ?>

                </div>
            </div>

        </div>

        <!-- ads -->
        <div class="w-[324px]">
            <?php include './inc/listing/ads.php'; ?>
        </div>

    </section>

</section>

<?php include './inc/header-footer/footer.php'; ?>