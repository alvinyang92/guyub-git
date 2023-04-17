 <!-- item-->
 <div class="space-y-4" x-cloak @click.away=" open=false" x-data="{ open: false }">
     <!-- button -->
     <a @click="open = !open" class="">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
         </svg>
     </a>

     <!-- dropdown menu -->
     <div x-cloak x-show="open" x-transition:enter="transition opacity-0 ease-out duration-300" x-transition:enter-end="transform origin-bottom opacity-100" class="absolute w-2/5 z-30 -ml-1 ">
         <!--max width container-->
         <div class="bg-guyub-black rounded-sm nav-shadow px-4 py-8 space-y-2">
             <div class="font-bold text-white text-sm">What is 'Monthly Gross Salary' ?</div>
             <div class="text-white text-sm">This is employment income before EPF, SOCSO and PCB deduction.This is employment income before EPF, SOCSO and PCB deduction</div>


         </div>
         <!-- close -->
         <a @click="open = !open" class="absolute right-1 top-1">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
             </svg>
         </a>
         <!-- arrow -->
         <div class="absolute left-0 top-[-7px]">
             <svg class=" z-10 w-14 h-14 text-orange-500 fill-current stroke-current" width="10" height="10">
                 <rect x="12" y="-10" width="10" height="10" transform="rotate(45)" />
             </svg>
         </div>






     </div>
 </div>