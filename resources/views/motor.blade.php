<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motor Warrenty</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    --}}
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: Arial, sans-serif;
            max-width: 100%;
        }
        .banner{
            background: #6ec1e4;
            /* background: #000000; */
            /* background:#6EC1E4; */
            /* color: #fff;
            text-align: center;
            height: auto; */
        }
        .banner-text{
            /* height: 291px;
            display: block; */
        }
        .banner-text h1{
            font-size: 70px;
            width: 60%;
            margin: 0 auto;
            line-height: 1;
            /* display: flex;
            justify-content: center;
            align-items: center;
            line-height: 78px;
            text-align: center;
            letter-spacing: normal; */
        }
        /* .banner-text p{
            font-size: 50px;
            width: 60%;
            margin: 0 auto;
            line-height: 1;
        } */

        @media screen and (max-width:767px){
            /*.banner-text{
                height: auto;
                text-align: center;
            } */
            .banner-text h1{
                font-size: 36px;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>
<body>




    <!-- Header Section -->
    <section class="banner text-white text-center py-16">
        {{-- <div class="banner"> --}}
            <div class="sm:text-lg banner-text">
                <h1 class="text-4xl font-bold">Drive with confidence. Get a free motor warranty quote today!</h1>
                 {{-- <p class="mt-4 text-lg">We compare quotes from leading motor warranty providers to find you the perfect coverage for unexpected car repairs.</p> --}}

                 <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                 We compare quotes from leading motor warranty providers to find you the perfect coverage for unexpected car repairs.</p>

            </div>
        {{-- </div> --}}
    </section>

    <!-- Content Section -->
    <section class="py-16 px-8 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Image -->
            <div class="flex justify-center">
                 <img src="{{ asset('asset/image/car/Car-Tracker.webp') }}" alt="" srcset="">
            </div>

            <!-- Text Content -->
            <div class="flex flex-col justify-center space-y-4">
                <p class="text-gray-700 text-lg">
                        <li>
                            <strong>Financial Protection:</strong> Unexpected car repairs can be a significant financial burden. A motor warranty shields you from these unexpected costs by covering repairs for essential components within the policy terms. This financial safety net ensures you're not left scrambling for funds to get your car back on the road.
                        </li>
                    </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Peace of Mind:</strong> Knowing you’re protected against unforeseen mechanical breakdowns eliminates unnecessary stress and uncertainty while driving. You can focus on enjoying the journey and reaching your destination without constantly worrying about potential car troubles and hefty repair bills.

                    </li>
                </p>
                <p class="text-gray-700 text-lg">
                    <li>
                    <strong>Extended Ownership Peace:</strong> Some motor warranties offer coverage beyond the manufacturer's warranty, allowing you to keep your vehicle protected for an extended period.
                    </li>
                </p>
            </div>
        </div>
    </section>



    <section class="mb-5">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-1 gap-8">
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

            <form id="motorForm" action="{{ route('motor_form') }}" method="POST">
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
                            <label for="name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text"required="required" placeholder="Last Name" name="lastname" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" required="required" placeholder="Phone Number" name="phone1" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                        </div>


                        <button class="next-step bg-blue-500 text-white px-6 py-2 rounded-md" style="width: 100%">Next</button>
                    </div>

                    <!-- Step 2 -->
                    <div class="step hidden" id="step-2">
                        <div class="mb-5">
                            <label for="name" class="block text-sm font-medium text-gray-700">Prefered Language</label>
                            <select name="language" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="Afrikaans">Afrikaans</option>
                                <option value="Zulu">Zulu</option>
                                <option value="English">English</option>
                                <option value="Xhosa">Xhosa</option>
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
                <input type="hidden" name="product" value="Motor Warranty" required>
                <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020" required>
                <input type="hidden" name="affiliateshortcode" value="JMAFFSite15021" required>
                <input type="hidden" name="offer_id" value="387" required>

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





