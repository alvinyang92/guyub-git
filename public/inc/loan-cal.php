<div class="grid grid-cols-1-3 xl:grid-cols-1">
    <!-- fields -->
    <div class="border border-gray-300 rounded-l-lg xl:rounded-l-none xl:rounded-t-lg p-8 sm:px-3">
        <div class="space-y-8 sm:space-y-6">

            <!-- Property Price -->
            <div class="space-y-3">
                <div class="font-semibold">Property Price (RM)</div>

                <input type="text" name="" id="myField" value="800,000" id="myField" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium " />
            </div>

            <!--Down Payment -->
            <div class="space-y-3 w-full">

                <div class="font-semibold">Down Payment (%)</div>

                <div class="flex justify-between w-full  " x-cloak x-data="{active: 0}">
                    <!-- fields -->
                    <div class="flex flex-grow-[2] mr-2 " x-show="active === 0" x-cloak>
                        <input type="text" name="" id="myField" value="100,000" id="myField" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium" />
                    </div>
                    <!-- fields -->
                    <div class="flex flex-grow-[2] mr-2" x-show="active === 1" x-cloak>
                        <input type="text" name="" id="myField" value="30%" id="myField" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium" />
                    </div>

                    <!-- toggle -->
                    <div class="flex space-x-2">

                        <button class="tab-cal " x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>RM</button>

                        <button class="tab-cal " x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>%</button>



                    </div>
                </div>


            </div>

            <!--Interest Rate (%) -->
            <div class="space-y-3">
                <div class="font-semibold">Interest Rate (%)</div>

                <input type="text" name="" id="myField" value="3.6" id="myField" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium " />
            </div>

            <!--Loan Terms (Years) -->
            <div class="space-y-3">
                <div class="font-semibold">Loan Terms (Years)</div>

                <input type="text" name="" id="myField" value="35" id="myField" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium " />
            </div>

        </div>

    </div>

    <!-- result -->
    <div class="border-b border-r border-t xl:border-t-0 xl:border-l border-gray-300 xl:rounded-b-lg rounded-r-lg xl:rounded-r-none  py-16 sm:py-8 px-6 sm:px-3 space-y-10 flex flex-col items-center justify-center">

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-1 w-full">
            <!-- month -->
            <div class="bg-gray-50 rounded-lg border border-gray-300 w-full flex flex-col items-center justify-center p-10 sm:py-3">
                <!-- price -->
                <div class="text-lg font-bold">RM <span>5,847</span></div>
                <div class="text-gray-500 font-normal">/month</div>
            </div>
            <!-- Loan Amount  -->
            <div class="bg-gray-50 rounded-lg border border-gray-300 flex flex-col items-center justify-center p-10 sm:py-3 w-full">
                <!-- price -->
                <div class="text-lg font-bold">RM <span>1,395,000</span></div>
                <div class="text-gray-500 font-normal">Loan Amount</div>
            </div>
        </div>

        <div class="flex space-x-10 sm:space-x-0 w-full justify-between sm:flex-col sm:space-y-3">
            <!-- month -->
            <div class="">*Assumption of 3.6% interest rate</div>
            <!-- Loan Amount  -->
            <a class="flex space-x-1 items-center">
                <div class="text-base font-medium text-guyub-black underline">My loan eligibility </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>


    </div>
</div>