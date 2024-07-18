<style>
.BOR{
    border: 8px solid ;
    border-color:  #810000;    
}
.polygon {
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    background: linear-gradient(to right, #810000, #ff0000);
}
.COLOR{
    background: linear-gradient(to bottom, #810000, #ff0000);
}
.CO{
    background-color: #810000;
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
    border-top: 12px solid #ff0000;
    border-left: 12px solid #ff0000;
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
.TIT{
    color: #ff0000;
}

.TIT1{
    color: #0026ff;
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
<section class=" mb-10">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 gap-4">
            <div class="col-span-12 grid grid-cols-12 gap-2 mt-10">
                <div class="col-span-12 flex justify-start items-center gap-2">
                    <span class="BG w-20 h-1"></span>
                    <h1 class="TIT font-medium text-xl">Blue strategy - PMO - PROJECT MANAGEMENT OFFICE</h1>
                </div>
                <div class="col-span-12 grid grid-cols-12 justify-center items-center gap-5 pl-2 md:pl-16 pt-6">
                    <div class="col-span-12 md:col-span-11">
                        <p class="text-lg md:text-xl font-light mb-3">
                            B.U PMO - PROJECT MANAGEMENT OFFICE est notre unité d'affaires
                            dédiée à vous accompagner dans la réalisation de vos projets
                            les plus ambitieux et à transformer vos idées en réalité.
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            Que vous soyez une entreprise en plein essor, une organisation
                            publique ou privée ou une start-up, peu importe votre secteur
                            d'activité, nous sommes là pour vous apporter une perspective
                            fraîche et innovante aux défis auxquels vous êtes confrontés
                            dans l'exécution de vos projets.                        
                        </p>
                        <p class="text-lg md:text-xl font-light mb-3">
                            Nos solutions sur mesure respectent votre activité, culture
                            d'entreprise, contraintes spécifiques et priorités stratégiques,
                            tout en respectant délais et budgets.                    
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 grid grid-cols-12 gap-4">
                <div class="POL col-span-12 md:col-span-7 h-40 mb-3"></div>
                <div class="col-span-12 md:col-span-5 flex items-center">
                    <h1 class="TIT text-2xl md:text-4xl lg:text-5xl font-semibold pb-2">ABOUT US.</h1>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 justify-end gap-3">
            <div class="col-span-12">
                <img src="B_U/15.png" alt="">
            </div>
        </div>
    </div>
</section>


{{-- notre equepe  --}}
<section id="service" class="py-10 px-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-5 lg:pl-10">
            <div class="space-y-5 mb-5">
                <div class="flex items-center gap-4">
                    <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="#ff0000" d="M12 5.5A3.5 3.5 0 0 1 15.5 9a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8.5 9A3.5 3.5 0 0 1 12 5.5M5 8c.56 0 1.08.15 1.53.42c-.15 1.43.27 2.85 1.13 3.96C7.16 13.34 6.16 14 5 14a3 3 0 0 1-3-3a3 3 0 0 1 3-3m14 0a3 3 0 0 1 3 3a3 3 0 0 1-3 3c-1.16 0-2.16-.66-2.66-1.62a5.54 5.54 0 0 0 1.13-3.96c.45-.27.97-.42 1.53-.42M5.5 18.25c0-2.07 2.91-3.75 6.5-3.75s6.5 1.68 6.5 3.75V20h-13zM0 20v-1.5c0-1.39 1.89-2.56 4.45-2.9c-.59.68-.95 1.62-.95 2.65V20zm24 0h-3.5v-1.75c0-1.03-.36-1.97-.95-2.65c2.56.34 4.45 1.51 4.45 2.9z"/>
                    </svg>                    
                    <h1 class="TIT text-5xl font-semibold">Notre équipe</h1>
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

        <div class="lg:col-span-7 ml-10">
            <div class="relative mb-5">
                <img class="rounded-2xl w-full h-72 object-cover" src="B_U/14.png" alt="">
                <div class="ONE absolute bottom-0 left-0 w-1/2 h-20 bg-blue-600 flex items-center justify-start p-4 rounded-tr-3xl">
                    <h1 class="TIT text-3xl font-semibold text-blue-800">Nos Services PMO</h1>
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
<section id="outsoursing" class="px-4 lg:px-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 justify-center items-center p-2 mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 col-span-12 gap-6 p-6 lg:p-10 border-2 border-gray-300 rounded-3xl relative">
            <div class="h-10 col-span-12 flex justify-center items-center">
                <div class="absolute -top-14 w-2/3 lg:w-1/3 bg-white p-2 text-center text-4xl lg:text-6xl font-semibold text-gray-900">
                    <h1>Outsourcing</h1>
                </div>
            </div>
            <div class="RR col-span-12 lg:col-span-6 p-6 lg:p-10 rounded-xl transition-transform transform hover:scale-105">
                <div class="h-5 mb-10 relative">
                    <div class="BOX absolute -top-16 left-1/2 transform -translate-x-1/2 lg:left-8 w-20 h-20 bg-white rounded-full flex justify-center items-center rotate-180">
                        <svg class=" w-12 h-12" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#ff0000" stroke-linecap="round" stroke-width="1.5"><path stroke-miterlimit="10" d="M12 6.458v11.084"/><path stroke-linejoin="round" d="m17.278 11.303l-4.529-4.528a1.056 1.056 0 0 0-1.498 0l-4.529 4.528"/><path stroke-linejoin="round" d="M12 21.5a9.5 9.5 0 1 0 0-19a9.5 9.5 0 0 0 0 19"/></g></svg>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-start items-center text-xl lg:text-2xl mb-4 font-semibold text-white">
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
            <div class="BB col-span-12 lg:col-span-6 p-6 lg:p-10 rounded-xl transition-transform transform hover:scale-105">
                <div class="h-5 mb-10 relative">
                    <div  class="BOX absolute -top-16 left-1/2 transform -translate-x-1/2 lg:left-8 w-20 h-20 bg-white rounded-full flex justify-center items-center">
                        <svg class=" w-12 h-12" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#020085" stroke-linecap="round" stroke-width="1.5"><path stroke-miterlimit="10" d="M12 6.458v11.084"/><path stroke-linejoin="round" d="m17.278 11.303l-4.529-4.528a1.056 1.056 0 0 0-1.498 0l-4.529 4.528"/><path stroke-linejoin="round" d="M12 21.5a9.5 9.5 0 1 0 0-19a9.5 9.5 0 0 0 0 19"/></g></svg>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-start items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-white">
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
<section id="type" class="relative my-5 bg-gray-100">
    <div class="grid grid-cols-12 gap-4 mt-20">
        <div class="col-span-12 lg:col-span-6 relative">
            <img class="w-11/12 mx-auto lg:mx-0" src="B_U/15.png" alt="">
            <div class="BG grid grid-cols-12 gap-1 w-11/12 lg:w-2/3 absolute top-64 z-30 right-1 lg:right-0 lg:-right-10 p-4 rounded-xl">
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
                    <h1 class="text-5xl font-semibold TIT">TYPES DE PROJETS</h1>
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

