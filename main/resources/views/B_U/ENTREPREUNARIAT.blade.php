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

.LINE{
    /* width: screen; */
    height: 220px;
    position: absolute;
    top: 80px;
    left: -144px;
    border-top: 8px solid #ff0000;
    border-left: 8px solid #ff0000;
}

.C1{
    background-color: #d70707;
}
.C2{
    color: #d70707;
}

.BG{
    background-color: #ff0000;
}
.POL{
    background-color: #ff0000;
    clip-path: polygon(0 0, 90% 0%, 100% 20%, 100% 100%, 0% 100%);
    opacity: 0.9;
}

.RR{
    background-color: #ff0000;
}
.BB{
    background-color: #020085;
}
.XS {
    font-size:  12px ;
    line-height:  16px ;
}
.TIT{
    color: #f96d00;
}
.BG{
    background-color: #f96d00;
}
.FONT{
    font-size: 70px ;
    line-height: 16px ;
    font-weight: 500;
}
.SHADOW{
    box-shadow: 0 0 28px 5px rgb(208, 208, 207) ;
}


</style>

{{-- first section  --}}
{{-- <section id="1" class="pt-20">
    <div class="flex justify-center items-center relative">
        <img class="w-full md:w-auto" src="B_U/29.png" alt="">
        <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 bg-gray-800 opacity-70"></div>
        <div class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0">
            <div class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5 bg-red-500"></div>
            <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left animate-fade-in">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 01</h1>
                <h1 class="font-bold text-2xl md:text-4xl">PMO</h1>
                <p class="font-normal">PROJECT MANAGEMENT OFFICE</p>
            </div>
            <div class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28"></div>
        </div>
    </div>
</section> --}}


<section class=" mb-40 p-2 bg-red-500">
    <div class=" relative">
        <img class=" w-full h-3/4" src="B_U/11.png" alt="">
        <div class=" absolute top-0 w-full h-full bg-blue-600 opacity-50">
            <div class=""></div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-2 w-full bg-red-700 px-20">
                <!-- Service 1 -->
                <div class="rounded-xl p-2 border border-gray-500 flex items-center gap-4 shadow-xl bg-white transform transition-transform duration-300 hover:scale-105">
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
                    <h1 class="text-gray-800 text-sm">Libérer leur potentiel d'innovation.</h1>
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
                    <h1 class="text-gray-800 text-lg">Maximiser le potentiel de leurs idées.</h1>
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
                    <h1 class="text-gray-800 text-lg">Remettre en question leurs modèles d'entreprise.</h1>
                </div>
                <!-- Service 4 -->
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
                    <h1 class="text-gray-800 text-lg">Identifier les leviers de succès de leurs startups.</h1>
                </div>
                <!-- Service 5 -->
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
                    <h1 class="text-gray-800 text-lg">Adopter les bons réflexes en matière d'entrepreneuriat.</h1>
                </div>
                <!-- Service 6 -->
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
                    <h1 class="text-gray-800 text-lg">Faire de l'esprit d'entreprendre une vraie culture.</h1>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="p-6 md:p-20 relative ">
    <div class="BG w-24 h-24 md:w-48 md:h-48 absolute top-0 left-0 z-40 hidden md:block"></div>
    <div class="SHADOW p-6 md:p-20 h-auto grid justify-center items-center relative">
        <div class="pt-6 md:pt-10">
            <h1 class="text-center mb-8 md:mb-16 text-lg md:text-2xl lg:text-8xl lg:leading-[16px] TIT">
                ENTREPREUNARIAT
            </h1>
            <p class="mb-2 md:mb-4 text-center font-medium text-sm md:text-base">
                Notre mission est de rendre simple et naturel l’entrepreneuriat pour libérer les
                potentiels, transformant ainsi l'acte d'entreprendre en une aventure épanouissante.
            </p>
            <p class="mb-2 md:mb-4 text-center text-gray-800 text-sm md:text-base">
                L'écosystème entrepreneurial au Maroc connaît une évolution continue et joue un rôle
                essentiel dans le développement économique et social du pays, tout comme dans
                d'autres nations. Dans cette optique, une variété d'initiatives sont déployées pour
                enrichir la culture entrepreneuriale, dans le but d'encourager et de soutenir les
                entrepreneurs dans leurs parcours.
            </p>
            <p class="mb-2 md:mb-4 text-center text-gray-800 text-sm md:text-base">
                En tant qu'acteur engagé dans l'accompagnement de cette dynamique, le cabinet BLUE
                STRATEGY propose une vaste gamme de services et s'est doté d'une équipe hautement
                qualifiée. Sa mission consiste à fournir une assistance aux entrepreneurs en vue de :
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-2 w-full">
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
                <h1 class="text-gray-800 text-lg">Libérer leur potentiel d'innovation.</h1>
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
                <h1 class="text-gray-800 text-lg">Maximiser le potentiel de leurs idées.</h1>
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
                <h1 class="text-gray-800 text-lg">Remettre en question leurs modèles d'entreprise.</h1>
            </div>
            <!-- Service 4 -->
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
                <h1 class="text-gray-800 text-lg">Identifier les leviers de succès de leurs startups.</h1>
            </div>
            <!-- Service 5 -->
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
                <h1 class="text-gray-800 text-lg">Adopter les bons réflexes en matière d'entrepreneuriat.</h1>
            </div>
            <!-- Service 6 -->
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
                <h1 class="text-gray-800 text-lg">Faire de l'esprit d'entreprendre une vraie culture.</h1>
            </div>
        </div>
        
        <div class="BG w-8 h-24 md:w-16 md:h-48 absolute bottom-10 md:bottom-20 right-0 z-40 hidden md:block"></div>
    </div>
</section> --}}


{{-- NOS SERVICES --}}
<section class="my-16 px-4 md:px-20">
    <div class="grid grid-cols-1 gap-4">

        <!-- Services Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Header and Introduction -->
            <div class=" flex items-end p-4 text-center md:text-left">
                <div class="mb-4">
                    <h1 class="text-3xl md:text-4xl mb-2 font-semibold TIT">NOS SERVICES</h1>
                    <p class=" text-gray-800">
                        Notre ambition est de connecter les bonnes personnes aux bonnes idées et notre approche est aussi bien adaptée sur le porteur du projet que sur son projet.
                    </p>
                </div>
            </div>

            <!-- Service 1 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/18.png" alt="Gestion de projet">
                <h2 class="font-semibold text-lg">GESTION DE PROJET</h2>
                <p class="text-gray-900">
                    Planifier et gérer les projets afin de respecter leurs objectifs et leurs livrables prévus.
                </p>
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

            <!-- Service 5 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="VI/5.png" alt="Conseil">
                <h2 class="font-semibold text-lg">CONSEIL</h2>
                <p class="text-gray-900">
                    Analyser les startups, déterminer leurs forces, faiblesses et leurs axes d'amélioration.
                </p>
            </div>
        </div>
    </div>
</section>



{{-- ACCOMPAGNEMENT DES ORGANISMES ENGAGÉS  --}}
<section class="px-4 md:px-20">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-2 p-2">
        <div class="md:col-span-5 p-5 md:p-10 md:pt-28">
            <div class="flex flex-col md:flex-row items-start md:items-center mb-4">
                <img class="w-10 h-10 mb-4 md:mb-0" src="B_U/35.png" alt="">
                <h1 class="TIT text-2xl font-semibold ml-0 md:ml-4">ACCOMPAGNEMENT DES ORGANISMES ENGAGÉS</h1>
            </div>
            <p class="mb-4">
                Vous êtes une fondation, association, organisme étatique ou privé, institution,
                université ou école supérieur ? Souhaitez-vous lancer un projet ou une initiative
                ayant pour vocation de soutenir les entrepreneurs innovants au Maroc ?
            </p>
            <h1 class="mb-4 font-medium text-gray-800">
                BLUE STRATEGY représente votre partenaire idéal pour vous accompagner dans la concrétisation de vos programmes.
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:col-span-7">
            <div class="grid grid-cols-1 gap-2 md:col-span-5">
                <div class="">
                    <div class="mb-3 flex justify-end">
                        <img class="rounded-xl transform translate-x-1 duration-300 hover:scale-105" src="B_U/12.png" alt="">
                    </div>
                    <div class="mb-3 flex justify-end">
                        <img class="rounded-xl transform translate-x-1 duration-300 hover:scale-105" src="B_U/11.png" alt="">
                    </div>
                    <div class="mb-3 flex justify-end">
                        <img class="rounded-xl transform translate-x-1 duration-300 hover:scale-105" src="B_U/2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="BG md:col-span-7 rounded-xl p-5">
                <p class="font-medium text-white">Offre de services :</p>
                <div class="grid grid-cols-12 gap-3 text-white text-center md:text-left mr-2 p-2">
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Réaliser des études de projets.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Concevoir et réaliser des plans d'accompagnement adaptés.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Définir les stratégies et modéliser les activités liées à la mise à l'échelle.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Évaluer l'impact social cible.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Sourcing et profiling des participants et intervenants.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Former les unités de coordination sur divers sujets.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Mettre en place des programmes de mentorat et de coaching adaptés.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Mettre en place des plans de formation.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Déléguer l'équipe d'experts et de professionnels.</p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">
                            Organiser les événements requis pour mener à bien les projets :
                            bootcamps, séminaires, conférences, jumelages, sessions de pitch,
                            team building, expositions, networking…
                        </p>
                    </div>
                    <div class="col-span-12 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="text-white font-medium XS">Mobiliser les locaux pour la réalisation de vos programmes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=" px-16 my-16">
    <div class=" grid grid-cols-1 gap-4">
        <div class=" grid grid-cols-12 gap-4 col-span-1">
            <div class=" col-span-3 p-4 flex items-end">
                <div class="">
                    <div class="">
                        <img class=" w-14 h-14" src="B_U/36.png" alt="">
                    </div>
                    <div class="">
                        <h1 class=" text-3xl font-semibold text-gray-800">ACCOMPAGNEMENT <h class=" TIT">AUX STARTUPS</h></h1>
                        <div class=" flex gap-2 mt-1">
                            <div class=" w-16 h-1 BG rounded-xl"></div>
                            <div class=" w-8  h-1 bg-gray-900 rounded-xl"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-span-4 p-4 flex items-end">
                <p class="">
                    Quel que soit votre stade de maturité, votre sujet et votre secteur d’activité, les équipes de BLUE STRATEGY vous accompagnent pour
                    structurer votre projet, développer votre activité et orienter vos démarches en tant qu'entrepreneur innovant.
                </p>
            </div>
            <div class=" col-span-5 p-4 bg-gray-200 rounded-xl transform transition-transform duration-300 hover:scale-105">
                <p class=" font-medium text-gray-900 mb-2">Nos atouts :</p>
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
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
                    <h1 class="text-gray-800 text-lg">Accompagnement personnalisé et de proximité</h1>
                </div>
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
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
                        Conseil sur les aspects techniques, humains,
                        intellectuels, commerciaux, marketing et financiers.
                    </h1>
                </div>
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
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
                    <h1 class="text-gray-800 text-lg">Séances de mentorat</h1>
                </div>
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
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
                    <h1 class="text-gray-800 text-lg">Séances de coaching pour le dirigeant et l'équipe</h1>
                </div>
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
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
                    <h1 class="text-gray-800 text-lg">Sessions de formations clés</h1>
                </div>
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
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
                    <h1 class="text-gray-800 text-lg">Réseautage et lobbying</h1>
                </div>
            </div>
        </div>
        <div class=" grid grid-cols-12 gap-4 p-2 col-span-1">
            <div class=" col-span-4 p-4 BG rounded-xl transform transition-transform duration-300 hover:scale-105">
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-white text-lg">Souhaitez-vous entreprendre et créer votre start-up ?
                    </h1>
                </div>
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-white text-lg">
                        Vous avez déjà une première idée, ou simplement
                        l'envie de créer ?
                    </h1>
                </div>
                <!-- Service 1 -->
                <div class=" flex items-center gap-4  ">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-white text-lg">
                        Vous avez déjà créé votre entreprise / coopérative et
                        souhaitez-vous être accompagné lors des premières
                        phases de croissance ?
                    </h1>
                </div>
            </div>
            <div class=" col-span-8 relative">
                <div class="">
                    <img class=" h-80 w-full rounded-xl" src="B_U/8.png" alt="">
                </div>
                <div class=" h-80 grid grid-cols-2 col-span-8 p-5 bg-gray-600 opacity-75 rounded-xl absolute top-0">
                    <p class=" col-span-2 font-medium text-white mb-2">Offre de services :</p>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Examiner et formuler votre projet</h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Définir la feuille de route.  </h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner le processus de l’Idéation.</h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Valider le POC. </h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Transférer les compétences. </h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner le processus de l'innovation. </h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner le prototypage et la fabrication. </h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner le plan stratégique et technique.</h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner la mise sur le marché.</h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner le processus de transition.</h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner l'accès au financement.</h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner la création juridique. </h1>
                    </div>
                    <!-- Service 1 -->
                    <div class=" col-span-1 flex items-center gap-4  ">
                        <div>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h1 class="text-white text-lg">Accompagner à la première commande.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class=" grid grid-cols-12 gap-2 p-2 justify-center items-center text-9xl bg-blue-700 font-bold h-96">
        the images
    </div>
</section>
