<?php
$title = "register";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>

<!-- max-width-holder -->
<section class="bg-gray-100 h-screen">
    <div class="space-y-10 py-12 lg:py-4 px-10 lg:px-8 sm:px-3 mx-auto max-w-xl">
        <!-- logo -->
        <div class="flex items-center justify-center lg:hidden ">
            <img class="w-40" src="./assets/images/guyub-green-logo.svg" alt="">
        </div>

        <!-- forms -->
        <div class="px-6 py-10 bg-white space-y-6 ">
            <!-- title -->
            <h1 class="text-lg font-bold text-center">Sign up</h1>

            <!-- fields -->
            <div class="space-y-6">
                <input type="text" placeholder="Email" class="w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium " />

                <input type="text" placeholder="Password" class="w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 font-medium " />

                <div class="text-sm">Your password must contain at least 8 characters, an upper and lower case letter and a number.</div>

                <a class="btn-small w-full bg-guyub-green font-medium text-white">Sign up</a>

                <div class="font-medium text-center">
                    <a class="text-gray-500">Already have an account? <span class="text-guyub-green font-semibold">Log in</span></a>
                </div>


            </div>

            <!-- social -->
            <div class="space-y-5">

                <div class="flex justify-between items-center">
                    <div class="border w-full"></div>
                    <div class="px-3 bg-white">or</div>
                    <div class="border w-full"></div>
                </div>

                <a class="btn-small w-full border border-gray-300 flex justify-between items-center  ">
                    <img class="w-8" src="./assets/images/fb-color.svg" alt="">
                    <div class="w-full">Continue with Facebook</div>
                </a>

                <a class="btn-small w-full border border-gray-300 flex justify-between items-center  ">
                    <img class="w-8" src="./assets/images/google-color.svg" alt="">
                    <div class="w-full">Continue with Google</div>
                </a>



            </div>






        </div>
    </div>
</section>





<!-- <?php include './inc/footer.php'; ?> -->