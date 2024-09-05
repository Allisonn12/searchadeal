<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Legal Cover</title>
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
                <h1 class="text-4xl font-bold">Navigate life's legal hurdles with ease. Get a free legal cover quote today!</h1>
                 {{-- <p class="mt-4 text-lg">We compare quotes from leading motor warranty providers to find you the perfect coverage for unexpected car repairs.</p> --}}

                 <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    We compare quotes from leading legal providers to find you affordable access to legal expertise when you need it most.
                 </p>

            </div>
        {{-- </div> --}}
    </section>

    <!-- Content Section -->
    <section class="py-16 px-8 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8" style="width:100%; height:70%">
            <!-- Image -->
            <div class="flex justify-center">
                 <img src="{{ asset('asset/image/legal/legal.webp') }}" style="height: 60%; padding-top:70px" alt="" srcset="">
            </div>

            <!-- Text Content -->
            <div class="flex flex-col justify-center space-y-4">
                <p class="text-gray-700 text-lg">
                        <li>
                            <strong>Access to Legal Expertise:</strong>
                            Legal matters often require specialized knowledge and experience. Legal cover grants you access to qualified lawyers who can provide legal advice, represent you in court, and advocate for your rights in various legal situations. You don’t have to navigate the complexities of the legal system alone.
                        </li>
                    </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Reduced Financial Burden: </strong>
                        Legal fees can quickly escalate, creating a significant financial burden. Legal cover helps alleviate this pressure by covering legal costs associated with covered matters. This allows you to seek professional legal assistance without worrying about the hefty price tag.
                    </li>
                </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Peace of Mind: </strong>
                        Life throws unexpected curveballs, and legal issues can be stressful and overwhelming. Having legal cover provides peace of mind, knowing you have access to professional support if you face a legal challenge. It empowers you to approach legal situations with more confidence and clarity.
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
            <form id="motorForm" class="hlabi-form" action="{{ route('legal') }}" method="POST">
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
                <input type="hidden" name="product" value="LEGAL-COVER" required>
                <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020" required>
                <input type="hidden" name="affiliateshortcode" value="JMAFFSite15023" required>
                <input type="hidden" name="offer_id" value="383" required>

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





