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
    <img class="w-full hidden lg:block" src="BU_6/2/1.jpeg" alt="">
    <div class="absolute inset-0 BG opacity-25 hidden lg:block"></div>

    <div class="md:absolute top-32 p-10 grid grid-cols-1 md:grid-cols-12 gap-8 pt-32">
        <!-- First Column (Red Background) -->
        <div class="col-span-1 md:col-span-7 md:h-auto flex items-end">
            <h1 class="text-center md:mb-4 text-4xl md:text-2xl lg:text-7xl lg:leading-[16px] md:font-semibold font-bold md:text-white text-orange-500 lg:border-b-8 pb-6">
                ENTREPREUNARIAT
            </h1>
        </div>
        
        <!-- Second Column (Text Content) -->
        <div class="BG col-span-1 md:col-span-6 lg:col-span-5 p-4 md:p-6 rounded-2xl text-gray-50 text-sm">
            <p class="mb-3 font-medium">
                Notre mission est de rendre simple et naturel l’entrepreneuriat pour libérer les
                potentiels, transformant ainsi l'acte d'entreprendre en une aventure épanouissante.
            </p>
            <p class="mb-3">
                L'écosystème entrepreneurial au Maroc connaît une évolution continue et joue un rôle
                essentiel dans le développement économique et social du pays, tout comme dans
                d'autres nations. Dans cette optique, une variété d'initiatives sont déployées pour
                enrichir la culture entrepreneuriale, dans le but d'encourager la créativité et
                l'innovation, tout en renforçant la création d'opportunités d'emploi.
            </p>
            <p class="mb-3">
                En tant qu'acteur engagé dans l'accompagnement de cette dynamique, le cabinet BLUE
                STRATEGY propose une vaste gamme de services et s'est doté d'une équipe hautement
                qualifiée. Sa mission consiste à fournir une assistance aux entrepreneurs en vue de :
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
    </div>
</section>


{{-- NOS SERVICES --}}
<section id="1" class="my-16 px-4 md:px-20">
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
                <img class="rounded-xl mb-2 h-60 w-full" src="BU_6/2/2/1.jpeg" alt="Gestion de projet">
                <h2 class="font-semibold text-lg">GESTION DE PROJET</h2>
                <p class="text-gray-900">
                    Planifier et gérer les projets afin de respecter leurs objectifs et leurs livrables prévus.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2 h-60 w-full" src="BU_6/2/2/2.jpeg" alt="Mentorat">
                <h2 class="font-semibold text-lg">MENTORAT</h2>
                <p class="text-gray-900">
                    Préparer les entrepreneurs pour les prochaines étapes de leur carrière professionnelle.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2 h-60 w-full" src="BU_6/2/2/3.jpeg" alt="Coaching">
                <h2 class="font-semibold text-lg">COACHING</h2>
                <p class="text-gray-900">
                    Optimiser les performances des entrepreneurs, dans un cadre bienveillant et de changement.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2 h-60 w-full" src="BU_6/2/2/4.jpg" alt="Formation">
                <h2 class="font-semibold text-lg">FORMATION</h2>
                <p class="text-gray-900">
                    Développer les compétences des entrepreneurs et leurs niveaux supérieurs de qualification.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2 h-60 w-full" src="BU_6/2/2/5.jpeg" alt="Conseil">
                <h2 class="font-semibold text-lg">PROTOTYPAGE</h2>
                <p class="text-gray-900">
                    Transformer les idées innovantes en prototypes concrets et testables pour valider leur potentiel.
                </p>
            </div>
        </div>
    </div>
</section>


{{-- ACCOMPAGNEMENT DES ORGANISMES ENGAGÉS  --}}
<section id="2" class="px-4 md:px-20">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-2 p-2">
        <div class="md:col-span-5 p-5 md:pt-28 ">
            <div class="flex flex-col md:flex-row items-start md:items-center mb-4">
                <img class="w-10 h-10 mb-4 md:mb-0" src="B_U/35.png" alt="">
                <h1 class="TIT text-2xl font-semibold ml-0 md:ml-4">ACCOMPAGNEMENT DES ORGANISMES ENGAGÉS</h1>
            </div>
            <p class="mb-4 text-base">
                Vous êtes une fondation, association, organisme étatique ou privé, institution,
                université ou école supérieur ? Souhaitez-vous lancer un projet ou une initiative
                ayant pour vocation de soutenir les entrepreneurs innovants ?
            </p>
            <h1 class="mb-4 font-medium text-gray-800">
                BLUE STRATEGY représente votre partenaire idéal pour vous accompagner dans la concrétisation de vos programmes.
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:col-span-7">
            <div class="grid grid-cols-1 gap-2 md:col-span-5">
                <div class="">
                    <div class="mb-3 flex justify-end">
                        <img class="rounded-xl transform translate-x-1 duration-300 hover:scale-105 h-44 w-full" src="BU_6/2/3/1.jpeg" alt="">
                    </div>
                    <div class="mb-3 flex justify-end">
                        <img class="rounded-xl transform translate-x-1 duration-300 hover:scale-105 h-44 w-full" src="BU_6/2/3/2.jpeg" alt="">
                    </div>
                    <div class="mb-3 flex justify-end">
                        <img class="rounded-xl transform translate-x-1 duration-300 hover:scale-105 h-44 w-full" src="BU_6/2/3/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="BG md:col-span-7 rounded-xl p-5">
                <p class="font-medium text-white">Offre de services :</p>
                <div class="grid grid-cols-12 gap-3 text-white md:text-left mr-2 p-2">
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


<section id="3" class=" my-10 lg:my-20 px-4 sm:px-6 lg:px-36">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 ">

        <div class="col-span-12 lg:col-span-6 rounded-3xl relative transform transition-transform duration-300 hover:scale-105">
            <img class="rounded-3xl w-full" src="BU_6/2/4.png" alt="">
            <div class="absolute inset-0 BG opacity-70 rounded-3xl"></div>
            <div class="absolute w-full h-2/3 bottom-0 rounded-3xl p-10 text-white flex flex-col justify-end">
                <div class=" ">
                    <div class="w-36 h-1 bg-white mb-4 "></div>
                    <h1 class="text-2xl text-white sm:text-3xl lg:text-2xl font-semibold mb-4">ACCOMPAGNEMENT AUX STARTUPS</h1>
                    <p class="text-sm text-white sm:text-base lg:text-lg">Quel que soit votre stade de maturité, votre sujet et votre secteur d’activité, les équipes de BLUE STRATEGY vous accompagnent pour structurer votre projet, développer votre activité et orienter vos démarches en tant qu'entrepreneur innovant.</p>
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-6 p-2 lg:p-10 bg-white rounded-3xl transform transition-transform duration-300 hover:scale-105">
            <p class="font-medium text-gray-900 mb-8">Nos atouts :</p>
            <!-- Service 1 -->
            <div class="flex items-center gap-4 mb-6">
                <div class="">
                    <svg class="w-6 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-base lg:text-lg">Accompagnement personnalisé et de proximité</h1>
            </div>
            <!-- Service 2 -->
            <div class="flex items-center gap-4 mb-6">
                <div class="">
                    <svg class="w-6 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-base lg:text-lg">Conseil sur les aspects techniques, humains, intellectuels, commerciaux, marketing et financiers.</h1>
            </div>
            <!-- Service 3 -->
            <div class="flex items-center gap-4 mb-6">
                <div class="">
                    <svg class="w-6 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-base lg:text-lg">Séances de mentorat</h1>
            </div>
            <!-- Service 4 -->
            <div class="flex items-center gap-4 mb-6">
                <div class="">
                    <svg class="w-6 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-base lg:text-lg">Séances de coaching pour le dirigeant et l'équipe</h1>
            </div>
            <!-- Service 5 -->
            <div class="flex items-center gap-4 mb-6">
                <div class="">
                    <svg class="w-6 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-base lg:text-lg">Sessions de formations clés</h1>
            </div>
            <!-- Service 6 -->
            <div class="flex items-center gap-4 mb-6">
                <div class="">
                    <svg class="w-6 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                            </path>
                        </g>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-base lg:text-lg">Réseautage et lobbying</h1>
            </div>
        </div>

    </div>

</section>

<section class="mb-20 p-4 px-2 md:px-4 lg:px-20">
    <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 p-2">
           

        <div class="col-span-1 lg:col-span-8 relative">
            <div class="h-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 col-span-1 md:col-span-8 p-5 rounded-xl bg-gray-100">
                <p class="col-span-1 md:col-span-2 lg:col-span-3 font-semibold text-gray-900 mb-4">Offre de services :</p>
                <!-- Service 1 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" aria-label="Examiner et formuler votre projet">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Examiner et formuler votre projet</h1>
                </div>
                <!-- Service 2 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Définir la feuille de route.</h1>
                </div>
                <!-- Service 3 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner le processus de l’Idéation.</h1>
                </div>
                <!-- Service 4 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Valider le POC.</h1>
                </div>
                <!-- Service 5 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Transférer les compétences.</h1>
                </div>
                <!-- Service 6 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner le processus de l'innovation.</h1>
                </div>
                <!-- Service 7 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner le prototypage et la fabrication.</h1>
                </div>
                <!-- Service 8 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner le plan stratégique et technique.</h1>
                </div>
                <!-- Service 9 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner la mise sur le marché.</h1>
                </div>
                <!-- Service 10 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner le processus de transition.</h1>
                </div>
                <!-- Service 11 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner l'accès au financement.</h1>
                </div>
                <!-- Service 12 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner la création juridique.</h1>
                </div>
                <!-- Service 13 -->
                <div class="flex items-center gap-4 mb-4 lg:col-span-2 md:col-span-2">
                    <div>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/>
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text-black text-sm md:text-base lg:text-lg">Accompagner à la première commande.</h1>
                </div>
            </div>
        </div>
        
        <div class=" BG1 col-span-1 md:col-span-2 lg:col-span-4 p-4 rounded-xl transform transition-transform duration-300 hover:scale-105">
            <!-- Service 1 -->
            <div class="flex items-center gap-4 mb-4">
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
                <h1 class="text-white text-sm md:text-base lg:text-lg">Souhaitez-vous entreprendre et créer votre start-up ?</h1>
            </div>
            <!-- Service 2 -->
            <div class="flex items-center gap-4 mb-4">
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
                <h1 class="text-white text-sm md:text-base lg:text-lg">
                    Vous avez déjà une première idée, ou simplement l'envie de créer ?
                </h1>
            </div>
            <!-- Service 3 -->
            <div class="flex items-center gap-4 mb-4">
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
                <h1 class="text-white text-sm md:text-base lg:text-lg">
                    Vous avez déjà créé votre entreprise / coopérative et souhaitez-vous être accompagné lors des premières phases de croissance ?
                </h1>
            </div>
        </div>
        
    </div>
</section>
