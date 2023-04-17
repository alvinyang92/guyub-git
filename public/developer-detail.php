<?php
$title = "Guyub - detail";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>


<!-- max-width-holder -->
<div class="space-y-16 py-12 px-10 lg:px-8 sm:px-3 mx-auto max-w-8xl ">
    <!-- back button -->
    <a class="flex">
        <div class="flex items-center justify-center ">
            <!-- arrow -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <!-- title-->
            <div class="font-medium">Back to developer's catalogues listing</div>
        </div>
    </a>

    <!-- intro  -->
    <section class="space-y-9">

        <!-- featured -->
        <div class="grid grid-cols-3 gap-x-5 xl:grid-cols-1 xl:grid-x-0 xl:gap-y-5">
            <!--text-content-->
            <div class="space-y-8 px-9 xl:px-0 flex flex-col justify-center">

                <div class="space-y-6">
                    <img class="w-40" src="../assets/images/ecoworld.jpg" alt="">
                    <div class="space-y-3">
                        <!-- title -->
                        <h4 class="section-title-home">Sime Darby Property Berhad</h4>
                        <!-- sub copy -->
                        <div class="text-lg">There is more empty space in office towers but landlords are confident that demand will recover as vaccines are rolled out with small..</div>
                    </div>
                </div>
            </div>
            <!-- image -->
            <div class="col-span-2">
                <img class="object-cover w-full object-center xs:h-64" src="./assets/images/developer-intro.jpg" alt="">
            </div>
        </div>


    </section>

    <!-- Discover their latest launches	 -->
    <section class="space-y-9 overflow-hidden">
        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Discover their latest launches</h4>

            <!-- show more -->
            <div class="flex space-x-3 items-center">

                <!-- arrow left and right -->
                <div class="flex space-x-2">

                    <!-- left arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider2-prev-btn ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- right  arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider2-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>


        </div>

        <div class="owl-2 owl-carousel owl-theme flex justify-between items-center">
            <!-- item -->
            <div class="grid grid-cols-3 gap-x-5 xl:grid-cols-1 xl:grid-x-0 xl:gap-y-5">
                <!-- image -->
                <div class="col-span-2">
                    <img src="./assets/images/latest-launches.jpg" alt="">
                </div>

                <!--text-content-->
                <div class="space-y-8 px-9 xl:px-0 flex flex-col justify-center">

                    <div class="space-y-4">
                        <!-- title -->
                        <div>
                            <h4 class="section-title-home">Residensi Astrea Mont'Kiara</h4>
                            <h4 class="text-xl font-semibold">South Klang</h4>
                        </div>
                        <!-- sub copy -->
                        <div class="text-lg">Discover true comfort in the affluent neighbourhood of Mont'Kiara</div>
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

            <!-- item -->
            <div class="grid grid-cols-3 gap-x-5 xl:grid-cols-1 xl:grid-x-0 xl:gap-y-5">
                <!-- image -->
                <div class="col-span-2">
                    <img src="./assets/images/latest-launches.jpg" alt="">
                </div>

                <!--text-content-->
                <div class="space-y-8 px-9 xl:px-0 flex flex-col justify-center">

                    <div class="space-y-4">
                        <!-- title -->
                        <div>
                            <h4 class="section-title-home">Residensi Astrea Mont'Kiara</h4>
                            <h4 class="text-xl font-semibold">South Klang</h4>
                        </div>
                        <!-- sub copy -->
                        <div class="text-lg">Discover true comfort in the affluent neighbourhood of Mont'Kiara</div>
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
    </section>

    <!-- Review their past curations  -->
    <section class="space-y-9">

        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Review their past curations</h4>
        </div>

        <!-- article-item-holder -->
        <div class="grid grid-cols-3 gap-8 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">

            <?php include './inc/past-projects-card.php'; ?>
            <?php include './inc/past-projects-card.php'; ?>
            <?php include './inc/past-projects-card.php'; ?>
            <?php include './inc/past-projects-card.php'; ?>
            <?php include './inc/past-projects-card.php'; ?>
            <?php include './inc/past-projects-card.php'; ?>
            <?php include './inc/past-projects-card.php'; ?>
            <?php include './inc/past-projects-card.php'; ?>
            <?php include './inc/past-projects-card.php'; ?>

        </div>

        <!-- pagination -->
        <div class="">
            <!-- rent listing card -->
            <?php include './inc/pagination.php'; ?>
        </div>

    </section>

    <!-- Celebrate their awards and recognition	 -->
    <section class="space-y-9 overflow-hidden">
        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Celebrate their awards and recognition</h4>

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

            </div>
        </div>

        <div class="owl-3 owl-carousel owl-theme flex justify-between items-center">

            <!--item -->
            <div class="flex bg-gray-50 py-8 items-center flex-col justify-between p-6">


                <div class=" flex flex-col space-y-10 items-center">
                    <img class="w-20 " src="./assets/images/awards.png" alt="">
                    <div class="space-y-3">
                        <h5 class="text-center text-xl">Best Condo/Apartment Architectual Design</h5>
                    </div>
                </div>

            </div>
            <!--item -->
            <div class="flex bg-gray-50 py-8 items-center flex-col justify-between p-6">


                <div class=" flex flex-col space-y-10 items-center">
                    <img class="w-20 " src="./assets/images/awards.png" alt="">
                    <div class="space-y-3">
                        <h5 class="text-center text-xl">Best Condo/Apartment Architectual Design</h5>
                    </div>
                </div>

            </div>
            <!--item -->
            <div class="flex bg-gray-50 py-8 items-center flex-col justify-between p-6">


                <div class=" flex flex-col space-y-10 items-center">
                    <img class="w-20 " src="./assets/images/awards.png" alt="">
                    <div class="space-y-3">
                        <h5 class="text-center text-xl">Best Condo/Apartment Architectual Design</h5>
                    </div>
                </div>

            </div>
            <!--item -->
            <div class="flex bg-gray-50 py-8 items-center flex-col justify-between p-6">


                <div class=" flex flex-col space-y-10 items-center">
                    <img class="w-20 " src="./assets/images/awards.png" alt="">
                    <div class="space-y-3">
                        <h5 class="text-center text-xl">Best Condo/Apartment Architectual Design</h5>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Stay updated on their latest news  -->
    <section class="space-y-9">

        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Stay updated on their latest news</h4>

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
                <img class="object-cover w-full object-center xs:h-64" src="./assets/images/article-featured-photos.jpg" alt="">
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
        <div class="grid grid-cols-3 gap-6 lg:grid-cols-1 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">

            <!--article item -->
            <?php include './inc/article-listing.php'; ?>

            <!--article item -->
            <?php include './inc/article-listing.php'; ?>

            <!--article item -->
            <?php include './inc/article-listing.php'; ?>


        </div>

    </section>







</div>

<?php include './inc/footer.php'; ?>