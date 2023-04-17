<?php
$title = "login";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>

<!-- max-width-holder -->
<section class="bg-gray-50 ">
    <!-- bg banner -->
    <div class="w-full bg-red-500 relative">
        <img class="object-cover object-center h-[400px] lg:h-[180px]" src="https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670" alt="">

    </div>

    <div class="mx-auto max-w-8xl relative py-10 px-16 lg:px-8 sm:px-3 flex flex-wrap justify-start flex-1 w-full lg:flex-col ">

        <!-- sidebar -->
        <div class="px-4 pb-6 w-[20%] pt-20 relative lg:flex lg:items-center lg:w-full">
            <!-- profile pic -->
            <div class="absolute right-0 top-[-93px] left-0 flex flex-col items-center space-y-2 ">
                <!-- photo -->
                <div class=" rounded-full w-32 h-32   bg-gray-100">
                    <img class="rounded-full object-cover w-full h-full object-center outline outline-4 outline-white" src="./assets/images/agent-photo.jpg" alt="">
                </div>
                <!-- name -->
                <div class="">
                    <div class="text-lg font-bold">James Foo</div>

                </div>
            </div>

            <ul class="mb-8 font-medium lg:w-full">
                <!-- item -->
                <li>
                    <a class="flex items-center pl-3 py-3 pr-4 text-white bg-guyub-green rounded" href="#">
                        <span class="inline-block mr-3">
                            <svg class="text-white w-5 h-5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" data-config-id="auto-svg-2-2">
                                <path
                                    d="M14.9066 3.12873C14.9005 3.12223 14.8987 3.11358 14.8923 3.10722C14.8859 3.10086 14.8771 3.09893 14.8706 3.09278C13.3119 1.53907 11.2008 0.666626 8.99996 0.666626C6.79914 0.666626 4.68807 1.53907 3.12935 3.09278C3.12279 3.09893 3.11404 3.10081 3.10763 3.10722C3.10122 3.11363 3.09944 3.12222 3.09334 3.12873C1.93189 4.29575 1.14217 5.78067 0.823851 7.39609C0.505534 9.01151 0.672885 10.685 1.30478 12.2054C1.93668 13.7258 3.00481 15.025 4.37435 15.9389C5.7439 16.8528 7.35348 17.3405 8.99996 17.3405C10.6464 17.3405 12.256 16.8528 13.6256 15.9389C14.9951 15.025 16.0632 13.7258 16.6951 12.2054C17.327 10.685 17.4944 9.01151 17.1761 7.39609C16.8578 5.78067 16.068 4.29575 14.9066 3.12873ZM8.99992 15.6666C8.00181 15.6663 7.01656 15.4414 6.11714 15.0087C5.21773 14.5759 4.42719 13.9464 3.80409 13.1666H7.15015C7.38188 13.4286 7.66662 13.6383 7.98551 13.782C8.3044 13.9257 8.65017 14 8.99992 14C9.34968 14 9.69544 13.9257 10.0143 13.782C10.3332 13.6383 10.618 13.4286 10.8497 13.1666H14.1958C13.5727 13.9464 12.7821 14.5759 11.8827 15.0087C10.9833 15.4414 9.99804 15.6663 8.99992 15.6666ZM8.16659 11.5C8.16659 11.3351 8.21546 11.174 8.30703 11.037C8.3986 10.8999 8.52875 10.7931 8.68102 10.7301C8.83329 10.667 9.00085 10.6505 9.1625 10.6826C9.32415 10.7148 9.47263 10.7942 9.58918 10.9107C9.70572 11.0272 9.78509 11.1757 9.81724 11.3374C9.8494 11.499 9.83289 11.6666 9.76982 11.8189C9.70675 11.9711 9.59994 12.1013 9.4629 12.1929C9.32586 12.2844 9.16474 12.3333 8.99992 12.3333C8.77898 12.3331 8.56714 12.2452 8.41091 12.089C8.25468 11.9327 8.16681 11.7209 8.16659 11.5ZM15.1751 11.5017L15.1665 11.5H11.4999C11.4983 10.9846 11.3373 10.4824 11.0389 10.0623C10.7405 9.64218 10.3193 9.32472 9.83325 9.15352V6.49996C9.83325 6.27894 9.74546 6.06698 9.58918 5.9107C9.4329 5.75442 9.22093 5.66663 8.99992 5.66663C8.77891 5.66663 8.56695 5.75442 8.41067 5.9107C8.25439 6.06698 8.16659 6.27894 8.16659 6.49996V9.15352C7.68054 9.32472 7.25939 9.64218 6.96098 10.0623C6.66256 10.4824 6.50151 10.9846 6.49992 11.5H2.83334L2.82474 11.5017C2.60799 10.9669 2.46221 10.406 2.39114 9.83329H3.16659C3.3876 9.83329 3.59956 9.74549 3.75584 9.58921C3.91212 9.43293 3.99992 9.22097 3.99992 8.99996C3.99992 8.77894 3.91212 8.56698 3.75584 8.4107C3.59956 8.25442 3.3876 8.16663 3.16659 8.16663H2.39114C2.54005 6.9821 3.00621 5.85981 3.74037 4.91838L4.28597 5.46399C4.36335 5.54137 4.4552 5.60274 4.5563 5.64462C4.65739 5.68649 4.76574 5.70804 4.87517 5.70804C4.98459 5.70804 5.09294 5.68649 5.19404 5.64461C5.29513 5.60274 5.38699 5.54136 5.46436 5.46399C5.54173 5.38661 5.60311 5.29476 5.64498 5.19366C5.68686 5.09257 5.70841 4.98422 5.70841 4.87479C5.70841 4.76537 5.68686 4.65702 5.64498 4.55592C5.60311 4.45483 5.54173 4.36297 5.46435 4.2856L4.91881 3.74005C5.86016 3.00613 6.98227 2.5401 8.16659 2.39118V3.16663C8.16659 3.38764 8.25439 3.5996 8.41067 3.75588C8.56695 3.91216 8.77891 3.99996 8.99992 3.99996C9.22093 3.99996 9.4329 3.91216 9.58918 3.75588C9.74546 3.5996 9.83325 3.38764 9.83325 3.16663V2.39118C11.0176 2.5401 12.1397 3.00613 13.081 3.74005L12.5355 4.2856C12.3792 4.44186 12.2914 4.6538 12.2914 4.87479C12.2914 5.09578 12.3792 5.30772 12.5355 5.46399C12.6917 5.62025 12.9037 5.70804 13.1247 5.70804C13.3457 5.70804 13.5576 5.62026 13.7139 5.46399L14.2595 4.91838C14.9936 5.85981 15.4598 6.9821 15.6087 8.16663H14.8333C14.6122 8.16663 14.4003 8.25442 14.244 8.4107C14.0877 8.56698 13.9999 8.77894 13.9999 8.99996C13.9999 9.22097 14.0877 9.43293 14.244 9.58921C14.4003 9.74549 14.6122 9.83329 14.8333 9.83329H15.6087C15.5376 10.406 15.3919 10.9669 15.1751 11.5017Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <span>Profile</span>
                       
                    </a>
                </li>
                <!-- item -->
                <li>
                    <a class="flex items-center pl-3 py-3 pr-2 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                        <span class="inline-block mr-3">
                            <svg class="text-gray-200 w-5 h-5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" data-config-id="auto-svg-4-2">
                                <path
                                    d="M9.00014 0.666626C4.41681 0.666626 0.666809 4.41663 0.666809 8.99996C0.666809 13.5833 4.41681 17.3333 9.00014 17.3333C13.5835 17.3333 17.3335 13.5833 17.3335 8.99996C17.3335 4.41663 13.5835 0.666626 9.00014 0.666626ZM2.58348 10.6666C2.41681 10.0833 2.33348 9.58329 2.33348 8.99996C2.33348 8.41663 2.41681 7.91663 2.58348 7.33329H4.16681C4.00014 8.41663 4.00014 9.58329 4.16681 10.6666H2.58348ZM3.25014 12.3333H4.41681C4.58348 13.0833 4.83348 13.8333 5.25014 14.5C4.41681 13.9166 3.75014 13.1666 3.25014 12.3333ZM4.41681 5.66663H3.25014C3.75014 4.83329 4.41681 4.08329 5.25014 3.49996C4.83348 4.16663 4.58348 4.91663 4.41681 5.66663ZM8.16681 15.4166C7.16681 14.6666 6.41681 13.5833 6.16681 12.3333H8.16681V15.4166ZM8.16681 10.6666H5.75014C5.66681 10.0833 5.66681 9.58329 5.66681 8.99996C5.66681 8.41663 5.66681 7.91663 5.75014 7.33329H8.16681V10.6666ZM8.16681 5.66663H6.16681C6.41681 4.41663 7.16681 3.33329 8.16681 2.58329V5.66663ZM14.7501 5.66663H13.5835C13.4168 4.91663 13.1668 4.16663 12.7501 3.49996C13.5835 4.08329 14.2501 4.83329 14.7501 5.66663ZM9.83348 2.58329C10.8335 3.33329 11.5835 4.41663 11.8335 5.66663H9.83348V2.58329ZM9.83348 15.4166V12.3333H11.8335C11.5835 13.5833 10.8335 14.6666 9.83348 15.4166ZM12.2501 10.6666H9.83348V7.33329H12.2501C12.3335 8.41663 12.3335 9.58329 12.2501 10.6666ZM12.8335 14.5C13.1668 13.8333 13.4168 13.0833 13.6668 12.3333H14.8335C14.2501 13.1666 13.5835 13.9166 12.8335 14.5ZM13.9168 10.6666C14.0835 9.58329 14.0835 8.41663 13.9168 7.33329H15.5001C15.8335 8.41663 15.8335 9.58329 15.5001 10.6666H13.9168Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <span data-config-id="link2">Account Settings</span>
                        <!-- <span class="flex justify-center items-center ml-auto bg-indigo-500 w-6 h-6 text-white text-xs rounded-full">4</span> -->
                    </a>
                </li>
                <!-- item -->
                <li>
                    <a class="flex items-center pl-3 py-3 pr-2 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                        <span class="inline-block mr-3">
                            <svg class="text-gray-200 w-5 h-5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" data-config-id="auto-svg-4-2">
                                <path
                                    d="M9.00014 0.666626C4.41681 0.666626 0.666809 4.41663 0.666809 8.99996C0.666809 13.5833 4.41681 17.3333 9.00014 17.3333C13.5835 17.3333 17.3335 13.5833 17.3335 8.99996C17.3335 4.41663 13.5835 0.666626 9.00014 0.666626ZM2.58348 10.6666C2.41681 10.0833 2.33348 9.58329 2.33348 8.99996C2.33348 8.41663 2.41681 7.91663 2.58348 7.33329H4.16681C4.00014 8.41663 4.00014 9.58329 4.16681 10.6666H2.58348ZM3.25014 12.3333H4.41681C4.58348 13.0833 4.83348 13.8333 5.25014 14.5C4.41681 13.9166 3.75014 13.1666 3.25014 12.3333ZM4.41681 5.66663H3.25014C3.75014 4.83329 4.41681 4.08329 5.25014 3.49996C4.83348 4.16663 4.58348 4.91663 4.41681 5.66663ZM8.16681 15.4166C7.16681 14.6666 6.41681 13.5833 6.16681 12.3333H8.16681V15.4166ZM8.16681 10.6666H5.75014C5.66681 10.0833 5.66681 9.58329 5.66681 8.99996C5.66681 8.41663 5.66681 7.91663 5.75014 7.33329H8.16681V10.6666ZM8.16681 5.66663H6.16681C6.41681 4.41663 7.16681 3.33329 8.16681 2.58329V5.66663ZM14.7501 5.66663H13.5835C13.4168 4.91663 13.1668 4.16663 12.7501 3.49996C13.5835 4.08329 14.2501 4.83329 14.7501 5.66663ZM9.83348 2.58329C10.8335 3.33329 11.5835 4.41663 11.8335 5.66663H9.83348V2.58329ZM9.83348 15.4166V12.3333H11.8335C11.5835 13.5833 10.8335 14.6666 9.83348 15.4166ZM12.2501 10.6666H9.83348V7.33329H12.2501C12.3335 8.41663 12.3335 9.58329 12.2501 10.6666ZM12.8335 14.5C13.1668 13.8333 13.4168 13.0833 13.6668 12.3333H14.8335C14.2501 13.1666 13.5835 13.9166 12.8335 14.5ZM13.9168 10.6666C14.0835 9.58329 14.0835 8.41663 13.9168 7.33329H15.5001C15.8335 8.41663 15.8335 9.58329 15.5001 10.6666H13.9168Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <span data-config-id="link2">Saved</span>
                        <!-- <span class="flex justify-center items-center ml-auto bg-indigo-500 w-6 h-6 text-white text-xs rounded-full">4</span> -->
                    </a>
                </li>
            </ul>
        </div>

        <!-- content -->
        <div class="pb-24 pl-12 w-[80%] pt-20 lg:pt-0 lg:px-4 lg:w-full">
            <!-- stay informed  -->
            <section class="space-y-12 ">
                <div class="space-y-6">

                    <div class="space-y-8" x-cloak x-data="{active: 0}">

                        <!-- tab -->
                        <!-- <div x-cloak class="flex w-full items-center space-x-3  xs:items-start mdd:space-x-0">
                            <button class="tab-small-2 xs:w-full" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>Home Improvement</button>
                            <button class="tab-small-2 xs:w-full" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Hobbies & Leisure</button>
                            <button class="tab-small-2 xs:w-full" x-on:click.prevent="active = 2" x-bind:class="{'text-white bg-guyub-green': active === 2}" x-cloak>Travel & Culture</button>
                        </div> -->

                        <!-- article-item-holder -->
                        <div class="font-semibold">Member since 13th Sep 2021</div>
                        <div class=" w-full bg-white px-9 py-7 space-y-7 border border-gray-300 rounded-lg mb-7 ">


                            <!-- form -->
                            <div>

                                <form class="space-y-4" action="#" method="POST" id="form">
                                    <!-- name -->
                                    <div>
                                        <label for="name" class="block mb-2 font-normal ">Username</label>
                                        <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-500 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " />
                                    </div>

                                    <!-- name -->
                                    <div>
                                        <label for="name" class="block mb-2 font-normal ">First Name</label>
                                        <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-500 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " />
                                    </div>

                                    <!-- name -->
                                    <div>
                                        <label for="name" class="block mb-2 font-normal ">Last Name</label>
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
                                    <!-- <div class="">
                                        <label for="message" class="block mb-2 font-normal">Your Message</label>
                                        <textarea rows="5" name="message" id="message" placeholder="" class="text-guyub-black w-full px-3 py-2 placeholder-guyub-black border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " required>Hey, James Wong! I would like to check on the availability for xxxx. Hope to hear back from you soonest, thank you!</textarea>
                                    </div> -->

                                    <!-- <div class="flex space-x-1 ">
                                        <input type="checkbox" class="rounded-[0.25rem] m-1">
                                        <div class="text-sm">Yes, keep me posted on new launches, property digest and partner offers</div>
                                    </div> -->

                                    <!-- button -->
                                    <div class="">
                                        <button type="submit" class="font-medium w-full px-3 py-4 text-white bg-guyub-green rounded-lg">Update Account</button>
                                    </div>

                                </form>

                            </div>


                        </div>


                        <!-- article-item-holder -->
                        <div class="grid grid-cols-3 gap-6 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6" x-show="active === 1" x-cloak>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                        </div>

                        <!-- article-item-holder -->
                        <div class="grid grid-cols-3 gap-6 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6" x-show="active === 2" x-cloak>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                            <!--article item -->
                            <?php include './inc/article-listing.php'; ?>
                        </div>



                    </div>

                </div>

            </section>

        </div>

    </div>
</section>