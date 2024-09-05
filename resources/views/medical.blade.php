<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Insurance</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    --}}
    <style>

    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/backstyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>
<body>




    <!-- Header Section -->
    <section class="banner text-white text-center py-16">
        {{-- <div class="banner"> --}}
            <div class="sm:text-lg banner-text">
                <h1 class="text-4xl font-bold">Protect your business. Get a free business insurance quote today!</h1>
                 {{-- <p class="mt-4 text-lg">We compare quotes from leading motor warranty providers to find you the perfect coverage for unexpected car repairs.</p> --}}

                 <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    We compare quotes from leading insurers to find you the best coverage at the most affordable price.
                 </p>

            </div>
        {{-- </div> --}}
    </section>

    <!-- Content Section -->
    <section class="py-16 px-8 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Image -->
            <div class="flex justify-center">
                 <img src="{{ asset('asset/image/business/business.webp') }}" alt="" srcset="">
            </div>

            <!-- Text Content -->
            <div class="flex flex-col justify-center space-y-4">
                <p class="text-gray-700 text-lg">
                        <li>
                            <strong>Peace of Mind:</strong>
                            Running a business comes with inherent risks. Business insurance provides peace of mind, knowing you’re financially protected against unexpected events. This allows you to focus on growing your business and serving your customers without the constant worry of potential financial setbacks.
                        </li>
                    </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Financial Protection:</strong>
                        Accidents, legal issues, and natural disasters can pose significant financial threats to your business. Business insurance acts as a financial safety net, covering the costs associated with covered events and preventing you from facing financial hardship. This financial protection ensures the stability and longevity of your business.
                    </li>
                </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Customized Coverage: </strong>
                        Every business has unique needs and risks. Business insurance allows you to customize your coverage to address your specific business activities and potential vulnerabilities. By choosing the right combination of insurance policies, you can ensure your business is adequately protected without incurring unnecessary expenses.
                    </li>
                </p>
            </div>
        </div>
    </section>



    <section class="mb-5">
        <div class="max-w-xl max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-1 gap-8">
            <div>
                <div class="max-w-xl mx-auto mt-10">
                    @if(session('success'))
                    <div class="bg-green-500 text-white p-3 rounded-md mb-4">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-500 text-white p-3 rounded-md mb-4">
                            {{ session('error') }}
                        </div>
                    @endif
            </div>
            <h5 class="max-w-xl text-center text-xl font-extrabold leading-10 tracking-tight text-black sm:text-xl sm:leading-none md:text-xl mb-10">
                Get a free car insurance quote today!
            </h5>
            <form id="motorForm" class="hlabi-form" action="{{ route('medical') }}" method="POST">
                @csrf
                <div class="max-w-xl mt-10">
                    <!-- Step Indicators -->
                    <div class="flex justify-between mb-8">
                        <div class="w-1/4 p-2 text-center">
                            <div id="step-indicator-1" class="w-10 h-10 mx-auto rounded-full bg-gray-300 text-white flex items-center justify-center">1</div>
                            <div class="mt-2 text-sm font-semibold text-gray-700">Step 1</div>
                        </div>
                        <div class="w-1/4 p-2 text-center">
                            <div id="step-indicator-2" class="w-10 h-10 mx-auto rounded-full bg-gray-300 text-white flex items-center justify-center">2</div>
                            <div class="mt-2 text-sm font-semibold text-gray-700">Step 2</div>
                        </div>
                    </div>

                    <!-- Step 1 -->
                    <div class="step" id="step-1">


                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Names</label>
                            <input type="text" required="required" placeholder="Full Name" name="firstname" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="last Name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text"required="required" placeholder="Last Name" name="lastname" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" required="required" placeholder="Email" name="email" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="phone number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" required="required" placeholder="Phone Number" name="phone1" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                        </div>


                        <button class="next-step bg-blue-500 text-white px-6 py-2 rounded-md" style="width: 100%">Next</button>
                    </div>

                    <!-- Step 2 -->
                    <div class="step hidden" id="step-2">
                        <div class="mb-5">
                            <label for="name" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select name="gender" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                            <div class="mb-5">
                                <label for="name" class="block text-sm font-medium text-gray-700">Prefered Language</label>
                                <select name="language" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="Afrikaans">Afrikaans</option>
                                    <option value="Zulu">Zulu</option>
                                    <option value="English">English</option>
                                    <option value="Xhosa">Xhosa</option>
                                </select>
                            </div>


                            <div class="mb-5">
                                <label for="name" class="block text-sm font-medium text-gray-700">Business Cover Type</label>
                                <select name="businesscovertype" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="Professional_Indemnity">Professional Indemnity</option>
                                    <option value="Goods_In_Transit">Goods In Transit</option>
                                    <option value="Motor_Only">Motor Only</option>
                                    <option value="Construction_Earth_Moving_Vehicles">Construction Earth Moving Vehicles</option>
                                    <option value="E_Hailing">E Hailing</option>
                                    <option value="Contractors_All_Risk">Contractors All Risk</option>
                                    <option value="Public_Liability">Public Liability</option>
                                    <option value="Business_All_Risk">Business All Risk</option>
                                    <option value="Building_Insurance">Building Insurance </option>
                                    <option value="Business_Vehicles">Business Vehicles </option>
                                    <option value="Trucking_Fleets">Trucking Fleets </option>
                                    <option value="Tow_Trucks">Tow Trucks </option>
                                    <option value="Legal_Cover">Legal Cover </option>
                                    <option value="All_Aspects">All Aspects </option>
                                    <option value="Unknown">Unknown </option>
                                </select>
                            </div>


                            <div class="mb-5">
                                <label for="name" class="block text-sm font-medium text-gray-700">City</label>
                                <select name="city" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="Bloemfontein">Bloemfontein</option>
                                    <option value="CapeTown">Cape Town</option>
                                    <option value="Durban">Durban</option>
                                    <option value="Johannesburg">Johannesburg</option>
                                    <option value="Pietermaritzburg">Pietermaritzburg</option>
                                    <option value="Polokwane">Polokwane</option>
                                    <option value="PortElizabeth">Port Elizabeth</option>
                                    <option value="Pretoria">Pretoria</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                        <div class="flex items-center items-start mb-5">
                            <input id="checkbox-1" required name="acceptterms" value="true" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" >
                            <label for="checkbox-1" class="text-sm ml-3 font-medium text-gray-900">I agree to the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
                        </div>

                        <div class="flex justify-between">
                                <button class="prev-step bg-gray-300 text-gray-700 px-6 py-2 rounded-md" style="width: 45%">Back</button>

                                <button type="submit" class="submit-step bg-green-500 text-white px-6 py-2 rounded-md" style="width: 45%">Submit</button>

                        </div>
                    </div>
                </div>
                <input type="hidden" name="optinurl" value="https://searchadeal.co.za/" required>
                <input type="hidden" name="optindate" value="{{ now()->format('d/m/Y H:i:s') }}" required>
                <input type="hidden" name="channel" value="JMWU" required>
                <input type="hidden" name="product" value="BUSINESS-INSURANCE1" required>
                <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020" required>
                <input type="hidden" name="affiliateshortcode" value="JMAFFSite15024" required>
                <input type="hidden" name="offer_id" value="497" required>


            </form>


        </div></div>
    </section>






    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const nextButtons = document.querySelectorAll('.next-step');
    const prevButtons = document.querySelectorAll('.prev-step');
    const stepIndicators = document.querySelectorAll('.step-indicator');

    function updateStepIndicator(currentStep) {
        stepIndicators.forEach(indicator => {
            indicator.classList.remove('bg-blue-500');
            indicator.classList.add('bg-gray-300');
        });

        const stepNumber = currentStep.id.split('-')[1];
        const activeIndicator = document.querySelector(`#step-indicator-${stepNumber}`);
        if (activeIndicator) {
            activeIndicator.classList.remove('bg-gray-300');
            activeIndicator.classList.add('bg-blue-500');
        }
    }

    nextButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const currentStep = button.closest('.step');
            const nextStep = currentStep.nextElementSibling;

            if (nextStep && nextStep.classList.contains('step')) {
                currentStep.classList.add('hidden');
                nextStep.classList.remove('hidden');
                updateStepIndicator(nextStep);
            }
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const currentStep = button.closest('.step');
            const prevStep = currentStep.previousElementSibling;

            if (prevStep && prevStep.classList.contains('step')) {
                currentStep.classList.add('hidden');
                prevStep.classList.remove('hidden');
                updateStepIndicator(prevStep);
            }
        });
    });

    // Initialize the first step indicator
    updateStepIndicator(document.getElementById('step-1'));
});

      </script>

</body>
</html>





