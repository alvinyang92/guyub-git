<!-- agent-contact -->
<div class=" w-full bg-white px-9 py-7 space-y-7 border border-gray-300 rounded-lg ">

    <!-- contact -->
    <div class=" space-y-3">

        <!-- photo + details -->
        <div class="space-y-2 flex flex-col items-center justify-center">

            <!-- photo -->
            <div class=" w-32">
                <img class="" src="./assets/images/developer-logo.jpg" alt="">
            </div>

            <!-- details -->
            <div class="">
                <!-- title -->
                <div class="text-base font-semibold ">Setia Alamsari Sdn Bhd</div>

            </div>

        </div>

        <!-- phone no + whatsapp -->
        <div class="space-x-2 flex justify-center ">

            <!-- phone -->
            <a class="w-full btn bg-gray-100 flex space-x-2 items-center">
                <!-- phone icon -->
                <img class="w-5 h-5" src="./assets/images/phone.svg" alt="">
                <!-- number -->
                <div class="flex items-center">
                    <div class="">016435...</div>
                    <div class="underline">Show</div>
                </div>
                <!-- whatsapp -->
                <div class=""></div>
            </a>

            <!-- whatsapp -->
            <a class="w-full btn bg-gray-100 flex space-x-2 items-center">
                <!-- phone icon -->
                <img class="w-5 h-5" src="./assets/images/whatsapp.svg" alt="">
                <!-- number -->
                <div class="flex items-center">
                    <div class="">Whatsapp</div>
                </div>
                <!-- whatsapp -->
                <div class=""></div>
            </a>

        </div>

    </div>

    <!-- form -->
    <div>
        <form class="space-y-4" action="#" method="POST" id="form">

            <!-- <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
            <input type="hidden" name="subject" value="New Submission from Web3Forms">
            <input type="checkbox" name="botcheck" id="" style="display: none;"> -->

            <!-- name -->
            <div>
                <label for="name" class="block mb-2 font-normal ">Full Name</label>
                <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-500 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " />
            </div>

            <!-- phone -->
            <div class="">
                <label for="phone" class="font-normal">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="+60 16-456 7890" required class="w-full px-3 py-2 placeholder-gray-500 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>

            <!-- email -->
            <div class="">
                <label for="email" class="block mb-2 font-normal">Email Address</label>
                <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-gray-500 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700" />
            </div>

            <!-- message -->
            <div class="">
                <label for="message" class="block mb-2 font-normal">Your Message</label>
                <textarea rows="5" name="message" id="message" placeholder="" class="text-guyub-black w-full px-3 py-2 placeholder-guyub-black border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " required>Hey, James Wong! I would like to check on the availability for xxxx. Hope to hear back from you soonest, thank you!
            </textarea>
            </div>

            <div class="flex space-x-1 ">
                <input type="checkbox" class="rounded-[0.25rem] m-1">
                <div class="text-sm">Yes, keep me posted on new launches, property digest and partner offers</div>
            </div>

            <!-- button -->
            <div class="">
                <button type="submit" class="font-medium w-full px-3 py-4 text-white bg-guyub-green rounded-lg">I'm interested</button>
            </div>

        </form>

    </div>


</div>