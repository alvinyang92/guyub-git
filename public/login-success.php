<?php
$title = "login success";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
?>

<!-- max-width-holder -->
<section class="bg-gray-100 h-screen">
    <div class="space-y-10 py-12 px-10 lg:py-4 lg:px-4 sm:px-3 mx-auto max-w-xl">
        <!-- logo -->
        <div class="flex items-center justify-center ">
            <img class="w-40" src="./assets/images/guyub-green-logo.svg" alt="">
        </div>

        <!-- forms -->
        <div class="px-6 py-10 bg-white space-y-8 ">
            <!-- image -->
           <div class="flex justify-center"><img class="w-56" src="./assets/images/aads.png" alt=""></div>

           <div class="space-y-5">
               <!-- title -->
               <h1 class="text-lg font-bold text-center">You have successfully registered as a Guyuber.</h1>
               <p class="text-center">Guyub wishes you a bounteous journey to finding your ideal property -- your expedition begins here.</p>
               <a class="btn-small w-full bg-guyub-green font-medium text-white">Start Broswing </a>
           </div>


        </div>
    </div>
</section>





