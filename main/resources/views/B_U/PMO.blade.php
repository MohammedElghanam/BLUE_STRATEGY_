<style>
.BOR{
    border: 8px solid ;
    border-color:  rgb(255, 0, 0);    
}
.polygon {
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    background: linear-gradient(to right, #d70707, #ff0000);
}
.COLOR{
    background: linear-gradient(to bottom, #d70707, #ff0000);
}
.CO{
    background-color: #ff2600;
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

.BOX{
    box-shadow: 0  -1px 3px 1px rgb(209, 209, 209) ;
}

.LINE{
    /* width: screen; */
    height: 220px;
    position: absolute;
    top: 80px;
    left: -144px;
    border-top: 12px solid rgb(30, 58, 138);
    border-left: 12px solid rgb(30, 58, 138);
}

.C1{
    background-color: #d70707;
}
.C2{
    color: #d70707;
}


</style>

{{-- first section  --}}
<section class="pt-20">
        <div class="flex justify-center items-center relative">
            <img class="w-full md:w-auto" src="B_U/8.png" alt="">
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
</section>

{{-- about  --}}
<section class="p-5">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-5 mt-5">
        <div class="col-span-1 md:col-span-6 py-10 h-full flex justify-center md:justify-start">
            <img src="B_U/9.png" alt="About Us Image" class="w-full md:w-auto rounded-xl">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-6 col-span-1 md:col-span-6 h-full px-5 md:px-10 pt-14">
            <div class="grid grid-cols-1 md:grid-cols-6 items-end col-span-1 md:col-span-6 mb-3">
                <h1 class="col-span-1 md:col-span-3 text-4xl md:text-7xl font-semibold pb-2">ABOUT US.</h1>
                <span class="C1 h-0.5 col-span-1 md:col-span-4 mt-2 md:mt-0"></span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-6 col-span-1 md:col-span-6">
                <div class="col-span-1 md:col-span-5 text-base md:text-lg mb-3">
                    B.U PMO - PROJECT MANAGEMENT OFFICE est notre unité d'affaires
                    dédiée à vous accompagner dans la réalisation de vos projets
                    les plus ambitieux et à transformer vos idées en réalité.
                </div>
                <div class="grid grid-cols-1 md:grid-cols-6 col-span-1 md:col-span-6 p-2">
                    <div class="C2 col-span-1 md:col-span-3 flex justify-center md:justify-end pr-0 md:pr-2 text-4xl md:text-7xl font-normal">01</div>
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

{{-- notre equepe  --}}
<section class="py-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-5 lg:pl-10">
            <div class="space-y-5 mb-5">
                <div class="flex items-center gap-4">
                    <span class="iconify" data-icon="ph:users-three" data-inline="false" style="color: #020085; font-size: 48px;"></span>
                    <h1 class="text-6xl font-semibold">Notre équipe</h1>
                </div>
                <p class="font-normal">
                    Une équipe projet doté de compétences diversifiées,
                    qui se tient toujours informée des dernières tendances 
                    et des meilleures pratiques.
                </p>
            </div>
            <div class="space-y-2 bg-gray-100 rounded-xl p-5">
                <div class="flex items-center gap-4">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class="font-semibold text-gray-800">PMO</span>
                </div>
                <div class=" flex items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Consultants AMOA</span>
                </div>
                <div class=" flex items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Chefs de projets</span>
                </div>
                <div class=" flex items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Business analysts</span>
                </div>
                <div class=" flex items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Consultants techniques</span>
                </div>
                <div class=" flex items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Consultants fonctionnels</span>
                </div>
                <div class=" flex items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Développeurs - solutions</span>
                </div>
                <div class=" flex items-center gap-4">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-gray-800">Designers UX</span>
                </div>
            </div>
            <div class="mt-5 h-72">
                <img class="rounded-2xl w-full h-full object-cover" src="B_U/12.png" alt="">
            </div>
        </div>

        <div class="lg:col-span-6 ml-10">
            <div class="relative mb-5">
                <img class="rounded-2xl w-full h-72 object-cover" src="B_U/14.png" alt="">
                <div class="ONE absolute bottom-0 left-0 w-3/5 h-20 bg-blue-600 flex items-center justify-start p-4 rounded-tr-3xl">
                    <h1 class="text-4xl font-semibold text-gray-800">Nos Services PMO</h1>
                </div>
            </div>
            <div class="bg-gray-100 p-6 rounded-2xl grid gap-4">
                <div class="flex items-center gap-4">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class="font-semibold text-gray-800">Gestion et management de projets</span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Service d'assistance à la maîtrise d'ouvrage (AMOA).</span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Service d'exécution et de maîtrise d'œuvre (MOE).</span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Conseil et suggestion de projets à mettre en œuvre.
                    </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Etudes et d'analyses diverses liés aux projets. </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Budgétisation et analyse de rentabilité de projets.</span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Conception et planification de projets.</span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Élaboration de schémas fonctionnel et opérationnel. </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Pilotage holistique de projets incluant les aspects clés. </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Conduite du changement et mise en production. </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Assistance technique et fonctionnelle.
                    </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Formation des utilisateurs. </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Mentorta de projet. </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Coaching de projet.
                    </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Évaluation post-projet. </span>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" font-semibold text-gray-800">Services de sourcing et de la sous-traitance.</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- outsoursing  --}}
<section class="px-4 lg:px-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 justify-center items-center p-2 mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 col-span-12 gap-4 p-6 lg:p-10 border-4 border-gray-300 rounded-3xl relative">
            <div class="h-10 col-span-12 flex justify-center items-center">
                <div class="absolute -top-14 w-2/3 lg:w-1/3 bg-white p-2 text-center text-4xl lg:text-6xl font-semibold text-gray-900">
                    <h1>Outsourcing</h1>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 bg-red-700 p-6 lg:p-10 rounded-xl transition-transform transform hover:scale-105">
                <div class="h-5 mb-10 relative">
                    <div class="BOX absolute -top-16 left-1/2 transform -translate-x-1/2 lg:left-8 w-20 h-20 bg-white rounded-full flex justify-center items-center">
                        <svg class="w-10 h-10 text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-center items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-white">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                            <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4.5 8L7 10.5L9.5 8M7 10.5v-7"/>
                                <path d="M7 13.5a6.5 6.5 0 1 0 0-13a6.5 6.5 0 0 0 0 13"/>
                            </g>
                        </svg>
                        <h1>SOLUTION D'INTERNALISATION PMO</h1>
                    </div>
                    <div class="text-white text-center lg:text-left">
                        <p class="mb-4">
                            Créez votre propre unité PMO et gérez vos projets vous-même.
                        </p>
                        <p>
                            Avec notre proposition d'internalisation PMO, nous vous offrons la possibilité de renforcer vos compétences
                            internes en vous guidant dans l'établissement de votre propre unité de gestion de projet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 bg-blue-900 p-6 lg:p-10 rounded-xl transition-transform transform hover:scale-105">
                <div class="h-5 mb-10 relative">
                    <div class="BOX absolute -top-16 left-1/2 transform -translate-x-1/2 lg:left-8 w-20 h-20 bg-white rounded-full flex justify-center items-center">
                        <svg class="w-10 h-10 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-center items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-white">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 rotate-180" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                            <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4.5 8L7 10.5L9.5 8M7 10.5v-7"/>
                                <path d="M7 13.5a6.5 6.5 0 1 0 0-13a6.5 6.5 0 0 0 0 13"/>
                            </g>
                        </svg>
                        <h1>SOLUTION D'EXTERNALISATION PMO</h1>
                    </div>
                    <div class="text-white text-center lg:text-left">
                        <p class="mb-4">
                            Boostez la réussite de vos projets avec notre solution d'externalisation ... un véritable partenariat gagnant-gagnant.
                        </p>
                        <p>
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

{{-- TYPES project  --}}
<section class="relative my-5 bg-gray-100">
    <div class="grid grid-cols-12 gap-4 mt-20">
        <div class="col-span-12 lg:col-span-6 relative">
            <img class="w-11/12 mx-auto lg:mx-0" src="B_U/15.png" alt="">
            <div class="grid grid-cols-12 gap-1 w-11/12 lg:w-2/3 bg-blue-900 absolute top-64 z-30 right-1 lg:right-0 lg:-right-10 p-4 rounded-xl">
                <div class="col-span-12 h-10 flex justify-start items-center gap-2 mb-2">
                    <span class="font-bold text-gray-100 text-2xl">PROJETS EXTRA-ENTREPRISE :</span>
                </div>
                <div class="col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class="font-semibold text-white">Projets d'établissement de nouveaux sites.</span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projets de développement sectoriel</span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projets de coopération. </span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projet de promotion événementielle.</span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projets de développement RSE</span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projets d'appui à la R&D</span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projets d'appui à l'innovation. </span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projets d'appui à l'innovation sociale</span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projets d'appui au développement ESS</span>
                </div>
                <div class=" col-span-12 h-10 flex justify-start items-center gap-2 ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" font-semibold text-white">Projets d'appui à l'entreprenariat.</span>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-12 gap-3 p-2 col-span-12 lg:col-span-6">
            <div class="col-span-12 h-10 relative">
                <div class="LINE w-full z-20"></div>
                <div class="w-full h-6 absolute bottom-0 z-20">
                    <h1 class="text-6xl font-semibold text-gray-900">TYPES DE PROJETS</h1>
                </div>
            </div>
            <div class="col-span-12 p-1 relative">
                <div class="-z-30">
                    <div class="grid grid-cols-12 gap-5 w-full lg:w-3/4 p-2 absolute lg:-top-16 lg:right-20">
                        <div class="col-span-12 h-10 flex justify-start items-center gap-2 mb-2">
                            <span class="font-bold text-gray-900 text-2xl">PROJETS INTRA-ENTREPRISE :</span>
                        </div>
                        <div class="col-span-12 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div>
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800">Projets d'investissement</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets de transformation.</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets de développement de produits/services. </span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets d'expansion sur le marché.</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets de création ou de reprise d'entreprise.</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets de restructuration organisationnelle. </span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets d'optimisation de de système opérationnel.</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets de modernisation organisationnelle.</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets d'optimisation de système d'informations </span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800"> Projets de transformation digitale.</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800">Projets de développement web. </span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800"> Projets d'ingénierie de services </span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets d'ingénierie de formation. </span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets de renforcement de compétences</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800"> Projets de développement RH.</span>
                        </div>
                        <div class=" col-span-6 h-10 flex justify-start items-center gap-2 ml-3">
                            <div class="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <span class=" font-semibold text-gray-800">Projets de marketing et branding de marque.</span>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-96"></div>
</section> 

