<style>
    .BG {
        /* background-color: #9FD3C7; */
        background: linear-gradient(to bottom, #ffffff, #fefefe);
        opacity: 0.1;
        border-radius: 45% 55% 47% 53% / 39% 43% 57% 61% ;
        animation: spinx 9s linear infinite;;
    }

    .BG1{
        background-color: #1d0196;
    }

    .blur-effect {
        background-color: rgb(255, 255, 255, 0.1);
        border: 1px solid rgb(255, 255, 255, 0.3);
        backdrop-filter: blur(20px); 
        -webkit-backdrop-filter: blur(20px);
    }

    @keyframes spinx {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes zoomIn {
        0% {
            opacity: 0;
            transform: scale(0.5); /* Start smaller */
        }
        100% {
            opacity: 1;
            transform: scale(1); /* End at normal size */
        }
    }

    .text-animate {
        opacity: 0;
        transform: translateX(-50%);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .text-animate.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .SCALE:hover {
        transform: scale(1.1);
    }

</style>

<section class="COUNT grid grid-cols-12 mb-12 my-10 relative bg-blue-900 select-none" style="height: 125vh;">
    <!-- Hidden elements on small screens -->
    <div id="founder" class="hidden"></div>

    <!-- Main content -->
    <div class="h-full w-full flex lg:absolute">
        <!-- Text content section -->
        <div class="w-full lg:w-3/5 py-32 pl-28 lg:py-32 lg:pl-28 flex flex-col justify-center">
            <div class="select-none text-animate text-white">
                <p class="font-bold text-blue-400 text-base lg:text-xl mb-4 mt-8">
                    « Chez BLUE STRATEGY, nous ne nous contentons pas de rêver d'un avenir meilleur, nous le construisons activement. »
                </p>
                <p>
                    Chez BLUE STRATEGY, nous ne faisons pas que suivre les tendances – nous les créons. Notre cabinet incarne une vision audacieuse et avant-gardiste, en parfaite harmonie avec les objectifs du nouveau modèle de développement économique du Maroc.
                </p>
                <p class="mb-4">
                    Avec une expertise éprouvée sur le terrain et une passion pour le développement économique, l'accompagnement, l'accélération des structures, et l'innovation sociale, j'ai eu le privilège de collaborer avec des clients de renom et de mener à bien des projets transformateurs à travers le Maroc. Aujourd'hui, entourée d'une équipe exceptionnelle de plus de 25 experts, nous sommes prêts à repousser les limites et à transformer les idées en réalité.
                </p>
                <p class="mb-4">
                    Notre mission est claire : catalyser le développement de la région Marrakech-Safi, du Maroc et de l'Afrique. En renforçant le tissu économique local, nous visons à élever et accélérer les structures, en particulier les petites entreprises et organisations, et à contribuer à l'émancipation des idées, des projets de croissance et des talents créateurs locaux. Nous aspirons à les aider à devenir les leaders de demain. »
                </p>
                <p class="mb-4">
                    BLUE STRATEGY se distingue par son engagement inébranlable envers l'accompagnement, l'accélération, l'alignement stratégique et le développement des territoires. Nous sommes des pionniers du développement local, de l'innovation sociale et économique, et de l'économie sociale et solidaire, transformant les défis en opportunités et guidant nos partenaires vers un avenir prospère et durable.
                </p>
                <p class="mb-4">
                    <h class="font-semibold">Mme Houda BELAYDI</h>
                    <h class="font-semibold">Founder CEO du cabinet BLUE STRATEGY</h>
                    <h class="font-medium">
                        Experte senior en accompagnement des entreprises et organisations, 
                        en management et en développement des projets
                    </h>
                </p>
            </div>
        </div>

        <!-- Profile picture and social links section -->
        <div id="ri" class="w-full lg:w-2/5 h-full flex items-center justify-start relative hidden lg:flex">
            <div id="conten1" class="w-80 h-80 rounded-full absolute right-20 top-32 z-30 flex justify-center items-center pt-5">
                <div class="BG absolute -top-0 right-0 rounded-b-md rotate-45" style="width: 330px; height:350px;"></div>
                <img class="rounded-full z-20" src="AP/1.jpeg" alt="" style="width: 300px; height:300px;">
                <div class="w-28 h-28 rounded-full absolute top-0 -right-4 z-30 flex justify-center items-center rotate-90">
                    <img src="AP/4.svg" alt="" class="w-10 h-10 absolute left-3 bottom-10">
                </div>
                <div class="w-20 h-20 absolute top-10 left-0 flex flex-col justify-center items-center gap-5 z-40 ">
                    <a href="https://www.linkedin.com/in/houda-belaydi-4442a3b3" class="SCALE -top-7 -right-2 absolute col-span-2 flex items-end justify-center" aria-label="Twitter link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                            <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4M7.65 13.979H5.706V7.723H7.65zm-.984-7.024c-.614 0-1.011-.435-1.011-.973c0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973m8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355c-.537 0-.856.371-.997.728c-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01c1.279 0 2.238.857 2.238 2.699z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/houda.bel.56614?mibextid=ZbWKwL" class="SCALE bottom-14 left-6 absolute col-span-1 flex justify-end" aria-label="Facebook link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                            <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/houda.belaydi1?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" class="SCALE bottom-5 left-0 absolute col-span-1" aria-label="Linkedin link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="white" d="M12 9.52A2.48 2.48 0 1 0 14.48 12A2.48 2.48 0 0 0 12 9.52m9.93-2.45a6.53 6.53 0 0 0-.42-2.26a4 4 0 0 0-2.32-2.32a6.53 6.53 0 0 0-2.26-.42C15.64 2 15.26 2 12 2s-3.64 0-4.93.07a6.53 6.53 0 0 0-2.26.42a4 4 0 0 0-2.32 2.32a6.53 6.53 0 0 0-.42 2.26C2 8.36 2 8.74 2 12s0 3.64.07 4.93a6.86 6.86 0 0 0 .42 2.27a3.94 3.94 0 0 0 .91 1.4a3.89 3.89 0 0 0 1.41.91a6.53 6.53 0 0 0 2.27.42C8.36 22 8.74 22 12 22s3.64 0 4.93-.07a6.53 6.53 0 0 0 2.26-.42a3.89 3.89 0 0 0 1.4-.91a3.94 3.94 0 0 0 .91-1.4a6.53 6.53 0 0 0 .42-2.27C22 15.64 22 15.26 22 12s0-3.64-.07-4.93zM9.15 16.12h-1.92v-5.12h1.92zm-.96-6.1a1.12 1.12 0 1 1 1.12-1.12a1.12 1.12 0 0 1-1.12 1.12zm11.24 6.1h-1.92v-2.7c0-.65-.13-1.2-.37-1.68a1.46 1.46 0 0 0-1.3-.69c-.71 0-1.2.27-1.54.68a2.19 2.19 0 0 0-.37 1.25v2.47h-1.92v-3.43c0-.65-.15-1.2-.43-1.68a1.7 1.7 0 0 0-1.36-.69c-.82 0-1.34.29-1.7.68a2.15 2.15 0 0 0-.29 1.42v3.43h-1.92v-4.99c0-.67.1-1.3.3-1.89a4.05 4.05 0 0 1 1.32-1.76c.62-.46 1.35-.74 2.14-.74c.95 0 1.78.34 2.34.84a3.88 3.88 0 0 1 1.37 2.71c.13.7.2 1.43.2 2.19v3.95z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- <!-- Text content section for smaller screens -->
        <div id="ren" class="w-full lg:hidden flex flex-col justify-center text-animate text-white py-32 pl-10">
            <div class="select-none">
                <p class="font-bold text-blue-400 text-xl mb-4 mt-8">
                    « Chez BLUE STRATEGY, nous ne nous contentons pas de rêver d'un avenir meilleur, nous le construisons activement. »
                </p>
                <p>
                    Chez BLUE STRATEGY, nous ne faisons pas que suivre les tendances – nous les créons. Notre cabinet incarne une vision audacieuse et avant-gardiste, en parfaite harmonie avec les objectifs du nouveau modèle de développement économique du Maroc.
                </p>
                <p class="mb-4">
                    Avec une expertise éprouvée sur le terrain et une passion pour le développement économique, l'accompagnement, l'accélération des structures, et l'innovation sociale, j'ai eu le privilège de collaborer avec des clients de renom et de mener à bien des projets transformateurs à travers le Maroc. Aujourd'hui, entourée d'une équipe exceptionnelle de plus de 25 experts, nous sommes prêts à repousser les limites et à transformer les idées en réalité.
                </p>
                <p class="mb-4">
                    Notre mission est claire : catalyser le développement de la région Marrakech-Safi, du Maroc et de l'Afrique. En renforçant le tissu économique local, nous visons à élever et accélérer les structures, en particulier les petites entreprises et organisations, et à contribuer à l'émancipation des idées, des projets de croissance et des talents créateurs locaux. Nous aspirons à les aider à devenir les leaders de demain. »
                </p>
                <p class="mb-4">
                    BLUE STRATEGY se distingue par son engagement inébranlable envers l'accompagnement, l'accélération, l'alignement stratégique et le développement des territoires. Nous sommes des pionniers du développement local, de l'innovation sociale et économique, et de l'économie sociale et solidaire, transformant les défis en opportunités et guidant nos partenaires vers un avenir prospère et durable.
                </p>
                <p class="mb-4">
                    <h class="font-semibold">Mme Houda BELAYDI</h>
                    <h class="font-semibold">Founder CEO du cabinet BLUE STRATEGY</h>
                    <h class="font-medium">
                        Experte senior en accompagnement des entreprises et organisations, 
                        en management et en développement des projets
                    </h>
                </p>
            </div>
        </div> --}}
 
        <div id="pon" class=" z-40 hidden md:block">
            <img src="AP/3.svg" alt="" class="absolute left-28 top-24 w-20 h-20">
            
            <img src="AP/3.svg" alt="" class="w-24 h-24 absolute bottom-6 right-20">
        </div>

        <div id="ren" class=" hidden md:block">
            <div class="w-28 h-28 bg-blue-600 absolute top-0 left-0 rounded-br-full"></div>
            <div class="w-72 h-72 bg-blue-600 absolute bottom-0 right-0 rounded-tl-full"></div>
        </div>
    </div>
</section>



<script>
    document.addEventListener("scroll", function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    });

    document.querySelectorAll(".text-animate").forEach((element) => {
        observer.observe(element);
    });
});

</script>

<script>
    document.addEventListener("scroll", function() {
        const contentElement = document.getElementById('content1');

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