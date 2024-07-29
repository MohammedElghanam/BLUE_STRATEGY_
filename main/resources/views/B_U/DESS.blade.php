<style>
    /* 050065, 0d00ff blue */
    .BOR{
        border: 8px solid ;
        border-color:  #ff5722;    
    }
    .polygon {
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        background: linear-gradient(to right, #ff5722, #ff9a3c);
    }
    .COLOR{
        background: linear-gradient(to bottom, #ff5722, #ff9a3c);
    }
    .CO{
        background-color: #ff9a3c;
    }

    .POL{
        background-color: #ff9a3c;
        clip-path: polygon(0 0, 90% 0%, 100% 20%, 100% 100%, 0% 100%);
    }
    .POL1{
        /* background-color: #050065; */
        clip-path: polygon(0 0, 90% 0%, 100% 20%, 100% 100%, 0% 100%);
    }
    .BG{
        background-color: #ff9a3c;
    }
    .TIT{
        color: #ff9a3c;
    }

    .TIT1{
        color: #ff5722;
    }
    .BOR_1{
        border-bottom: 3px solid #ff5722;
    }
    .BOT{
        background: linear-gradient(to right, #ff5722, #ff9a3c);
    }

    .POL_RIGHT{
        clip-path: polygon(0 0, 100% 0, 50% 50%, 0% 100%);
        background-color: #ff9a3c;
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
    .HOV{
        border: 3px solid #ff5722;
        background-color: white;
    }
    .HOV:hover{
        background-color: #ff5722;
    }
    .BOR1{
        border-color: #ff5722;
    }
</style>


{{-- first section  --}}
<section id="6" class="">
    <div class="flex justify-center items-center relative">
        <img class="w-full md:w-auto" src="B_U/TPE/1.png" alt="">
        <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 bg-gray-800 opacity-70"></div>
        <div class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0">
            <div class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5 bg-red-500"></div>
            <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left animate-fade-in">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 06</h1>
                <h1 class="font-bold text-2xl md:text-4xl">ENTREPRENARIAT ET PROJETS D'ESS </h1>
            </div>
            <div class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28"></div>
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
                    <h1 class="TIT font-bold text-xl">BLUE STRATEGY - ENTREPRENARIAT ET PROJETS D'ESS </h1>
                </div>
                <div class="col-span-12 grid grid-cols-12 justify-center items-center gap-5 pl-2 md:pl-16 pt-6">
                    
                    <div class="lg:col-span-12 md:col-span-11">
                        <p class="text-lg md:text-xl font-light mb-3">
                            Le Maroc, aujourd'hui, soutient les projets visant à encourager les
                            activités génératrices d'emplois et de revenus, dont l'objectif global
                            est de libérer les potentiels pour un développement équilibré et
                            inclusif, reflétant l'engagement du pays envers un avenir prospère.                            
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            Dans ce contexte, en capitalisant sur son expertise et son
                            dynamisme collectif, BLUE STRATEGY a créé cette nouvelle unité
                            d'affaires dédiée à l'accompagnement entrepreneurial et à la
                            gestion de projets en économie sociale et solidaire (ESS), en
                            alignement avec ses orientations. stratégique. Celles-ci sont
                            parfaitement cohérentes avec les objectifs du Nouveau Modèle de
                            Développement du Maroc (NMD) et englobent la majorité des 17
                            Objectifs de Développement Durable définis par les Nations Unies
                            (ODD).
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            Notre approche est centrée sur la co-création de valeur et la
                            promotion d'un impact positif durable, en s'appuyant sur la R&D,
                            l'Innovation Sociale, le genre et l'intelligence collective en tant que
                            facteurs majeurs pour le succès de nos communautés à l'avenir.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 grid grid-cols-12 gap-4">
                <div class="POL col-span-12 md:col-span-7 h-40 mb-3"></div>
                <div class="col-span-12 md:col-span-5 flex items-center">
                    <h1 class="TIT text-2xl md:text-4xl lg:text-4xl font-bold pb-2">ABOUT B.U 06</h1>
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
                        
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#ff9a3c" d="m10 17l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9m-6-8L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5z"/></svg>
                        <h1 class=" TIT">Nos specialités</h1>
                    </div>
                    <div class=" grid grid-cols-12 gap-3 text-white text-center p-2 lg:text-left mr-2">
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Accompagnement entrepreneurial.</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Accompagnement aux coopératives. </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Accompagnement aux femmes. </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Accompagnement aux jeunes.</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Accompagnement des associations et ONG.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-span-12 lg:col-span-6 p-6 bg-gray-100 lg:p-10 rounded-xl transition-transform transform hover:scale-105 ml-2">

                <div class="grid grid-cols-1">
                    <div
                        class="flex justify-start items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-gray-900">
                        
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#ff9a3c" fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7m-1.5 8a4 4 0 0 0-4 4a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2a4 4 0 0 0-4-4zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293a3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2a4 4 0 0 0-4-4h-1.1a5.5 5.5 0 0 1-.471.762A6 6 0 0 1 19.5 18M4 7.5a3.5 3.5 0 0 1 5.477-2.889a5.5 5.5 0 0 0-2.796 6.293A3.5 3.5 0 0 1 4 7.5M7.1 12H6a4 4 0 0 0-4 4a2 2 0 0 0 2 2h.5a6 6 0 0 1 3.071-5.238A5.5 5.5 0 0 1 7.1 12" clip-rule="evenodd"/></svg>
                        <h1 class=" TIT">Notre equipe</h1>
                    </div>
                    <div class=" grid grid-cols-12 gap-3 font-medium text-gray-800 text-center p-2 lg:text-left">
                        <p class=" col-span-12">
                            Une équipe composée dotée de compétences diversifiées, capable de favoriser l'impact positif et
                            de stimuler l'innovation à travers l'ensemble de
                            ses missions 
                        </p>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Project managers.  </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Coordinateurs.  </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Consultants.
                            </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Experts métiers.
                            </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Experts solidaires.
                            </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Spécialistes genre</p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Mentors business.  </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Coachs professionnels.  </p>
                        </div>
                        <div class=" col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Formateurs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class=" px-16 my-10">
        <div class=" grid grid-cols-12 gap-8">
            <div class=" col-span-6">
                <div class=" relative">
                    <img class=" rounded-2xl" src="SS/3.png" alt="">
                    
                    <div class=" grid grid-cols-1 gap-2 p-6 rounded-xl BG absolute bottom-10 left-5 w-11/12 transform translate-x-1 duration-300 hover:scale-105">
                        <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                            <div class=" ">
                                <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 17.55l-1.77 1.72a2.47 2.47 0 0 1-3.5-3.5l4.54-4.55a2.46 2.46 0 0 1 3.39-.09l.12.1a1 1 0 0 0 1.4-1.43a2.75 2.75 0 0 0-.18-.21a4.46 4.46 0 0 0-6.09.22l-4.6 4.55a4.48 4.48 0 0 0 6.33 6.33L11.37 19A1 1 0 0 0 10 17.55M20.69 3.31a4.49 4.49 0 0 0-6.33 0L12.63 5A1 1 0 0 0 14 6.45l1.73-1.72a2.47 2.47 0 0 1 3.5 3.5l-4.54 4.55a2.46 2.46 0 0 1-3.39.09l-.12-.1a1 1 0 0 0-1.4 1.43a2.75 2.75 0 0 0 .23.21a4.47 4.47 0 0 0 6.09-.22l4.55-4.55a4.49 4.49 0 0 0 .04-6.33"/></svg>
                            </div>
                            <a href="" class=" font-medium text-white hover:underline">NOS SERVICES D'ACCOMPAGNEMENT ENTREPRENEURIAL </a>
                        </div>
                        <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                            <div class=" ">
                                <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 17.55l-1.77 1.72a2.47 2.47 0 0 1-3.5-3.5l4.54-4.55a2.46 2.46 0 0 1 3.39-.09l.12.1a1 1 0 0 0 1.4-1.43a2.75 2.75 0 0 0-.18-.21a4.46 4.46 0 0 0-6.09.22l-4.6 4.55a4.48 4.48 0 0 0 6.33 6.33L11.37 19A1 1 0 0 0 10 17.55M20.69 3.31a4.49 4.49 0 0 0-6.33 0L12.63 5A1 1 0 0 0 14 6.45l1.73-1.72a2.47 2.47 0 0 1 3.5 3.5l-4.54 4.55a2.46 2.46 0 0 1-3.39.09l-.12-.1a1 1 0 0 0-1.4 1.43a2.75 2.75 0 0 0 .23.21a4.47 4.47 0 0 0 6.09-.22l4.55-4.55a4.49 4.49 0 0 0 .04-6.33"/></svg>
                            </div>
                            <a href="" class=" font-medium text-white hover:underline">ACCOMPAGNEMENT DES ORGANISMES ENGAGÉS </a>
                        </div>
                        <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                            <div class=" ">
                                <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 17.55l-1.77 1.72a2.47 2.47 0 0 1-3.5-3.5l4.54-4.55a2.46 2.46 0 0 1 3.39-.09l.12.1a1 1 0 0 0 1.4-1.43a2.75 2.75 0 0 0-.18-.21a4.46 4.46 0 0 0-6.09.22l-4.6 4.55a4.48 4.48 0 0 0 6.33 6.33L11.37 19A1 1 0 0 0 10 17.55M20.69 3.31a4.49 4.49 0 0 0-6.33 0L12.63 5A1 1 0 0 0 14 6.45l1.73-1.72a2.47 2.47 0 0 1 3.5 3.5l-4.54 4.55a2.46 2.46 0 0 1-3.39.09l-.12-.1a1 1 0 0 0-1.4 1.43a2.75 2.75 0 0 0 .23.21a4.47 4.47 0 0 0 6.09-.22l4.55-4.55a4.49 4.49 0 0 0 .04-6.33"/></svg>
                            </div>
                            <a href="" class=" font-medium text-white hover:underline">ACCOMPAGNEMENT AUX STARTUPS </a>
                        </div>
                    </div>
                </div>
                <div class=" flex justify-start items-center gap-4 px-10 py-6">
                    <div class="">
                        <img class=" w-16 h-16" src="SS/4.png" alt="">
                    </div>
                    <h1 class=" font-semibold text-3xl TIT1">ACCOMPAGNEMENT ENTREPREUNARIAT </h1>
                </div>
            </div>


            <div class=" col-span-6">

                <ol class="relative border-l-4 BOR1 dark:border-gray-700">                  
                    <li class="mb-10 ms-4 relative">
                        <div class="F1 absolute w-5 h-5 bg-gray-200 rounded-full -left-7 HOV"></div>
                        <h3 class="H1 text-lg font-semibold TIT1 dark:text-white">
                            Notre mission est de rendre simple et naturel l’entrepreneuriat pour libérer les
                            potentiels, transformant ainsi l'acte d'entreprendre en une aventure épanouissante.
                        </h3>
                    </li>
                    <li class="mb-10 ms-4 relative">
                        <div class="F2 absolute w-5 h-5 bg-gray-200 rounded-full -left-7 HOV"></div>
                        <h3 class="H2 text-lg  text-gray-900 dark:text-white">
                            L'écosystème entrepreneurial au Maroc connaît une évolution continue et joue un rôle
                            essentiel dans le développement économique et social du pays, tout comme dans
                            d'autres nations. Dans cette optique, une variété d'initiatives sont déployées pour
                            enrichir la culture entrepreneuriale, dans le but d'encourager la créativité et
                            l'innovation, tout en renforçant la création opportunités d'emploi.
                        </h3>
                    </li>
                    <li class="ms-4 relative">
                        <div class="F3 absolute w-5 h-5 bg-gray-200 rounded-full -left-7 HOV"></div>
                        <h3 class="H3 text-lg text-gray-900 dark:text-white">En tant qu'acteur engagé dans l'accompagnement de cette dynamique, le cabinet BLUE
                            STRATEGY propose une vaste gamme de services et s'est doté d'une équipe hautement
                            qualifiée. Sa mission consiste à fournir une assistance aux entrepreneurs en vue de :
                        </h3>
                    </li>
                </ol>
                
                <div class=" grid grid-cols-1 gap-2 p-6 rounded-xl mt-4 ml-4 bg-gray-100 w-11/12 transform translate-x-1 duration-300 hover:scale-105">
                    <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                        <div class=" ">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" font-medium text-gray-800">Libérer leur potentiel d'innovation. </p>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2  ">
                        <div class=" ">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" font-medium text-gray-800">Maximiser le potentiel de leurs idées. </p>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2  ">
                        <div class=" ">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" font-medium text-gray-800">Remettre en question leurs modèles d'entreprise.</p>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2  ">
                        <div class=" ">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" font-medium text-gray-800">Identifier les leviers de succès de leurs startups. </p>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2  ">
                        <div class=" ">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" font-medium text-gray-800">Adopter les bons réflexes en matière d'entrepreneuriat. </p>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2  ">
                        <div class=" ">
                            <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" font-medium text-gray-800">Faire de l'esprit d'entreprendre une vraie culture. </p>
                    </div>
                </div>

            </div>
        </div>
</section>




<section class=" px-16 my-28">
    <div class=" grid grid-cols-12 gap-8">

        <div class=" col-span-6">

            <ol class="relative border-l-4 BOR1 dark:border-gray-700">                  
                <li class="mb-10 ms-4 relative">
                    <div class="F1 absolute w-5 h-5 bg-gray-200 rounded-full -left-7 HOV"></div>
                    <h3 class="H1 text-lg font-semibold TIT1 dark:text-white">
                        Nous sommes à vos côtés pour vous aider à préparer l’avenir et à
                        concilier performance économique et impact social positif.
                    </h3>
                </li>
                <li class="mb-10 ms-4 relative">
                    <div class="F2 absolute w-5 h-5 bg-gray-200 rounded-full -left-7 HOV"></div>
                    <h3 class="H2 text-lg  text-gray-900 dark:text-white">
                        Les évolutions sociales en cours exigent l'accompagnement de nouveaux modèles
                        socio-économiques favorisant le bien-être à la fois individuel et collectif. 
                        En outre, elles requièrent la nécessité d'une coopération coordonnée entre 
                        les divers acteurs, afin de maintenir un équilibre entre l'insertion socio-economique
                    </h3>
                </li>
                <li class="ms-4 relative">
                    <div class="F3 absolute w-5 h-5 bg-gray-200 rounded-full -left-7 HOV"></div>
                    <h3 class="H3 text-lg text-gray-900 dark:text-white">
                        Dans le contexte de l'accompagnement de projets, en particulier ceux concernés de
                        l'ESS, BLUE STRATEGY a développé une expertise solide dans le but de contribuer 
                        activement à la création conjointe de valeur, à travers trois axes essentiels 
                    </h3>
                </li>
            </ol>
            
            <div class=" grid grid-cols-1 gap-2 p-6 rounded-xl mt-4 ml-4 bg-gray-100 w-11/12 transform translate-x-1 duration-300 hover:scale-105">
                <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                    <div class=" ">
                        <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                    </div>
                    <p class=" font-medium text-gray-800">La valorisation des contributions sociales des organisations. </p>
                </div>
                <div class=" cols-span-1 flex justify-start items-center gap-2  ">
                    <div class=" ">
                        <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                    </div>
                    <p class=" font-medium text-gray-800">Le développement de la performance des structures d'ESS. </p>
                </div>
                <div class=" cols-span-1 flex justify-start items-center gap-2  ">
                    <div class=" ">
                        <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                    </div>
                    <p class=" font-medium text-gray-800">La promotion de l'autonomisation économique des femmes et des jeunes dans divers milieux et secteurs.</p>
                </div>
            </div>

            <p class=" font-semibold p-4 text-gray-900">
                Notre expertise dans le domaine d’accompagnement et le développement de
                stratégies de croissance optimisées et innovantes, vise à assister toute entité
                désirant lancer des projets ou une initiative au service de la communauté.
            </p>
        </div>

        
        <div class=" col-span-6">
            <div class=" relative">
                <img class=" rounded-2xl" src="SS/3.png" alt="">
                
                <div class=" grid grid-cols-1 gap-2 p-6 rounded-xl BG absolute bottom-10 left-5 w-11/12 transform translate-x-1 duration-300 hover:scale-105">
                    <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                        <div class=" ">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 17.55l-1.77 1.72a2.47 2.47 0 0 1-3.5-3.5l4.54-4.55a2.46 2.46 0 0 1 3.39-.09l.12.1a1 1 0 0 0 1.4-1.43a2.75 2.75 0 0 0-.18-.21a4.46 4.46 0 0 0-6.09.22l-4.6 4.55a4.48 4.48 0 0 0 6.33 6.33L11.37 19A1 1 0 0 0 10 17.55M20.69 3.31a4.49 4.49 0 0 0-6.33 0L12.63 5A1 1 0 0 0 14 6.45l1.73-1.72a2.47 2.47 0 0 1 3.5 3.5l-4.54 4.55a2.46 2.46 0 0 1-3.39.09l-.12-.1a1 1 0 0 0-1.4 1.43a2.75 2.75 0 0 0 .23.21a4.47 4.47 0 0 0 6.09-.22l4.55-4.55a4.49 4.49 0 0 0 .04-6.33"/></svg>
                        </div>
                        <a href="" class=" font-medium text-white hover:underline">NOS OFFRES D'ACCOMPAGNEMENT DES PROJETS ESS </a>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                        <div class=" ">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 17.55l-1.77 1.72a2.47 2.47 0 0 1-3.5-3.5l4.54-4.55a2.46 2.46 0 0 1 3.39-.09l.12.1a1 1 0 0 0 1.4-1.43a2.75 2.75 0 0 0-.18-.21a4.46 4.46 0 0 0-6.09.22l-4.6 4.55a4.48 4.48 0 0 0 6.33 6.33L11.37 19A1 1 0 0 0 10 17.55M20.69 3.31a4.49 4.49 0 0 0-6.33 0L12.63 5A1 1 0 0 0 14 6.45l1.73-1.72a2.47 2.47 0 0 1 3.5 3.5l-4.54 4.55a2.46 2.46 0 0 1-3.39.09l-.12-.1a1 1 0 0 0-1.4 1.43a2.75 2.75 0 0 0 .23.21a4.47 4.47 0 0 0 6.09-.22l4.55-4.55a4.49 4.49 0 0 0 .04-6.33"/></svg>
                        </div>
                        <a href="" class=" font-medium text-white hover:underline">ACCOMPAGNEMENT DES ONG / ASSOCIATIONS</a>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                        <div class=" ">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 17.55l-1.77 1.72a2.47 2.47 0 0 1-3.5-3.5l4.54-4.55a2.46 2.46 0 0 1 3.39-.09l.12.1a1 1 0 0 0 1.4-1.43a2.75 2.75 0 0 0-.18-.21a4.46 4.46 0 0 0-6.09.22l-4.6 4.55a4.48 4.48 0 0 0 6.33 6.33L11.37 19A1 1 0 0 0 10 17.55M20.69 3.31a4.49 4.49 0 0 0-6.33 0L12.63 5A1 1 0 0 0 14 6.45l1.73-1.72a2.47 2.47 0 0 1 3.5 3.5l-4.54 4.55a2.46 2.46 0 0 1-3.39.09l-.12-.1a1 1 0 0 0-1.4 1.43a2.75 2.75 0 0 0 .23.21a4.47 4.47 0 0 0 6.09-.22l4.55-4.55a4.49 4.49 0 0 0 .04-6.33"/></svg>
                        </div>
                        <a href="" class=" font-medium text-white hover:underline">ACCOMPAGNEMENT AUX COOPERTIVES </a>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                        <div class=" ">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 17.55l-1.77 1.72a2.47 2.47 0 0 1-3.5-3.5l4.54-4.55a2.46 2.46 0 0 1 3.39-.09l.12.1a1 1 0 0 0 1.4-1.43a2.75 2.75 0 0 0-.18-.21a4.46 4.46 0 0 0-6.09.22l-4.6 4.55a4.48 4.48 0 0 0 6.33 6.33L11.37 19A1 1 0 0 0 10 17.55M20.69 3.31a4.49 4.49 0 0 0-6.33 0L12.63 5A1 1 0 0 0 14 6.45l1.73-1.72a2.47 2.47 0 0 1 3.5 3.5l-4.54 4.55a2.46 2.46 0 0 1-3.39.09l-.12-.1a1 1 0 0 0-1.4 1.43a2.75 2.75 0 0 0 .23.21a4.47 4.47 0 0 0 6.09-.22l4.55-4.55a4.49 4.49 0 0 0 .04-6.33"/></svg>
                        </div>
                        <a href="" class=" font-medium text-white hover:underline">ACCOMPAGNEMENT AUX FEMMES </a>
                    </div>
                    <div class=" cols-span-1 flex justify-start items-center gap-2 ">
                        <div class=" ">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 17.55l-1.77 1.72a2.47 2.47 0 0 1-3.5-3.5l4.54-4.55a2.46 2.46 0 0 1 3.39-.09l.12.1a1 1 0 0 0 1.4-1.43a2.75 2.75 0 0 0-.18-.21a4.46 4.46 0 0 0-6.09.22l-4.6 4.55a4.48 4.48 0 0 0 6.33 6.33L11.37 19A1 1 0 0 0 10 17.55M20.69 3.31a4.49 4.49 0 0 0-6.33 0L12.63 5A1 1 0 0 0 14 6.45l1.73-1.72a2.47 2.47 0 0 1 3.5 3.5l-4.54 4.55a2.46 2.46 0 0 1-3.39.09l-.12-.1a1 1 0 0 0-1.4 1.43a2.75 2.75 0 0 0 .23.21a4.47 4.47 0 0 0 6.09-.22l4.55-4.55a4.49 4.49 0 0 0 .04-6.33"/></svg>
                        </div>
                        <a href="" class=" font-medium text-white hover:underline">ACCOMPAGNEMENT AUX JEUNES </a>
                    </div>
                </div>
            </div>
            <div class=" flex justify-start items-center gap-4 px-10 py-6">
                <div class="">
                    <img class=" w-16 h-16" src="SS/5.png" alt="">
                </div>
                <h1 class=" font-semibold text-3xl TIT1 w-4/6">ACCOMPAGNEMENT DES PROJETS D'ESS</h1>
            </div>
        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(".H1").hover(function () {
                $(".F1").css('background-color', '#ff5722');
            }, function () {
                $(".F1").css('background-color', 'white');
            }
        );
        $(".H2").hover(function () {
                $(".F2").css('background-color', '#ff5722');
            }, function () {
                $(".F2").css('background-color', 'white');
            }
        );
        $(".H3").hover(function () {
                $(".F3").css('background-color', '#ff5722');
            }, function () {
                $(".F3").css('background-color', 'white');
            }
        );
    });
</script>

