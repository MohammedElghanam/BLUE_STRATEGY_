<style>
    /* 050065, 0d00ff blue */
    .BOR{
        border: 8px solid ;
        border-color:  #050065;    
    }
    .polygon {
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        background: linear-gradient(to right, #050065, #0d00ff);
    }
    .COLOR{
        background: linear-gradient(to bottom, #050065, #0d00ff);
    }
    .CO{
        background-color: #050065;
    }

    .POL{
        background-color: #050065;
        clip-path: polygon(0 0, 90% 0%, 100% 20%, 100% 100%, 0% 100%);
    }
    .POL1{
        /* background-color: #050065; */
        clip-path: polygon(0 0, 90% 0%, 100% 20%, 100% 100%, 0% 100%);
    }
    .BG{
        background-color: #050065;
    }
    .TIT{
        color: #050065;
    }

    .TIT1{
        background-color: #1f0f89;
    }
    .BOR_1{
        border-bottom: 3px solid #050065;
    }
    .BOT{
        background: linear-gradient(to right, #050065, #0d00ff);
    }

    .POL_RIGHT{
        clip-path: polygon(0 0, 100% 0, 50% 50%, 0% 100%);
        background-color: #050065;
    }
    .POL_LEFT{
        clip-path: polygon(50% 50%, 100% 0, 100% 100%, 0% 100%);
        background-color: #050065;
    }

    .XS{
        font-size: 12px ;
        line-height: 16px ;
    }
    .LG{
        font-size: 16px ;
        line-height: 18px ;
    }
    .XS1{
        font-size: 17px ;
        line-height: 19px ;
    }

</style>

{{-- first section  --}}
<section id="2" class="pt-16 lg:pt-0">
    <div class="flex justify-center items-center relative">
        <img class="w-full md:w-auto" src="B_U/TPE/1.png" alt="">
        <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 bg-gray-800 opacity-70"></div>
        <div id="bor" class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0 hidden md:block">
            <div id="red" class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5"></div>
            <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left animate-fade-in">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 02</h1>
                <h1 class="font-bold text-2xl md:text-4xl">SERVICES AUX TPE / PME </h1>
            </div>
            <div id="polygon" class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28 hidden md:block"></div>
        </div>
        <div class=" w-full h-full absolute top-0 p-10 lg:hidden md:hidden">
            <div class="BG h-full text-white p-6 rounded-xl">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 02</h1>
                <h1 class="font-bold text-2xl md:text-4xl">SERVICES AUX TPE / PME </h1>
            </div>
        </div>
    </div>
</section>




{{-- about  --}}
<section id="about">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 gap-4">
            <div class="col-span-12 grid grid-cols-12 gap-2 mt-10">
                <div class="col-span-12 flex justify-start items-center gap-2">
                    <span class="BG w-20 h-1"></span>
                    <h1 class="TIT font-bold text-xl">BLUE STRATEGY - SERVICES AUX TPE / PME </h1>
                </div>
                <div class="col-span-12 grid grid-cols-12 justify-center items-center gap-5 pl-2 md:pl-16 pt-6">
                    
                    <div class="col-span-12 md:col-span-11">
                        <p class="text-lg md:text-xl font-light mb-3">
                            Forts de notre expertise dans l'accompagnement, associée à
                            notre engagement envers le développement, nous nous
                            positionnons en tant que partenaire stratégique privilégié.
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            C'est avec cette optique que nous avons établi l'unité d'affaires
                            opérationnelle SERVICES AUX TPE/PME, dédiée à soutenir nos
                            clients dans la concrétisation de leurs objectifs stratégiques,
                            l'identification des opportunités de croissance et l'offre de
                            solutions adaptées à leurs exigences particulières.
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            Notre objectif est de relever ensemble et avec succès les défis
                            les plus exigeants inhérents aux fonctions clés au sein de toute
                            entreprise.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 grid grid-cols-12 gap-4">
                <div class="POL col-span-12 md:col-span-7 h-40 mb-3 flex justify-center items-center">
                    <div class=" lg:hidden block">
                        <h1 class=" text-white text-4xl md:text-4xl font-bold pb-2">ABOUT B.U 02</h1>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-5 items-center hidden lg:flex">
                    <h1 class="TIT md:text-4xl lg:text-4xl font-bold pb-2">ABOUT B.U 02</h1>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 justify-end gap-3">
            <div class="col-span-12">
                <img src="B_U/TPE/2.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="" class="px-4 lg:px-16 ">
    <div class="grid grid-cols-1 lg:grid-cols-12 justify-center items-center p-2 mt-20">
        <div
            class="grid grid-cols-1 lg:grid-cols-12 col-span-12 gap-4 p-6 lg:p-10 border-2 border-gray-300 rounded-3xl relative">
            <div class=" col-span-12 flex justify-center items-center">
                <div
                    class="absolute -top-7 bg-white px-9 text-center text-4xl lg:text-4xl font-semibold text-gray-900">
                    <h1 class=" text-gray-900">Notre business unit</h1>
                </div>
            </div>

            <div
                class="col-span-12 lg:col-span-6 bg-gray-100 p-6 lg:p-10 rounded-xl transition-transform transform hover:scale-105">

                <div class="grid grid-cols-1">
                    <div
                        class="flex justify-start items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-gray-900">
                        
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#050065" d="m10 17l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9m-6-8L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5z"/></svg>
                        <h1 class=" TIT">Nos specialités</h1>
                    </div>
                    <div class=" grid grid-cols-12 gap-3 text-white text-center p-2 lg:text-left mr-2">
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Services de conseil et stratégie</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Services de création et reprise d'entreprise</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Services de management et organisation</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Services de design et expérience client </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Services de développement commercial </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Services de marketing et communication </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Services de finance et controle gestion </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Services de QHSE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-span-12 lg:col-span-6 p-6 bg-gray-100 lg:p-10 rounded-xl transition-transform transform hover:scale-105 ml-2">

                <div class="grid grid-cols-1">
                    <div
                        class="flex justify-start items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-gray-900">
                        
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#050065" fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7m-1.5 8a4 4 0 0 0-4 4a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2a4 4 0 0 0-4-4zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293a3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2a4 4 0 0 0-4-4h-1.1a5.5 5.5 0 0 1-.471.762A6 6 0 0 1 19.5 18M4 7.5a3.5 3.5 0 0 1 5.477-2.889a5.5 5.5 0 0 0-2.796 6.293A3.5 3.5 0 0 1 4 7.5M7.1 12H6a4 4 0 0 0-4 4a2 2 0 0 0 2 2h.5a6 6 0 0 1 3.071-5.238A5.5 5.5 0 0 1 7.1 12" clip-rule="evenodd"/></svg>
                        <h1 class=" TIT">Notre equipe</h1>
                    </div>
                    <div class=" grid grid-cols-12 gap-3 font-medium text-gray-800 text-center p-2 lg:text-left">
                        
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Consultants AMOA </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Consultants conduit de changement </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Experts metiers</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Consultants techniques</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Consultants fonctionnels</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Développeurs - solutions</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Designers UX </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="stratégie">
    <div class=" grid grid-cols-12 gap-2 px-20">
        <div class=" col-span-6 p-10 relative">
            <div class=" BG absolute w-3/5 top-48 left-0 p-4 pl-10 flex justify-center items-center gap-2 rounded-xl">
                <div class=" ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24">
                        <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                            <path d="M10.66 10.66A1.9 1.9 0 0 0 10.1 12a1.9 1.9 0 0 0 1.9 1.9a1.9 1.9 0 0 0 1.34-.56"/>
                            <path d="M12 6.3a5.7 5.7 0 1 0 5.7 5.7"/>
                            <path d="M12 2.5a9.5 9.5 0 1 0 9.5 9.5m-5.975-3.524L12.95 11.05"/>
                            <path d="M20.94 5.844L17.7 6.3l.456-3.24a.19.19 0 0 0-.313-.161l-2.148 2.137a1.9 1.9 0 0 0-.513 1.72l.342 1.72l1.72.341a1.9 1.9 0 0 0 1.72-.513L21.1 6.157a.19.19 0 0 0-.162-.313"/>
                        </g>
                    </svg>
                </div>
                <h1 class="  text-3xl font-bold text-white">CONSEIL ET STRATÉGIE</h1> 
            </div>
            <img class=" rounded-xl" src="B_U/FOR/18.svg" alt="">
        </div>
        <div class=" grid grid-cols-12 gap-2 col-span-6">
            <div class=" col-span-12 flex justify-center items-center">
                <div class="grid grid-cols-12 gap-2 p-2 col-span-11">
                    
                    <div class=" col-span-12 my-4">
                        <h1 class=" font-medium">
                            Relevez vos défis et démarquez-vous de la concurrence dans un monde en constante évolution.
                        </h1>
                    </div>
                    <div class=" col-span-12 ">
                        <p>
                            Soyez prêt à observer l'épanouissement de votre
                            entreprise ou de votre organisation grâce à nos services de conseil et de stratégie. Ensemble, nous façonnons un avenir prometteur et pour votre entité.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-span-12">
                <div class=" rounded-xl bg-gray-100 grid grid-cols-12 gap-3 p-6 font-medium text-gray-800 text-center lg:text-left shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">                        
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS ">Diverses missions d'études, d'audits et de diagnostics</p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <p class=" text-gray-700 XS ">Déclinaison des stratégies.  </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS ">Alignement stratégique.</p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS ">Élaboration de plans stratégies. </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS ">Développement de propositions de valeur.</p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS ">Création de nouveaux modèles économiques. </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS ">Gestion de la croissance et de l'expansion.  </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS ">Révision et optimisation des opérations internes.</p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS ">Surveillance technologique et innovation. </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS "> Suivi et ajustement de la mise en œuvre stratégique. </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS "> Formation du personnel à la stratégie. </p>
                    </div>
                </div>
            </div>
            <div class=" col-span-12">
                <div class=" BG w-full rounded-xl p-4 grid grid-cols-2 gap-3 shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil aux dirigeants 
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil stratégique.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en investissement
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en business développemen
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">                           
                            Conseil en management des organisations.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en management des projets
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en conduite de changement.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en développement de marque.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en expérience et relation Client
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en finance et services bancaires.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en systèmes d'informations.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en transformation digitale
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en développement du personnel.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en gestion des risques
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en QHSE.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conseil en développement RSE.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="creation" class=" relative my-10">
    <div class="grid grid-cols-12 gap-6 px-20 absolute w-full h-full">
        <div class="col-span-6 relative">
            <div class=" bg-gray-100 p-6 absolute rounded-xl transform translate-x-1 duration-300 hover:scale-105">
                <div class=" flex justify-start items-center gap-2 mb-4">
                    <div class="">
                        <img class=" w-8 h-8" src="B_U/TPE/15.png" alt="">
                    </div>
                    <h1 class=" text-2xl font-bold text-gray-800">CRÉATION D'ENTREPRISE</h1>
                </div>
                <p>
                    Afin d'apporter un soutien complet aux créateurs et repreneurs d'entreprises ou d'organisations, nous avons développés une
                    ligne de 09 services spécialement conçus pour les accompagner à toutes les étapes de
                    leurs projets, depuis sa création jusqu'à sa mise en endroit réussi :
                </p>
            </div>
            <div class=" w-full grid grid-cols-1 gap-2 p-6 BG rounded-xl absolute top-56 transform translate-x-1 duration-300 hover:scale-105">
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Analyse préalable.
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Etude de faisabilité. 
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Organisation de la future structure.
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Etude financière.
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Formalisation du business plan. 
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Accompagnement au financement.
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Création juridiques et formalités. 
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Organisation administrative et comptable.
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Networking.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-6 relative">
            <div class=" w-full grid grid-cols-1 gap-2 p-6 bg-gray-100 rounded-xl absolute top-56 transform translate-x-1 duration-300 hover:scale-105">
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                        <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                    </div>
                    <p class="LG">
                        Transformation Agile des organisations.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Transformation Digitale des organisations.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Modernisation et restructuration. 
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Management organisationnel. 
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Management de transition.  
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Audit organisationnel. 
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Diagnostic managérial. 
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Optimisation des systèmes d’entreprise
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Modélisation organisationnelle.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Etablissement du référentiel de fonctions.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Etablissement du référentiel des processus.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Etablissement du référentiel des procédures.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Formation des managers et collaborateurs.
                    </p>
                </div>
            </div>
            
            <div class=" BG text-white p-6 absolute bottom-0 rounded-xl transform translate-x-1 duration-300 hover:scale-105">
                <div class=" flex justify-start items-center gap-2 mb-4">
                    <div class="">
                        <img class=" w-8 h-8" src="B_U/22.png" alt="">
                    </div>
                    <h1 class=" text-2xl font-bold">MANAGEMENT ET ORGANISATION </h1>
                </div>
                <p>
                    Débloquez le potentiel de votre organisme avec nos services 
                    en matière de management et d'organisation. Offrant diverses 
                    prestations pour maximiser votre efficacité et stimuler votre 
                    croissance.
                </p>
            </div>
        </div>
    </div>

    <div class=" grid grid-cols-12 gap-2 p-8 bg-white">
        <img class=" col-span-12 rounded-2xl" src="B_U/TPE/10.png" alt="">
    </div>
</section> 



<section id="design" class=" px-20 bg-gray-50">
    <div class=" grid grid-cols-12 gap-2 p-2">
        
        <div class="grid grid-cols-12 gap-2 p-2 col-span-4">
            <div class=" col-span-12 grid gap-4">
                <img class=" rounded-xl shadow-xl transform translate-x-1 duration-300 hover:scale-95 " src="B_U/32.png" alt="">
                <img class=" rounded-xl shadow-xl transform translate-x-1 duration-300 hover:scale-95 " src="B_U/26.png" alt="">
                <img class=" rounded-xl shadow-xl transform translate-x-1 duration-300 hover:scale-95 " src="B_U/32.png" alt="">
            </div>
        </div>
        <div class=" grid grid-cols-8 gap-2 p-2 col-span-8">


            <div class="col-span-8">

                <div class=" mb-6 flex justify-start items-center gap-4">
                    <div class="">
                        <img class=" w-12 h-12" src="B_U/37.png" alt="">
                    </div>
                    <h1 class=" text-3xl font-bold TIT">DESIGN ET EXPÉRIENCE CLIENT</h1>    
                </div>

                <p class=" mb-8 font-medium">
                    Dans un monde évolutif et digitalisé, les consommateurs ont renforcé leur exigence
                    tant sur les offres que sur l’expérience client. BLUE STRATEGY vous accompagne dans la
                    réimagination et la conception de solutions novatrices, adaptées aux évolutions du marché tout en améliorant l'expérience pour vos clients.
                </p>

                <div class="grid grid-cols-2 gap-2 p-8 rounded-xl bg-gray-100 shadow-xl transform translate-x-1 duration-150 hover:scale-105">
                
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Redéfinition du modèle économique. 
                        </p>
                    </div>   
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Accompagnement à l'innovation. 
                        </p>
                    </div>    
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Conception de produits et services.
                        </p>
                    </div>   
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Mise en cadre les offres.
                        </p>
                    </div>   
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Définition de la feuille de route. 
                        </p>
                    </div>   
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Analyse du parcours client.
                        </p>
                    </div>   
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Mise en place cadrée du POC Agile.
                        </p>
                    </div>   
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Supervision du POC.
                        </p>
                    </div>   
                    <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class="LG">
                            Formation des designers.
                        </p>
                    </div>   
                    
                </div>
            </div>
            

            
        </div>
    </div>
</section>




<section id="marketing" >
    <div class=" grid grid-cols-12 gap-2 px-20">
        <div class=" col-span-6 p-10 relative">
            <div class=" BG absolute w-3/4 top-48 left-0 p-4 pl-10 flex justify-center items-center gap-4 rounded-xl">
                <div class=" mb-2">
                    <img class=" w-16 h-16" src="B_U/20.png" alt="">
                </div>
                <h1 class="  text-3xl font-bold text-white">MARKETING ET COMMUNICATION</h1> 
            </div>
            <img class=" rounded-xl" src="B_U/FOR/18.svg" alt="">
        </div>
        <div class=" grid grid-cols-12 gap-2 col-span-6">
            <div class=" col-span-12 flex justify-center items-center">
                <div class="grid grid-cols-12 gap-2 p-2 col-span-11">
                    
                    <div class=" col-span-12 ">
                        <p class=" font-medium">
                            Optimisez votre visibilité et suscitez l'intérêt
                            d'un public actif grâce à nos services de marketing et de communication spécialisés. Nous vous accompagnons tout au long du processus pour renforcer vos promotions et mettre en avant l'image de votre marque.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-span-12">
                <div class=" rounded-xl bg-gray-100 grid grid-cols-6 gap-3 p-6 font-medium text-gray-800 text-center lg:text-left shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">                        
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS1 ">Gestion de projets marketing. </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <p class=" text-gray-700 XS1 ">Développement de stratégies de com. </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS1 ">Etudes et audits marketing.</p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS1 ">Marketing digital. </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS1 ">Marketing d'influence.</p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS1 ">Marketing des services. </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-4">
                        <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" text-gray-700 XS1 ">Inbound marketing. </p>
                    </div>
                </div>
            </div>
            <div class=" col-span-12">
                <div class=" BG w-full rounded-xl p-4 grid grid-cols-1 gap-3 shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS1">
                            Branding de marque. 
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS1">
                            Conception de campagnes publicitaires. 
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS1">
                            Gestion de communauté (CM).
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS1">
                            Développement web et applications. 
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS1">                           
                            Conception graphique.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS1">
                            Elaboration de supports et contenu.
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS1">
                            Encadrement des équipes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="COMMERCIAL" class=" relative my-10">
    <div class="grid grid-cols-12 gap-6 px-20 absolute w-full h-full">
        
        <div class="col-span-6 relative">
            
            <div class=" w-full grid grid-cols-1 gap-2 p-6 bg-gray-100 rounded-xl absolute bottom-48 transform translate-x-1 duration-300 hover:scale-105">
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                        <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                    </div>
                    <p class="LG">
                        Transformation Agile des organisations.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Transformation Digitale des organisations.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Modernisation et restructuration. 
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Management organisationnel. 
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Management de transition.  
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Audit organisationnel. 
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Diagnostic managérial. 
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Optimisation des systèmes d’entreprise.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Modélisation organisationnelle.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Etablissement du référentiel de fonctions.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Etablissement du référentiel des processus.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Etablissement du référentiel des procédures.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Formation des collaborateurs.
                    </p>
                </div>
                <div class=" text-gray-700 font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                    <p class="LG">
                        Formation des managers et des dirigeants.
                    </p>
                </div>
            </div>
            <div class=" BG text-white p-6 absolute bottom-0 rounded-xl transform translate-x-1 duration-300 hover:scale-105">
                <div class=" flex justify-start items-center gap-2 mb-4">
                    <div class="">
                        <img class=" w-8 h-8" src="B_U/21.png" alt="">
                    </div>
                    <h1 class=" text-2xl font-bold">FINANCE ET CONTROLE GESTION </h1>
                </div>
                <p>
                    Bénéficiez d'une analyse approfondie de
                    vos performances ainsi que d'une planification stratégique solide grâce à nos
                    services en finance et contrôle de gestion.
                </p>
            </div>
        </div>

        <div class="col-span-6 relative">
            <div class=" bg-gray-100 p-6 absolute rounded-xl transform translate-x-1 duration-300 hover:scale-105">
                <div class=" flex justify-start items-center gap-2 mb-4">
                    <div class="">
                        <img class=" w-8 h-8" src="B_U/TPE/16.png" alt="">
                    </div>
                    <h1 class=" text-2xl font-bold text-gray-800">DÉVELOPPEMENT COMMERCIAL</h1>
                </div>
                <p>
                    Boostez votre croissance grâce à nos services
                    de développement commercial, qui allient
                    expertise stratégique et opérationnelle. Nous
                    vous accompagnons dans l'exploration de
                    nouveaux marchés, l'optimisation de vos
                    ventes et l'augmentation de votre chiffre
                    d'affaires.
                </p>
            </div>
            <div class=" w-full grid grid-cols-1 gap-2 p-6 BG rounded-xl absolute top-56 transform translate-x-1 duration-300 hover:scale-105">
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Conseil stratégique.
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Analyses de marché.
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Restructuration du département C. 
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Développement d'opportunités B2B. 
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Développement des offres . 
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Digitalisation des processus.
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Gestion de la relation client. 
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Développement de plan PAC et de plans
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Marketing. 
                    </p>
                </div>
                <div class=" text-white font-medium col-span-1 flex justify-start items-center gap-2">
                    <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                    <p class=" text-lg">
                        Amélioration de la force de vente.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class=" grid grid-cols-12 gap-2 p-8 bg-white">
        <img class=" col-span-12 rounded-2xl" src="B_U/TPE/10.png" alt="">
    </div>
</section> 




<section id="QHSE">
    <div class=" grid grid-cols-12 gap-2 px-20">
        
        <div class=" grid grid-cols-12 gap-2 col-span-6">
            <div class=" col-span-12 py-16">
                <div class=" mb-8">
                    <p class=" font-medium w-3/4">
                        Conseil et accompagnement pour la mise en place de
                        systèmes de management :
                    </p>
                </div>
                <div class=" mb-8">
                    <div class=" rounded-xl bg-gray-100 grid grid-cols-6 gap-3 p-6 font-medium text-gray-800 text-center lg:text-left shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">                        
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 XS ">
                                GQualité –Iso 9001 (Approche Processus/ Gestion des
                                indicateurs), 
                            </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                    <g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <circle cx="12" cy="12" r="9"/>
                                        <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <p class=" text-gray-700 XS ">Hygiène et sécurité des Aliments Iso 22000/ BRC et IFS ; </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 XS ">
                                Santé et sécurité au travail Iso 45001, (Document Unique, Comité
                                Hygiène et Sécurité au travail, Situations d’urgences…)
                                Environnement- ISO 14001 ;
                            </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 XS ">Autres normes : 17025 (Laboratoire) / 22 916 (Cosmétiques-Bonnes Pratiques de Fabrication)</p>
                        </div>
                        
                    </div>
                </div>
                <div class="">
                    <div class=" BG w-full rounded-xl p-4 grid grid-cols-1 gap-3 shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Formation et sensibilisation, en matière : 
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Sécurité des aliments et conditions d’hygiène ; 
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Management des risques à travers la méthode HACCP ;
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Méthodes et outils d’analyses de Risques professionnels,
                                Arbre des Causes…
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">                           
                                Analyse environnementale et Cycle de vie (Impacts et
                                Aspect environnementaux…) ;
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Exigences des normes ISO ;
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Outils et démarches Lean : Six Sigma, VSM, 5S, résolution
                                de problèmes….
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                ccompagnement lors des transitions des systèmes de management vers les nouvelles versions des normes
                                HQSE (Diagnostics et élaboration des plans d'actions
                                adaptés).
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Audit de conformité aux exigences des normes et aux
                                références réglementaires propres à chaque secteur
                                d'activité (Veille réglementaire).
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Accompagnement pour l'agrément ou l’autorisation
                                sanitaire de l'ONSSA
                            </p>
                        </div>
                        <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                            <div class="">
                                <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" XS">
                                Accompagnement des ressources humaines en vue
                                d'assurer leur engagement dans les projets
                                d'amélioration continue et de renforcer leur
                                responsabilité individuelle et collective.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class=" col-span-6 p-10 relative ml-4">
            <div class=" BG absolute w-4/6 top-48 left-0 p-4 pl-10 justify-center items-center rounded-xl">
                <div class=" mb-2 flex justify-start items-center gap-2">
                    <img class=" w-10 h-10" src="B_U/33.png" alt="">
                    <h1 class="  text-4xl font-bold text-white mb-4">QHSE</h1> 
                </div>
                
                <h1 class=" text-xs font-medium text-white ">QUALITÉ, HYGIÈNE, SÉCURITÉ ET ENVIRONNEMENT</h1>
            </div>

            <div class=" bg-white absolute w-4/5 bottom-16 left-14 p-4 pl-10 justify-center items-center rounded-xl">
                <p class=" text-gray-800 font-medium">
                    Notre équipe est disponible pour vous accompagner dans vos
                    projets d'amélioration de vos performances opérationnelles et
                    organisationnelles. Elle vous oriente dans l'alignement de vos
                    pratiques avec les diverses exigences des normes ISO en matière
                    d'hygiène, de qualité, de sécurité et d'environnement.   
                </p>
            </div>

            <img class=" rounded-xl" src="B_U/FOR/18.svg" alt="">
        </div>
    </div>
</section>




{{-- <section class=" p-2 bg-red-500">
    <div class=" grid grid-cols-12 gap-2 p-2 h-96 bg-blue-600"></div>
</section> --}}