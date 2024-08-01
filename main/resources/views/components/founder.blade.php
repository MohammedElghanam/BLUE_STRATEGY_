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



<section class=" my-12 px-32">
    <div class="grid grid-cols-12 gap-4">
        <div class=" col-span-8 bg-blue-900 text-white p-5 px-6 rounded-3xl text-animate">
            <p class="font-bold text-blue-400 text-lg mb-4 mt-4">
                « Chez BLUE STRATEGY, nous ne nous contentons pas de rêver d'un avenir meilleur, nous le construisons activement. »
            </p>
            <p class=" mb-2 text-sm">
                Chez BLUE STRATEGY, nous ne faisons pas que suivre les tendances – nous les créons. Notre cabinet incarne une vision audacieuse et avant-gardiste, en parfaite harmonie avec les objectifs du nouveau modèle de développement économique du Maroc.
            </p>
            <p class=" mb-2 text-sm">
                Avec une expertise éprouvée sur le terrain et une passion pour le développement économique, l'accompagnement, l'accélération des structures, et l'innovation sociale, j'ai eu le privilège de collaborer avec des clients de renom et de mener à bien des projets transformateurs à travers le Maroc. Aujourd'hui, entourée d'une équipe exceptionnelle de plus de 25 experts, nous sommes prêts à repousser les limites et à transformer les idées en réalité.
            </p>
            <p class=" mb-2 text-sm">
                Notre mission est claire : catalyser le développement de la région Marrakech-Safi, du Maroc et de l'Afrique. En renforçant le tissu économique local, nous visons à élever et accélérer les structures, en particulier les petites entreprises et organisations, et à contribuer à l'émancipation des idées, des projets de croissance et des talents créateurs locaux. Nous aspirons à les aider à devenir les leaders de demain. »
            </p>
            <p class=" mb-2 text-sm">
                BLUE STRATEGY se distingue par son engagement inébranlable envers l'accompagnement, l'accélération, l'alignement stratégique et le développement des territoires. Nous sommes des pionniers du développement local, de l'innovation sociale et économique, et de l'économie sociale et solidaire, transformant les défis en opportunités et guidant nos partenaires vers un avenir prospère et durable.
            </p>
            <p class=" mb-2 text-sm">
                <h class=" font-semibold">Mme Houda BELAYDI</h>
                <h class=" font-semibold">Founder CEO du cabinet BLUE STRATEGY</h>
                <h class=" font-medium">
                    Experte senior en accompagnement des entreprises et organisations, 
                    en management et en développement des projets
                </h>
            </p>
        </div>

        <div class="grid grid-cols-12 gap-4 col-span-4">
            <div class=" col-span-12 ">
                <div class=" rounded-full flex justify-center items-center mb-4 relative">
                    <img class="rounded-full z-20 shadow-2xl" src="B_U/40.jpeg" alt="" style="width: 250px; height:250px;">
                    <div class="w-20 h-20 absolute top-4 left-4 flex flex-col justify-center items-center gap-5 z-40 ">
                        <a href="https://www.linkedin.com/in/houda-belaydi-4442a3b3" class=" SCALE -top-7 -right-2 absolute col-span-2 flex items-end justify-center" aria-label="Twitter link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                                <path fill="#1f2937" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4M7.65 13.979H5.706V7.723H7.65zm-.984-7.024c-.614 0-1.011-.435-1.011-.973c0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973m8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355c-.537 0-.856.371-.997.728c-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01c1.279 0 2.238.857 2.238 2.699z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/houda.bel.56614?mibextid=ZbWKwL" class=" SCALE bottom-14 left-6 absolute col-span-1 flex justify-end" aria-label="Facebook link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                                <path fill="#1f2937" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/houda.belaydi1?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" class=" SCALE bottom-5 left-0 absolute col-span-1" aria-label="Linkedin link" href="#">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                                <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4M7.65 13.979H5.706V7.723H7.65zm-.984-7.024c-.614 0-1.011-.435-1.011-.973c0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973m8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355c-.537 0-.856.371-.997.728c-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01c1.279 0 2.238.857 2.238 2.699z"/>
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="#1f2937" d="M12 9.52A2.48 2.48 0 1 0 14.48 12A2.48 2.48 0 0 0 12 9.52m9.93-2.45a6.53 6.53 0 0 0-.42-2.26a4 4 0 0 0-2.32-2.32a6.53 6.53 0 0 0-2.26-.42C15.64 2 15.26 2 12 2s-3.64 0-4.93.07a6.53 6.53 0 0 0-2.26.42a4 4 0 0 0-2.32 2.32a6.53 6.53 0 0 0-.42 2.26C2 8.36 2 8.74 2 12s0 3.64.07 4.93a6.86 6.86 0 0 0 .42 2.27a3.94 3.94 0 0 0 .91 1.4a3.89 3.89 0 0 0 1.41.91a6.53 6.53 0 0 0 2.26.42C8.36 22 8.74 22 12 22s3.64 0 4.93-.07a6.53 6.53 0 0 0 2.26-.42a3.89 3.89 0 0 0 1.41-.91a3.94 3.94 0 0 0 .91-1.4a6.6 6.6 0 0 0 .42-2.27C22 15.64 22 15.26 22 12s0-3.64-.07-4.93m-2.54 8a5.73 5.73 0 0 1-.39 1.8A3.86 3.86 0 0 1 16.87 19a5.73 5.73 0 0 1-1.81.35H8.94A5.73 5.73 0 0 1 7.13 19a3.51 3.51 0 0 1-1.31-.86A3.51 3.51 0 0 1 5 16.87a5.49 5.49 0 0 1-.34-1.81V8.94A5.49 5.49 0 0 1 5 7.13a3.51 3.51 0 0 1 .86-1.31A3.59 3.59 0 0 1 7.13 5a5.73 5.73 0 0 1 1.81-.35h6.12a5.73 5.73 0 0 1 1.81.35a3.51 3.51 0 0 1 1.31.86A3.51 3.51 0 0 1 19 7.13a5.73 5.73 0 0 1 .35 1.81V12c0 2.06.07 2.27.04 3.06Zm-1.6-7.44a2.38 2.38 0 0 0-1.41-1.41A4 4 0 0 0 15 6H9a4 4 0 0 0-1.38.26a2.38 2.38 0 0 0-1.41 1.36A4.27 4.27 0 0 0 6 9v6a4.27 4.27 0 0 0 .26 1.38a2.38 2.38 0 0 0 1.41 1.41a4.27 4.27 0 0 0 1.33.26h6a4 4 0 0 0 1.38-.26a2.38 2.38 0 0 0 1.41-1.41a4 4 0 0 0 .26-1.38V9a3.78 3.78 0 0 0-.26-1.38ZM12 15.82A3.81 3.81 0 0 1 8.19 12A3.82 3.82 0 1 1 12 15.82m4-6.89a.9.9 0 0 1 0-1.79a.9.9 0 0 1 0 1.79"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
            <div class=" bg-white w-full p-6 rounded-xl shadow-2xl border border-gray-500">
                <div class=" flex justify-start items-center gap-4 mb-4">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"><rect width="18" height="14" x="3" y="5" stroke-dasharray="64" stroke-dashoffset="64" rx="1"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.9s" values="64;0"/></rect><path stroke-dasharray="24" stroke-dashoffset="24" d="M3 6.5L12 12L21 6.5"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.9s" dur="0.6s" values="24;0"/></path></g></svg>
                    </div>
                    <h1 class=" font-medium text-gray-900">h.belaydi@bluestrategy.ma</h1>
                </div>
                <div class=" flex justify-start items-center gap-4">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="64" stroke-dashoffset="64" d="M8 3C8.5 3 10.5 7.5 10.5 8C10.5 9 9 10 8.5 11C8 12 9 13 10 14C10.3943 14.3943 12 16 13 15.5C14 15 15 13.5 16 13.5C16.5 13.5 21 15.5 21 16C21 18 19.5 19.5 18 20C16.5 20.5 15.5 20.5 13.5 20C11.5 19.5 10 19 7.5 16.5C5 14 4.5 12.5 4 10.5C3.5 8.5 3.5 7.5 4 6C4.5 4.5 6 3 8 3Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.9s" values="64;0"/><animateTransform attributeName="transform" begin="0.9s;lineMdPhoneCallLoop0.begin+3.9s" dur="0.75s" type="rotate" values="0 12 12;15 12 12;0 12 12;-12 12 12;0 12 12;12 12 12;0 12 12;-15 12 12;0 12 12"/></path><path stroke-dasharray="4" stroke-dashoffset="4" d="M14 7.04404C14.6608 7.34734 15.2571 7.76718 15.7624 8.27723M16.956 10C16.6606 9.35636 16.2546 8.77401 15.7624 8.27723" opacity="0"><set id="lineMdPhoneCallLoop0" attributeName="opacity" begin="1.05s;lineMdPhoneCallLoop0.begin+4.05s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.05s;lineMdPhoneCallLoop0.begin+4.05s" dur="0.3s" values="4;8"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.95s;lineMdPhoneCallLoop0.begin+4.95s" dur="0.45s" values="0;4"/><set attributeName="opacity" begin="2.4s;lineMdPhoneCallLoop0.begin+5.4s" to="0"/></path><path stroke-dasharray="10" stroke-dashoffset="10" d="M20.748 9C20.3874 7.59926 19.6571 6.347 18.6672 5.3535M15 3.25203C16.4105 3.61507 17.6704 4.3531 18.6672 5.3535" opacity="0"><set attributeName="opacity" begin="1.5s;lineMdPhoneCallLoop0.begin+4.5s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.5s;lineMdPhoneCallLoop0.begin+4.5s" dur="0.3s" values="10;20"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="2.25s;lineMdPhoneCallLoop0.begin+5.25s" dur="0.45s" values="0;10"/><set attributeName="opacity" begin="2.7s;lineMdPhoneCallLoop0.begin+5.7s" to="0"/></path></g></svg>                    
                    </div>
                    <h1 class=" font-medium text-gray-900">05 24 62 34 24</h1>
                </div>
            </div>
            </div>
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