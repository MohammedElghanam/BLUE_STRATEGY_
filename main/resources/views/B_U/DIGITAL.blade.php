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
    clip-path: polygon(0 0, 90% 0%, 100% 20%, 100% 100%, 0% 100%);
}

</style>


{{-- first section  --}}
<section class="">
    <div class="flex justify-center items-center relative">
        <img class="w-full md:w-auto" src="B_U/2.png" alt="">
        <div class="CO w-full md:w-2/5 h-full absolute bottom-0 left-0 md:left-28 bg-gray-800 opacity-70"></div>
        <div class="BOR w-full md:w-3/4 h-3/5 absolute p-4 md:p-0">
            <div class="COLOR w-40 h-40 sm:w-52 sm:h-52 absolute -bottom-10 md:-bottom-20 left-1 md:-left-1.5 bg-red-500"></div>
            <div class="text-white absolute left-1/2 transform -translate-x-1/2 md:-right-40 md:bottom-4 text-center md:text-left animate-fade-in">
                <h1 class="font-bold text-2xl md:text-4xl">B.U 02</h1>
                <h1 class="font-bold text-2xl md:text-4xl">Services Digitaux</h1>
            </div>
            <div class="polygon absolute right-1 bottom-1 md:right-4 md:bottom-4 bg-blue-500 w-16 h-14 md:w-32 md:h-28"></div>
        </div>
    </div>
</section>


{{-- about  --}}
<section>
    <div class=" grid grid-cols-12">
        <div class=" grid grid-cols-12 col-span-6 gap-4">
            <div class=" grid grid-cols-12 gap-2 col-span-12 mt-10">
                <div class=" flex justify-start items-center gap-2 col-span-12">
                    <span class=" w-20 h-1 bg-blue-900"></span>
                    <h1 class=" font-medium">blue strategy</h1>
                </div>
                <div class="  grid grid-cols-12 justify-center items-center gap-5 col-span-12 pl-16 pt-6">
                    <div class="col-span-8">
                        <h1 class=" font-semibold text-xl">BLUE STRATEGY élève vos projets digitaux à des niveaux supérieurs. </h1>
                    </div>
                    <div class="col-span-11">
                        <p class=" text-xl font-light mb-3">
                            Nous ne nous limitons pas à réaliser simplement des projets, nous allons au-delà en offrant une valeur stratégique durable qui dépasse
                            les attentes.
                        </p>
                        <p class=" text-xl font-light mb-3">
                            Notre unité d'affaires "SERVICES DIGITAUX" est un pilier essentiel de notre cabinet, dédiée aux TPE/PME et aux différentes organisations
                            souhaitant entamer leur transformation digitale. Sa vocation est
                            d'offrir des solutions digitales spécifiques pour soutenir les activités et optimiser leur performance, tout en respectant une meilleure qualité à
                            un budget bien maîtrisé et réduit.                         
                        </p>
                    </div>
                </div>
            </div>
            <div class=" grid grid-cols-12 col-span-12 gap-4">
                <div class="POL col-span-7 h-40 bg-blue-900 mb-3"></div>
                <div class=" col-span-5">
                    <h1 class="col-span-1 md:col-span-3 text-4xl md:text-7xl font-semibold pb-2">ABOUT US.</h1>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 justify-end gap-3 col-span-6">
            <div class="col-span-12">
                <img src="B_U/DIGITAL/18.png" alt="">
            </div>
        </div>
        
    </div>
</section>