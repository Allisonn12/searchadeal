<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Insureance</title>
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
                <h1 class="text-4xl font-bold">Don't drive uninsured. Get a free car insurance quote today!</h1>
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
                 <img src="{{ asset('asset/image/car/track.webp') }}" alt="" srcset="">
            </div>

            <!-- Text Content -->
            <div class="flex flex-col justify-center space-y-4">
                <p class="text-gray-700 text-lg">
                        <li>
                            <strong>Peace of Mind:</strong>
                            Constant information about your car’s location, whether parked or on the move, provides immense peace of mind. This eliminates unnecessary worry and allows you to focus on your daily activities instead of constantly fretting over your vehicle’s safety.
                        </li>
                    </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Enhanced Security:</strong>
                        Acting as a deterrent to theft, car tracking systems significantly increase the chances of recovering a stolen vehicle. The real-time location data aids authorities in quickly locating your car, minimizing potential damages and emotional distress.
                    </li>
                </p>
                <p class="text-gray-700 text-lg">
                    <li>
                        <strong>Reduced Insurance Costs: </strong>
                        Several insurance companies offer discounts on premiums for vehicles equipped with car tracking systems. These systems demonstrate a proactive approach to vehicle security, making your car statistically less risky to insure, translating to potential cost savings.
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
            <form id="motorForm" class="hlabi-form" action="{{ route('car') }}" method="POST">
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
                            <label for="phone number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" required="required" placeholder="Phone Number" name="phone1" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="Gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select name="gender" required id="" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <button class="next-step bg-blue-500 text-white px-6 py-2 rounded-md" style="width: 100%">Next</button>
                    </div>

                    <!-- Step 2 -->
                    <div class="step hidden" id="step-2">
                        <div class="mb-5">
                            <label for="name" class="block text-sm font-medium text-gray-700">Current Insurer</label>
                            <select name="currentinsurer" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="None">None</option>
                                <option value="Auto and General">Auto and General</option>
                                <option value="Discovery">Discovery</option>
                                <option value="King Price">King Price</option>
                                <option value="MiWay">MiWay</option>
                                <option value="Budget Insurance">Budget Insurance</option>
                                <option value="Momentum">Momentum</option>
                                <option value="Hollard">Hollard</option>
                                <option value="Santam">Santam</option>
                                <option value="OUTsurance">OUTsurance</option>
                                <option value="First_for_Women">First for Women</option>
                                <option value="Virseker">Virseker</option>
                                <option value="Standard_Bank">Standard Bank</option>
                                <option value="Dial_Direct">Dial Direct</option>
                                <option value="Iwyze">Iwyze</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="name" class="block text-sm font-medium text-gray-700">Vehicle Make</label>
                            <select name="vehiclemake" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="Audi">Audi</option>
                                <option value="AlfaRomeo">Alfa Romeo</option>
                                <option value="BMW">BMW</option>
                                <option value="Mercedes">Mercedes</option>
                                <option value="Buick">Buick</option>
                                <option value="Cadillac">Cadillac</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Chrysler">Chrysler</option>
                                <option value="Citroen">Citroen</option>
                                <option value="Daewoo">Daewoo</option>
                                <option value="Daihatsu">Daihatsu</option>
                                <option value="Ferrari">Ferrari</option>
                                <option value="Fiat">Fiat</option>
                                <option value="Ford">Ford</option>
                                <option value="GMC">GMC</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Isuzu">Isuzu</option>
                                <option value="Jaguar">Jaguar</option>
                                <option value="Jeep">Jeep</option>
                                <option value="Land">Land</option>
                                <option value="TangeRover">Range Rover</option>
                                <option value="Lexus">Lexus</option>
                                <option value="mazda">mazda</option>
                                <option value="Mini">Mini</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Opel">Opel</option>
                                <option value="Peugeot">Peugeot</option>
                                <option value="Renault">Renault</option>
                                <option value="Smart">Smart</option>
                                <option value="Subaru">Subaru</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Kia">Kia</option>
                                <option value="Citreon">Citreon</option>
                                <option value="Dihatsu">Dihatsu</option>
                                <option value="Volvo">Volvo</option>
                                <option value="Honda">Honda</option>
                                <option value="Mahindra">Mahindra</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="name" class="block text-sm font-medium text-gray-700">Prefered Languages</label>
                            <select name="language" required id="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="English">English</option>
                                <option value="SePedi">SePedi</option>
                                <option value="Afrikaans">Afrikaans</option>
                                <option value="SeSotho">SeSotho</option>
                                <option value="IsiNdebele">IsiNdebele</option>
                                <option value="SiSwazi">SiSwazi</option>
                                <option value="XiTsonga">XiTsonga</option>
                                <option value="SeTswana">SeTswana</option>
                                <option value="Tshivenda">Tshivenda</option>
                                <option value="IsiXhosa">IsiXhosa</option>
                                <option value="IsiZulu">IsiZulu</option>
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
                <input type="hidden" name="channel" value="JMAff" required>
                <input type="hidden" name="product" value="JMCar" required>
                {{-- <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020" required>
                <input type="hidden" name="affiliateshortcode" value="JMAFFSite15024" required> --}}
                <input type="hidden" name="offer_id" value="14" required>


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





