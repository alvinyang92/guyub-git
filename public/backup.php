<?php
$title = "Guyub Property Platform";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/header-footer/meta.php';
include './inc/header-footer/header-white.php';
?>

  <!-- Non landed  -->
  <div class="relative bg-white border-b border-gray-200">
        <!-- toggle -->
        <button type="button" class="w-full pb-4 text-left border-b border-gray-200 " @click="selected !== 10 ? selected = 10 : selected = null">
            <div class="flex items-center justify-between">
                <div class="text-sm font-bold">Non-landed</div>
                <!-- arrow -->
                <div :class="{'rotate-180 transform transition duration-200 ease-in  ': selected == 10, 'rotate-0 transform transition duration-200 ease-in ': selected !== 10}" class="transition ease-in duration-200 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </button>
        <!-- content -->
        <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container10" x-bind:style="selected == 10 ? 'max-height: ' + $refs.container10.scrollHeight + 'px' : ''">
            <!-- content start -->
            <div class="py-3 flex flex-col space-y-3 ">
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Condominium</div>

                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Service Residence</div>

                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Apartment</div>

                </label>
            </div>
        </div>
    </div>

    <!-- landed  -->
    <div class="relative bg-white border-b border-gray-200">
        <!-- toggle -->
        <button type="button" class="w-full pb-4 text-left border-b border-gray-200 " @click="selected !== 11 ? selected = 11 : selected = null">
            <div class="flex items-center justify-between">
                <div class="text-sm font-bold">landed</div>
                <!-- arrow -->
                <div :class="{'rotate-180 transform transition duration-200 ease-in  ': selected == 11, 'rotate-0 transform transition duration-200 ease-in ': selected !== 11}" class="transition ease-in duration-200 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </button>
        <!-- content -->
        <div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container11" x-bind:style="selected == 11 ? 'max-height: ' + $refs.container11.scrollHeight + 'px' : ''">
            <!-- content start -->
            <div class="py-3 flex flex-col space-y-3 ">
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Bungalow / Villa</div>

                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Link Bungalow </div>

                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Semi-Detached House</div>

                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Terrace</div>

                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Town House</div>

                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-guyub-green ">
                    <div class="text-sm">Residential Land</div>

                </label>
            </div>
        </div>
    </div>

<!-- mobile search -->
<div class="space-y-1">

<!-- all states -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 1 ? selected = 1 : selected = null">
		<div class="flex items-center justify-between">
			<div class="text-sm">All states</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 1, 'rotate-0 transform transition duration-200 ease-in ': selected !== 1}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6">
			<select class="w-full border-gray-200 rounded">
				<option value="Malaysia">All States</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Selangor">Selangor</option>
				<option value="Johor">Johor</option>
				<option value="Penang">Penang</option>
				<option value="Perak">Perak</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Pahang">Pahang</option>
				<option value="Melaka">Melaka</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Putrajaya">Putrajaya</option>
				<option value="Perlis">Perlis</option>
				<option value="Labuan">Labuan</option>
			</select>
		</div>
	</div>
</div>

<!-- property type -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full  py-4 text-left border-b border-gray-200 " @click="selected !== 2 ? selected = 2 : selected = null">
		<div class="flex items-center justify-between">
			<div>Property Type</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 2, 'rotate-0 transform transition duration-200 ease-in ': selected !== 2}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6">
			<!-- Property Type -->
			<select class="w-full border-gray-200 rounded">
				<option value="Malaysia">Property Type</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Selangor">Selangor</option>
				<option value="Johor">Johor</option>
				<option value="Penang">Penang</option>
				<option value="Perak">Perak</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Pahang">Pahang</option>
				<option value="Melaka">Melaka</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Putrajaya">Putrajaya</option>
				<option value="Perlis">Perlis</option>
				<option value="Labuan">Labuan</option>
			</select>
		</div>
	</div>
</div>

<!-- price range -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 3 ? selected = 3 : selected = null">
		<div class="flex items-center justify-between">
			<div>Price range</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 3, 'rotate-0 transform transition duration-200 ease-in ': selected !== 3}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 px-3 -ml-2">
			<div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative w-full ">
				<!-- range slider -->
				<div>
					<input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="mintrigger" x-model="minprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
					<input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="maxtrigger" x-model="maxprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
					<div class="relative z-10 h-1">
						<div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>
						<div class="absolute z-20 top-0 bottom-0 rounded-md bg-guyub-green" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>
						<div class="absolute z-30 w-6 h-6 top-0 left-0 bg-white border border-guyub-green rounded-full -mt-2 -ml-1" x-bind:style="'left: '+minthumb+'%'"></div>
						<div class="absolute z-30 w-6 h-6 top-0 right-0 bg-white border border-guyub-green  rounded-full -mt-2 -mr-3" x-bind:style="'right: '+maxthumb+'%'"></div>
					</div>
				</div>
				<!-- price col -->
				<div class="flex items-center justify-between pt-5 space-x-4 text-sm text-gray-700">
					<div class="space-y-2">
						<div class="font-medium">Min Price</div>
						<input type="text" maxlength="5" x-on:input.debounce="mintrigger" x-model="minprice" wire:model.debounce.300="minPrice" class="font-medium w-24 px-3 py-2 text-center border border-gray-200  rounded-lg focus:outline-none">
					</div>
					<div class="space-y-2">
						<div class="font-medium">Max Price</div>
						<input type="text" maxlength="5" x-on:input.debounce.300="maxtrigger" x-model="maxprice" wire:model.debounce="maxPrice" class="font-medium w-24 px-3 py-2 text-center border border-gray-200 rounded-lg  focus:outline-none">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- bedrooms -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 4 ? selected = 4 : selected = null">
		<div class="flex items-center justify-between">
			<div>Bedroom</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 4, 'rotate-0 transform transition duration-200 ease-in ': selected !== 4}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 ">
			<!-- bedroom -->
			<select class="w-full border-gray-200 rounded">
				<option value="Malaysia">Bedrooms</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Selangor">Selangor</option>
				<option value="Johor">Johor</option>
				<option value="Penang">Penang</option>
				<option value="Perak">Perak</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Pahang">Pahang</option>
				<option value="Melaka">Melaka</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Putrajaya">Putrajaya</option>
				<option value="Perlis">Perlis</option>
				<option value="Labuan">Labuan</option>
			</select>
		</div>
	</div>
</div>

<!-- built-up size -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 5 ? selected = 5 : selected = null">
		<div class="flex items-center justify-between">
			<div>Built-up size</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 5, 'rotate-0 transform transition duration-200 ease-in ': selected !== 5}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container5" x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 px-3 -ml-2">
			<!-- price range -->
			<div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative w-full">
				<!-- range slider -->
				<div>
					<input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="mintrigger" x-model="minprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
					<input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="maxtrigger" x-model="maxprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
					<div class="relative z-10 h-1">
						<div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>
						<div class="absolute z-20 top-0 bottom-0 rounded-md bg-guyub-green" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>
						<div class="absolute z-30 w-6 h-6 top-0 left-0 bg-white border border-guyub-green rounded-full -mt-2 -ml-1" x-bind:style="'left: '+minthumb+'%'"></div>
						<div class="absolute z-30 w-6 h-6 top-0 right-0 bg-white border border-guyub-green  rounded-full -mt-2 -mr-3" x-bind:style="'right: '+maxthumb+'%'"></div>
					</div>
				</div>
				<!-- price col -->
				<div class="flex items-center justify-between pt-5 space-x-4 text-sm text-gray-700">
					<div class="space-y-2">
						<div class="font-medium">Min Sqft</div>
						<input type="text" maxlength="5" x-on:input.debounce="mintrigger" x-model="minprice" wire:model.debounce.300="minPrice" class="font-medium w-24 px-3 py-2 text-center border border-gray-200  rounded-lg focus:outline-none">
					</div>
					<div class="space-y-2">
						<div class="font-medium">Max Sqft</div>
						<input type="text" maxlength="5" x-on:input.debounce.300="maxtrigger" x-model="maxprice" wire:model.debounce="maxPrice" class="font-medium w-24 px-3 py-2 text-center border border-gray-200 rounded-lg  focus:outline-none">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- tenure -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 6 ? selected = 6 : selected = null">
		<div class="flex items-center justify-between">
			<div>Tenure</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 6, 'rotate-0 transform transition duration-200 ease-in ': selected !== 6}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container6" x-bind:style="selected == 6 ? 'max-height: ' + $refs.container6.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 ">
			<!-- bedroom -->
			<select class="w-full border-gray-200 rounded">
				<option value="Malaysia">Tenure</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Selangor">Selangor</option>
				<option value="Johor">Johor</option>
				<option value="Penang">Penang</option>
				<option value="Perak">Perak</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Pahang">Pahang</option>
				<option value="Melaka">Melaka</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Putrajaya">Putrajaya</option>
				<option value="Perlis">Perlis</option>
				<option value="Labuan">Labuan</option>
			</select>
		</div>
	</div>
</div>

<!-- completion year -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 7 ? selected = 7 : selected = null">
		<div class="flex items-center justify-between">
			<div>Completion year</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 7, 'rotate-0 transform transition duration-200 ease-in ': selected !== 7}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container7" x-bind:style="selected == 7 ? 'max-height: ' + $refs.container7.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 ">
			<select class="w-full border-gray-200 rounded">
				<option value="Malaysia">Completion Year</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Selangor">Selangor</option>
				<option value="Johor">Johor</option>
				<option value="Penang">Penang</option>
				<option value="Perak">Perak</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Pahang">Pahang</option>
				<option value="Melaka">Melaka</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Putrajaya">Putrajaya</option>
				<option value="Perlis">Perlis</option>
				<option value="Labuan">Labuan</option>
			</select>
		</div>
	</div>
</div>

<!-- Bathroom -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 8 ? selected = 8 : selected = null">
		<div class="flex items-center justify-between">
			<div>Bathroom</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 8, 'rotate-0 transform transition duration-200 ease-in ': selected !== 8}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container8" x-bind:style="selected == 8 ? 'max-height: ' + $refs.container8.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 ">
			<select class="w-full border-gray-200 rounded">
				<option value="Malaysia">Bathroom</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Selangor">Selangor</option>
				<option value="Johor">Johor</option>
				<option value="Penang">Penang</option>
				<option value="Perak">Perak</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Pahang">Pahang</option>
				<option value="Melaka">Melaka</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Putrajaya">Putrajaya</option>
				<option value="Perlis">Perlis</option>
				<option value="Labuan">Labuan</option>
			</select>
		</div>
	</div>
</div>

<!-- Non landed  -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 9 ? selected = 9 : selected = null">
		<div class="flex items-center justify-between">
			<div>Non-landed</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 9, 'rotate-0 transform transition duration-200 ease-in ': selected !== 9}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container9" x-bind:style="selected == 9 ? 'max-height: ' + $refs.container9.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 ">
			<select class="w-full border-gray-200 rounded">
				<option value="Malaysia">Non landed</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Selangor">Selangor</option>
				<option value="Johor">Johor</option>
				<option value="Penang">Penang</option>
				<option value="Perak">Perak</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Pahang">Pahang</option>
				<option value="Melaka">Melaka</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Putrajaya">Putrajaya</option>
				<option value="Perlis">Perlis</option>
				<option value="Labuan">Labuan</option>
			</select>
		</div>
	</div>
</div>

<!-- landed  -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 10 ? selected = 10 : selected = null">
		<div class="flex items-center justify-between">
			<div>Bathroom</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 10, 'rotate-0 transform transition duration-200 ease-in ': selected !== 10}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container10" x-bind:style="selected == 10 ? 'max-height: ' + $refs.container10.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 ">
			<select class="w-full border-gray-200 rounded">
				<option value="Malaysia">Non landed</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Selangor">Selangor</option>
				<option value="Johor">Johor</option>
				<option value="Penang">Penang</option>
				<option value="Perak">Perak</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Pahang">Pahang</option>
				<option value="Melaka">Melaka</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Putrajaya">Putrajaya</option>
				<option value="Perlis">Perlis</option>
				<option value="Labuan">Labuan</option>
			</select>
		</div>
	</div>
</div>

<!-- landed  -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full py-4 text-left border-b border-gray-200 " @click="selected !== 11 ? selected = 11 : selected = null">
		<div class="flex items-center justify-between">
			<div>Live Virtual Tour Only</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 11, 'rotate-0 transform transition duration-200 ease-in ': selected !== 11}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>
	<!-- content -->
	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container11" x-bind:style="selected == 11 ? 'max-height: ' + $refs.container10.scrollHeight + 'px' : ''">
		<!-- content start -->
		<div class="py-6 ">
			<!-- checkbox -->
			<div class="">
				<label class="inline-flex items-center space-x-2">
					<input type="checkbox" class="form-checkbox h-5 w-5 text-guyub-green ">
					<div class="">Live Virtual Tour Only</div>

				</label>

			</div>
		</div>
	</div>
</div>







</div>

<div class="">
	<div class="bg-gray-50 py-9 px-7 border border-gray-200 rounded-lg space-y-4 text-center xl:hidden">
		<img src="./assets/images/rent/ads-visual.png" alt="">
		<!-- title -->
		<h5 class="">Neighbourhoods</h5>
		<!-- sub copy -->
		<p class="">Discover which neighbourhoods in Singapore are the best places to live.</p>

		<div class="btn bg-guyub-green text-white font-medium w-full">Learn More</div>

	</div>
</div>

<section class="mx-auto w-full bg-gray-100 h-screen flex items-center justify-center " x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>

	<section class="flex flex-wrap p-4 h-full items-center">

		<button type="button" class="bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full" @click="showModal = true">Open modal</button>

		<!--Overlay-->
		<div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
			<!--Dialog-->
			<div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Simple Modal!</p>
					<div class="cursor-pointer z-50" @click="showModal = false">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
						</svg>
					</div>
				</div>

				<!-- content -->
				<p>Modal content can go here</p>
				<p>...</p>
				<p>...</p>
				<p>...</p>
				<p>...</p>

				<!--Footer-->
				<div class="flex justify-end pt-2">
					<button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2" @click="alert('Additional Action');">Action</button>
					<button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400" @click="showModal = false">Close</button>
				</div>


			</div>
			<!--/Dialog -->
		</div><!-- /Overlay -->

	</section>

</section>






<!-- tab -->
<div x-cloak class="owl-8 owl-carousel owl-theme  lg:hidden ">

	<button class="tab flex space-x-1  justify-center " x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
		</svg>
		<div class="text-base font-medium">Clinics</div>
	</button>

	<button class="tab flex space-x-1  justify-center" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
		</svg>
		<div class="text-base font-medium">Supermarket</div>
	</button>
</div>


<!-- item -->
<img class="object-cover w-full h-[800px] object-center " src="./assets/images/home/new-launch-banner.jpg" alt="">

<!-- item -->
<img class="object-cover w-full h-[800px] object-center " src="./assets/images/home/interior-banner.jpg" alt="">


<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
</svg>

<div class="wrapper">
	<div class="search-input">

		<a href="" target="_blank" hidden></a>

		<input type="text" placeholder="Type to search..">
		<div class="autocom-box">
			<!-- here list are inserted from javascript -->
		</div>
		<div class="icon"><i class="fas fa-search"></i></div>
	</div>
</div>

<script>
	const videos = document.querySelectorAll('iframe')

	//desktop tab
	// const closePhoto = document.querySelector('.close-photo')
	const closeVirtual = document.querySelector('.close-365')
	const closeFloorplan = document.querySelector('.close-floorplan')
	const closePopupBlack = document.querySelector('.close-popupblack')

	//mobile tab
	const closePhotoMobile = document.querySelector('.close-photo-m')
	const closeVirtualMobile = document.querySelector('.close-365-m')
	const closeFloorplanMobile = document.querySelector('.close-floorplan-m')


	//desktop
	closePhoto.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closeVirtual.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closeFloorplan.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closePopupBlack.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	//mobile
	closePhotoMobile.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closeVirtualMobile.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closeFloorplanMobile.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})
</script>


<?php include './inc/header-footer/footer.php'; ?>

<script>
	const videos = document.querySelectorAll('iframe')

	//desktop tab
	// const closePhoto = document.querySelector('.close-photo')
	const closeVirtual = document.querySelector('.close-365')
	const closeFloorplan = document.querySelector('.close-floorplan')
	const closePopupBlack = document.querySelector('.close-popupblack')

	//mobile tab
	const closePhotoMobile = document.querySelector('.close-photo-m')
	const closeVirtualMobile = document.querySelector('.close-365-m')
	const closeFloorplanMobile = document.querySelector('.close-floorplan-m')


	//desktop
	closePhoto.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closeVirtual.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closeFloorplan.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closePopupBlack.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	//mobile
	closePhotoMobile.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closeVirtualMobile.addEventListener('click', () => {
		videos.forEach(i => {
			const source = i.src
			i.src = ''
			i.src = source
		})
	})

	closeFloorplanMobile.addEventListener('click', () => {
	videos.forEach(i => {
		const source = i.src
		i.src = ''
		i.src = source
	})
	})

	});
</script>




<!-- youtube -->
<div class="relative w-full px-20 md:px-0" x-cloak x-show="active === 1">
	<!-- arrow left and right -->
	<div class="absolute w-full inset-x-0 top-1/2 flex justify-between md:hidden  ">
		<!-- left arrow -->
		<div class="rounded-full cursor-pointer bg-white p-3 slider2-prev-btn">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
			</svg>
		</div>
		<!-- right arrow -->
		<div class="rounded-full cursor-pointer bg-white p-3 slider2-next-btn">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
			</svg>
		</div>
	</div>

	<!-- video -->
	<div class="w-full owl-2 owl-carousel owl-theme max-w-6xl mx-auto overflow-hidden  ">

		<!-- item -->
		<div class="aspect-w-16 aspect-h-9">
			<!-- youtube player -->
			<div class="w-full bg-gray-100 h-[600px]"></div>
		</div>

		<!-- item -->
		<div class="aspect-w-16 aspect-h-9">
			<!-- youtube player -->
			<div class="w-full bg-gray-100 h-[600px]"></div>
		</div>


	</div>
</div>

<!-- gallery slider -->
<div class="relative w-full px-20 md:px-0" x-cloak x-show="active === 3">
	<!-- arrow left and right -->
	<div class="absolute w-full inset-x-0 top-1/2 flex justify-between md:hidden  ">
		<!-- left arrow -->
		<div class="rounded-full cursor-pointer bg-white p-3 slider2-prev-btn">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
			</svg>
		</div>
		<!-- right arrow -->
		<div class="rounded-full cursor-pointer bg-white p-3 slider2-next-btn">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
			</svg>
		</div>
	</div>

	<!-- banner -->
	<div class="w-full owl-2 owl-carousel owl-theme max-w-6xl  mx-auto  overflow-hidden  ">
		<!-- item -->
		<div class="aspect-w-16 aspect-h-9 ">
			<img src="./assets/images/floorplan.jpg" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
		</div>

		<!-- item -->
		<div class="aspect-w-16 aspect-h-9 ">
			<img src="./assets/images/floorplan.jpg" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
		</div>




	</div>
</div>




<!-- search -->
<div class="relative bg-white border-b border-gray-200">
	<!-- toggle -->
	<button type="button" class="w-full px-8 py-4 text-left border-b border-gray-200 " @click="selected !== 1 ? selected = 1 : selected = null">
		<div class="flex items-center justify-between">
			<div>Search</div>
			<!-- arrow -->
			<div :class="{'rotate-180 transform transition duration-200 ease-in ': selected == 1, 'rotate-0 transform transition duration-200 ease-in ': selected !== 1}" class="transition ease-in duration-200 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</div>
		</div>
	</button>

	<div class="bg-white relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
		<!-- search content -->
		<div class="space-y-9 px-8 py-6" x-cloak x-data="{active: 0}">

			<!-- tab -->
			<div x-cloak class="flex w-full items-center space-x-3 ">
				<button class="tab-small-2" x-on:click.prevent="active = 0" x-bind:class="{'text-white bg-guyub-green': active === 0}" x-cloak>Buy</button>
				<button class="tab-small-2" x-on:click.prevent="active = 1" x-bind:class="{'text-white bg-guyub-green': active === 1}" x-cloak>Rent</button>

			</div>

			<!-- tab-content -->
			<div class="space-y-8 flex flex-col" x-show="active === 0" x-cloak>

				<!-- search bar -->
				<?php include './inc/searchbar.php'; ?>

			</div>

			<!-- tab-content -->
			<div class="space-y-8 flex flex-col" x-show="active === 1" x-cloak>

				<!-- search bar -->
				<?php include './inc/search/searchbar.php'; ?>

			</div>

			<!-- tab-content -->
			<div class="space-y-8 flex flex-col" x-show="active === 2" x-cloak>

				<!-- search bar -->
				<?php include './inc/search/searchbar.php'; ?>

			</div>

			<!-- tab-content -->
			<div class="space-y-8 flex flex-col" x-show="active === 3" x-cloak>

				<!-- search bar -->
				<?php include './inc/search/searchbar.php'; ?>

			</div>


		</div>

	</div>




</div>

<section class="space-y-9 overflow-hidden">
        <!-- title + arrow -->
        <div class="flex justify-between sm:flex-col sm:justify-items-start sm:space-y-3">
            <!-- left-title  -->
            <h4 class="section-title-home">Explore neighbourhoods</h4>

            <!-- show more -->
            <div class="flex space-x-3 items-center">

                <!-- arrow left and right -->
                <div class="flex space-x-2">

                    <!-- left arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider1-prev-btn ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- right  arrow -->
                    <div class="cursor-pointer rounded-full border p-2 slider1-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <!-- view-more -->
                <a class="space-x-1 flex items-center" href="">
                    <!-- title -->
                    <div class="font-semibold">View More</div>
                    <!-- arrow -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

            </div>


        </div>

        <div class="owl-1 owl-carousel owl-theme flex justify-between items-center">

            <!-- item -->
            <div class="space-y-3 ">
                <!-- neighbourhood item -->
                <?php include './inc/neighbourhood-card.php'; ?>
                <!-- neighbourhood item -->
                <?php include './inc/neighbourhood-card.php'; ?>
            </div>
            <!-- item -->
            <div class="space-y-3 ">
                <!-- neighbourhood item -->
                <?php include './inc/neighbourhood-card.php'; ?>
                <!-- neighbourhood item -->
                <?php include './inc/neighbourhood-card.php'; ?>
            </div>
            <!-- item -->
            <div class="space-y-3 ">
                <!-- neighbourhood item -->
                <?php include './inc/neighbourhood-card.php'; ?>
                <!-- neighbourhood item -->
                <?php include './inc/neighbourhood-card.php'; ?>
            </div>
            <!-- item -->
            <div class="space-y-3 ">
                <!-- neighbourhood item -->
                <?php include './inc/neighbourhood-card.php'; ?>
                <!-- neighbourhood item -->
                <?php include './inc/neighbourhood-card.php'; ?>
            </div>
            


        </div>
    </section>