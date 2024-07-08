<style>

    #FLOATT {
        z-index: 0;
        position: absolute;
        top: 200px;
        width: 400px;
        height: 400px;
        background: linear-gradient(to bottom, #00127a, #235cb3);
        opacity: 0.8;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 8s linear infinite;
    }

    #FLOAT {
        z-index: 0;
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(to bottom, #001eff, #235cb3);
        opacity: 0.1;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT1 {
        z-index: 0;
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(to bottom, #001eff, #235cb3);
        opacity: 0.1;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular1 40s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    @keyframes spinx {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes moveCircular {
        0% {
            transform: translate(0%, 0%) rotate(0deg) translateX(200px) rotate(0deg);
        }

        100% {
            transform: translate(20%, 20%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }

    @keyframes moveCircular1 {
        0% {
            transform: translate(120%, 120%) rotate(0deg) translateX(300px) rotate(0deg);
        }

        100% {
            transform: translate(150%, 150%) rotate(360deg) translateX(300px) rotate(-360deg);
        }
    }


</style>

<section class="mx-8 section-bg" style="min-height: 75vh;">
    <div id="FLOAT"  class=" lg:block md:hidden xl: sm:hidden"></div>
    <div id="FLOAT1" class=" lg:block md:hidden xl: sm:hidden"></div>
    <div class="w-full h-20"></div>
    <div class="grid max-w-screen-xl lg:gap-8 xl:gap-0 lg:grid-cols-12 h-full mx-16">
        <div class="mr-auto place-self-center lg:col-span-7 mb-12 lg:mb-0">
            <h1 class="max-w-2xl mb-5 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                Payments tool for software companies
            </h1>
            <p class="max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.
            </p>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 w-full mb-10">
                <div class="p-1 rounded-md hover:scale-105 transition-transform  col-span-1 flex flex-col justify-center items-center gap-2">
                        <img class="w-9 h-9" src="AP/112.png" alt="">
                    <h1 class="text-center font-medium text-blue-900 ">TPE/PME</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform  col-span-1 flex flex-col justify-center items-center gap-2">
                        <img class="w-9 h-9" src="AP/110.png" alt="">
                    <h1 class="text-center font-medium text-blue-900">Cooperative</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform  col-span-1 flex flex-col justify-center items-center gap-2">
                        <img class="w-9 h-9" src="AP/111.png" alt="">
                        <h1 class="text-center font-medium text-blue-900 ">Etablissement</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform  col-span-1 flex flex-col justify-center items-center gap-2">
                        <img class="w-9 h-9" src="AP/109.png" alt="">
                    <h1 class="text-center font-medium text-blue-900">Association</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform  col-span-1 flex flex-col justify-center items-center gap-2">
                        <img class="w-9 h-9" src="AP/115.png" alt="">
                    <h1 class="text-center font-medium text-blue-900 ">Startup</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform  col-span-1 flex flex-col justify-center items-center gap-2">
                        <img class="w-9 h-9 " src="AP/107.png" alt="">
                    <h1 class="text-center font-medium text-blue-900 ">Professional</h1>
                </div>
            </div>
            <a href="{{route('booking_now')}}"
               class="inline-flex items-center justify-center px-5 py-3 mr-3 mb-5 text-base font-medium text-center text-white rounded-lg bg-blue-900 hover:bg-blue-800">
                Booking Now
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <!-- Conditionally remove this div on md screens -->
        <div class="hidden h-full md:flex col-span-5 justify-end items-end">
            <div id="FLOATT"></div>
            <img src="AP/114.png" alt="mockup" class=" h-5/6 z-20">
        </div>
    </div>
</section>
