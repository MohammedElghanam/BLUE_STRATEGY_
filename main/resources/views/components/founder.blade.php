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



<section class=" p-2 bg-blue-900 md:px-20 relative">
    <div class="grid grid-cols-12 gap-4 ">
        <div class=" md:col-span-8 text-end col-span-12">
            <div class=" w-full flex justify-center items-center lg:hidden">
                <div class="">
                    <div class=" my-3 relative">
                        <div class=" BG absolute left-0 top-0 rounded-b-md rotate-45" style="width: 220px; height:220px;"></div>
                        <img class=" w-48 h-48 rounded-full z-40" src="AP/1.jpeg" alt="">
                    </div>
                    <div class=" bg-blue-900 py-2 px-10 rounded-xl border border-white flex justify-center items-center gap-4">
                        <a class=" SCALE" href="https://www.linkedin.com/in/houda-belaydi-4442a3b3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                                <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4M7.65 13.979H5.706V7.723H7.65zm-.984-7.024c-.614 0-1.011-.435-1.011-.973c0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973m8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355c-.537 0-.856.371-.997.728c-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01c1.279 0 2.238.857 2.238 2.699z"/>
                            </svg>
                        </a>
                        <a class=" SCALE" href="https://www.facebook.com/houda.bel.56614?mibextid=ZbWKwL" class="SCALE">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                                <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443z"/>
                            </svg>
                        </a>
                        <a class=" SCALE" href="https://www.instagram.com/houda.belaydi1?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" class="SCALE">
                            <svg class="icon w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="white" d="M7.03.084c-1.277.06-2.149.264-2.91.563a5.9 5.9 0 0 0-2.124 1.388a5.9 5.9 0 0 0-1.38 2.127C.321 4.926.12 5.8.064 7.076s-.069 1.688-.063 4.947s.021 3.667.083 4.947c.061 1.277.264 2.149.563 2.911c.308.789.72 1.457 1.388 2.123a5.9 5.9 0 0 0 2.129 1.38c.763.295 1.636.496 2.913.552c1.278.056 1.689.069 4.947.063s3.668-.021 4.947-.082c1.28-.06 2.147-.265 2.91-.563a5.9 5.9 0 0 0 2.123-1.388a5.9 5.9 0 0 0 1.38-2.129c.295-.763.496-1.636.551-2.912c.056-1.28.07-1.69.063-4.948c-.006-3.258-.02-3.667-.081-4.947c-.06-1.28-.264-2.148-.564-2.911a5.9 5.9 0 0 0-1.387-2.123a5.9 5.9 0 0 0-2.128-1.38c-.764-.294-1.636-.496-2.914-.55C15.647.009 15.236-.006 11.977 0S8.31.021 7.03.084m.14 21.693c-1.17-.05-1.805-.245-2.228-.408a3.7 3.7 0 0 1-1.382-.895a3.7 3.7 0 0 1-.9-1.378c-.165-.423-.363-1.058-.417-2.228c-.06-1.264-.072-1.644-.08-4.848c-.006-3.204.006-3.583.061-4.848c.05-1.169.246-1.805.408-2.228c.216-.561.477-.96.895-1.382a3.7 3.7 0 0 1 1.379-.9c.423-.165 1.057-.361 2.227-.417c1.265-.06 1.644-.072 4.848-.08c3.203-.006 3.583.006 4.85.062c1.168.05 1.804.244 2.227.408c.56.216.96.475 1.382.895s.681.817.9 1.378c.165.422.362 1.056.417 2.227c.06 1.265.074 1.645.08 4.848c.005 3.203-.006 3.583-.061 4.848c-.051 1.17-.245 1.805-.408 2.23c-.216.56-.477.96-.896 1.38a3.7 3.7 0 0 1-1.378.9c-.422.165-1.058.362-2.226.418c-1.266.06-1.645.072-4.85.079s-3.582-.006-4.848-.06m9.783-16.192a1.44 1.44 0 1 0 1.437-1.442a1.44 1.44 0 0 0-1.437 1.442M5.839 12.012a6.161 6.161 0 1 0 12.323-.024a6.162 6.162 0 0 0-12.323.024M8 12.008A4 4 0 1 1 12.008 16A4 4 0 0 1 8 12.008"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="select-none text-white p-7 text-animate">
                <p class="font-bold text-blue-400 text-base lg:text-xl mb-4 mt-8">
                    « Chez BLUE STRATEGY, nous ne nous contentons pas de rêver d'un avenir meilleur, nous le construisons activement. »
                </p>
                <p class="mb-2 text-sm lg:text-lg">
                    Chez BLUE STRATEGY, nous ne faisons pas que suivre les tendances – nous les créons. Notre cabinet incarne une vision audacieuse et avant-gardiste, en parfaite harmonie avec les objectifs du nouveau modèle de développement économique du Maroc.
                </p>                
                <p class="md:mb-4 mb-2 text-sm lg:text-lg">
                    Avec une expertise éprouvée sur le terrain et une passion pour le développement économique, l'accompagnement, l'accélération des structures, et l'innovation sociale, j'ai eu le privilège de collaborer avec des clients de renom et de mener à bien des projets transformateurs à travers le Maroc. Aujourd'hui, entourée d'une équipe exceptionnelle de plus de 25 experts, nous sommes prêts à repousser les limites et à transformer les idées en réalité.
                </p>
                <p class="md:mb-4 mb-2 text-sm lg:text-lg">
                    Notre mission est claire : catalyser le développement de la région Marrakech-Safi, du Maroc et de l'Afrique. En renforçant le tissu économique local, nous visons à élever et accélérer les structures, en particulier les petites entreprises et organisations, et à contribuer à l'émancipation des idées, des projets de croissance et des talents créateurs locaux. Nous aspirons à les aider à devenir les leaders de demain. »
                </p>
                <p class="md:mb-4 mb-2 text-sm lg:text-lg">
                    BLUE STRATEGY se distingue par son engagement inébranlable envers l'accompagnement, l'accélération, l'alignement stratégique et le développement des territoires. Nous sommes des pionniers du développement local, de l'innovation sociale et économique, et de l'économie sociale et solidaire, transformant les défis en opportunités et guidant nos partenaires vers un avenir prospère et durable.
                </p>
                <p class="md:mb-4 mb-2 text-sm lg:text-lg">
                    <h class="font-semibold">Mme Houda BELAYDI</h>
                    <h class="font-semibold">Founder CEO du cabinet BLUE STRATEGY</h>
                    <h class="font-medium">
                        Experte senior en accompagnement des entreprises et organisations, 
                        en management et en développement des projets
                    </h>
                </p>
            </div>
        </div>
        <div class=" col-span-4 hidden md:block relative">
            <div id="conten1" class="w-80 h-80 rounded-full absolute right-6 top-16 z-30 flex justify-center items-center pt-5">
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
                        <svg class="icon w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="white" d="M7.03.084c-1.277.06-2.149.264-2.91.563a5.9 5.9 0 0 0-2.124 1.388a5.9 5.9 0 0 0-1.38 2.127C.321 4.926.12 5.8.064 7.076s-.069 1.688-.063 4.947s.021 3.667.083 4.947c.061 1.277.264 2.149.563 2.911c.308.789.72 1.457 1.388 2.123a5.9 5.9 0 0 0 2.129 1.38c.763.295 1.636.496 2.913.552c1.278.056 1.689.069 4.947.063s3.668-.021 4.947-.082c1.28-.06 2.147-.265 2.91-.563a5.9 5.9 0 0 0 2.123-1.388a5.9 5.9 0 0 0 1.38-2.129c.295-.763.496-1.636.551-2.912c.056-1.28.07-1.69.063-4.948c-.006-3.258-.02-3.667-.081-4.947c-.06-1.28-.264-2.148-.564-2.911a5.9 5.9 0 0 0-1.387-2.123a5.9 5.9 0 0 0-2.128-1.38c-.764-.294-1.636-.496-2.914-.55C15.647.009 15.236-.006 11.977 0S8.31.021 7.03.084m.14 21.693c-1.17-.05-1.805-.245-2.228-.408a3.7 3.7 0 0 1-1.382-.895a3.7 3.7 0 0 1-.9-1.378c-.165-.423-.363-1.058-.417-2.228c-.06-1.264-.072-1.644-.08-4.848c-.006-3.204.006-3.583.061-4.848c.05-1.169.246-1.805.408-2.228c.216-.561.477-.96.895-1.382a3.7 3.7 0 0 1 1.379-.9c.423-.165 1.057-.361 2.227-.417c1.265-.06 1.644-.072 4.848-.08c3.203-.006 3.583.006 4.85.062c1.168.05 1.804.244 2.227.408c.56.216.96.475 1.382.895s.681.817.9 1.378c.165.422.362 1.056.417 2.227c.06 1.265.074 1.645.08 4.848c.005 3.203-.006 3.583-.061 4.848c-.051 1.17-.245 1.805-.408 2.23c-.216.56-.477.96-.896 1.38a3.7 3.7 0 0 1-1.378.9c-.422.165-1.058.362-2.226.418c-1.266.06-1.645.072-4.85.079s-3.582-.006-4.848-.06m9.783-16.192a1.44 1.44 0 1 0 1.437-1.442a1.44 1.44 0 0 0-1.437 1.442M5.839 12.012a6.161 6.161 0 1 0 12.323-.024a6.162 6.162 0 0 0-12.323.024M8 12.008A4 4 0 1 1 12.008 16A4 4 0 0 1 8 12.008"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>


        <div id="pon" class=" z-40 hidden md:block">            
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

{{-- <script>
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

</script> --}}

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
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
</script> --}}