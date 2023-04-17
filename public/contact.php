<?php
$title = "Contact ";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>
<section>
    <div class="mx-auto max-w-8xl space-y-16 py-12 xl:py-0 px-20 xl:px-0 sm:px-0">
        <div class="grid grid-cols-2 xl:grid-cols-1 w-full">
            <!-- photo -->
            <img class="object-cover w-full h-auto xl:h-[30rem] sm:h-[15rem]" src="./assets/images/contact.jpg" alt="">

            <!-- content -->
            <div class="space-y-8 pt-14 px-20 xl:pt-10 xl:pb-6 xl:px-8 sm:px-3 flex flex-col justify-center">

                <!-- title -->
                <h3>Want to chat further?<br> We’d love to hear from you.</h3>

                <div class="space-y-8">
                    <!-- address -->
                    <div class="space-y-2">
                        <!-- info -->
                        <h5>Contact Us</h5>
                        <div class="">Unit 3.07, Level 3, KL Gateway Mall Gateway Mall, No 2, Jalan Kerinchi, Pantai Dalam, 59200 Kuala Lumpur</div>
                    </div>

                    <!-- phone -->
                    <div class="flex space-x-2">
                        <!-- icon -->
                        <img class="w-4" src="./assets/images/phone.svg" alt="">
                        <!-- nunber -->
                        <a class="">03-456 7899</abstract>
                    </div>

                    <!-- mail -->
                    <div class="flex space-x-2">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <!-- nunber -->
                        <a class="">hello@guyub.com</a>
                    </div>
                </div>

                <div class="h-px bg-gray-200"></div>

                <div class="space-y-8">

                    <!-- social -->
                    <div class="space-y-2">
                        <!-- info -->
                        <h5>Social Media</h5>
                        <!-- social holder -->
                        <div class="flex space-x-2">
                            <!-- facebook -->
                            <a href="">
                                <img class="w-8" src="./assets/images/fb-black.svg" alt="">
                            </a>
                            <!-- instagram -->
                            <a href="">
                                <img class="w-8" src="./assets/images/insta-black.svg" alt="">
                            </a>
                            <!-- youtube -->
                            <a href="">
                                <img class="w-8" src="./assets/images/youtube-black.svg" alt="">
                            </a>
                            <!-- linkedin -->
                            <a href="">
                                <img class="w-8" src="./assets/images/linkedin-black.svg" alt="">
                            </a>
                            <!-- fb msg -->
                            <a href="">
                                <img class="w-8" src="./assets/images/fb-msg-black.svg" alt="">
                            </a>
                        </div>

                    </div>

                </div>








            </div>


        </div>
    </div>

</section>

<section>
    <div class="mx-auto max-w-8xl space-y-16 py-12 px-20 xl:px-8 lg:px-10 sm:px-3 ">

        <div class="space-y-8">
            <!-- title -->
            <h4>Get in touch with Guyub </h4>

            <div class="space-y-6">
                <!-- dropdown -->
                <div class="space-y-2">
                    <label>Topic <span class="text-red-600 font-bold">*</span> </label>
                    <select class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium">
                        <option value="">Customer Enquiry / Feedback / Complaint</option>
                        <option value="Sample 1">Sample 1</option>
                        <option value="Sample 2">Sample 2</option>
                        <option value="Sample 3">Sample 3</option>
                    </select>
                </div>
                <!-- name -->
                <div class="space-y-2">
                    <label>Name<span class="text-red-600 font-bold">*</span></label>
                    <input type="text" value="" name="NAME" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium">
                </div>
                <!-- phone -->
                <div class="space-y-2">
                    <label>Contact Number <span class="text-red-600 font-bold">*</span></label>
                    <input type="tel" name="PHONE" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium">
                </div>
                <!-- email -->
                <div class="space-y-2">
                    <label>Email Address <span class="text-red-600 font-bold">*</span></label>
                    <input type="email" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium">
                </div>
                <!--message  -->
                <div class="space-y-2">
                    <label>Message <span class="text-red-600 font-bold">*</span></label>
                    <!-- <textarea type="text" value="" name="MESSAGE" class="required w-full " id="mce-MESSAGE"><textarea> -->
                    <textarea type="text" name="MESSAGE" id="MESSAGE" class="w-full h-28 px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium"></textarea>
                </div>
                <!--button  -->
                <a class="btn-small w-full bg-guyub-green font-medium text-white">Sign up</a>
            </div>
        </div>

    </div>

</section>




<?php include './inc/footer.php'; ?>