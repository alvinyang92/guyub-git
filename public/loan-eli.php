<?php
$title = "Guyub - loan-eli";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>

<!-- max-width-holder -->
<section class="mx-auto max-w-8xl relative block py-5 px-10 lg:px-8 sm:px-3 ">
    <!-- 2cols holder -->
    <div class="relative flex justify-between xl:flex-col space-x-8 xl:space-x-0 xl:space-y-10 lgg:space-x-0 py-9 ">

        <!-- listing card holder -->
        <div class="space-y-10 w-full ">

            <!-- ** rent/new title holder -->
            <div class="flex justify-between md:flex-col md:space-y-4">

                <div class="text-lg font-bold">
                    Calculate your affordability
                </div>
            </div>

            <!-- card listing -->
            <div class="space-y-14">
                <!-- dropdown group -->
                <div class="space-y-6">

                    <!-- title-tooltip -->
                    <div class="space-x-1 flex relative ">
                        <div class="font-semibold">What is your employment basis?</div>

                        <?php include './inc/tooltip.php'; ?>

                    </div>

                    <!-- fields/dropdown -->
                    <div class="space-y-6">
                        <!-- listing -->
                        <div class="grid grid-cols-2 gap-4 ">
                            <!-- item -->
                            <?php include './inc/loan-dropdown.php'; ?>
                            <?php include './inc/loan-dropdown.php'; ?>

                        </div>

                        <?php include './inc/loan-dropdown.php'; ?>
                    </div>

                </div>

                <!-- dropdown group -->
                <div class="space-y-6">
                    <!-- title-tooltip -->
                    <div class="space-x-1 flex relative ">
                        <div class="font-semibold">What is your employment basis?</div>

                        <?php include './inc/tooltip.php'; ?>

                    </div>

                    <div class="space-y-6">
                        <!-- listing -->
                        <div class="grid grid-cols-2 gap-4 ">
                            <!-- item -->
                            <?php include './inc/loan-fields.php'; ?>
                            <?php include './inc/loan-fields.php'; ?>


                        </div>

                        <?php include './inc/loan-fields.php'; ?>
                    </div>

                </div>

                <!-- dropdown group -->
                <div class="space-y-6">
                    <!-- title-tooltip -->
                    <div class="space-x-1 flex relative ">
                        <div class="font-semibold">What is your employment basis?</div>

                        <?php include './inc/tooltip.php'; ?>

                    </div>

                    <div class="space-y-6">
                        <!-- listing -->
                        <div class="grid grid-cols-2 gap-4 ">
                            <!-- item -->
                            <?php include './inc/loan-fields.php'; ?>
                            <?php include './inc/loan-fields.php'; ?>


                        </div>
                        <div class="grid grid-cols-2 gap-4 ">
                            <!-- item -->
                            <?php include './inc/loan-fields.php'; ?>
                            <?php include './inc/loan-fields.php'; ?>


                        </div>

                        <?php include './inc/loan-fields.php'; ?>
                    </div>

                    <div class="font-semibold">What are your monthly commitments?</div>

                    <?php include './inc/loan-fields.php'; ?>

                </div>


            </div>
        </div>


        <!-- ads -->
        <section class="h-full sticky top-3  xl:top-0 xl:relative xl:h-auto ">

            <?php include './inc/loan-result.php'; ?>

        </section>

    </div>
</section>

<?php include './inc/footer.php'; ?>