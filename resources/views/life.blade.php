<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Life Cover</title>
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
                <h1 class="text-4xl font-bold">Protect your loved ones. Get a free life insurance quote today!</h1>
                 {{-- <p class="mt-4 text-lg">We compare quotes from leading motor warranty providers to find you the perfect coverage for unexpected car repairs.</p> --}}

                 <p class="max-w-md mx-auto mt-3 text-base text-whote-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
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
                 <img src="{{ asset('asset/image/life/life.webp') }}" alt="" srcset="">
            </div>

            <!-- Text Content -->
            <div class="flex flex-col justify-center space-y-4">
                <p class="text-gray-700 text-lg">
                        <li>
                            <strong>Financial Security: </strong>
                            Life insurance protects your loved ones from financial hardship after your passing. Without a financial safety net, your family could struggle to cover essential expenses like mortgage payments, car loans, and daily living costs. This can create additional stress and disrupt their lives during an already difficult time.
                        </li>
                    </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Peace of Mind: </strong>
                        Knowing your loved ones are financially protected with life insurance can bring immense peace of mind. You can focus on living your life to the fullest and enjoying precious moments with your family without the worry of leaving them burdened with financial concerns.
                    </li>
                </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Customization: </strong>
                        Life insurance is not a one-size-fits-all solution. You can choose the coverage amount and type of policy that best suits your specific needs and budget. This allows you to tailor your coverage to your unique circumstances, ensuring your loved ones receive the financial support they need while remaining financially responsible.
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
            <form id="motorForm" class="hlabi-form" action="{{ route('life') }}" method="POST">
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
                            <label for="name" class="block text-sm font-medium text-gray-700">Individual Funeral Cover</label>
                            <select name="gender" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="Male">R5 000 : R26 pm</option>
                                <option value="Female">R10 000 : R36 pm</option>
                                <option value="Female">R15 000 : R36 pm</option>
                                <option value="Female">R20 000 : R36 pm</option>
                                <option value="Female">R25 000 : R36 pm</option>
                                <option value="Female">R30 000 : R36 pm</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="name" class="block text-sm font-medium text-gray-700">Family Funeral Cover</label>
                            <select name="gender" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="Male">R5 000 : R26 pm</option>
                                <option value="Female">R10 000 : R36 pm</option>
                                <option value="Female">R15 000 : R36 pm</option>
                                <option value="Female">R20 000 : R36 pm</option>
                                <option value="Female">R25 000 : R36 pm</option>
                                <option value="Female">R30 000 : R36 pm</option>
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
                <input type="hidden" name="channel" value="JMAff" required>
                <input type="hidden" name="product" value="Vehicle Tracking" required>
                <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020" required>
                <input type="hidden" name="affiliateshortcode" value="JMAFFSite15019" required>
                <input type="hidden" name="offer_id" value="1523" required>

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





