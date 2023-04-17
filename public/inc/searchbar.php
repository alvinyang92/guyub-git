   <!-- search bar -->
   <div class=" flex  " x-cloak @click.away="open = false" x-data="{ open: false}">

       <div class="relative w-full">
           <input @click="open = !open" class="w-full px-4 py-2 font-medium border rounded-l-lg " placeholder="Search by Location Keyword, Property Name or Developer Name">

           <!-- dropdown menu -->
           <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute w-full shadow-lg z-30 bg-white min-h-[50px] max-h-[250px] overflow-scroll ">

               <!--max width container-->
               <div class=" bg-white nav-shadow ">
                   <!-- District -->
                   <!-- General search -->
                   <!-- Projects -->
                   <!-- Neighbourhood -->

                   <div class="flex flex-col justify-start w-full space-y-3">
                       <!-- District - group suggest -->
                       <div class="">
                           <!-- title-->
                           <div class="px-4 py-2  cursor-pointer relative w-full uppercase text-[11px] tracking-[0.3em]">
                               District
                           </div>
                           <!-- item-->
                           <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                               <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                   </svg>
                                   <div class="space-y-1">
                                       <div class="font-semibold leading-none">Bandar Sunway</div>
                                       <div class="text-[13px] leading-none">Selangor</div>
                                   </div>
                               </div>
                           </div>
                           <!-- item-->
                           <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                               <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                   </svg>
                                   <div class="space-y-1">
                                       <div class="font-semibold leading-none">Bandar Sunway</div>
                                       <div class="text-[13px] leading-none">Selangor</div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- General search - group suggest -->
                       <div class="">
                           <!-- title-->
                           <div class="px-4 py-2  cursor-pointer relative w-full uppercase text-[11px] tracking-[0.3em]">
                               General search
                           </div>
                           <!-- item-->
                           <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                               <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                   </svg>
                                   <div class="">
                                       All in "Sunway"
                                   </div>
                               </div>
                           </div>

                       </div>

                       <!-- Projects - group suggest -->
                       <div class="">
                           <!-- title-->
                           <div class="px-4 py-2  cursor-pointer relative w-full uppercase text-[11px] tracking-[0.3em]">
                               Projects
                           </div>
                           <!-- item-->
                           <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                               <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                   </svg>
                                   <div class="space-y-1">
                                       <div class="font-semibold leading-none">Bandar Sunway</div>
                                       <div class="text-[13px] leading-none">Selangor</div>
                                   </div>
                               </div>
                           </div>
                           <!-- item-->
                           <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                               <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                   </svg>
                                   <div class="space-y-1">
                                       <div class="font-semibold leading-none">Bandar Sunway</div>
                                       <div class="text-[13px] leading-none">Selangor</div>
                                   </div>
                               </div>
                           </div>

                       </div>

                       <!-- Projects - group suggest -->
                       <div class="">
                           <!-- title-->
                           <div class="px-4 py-2  cursor-pointer relative w-full uppercase text-[11px] tracking-[0.3em]">
                               Projects
                           </div>
                           <!-- item-->
                           <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                               <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                   </svg>
                                   <div class="space-y-1">
                                       <div class="font-semibold leading-none">Bandar Sunway</div>
                                       <div class="text-[13px] leading-none">Selangor</div>
                                   </div>
                               </div>
                           </div>
                           <!-- item-->
                           <div class="px-4 py-3 cursor-pointer relative w-full hover:bg-gray-100 transition duration-200 ease-in">
                               <div class="flex items-center space-x-2 ml-[-0.40rem]">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                   </svg>
                                   <div class="space-y-1">
                                       <div class="font-semibold leading-none">Bandar Sunway</div>
                                       <div class="text-[13px] leading-none">Selangor</div>
                                   </div>
                               </div>
                           </div>

                       </div>



                   </div>
               </div>

           </div>
       </div>


       <button class="bg-guyub-green  text-white py-2 w-32 rounded-r-lg">
           <p class="font-medium text-base">Search</p>
       </button>

   </div>