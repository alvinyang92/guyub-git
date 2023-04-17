<section class="w-full h-full bg-black absolute left-0 top-0 z-[999] ">
    <div class="mx-auto max-w-8xl relative h-full py-5 px-5 flex flex-col justify-center">
        <div class="absolute top-5 right-0 lg:right-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>˝
        </div>

        <div class=" bg-white px-9 pt-9 lg:px-5 lg:pt-6  space-y-9 border border-gray-300 rounded-lg w-1/2 lg:w-full mx-auto">
            <!-- form -->
            <div>
                <form class="space-y-6" action="#" method="POST" id="form">
                    <h4 class="section-title">Form Title</h4>

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
                        <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700" />
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
</section>