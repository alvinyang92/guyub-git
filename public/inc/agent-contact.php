<!-- agent-contact -->
<div class=" bg-white p-9 space-y-9 border border-gray-300 rounded-lg">

    <!-- contact -->
    <div class=" space-y-5">

        <!-- photo + details -->
        <div class="flex space-x-5 items-center">

            <!-- photo -->
            <div class=" w-20 h-20 bg-gray-100">
                <img class="rounded-full object-cover w-full h-full object-center" src="../../assets/images/rent/detail gallery/agent-photo.jpg" alt="">
            </div>

            <!-- details -->
            <div class="">
                <!-- title -->
                <div class="text-base font-semibold ">James Wong</div>
                <!-- company name -->
                <div class="text-base font-medium text-gray-600">IQI Reality Sdn Bhd</div>
                <!-- REN No. -->
                <div class="text-base font-medium ext-gray-600">REN20176</div>
            </div>

        </div>

        <!-- phone no + whatsapp -->
        <div class="space-x-2 flex ">

            <!-- phone -->
            <a class="btn bg-gray-100 flex space-x-2 items-center">
                <!-- phone icon -->
                <img class="w-5 h-5" src="../../assets/images/rent/phone.svg" alt="">
                <!-- number -->
                <div class="flex items-center">
                    <div class="">016435...</div>
                    <div class="underline">Show</div>
                </div>
                <!-- whatsapp -->
                <div class=""></div>
            </a>

            <!-- whatsapp -->
            <a class="btn bg-gray-100 flex space-x-2 items-center">
                <!-- phone icon -->
                <img class="w-5 h-5" src="../../assets/images/rent/detail gallery/whatsapp.svg" alt="">
                <!-- number -->
                <div class="flex items-center">
                    <div class="">Whatsapp</div>
                </div>
                <!-- whatsapp -->
                <div class=""></div>
            </a>

        </div>

    </div>

    <!-- form -->
    <div>

        <form class="space-y-6" action="#" method="POST" id="form">

            <!-- <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
            <input type="hidden" name="subject" value="New Submission from Web3Forms">
            <input type="checkbox" name="botcheck" id="" style="display: none;"> -->

            <!-- name -->
            <div>
                <label for="name" class="block mb-2 font-normal ">Full Name</label>
                <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " />
            </div>

            <!-- phone -->
            <div class="">
                <label for="phone" class="font-normal">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="+60 16-456 7890" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>

            <!-- email -->
            <div class="">
                <label for="email" class="block mb-2 font-normal">Email Address</label>
                <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700" />
            </div>

            <!-- message -->
            <div class="">
                <label for="message" class="block mb-2 font-normal">Your Message</label>
                <textarea rows="5" name="message" id="message" placeholder="" class="text-guyub-black w-full px-3 py-2 placeholder-guyub-black border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " required>Hey, James Wong! I would like to check on the availability for xxxx. Hope to hear back from you soonest, thank you!
            </textarea>
            </div>

            <!-- button -->
            <div class="">
                <button type="submit" class="font-medium w-full px-3 py-4 text-white bg-guyub-green">Send Message</button>
            </div>
           
        </form>

    </div>

    <!-- button -->
    <div class=""></div>
</div>

<!-- <script>
    const form = document.getElementById('form');
    const result = document.getElementById('result');

    form.addEventListener('submit', function(e) {
        const formData = new FormData(form);
        e.preventDefault();
        var object = {};
        formData.forEach((value, key) => {
            object[key] = value
        });
        var json = JSON.stringify(object);
        result.innerHTML = "Please wait..."

        fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            })
            .then(async (response) => {
                let json = await response.json();
                if (response.status == 200) {
                    result.innerHTML = json.message;
                    result.classList.remove('text-gray-500');
                    result.classList.add('text-green-500');
                } else {
                    console.log(response);
                    result.innerHTML = json.message;
                    result.classList.remove('text-gray-500');
                    result.classList.add('text-red-500');
                }
            })
            .catch(error => {
                console.log(error);
                result.innerHTML = "Something went wrong!";
            })
            .then(function() {
                form.reset();
                setTimeout(() => {
                    result.style.display = "none";
                }, 5000);
            });
    })
</script> -->