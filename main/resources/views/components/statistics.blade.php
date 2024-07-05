<style>
    .container {
        display: flex;
        width: 250px;
        padding: 25px 0;
        border-radius: 8px;
        /* background: #ffffff; */
        /* box-shadow: 0px 7px 15px #dedbdb; */
        row-gap: 15px;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease-in-out;
    }

    .container:hover {
        transform: scale(1.1);
    }

    .circular-progress {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: conic-gradient(#163172 3.6deg, #ededed 0deg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .circular-progress::before {
        content: "";
        position: absolute;
        height: 120px;
        width: 120px;
        border-radius: 50%;
        background-color: #ffffff;
    }

    .progress-value {
        position: relative;
        font-size: 40px;
        font-weight: 600;
        color: #1e56a0;
    }

    .text {
        font-size: 20px;
        font-weight: 600;
        color: #606060;
    }

    .ROUN {
        border-start-start-radius: 600px;
        border-end-start-radius: 600px;
    }

    
    #FLOAT2 {
        z-index: 0;
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(to bottom, #001eff, #235cb3);
        opacity: 0.1;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular2 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT3 {
        z-index: 0;
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(to bottom, #001eff, #235cb3);
        opacity: 0.1;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular3 40s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    
    @keyframes moveCircular2 {
        0% {
            transform: translate(0%, 0%) rotate(0deg) translateX(200px) rotate(0deg);
        }

        100% {
            transform: translate(20%, 20%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }

    @keyframes moveCircular3 {
        0% {
            transform: translate(120%, 120%) rotate(0deg) translateX(300px) rotate(0deg);
        }

        100% {
            transform: translate(150%, 150%) rotate(360deg) translateX(300px) rotate(-360deg);
        }
    }
</style>

<style>
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    @keyframes slide-up {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slide-up1 {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .slide-up1 {
        animation: slide-up1 1s ease-out forwards;
    }

    .slide-up {
        animation: slide-up 1s ease-out forwards;
    }

    @keyframes slide-up2 {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slide-up3 {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .slide-up2 {
        animation: slide-up2 1s ease-out forwards;
    }

    .slide-up3 {
        animation: slide-up3 1s ease-out forwards;
    }
</style>

{{-- SECTION 2 --}}
<section class="bg-gray-100">
    <div id="FLOAT5"></div>
    <div class="grid max-w-screen-xl px-4 py-8 mt-10 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="col-span-12 h-20 mb-2">
            <div class="flex justify-center items-center mb-2">
                <h1 class="font-medium text-5xl text-gray-700 z-30">Pourquoi nous choisir?</h1>
            </div>
            <div class="flex justify-center items-center">
                <p class="text-2xl font-normal text-gray-700 z-30">Votre succès est notre mission</p>
            </div>
        </div>

        <div class="flex justify-center items-center gap-5 px-4 lg:px-28 col-span-12">
            <!-- Conditionally remove this div on md screens -->
            <div class="hidden md:flex w-full lg:w-1/2 h-full grid justify-center items-center relative">
                <img class="w-[70%] h-[70%]" src="AP/18.png" alt="">
                <div id="animated-elipse" class="ELIPSE lg:w-32 lg:h-32 rounded-full bg-blue-700 absolute -bottom-20 right-24 opacity-75"></div>
                <img id="animated-img" class="IMG absolute -bottom-10 right-4 opacity-0 transform translate-y-full" src="AP/19.png" alt="">
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 justify-center items-center w-full lg:w-1/2 h-full py-10">
                <div class="container col-span-1 md:col-span-3 lg:col-span-3">
                    <div class="circular-progress CP0">
                        <span class="progress-value PV0">0%</span>
                    </div>
                    <span class="text">Acquisitions</span>
                </div>

                <div class="container col-span-1 md:col-span-3 lg:col-span-3">
                    <div class="circular-progress CP1">
                        <span class="progress-value PV1">0%</span>
                    </div>
                    <span class="text">HTML & CSS</span>
                </div>

                <div class="container col-span-1 md:col-span-3 lg:col-span-3">
                    <div class="circular-progress CP2">
                        <span class="progress-value PV2">0%</span>
                    </div>
                    <span class="text">Growth Rate</span>
                </div>

                <div class="container col-span-1 md:col-span-3 lg:col-span-3">
                    <div class="circular-progress CP3">
                        <span class="progress-value PV3">0%</span>
                    </div>
                    <span class="text">Founder NPS</span>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- section 3 --}}
<section class="flex flex-col lg:flex-row py-16">
    <div id="FLOAT2"></div>
    <div id="FLOAT3"></div>
    <div class="w-full lg:w-1/6 hidden lg:block"></div>
    <div class="lg:rounded-l-full  lg:pl-40 pl-0 flex-grow xl:w-full h-80 bg-blue-900 relative flex flex-col justify-center items-center lg:items-start">
        <h1 class="font-bold lg:text-5xl sm:text-5xl mb-4 text-white text-center lg:text-right">
            CE QUE NOUS FAISONS.
        </h1>
        <p class="w-11/12 sm:w-3/4 lg:w-2/3 text-white text-xl text-center lg:text-left">
            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing
            <span class="font-medium">layouts and visual mockups. Lorem ipsum is placeholder text commonly <span class="font-medium">used in the graphic,</span> print, and publishing.</span>
        </p>
        <div id="animated-elipse2" class="absolute -bottom-28 right-36 w-36 h-36 bg-blue-600 rounded-full opacity-50 hidden md:block"></div>
        <img id="animated-img2" class="absolute -bottom-28 right-16 hidden md:block" src="AP/19.png" alt="">
    </div>
</section>




<script>
    document.addEventListener("DOMContentLoaded", () => {
        let CP0 = document.querySelector(".CP0"),
            PV0 = document.querySelector(".PV0"),
            CP1 = document.querySelector(".CP1"),
            PV1 = document.querySelector(".PV1"),
            CP2 = document.querySelector(".CP2"),
            PV2 = document.querySelector(".PV2"),
            CP3 = document.querySelector(".CP3"),
            PV3 = document.querySelector(".PV3");

        let progressStartValue0 = 0,
            progressStartValue1 = 0,
            progressStartValue2 = 0,
            progressStartValue3 = 0,
            progressEndValue0 = 60,
            progressEndValue1 = 70,
            progressEndValue2 = 90,
            progressEndValue3 = 45,
            speed = 15;

        let progress = setInterval(() => {
            if (progressStartValue0 < progressEndValue0) {
                progressStartValue0++;
                PV0.textContent = `${progressStartValue0}%`;
                CP0.style.background = `conic-gradient(#1e56a0 ${progressStartValue0 * 3.6}deg, #ededed ${progressStartValue0 * 3.6}deg)`;

            }

            if (progressStartValue1 < progressEndValue1) {
                progressStartValue1++;
                PV1.textContent = `${progressStartValue1}%`;
                CP1.style.background = `conic-gradient(#1e56a0 ${progressStartValue1 * 3.6}deg, #ededed ${progressStartValue1 * 3.6}deg)`;
            }

            if (progressStartValue2 < progressEndValue2) {
                progressStartValue2++;
                PV2.textContent = `${progressStartValue2}%`;
                CP2.style.background = `conic-gradient(#1e56a0 ${progressStartValue2 * 3.6}deg, #ededed ${progressStartValue2 * 3.6}deg)`;
            }

            if (progressStartValue3 < progressEndValue3) {
                progressStartValue3++;
                PV3.textContent = `${progressStartValue3}%`;
                CP3.style.background = `conic-gradient(#1e56a0 ${progressStartValue3 * 3.6}deg, #ededed ${progressStartValue3 * 3.6}deg)`;
            }

            if (progressStartValue0 >= progressEndValue0 &&
                progressStartValue1 >= progressEndValue1 &&
                progressStartValue2 >= progressEndValue2 &&
                progressStartValue3 >= progressEndValue3) {
                clearInterval(progress);
            }
        }, speed);
    });
</script> 


<script>
    document.addEventListener("scroll", function () {
        const imgElement = document.getElementById('animated-img');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    imgElement.classList.add('slide-up');
                }
            });
        });

        observer.observe(imgElement);
    });
</script>

<script>
    document.addEventListener("scroll", function () {
        const imgElement = document.getElementById('animated-elipse');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    imgElement.classList.add('slide-up1');
                }
            });
        });

        observer.observe(imgElement);
    });
</script>


<script>
    document.addEventListener("scroll", function () {
        const imgElement = document.getElementById('animated-img2');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    imgElement.classList.add('slide-up2');
                }
            });
        });

        observer.observe(imgElement);
    });
</script>

<script>
    document.addEventListener("scroll", function () {
        const imgElement = document.getElementById('animated-elipse2');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    imgElement.classList.add('slide-up3');
                }
            });
        });

        observer.observe(imgElement);
    });
</script>