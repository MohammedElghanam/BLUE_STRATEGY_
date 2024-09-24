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
.TIT{
    color: #ff0000;
}

.TIT1{
    color: #020085;
}

.XS{
    font-size: 14px /* 12px */;
    line-height: 18px /* 16px */;
}
</style>

{{-- first section  --}}
<section id="1" class="pt-20">
        <div class="flex justify-center items-center relative ">
            <img class="w-full md:w-auto" src="BU_1/1.jpeg" alt="">
            <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 bg-gray-800 opacity-70"></div>
            <div id="bor" class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0 hidden md:block">
                <div id="red" class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5"></div>
                <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left animate-fade-in">
                    <h1 class="font-bold text-2xl md:text-4xl">B.U 01</h1>
                    <h1 class="font-bold text-2xl md:text-4xl">PMO</h1>
                    <p class="font-normal">PROJECT MANAGEMENT OFFICE</p>
                </div>
                <div id="polygon" class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28 hidden md:block"></div>
            </div>
            <div class=" w-full h-full absolute top-0 p-10 lg:hidden md:hidden">
                <div class="BG h-full text-white p-6 rounded-xl">
                    <h1 class="font-bold text-2xl md:text-4xl">B.U 01</h1>
                    <h1 class="font-bold text-2xl md:text-4xl">PMO</h1>
                    <p class="font-normal">PROJECT MANAGEMENT OFFICE</p>
                </div>
            </div>
        </div>
</section>

{{-- about  --}}
<section class=" mb-10">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 gap-4">
            <div class="col-span-12 grid grid-cols-12 gap-2 mt-10">
                <div class="col-span-12 flex justify-start items-center gap-2">
                    <span class="BG w-10 lg:w-20 h-1"></span>
                    <h1 class="TIT font-bold text-xs lg:text-xl">BLUE STRATEGY - PROJECT MANAGEMENT OFFICE</h1>
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
                <div class="POL col-span-12 md:col-span-7 h-40 mb-3 flex justify-center items-center">
                    <div class=" lg:hidden block">
                        <h1 class=" text-white text-4xl md:text-4xl font-bold pb-2">ABOUT B.U 01</h1>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-5 items-center hidden lg:flex">
                    <h1 class="TIT md:text-4xl lg:text-4xl font-bold pb-2">ABOUT B.U 01</h1>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 justify-end gap-3">
            <div class="col-span-12">
                <img src="BU_1/2.jpeg" alt="" loading="lazy">
            </div>
        </div>
    </div>
</section>


{{-- notre equepe  --}}
<section id="service" class=" px-4 py-6 lg:py-10 lg:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-5 lg:pl-10">
            <div class="space-y-5 mb-5">
                <div class="flex items-center gap-4">
                    <svg class=" w-8 h-8 lg:w-10 lg:h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="#ff0000" fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7m-1.5 8a4 4 0 0 0-4 4a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2a4 4 0 0 0-4-4zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293a3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2a4 4 0 0 0-4-4h-1.1a5.5 5.5 0 0 1-.471.762A6 6 0 0 1 19.5 18M4 7.5a3.5 3.5 0 0 1 5.477-2.889a5.5 5.5 0 0 0-2.796 6.293A3.5 3.5 0 0 1 4 7.5M7.1 12H6a4 4 0 0 0-4 4a2 2 0 0 0 2 2h.5a6 6 0 0 1 3.071-5.238A5.5 5.5 0 0 1 7.1 12" clip-rule="evenodd"/>
                    </svg>                   
                    <h1 class="TIT text-lg lg:text-2xl font-semibold">PMO - NOTRE EQUIPE</h1>
                </div>
                <p class=" font-light lg:font-normal">
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
                <img class="rounded-2xl w-full h-full object-cover" src="BU_1/4.jpeg" alt="" loading="lazy">
            </div>
        </div>

        <div class="lg:col-span-7 m-1 lg:m-0 lg:ml-10">
            <div class="relative mb-5">
                <img class="rounded-2xl w-full h-72 object-cover lg:block hidden" src="BU_1/3.jpeg" alt="">
                <div class="ONE lg:absolute bottom-0 left-0 h-16 bg-blue-600 flex items-center justify-start gap-3 p-4 rounded-tr-3xl">
                    <div class="">
                        <svg class=" w-7 h-7 lg:w-10 lg:h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M12.132 15.404a3.364 3.364 0 1 0 0-6.728a3.364 3.364 0 0 0 0 6.728"/><path d="M20.983 15.094a9.43 9.43 0 0 1-1.802 3.1l-2.124-.482a7.245 7.245 0 0 1-2.801 1.56l-.574 2.079a9.462 9.462 0 0 1-1.63.149a9.117 9.117 0 0 1-2.032-.23l-.609-2.146a7.475 7.475 0 0 1-2.457-1.493l-2.1.54a9.357 9.357 0 0 1-1.837-3.33l1.55-1.722a7.186 7.186 0 0 1 .069-2.652L3.107 8.872a9.356 9.356 0 0 1 2.067-3.353l2.17.54A7.68 7.68 0 0 1 9.319 4.91l.574-2.124a8.886 8.886 0 0 1 2.17-.287c.585 0 1.17.054 1.745.16l.551 2.113c.83.269 1.608.68 2.296 1.217l2.182-.563a9.368 9.368 0 0 1 2.043 3.1l-1.48 1.607a7.405 7.405 0 0 1 .068 3.364z"/></g></svg>
                    </div>
                    <h1 class="TIT text-lg lg:text-2xl font-semibold text-blue-800">NOS SERVICES PMO</h1>
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
        <div class="grid grid-cols-1 lg:grid-cols-12 col-span-12 gap-6 p-3 lg:p-10 border-2 border-gray-300 rounded-3xl relative">
            <div class=" col-span-12 flex justify-center items-center">
                <div class="absolute -top-5 lg:-top-6 bg-white px-3 lg:px-8 text-center text-lg lg:text-4xl font-bold TIT1">
                    <h1>Nos services outsourcing PMO</h1>
                </div>
            </div>
            <div class="RR mb-4 lg:mb-0 col-span-12 lg:col-span-6 p-2 lg:p-10 rounded-xl transition-transform transform hover:scale-105">
                <div class="h-5 mb-4 lg:mb-10 relative">
                    <div class="BOX absolute -top-9 lg:-top-16 left-1/2 transform -translate-x-1/2 lg:left-8 w-16 h-16 lg:w-20 lg:h-20 bg-white rounded-full flex justify-center items-center rotate-180">
                        <svg class=" w-8 h-8 lg:w-12 lg:h-12" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#ff0000" stroke-linecap="round" stroke-width="1.5"><path stroke-miterlimit="10" d="M12 6.458v11.084"/><path stroke-linejoin="round" d="m17.278 11.303l-4.529-4.528a1.056 1.056 0 0 0-1.498 0l-4.529 4.528"/><path stroke-linejoin="round" d="M12 21.5a9.5 9.5 0 1 0 0-19a9.5 9.5 0 0 0 0 19"/></g></svg>
                    </div>
                </div>
                <div class="grid grid-cols-1 p-2 lg:p-0">
                    <div class="flex justify-start items-center text-base lg:text-2xl mb-4 font-semibold text-white">
                        <h1>SOLUTION D'INTERNALISATION PMO</h1>
                    </div>
                    <div class="text-white text-sm lg:text-base text-center lg:text-left">
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
            <div class="BB col-span-12 lg:col-span-6 p-2 lg:p-10 rounded-xl transition-transform transform hover:scale-105">
                <div class="h-5 mb-10 relative">
                    <div  class="BOX absolute -top-9 lg:-top-16 left-1/2 transform -translate-x-1/2 lg:left-8 w-16 h-16 lg:w-20 lg:h-20 bg-white rounded-full flex justify-center items-center">
                        <svg class=" w-8 h-8 lg:w-12 lg:h-12" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#020085" stroke-linecap="round" stroke-width="1.5"><path stroke-miterlimit="10" d="M12 6.458v11.084"/><path stroke-linejoin="round" d="m17.278 11.303l-4.529-4.528a1.056 1.056 0 0 0-1.498 0l-4.529 4.528"/><path stroke-linejoin="round" d="M12 21.5a9.5 9.5 0 1 0 0-19a9.5 9.5 0 0 0 0 19"/></g></svg>
                    </div>
                </div>
                <div class="grid grid-cols-1 p-2 lg:p-0">
                    <div class="flex justify-start items-center gap-3 text-base lg:text-2xl mb-4 font-semibold text-white">
                        <h1>SOLUTION D'EXTERNALISATION PMO</h1>
                    </div>
                    <div class="text-white text-center text-sm lg:text-base lg:text-left">
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
<section class=" my-7 lg:my-10 ">
    <div class="w-full relative hidden lg:block">
        <img src="BU_1/5.jpeg" class="h-80 w-full object-cover" alt="">
        <div class="absolute inset-0 BG opacity-40 hidden lg:block"></div>
        <div class=" w-full h-full absolute top-0 left-0 flex justify-center items-center">
            <h1 class="text-base lg:text-8xl font-bold text-white">TYPES DE PROJETS</h1>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 px-3 lg:pt-6 lg:px-24">
        <div class=" col-span-1 block lg:hidden">
            <h1 class=" text-2xl font-semibold TIT "> TYPES DE PROJETS</h1>
        </div>
        <div class="col-span-1 lg:col-span-6 ">
            <div class="BG grid grid-cols-1 gap-2 w-full h-full p-6 lg:p-10 rounded-3xl transform translate-x-1 duration-300 hover:scale-105">
                <div class="col-span-1 h-10 flex justify-start items-center gap-2 mb-2">
                    <span class=" font-bold text-gray-100 text-lg lg:text-2xl">PROJETS EXTRA-ENTREPRISE :</span>
                </div>
                <div class="col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets d'établissement de nouveaux sites.</span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets de développement sectoriel</span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets de coopération. </span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projet de promotion événementielle.</span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets de développement RSE</span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets d'appui à la R&D</span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets d'appui à l'innovation. </span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets d'appui à l'innovation sociale</span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets d'appui au développement ESS</span>
                </div>
                <div class=" col-span-1 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                    <span class=" text-sm lg:font-semibold text-white">Projets d'appui à l'entreprenariat.</span>
                </div>
            </div>
        </div>

        <div class="col-span-1 lg:col-span-6 ">
            <div class="BB grid grid-cols-1 lg:grid-cols-12 gap-2 w-full h-full p-6 lg:p-10 rounded-3xl transform translate-x-1 duration-300 hover:scale-105">
                <div class="col-span-1 lg:col-span-12 h-10 flex justify-start items-center gap-2 mb-2">
                    <span class="font-bold text-white text-lg lg:text-2xl">PROJETS INTRA-ENTREPRISE :</span>
                </div>
                <div class="col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets d'investissement</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets de transformation.</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets de développement de produits/services. </span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets d'expansion sur le marché.</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets de création ou de reprise d'entreprise.</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets de restructuration organisationnelle. </span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets d'optimisation de de système opérationnel.</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets de modernisation organisationnelle.</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets d'optimisation de système d'informations </span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS"> Projets de transformation digitale.</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:ont-semibold text-white XS">Projets de développement web. </span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS"> Projets d'ingénierie de services </span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets d'ingénierie de formation. </span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets de renforcement de compétences</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS"> Projets de développement RH.</span>
                </div>
                <div class=" col-span-1 lg:col-span-6 h-10 flex justify-start items-center gap-2 ml-0 lg:ml-3">
                    <div class="">
                        <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="white" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>
                    </div>
                    <span class=" text-sm lg:font-semibold text-white XS">Projets de marketing et branding de marque.</span>
                </div>   
            </div>
        </div>
    </div>
</section>
