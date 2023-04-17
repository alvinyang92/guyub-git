<?php
$title = "Guyub - event details";
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
                            <div class="font-medium">Back to event listing</div>
                        </div>
                    </a>
                </div>
                <!-- image -->
                <img class="object-cover w-full object-center rounded-lg" src="./assets/images/event-photo.jpg" alt="">

                <!-- title -->
                <h2 class="text-2xl font-bold">Unlocking Coffee Secrets the Industry Doesn’t Want You to Know</h2>

                <div class="space-y-8">
                    <!-- info -->
                    <div class="relative flex justify-between items-end xs:flex-col xs:items-start xs:space-y-3 ">
                        <!-- details -->
                        <div class="space-y-3">
                            <!-- date.time.price -->
                            <div class="flex items-center space-x-3 ">
                                <!-- date -->
                                <div class="text-base font-medium">1st Sept 2021 </div>
                                <!-- DOT -->
                                <img class="w-2 h-2" src="./assets/images/dot.svg" alt="">
                                <!-- time -->
                                <div class="text-base font-medium">8pm</div>
                                <!-- DOT -->
                                <img class="w-2 h-2" src="./assets/images/dot.svg" alt="">
                                <!-- location -->
                                <div class="text-base font-medium">Zoom</div>
                            </div>
                            <!-- tag -->
                            <div class="flex flex-wrap ">
                                <!-- item -->
                                <div class="relative inline-block px-3 py-2 rounded-md bg-gray-100 text-base font-medium ">Lifestyle</div>
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
                            <p>What follows from here is just a bunch of absolute nonsense I've written to dogfood the plugin itself. It
                                includes every sensible typographic element I could think of, like <strong>bold text</strong>, unordered
                                lists, ordered lists, code blocks, block quotes, <em>and even italics</em>.
                            </p>
                            <figure>
                                <img src="
                                    https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="">
                            </figure>
                            <p>I think most people are going to use <a href="https://highlightjs.org/">highlight.js</a>
                            <p>It's important to cover all of these use cases for a few reasons:</p>
                            <ol>
                                <li>We want everything to look good out of the box.</li>
                                <li>Really just the first reason, that's the whole point of the plugin.</li>
                                <li>Here's a third pretend reason though a list with three items looks more realistic than a list with
                                    two items.</li>
                            </ol>
                            <p>Now we're going to try out another header style.</p>
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
            <?php include './inc/event-listing-card.php'; ?>
            <?php include './inc/event-listing-card.php'; ?>
            <?php include './inc/event-listing-card.php'; ?>
        </div>

    </div>
</div>


<?php include './inc/footer.php'; ?>