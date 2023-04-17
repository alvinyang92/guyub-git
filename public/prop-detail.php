<?php
$title = "Guyub - prop details";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>


<!-- pop gallery -->
<?php include './inc/gallery-white.php'; ?>
<?php include './inc/gallery-black.php'; ?>

<!-- basic property info -->
<?php include './inc/image-gallery.php'; ?>


<!-- max-width-holder -->
<div class="content_holder relative block mx-auto max-w-8xl pb-10 px-20 lg:px-8 sm:px-3 ">
    <!-- Span bottom edge -->
    <div class="lg:fixed lg:bottom-0 lg:left-0 lg:right-0 lg:bg-white lg:h-16 lg:w-full lg:z-10 hidden lg:block ">
        <div class="grid grid-cols-2 border-[0.5px] h-full">
            <div class="border-r-[1px] flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <img class="w-7" src="./assets/images/social-media/whatsapp-green-stick.svg" alt="">
                    <div class="text-guyub-green  font-medium">Whatsapp Us</div>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <img class="w-6" src="./assets/images/social-media/call-green-stick.svg" alt="">
                    <div class="text-guyub-green font-medium">Call Us</div>
                </div>
            </div>
           
        </div>
    </div>

    <!-- 2cols holder -->
    <div class="relative flex justify-between lg:flex-col space-x-8 lg:space-x-0 py-9 ">

        <!-- content col -->
        <div class="space-y-12 md:space-y-4 overflow-hidden xl:w-full ">

            <!-- Basic Property -->
            <section class="pb-8 space-y-8 ">
                <div class="relative flex justify-between sm:flex-col sm:space-y-6  ">


                    <!-- property info -->
                    <div class="space-y-1 lgg:space-y-1">
                        <!-- date -->
                        <div class="font-medium text-xs text-gray-500">31 Dec 2021</div>
                        <!-- price -->
                        <div class="flex space-x-1">
                            <div class="text-lg font-medium">
                                <div class="">RM 2,370,000</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <!-- name + address -->
                            <div class="space-y-2 lgg:space-y-1">
                                <!-- name -->
                                <div class="text-xl lgg:text-lg font-bold">Pavilion Suites @ Kuala Lumpur</div>
                                <!-- address -->
                                <div class="text-base font-medium">Bukit Bintang, 55100, Kuala Lumpur</div>
                            </div>
                            <!-- bed/bath + sqft + price per sqft -->
                            <div class="flex items-center space-x-3 text-gray-500">
                                <!-- bed.bath -->
                                <div class="flex space-x-3">
                                    <!-- bed -->
                                    <div class="flex space-x-1">
                                        <!-- number of room -->
                                        <div class="text-base font-medium">1</div>
                                        <!-- bed icon -->
                                        <img class="" src="https://www.guyub.co/wp-content/themes/guyub/assets/images/bedroom.svg" alt="">
                                    </div>
                                    <!-- bath -->
                                    <div class="flex space-x-1">
                                        <!-- number of bath -->
                                        <div class="text-base font-medium">1</div>
                                        <!-- bath icon -->
                                        <img src="https://www.guyub.co/wp-content/themes/guyub/assets/images/bathroom.svg" alt="">
                                    </div>
                                </div>
                                <!-- DOT -->
                                <div>•</div>
                                <!-- <img class="w-2 h-2" src="https://www.guyub.co/wp-content/themes/guyub/assets/images/dot.svg" alt=""> -->
                                <!-- sqft -->
                                <div class="text-base font-medium">718 sqft</div>
                                <!-- DOT -->
                                <div>•</div>
                                <!-- <img class="w-2 h-2" src="https://www.guyub.co/wp-content/themes/guyub/assets/images/dot.svg" alt=""> -->
                                <!-- price per sqft -->
                                <div class="text-base font-medium">RM 3,300.84 psf</div>
                            </div> <!-- tag -->
                            <div class="space-y-2 ">
                                <!-- item -->
                                <div class=" inline-block p-2 rounded-md bg-gray-100 text-sm font-medium mr-2 ">Service Residence</div>
                                <!-- item -->
                                <div class=" inline-block p-2 rounded-md bg-gray-100 text-sm font-medium mr-2 ">Completion 2018</div>
                                <!-- item -->
                                <div class=" inline-block p-2 rounded-md bg-gray-100 text-sm font-medium mr-2 ">Furnished</div>
                            </div>
                        </div>
                    </div>
                    <!-- save + share -->
                    <div class="sm:relative absolute top-0 right-0 flex space-x-2">
                        <!-- save -->
                        <div class="">
                            <button class="simplefavorite-button" data-postid="1235" data-siteid="1" data-groupid="1" data-favoritecount="0" style="">
                                <div class="btn-small text-guyub-black border-[1px] border-gray-300 flex space-x-2 items-center "> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    <div class="font-medium text-base text-guyub-black">Save</div>
                                </div>
                            </button>
                        </div>
                        <button>
                            <img class="w-7" src="./assets/images/social-media/fb-black.svg" alt="">
                        </button>
                        <button>
                            <img class="w-7" src="./assets/images/social-media/whatsapp-black.svg" alt="">
                        </button>
                        <button>
                            <img class="w-7" src="./assets/images/social-media/pinterest-black.svg" alt="">
                        </button>
                        <button>
                            <img class="w-7" src="./assets/images/social-media/plus-black.svg" alt="">
                        </button>
                        <!-- share -->
                        <!--
            <div class="">
                <a class="btn-small text-guyub-black border-[1px] border-gray-300 flex space-x-2 items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                    </svg>
                    <div class="font-medium text-base text-guyub-black">Share</div>
                </a>
            </div>
            -->
                    </div>
                </div>
                <!-- outline -->
                <div class="border-b border-gray-300 "></div>
            </section>

            <!-- Glance through key property detail -->
            <section class="pb-8 space-y-6 ">
                <!-- title -->
                <h4 class="section-title">Glance through key property details</h4>

                <div class="content ">
                    <div class="grid grid-cols-2 gap-4 xs:grid-cols-1 js-excerpt excerpt-hidden">

                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                        <!-- detail item -->
                        <div class="space-y-1 border-b border-gray-300 pb-4">
                            <!-- title -->
                            <div class="text-gray-500 text-base font-medium">Property Type</div>
                            <!-- info -->
                            <div class="text-guyub-black text-base font-medium">Condominium</div>
                        </div>
                    </div>

                </div>

                <a role="button" class=" mt-3 btn-small border border-guyub-black js-show-more  ">Show more</a>

                <!-- outline -->
                <div class="border-b border-gray-300 "></div>


            </section>

            <!-- Understand the loan & cost involved -->
            <section class="pb-8 space-y-6 ">

                <!-- title -->
                <h4 class="section-title">Understand the loan & cost involved </h4>

                <!-- How much do I need to pay? | What is my affordability? -->
                <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
                    <!-- item -->
                    <a class="relative bg-gray-50 px-5 py-4 flex md:flex-col md:items-start justify-between rounded-lg border border-gray-300 items-end md:space-y-3">

                        <!-- content -->
                        <div class="space-y-2">
                            <!-- title -->
                            <div class=" text-base font-bold">How much do I need to pay?</div>

                            <!-- small title + price -->
                            <div class="space-y-1">
                                <div class="text-base text-gray-500">Estimated Repayment of</div>
                                <div class="text-base text-guyub-black">RM1,500/month</div>
                            </div>
                        </div>

                        <!-- button -->
                        <div class="xs:relative xs:bottom-0 xs:right-0 absolute bottom-[18px] right-[13px] flex items-center space-x-1 " href="">
                            <div class="font-medium">Calculate</div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>

                        </div>

                    </a>

                    <!-- item -->
                    <a class="bg-gray-50 px-5 py-4 flex justify-center items-center rounded-lg border border-gray-300  xs:items-start xs:justify-start">

                        <!-- content -->
                        <div class="space-y-1 flex flex-col items-center xs:items-start ">
                            <!-- title -->
                            <div class=" text-base font-bold">What is my affordability?</div>

                            <!-- button -->
                            <div class="flex items-center space-x-1 " href="">
                                <div class="font-medium">Calculate my loan eligibility</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>

                            </div>


                        </div>



                    </a>

                </div>

                <!-- outline -->
                <div class="border-b border-gray-300 pt-6 "></div>

            </section>

            <!-- Read an overview of this property	 -->
            <section class="pb-8 space-y-6 ">

                <!-- title -->
                <h4 class="section-title">Read an overview of this property</h4>

                <!-- desciption -->
                <div class="content">
                    <div class="js-excerpt excerpt-hidden ">
                        <article class="prose max-w-none ">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem eligendi illo nulla amet commodi animi ipsam architecto facere. Praesentium repellat quidem provident sit, libero sunt inventore. Quibusdam ipsum veniam pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, repudiandae praesentium! Dolor, eveniet eius magni rem nobis, officia veniam quaerat tempora voluptatum dolore dolorum vel minima quod. In, delectus corporis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa itaque ducimus ea, qui animi doloribus fugit repellendus deserunt distinctio? Assumenda consequuntur nesciunt dicta ipsam odio? Accusantium eaque dolor fuga aut?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem eligendi illo nulla amet commodi animi ipsam architecto facere. Praesentium repellat quidem provident sit, <a href="">libero sunt inventore. Quibusdam ipsum veniam pariatur.</a> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, repudiandae praesentium! Dolor, eveniet eius magni rem nobis, officia veniam quaerat tempora voluptatum dolore dolorum vel minima quod. In, delectus corporis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa itaque ducimus ea, qui animi doloribus fugit repellendus deserunt distinctio? Assumenda consequuntur nesciunt dicta ipsam odio? Accusantium eaque dolor fuga aut?
                            </p>
                        </article>
                    </div>
                </div>

                <a role="button" class=" mt-3 btn-small border border-guyub-black js-show-more ">Show more</a>

                <!-- outline -->
                <div class="border-b border-gray-300 pt-6"></div>


            </section>

            <!-- Made ready for you -->
            <section class="pb-8 space-y-6 ">

                <!-- title -->
                <h4 class="section-title">Made ready for you</h4>

                <?php include './inc/tab-2cols.php'; ?>

                <!-- outline -->
                <div class="border-b border-gray-300 pt-6"></div>

            </section>

            <!-- Made convenient for you -->
            <section class="pb-8 space-y-6 ">

                <!-- title -->
                <h4 class="section-title">Made convenient for you </h4>

                <?php include './inc/tab-2cols.php'; ?>

                <!-- outline -->
                <div class="border-b border-gray-300 pt-6"></div>



            </section>

            <!-- Discover the community nearby (map)-->
            <section class="pb-8 space-y-6" x-cloak x-data="{active: 0}">

                <!-- title -->
                <h4 class="section-title">Discover the community nearby</h4>

                <div id="owl-inline" x-cloak class="owl-8 owl-carousel owl-theme lg:hidden ">

                    <div class="">
                        <button class="tab flex space-x-1 justify-center " x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="text-base font-medium">Clinics</div>
                        </button>
                    </div>

                    <div class="">
                        <button class="tab flex space-x-1 justify-center " x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="text-base font-medium">Supermarket</div>
                        </button>
                    </div>

                    <div class="">
                        <button class="tab flex space-x-1 justify-center " x-on:click.prevent="active = 2" x-bind:class="{'text-white bg-guyub-green': active === 2}" x-cloak>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="text-base font-medium">Bank</div>
                        </button>
                    </div>

                    <div class="">
                        <button class="tab flex space-x-1 justify-center " x-on:click.prevent="active = 3" x-bind:class="{'text-white bg-guyub-green': active === 3}" x-cloak>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="text-base font-medium">ATMs</div>
                        </button>
                    </div>

                    <div class="">
                        <button class="tab flex space-x-1 justify-center " x-on:click.prevent="active = 4" x-bind:class="{'text-white bg-guyub-green': active === 4}" x-cloak>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="text-base font-medium">Post Offices</div>
                        </button>
                    </div>

                    <div class="">

                        <button class="tab flex space-x-1 justify-center " x-on:click.prevent="active = 5" x-bind:class="{'text-white bg-guyub-green': active === 5}" x-cloak>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="text-base font-medium">Post Boxes</div>
                        </button>
                    </div>




                </div>

                <!-- map -->
                <div class="w-full h-[400px] ">

                    <!-- sample map -->
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=kuala%20lumpur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org">pirate bay</a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 400px;
                                    width: 100%;
                                }
                            </style><a href="https://www.embedgooglemap.net"></a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 400px;
                                    width: 100%px;
                                }
                            </style>
                        </div>
                    </div>
                </div>

                <!-- button -->
                <a class="flex space-x-1 items-center">
                    <div class="text-base font-medium text-guyub-black underline">Discover more about this neighbourhood</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>

                <!-- outline -->
                <div class="border-b border-gray-300 "></div>


            </section>

            <!-- Seek your way of living-->
            <section class="pb-8 space-y-6 ">
                <!-- title + arrow -->
                <div class="flex justify-between">
                    <!-- left-title  -->
                    <h4 class="section-title">Seek your way of living</h4>
                </div>

                <!-- banner -->
                <?php include './inc/banner.php'; ?>

                <!-- outline -->
                <div class="border-b border-gray-300 pt-6"></div>



            </section>

            <!-- Be prepared in advance -->
            <section class="pb-8 space-y-6 ">

                <!-- title -->
                <h4 class="section-title">Be prepared in advance</h4>

                <?php include './inc/tab-beprepared.php'; ?>
                <!-- outline -->
                <div class="border-b border-gray-300 pt-6"></div>

            </section>

            <!-- floor plan  -->
            <section class="pb-8 space-y-6 ">

                <!-- title -->
                <h4 class="section-title">Glide through floor plan options </h4>

                <div x-cloak x-data="{active: 0}">

                    <!-- tab -->
                    <div class="flex justify-between">

                        <!-- Bungalow -->
                        <button class="tab-detail w-full pb-3 border-b-2  " x-on:click.prevent="active = 0" x-bind:class="{'border-guyub-green border-b-2': active === 0}" x-cloak>
                            Bungalow
                        </button>

                        <!-- Semi-D -->
                        <button class="tab-detail w-full pb-3 border-b-2 " x-on:click.prevent="active = 1" x-bind:class="{'border-guyub-green border-b-2': active === 1}" x-cloak>
                            Semi-D
                        </button>
                    </div>

                    <!-- tab content item -->
                    <div class="" x-show="active === 0">
                        <div class="content">
                            <div class="js-excerpt excerpt-hidden space-y-5 pt-4">

                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>




                            </div>


                        </div>

                        <a role="button" class=" mt-8 btn-small border border-guyub-black js-show-more ">Show more</a>
                    </div>

                    <!-- tab content item -->
                    <div class="" x-show="active === 1">
                        <div class="content">
                            <div class="js-excerpt excerpt-hidden space-y-5 pt-4">

                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="py-3 w-full border-b  ">
                                    <div class="flex space-x-10 lgg:space-x-0 lgg:flex-col lgg:space-y-4">
                                        <!-- col 1 -->
                                        <div class="space-y-3 xl:space-y-1 flex flex-col flex-grow-[2]">
                                            <!-- unit -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Unit name:</div>
                                                <div class="font-semibold">Type A </div>
                                            </div>
                                            <!-- Configuration: -->
                                            <div class="flex space-x-2">
                                                <!-- title -->
                                                <div class="font-normal">Configuration:</div>
                                                <!-- 2icons -->
                                                <div class="flex space-x-2">
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                                    </div>
                                                    <!-- item -->
                                                    <div class="flex space-x-1">
                                                        <div class="font-normal">2</div>
                                                        <img class="" src="./assets/images/bathroom.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 -->
                                        <div class="flex flex-col flex-grow-[2] space-y-3 xl:space-y-1">
                                            <!-- Starting price -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">RM 1,750,000 - RM 2,500,000</div>
                                            </div>
                                            <!-- Built-up size -->
                                            <div class="flex space-x-2">
                                                <div class="font-normal">Built-up size</div>
                                                <div class="font-semibold">600 - 2000sqft</div>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <a class="text-guyub-green text-lg font-medium">Floorplan</a>
                                    </div>
                                </div>




                            </div>


                        </div>

                        <a role="button" class=" mt-8 btn-small border border-guyub-black js-show-more ">Show more</a>
                    </div>

                </div>

                <div class="w-full flex space-x-3 sm:flex-col sm:space-x-0 sm:space-y-3 ">

                    <a href="" class="btn bg-guyub-green text-white w-full">Download project e-brochure</a>
                    <a href="" class="btn bg-guyub-green text-white w-full">Learn more about this developer</a>



                </div>

                <!-- outline -->
                <div class="border-b border-gray-300 pt-6"></div>

            </section>

            <!-- Estimate your monthly repayment		 -->
            <section class="pb-8 space-y-6  ">

                <!-- title -->
                <h4 class="section-title">Estimate your monthly repayment</h4>

                <?php include './inc/loan-cal.php'; ?>

                <!-- outline -->
                <div class="border-b border-gray-300 pt-6"></div>

            </section>

        </div>

        <!-- ads -->
        <section class="h-full sticky top-28 xl:top-0 xl:relative xl:h-auto  ">

            <?php include './inc/agent-contact-form.php'; ?>

        </section>

    </div>

    <!-- suggested item -->
    <div class="space-y-6 border-t border-gray-300 pt-14 overflow-hidden">

        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title">Not the right fit? Browse others</h4>


            <!-- show more -->
            <div class="flex space-x-3">

                <!-- arrow left and right -->
                <div class="flex space-x-2">

                    <!-- left arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider7-prev-btn ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- right  arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider7-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

            </div>

        </div>

        <!-- suggested listing -->
        <div class="owl-7 owl-carousel owl-theme flex justify-between space-x-5">
            <!--article item -->
            <?php include './inc/rent-suggested.php'; ?>
            <?php include './inc/rent-suggested.php'; ?>
            <?php include './inc/rent-suggested.php'; ?>
        </div>

    </div>
</div>


<?php include './inc/footer.php'; ?>