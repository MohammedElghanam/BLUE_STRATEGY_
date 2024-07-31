<style>
    .BOR{
        border: 8px solid ;
        border-color:  #f96d00;    
    }
    .polygon {
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        background: linear-gradient(to right, #ff6f3c, #f96d00);
    }
    .COLOR{
        background: linear-gradient(to bottom, #ff6f3c, #f96d00);
    }
    .CO{
        background-color: #f96d00;
    }
    
    .ONE{
        background-color: rgb(255, 255, 255);
    }
    
    .BOX{
        box-shadow: 0  0px 3px 0.7px rgb(224, 215, 215) ;
    }
    
    
    
    
    .XS {
        font-size:  12px ;
        line-height:  16px ;
    }
    .TIT{
        color: #ff5722;
    }
    .TIT1{
        color: #ff5722;
    }
    .BG{
        /* background-color: #e8751a; */
    }
    .FONT{
        font-size: 70px ;
        line-height: 16px ;
        font-weight: 500;
    }
    .SHADOW{
        box-shadow: 0 0 28px 5px rgb(208, 208, 207) ;
    }
    .BG{
        /* background-color: #ff5722; */
        background: linear-gradient(to bottom, #ff5200, #ff2400);
    }
    
    .BG1{
        background: linear-gradient(to bottom, #ff5200, #ff2400);
    }
    
    </style>

{{-- first section  --}}
<section class="">
    <!-- Image with overlay effect -->
    <img class="w-full h-full hidden lg:block" src="B_U/11.png" alt="">
    <div class="absolute inset-0 BG opacity-25 hidden lg:block h-full"></div>

    <div class="md:absolute top-0 p-10 grid grid-cols-1 md:grid-cols-12 gap-8 pt-32">
        <!-- First Column (Red Background) -->
        <div class="col-span-1 md:col-span-7 md:h-auto flex items-end">
            <h1 class=" md:mb-4 text-4xl md:text-2xl lg:text-5xl lg:leading-[16px] md:font-semibold font-bold md:text-white text-orange-500 lg:border-b-8 pb-6">
                ACCOMPAGNEMENT <br>DES PROJETS D'ESS
            </h1>
        </div>
        
        <!-- Second Column (Text Content) -->
        <div class="BG col-span-1 md:col-span-6 lg:col-span-5 p-4 md:p-6 rounded-2xl text-gray-50 text-sm">
            <p class="mb-3 font-medium">
                Nous sommes à vos côtés pour vous aider à préparer l’avenir et à
                concilier performance économique et impact social positif.
            </p>
            <p class="mb-3">
                Les évolutions sociales en cours exigent l'accompagnement de nouveaux modèles
                socio-économiques favorisant le bien-être à la fois individuel et collectif. En outre,
                elles requièrent la nécessité d'une coopération coordonnée entre les divers
                acteurs, afin de maintenir un équilibre entre l'insertion socio-economique. 
            </p>
            <p class="mb-3">
                Dans le contexte de l'accompagnement de projets, en particulier ceux concernés de
                l'ESS, BLUE STRATEGY a développé une expertise solide dans le but de contribuer
                activement à la création conjointe de valeur, à travers trois axes essentiels :
            </p>
        </div>

        <!-- Services Grid -->
        <div class="col-span-1 md:col-span-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-2">
            <!-- Service 1 -->
            <div class="rounded-xl p-5 border border-gray-500 flex items-center gap-4 shadow-xl bg-white transform transition-transform duration-300 hover:scale-105">
                <div>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-lg"> La valorisation des contributions sociales des organisations.</h1>
            </div>
            <!-- Service 2 -->
            <div class="rounded-xl p-5 border border-gray-500 flex items-center gap-4 shadow-xl bg-white transform transition-transform duration-300 hover:scale-105">
                <div>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-lg"> Le développement de la performance des structures d'ESS.</h1>
            </div>
            <!-- Service 3 -->
            <div class="rounded-xl p-5 border border-gray-500 flex items-center gap-4 shadow-xl bg-white transform transition-transform duration-300 hover:scale-105">
                <div>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-lg"> 
                    La promotion de l'autonomisation économique des femmes
                    et des jeunes dans divers milieux et secteurs.
                </h1>
            </div>
            <div class="lg:col-span-3 md:col-span-12 lg:px-16 lg:py-10 p-6  text-center font-medium text-white BG rounded-xl bg-blue-800">
                <p>
                    Notre expertise dans le domaine d’accompagnement et le développement de
                    stratégies de croissance optimisées et innovantes, vise à assister toute entité
                    désirant lancer des projets ou une initiative au service de la communauté.
                </p>
            </div>
        </div>

    </div>
</section>


{{-- NOS SERVICES
<section class="my-16 px-4 md:px-20">
    <div class="grid grid-cols-1 gap-4">

        <!-- Services Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class=" grid grid-cols-12 col-span-3">
                <!-- Header and Introduction -->
                <div class="col-span-8 flex items-end p-4 text-center md:text-left ">
                    <div class="mb-4">
                        <h1 class="text-3xl md:text-4xl mb-2 font-semibold TIT">NOS OFFRES D’ACCOMPAGNEMENT ESS</h1>
                        <p class=" text-gray-800">
                            Notre mission vise à favoriser la créativité dans la recherche de solutions bénéfiques pour la société
                            et les organisations et à faciliter la collaboration entre les différents acteurs du changement.
                        </p>
                    </div>
                </div>
                <!-- Service 1 -->
                <div class="col-span-4 p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                    <img class="rounded-xl mb-2" src="VI/18.png" alt="Gestion de projet">
                    <h2 class="font-semibold text-lg">GESTION DE PROJET</h2>
                    <p class="text-gray-900">
                        Planifier et gérer les projets afin de respecter leurs objectifs et leurs livrables prévus.
                    </p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/126.png" alt="Mentorat">
                <h2 class="font-semibold text-lg">MENTORAT</h2>
                <p class="text-gray-900">
                    Préparer les entrepreneurs pour les prochaines étapes de leur carrière professionnelle.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/18.png" alt="Coaching">
                <h2 class="font-semibold text-lg">COACHING</h2>
                <p class="text-gray-900">
                    Optimiser les performances des entrepreneurs, dans un cadre bienveillant et de changement.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/126.png" alt="Formation">
                <h2 class="font-semibold text-lg">FORMATION</h2>
                <p class="text-gray-900">
                    Développer les compétences des entrepreneurs et leurs niveaux supérieurs de qualification.
                </p>
            </div>

        </div>
    </div>
</section> --}}

{{-- NOS SERVICES --}}
<section class="my-16 px-4 md:px-20">
    <div class="grid grid-cols-1 gap-4">

        <!-- Header and Introduction -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="col-span-3 lg:col-span-2 flex items-end p-4 text-center lg:text-left">
                <div>
                    <h1 class="text-3xl md:text-4xl mb-2 font-semibold TIT">NOS OFFRES D’ACCOMPAGNEMENT ESS</h1>
                    <p class="text-gray-800">
                        Notre mission vise à favoriser la créativité dans la recherche de solutions bénéfiques pour la société
                        et les organisations et à faciliter la collaboration entre les différents acteurs du changement.
                    </p>
                </div>
            </div>
            <div class="col-span-3 lg:col-span-1 p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/18.png" alt="Gestion de projet">
                <h2 class="font-semibold text-lg text-gray-900">Accompagnement des <h class=" font-bold TIT">ONG.</h></h2>
            </div>
        </div>

        <!-- Services Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Service 2 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/126.png" alt="Mentorat">
                <h2 class="font-semibold text-lg text-gray-900"> Accompagnement aux <h class=" font-bold TIT">COOPERATIVES.</h></h2>
            </div>

            <!-- Service 3 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/18.png" alt="Coaching">
                <h2 class="font-semibold text-lg text-gray-900">Accompagnement aux <h class=" font-bold TIT">FEMMES.</h></h2>
            </div>

            <!-- Service 4 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/126.png" alt="Formation">
                <h2 class="font-semibold text-lg text-gray-900"> Accompagnement aux <h class=" font-bold TIT">JEUNES.</h></h2>
            </div>
        </div>
    </div>
</section>
