<style>
.BOR{
    border: 8px solid ;
    border-color:  rgb(30, 58, 138);    
}
.polygon {
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    background: linear-gradient(to right, #000598, #04336c);
}
.COLOR{
    background: linear-gradient(to bottom, #000598, #033675);
}
.CO{
    background-color: #000598;
}

.ONE{
    background-color: aqua;
    /* z-index: -1px; */
}
.ONE::after{
    content: '';
    position: absolute;
    bottom: 0;
    right: -50px;
    width: 50px;
    height: 50px;
    background-color: red;
    border-bottom-left-radius: 30px;
    box-shadow: -10px 4px 0 0  rebeccapurple;
    z-index: -60px;
}

</style>

<section class="pt-20">
    <div class="flex justify-center items-center relative">
        <img class="w-full md:w-auto" src="B_U/8.png" alt="">
        <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 opacity-70"></div>
        <div class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0">
            <div class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5"></div>
            <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 01</h1>
                <h1 class="font-bold text-2xl md:text-4xl">PMO</h1>
                <p class="font-normal">PROJECT MANAGEMENT OFFICE</p>
            </div>
            <div class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28"></div>
        </div>
    </div>
</section>

<section class="p-5">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-5 mt-5">
        <div class="col-span-1 md:col-span-6 py-10 h-full flex justify-center md:justify-start">
            <img src="B_U/9.png" alt="About Us Image" class="w-full md:w-auto rounded-xl">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-6 col-span-1 md:col-span-6 h-full px-5 md:px-10 pt-14">
            <div class="grid grid-cols-1 md:grid-cols-6 items-end col-span-1 md:col-span-6 mb-3">
                <h1 class="col-span-1 md:col-span-3 text-4xl md:text-7xl font-semibold pb-2">ABOUT US.</h1>
                <span class="h-1 col-span-1 md:col-span-4 bg-blue-900 mt-2 md:mt-0"></span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-6 col-span-1 md:col-span-6">
                <div class="col-span-1 md:col-span-5 text-base md:text-lg mb-3">
                    B.U PMO - PROJECT MANAGEMENT OFFICE est notre unité d'affaires
                    dédiée à vous accompagner dans la réalisation de vos projets
                    les plus ambitieux et à transformer vos idées en réalité.
                </div>
                <div class="grid grid-cols-1 md:grid-cols-6 col-span-1 md:col-span-6 p-2">
                    <div class="col-span-1 md:col-span-3 flex justify-center md:justify-end pr-0 md:pr-2 text-4xl md:text-7xl font-normal text-blue-900">01</div>
                    <p class="col-span-1 md:col-span-3 text-base md:text-lg bg-gray-100 p-3 rounded-xl">
                        Que vous soyez une entreprise en plein essor, une organisation
                        publique ou privée ou une start-up, peu importe votre secteur
                        d'activité, nous sommes là pour vous apporter une perspective
                        fraîche et innovante aux défis auxquels vous êtes confrontés
                        dans l'exécution de vos projets.
                    </p>
                    <p class="col-span-1 md:col-span-3 text-base md:text-lg bg-gray-100 p-6 rounded-xl">
                        Nos solutions sur mesure respectent votre activité, culture
                        d'entreprise, contraintes spécifiques et priorités stratégiques,
                        tout en respectant délais et budgets.
                    </p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class=" grid grid-cols-12 ">
        <div class=" grid grid-cols-12 items-end col-span-5 pl-10">
            <div class=" col-span-12 gap-5 grid items-end">
                <div class=" flex items-center justify-start gap-4">
                    <span class="iconify" data-icon="ph:users-three" data-inline="false" style="color: #020085; font-size: 48px;"></span>
                    <h1 class=" text-6xl font-semibold">Notre equipe</h1>
                </div>
                <div class=" font-normal">
                    <p>
                        Une équipe projet doté de compétences diversifiées,
                        qui se tient toujours informée des dernières tendances 
                        et des meilleures pratiques 
                    </p>
                </div>
            </div>
            <div class="col-span-12  grid gap-2 bg-gray-100 rounded-xl p-5">
                <div class=" flex justify-start items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">PMO</span>
                </div>
                <div class=" flex justify-start items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Consultants AMOA</span>
                </div>
                <div class=" flex justify-start items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Chefs de projets</span>
                </div>
                <div class=" flex justify-start items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Business analysts</span>
                </div>
                <div class=" flex justify-start items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Consultants techniques</span>
                </div>
                <div class=" flex justify-start items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Consultants fonctionnels</span>
                </div>
                <div class=" flex justify-start items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Développeurs - solutions</span>
                </div>
                <div class=" flex justify-start items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Designers UX</span>
                </div>
            </div>
            <div class="col-span-12 h-72">
                <img class=" rounded-2xl" src="B_U/12.png" alt="">
            </div>
        </div>

        <div class=" grid grid-cols-12 gap-5 col-span-6 ml-10 ">
             <div class=" col-span-12 relative">
                <img class=" rounded-2xl" src="B_U/14.png" alt="">
                <div class=" ONE flex justify-start items-center rounded-tr-3xl w-96 h-20 bg-blue-600 absolute bottom-0 p-4">
                    
                    <h1 class=" text-4xl font-semibold text-gray-800"> Nos Services PMO</h1>
                </div>
             </div>
             <div class=" grid grid-cols-12 gap-4 col-span-12 bg-gray-100 p-6 rounded-2xl">
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Gestion et management de projets</span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Service d'assistance à la maîtrise d'ouvrage (AMOA).</span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Service d'exécution et de maîtrise d'œuvre (MOE).</span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Conseil et suggestion de projets à mettre en œuvre.
                    </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Etudes et d'analyses diverses liés aux projets. </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Budgétisation et analyse de rentabilité de projets.</span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Conception et planification de projets.</span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Élaboration de schémas fonctionnel et opérationnel. </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Pilotage holistique de projets incluant les aspects clés. </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Conduite du changement et mise en production. </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Assistance technique et fonctionnelle.
                    </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Formation des utilisateurs. </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Mentorta de projet. </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Coaching de projet.
                    </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Évaluation post-projet. </span>
                </div>
                <div class=" col-span-6 flex justify-start items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Services de sourcing et de la sous-traitance.</span>
                </div>
             </div>
        </div>
        <div class=" col-span-1 flex-col justify-center items-start px-4">
            <div class=" w-20 h-20 bg-blue-700 rounded-xl"></div>
            <div class=" rotate-90 mt-6 font-medium text-xl">blue strategy</div>
        </div>
    </div>
</section>

<section class=" px-16 bg-blue-500">
    <div class=" grid grid-cols-12 justify-center items-center bg-red-500 p-2 mt-20">
        <div class="grid grid-cols-12 col-span-12 gap-4 bg-blue-500 p-2 border-8 border-green-500 rounded-3xl relative">
            <div class=" h-20 col-span-12 flex justify-center items-center">
                <div class=" absolute -top-10 w-1/2 bg-yellow-300 p-2 text-center text-6xl font-semibold">
                    <h1>Outsoursing</h1>
                </div>
            </div>
            <div class=" col-span-6 bg-red-500">
                <div class=" h-10 mb-10 relative">
                    <div class=" absolute -top-10 left-8 w-20 h-20 bg-white rounded-full flex justify-center items-center">
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
                    </div>
                </div>
                <div class=" grid grid-cols-12">
                    <div class=" col-span-12 flex justify-center items-center gap-3 text-2xl mb-4 font-semibold bg-green-600">
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
                        <h1>SOLUTION D'EXTERNALISATION PMO</h1>
                    </div>
                    <div class=" col-span-12 justify-center items-center bg-yellow-400">
                        <p class=" w-3/4 ml-16 mb-4">
                            SOLUTION D'EXTERNALISATION PMO
                            Boostez la réussite de vos projets avec notre solution d'externalisation ... un véritable partenariat gagnant- gagnant.
                        </p>
                        <p class=" w-3/4 ml-16">
                            Avec notre solution d'externalisation PMO, vous avez la
                            possibilité de nous confier l'exécution de vos projets tout 
                            en vous concentrant sur la croissance de votre activité.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-span-6 bg-gray-500">
                <div class=" h-10 mb-10 relative">
                    <div class=" absolute -top-10 left-8 w-20 h-20 bg-white rounded-full flex justify-center items-center">
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
                    </div>
                </div>
                <div class=" grid grid-cols-12">
                    <div class=" col-span-12 flex justify-center items-center gap-3 text-2xl mb-4 font-semibold bg-green-600">
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
                        <h1>SOLUTION D'EXTERNALISATION PMO</h1>
                    </div>
                    <div class=" col-span-12 justify-center items-center bg-yellow-400">
                        <p class=" w-3/4 ml-16 mb-4">
                            SOLUTION D'EXTERNALISATION PMO
                            Boostez la réussite de vos projets avec notre solution d'externalisation ... un véritable partenariat gagnant- gagnant.
                        </p>
                        <p class=" w-3/4 ml-16">
                            Avec notre solution d'externalisation PMO, vous avez la
                            possibilité de nous confier l'exécution de vos projets tout 
                            en vous concentrant sur la croissance de votre activité.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>