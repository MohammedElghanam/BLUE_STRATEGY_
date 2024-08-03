<style>
    /* 050065, 0d00ff blue */
.BOR{
    border: 8px solid ;
    border-color:  #4f0074;    
}
.polygon {
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    background: linear-gradient(to right, #4f0074, #ae00ff);
}
.COLOR{
    background: linear-gradient(to bottom, #4f0074, #ae00ff);
}
.CO{
    background-color: #4f0074;
}

.POL{
    background-color: #ae00ff;
    clip-path: polygon(0 0, 90% 0%, 100% 20%, 100% 100%, 0% 100%);
}
.BG{
    background-color: #ae00ff;
}
.TIT{
    color: #ae00ff;
}

.BOR_1{
    border-bottom: 3px solid #ae00ff;
}
.BOT{
    background: linear-gradient(to right, #4f0074, #ae00ff);
}
.XS {
    font-size: 14px ;
    line-height: 20px ;
}

</style>


{{-- first section  --}}
{{-- <section id="3" class="">
    <div class="flex justify-center items-center relative">
        <img class="w-full md:w-auto" src="B_U/2.png" alt="">
        <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 bg-gray-800 opacity-70"></div>
        <div class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0">
            <div class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5 bg-red-500"></div>
            <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left animate-fade-in">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 03</h1>
                <h1 class="font-bold text-2xl md:text-4xl">Services Digitaux</h1>
            </div>
            <div class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28"></div>
        </div>
    </div>
</section> --}}

<section id="3" class="pt-16 lg:pt-0">
    <div class="flex justify-center items-center relative">
        <img class="w-full md:w-auto" src="B_U/2.png" alt="">
        <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 bg-gray-800 opacity-70"></div>
        <div id="bor" class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0 hidden md:block">
            <div id="red" class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5"></div>
            <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left animate-fade-in">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 03</h1>
                <h1 class="font-bold text-2xl md:text-4xl">Services Digitaux</h1>
            </div>
            <div id="polygon" class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28 hidden md:block"></div>
        </div>
        <div class=" w-full  absolute top-0 p-10 lg:hidden md:hidden ">
            <div class="BG text-white p-6 rounded-xl">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 03</h1>
                <h1 class="font-bold text-2xl md:text-4xl">Services Digitaux</h1>
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
                    <h1 class="TIT font-bold text-xl">BLUE STRATEGY- SERVICES DEGITAUX</h1>
                </div>
                <div class="col-span-12 grid grid-cols-12 justify-center items-center gap-5 p-3 pl-2 md:pl-16 pt-6">
                    <div class="col-span-12 md:col-span-8">
                        <h1 class="font-medium md:text-xl lg:text-lg">Nous élèvons vos projets digitaux à des niveaux supérieurs. </h1>
                    </div>
                    <div class=" grid grid-cols-12 col-span-12 md:col-span-11">
                        <p class="col-span-11 text-lg md:text-xl font-light mb-3">
                            Nous ne nous limitons pas à réaliser simplement des projets, nous allons au-delà en offrant une valeur stratégique durable qui dépasse
                            les attentes.
                        </p>
                        <p class="col-span-12 text-lg md:text-xl font-light mb-3">
                            Notre unité d'affaires "SERVICES DIGITAUX" est un pilier essentiel de notre cabinet, dédiée aux TPE/PME et aux différentes organisations
                            souhaitant entamer leur transformation digitale. Sa vocation est
                            d'offrir des solutions digitales spécifiques pour soutenir les activités et optimiser leur performance, tout en respectant une meilleure qualité à
                            un budget bien maîtrisé et réduit.                         
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 grid grid-cols-12 gap-4">
                <div class="POL col-span-12 md:col-span-7 h-40 mb-3 flex justify-center items-center">
                    <div class=" lg:hidden block">
                        <h1 class=" text-white text-4xl md:text-4xl font-bold pb-2">ABOUT B.U 03</h1>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-5 items-center hidden lg:flex">
                    <h1 class="TIT md:text-4xl lg:text-4xl font-bold pb-2">ABOUT B.U 03</h1>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 justify-end gap-3">
            <div class="col-span-12">
                <img src="B_U/DIGITAL/18.png" alt="">
            </div>
        </div>
    </div>
</section>


<section id="" class="px-4 lg:px-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 justify-center items-center p-2 mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 col-span-12 gap-4 p-6 lg:p-10 border-2 border-gray-300 rounded-3xl relative">
            <div class=" col-span-12 flex justify-center items-center">
                <div class="absolute -top-7 bg-white px-6 lg:px-8 text-center text-3xl lg:text-4xl font-bold text-gray-900">
                    <h1 class=" text-gray-900">Notre business unit</h1>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-6 bg-gray-100 p-6 lg:p-10 rounded-xl transition-transform transform hover:scale-105">

                <div class="grid grid-cols-1">
                    <div
                        class="flex justify-start items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-gray-900">
                        
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#ae00ff" d="m10 17l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9m-6-8L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5z"/></svg>
                        <h1 class=" TIT">Nos specialités</h1>
                    </div>
                    <div class=" grid grid-cols-12 gap-3 text-white p-2 lg:text-left mr-2">
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">AMOA</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Intégration ERP/CRM</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Développement WEB</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">DESIGN UX/UI</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-6 p-6 bg-gray-100 lg:p-10 rounded-xl transition-transform transform hover:scale-105 ml-2">

                <div class="grid grid-cols-1">
                    <div class="flex justify-start items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-gray-900">
                        <svg class=" w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#ae00ff" fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7m-1.5 8a4 4 0 0 0-4 4a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2a4 4 0 0 0-4-4zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293a3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2a4 4 0 0 0-4-4h-1.1a5.5 5.5 0 0 1-.471.762A6 6 0 0 1 19.5 18M4 7.5a3.5 3.5 0 0 1 5.477-2.889a5.5 5.5 0 0 0-2.796 6.293A3.5 3.5 0 0 1 4 7.5M7.1 12H6a4 4 0 0 0-4 4a2 2 0 0 0 2 2h.5a6 6 0 0 1 3.071-5.238A5.5 5.5 0 0 1 7.1 12" clip-rule="evenodd"/></svg>
                        <h1 class=" TIT">Notre equipe</h1>
                    </div>
                    <div class=" grid grid-cols-12 gap-3 text-white p-2 lg:text-left">
                        <div class=" col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">PMO</p>
                        </div>
                        <div class=" col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Consultants AMOA</p>
                        </div>
                        <div class=" col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Chefs de projets</p>
                        </div>
                        <div class=" col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Ingenieurs IT</p>
                        </div>
                        <div class=" col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Business analysts </p>
                        </div>
                        <div class=" col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Consultants technico-fonctionnels</p>
                        </div>
                        <div class=" col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Développeurs web</p>
                        </div>
                        <div class=" col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class=" lg:w-7 lg:h-7 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="#504f59" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="14;0"/></path></g></svg>
                            </div>
                            <p class=" text-gray-700 font-medium lg:text-base text-sm">Designers UX</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="digital" class="mt-4">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 px-4 md:px-20">
        
        <!-- Left Side -->
        <div class="col-span-1 md:col-span-6 flex justify-center md:justify-end items-center relative">
            <div class="BG absolute w-11/12 md:w-1/2 md:h-40 rounded-xl md:rounded-none bottom-5 left-4 md:top-24 md:-left-16 p-4 py-6 flex justify-center md:justify-start items-center">
                <h1 class="text-2xl md:text-4xl font-bold text-white text-center md:text-left">MARKETING DIGITALE</h1>
            </div>
            <img class="w-full md:w-auto " src="B_U/FOR/21.svg" alt="">
        </div>

        <!-- Right Side -->
        <div class="col-span-1 md:col-span-6 grid grid-cols-1 gap-4">
            <div class="p-2">
                <div class="p-6">
                    <p class="font-medium text-gray-900">
                        Chez BLUE STRATEGY, nous offrons des services de marketing digital complets et personnalisés pour renforcer votre présence en ligne et atteindre vos objectifs commerciaux.
                    </p>
                </div>

                <div class=" BG w-full p-4 grid grid-cols-1 gap-4 rounded-xl shadow-xl transform translate-x-1 transition-transform duration-500 hover:scale-105">
                    <p class=" font-medium text-white">Nos principaux services incluent :</p>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Conseils en Marketing
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Stratégies digitales et plans d'execution
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Design d'Identité Visuelle
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Branding de marque
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Personal branding et e-réputation
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Médias Sociaux et Community Management
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Conception graphique
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Création de contenus digitaux
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Inbound Marketing
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Référencement SEO / SEA
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Campagnes Publicitaires
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Création de sites web / E-commerce
                        </p>
                    </div>
                    <div class=" text-gray-50 font-medium col-span-1 flex justify-start items-center gap-2">
                        <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="9"/><path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0"/></path></g></svg>

                        <p class=" XS">
                            Audit de Sites Web
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>


<section id="UX" class="px-4 lg:px-32 my-10">
    <div class="grid grid-cols-12 gap-3">
        <div class="grid grid-cols-12 col-span-12 gap-2">
            <div class="col-span-12 lg:col-span-5 flex items-end">
                <h1 class="text-4xl lg:text-4xl font-semibold text-gray-700">Services WEB</h1>
            </div>
            <div class="grid grid-cols-12 col-span-12 lg:col-span-7 gap-2">
                <div class="col-span-2 h-full hidden lg:block"></div>
                <div class="col-span-6 lg:col-span-5 h-full">
                    <img class="h-full w-full" src="B_U/DIGITAL/27.svg" alt="">
                </div>
                <div class="col-span-6 lg:col-span-5 h-full">
                    <img class="h-full w-full" src="B_U/DIGITAL/26.png" alt="">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-2 col-span-12">
            <div class="grid grid-cols-12 gap-6 p-2 col-span-12 lg:col-span-9">
                <div class="grid grid-cols-12 gap-2 col-span-12 pb-4 mt-6 BOR_1">
                    <div class="col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                        <div>
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g fill="none" stroke="#ae00ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                    <path d="M21 6H9C7.34315 6 6 7.34315 6 9V31C6 32.6569 7.34315 34 9 34H39C40.6569 34 42 32.6569 42 31V21"/>
                                    <path d="M24 34V42"/><path d="M32 6L28 10L32 14"/><path d="M38 6L42 10L38 14"/><path d="M14 42L34 42"/>
                                </g>
                            </svg>
                        </div>
                        <p class="TIT text-2xl font-bold">DEVELOPPEMENT WEB</p>
                    </div>
                    <div class="col-span-12 lg:col-span-6 flex justify-start items-center gap-4">
                        <div>
                            <img class=" w-8 h-8" src="B_U/FOR/22.png" alt="">
                        </div>
                        <p class="TIT text-2xl font-bold">UX/UI DESIGN</p>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <p class="font-light">
                        BLUE STRATEGY vous accompagne pour concrétiser vos 
                        projets web personnalisés que
                        ce soit pour la conception et la création d’un site web 
                        (site vitrine, site dynamique ou boutique e- commerce) ou 
                        pour la réalisation d’une application métier à usage 
                        interne ou externe.
                    </p>
                    <div class="grid grid-cols-12 w-full gap-4 p-3">
                        <div class="col-span-12 flex justify-start items-center gap-4">
                            <div>
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <p class="text-gray-900 font-medium">Recueil des besoins et rédaction du CDC</p>
                        </div>
                        <div class="col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <p class=" text-gray-900 font-medium">édaction de SFD technique et fonctionnelle</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <p class=" text-gray-900 font-medium">Développement de sites et de plateformes</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <p class=" text-gray-900 font-medium">Maintenance corrective.</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <p class=" text-gray-900 font-medium">Développement spécifique.</p>
                        </div>
                        <div class=" col-span-12 flex justify-start items-center gap-4">
                            <div class="">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <p class=" text-gray-900 font-medium">Référencement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <p class="font-light">
                        Nos services de design UX/UI exceptionnels,
                        sont conçus sur mesure pour répondre à
                        vos besoins uniques d'une manière
                        créative. Nous créons des expériences utilisateurs captivantes qui vous offrent une
                        convivialité optimale :
                    </p>
                    <div class="grid grid-cols-12 w-full gap-4 p-3 mt-5">
                        <div class="col-span-12">
                            <div class="flex justify-start items-center gap-4">
                                <div>
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                    </svg>
                                </div>
                                <p class="text-gray-900 font-medium">Conception des interfaces</p>
                            </div>
                            <p class="ml-8 text-gray-700">ergonomiques, esthétiques et centrées dur les utilisateurs.</p>
                        </div>
                        <div class=" col-span-12 ">
                            <div class=" flex justify-start items-center  gap-4">
                                <div class="">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                    </svg>
                                </div>
                                <p class=" text-gray-900 font-medium">Workshops UX</p>
                            </div>
                            <p class=" ml-8 text-gray-700">
                                permettant de créer des
                                solutions digitales utiles pour les utilisateurs.
                            </p>
                        </div>
                        <div class=" col-span-12 ">
                            <div class=" flex justify-start items-center  gap-4">
                                <div class="">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#3b4f72" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                    </svg>
                                </div>
                                <p class=" text-gray-900 font-medium">Brand image, </p>
                            </div>
                            <p class=" ml-8 text-gray-700">
                                en vous offrant divers supports afin de développer votre identité visuelle
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3">
                <img class="w-full h-auto" src="B_U/DIGITAL/28.png" alt="">
            </div>
        </div>
    </div>
</section>


<section id="Intégration" class="px-4 lg:px-32 my-10">
    <div class="grid grid-cols-12 gap-6">
        <div class="grid grid-cols-12 gap-2 col-span-12 lg:col-span-6 p-4 lg:p-10 lg:pl-20">
            <div class="grid items-center col-span-12">
                <div class="TIT flex justify-start items-center gap-2 text-white text-xl lg:text-2xl font-bold">
                    <img class="w-8 h-8 lg:w-12 lg:h-12" src="B_U/DIGITAL/30.png" alt="">
                    <h1>Services d'intégration ERP/CRM</h1>
                </div>
            </div>
            <div class="grid items-start col-span-12 mt-4">
                <div class="grid justify-start items-center gap-2">
                    <h1 class="font-medium">
                        Nous vous accompagnons dans votre transformation digitale 
                        quel que soit votre domaine d’activité
                    </h1>
                    <p class="text-gray-900 mt-2">
                        Chez BLUE STRATEGY, nous croyons que la mise en place réussie d'un système de gestion intégrée constitue un véritable moteur de
                        croissance et de développement des activités.
                    </p>
                    <p class="text-gray-900 mt-2">
                        Nous accompagnons les entreprises et les organisations dans la
                        sélection de la solution ERP la plus adaptée à leurs besoins, en
                        tenant compte de leur envergure, de leur domaine d'activité et de
                        leur stratégie de développement.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 justify-center items-center col-span-12 lg:col-span-6 relative">
            <div class="col-span-12 grid justify-center items-center">
                <h1 class="text-center text-lg lg:text-xl font-bold text-blue-800">DES SOLUTIONS ERP, CRM et SIRH</h1>
                <p class="text-center font-medium text-blue-800 mt-2">pour TPE, PME, startups, coopérative et ONG.</p>
            </div>
            <div class="absolute bottom-0 lg:-bottom-60 right-0 mt-4 lg:mt-0">
                <img src="B_U/18.png" alt="">
            </div>
        </div>
    
        <div class="BOT grid grid-cols-12 gap-2 p-4 lg:p-10 col-span-12">
            <div class="col-span-12 md:col-span-6">
                <div>
                    <h1 class="text-white">Toutes nos solutions sont :</h1>
                    <div class="mt-4 grid gap-4 pl-4">
                        <div class="flex justify-start items-center gap-2 text-white">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g fill="none" stroke="white" stroke-linejoin="round" stroke-width="4">
                                    <path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"/>
                                    <path stroke-linecap="round" d="M24 16v16m-8-8h16"/>
                                </g>
                            </svg>
                            <h1>EVOLUTIVES ET FONCTIONNELLEMENT RICHES</h1>
                        </div>
                        <div class="flex justify-start items-center gap-2 text-white">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g fill="none" stroke="white" stroke-linejoin="round" stroke-width="4">
                                    <path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"/>
                                    <path stroke-linecap="round" d="M24 16v16m-8-8h16"/>
                                </g>
                            </svg>
                            <h1>SIMPLES D’UTILISATION</h1>
                        </div>
                        <div class="flex justify-start items-center gap-2 text-white">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g fill="none" stroke="white" stroke-linejoin="round" stroke-width="4">
                                    <path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"/>
                                    <path stroke-linecap="round" d="M24 16v16m-8-8h16"/>
                                </g>
                            </svg>
                            <h1>PERSONNALISABLES</h1>
                        </div>
                        <div class="flex justify-start items-center gap-2 text-white">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g fill="none" stroke="white" stroke-linejoin="round" stroke-width="4">
                                    <path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"/>
                                    <path stroke-linecap="round" d="M24 16v16m-8-8h16"/>
                                </g>
                            </svg>
                            <h1>DISPONIBLES EN MODE SAAS OU ON-PREMISE</h1>
                        </div>
                        <div class="flex justify-start items-center gap-2 text-white">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g fill="none" stroke="white" stroke-linejoin="round" stroke-width="4">
                                    <path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"/>
                                    <path stroke-linecap="round" d="M24 16v16m-8-8h16"/>
                                </g>
                            </svg>
                            <h1>SÉCURITÉ ET CONFIDENTIALITÉ</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6"></div>
        </div>
    </div>
</section>


<section id="web" class="px-4 lg:px-32 my-10">
    <div class="grid grid-cols-12 gap-6">
        <div class="grid grid-cols-12 gap-2 col-span-12 lg:col-span-6 pl-4 lg:pl-10">
            <div class="grid items-center col-span-12 md:col-span-6">
                <div>
                    <h1 class="text-lg md:text-2xl font-bold">+ 40 APPLICATIONS</h1>
                    <p class="ml-2 md:ml-4">
                        Applications technologiques
                        métiers riches et ouvertes au
                        cœur de votre transformation
                        numérique
                    </p>
                </div>
            </div>
            <div class="grid items-center col-span-12 md:col-span-6">
                <img class="w-full lg:w-11/12" src="B_U/erp3.jpg" alt="">
            </div>
        </div>
        <div class="col-span-12 lg:col-span-6">
            <img class="w-full" src="B_U/DIGITAL/31.jpg" alt="">
        </div>
        <div class="BOT grid grid-cols-12 gap-2 p-4 lg:p-10 col-span-12 relative">
            <div class=" BOT w-20 h-20 rounded-full flex justify-center items-center absolute -top-10 lg:left-10 right-10">
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                    <g fill="none" stroke="white" stroke-linejoin="round" stroke-width="4">
                        <path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"/>
                        <path stroke-linecap="round" d="M24 16v16m-8-8h16"/>
                    </g>
                </svg>
            </div>
            <div class="col-span-12 md:col-span-4 grid items-center">
                <div class=" flex justify-start items-end gap-4">
                    <img class=" w-12 h-12" src="B_U/FOR/17.png" alt="">
                    <div class="">
                        <h1 class="font-bold text-white w-1/2">DEVELOPPEMENT SPECIFIQUE</h1>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-8 grid items-center gap-4 text-white">
                <p>
                    Nous reconnaissons que chaque entreprise ou organisation est singulière et
                    dispose de ses propres processus spécifiques.
                </p>
                <p>
                    BLUE STRATEGY vous offre également l'option du développement spécifique 
                    pour une solution complètement spécifique ou pour répondre à vos évolutions 
                    constantes, tels que de nouveaux besoins et de nouvelles fonctionnalités.
                </p>
            </div>
        </div>
    </div>
</section>


<section id="AMOA" class="px-4 lg:px-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 justify-center items-center p-2 mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 col-span-12 gap-4 p-6 lg:p-10 border-2 border-gray-300 rounded-3xl relative">
            <div class=" col-span-12 flex justify-center items-center mb-5">
                <div class="absolute -top-14 w-2/3 lg:w-1/3 bg-white p-2 text-center text-4xl lg:text-4xl font-semibold text-gray-900">
                    <h1 class=" TIT mb-2">Services AMOA IT</h1>
                    <p class=" text-lg text-gray-700">  ASSISTANCE A LA MAITRISE D'OUVRAGE </p>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-6 bg-gray-100 p-4 lg:py-10 rounded-xl transition-transform transform hover:scale-105">
                
                <div class="grid grid-cols-1">
                    <div class="flex justify-start items-center gap-1 text-lg lg:text-lg mb-4 font-medium text-gray-900">
                        <h1 class="">
                            Notre expertise réside dans un accompagnement
                            personnalisé que nous proposons tout au long de votre
                            transition digitale.
                        </h1>
                    </div>
                    <div class="flex justify-start items-center gap-3 mb-4 text-gray-900">
                        <h1 class=" text-gray-800 text-lg">
                            Nous intervenons tant dans le conseil et l'accompagnement lors de
                            la conception que dans le pilotage et la validation de votre projet.
                            Notre maîtrise des systèmes d’information, transformation digitale
                            et notre expertise dans la gestion de projets, nous permettent de
                            passer efficacement de vos besoins à la solution.
                        </h1>
                    </div>
                    <div class="flex justify-center items-center gap-3 text-xl lg:text-2xl mb-4 font-semibold text-gray-900">
                        <img class=" h-48 w-1/2" src="B_U/17.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-6 p-6 bg-gray-100 lg:p-10 rounded-xl transition-transform transform hover:scale-105 ml-2">
                
                <div class="grid grid-cols-12 mb-3">
                    <div class=" col-span-12">
                        <div class=" flex justify-start items-center  gap-4">
                            <div class=" w-14 h-14 flex justify-center items-center font-bold text-3xl bg-blue-700 text-white">01</div>
                            <p class=" text-gray-900 font-medium">Assistance au pilotage de projet</p>
                        </div>
                        <div class=" flex justify-start items-center  gap-4">
                            <div class=" w-32 h-14"></div>
                            <p class=" ml-5 text-gray-800">
                                Notre équipe vous accompagne tout au long du
                                processus et assure le pilotage des activités,
                                facilitant ainsi la maitrise des contraintes du projets
                                et la communication entre tous les acteurs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 mb-3">
                    <div class=" col-span-12">
                        <div class=" flex justify-start items-center  gap-4">
                            <div class=" w-14 h-14 flex justify-center items-center font-bold text-3xl bg-blue-700 text-white">02</div>
                            <p class=" text-gray-900 font-medium">Assistance à la conception</p>
                        </div>
                        <div class=" flex justify-start items-center  gap-4">
                            <div class=" w-32 h-14"></div>
                            <p class=" ml-5 text-gray-800">
                                Pour assurer la réussite du projet, notre équipe
                                s'attache à sécuriser toutes les étapes du cadrage,
                                qui revêt une importance forte pour définir le besoin
                                à mettre en œuvre et les attentes du projet.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 mb-3">
                    <div class=" col-span-12">
                        <div class=" flex justify-start items-center  gap-4">
                            <div class=" w-14 h-14 flex justify-center items-center font-bold text-3xl bg-blue-700 text-white">03</div>
                            <p class=" text-gray-900 font-medium">Tierce recette applicative</p>
                        </div>
                        <div class=" flex justify-start items-center  gap-4">
                            <div class=" w-32 h-14"></div>
                            <p class=" ml-5 text-gray-800">
                                LNotre équipe offre à nos clients une méthodologie
                                de tests éprouvée afin d'assurer la qualité des
                                livrables et garantir la satisfaction des utilisateurs.
                            </p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>

