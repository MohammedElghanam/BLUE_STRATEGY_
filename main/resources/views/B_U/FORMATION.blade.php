<style>
    .BOR {
        border: 8px solid;
        border-color: #FFB300;
    }

    .polygon {
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        background: linear-gradient(to right, #FFB300, #ffc439);
    }

    .COLOR {
        background: linear-gradient(to bottom, #FFB300, #ffc439);
    }

    .CO {
        background-color: #FFB300;
    }

    .POL {
        background-color: #FFB300;
        clip-path: polygon(0 0, 90% 0%, 100% 20%, 100% 100%, 0% 100%);
    }

    .BG {
        background-color: #FFB300;
    }

    .TIT {
        color: #FFB300;
    }

    .BOR_1 {
        border-bottom: 3px solid #ae00ff;
    }

    .F {
        border-top: 11px solid #FFB300;
        /* border-left: 11px solid #ffee00; */
    }

    .XS {
        font-size: 14px;
        line-height: 16px;
    }
</style>
{{-- first section --}}
<section id="5" class="pt-16 lg:pt-0">
    <div class="flex justify-center items-center relative">
        <img class="w-full md:w-auto" src="BU_5/1/1.jpg" alt="">
        <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 bg-gray-800 opacity-70"></div>
        <div id="bor" class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0 hidden md:block">
            <div id="red" class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5"></div>
            <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left animate-fade-in">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 05</h1>
                <h1 class="font-bold text-2xl md:text-4xl">FORMATION PROFESSIONNELLE</h1>
            </div>
            <div id="polygon" class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28 hidden md:block"></div>
        </div>
        <div class=" w-full  absolute top-0 p-10 lg:hidden md:hidden ">
            <div class="BG text-white p-6 rounded-xl">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 05</h1>
                <h1 class="font-bold text-2xl md:text-4xl">FORMATION PROFESSIONNELLE</h1>
            </div>
        </div>
    </div>
</section>


{{-- about --}}
<section id="about">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 gap-4">
            <div class="col-span-12 grid grid-cols-12 gap-2 mt-10">
                <div class="col-span-12 flex justify-start items-center gap-2">
                    <span class="BG w-20 h-1"></span>
                    <h1 class="TIT font-bold text-xl">BLUE STRATEGY - FORMATION PROFESSIONNELLE</h1>
                </div>
                <div class=" col-span-12 grid grid-cols-12 justify-center items-center gap-5 pl-2 md:pl-16 pt-6">
                    <div class=" col-span-12 lg:col-span-11 md:col-span-8">
                        <h1 class="font-medium">
                            Trouvez la solution de formation adaptée à vos besoins et
                            transformez vos compétences en performance
                        </h1>
                    </div>
                    <div class="col-span-12 md:col-span-11">
                        <p class="text-lg md:text-xl font-light mb-3">
                            BLUE STRATEGY vous propose une offre de formation variée multisupports, multi-formats et multilingues pour un apprentissage
                            encore plus efficace, à coût optimisé et accessible à tous.
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            Faites passer un nouveau cap à vos équipes avec nos offres
                            thématiques et/ou métiers :                            
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            04 solutions de formation sur différentes thématiques clés,
                            rassemblées autour d’un objectif pédagogique ambitieux pour un
                            impact encore plus fort.
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            On-boarding sur un nouveau poste, évolution professionnelle,
                            reconversion professionnelle, nouvel enjeu stratégique à maîtriser…
                            sont autant de cas auxquels nos solutions peuvent répondre.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-span-12 grid grid-cols-12 gap-4">
                <div class="POL col-span-12 md:col-span-7 h-40 mb-3 flex justify-center items-center">
                    <div class=" lg:hidden block">
                        <h1 class=" text-white text-4xl md:text-4xl font-bold pb-2">ABOUT B.U 05</h1>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-5 items-center hidden lg:flex">
                    <h1 class="TIT md:text-4xl lg:text-4xl font-bold pb-2">ABOUT B.U 05</h1>
                </div>
            </div>

        </div>
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 justify-end gap-3">
            <div class="col-span-12">
                <img src="BU_5/1/2.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section id="" class="px-4 lg:px-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 justify-center items-center p-2 mt-20">
        <div
            class="grid grid-cols-1 lg:grid-cols-12 col-span-12 gap-4 p-6 lg:p-10 border-2 border-gray-300 rounded-3xl relative">
            <div class=" col-span-12 flex justify-center items-center">
                <div
                    class="absolute -top-7 bg-white px-6 lg:px-8 text-center text-3xl lg:text-4xl font-semibold text-gray-900">
                    <h1 class=" text-gray-800">Notre business unit</h1>
                </div>
            </div>
            <div
                class="col-span-12 lg:col-span-6 bg-gray-100 p-6 lg:p-10 rounded-xl transition-transform transform hover:scale-105">

                <div class="grid grid-cols-1">
                    <div
                        class="flex justify-start items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-gray-900">
                        
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#fbc02d" d="m10 17l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9m-6-8L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5z"/></svg>
                        <h1 class=" TIT">Nos specialités</h1>
                    </div>
                    <div class=" grid grid-cols-12 gap-3 text-white text-center p-2 lg:text-left mr-2">
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Formation Inter-entreprise</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Formation Intra-entreprise </p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Formation Sur-mesure</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium">Digital Learning</p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="col-span-12 lg:col-span-6 p-6 bg-gray-100 lg:p-10 rounded-xl transition-transform transform hover:scale-105 ml-2">

                <div class="grid grid-cols-1">
                    <div
                        class="flex justify-start items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-gray-900">
                        
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#fbc02d" fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7m-1.5 8a4 4 0 0 0-4 4a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2a4 4 0 0 0-4-4zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293a3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2a4 4 0 0 0-4-4h-1.1a5.5 5.5 0 0 1-.471.762A6 6 0 0 1 19.5 18M4 7.5a3.5 3.5 0 0 1 5.477-2.889a5.5 5.5 0 0 0-2.796 6.293A3.5 3.5 0 0 1 4 7.5M7.1 12H6a4 4 0 0 0-4 4a2 2 0 0 0 2 2h.5a6 6 0 0 1 3.071-5.238A5.5 5.5 0 0 1 7.1 12" clip-rule="evenodd"/></svg>
                        <h1 class=" TIT">Notre equipe</h1>
                    </div>
                    <div class=" grid grid-cols-12 gap-3 lg:font-medium text-gray-800 text-center p-2 lg:text-left">
                        <p class=" col-span-12">
                            Nos formateurs sont des professionnels et des personnes expérimentées et en activité
                        </p>
                        <p class=" col-span-12">
                            Des spécialistes passionnés par leur métier, et
                            leur activité, qui ont une vraie volonté de
                            transmettre leur savoir et leurs compétences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="SOLUTIONS" class="pt-8 pl-8 my-7">
    <div class="F grid grid-cols-12 relative">
        <div class="md:w-2/5 lg:w-1/2 absolute -top-3 left-0 px-2 bg-white">
            <h1 class="TIT text-2xl md:text-4xl lg:text-4xl font-bold">NOS SOLUTIONS DE FORMATIONS</h1>
        </div>

        <div class="col-span-12 h-24 md:h-32 lg:h-20"></div>

        <div class=" grid grid-cols-12 justify-center items-center col-span-12 gap-6 px-20">

            <div class=" transition-transform transform hover:scale-105 col-span-6 bg-white h-full shadow-xl rounded-xl">
                <div class="max-w-full mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
                    <img class="object-cover w-full rounded h-32 sm:h-44 dark:bg-gray-500" src="BU_5/2/1.jpg">
                    <div class="p-2 space-y-2">
                        <h3 class="text-lg md:text-2xl font-semibold text-blue-900">
                            FORMATION INTER-ENTREPRISE
                        </h3>
                        <div class="h-0.5 w-full bg-blue-900"></div>
                        <p>
                            Pas d’intervenant ou de salle à trouver, vous n’avez rien à
                            faire, nous s’occupons de tout : les locaux, la salle, les
                            formateurs, la forme de l'apprentissage, le groupe de
                            participants, pauses déj ...
                        </p>
                        <p>
                            Les formations se déroulent dans nos locaux, respectant un
                            protocole d’apprentissage interne pour vous accueillir dans
                            les meilleures conditions, structurer et faciliter le processus de
                            votre apprentissage.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" transition-transform transform hover:scale-105 col-span-6 bg-white h-full shadow-xl rounded-xl">
                <div class="max-w-full mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
                    <img class="object-cover w-full rounded h-32 sm:h-44 dark:bg-gray-500" src="BU_5/2/2.jpg">
                    <div class="p-2 space-y-2">
                        <h3 class="text-lg md:text-2xl font-semibold text-blue-900">
                            FORMATION SUR-MESURE
                        </h3>
                        <div class="h-0.5 w-full bg-blue-900"></div>
                        <p>
                            Nos compétences techniques nous permettent de développer un large éventail
                            de solutions Digital Learning
                            efficientes rapidement, destinées à tous les secteurs et
                            métiers, autant pour des individuels en inter-entreprises que pour des
                            groupes d’apprenants en intra-entreprise.
                        </p>
                        <p>
                            Les collaborateurs se forment en permanence, à leur rythme
                            et depuis leur poste de travail, un suivi des progressions et une logistique déléguée à
                            demos.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" transition-transform transform hover:scale-105 col-span-6 bg-white h-full shadow-xl rounded-xl">
                <div class="max-w-full mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
                    <img class="object-cover w-full rounded h-32 sm:h-44 dark:bg-gray-500" src="BU_5/2/3.jpg">
                    <div class="p-2 space-y-2">
                        <h3 class="text-lg md:text-2xl font-semibold text-blue-900">
                            FORMATION INTRA-ENTREPRISE
                        </h3>
                        <div class="h-0.5 w-full bg-blue-900"></div>
                        <p>
                            La formation intra entreprise est une formation issue du
                            catalogue BLUE STRATEGY ( ou sur-mesure ) mise en place
                            au sein de votre organisation.
                        </p>
                        <p>
                            La formation intra entreprise se déroule dans vos locaux, dans
                            le lieu de votre choix ou à distance.
                            Coût réduit, souplesse, cohésion interne… la formation intra
                            entreprise présente de nombreux avantages.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" transition-transform transform hover:scale-105 col-span-6 bg-white h-full shadow-xl rounded-xl">
                <div class="max-w-full mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
                    <img class="object-cover w-full rounded h-32 sm:h-44 dark:bg-gray-500" src="BU_5/2/4.jpg">
                    <div class="p-2 space-y-2">
                        <h3 class="text-lg md:text-2xl font-semibold text-blue-900">
                            DIGITAL LEARNING
                        </h3>
                        <div class="h-0.5 w-full bg-blue-900"></div>
                        <p>
                            Vos équipes sont uniques. Vos enjeux sont spécifiques,
                            plus digitale, plus transversale, plus ouverte… Tout comme son
                            environnement, votre organisation est toujours en mouvement.
                        </p>
                        <p>
                            Ensemble, analysons vos attentes,
                            vos objectifs et concevons votre solution de
                            formation sur mesure. Adaptée, concrète,
                            innovante. Rapidement efficace
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="INGENIERIE" class="my-20">
    <div class="grid grid-cols-12 lg:pl-20 gap-10">

        <div class="grid grid-cols-12 col-span-12 h-20 justify-start items-center bg-white mb-2">
            <div class="col-span-6 h-full flex justify-start items-end gap-5">
                <div class="BG w-28 h-1"></div>
                <h1 class="TIT text-3xl lg:text-4xl font-bold w-full">INGENIERIE DE FORMATION</h1>
            </div>
            <div class="BG col-span-6 px-10 h-full flex justify-end items-center">
                <div class="w-10 h-10 bg-white"></div>
            </div>
        </div>

        <div class="grid grid-cols-12 p-2 gap-2 col-span-12 lg:col-span-12">
            <div class="col-span-12 lg:col-span-6">
                <div class="flex justify-start items-center gap-2 mt-4 ml-14">
                    <h1 class=" text-2xl lg:text-3xl w-full">Accompagnement de vos projets</h1>
                </div>  
                <div class="mt-7 grid gap-2 lg:ml-16">
                    <p class="w-full lg:w-3/4 font-light text-lg lg:text-xl">BLUE STRATEGY vous propose ses services
                        pour la conception et la mise en œuvre de vos projets de formation.</p>
                    <p class="w-full lg:w-3/4 font-light text-lg lg:text-xl">
                        Nous adaptons les actions d'ingénierie de formation en fonction des besoins spécifiques de
                        vos collaborateurs et de la réalité de votre organisation, afin de vous aider à vous positionner
                        de manière durable, en répondant aux réformes du marché de travail et de formation.
                    </p>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <img class="rounded-lg w-full" src="BU_5/3/1.jpg" alt="Formation Image">
            </div>
        </div>

        <div class="grid grid-cols-12 p-2 gap-8 col-span-12 lg:col-span-12">
            <div class="col-span-12 lg:col-span-6">
                <div>
                    <img class="rounded-lg w-full" src="BU_5/2/2.jpg" alt="Project Image">
                </div>
            </div>

            <div class="col-span-12 lg:col-span-6">
                <div class="w-full lg:w-11/12">
                    <div>
                        <div class="flex justify-start items-center gap-4 mb-3">
                        </div>
                        <div class="lg:ml-16">
                            <p class="mb-4">
                                Notre démarche consiste à élaborer des plans de formations entièrement
                                personnalisés suite à une démarche d'ingénierie de formation, répondant à la fois
                                aux exigences des collaborateurs et des structures :
                            </p>
                            <div class="text-gray-900 p-4 grid gap-3">
                                <div class="flex justify-start items-center gap-2">
                                    <div class="">
                                        <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                                    </div>
                                    <p>
                                        L’analyse des demandes et des besoins en formation.
                                    </p>
                                </div>
                                <div class="flex justify-start items-center gap-2">
                                    <div class="">
                                        <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                                    </div>
                                    <p>
                                        La conception du projet de formation.
                                    </p>
                                </div>
                                <div class="flex justify-start items-center gap-2">
                                    <div class="">
                                        <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                                    </div>
                                    <p>
                                        La définition des méthodes et moyens à mettre en œuvre.
                                    </p>
                                </div>
                                <div class="flex justify-start items-center gap-2">
                                    <div class="">
                                        <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                                    </div>
                                    <p>
                                        La coordination et le suivi de la formation.
                                    </p>
                                </div>
                                <div class="flex justify-start items-center gap-2">
                                    <div class="">
                                        <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                                    </div>
                                    <p>
                                        L’évaluation de la formation Ingénierie de formation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section id="DOMAINES">
    <div class=" grid grid-cols-12 gap-2 px-20">
        <div class=" col-span-6 p-10 relative">
            <div class=" BG absolute w-3/5 bottom-28 left-0  p-4 flex justify-center items-center">
                <h1 class="  text-4xl font-bold text-white">NOS DOMAINES DE FORMATI0N </h1> 
            </div>
            <img class="" src="BU_5/4/1.jpg" alt="">
        </div>
        <div class=" grid grid-cols-12 gap-2 col-span-6">
            <div class=" col-span-12 flex justify-center items-center">
                <div class=" w-full rounded-xl p-4 grid grid-cols-12 gap-3 bg-gray-100 shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Direction de l’entreprise et cadres de direction
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Digital, IT et Système d’informations
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Entreprenariat et business développement
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Management et leadership
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Conduite du changement
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Management de projets
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Innovation et créativité
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Développement durable et RSE
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Développement personnel
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Qualité de vie, Santé et bien-être au travail
                        </p>
                    </div>
                    <div class=" col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Efficacité professionnelle et coaching
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-span-12">
                <div class=" bg-gray-100 w-full rounded-xl p-4 grid grid-cols-12 gap-3 shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Bureautique
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Ressources humaines
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Formation et développement des compétence
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Finance - Gestion - Comptabilité
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Commercial et relation client
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Communication - Marketing digital
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Communication graphique
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Achats - Supply Chain - Logistique - Services Généraux
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Qualité - Santé - Sécurité - Environnement
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>

                        <p class=" XS">
                            Lean - Production
                        </p>
                    </div>
                    <div class=" font-medium col-span-6 flex justify-start items-center gap-2">
                        
                        <div class="">
                            <svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Organisation - Conseil - Audit
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-span-12">
                <div class=" BG w-full rounded-xl p-4 grid grid-cols-1 gap-3 shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Secteur Public 
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Banque
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Agriculture et agroalimentaire
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Pêche maritime
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Artisanat
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Industrie
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <div class="">
                            <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>
                        </div>
                        <p class=" XS">
                            Développement durable
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="SECTORIELLES">
    <div class=" grid grid-cols-12 gap-8 px-20">
        <div class=" grid grid-cols-12 items-center gap-2 col-span-6">
            <div class=" col-span-12">
                <div class=" BG w-full p-4 grid grid-cols-1 gap-4 rounded-xl shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        
                        <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Éducation
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Santé et le bien-être
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Culture et art
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Environnement et énergie
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Textile, cosmétiques et consommation
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Tourisme et divertissements
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Transport et logistique
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-span-12 h-60"></div>
        </div>
        
        <div class=" col-span-6 flex justify-end items-center relative">
            <div class=" BG  absolute w-1/2 bottom-24 -left-28 p-4 py-6 flex justify-start items-center">
                <h1 class=" w-1/3 text-4xl font-bold text-white">FORMATIONS SECTORIELLES </h1> 
            </div>
            <img class="" src="BU_5/4/2.jpg" alt="">
        </div>
    </div>
</section>
