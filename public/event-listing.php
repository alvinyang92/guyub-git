<?php
$title = "Guyub - event-listing";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>


<!-- max-width-holder -->
<section class="mx-auto max-w-8xl relative block pb-12 pt-28 space-y-10 px-10 lg:px-8 sm:px-3 ">
    <!-- title -->
    <div class="space-y-1">
        <div class="text-xl font-bold">Check out upcoming property events in Malaysia</div>
        <div class="font-semibold">Don't miss out on these 100 property events</div>
        <!-- <div class="font-medium">Explore 5,127 listings on Guyub</div> -->
    </div>

    <!-- article-item-holder -->
    <div class="grid grid-cols-3 gap-8 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">

        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>
        <?php include './inc/event-listing-card.php'; ?>




    </div>

    <!-- pagination -->
    <div class="">
        <!-- rent listing card -->
        <?php include './inc/pagination.php'; ?>
    </div>

</section>

<?php include './inc/footer.php'; ?>