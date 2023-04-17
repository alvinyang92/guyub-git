<?php
$title = "Guyub - news details";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>


<!-- max-width-holder -->
<div class="content_holder relative block mx-auto max-w-8xl pb-10 px-10 lg:px-8 sm:px-3 ">

    <!-- 2cols holder -->
    <div class="relative flex justify-between xl:flex-col space-x-8 lgg:space-x-0 py-9 ">

        <!-- content col -->
        <div class="space-y-12 md:space-y-4 w-full ">

            <!-- Basic info -->
            <div class="space-y-5">
                <!-- back button -->
                <div class="flex space-x-2 ">
                    <!-- back button -->
                    <a class="">
                        <div class="flex items-center justify-center ">
                            <!-- arrow -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <!-- title-->
                            <div class="font-medium">Back to news listing</div>
                        </div>
                    </a>
                </div>
                <!-- image -->
                <!-- <img class="object-cover w-full object-center rounded-lg" src="./assets/images/news-photo.jpg" alt=""> -->
                <?php include './inc/image-gallery.php'; ?>

                <!-- title -->
                <h2 class="text-2xl font-bold">ADIA looks to sell Darling Quater stake as city office heats up</h2>

                <div class="space-y-8">
                    <!-- info -->
                    <div class="relative flex justify-between items-end xs:flex-col xs:items-start xs:space-y-3 ">
                        <!-- details -->
                        <div class="space-y-3">
                            <!-- date -->
                            <div class="text-base font-medium">1st Sept 2021 </div>

                            <!-- tag -->
                            <div class="flex flex-wrap ">
                                <!-- item -->
                                <div class="relative inline-block px-3 py-2 rounded-md bg-gray-100 text-base font-medium ">Home Improvement</div>
                            </div>
                        </div>
                        <!-- share -->
                        <div class="">
                            <a class="btn-small text-guyub-black border-[1px] border-gray-300 flex space-x-2 items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                </svg>
                                <div class="font-medium text-base text-guyub-black">Share</div>
                            </a>
                        </div>
                    </div>
                    <!-- article -->
                    <article>
                        <div class="prose max-w-none ">
                            <ol>
                                <li><strong>Nested lists are rarely a good idea.</strong>
                                    <ul>
                                        <li>You might feel like you are being really "organized" or something but you are just creating a gross shape on the screen that is hard to read.</li>
                                        <li>Nested navigation in UIs is a bad idea too, keep things as flat as possible.</li>
                                        <li>Nesting tons of folders in your source code is also not helpful.</li>
                                    </ul>
                                </li>
                                <li><strong>Since we need to have more items, here's another one.</strong>
                                    <ul>
                                        <li>I'm not sure if we'll bother styling more than two levels deep.</li>
                                        <li>Two is already too much, three is guaranteed to be a bad idea.</li>
                                        <li>If you nest four levels deep you belong in prison.</li>
                                    </ul>
                                </li>
                                <li><strong>Two items isn't really a list, three is good though.</strong>
                                    <ul>
                                        <li>Again please don't nest lists if you want people to actually read your content.</li>
                                        <li>Nobody wants to look at this.</li>
                                        <li>I'm upset that we even have to bother styling this.</li>
                                    </ul>
                                </li>
                                <li>
                                    <p><strong>But in this second top-level list item, they will.</strong></p>
                                    <p>This is especially annoying because of the spacing on this paragraph.</p>
                                    <ul>
                                        <li>
                                            <p>As you can see here, because I've added a second line, this list item now has a <code>&lt;p&gt;</code> tag.</p>
                                            <p>This is the second line I'm talking about by the way.</p>
                                        </li>
                                        <li>
                                            <p>Finally here's another list item so it's more like a list.</p>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </article>
                </div>
            </div>

        </div>

        <!-- ads -->
        <section class="h-full sticky top-3 xl:top-0 xl:relative xl:h-auto  ">

            <?php include './inc/ads.php'; ?>

        </section>

    </div>

    <!-- suggested item -->
    <div class="space-y-6 border-t border-gray-300 pt-14 overflow-hidden">

        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title">Not the right fit? Browse others</h4>


            <!-- show more -->
            <div class="flex space-x-3">

                <!-- arrow left and right -->
                <div class="flex space-x-2">

                    <!-- left arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider7-prev-btn ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- right  arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider7-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

            </div>

        </div>

        <!-- suggested listing -->
        <div class="owl-7 owl-carousel owl-theme flex justify-between space-x-5">
            <!--article item -->
            <?php include './inc/article-listing.php'; ?>
            <?php include './inc/article-listing.php'; ?>
            <?php include './inc/article-listing.php'; ?>
        </div>

    </div>
</div>


<?php include './inc/footer.php'; ?>