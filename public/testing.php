<?php
$title = '';
include './inc/head.php';
?>

<section class="bg-white">
    <div class=" mx-auto max-w-8xl space-y-8 px-4 py-16 ">
        <!-- title -->
        <div class="text-center ">
            <h1 class="text-4xl ">Retailers</h1>
        </div>
        <!-- dropdown -->
        <div class="bg-gray-100 p-8 ">
            <div class="max-w-3xl mx-auto ">
                <div x-cloak x-data="{ open: !open }" class="relative inline-block text-left z-10 w-full state_selector">
                    <!-- top toggle -->
                    <button @click="open = !open" @click.away="open = false" class="flex justify-between items-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium">
                        <div class="text-lg leading-7 state-selected">All States</div>
                        <!-- arrow -->
                        <svg class=" h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <!-- bottom -->
                    <div x-show="open" class="w-full absolute right-0 mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1 h-64 overflow-y-scroll">
                            <ul class="py-1 list-none ">
                                <li>
                                    <div data-state="all" class="text-gray-700 block px-4 py-2 text-lg leading-7 hover:bg-gray-100 each-state state-all">All States</div>
                                </li>
                                <?php
                                $stateID = 0;
                                foreach ($stockists as $each_state) {
                                    $stateID ++;
                                ?>
                                <li>
                                    <div data-state="<?php echo $stateID;?>" class="text-gray-700 block px-4 py-2 text-lg leading-7 hover:bg-gray-100 each-state state-<?php echo $stateID;?>"><?php echo $each_state->state; ?></div>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- outlet container -->
        <div class="space-y-6 ">
            <!-- result label -->
            <div class="px-6 text-center total-retailer">
                <span class="r_num">3</span> retailer(s) in <span class="text-ir-green font-semibold r_state">Selangor</span>:
            </div>
            <!-- outlet grid -->
            <div class="flex flex-wrap justify-center gap-[1rem]">
            <?php
            $currentID = 0;
            $allPage = 0;
            $stateID = 0;
            foreach ($stockists as $each_state) {
                $stateCurrentID = 0;
                $stateID ++;
                foreach ($each_state->each_location as $each_location) {
            ?>
            <!-- address -->
            <div class="w-[24%] xl:w-[30%] md: md:w-full space-y-2 p-5 hover:bg-gray-100 cursor-pointer loc_all loc_<?php echo $stateID; ?> loc_all_<?php echo $currentID; ?> loc_<?php echo $stateID; ?>_<?php echo $stateCurrentID; ?>">
                <a class="space-y-2 p-5" target="_blank" href="<?php echo $each_location->waze ?>">
                    <h4 class="text-base"><?php echo $each_location->store_name ?></h4>
                    <p class="text-base"><?php echo $each_location->address ?></p>
                    <div class="space-x-1 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-ir-green" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-ir-green font-semibold">Get Direction</span>
                    </div>
                </a>
            </div>
            <?php
                $currentID ++;
                $stateCurrentID ++;
                }
            }
            ?>
            </div>
        <!-- pagination -->
        <div class="md:hidden flex justify-center p-4 z-40">
            <ul class="flex pl-0 list-none rounded my-2 pagination_holder">
            </ul>
        </div>
        <!-- Visible in mobile -->
        <div class="hidden md:block mobile_pagination">
            <nav class="flex py-10 ">
                <a href="javascript:void(0)" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none nav-prev">
                    <svg class="hi-solid hi-chevron-left inline-block w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <div class="flex items-center flex-grow justify-center px-2 sm:px-4">
                    <span> Page <span class="font-semibold _current_page">1</span> of <span class="font-semibold _total_page">20</span></span>
                </div>
                <a href="javascript:void(0)" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none nav-next">
                    <svg class="hi-solid hi-chevron-right inline-block w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function(){
        var eachPage = <?php echo $eachPage; ?>;
        var limitNav = <?php echo $limitNav;?>;
        var numItems;
        var totalPage;
        var currentPage;
        var currentState = "all";

        function loadState(){
            currentPage = 1;
            numItems = $(".loc_"+currentState).length;
            totalPage = Math.ceil(numItems/eachPage);

            jQuery(".each-state").show();
            jQuery(".state-"+currentState).hide();
            if(currentState == "all"){
                jQuery(".total-retailer").hide();
            }else{
                jQuery(".total-retailer .r_num").text(numItems);
                jQuery(".total-retailer .r_state").text(jQuery(".state-"+currentState).text());
                jQuery(".total-retailer").show();
            }
        }
        function loadStockist(){
            jQuery(".loc_all").hide();
            for (var ii = (eachPage*(currentPage-1)); ii < (eachPage*currentPage); ii++) {
                if(jQuery(".loc_"+currentState+"_"+ii).length > 0){
                    jQuery(".loc_"+currentState+"_"+ii).show();
                    jQuery(".stockist-off").show();
                }
            }
        }
        function loadPagination(){
            jQuery(".pagination_holder").empty();

            var eachNav = '<div class="flex items-center mr-4 text-lg">Page:</div>';
            jQuery(".pagination_holder").append(eachNav);

            var eachNav = '<li>';
            eachNav += '<button class="group relative block py-4 px-4  bg-gray-100 border border-white border-r-0 hover:bg-ir-green hover:text-white focus:outline-none nav-prev">';
            eachNav += '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-white  " fill="none" viewBox="0 0 24 24" stroke="currentColor">';
            eachNav += '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />';
            eachNav += '</svg>';
            eachNav += '</button>';
            eachNav += '</li>';
            jQuery(".pagination_holder").append(eachNav);

            var fromNum = 0;
            var toNum = 0;
            if(currentPage <= Math.ceil(limitNav/2) || totalPage <= limitNav){
                fromNum = 0
                if(totalPage < limitNav){
                    toNum = totalPage;
                }else{
                    toNum = limitNav;
                }
            }else{
                if(currentPage + Math.floor(limitNav/2) <= totalPage){
                    fromNum = currentPage - 3;
                    toNum = currentPage + 2;
                }else if(currentPage + Math.floor(limitNav/2)-1 <= totalPage){
                    fromNum = currentPage - 4;
                    toNum = currentPage + 1;
                }else{
                    fromNum = currentPage - 5;
                    toNum = currentPage;
                }
            }

            for (var i = fromNum; i < toNum; i++) {
                var act = "";
                if(parseInt(i+1) == parseInt(currentPage)){
                    act = "nav_active";
                }
                var eachNav = '<li>';
                    eachNav += '<button class="relative py-4 px-4  text-ir-green text-lg   bg-gray-100 border border-white  border-r-0 hover:bg-ir-green hover:text-white focus:bg-[#bed5aa] focus:text-ir-green focus:outline-none nav-page '+act+'" data-page="'+(i+1)+'">';
                    eachNav += '<div class="h-5 w-5 flex justify-center items-center">'+(i+1)+'</div>';
                    eachNav += '</button>';
                    eachNav += '</li>';
                jQuery(".pagination_holder").append(eachNav);
            }

            var eachNav = '<li>';
            eachNav += '<button class="group relative block py-4 px-4 leading-tight bg-gray-100 border border-white  hover:bg-ir-green hover:text-white  focus:outline-none nav-next">';
            eachNav += '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">';
            eachNav += '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />';
            eachNav += '</svg>';
            eachNav += '</button>';
            eachNav += '</li>';
            jQuery(".pagination_holder").append(eachNav);

            jQuery("._current_page").text(currentPage);
            jQuery("._total_page").text(totalPage);
            if(totalPage <= 1){
                jQuery(".mobile_pagination").addClass("hide");
                jQuery(".pagination_holder").addClass("hide");
            }else{
                jQuery(".mobile_pagination").removeClass("hide");
                jQuery(".pagination_holder").removeClass("hide");
            }
            /*
            jQuery(".nav-prev").show();
            jQuery(".nav-next").show();
            if(currentPage == 1){
                jQuery(".nav-prev").hide();
            }
            if(currentPage == totalPage){
                jQuery(".nav-next").hide();
            }
            */
        }
        loadState();
        loadStockist();
        loadPagination();

        jQuery(".state_selector .each-state").on( "click", function() {
            currentState = $(this).data("state");
            jQuery(".state-selected").text($(this).text());
            loadState();
            loadStockist();
            loadPagination();
        });
        jQuery(".pagination_holder").on( "click" ," .nav-page" , function() {
            currentPage = $(this).data("page");
            loadStockist();
            loadPagination();
        });
        jQuery(".pagination_holder, .mobile_pagination").on( "click" ," .nav-prev" , function() {
            currentPage --;
            if(currentPage < 1){
                currentPage = 1;
            }
            loadStockist();
            loadPagination();
        });
        jQuery(".pagination_holder, .mobile_pagination").on( "click" ," .nav-next" , function() {
            currentPage ++;
            if(currentPage > totalPage){
                currentPage = totalPage;
            }
            loadStockist();
            loadPagination();
        });
    });
</script>








<?php include './inc/footer.php'; ?>