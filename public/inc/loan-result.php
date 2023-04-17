<div class="space-y-8 bg-gray-100 px-7 py-10 w-[624px] xl:w-full   ">
    <!-- title -->
    <div class="space-y-3">
        <!-- titme -->
        <div class="text-xl font-bold">Loan Eligibility Report</div>
        <!-- line -->
        <div class="w-full border"></div>
    </div>

    <!-- 2-cols -->
    <div class="grid grid-cols-2 sm:grid-cols-1 gap-4">
        <!-- item -->
        <div class="bg-white p-4 space-y-2 rounded-lg">
            <!-- title -->
            <div class="flex space-x-2">
                <div class="">Debt Service Ratio (DSR)</div>
                <?php include './inc/tooltip.php'; ?>

            </div>
            <!-- percentage -->
            <div class="flex items-center space-x-2">
                <div class="font-bold text-xl">70<span>%</span></div>
                <div class="bg-guyub-green px-2 py-1 rounded-lg text-white text-xs font-semibold uppercase">eligible</div>
            </div>
        </div>
        <!-- item -->
        <div class="bg-white p-4 space-y-2 rounded-lg">
            <!-- title -->
            <div class="flex space-x-2">
                <div class="">Debt Service Ratio (DSR)</div>
                <?php include './inc/tooltip-right.php'; ?>

            </div>
            <!-- percentage -->
            <div class="font-bold text-xl"><span>RM</span>1,330,100</div>
        </div>



    </div>

    <!-- 3-cols -->
    <div class="space-y-3">
        <div class="font-semibold">Loan Breakdown</div>
        <div class="grid grid-cols-3 sm:grid-cols-1 gap-4">

            <!-- item -->
            <div class="bg-white rounded-lg px-4 py-2 space-y-2">
                <!-- title -->
                <div class="">Instalment</div>
                <!-- percentage -->
                <div class="font-bold text-xl"><span>RM</span>100,000</div>
            </div>

            <!-- item -->
            <div class="bg-white rounded-lg px-4 py-2 space-y-2">
                <!-- title -->
                <div class="">Tenure</div>
                <!-- percentage -->
                <div class="font-bold text-xl">35<span>years</span></div>
            </div>

            <!-- item -->
            <div class="bg-white rounded-lg px-4 py-2 space-y-2">
                <!-- title -->
                <div class="">Interest</div>
                <!-- percentage -->
                <div class="font-bold text-xl">3<span>%</span></div>
            </div>

        </div>
    </div>
</div>