<?php
$title = "Loan Cal";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>

<!-- max-width-holder -->
<div class="space-y-10 py-12 px-10 lg:px-8 sm:px-3 mx-auto max-w-8xl ">

    <!-- title -->
    <div class="space-y-1">
        <div class="text-xl font-bold">Estimate your monthly repayment</div>
    </div>

    <?php include './inc/loan-cal.php'; ?>


</div>





<?php include './inc/footer.php'; ?>