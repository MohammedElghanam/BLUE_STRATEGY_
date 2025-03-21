
<style>
#FLOATT {
    z-index: 0;
    /* position: absolute;
    top: 150px; */
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

.FILTER{
    /* background-color: rgba(255, 255, 255, 0.733); */
    background-color: rgba(0, 68, 255, 0.518);
    border-radius: 50%;
    filter: blur(40px);
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

@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0.5);
    }
    100% {
        opacity: 1;
        transform: scale(1.5);
    }
}

.SPIN {
    background-color: red;
}
.XS {
    font-size: 12px;
    line-height: 16px;
}
</style>

<section class="bg-gray-100" style="min-height: 75vh;">
    <div id="FLOAT" class="lg:block hidden"></div>
    <div id="FLOAT1" class="lg:block hidden"></div>
    <div class="w-full h-0 lg:h-20"></div>
    <div class="grid max-w-screen-xl lg:gap-8 xl:gap-0 lg:grid-cols-12 h-full lg:mx-16 mx-6 ">
        <div class="mr-auto place-self-center lg:col-span-8 mb-12 lg:mb-0 order-2 lg:order-1">
            <div class="w-full h-0 lg:h-10"></div>
            <div>
                <h1 class="w-full text-sm font-bold mb-2 leading-none md:text-5xl xl:text-3xl dark:text-white">
                    Élevez vos projets vers la réussite et l'innovation
                </h1>
                <h1 class="max-w-2xl mb-5 text-sm font-bold leading-none md:text-5xl xl:text-3xl dark:text-white">
                    avec le cabinet BLUE STRATEGY
                </h1>
            </div>
            <p class="max-w-2xl font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                Bienvenue chez BLUE STRATEGY ! <br> Nous transformons vos visions et vos idées en succès concrets grâce à notre expertise en études, management de projets et accompagnement multidisciplinaire. Nous développons des solutions parfaitement adaptées à vos besoins spécifiques, garantissant performance durable et croissance spectaculaire.
            </p>
            <p class="max-w-2xl font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 mb-4">
                Découvrez comment nous pouvons révolutionner vos ambitions et atteindre ensemble de nouveaux sommets d'excellence. Rejoignez-nous pour écrire le prochain chapitre de votre réussite !
            </p>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 w-full mb-10">
                <div class="p-1 rounded-md hover:scale-105 transition-transform col-span-1 flex flex-col justify-center items-center gap-2">
                    <img class="w-9 h-9" src="AP/112.png" alt="">
                    <h1 class="XS text-center font-medium text-blue-900">TPE/PME/GC</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform col-span-1 flex flex-col justify-center items-center gap-2">
                    <img class="w-9 h-9" src="AP/110.png" alt="">
                    <h1 class="XS text-center font-medium text-blue-900">ONG/ASSOCIATIONS</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform col-span-1 flex flex-col justify-center items-center gap-2">
                    <img class="w-9 h-9" src="AP/111.png" alt="">
                    <h1 class="XS text-center font-medium text-blue-900">ETABLISSEMENTS</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform col-span-1 flex flex-col justify-center items-center gap-2">
                    <img class="w-9 h-9" src="AP/109.png" alt="">
                    <h1 class="XS text-center font-medium text-blue-900">COOPERATIVES</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform col-span-1 flex flex-col justify-center items-center gap-2">
                    <img class="w-9 h-9" src="AP/115.png" alt="">
                    <h1 class="XS text-center font-medium text-blue-900">STARTUPS</h1>
                </div>
                <div class="p-1 rounded-md hover:scale-105 transition-transform col-span-1 flex flex-col justify-center items-center gap-2">
                    <img class="w-9 h-9" src="AP/107.png" alt="">
                    <h1 class="XS text-center font-medium text-blue-900">PROFESSIONNELS</h1>
                </div>
            </div>
            <a href="{{route('booking_now')}}"
               class="relative inline-flex items-center justify-center px-5 py-3 mr-3 mb-5 text-base font-medium text-center text-white rounded-md bg-blue-700 hover:bg-blue-800">
                Reservez votre RDV
                <img class="w-6 h-6 ml-2 -mr-1" src="B_U/19.png" alt="">
                <div class="w-5 h-5 absolute -top-2 -right-2 flex justify-center items-center">
                    <span class="relative flex h-3 w-3">
                        <span class="SPIN animate-ping absolute inline-flex h-full w-full rounded-full opacity-75"></span>
                        <span class="SPIN relative inline-flex rounded-full h-3 w-3"></span>
                    </span>
                </div>
            </a>
        </div>
        <div  id="img_zoom" class="flex col-span-4 justify-center lg:justify-end items-end order-1 lg:order-2 mb-6 lg:mb-0  rounded-3xl lg:rounded-none relative">
            <div id="FLOATT" class=" absolute top-20 -left-5 lg:left-0 lg:top-40 w-64 h-64 lg:w-96 lg:h-96 hidden lg:block"></div>
            <div class=" FILTER block lg:hidden w-52 h-52 absolute left-50% top-32 "></div>

            {{-- <div class=" FILTER block lg:hidden w-44 h-44 absolute -left-16 top-10 "></div>
            <div class=" FILTER block lg:hidden w-44 h-44 absolute -right-0 -bottom-20 "></div> --}}
            
            <img  src="AP/117.png" alt="mockup" class="h-5/6 z-20 mt-0 lg:mt-3">
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contentElement = document.getElementById('img_zoom');

        function animateOnScroll(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    contentElement.style.animation = "zoomIn 2s ease forwards";
                    observer.unobserve(entry.target);
                }
            });
        }

        const observer = new IntersectionObserver(animateOnScroll, { threshold: 0.5 });
        observer.observe(contentElement);
    });
</script>
