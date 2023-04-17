<?php
$title = "Guyub Property Platform";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/header-footer/meta.php';
include './inc/header-footer/header-black.php';
include './inc/search/full-search.php';
?>

<!-- max-width-holder -->
<section class="mx-auto max-w-8xl px-20 py-9 ">

    <!-- banner -->
    <?php include './inc/detail/banner.php'; ?>


    <!-- 2cols holder -->
    <section class="flex justify-between space-x-6 py-9  ">

        <!-- listing card holder -->
        <div class="space-y-10">

            <!-- ** virtual/sale/interior title holder -->
            <!-- <div class="space-y-7">
                
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
            </div> -->

            <!-- ** rent/new title holder -->
            <div class="flex justify-between">

                <div>
                    <div class="text-2xl font-bold">Browse new launches in Malaysia</div>

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


            </div>

            <!-- card listing -->
            <div class="">
                <!-- listing -->
                <div class="space-y-9">
                    <!-- new listing card -->
                    <?php include './inc/listing/new-listing-card.php'; ?>
                    <!-- new listing card -->
                    <?php include './inc/listing/new-listing-card.php'; ?>
                    <!-- new listing card -->
                    <?php include './inc/listing/new-listing-card.php'; ?>
                    <!-- new listing card -->
                    <?php include './inc/listing/new-listing-card.php'; ?>
                   
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