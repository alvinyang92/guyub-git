<?php
$title = "Guyub - agent-listing";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>

<div class="border-b mt-20">
    <div class="mx-auto max-w-8xl px-10 lg:px-8 sm:px-3 ">
        <?php include './inc/searchbar-agent.php'; ?>
    </div>
</div>

<!-- max-width-holder -->
<section class="mx-auto max-w-8xl relative block py-10 space-y-14 px-10 lg:px-8 sm:px-3 ">
    <!-- title -->
    <div class="space-y-1">
        <div class="text-xl font-bold"> Browse agents in Malaysia </div>
        <div class="font-semibold">Scout through 100 agents on Guyub</div>
        <!-- <div class="font-medium">Explore 5,127 listings on Guyub</div> -->
    </div>

    <!-- article-item-holder -->
    <div class="grid grid-cols-3 gap-14 xl:grid-cols-2 md:gap-y-8 sm:grid-cols-1 sm:space-y-6">

        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>
        <?php include './inc/agent-contact-card.php'; ?>




    </div>

    <!-- pagination -->
    <div class="">
        <!-- rent listing card -->
        <?php include './inc/pagination.php'; ?>
    </div>

</section>

<?php include './inc/footer.php'; ?>