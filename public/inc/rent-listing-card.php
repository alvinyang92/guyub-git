<!-- rent listing card +line -->
<div class="space-y-5 ">

    <!-- listing holder -->
    <div class="grid grid-cols-1-2 gap-x-8 lgg:grid-cols-1 lgg:gap-y-4 ">

        <!-- slider photo -->
        <div class="relative overflow-hidden">

            <!-- photo -->
            <div class="owl-6 owl-carousel owl-theme relative">

                <!-- item -->
                <div class="relative">
                    <!-- badge -->
                    <div class="absolute left-3 top-4">
                        <div class=" bg-white p-2 rounded-md text-center font-medium z-10 leading-none">New Launch</div>
                    </div>

                    <img src="./assets/images/detail-gallery-01.jpg" class="w-full h-[300px] xs:h-[200px] object-center object-cover rounded-lg " />
                </div>

                <!-- item -->
                <div class="relative">
                    <!-- badge -->
                    <div class="absolute left-3 top-4">
                        <div class=" bg-white p-2 rounded-md text-center font-medium z-10 leading-none">New Launch</div>
                    </div>

                    <img src="./assets/images/detail-gallery-01.jpg" class="w-full h-[300px] xs:h-[200px] object-center object-cover rounded-lg " />
                </div>



            </div>

            <!-- right arrow -->
            <div class="absolute inset-y-0 -right-10 z-10 flex flex-col justify-center">
                <div class="rounded-full cursor-pointer bg-white/20 p-2 pr-7 slider6-next-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-guyub-black/20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <!-- left arrow -->
            <div class="absolute inset-y-0 -left-10 z-10 flex flex-col justify-center ">
                <div class="rounded-full cursor-pointer bg-white/20 p-2 pl-7 slider6-prev-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-guyub-black/20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

        </div>

        <!-- content -->
        <div class=" flex flex-col justify-between  ">

            <div class="flex justify-between">
                <!-- master content-col -->
                <div class="flex flex-col justify-between">
                    <!-- property info -->
                    <div class="space-y-1 lgg:space-y-1">
                        <!-- price -->
                        <div class="flex text-xl lgg:text-lg font-bold space-x-1">
                            <div class="">RM 2,500</div>
                            <div class="">/month</div>
                        </div>
                        <div class="space-y-2">
                            <!-- name + address -->
                            <div class="space-y-2 lgg:space-y-1">
                                <!-- name -->
                                <div class="text-lg font-medium ">Setia City Residences</div>
                                <!-- address -->
                                <div class="text-base font-medium">Jalan Setia Dagang AH U13/AH, 40170, Selangor</div>
                            </div>
                            <!-- bed/bath + sqft + price per sqft -->
                            <div class="flex items-center space-x-3">
                                <!-- bed.bath -->
                                <div class="flex space-x-3">
                                    <!-- bed -->
                                    <div class="flex space-x-1">
                                        <!-- number of room -->
                                        <div class="text-base font-medium">3</div>
                                        <!-- bed icon -->
                                        <img class="" src="./assets/images/bedroom.svg" alt="">
                                    </div>
                                    <!-- bath -->
                                    <div class="flex space-x-1">
                                        <!-- number of bath -->
                                        <div class="text-base font-medium">2</div>
                                        <!-- bath icon -->
                                        <img src="./assets/images/bathroom.svg" alt="">
                                    </div>
                                </div>
                                <!-- DOT -->
                                <img class="w-1 h-1" src="./assets/images/dot.svg" alt="">
                                <!-- sqft -->
                                <div class="text-base font-medium">986 sqft</div>
                                <!-- DOT -->
                                <img class="w-1 h-1" src="./assets/images/dot.svg" alt="">
                                <!-- price per sqft -->
                                <div class="text-base font-medium">RM 2.54 psf</div>
                            </div>
                            <!-- tag -->
                            <div class="space-y-2 ">
                                <!-- item -->
                                <div class=" inline-block p-2 rounded-md bg-gray-100 text-sm font-medium mr-2 ">Condominium</div>
                                <!-- item -->
                                <div class=" inline-block p-2 rounded-md bg-gray-100 text-sm font-medium mr-2 ">Completion 2020</div>
                                <!-- item -->
                                <div class=" inline-block p-2 rounded-md bg-gray-100 text-sm font-medium mr-2 ">Partially Furnished</div>
                                <div class=" inline-block p-2 rounded-md bg-gray-100 text-sm font-medium mr-2 ">Partially Furnished</div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- favourite -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>
            </div>

            <!-- border mobile -->
            <div class="border-b border-gray-200 hidden lgg:block"></div>

            <!-- agent/company contact -->
            <div class="flex justify-between items-center lgg:flex-col lgg:items-start lgg:space-y-4 ">
                <!-- agent company name -->
                <div class="flex space-x-4 justify-between items-center">
                    <!-- photo -->
                    <div class=" w-16 h-16 lgg:w-12 lgg:h-12  bg-gray-100">
                        <img class="rounded-full object-cover w-full h-full object-center" src="./assets/images/agent-photo.jpg" alt="">
                    </div>

                    <!-- name + company -->
                    <div class="">
                        <div class="text-base font-bold">James Wong</div>
                        <div class="text-base text-gray-600">Reapfield Property</div>
                    </div>

                </div>

                <!-- call whatsapp icon -->
                <div class="flex space-x-2 lgg:justify-between lgg:w-full lg:space-x-3">
                    <!-- phone -->
                    <a class="flex space-x-1 bg-gray-100 rounded-md px-5 py-2 lgg:w-full lgg:px-4 lgg:justify-center">
                        <img class="lgg:w-4" src="./assets/images/phone.svg" alt="">
                        <div class="font-medium">Call</div>
                    </a>
                    <!-- whatsapp -->
                    <a class="flex space-x-1 bg-gray-100 rounded-md px-3 py-2 lgg:w-full lgg:px-4 lgg:justify-center">
                        <img class="lgg:w-5" src="./assets/images/whatsapp.svg" alt="">
                        <div class="font-medium">Whatsapp</div>
                    </a>

                </div>
            </div>





        </div>

    </div>

    <div class="w-full border-b"></div>
</div>