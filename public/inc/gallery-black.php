<!-- pop up -->
<div class=" popupform w-full h-full absolute left-0 top-0 z-[999] hidden">
    <div class="relative ">
        <!-- black overlay -->
        <div class=" w-full h-full absolute inset-0 bg-black opacity-90"></div>
        <div class="close-form mx-auto max-w-8xl relative h-full py-5 px-5 flex flex-col justify-center">
            <!-- close button -->
            <div class="close-form cursor-pointer absolute top-5 right-0 lg:right-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>˝
            </div>
            <div class=" bg-white px-9 pt-9 lg:px-5 lg:pt-6  space-y-9 border border-gray-300 rounded-lg w-1/2 lg:w-full mx-auto">
                <!-- form -->
                <div>
                    <form class="space-y-6" action="#" method="POST" id="form">
                        <h4 class="section-title-home">Form Title</h4>
                        <div>
                            <!-- <label for="name" class="block mb-2 font-normal ">Full Name</label> -->
                            <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " />
                        </div>
                        <!-- phone -->
                        <div class="">
                            <!-- <label for="phone" class="font-normal">Phone Number</label> -->
                            <input type="text" name="phone" id="phone" placeholder="+60 16-456 7890" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>
                        <!-- email -->
                        <div class="">
                            <!-- <label for="email" class="block mb-2 font-normal">Email Address</label> -->
                            <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " />
                        </div>
                        <!-- message -->
                        <div class="">
                            <!--     -->
                            <textarea rows="5" name="message" id="message" placeholder="" class="text-guyub-black w-full px-3 py-2 placeholder-guyub-black border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " required>Hey, James Wong! I would like to check on the availability for xxxx. Hope to hear back from you soonest, thank you!</textarea>
                        </div>
                        <!-- button -->
                        <div class="">
                            <button type="submit" class="font-medium w-full px-3 py-4 text-white bg-guyub-green">Send Message</button>
                        </div>
                    </form>
                </div>
                <!-- button -->
                <div class=""></div>
            </div>
        </div>
    </div>
</div>

<!-- middle content -->
<section class="popupblack w-full h-full bg-black absolute left-0 top-0 z-[90] hidden overflow-hidden">
    <!-- mobile bottom 2 buttons -->
    <div class="hidden xgg:block">
        <div class=" px-2 absolute w-full inset-x-0 bottom-0 z-40 right-5 flex items-center justify-between space-x-2 pb-3">
            <div class="w-full">
                <a class="btn w-full flex items-center justify-center space-x-2 px-4 bg-guyub-green text-white" href="">
                    <img class="w-5 h-5" src="../assets/images/social-media/whatsapp-white-outline.svg  " alt="">
                    <div class="">Whatsapp Us</div>
                </a>
            </div>
            <div class="w-full">
                <a class="open-form btn w-full bg-guyub-green text-white">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-8xl relative h-full py-10 xgg:py-4 px-10 xgg:px-0 flex flex-col justify-between bg-black " x-cloak x-data="{active: 0}">
        <!--back & tab -->
        <div class="px-24 xgg:px-0 space-x-8 flex justify-between items-center xgg:flex-col xgg:w-full ">
            <!-- back -->
            <a class="close-black-gallery items-center close-popupblack xgg:pb-4 xgg:w-full xgg:flex xgg:px-3 xgg:border-b-[0.5px] xgg:border-gray-500">
                <div class="flex items-center  ">
                    <!-- arrow -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    <!-- title-->
                    <div class="font-medium text-white  ">Back</div>
                </div>

            </a>

            <!-- desktop tab -->
            <div class=" w-full flex justify-between items-center xgg:w-full xgg:flex-wrap xgg:justify-center xgg:pt-4">

                <div class="">
                    <button class="tab-small close-photo" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>Photos</button>
                    <button class="tab-small " x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Video</button>
                    <button class="tab-small close-365" x-on:click.prevent="active = 2" x-bind:class="{'text-white bg-guyub-green': active === 2}" x-cloak>360 Tour</button>
                    <button class="tab-small close-floorplan" x-on:click.prevent="active = 3" x-bind:class="{'text-white bg-guyub-green': active === 3}" x-cloak>Floorplan</button>
                </div>
                <div class="xgg:hidden flex space-x-2 ">
                    <div class="">
                        <a class="btn flex items-center justify-center space-x-2 px-4 bg-guyub-green text-white" href="">
                            <img class="w-5 h-5" src="../assets/images/social-media/whatsapp-white-outline.svg  " alt="">
                            <div class="">Whatsapp Us</div>
                        </a>
                    </div>
                    <div class="">
                        <a class="open-form btn bg-guyub-green text-white">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- gallery slider -->
        <div class="relative w-full px-20 md:px-0" x-cloak x-show="active === 0">
            <!-- banner -->
            <div class="w-full owl-2-1 inner owl-carousel owl-theme max-w-6xl mx-auto overflow-hidden relative  ">
                <!-- item -->
                <div class="aspect-w-16 aspect-h-9 ">
                    <img src="./assets/images/new-launch-banner.jpg" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
                </div>

                <!-- item -->
                <div class="aspect-w-16 aspect-h-9 ">
                    <img src="./assets/images/new-launch-banner.jpg" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
                </div>

               
            </div>

            <!-- slide number -->
            <div class="absolute-m-form text-white slider-counter"></div>

            <!-- right arrow -->
            <div class="absolute inset-y-0 right-0 z-10 flex flex-col justify-center md:hidden">
                <div class="rounded-full cursor-pointer bg-white p-3 slider2-1-next-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <!-- left arrow -->
            <div class="absolute inset-y-0 left-0 z-10 flex flex-col justify-center md:hidden">
                <div class="rounded-full cursor-pointer bg-white p-3 slider2-1-prev-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- youtube slider -->
        <div class="relative w-full px-20 md:px-0" x-cloak x-show="active === 1">
            <!-- banner -->
            <div class="w-full owl-2 owl-carousel owl-theme max-w-6xl mx-auto overflow-hidden relative  ">
                <!-- item -->
                <div class="aspect-w-16 aspect-h-9">
                    <!-- youtube player -->
                    <div class="w-full bg-gray-100 h-[600px]"></div>
                </div>

                <!-- item -->
                <div class="aspect-w-16 aspect-h-9">
                    <!-- youtube player -->
                    <div class="w-full bg-gray-100 h-[600px]"></div>
                </div>




            </div>

            <!-- right arrow -->
            <div class="absolute inset-y-0 right-0 z-10 flex flex-col justify-center md:hidden">
                <div class="rounded-full cursor-pointer bg-white p-3 slider2-next-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <!-- left arrow -->
            <div class="absolute inset-y-0 left-0 z-10 flex flex-col justify-center md:hidden">
                <div class="rounded-full cursor-pointer bg-white p-3 slider2-prev-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>




        </div>

        <!-- 360  -->
        <div class="relative w-full px-20 md:px-0" x-cloak x-show="active === 2">
            <div x-cloak x-data="{active: 0}">
                <!-- tab -->
                <div class="flex justify-between my-4 mx-auto w-[40%] xs:w-auto">
                    <!-- Furnishing -->
                    <button class="tab-black-detail w-full pb-3 border-b-[1px] text-white  " x-on:click.prevent="active = 0" x-bind:class="{'border-guyub-green border-b-[1px]': active === 0}" x-cloak>
                        Bare unit
                    </button>

                    <!-- Utilities -->
                    <button class="tab-black-detail w-full pb-3 border-b-[1px] text-white " x-on:click.prevent="active = 1" x-bind:class="{'border-guyub-green border-b-[1px]': active === 1}" x-cloak>
                        Show Unit
                    </button>
                </div>

                <!-- tab content item -->
                <div class="" x-show="active === 0">
                    <!-- banner -->
                    <div class="w-full owl-2 owl-carousel owl-theme max-w-6xl mx-auto overflow-hidden relative  ">
                        <!-- item -->
                        <div class="aspect-w-16 aspect-h-9">
                            <!-- youtube player -->
                            <div class="w-full bg-gray-100 h-[600px]"></div>
                        </div>

                        <!-- item -->
                        <div class="aspect-w-16 aspect-h-9">
                            <!-- youtube player -->
                            <div class="w-full bg-gray-100 h-[600px]"></div>
                        </div>




                    </div>

                    <!-- right arrow -->
                    <div class="absolute inset-y-0 right-0 z-10 flex flex-col justify-center md:hidden">
                        <div class="rounded-full cursor-pointer bg-white p-3 slider2-next-btn ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <!-- left arrow -->
                    <div class="absolute inset-y-0 left-0 z-10 flex flex-col justify-center md:hidden">
                        <div class="rounded-full cursor-pointer bg-white p-3 slider2-prev-btn ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                </div>

                <!-- tab content item -->
                <div class="" x-show="active === 1">

                    <!-- banner -->
                    <div class="w-full owl-2 owl-carousel owl-theme max-w-6xl mx-auto overflow-hidden relative  ">
                        <!-- item -->
                        <div class="aspect-w-16 aspect-h-9">
                            <!-- youtube player -->
                            <div class="w-full bg-gray-100 h-[600px]"></div>
                        </div>

                        <!-- item -->
                        <div class="aspect-w-16 aspect-h-9">
                            <!-- youtube player -->
                            <div class="w-full bg-gray-100 h-[600px]"></div>
                        </div>




                    </div>

                    <!-- right arrow -->
                    <div class="absolute inset-y-0 right-0 z-10 flex flex-col justify-center md:hidden">
                        <div class="rounded-full cursor-pointer bg-white p-3 slider2-next-btn ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <!-- left arrow -->
                    <div class="absolute inset-y-0 left-0 z-10 flex flex-col justify-center md:hidden">
                        <div class="rounded-full cursor-pointer bg-white p-3 slider2-prev-btn ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- floorplan slider -->
        <div class="relative w-full px-20 md:px-0" x-cloak x-show="active === 3">
            <!-- banner -->
            <div class="w-full owl-2 owl-carousel owl-theme max-w-6xl mx-auto overflow-hidden relative  ">
                <!-- item -->
                <div class="aspect-w-16 aspect-h-9 ">
                    <img src="./assets/images/floorplan.jpg" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
                </div>

                <!-- item -->
                <div class="aspect-w-16 aspect-h-9 ">
                    <img src="./assets/images/floorplan.jpg" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
                </div>




            </div>

            <!-- right arrow -->
            <div class="absolute inset-y-0 right-0 z-10 flex flex-col justify-center md:hidden">
                <div class="rounded-full cursor-pointer bg-white p-3 slider2-next-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <!-- left arrow -->
            <div class="absolute inset-y-0 left-0 z-10 flex flex-col justify-center md:hidden">
                <div class="rounded-full cursor-pointer bg-white p-3 slider2-prev-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>




        </div>

        <!-- black layer -->
        <div class="bg-black w-10"></div>
    </div>

</section>