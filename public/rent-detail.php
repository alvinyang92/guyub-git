<?php
$title = "Guyub Property Platform";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/header-footer/meta.php';
include './inc/header-footer/header-black.php';
?>

<!-- max-width-holder -->
<div class="mx-auto max-w-8xl py-10 space-y-10 px-10  ">

    <!-- basic property info -->
    <?php include './inc/detail/image-gallery.php'; ?>

    <!-- ----------------------------------------------------------------- -->

    <!-- 2cols holder -->
    <div class="grid grid-cols-2-1 gap-x-8 overflow-hidden ">

        <!-- listing cols -->
        <div class="space-y-16">

            <!-- basic property info -->
            <?php include './inc/detail/basic-property-details.php'; ?>

            <!-- Glance through key property detail -->
            <div class="pb-8 space-y-6">
                <!-- title -->
                <div class="text-2xl font-semibold">Glance through key property details</div>

                <?php include './inc/detail/property-details.php'; ?>
                <?php include './inc/detail/property-details.php'; ?>
                <?php include './inc/detail/property-details.php'; ?>
                <?php include './inc/detail/property-details.php'; ?>


            </div>

            <!-- Understand the loan & cost involved -->
            <div class="pb-8 space-y-6 border-b border-gray-300 ">

                <!-- title -->
                <div class="text-2xl font-semibold">Understand the loan & cost involved </div>

                <!-- How much do I need to pay? | What is my affordability? -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- item -->
                    <a class="bg-gray-50 px-5 py-4 flex justify-between rounded-lg border border-gray-300 items-end">

                        <!-- content -->
                        <div class="space-y-4">
                            <!-- title -->
                            <div class=" text-base font-bold">How much do I need to pay?</div>

                            <!-- small title + price -->
                            <div class="space-y-1">
                                <div class="text-base text-gray-500">Estimated Repayment of</div>
                                <div class="text-base text-guyub-black">RM1,500/month</div>
                            </div>
                        </div>

                        <!-- button -->
                        <div class="flex  items-center space-x-1 " href="">
                            <div class="">Calculate</div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>

                        </div>

                    </a>

                    <!-- item -->
                    <a class="bg-gray-50 px-5 py-4 flex justify-center items-center rounded-lg border border-gray-300 ">

                        <!-- content -->
                        <div class="space-y-1 flex flex-col items-center ">
                            <!-- title -->
                            <div class=" text-base font-bold">What is my affordability?</div>

                            <!-- button -->
                            <div class="flex items-center space-x-1 " href="">
                                <div class="">Calculate my loan eligibility</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>

                            </div>


                        </div>



                    </a>

                </div>




            </div>

            <!-- Read an overview of this property	 -->
            <div class="pb-8 space-y-6 border-b border-gray-300 ">

                <!-- title -->
                <div class="text-2xl font-semibold">Read an overview of this property</div>

                <!-- desciption -->
                <article class="prose-sm lg:prose-xl">

                    <p>
                        For years parents have espoused the health benefits of eating garlic bread with cheese to their
                        children, with the food earning such an iconic status in our culture that kids will often dress
                        up as warm, cheesy loaf for Halloween.
                    </p>
                    <p>
                        But a recent study shows that the celebrated appetizer may be linked to a series of rabies cases
                        springing up around the country.
                    </p>


                </article>



            </div>

            <!-- Made ready for you -->
            <div class="pb-8 space-y-6 border-b border-gray-300 ">

                <!-- title -->
                <div class="text-2xl font-semibold">Made ready for you</div>

                <?php include './inc/detail/tab-2cols.php'; ?>

                <!-- btn -->
                <div class="btn text-guyub-black border border-guyub-black ">Show all</div>

            </div>

            <!-- Made convenient for you -->
            <div class="pb-8 space-y-6 border-b border-gray-300 ">

                <!-- title -->
                <div class="text-2xl font-semibold">Made convenient for you </div>

                <?php include './inc/detail/tab-2cols.php'; ?>

                <!-- btn -->
                <div class="btn text-guyub-black border border-guyub-black ">Show all</div>

            </div>

            <!-- Discover the community nearby	 -->
            <div class="pb-8 space-y-6 border-b border-gray-300 ">

                <!-- title -->
                <div class="text-2xl font-semibold">Discover the community nearby</div>

                <!-- amenities select.... -->
                <div class="flex items-center space-x-3">

                    <!-- highlight -->
                    <a class="text-white rounded-full bg-guyub-green px-3 py-2 font-medium space-x-1 flex items-center" href="">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <div class="text-white text-base font-medium">Supermarket</div>

                    </a>

                    <!-- normal tab -->
                    <a class="text-white rounded-full bg-gray-100 px-3 py-2 font-medium space-x-1 flex items-center" href="">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <div class="text-guyub-black text-base font-medium">Supermarket</div>

                    </a>

                    <!-- normal tab -->
                    <a class="text-white rounded-full bg-gray-100 px-3 py-2 font-medium space-x-1 flex items-center" href="">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <div class="text-guyub-black text-base font-medium">Supermarket</div>

                    </a>

                    <!-- normal tab -->
                    <a class="text-white rounded-full bg-gray-100 px-3 py-2 font-medium space-x-1 flex items-center" href="">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <div class="text-guyub-black text-base font-medium">Supermarket</div>

                    </a>

                </div>

                <!-- map -->
                <div class="w-full h-[400px] bg-gray-50"></div>

                <!-- button -->
                <a class="flex space-x-1 items-center">
                    <div class="text-base font-medium text-guyub-black underline">Discover more about this neighbourhood</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>


            </div>

            <!-- Seek your way of living-->
            <div class="pb-8 space-y-6 border-b border-gray-300 overflow-hidden  ">

                <!-- title -->
                <div class="text-2xl font-semibold">Seek your way of living </div>

                <!-- banner -->
                <?php include './inc/detail/banner.php'; ?>


            </div>

            <!-- Be prepared in advance -->
            <div class="pb-8 space-y-6  ">

                <!-- title -->
                <div class="text-2xl font-semibold">Be prepared in advance</div>

                <!-- tab -->
                <div class="flex justify-between">

                    <!-- furnishing -->
                    <div class=" w-full ">
                        <!-- title -->
                        <div class="pb-3 border-b-2  border-guyub-green">Furnishing</div>



                    </div>

                    <!-- Utilities -->
                    <div class=" w-full ">
                        <!-- title -->
                        <div class="pb-3 border-b ">Utilities</div>


                    </div>




                </div>

                <!-- tab- content -->
                <div class="space-y-6 py-4 ">

                    <!--title  content -2cols -->
                    <div class="flex ">

                        <!-- item -->
                        <div class="flex items-center space-x-2 w-full">
                            <div class="text-base font-medium text-guyub-black">Documents required</div>
                        </div>

                        <!-- item -->
                        <div class="flex items-center space-x-2 w-full">
                            <div class="text-base font-medium text-guyub-black">Booking</div>
                        </div>

                    </div>

                    <!---------------------------------------------------------------------->

                    <!-- content -2cols -->
                    <div class="flex ">

                        <!-- item -->
                        <div class="flex items-center space-x-2 w-full">
                            <img class="w-4 h-4" src="./assets/images/rent/detail gallery/tick.svg" alt="">
                            <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units</div>
                        </div>

                        <!-- item -->
                        <div class="flex items-center space-x-2 w-full">
                            <img class="w-4 h-4" src="./assets/images/rent/detail gallery/tick.svg" alt="">
                            <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units</div>
                        </div>



                    </div>

                    <!-- content -2cols -->
                    <div class="flex ">

                        <!-- item -->
                        <div class="flex items-center space-x-2 w-full">
                            <img class="w-4 h-4" src="./assets/images/rent/detail gallery/tick.svg" alt="">
                            <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units</div>
                        </div>

                        <!-- item -->
                        <div class="flex items-center space-x-2 w-full">
                            <img class="w-4 h-4" src="./assets/images/rent/detail gallery/tick.svg" alt="">
                            <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units</div>
                        </div>



                    </div>

                    <!-- content -2cols -->
                    <div class="flex ">

                        <!-- item -->
                        <div class="flex items-center space-x-2 w-full">
                            <img class="w-4 h-4" src="./assets/images/rent/detail gallery/tick.svg" alt="">
                            <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units</div>
                        </div>

                        <!-- item -->
                        <div class="flex items-center space-x-2 w-full">
                            <img class="w-4 h-4" src="./assets/images/rent/detail gallery/tick.svg" alt="">
                            <div class="text-base font-medium text-guyub-black">Air-Conditioner x 3 units</div>
                        </div>



                    </div>

                </div>

                <!-- btn -->
                <div class="btn text-guyub-black border border-guyub-black ">Show all</div>

            </div>


        </div>



        <!-- ads -->
        <div class="h-full sticky top-3 ">

            <?php include './inc/detail/agent-contact.php'; ?>

        </div>

    </div>

    <!-- ----------------------------------------------------------------- -->

    <!-- Not the right fit? Browse others -->
    <div class="space-y-6 border-t border-gray-300 pt-14">

        <!-- title -->
        <div class="text-2xl font-semibold">Not the right fit? Browse others</div>

        <!-- suggested listing -->
        <div class="flex justify-between space-x-5">
            <!--article item -->
            <?php include './inc/detail/rent-suggested.php'; ?>
            <?php include './inc/detail/rent-suggested.php'; ?>
            <?php include './inc/detail/rent-suggested.php'; ?>
        </div>

    </div>
</div>


<?php include './inc/header-footer/footer.php'; ?>