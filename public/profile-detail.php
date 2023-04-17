<?php
$title = "Guyub - profile-detail";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>


<!-- max-width-holder -->
<section class="mx-auto max-w-8xl relative block py-14 space-y-10 px-10 lg:px-8 sm:px-3 ">

    <!-- profile-top -->
    <div class="flex justify-between items-center md:items-start md:flex-col md:space-y-8 ">
        <!-- left -->
        <div class="space-y-2">
            <!-- title -->
            <div class="font-bold text-xl">johnwong@gmail.com</div>
            <div class="text-lg font-medium">Member since 1/9/2021</div>
        </div>

    </div>

    <div class="space-y-5">
        <!-- tab -->
        <div class="space-y-9" x-cloak x-data="{active: 0}">

            <!-- tab - profile - saved -->
            <div x-cloak class="flex w-full items-center space-x-3 ">
                <button class="tab-small-2" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>Profile</button>
                <button class="tab-small-2" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Saved</button>
            </div>

            <!-- inner tab -->

            <div class="" x-show="active === 1">
                <!-- title -->
                <div class="space-y-1">
                    <div class="text-xl font-bold">Saved properties</div>
                </div>

                <div class="space-y-10" x-data="{active: 2}">
                    <!-- tab -->
                    <div class="flex justify-between">
                        <!-- Furnishing -->
                        <button class="tab-detail w-full pb-3 border-b-2  " x-on:click.prevent="active = 2" x-bind:class="{'border-guyub-green border-b-2': active === 2}" x-cloak>
                            Property
                        </button>
                        <!-- Utilities -->
                        <button class="tab-detail w-full pb-3 border-b-2 " x-on:click.prevent="active = 3" x-bind:class="{'border-guyub-green border-b-2': active === 3}" x-cloak>
                            Interior inspiration
                        </button>
                    </div>

                    <!-- item -->
                    <div class="space-y-8" x-show="active === 2" x-cloak>
                        <!-- article-item-holder -->
                        <div class="grid grid-cols-3 gap-14 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                        </div>
                        <!-- pagination -->
                        <div class="">
                            <!-- rent listing card -->
                            <?php include './inc/pagination.php'; ?>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="space-y-8" x-show="active === 3" x-cloak>
                        <!-- article-item-holder -->
                        <div class="grid grid-cols-3 gap-14 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">
                            testing
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                            <?php include './inc/rent-suggested.php'; ?>
                        </div>
                        <!-- pagination -->
                        <div class="">
                            <!-- rent listing card -->
                            <?php include './inc/pagination.php'; ?>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>



</section>

<?php include './inc/footer.php'; ?>