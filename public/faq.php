<?php
$title = "about";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
include './inc/header-black.php';
?>

<!-- max-width-holder -->
<div class="space-y-6 pt-28 lg:pt-8 py-12 px-20 xl:px-8 lg:px-10 sm:px-3 mx-auto max-w-8xl ">

    <!-- title -->
    <div class="space-y-1">
        <div class="text-xl font-bold">Frequently Asked Questions</div>
    </div>
    
    <!-- content -->
    <div class="space-y-8">
        <!-- image -->
        <img class="object-cover w-full xs:h-60 object-center rounded-lg" src="./assets/images/about.jpg" alt="">

        <!-- content -->
        <div class="space-y-10" x-data="{selected:null}">

            <!-- set A -->
            <div class="space-y-4">
                <!-- title -->
                <div class="font-bold">Set A</div>
                <!-- buy -->
                <div class="relative bg-white ">
                    <!-- toggle -->
                    <button type="button" class="w-full py-4 px-4 text-left bg-gray-50 " @click="selected !== 2 ? selected = 2 : selected = null">
                        <div class="flex items-center justify-between">
                            <div class="font-medium">Buy</div>
                            <!-- arrow -->
                            <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 2, 'rotate-0 transform transition duration-200 ease-in ': selected !== 2}" class="transition ease-in duration-200 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </button>
                    <!-- content -->
                    <!-- buy -->
                    <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                        <!-- content start -->
                        <div class="bg-gray-50 flex flex-col py-4 space-y-3 px-4">
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
            </div>

            <!-- set B -->
            <div class="space-y-4">
                <!-- title -->
                <div class="font-bold">Set A</div>
                <!-- buy -->
                <div class="relative bg-white ">
                    <!-- toggle -->
                    <button type="button" class="w-full py-4 px-4 text-left bg-gray-50 " @click="selected !== 3 ? selected = 3 : selected = null">
                        <div class="flex items-center justify-between">
                            <div class="font-medium">Buy</div>
                            <!-- arrow -->
                            <div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 3, 'rotate-0 transform transition duration-200 ease-in ': selected !== 3}" class="transition ease-in duration-200 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </button>
                    <!-- content -->
                    <!-- buy -->
                    <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                        <!-- content start -->
                        <div class="bg-gray-50 flex flex-col py-4 space-y-3 px-4">
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





<?php include './inc/footer.php'; ?>