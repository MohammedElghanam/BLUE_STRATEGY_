<style>
.BOR {
    /* border: 15px solid white; */
    animation-name: right1;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-fill-mode: backwards;
}


.DATA {
    opacity: 0;
    transform: translateX(-100%);
    transition: transform 1s ease-in, opacity 1s ease-in;
}   
.DATA.animate {
    opacity: 1;
    transform: translateX(0);
}

.TOP {
    opacity: 0;
    transform: translateY(-100%);
    transition: transform 1s ease-in, opacity 1s ease-in;
}
.TOP.animate {
    opacity: 1;
    transform: translateY(0);
}
.BOTTOM {
    opacity: 0;
    transform: translateY(100%);
    transition: transform 1s ease-in, opacity 1s ease-in;
}

.BOTTOM.animate {
    opacity: 1;
    transform: translateY(0%);
}

.IMG {
    opacity: 0;
    transform: translateY(100%);
    transition: transform 1s ease-in, opacity 1s ease-in;
}
.IMG.animate {
    opacity: 1;
    transform: translateY(0);
}
.DESC {
    opacity: 0;
    transform: translateY(-100%);
    transition: transform 1s ease-in, opacity 1s ease-in;
}
.DESC.animate {
    opacity: 1;
    transform: translateY(0);
}
@keyframes right1 {
  0% {
    transform: translateX(500px); 
  }

  100% {
    transform: translateX(0%);
  }
}


.left-col, .right-col {
    opacity: 0;
    transform: translateX(-100%);
    transition: transform 1s ease-out, opacity 1s ease-out;
}

.right-col {
    transform: translateX(100%);
}

.animate-left {
    opacity: 1;
    transform: translateX(0);
}

.animate-right {
    opacity: 1;
    transform: translateX(0);
}



/* 
.animate-left {
    opacity: 0;
    transform: translateX(-100%);
    transition: opacity 1s ease-out, transform 1s ease-out;
}

.animate-right {
        opacity: 0;
        transition: opacity 1s ease-out;
}
.animate-left.active {
        opacity: 1;
        transform: translateX(0);
}
.animate-right.active {
        opacity: 1;
} */

.B_U1{
   background-color:red; 
}
.B_U2{
   background-color: #0e7cf4; 
}
.B_U3{
   background-color: #7c73e6; 
}
.B_U4{
   background-color: #42b883; 
}
.B_U5{
   background-color: #ffc93c; 
}
.B_U6{
  background-color: #ff9a3c;  
}
XS.{
    font-size: 15px ;
    line-height: 19px ;
}
</style>


<section class="grid grid-cols-1 lg:grid-cols-12 px-6 lg:px-40 pt-20 lg:pt-40 w-full">
    <div class="col-span-1 lg:col-span-6 mb-10 lg:mb-0 h-auto lg:h-3/4">
        <h1 class="TOP text-xl lg:text-3xl font-bold text-blue-800 mb-6">QUI SOMMES NOUS ?</h1>
        <div class="grid grid-cols-12 justify-center items-center w-full bg-gradient-to-b from-blue-600 to-blue-800 p-6 lg:p-12 rounded-lg">
            <div class="DATA col-span-12">
                <p class="col-span-12 text-sm lg:text-lg font-light text-white mb-3">
                    BLUE STRATEGY est un cabinet d'études, d'accompagnement et PMO multidisciplinaire, lancé en 2023, dédié aux entreprises et aux organisations des secteurs public et privé.
                </p>    
                <p class="col-span-12 text-sm lg:text-lg font-light text-white mb-3">
                    Nous accompagnons nos clients (TPE, PME, STARTUPS, ONG..) dans la réalisation de leurs projets de développement et dans l'exploration de nouveaux leviers de performance, afin de stimuler l'évolution et la croissance de leurs activités sur le marché dynamique d'aujourd'hui.
                </p>
                <p class="col-span-12 text-sm lg:text-lg font-light text-white">
                    BLUE STRATEGY s’est construit sur la conviction que le succès des transformations repose sur l'adoption d'une vision 360° et une équipe diversifiée, combinant les compétences les plus solides en matière de business, de technologie et de durabilité.
                </p>
            </div>
        </div>
    </div>
    <div class="col-span-1 lg:col-span-6 h-auto lg:h-fit relative">
        <img src="engagment/cover.jpeg" alt="Image" class="BOR absolute -left-7 shadow-2xl hidden md:block w-full lg:w-auto">
        <div class="BOTTOM hidden md:grid grid-cols-2 gap-8 absolute bottom-0 left-0 w-full pt-10 pl-5">
            <div class="col-span-2 flex justify-start items-center gap-3 w-1/2">
                <img src="images/3.png" alt="Proximité" class="w-10 h-10">
                <p class="font-medium text-xl text-blue-900">Innovation</p>
            </div>
            <div class="col-span-2 flex justify-start items-center gap-3 w-1/2">
                <img src="VI/132.png" alt="Authenticité" class="w-10 h-10">
                <p class="font-medium text-xl text-blue-900">Authenticité</p>
            </div>
            <div class="col-span-2 flex justify-start items-center gap-3 w-1/2">
                <img src="images/1.png" alt="Proximité" class="w-10 h-10">
                <p class="font-medium text-xl text-blue-900">Excellence</p>
            </div>
            <div class="col-span-2 flex justify-start items-center gap-3 w-1/2">
                <img src="images/ch.png" alt="Proximité" class="w-10 h-10">
                <p class="font-medium text-xl text-blue-900">Proximité</p>
            </div>
        </div>
        
    </div>
</section>


{{-- business unites  --}}
<section class=" py-10 lg:py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-6 px-4 md:px-12 lg:px-36">
        <div class=" lg:col-span-12 md:col-span-1 mb-5 text-center">
            <h1 class="font-bold text-xl md:text-4xl lg:text-2xl text-blue-900 z-50">NOS DOMAINES D'EXPERTISE</h1>
        </div>

        <div class="B_U1 grid grid-cols-1 lg:col-span-4 p-4 gap-2 rounded-lg transform translate-x-1 duration-150 hover:scale-105">
            <div class="flex justify-center">
                <img src="U_I/1.png" alt="PMO" class="w-20 h-20">
            </div>
            <div class="text-center text-white">
                <h1 class="XS font-semibold w-full">PMO-PROJECT MANAGEMENT OFFICE</h1>
            </div>
        </div>
        
        <div class="B_U2 grid grid-cols-1 lg:col-span-4 p-4 gap-2 rounded-lg transform translate-x-1 duration-150 hover:scale-105">
            <div class="flex justify-center">
                <img src="U_I/2.png" alt="Services TPE / PME" class="w-20 h-20">
            </div>
            <div class="text-center text-white">
                <h1 class="XS font-semibold">SERVICES AUX TPE / PME</h1>
            </div>
        </div>
        
        <div class="B_U3 pt-4 grid grid-cols-1 lg:col-span-4 p-4 rounded-lg transform translate-x-1 duration-150 hover:scale-105">
            <div class="flex justify-center ">
                <img src="B_U/34.png" alt="Services Digitaux" class="w-16 h-16">
            </div>
            <div class="text-center text-white ">
                <h1 class="XS pt-4 font-semibold">SERVICES DIGITAUX</h1>
            </div>
        </div>
        
        <div class="B_U4 grid grid-cols-1 lg:col-span-4 p-4 gap-2 rounded-lg transform translate-x-1 duration-150 hover:scale-105">
            <div class="flex justify-center">
                <img src="U_I/4.png" alt="Carriere et RH" class="w-20 h-20">
            </div>
            <div class="text-center text-white">
                <h1 class="XS font-semibold">SERVICES RH & CARRIERE</h1>
            </div>
        </div>
        
        <div class="B_U5 bg-blue-900 grid grid-cols-1 lg:col-span-4 p-4 gap-2 rounded-lg transform translate-x-1 duration-150 hover:scale-105">
            <div class="flex justify-center">
                <img src="U_I/5.png" alt="Formation Professionnelle" class="w-20 h-20">
            </div>
            <div class="text-center text-white">
                <h1 class="XS font-semibold">FORMATION PROFESSIONNELLE</h1>
            </div>
        </div>
        
        <div class="B_U6 grid grid-cols-1 lg:col-span-4 p-4 gap-2 rounded-lg transform translate-x-1 duration-150 hover:scale-105">
            <div class="flex justify-center">
                <img src="U_I/6.png" alt="Entreprenariat et ESS" class="w-20 h-20">
            </div>
            <div class="text-center text-white">
                <h1 class="XS font-semibold">ENTREUPRENARIAT ET PROJETS ESS</h1>
            </div>
        </div>
    </div>
</section>


{{-- timeline  --}}
<div class="min-h-screen">
    <div class="min-h-screen justify-center">
        <div class=" mb-3 lg:mb-8">
            <h1 class=" font-bold text-lg md:text-4xl lg:text-2xl text-blue-900 z-50 text-center">NOUS INTERVENONS PRINCIPALEMENT</h1>
            <h1 class=" font-bold text-lg md:text-4xl lg:text-2xl text-blue-900 z-50 text-center">POUR RÉPONDRE À 06 ENJEUX</h1>
        </div>
        <div class=" w-11/12 lg:w-2/3 mx-auto">

            <div class="1 flex flex-row justify-center w-full">                              
                <!-- left col -->
                <div class="left-col lg:w-3/12 w-1/3 py-8 ">
                    <div class="flex justify-center w-full px-4 lg:py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/31.png" alt="" class=" lg:w-12 lg:h-12 w-8 h-8">
                            </div>
                            <div class="flex flex-row text-center text-xs lg:text-lg">
                                Accélération de la croissance
                            </div>
                            
                        </div>
                    </div>
                </div>   
                <!--line column-->
                <div class=" lg:w-1/5 w-1/3 flex justify-center items-end ">
                    <div class="relative flex items-start justify-center h-1/2 w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center items-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">01</div>
                        </div>
                    </div>
                </div>
                <!--right column-->
                <div class="right-col lg:w-3/12 w-1/3 px-2 py-10 "></div>
            </div>

            <div class="2 flex flex-row justify-center w-full">
                <!-- left col -->
                <div class="left-col lg:w-3/12 w-1/3 px-2 py-10 "></div>
                <!--line column-->
                <div class="lg:w-1/5 w-1/3 flex justify-center ">
                    <div class="relative flex items-center justify-center h-full w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">02</div>
                        </div>
                    </div>
                </div>
                <!--right column-->
                <div class="right-col lg:w-3/12 w-1/3 py-8 ">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/35.png" alt="" class="lg:w-12 lg:h-12 w-8 h-8">
                            </div>
                            <div class="flex flex-row text-center text-xs lg:text-lg">
                                Alignement sur le marché
                            </div>
                        </div>
                    </div>
                </div>                
            </div>

            <div class="3 flex flex-row justify-center w-full">
                <!-- left col -->
                <div class="left-col lg:w-3/12 w-1/3 py-8 ">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/63.png" alt="" class=" lg:w-12 lg:h-12 w-8 h-8">
                            </div>
                            <div class="flex flex-row text-center text-xs lg:text-lg">
                                Investissement et valorisation des produits
                            </div>
                        </div>
                    </div>
                </div>
                <!--line column-->
                <div class="lg:w-1/5 w-1/3 flex justify-center ">
                    <div class="relative flex items-center justify-center h-full w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">03</div>
                        </div>
                    </div>
                </div>
                <!--right column-->
                <div class="right-col lg:w-3/12 w-1/3 px-2 py-10 "></div>
            </div>

            <div class="4 flex flex-row justify-center w-full">                
                <!--right column-->
                <div class="left-col lg:w-3/12 w-1/3 px-2 py-10 "></div>
                <!--line column-->
                <div class="lg:w-1/5 w-1/3 flex justify-center ">
                    <div class="relative flex items-center justify-center h-full w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">04</div>
                        </div>
                    </div>
                </div>
                <!-- left col -->
                <div class="right-col lg:w-3/12 w-1/3 py-8 ">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/36.png" alt="" class=" lg:w-12 lg:h-12 w-8 h-8">
                            </div>
                            <div class="flex flex-row text-center text-xs lg:text-lg">
                                Employabilité et capital RH
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="5 flex flex-row justify-center w-full">
                <!-- left col -->
                <div class="left-col lg:w-3/12 w-1/3 py-8 ">
                    <div class="flex justify-center w-fulld px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/lamp.png" alt="" class=" lg:w-12 lg:h-12 w-8 h-8">                
                            </div>
                            <div class="flex flex-row text-center text-xs lg:text-lg">
                                Soutien à l'innovation et digitalisation
                            </div>
                        </div>
                    </div>
                </div>  
                <!--line column-->
                <div class="lg:w-1/5 w-1/3 flex justify-center ">
                    <div class="relative flex h-full w-1 bg-blue-900 items-center justify-center">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">05</div>
                        </div>
                    </div>
                </div>                             
                <!--right column-->
                <div class="right-col lg:w-3/12 w-1/3 px-2 py-10 "></div>
            </div>

            <div class="6 flex flex-row justify-center w-full2">
                <!--left column-->
                <div class="left-col lg:w-3/12 w-1/3 px-2 py-10 "></div>                
                <!--line column-->
                <div class="lg:w-1/5 w-1/3 flex justify-center ">
                    <div class="relative flex justify-center items-end h-1/2 w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">06</div>
                        </div>
                    </div>
                </div>
                <!-- right col -->
                <div class="right-col lg:w-3/12 w-1/3 py-8 ">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/33.png" alt="" class=" lg:w-12 lg:h-12 w-8 h-8">
                            </div>
                            <div class="flex flex-row text-center text-xs lg:text-lg">
                                Soutien à l'economie sociale et solidaire
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



{{-- notre VISION  --}}
<section>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 px-4 md:px-8 lg:px-28 my-10 md:my-20">
        <div id="1" class="grid grid-cols-6 md:grid-cols-2 lg:grid-cols-6 gap-4 p-2 md:p-4 col-span-1 md:col-span-2 lg:col-span-6 rounded-xl">
            <div class="col-span-3 lg:col-span-3 rounded-lg">
                <img class="w-full h-full rounded-lg" src="vision/1.jpeg" alt="">
            </div>
            <div class="col-span-3 lg:col-span-3 rounded-lg">
                <img class="w-full h-full rounded-lg" src="vision/2.jpeg" alt="">
            </div>
            <div class="col-span-3 lg:col-span-3 rounded-lg">
                <img class="w-full h-full rounded-lg" src="vision/3.jpeg" alt="">
            </div>
            <div class="bg-gradient-to-b from-blue-600 to-blue-800 col-span-3 lg:col-span-3 rounded-lg p-2 lg:p-4 flex flex-col gap-4 justify-center items-center">
                <img class=" w-8 h-8 lg:h-14 lg:w-14" src="equipe/12.png" alt="">
                <h1 class=" text-lg lg:text-3xl font-medium lg:font-semibold text-center text-white">NOTRE VISION</h1>
            </div>
        </div>

        <div class="shadow-2xl col-span-1 md:col-span-2 lg:col-span-6 bg-white rounded-xl p-6 md:p-8 lg:p-10 text-center transform translate-x-1 duration-300 hover:scale-105 select-none">
            <div class="h-12 w-full flex justify-center items-center gap-1">
                <div class="w-2.5 h-2.5 rounded-lg bg-blue-300"></div>
                <div class="w-3.5 h-3.5 rounded-lg bg-blue-500"></div>
                <div class="w-2.5 h-2.5 rounded-lg bg-blue-300"></div>
            </div>
            <h1 class="text-lg lg:text-2xl mb-6 font-semibold text-gray-800">Accélérer votre développement</h1>
            <p class="text-gray-900 text-xs md:text-sm mb-2">
                Allant au-delà de notre expertise, notre raison d'être est de vous offrir
                simultanément, efficacité, inspiration, innovation et renouvellement.
                Nous vous accompagnons dans vos projets, vos évolutions et vos
                transformations tout en veillant à la performance et à la durabilité.                
            </p>
            <p class="text-gray-900 text-xs md:text-sm">
                Nous collaborons parfaitement avec vous pour concevoir des solutions
                sur mesure, spécialement adaptées pour relever vos défis. Cependant,
                notre perspective s'étend bien au-delà de l'horizon immédiat. Nous
                croyons en l'interdépendance entre la croissance des organisations et
                l'évolution de la société. En constituant des partenariats solides, notre
                objectif est de contribuer à votre épanouissement, ainsi qu'à
                l'émergence d'une économie prospère et inclusive.
            </p>
        </div>
    </div>
</section>



{{-- notre Engagement --}}
<section>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 px-4 md:px-8 lg:px-28 my-10 md:my-20">

        <div class="bg-gradient-to-b from-blue-600 to-blue-800 text-white shadow-2xl col-span-1 md:col-span-2 lg:col-span-6 rounded-xl p-6 md:p-8 lg:p-10 text-center transform translate-x-1 duration-300 hover:scale-105 select-none order-2 lg:order-1">
            <div class="h-12 w-full flex justify-center items-center gap-1 mb-6 lg:mb-14">
                <div class="w-2.5 h-2.5 rounded-lg bg-blue-100"></div>
                <div class="w-3.5 h-3.5 rounded-lg bg-white"></div>
                <div class="w-2.5 h-2.5 rounded-lg bg-blue-100"></div>
            </div>
            <h1 class="text-base lg:text-2xl mb-6 font-medium lg:font-semibold">Un équipe engagée pour le développement.</h1>
            <p class=" text-sm lg:text-sm mb-2">
                Chez BLUE STRATEGY, nous sommes bien plus
                qu'un simple cabinet. Nous sommes un
                équipe engagée, déterminée à contribuer au
                développement du Maroc et de l'Afrique de
                demain.                
            </p>
            <p class=" text-sm lg:text-sm">
                Notre mission fondamentale consiste à élever
                nos partenaires vers l'excellence, afin qu'ils
                deviennent des acteurs de référence dans la
                construction d'un avenir meilleur.
            </p>
        </div>

        <div id="1" class="grid grid-cols-6 grid-rows-4 md:grid-cols-2 lg:grid-cols-6 gap-4 p-2 md:p-4 col-span-1 md:col-span-2 lg:col-span-6 rounded-xl order-1 lg:order-2">
            <div class=" col-span-3 lg:col-span-3 row-span-2 rounded-lg p-0 lg:p-4 flex flex-col gap-2 justify-center items-center">
                <img class=" w-8 h-8 lg:h-14 lg:w-14" src="equipe/13.png" alt="">
                <h1 class=" text-base lg:text-3xl font-medium lg:font-semibold text-center text-blue-600">NOTRE ENGAGEMENT</h1>
            </div>
            <div class="col-span-3 lg:col-span-3 row-span-2 rounded-lg">
                <img class="w-full h-full rounded-lg" src="engagment/1.jpeg" alt="">
            </div>
            <div class="col-span-3 lg:col-span-3 row-span-2 rounded-lg">
                <img class="w-full h-full rounded-lg" src="engagment/2.jpeg" alt="">
            </div>
            <div class="col-span-3 lg:col-span-3 row-span-2 rounded-lg">
                <img class="w-full h-full rounded-lg" src="engagment/3.jpeg" alt="">
            </div>            
        </div>

    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const heading = document.querySelector(".TOP");
        const parentDiv = heading.parentElement;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heading.classList.add("animate");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        observer.observe(parentDiv);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const heading = document.querySelector(".BOTTOM");
        const parentDiv = heading.parentElement;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heading.classList.add("animate");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        observer.observe(parentDiv);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const paragraph = document.querySelector(".DATA");
        const parentDiv = paragraph.parentElement;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    paragraph.classList.add("animate");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        observer.observe(parentDiv);
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const img = document.querySelector(".IMG");
        const desc = document.querySelector(".DESC");
        const parentSection = img.closest("section");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    img.classList.add("animate");
                    desc.classList.add("animate");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        observer.observe(parentSection);
    });
</script>


<script>
    document.addEventListener("scroll", function() {
        const leftCols = document.querySelectorAll(".left-col");
        const rightCols = document.querySelectorAll(".right-col");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('left-col')) {
                        entry.target.classList.add("animate-left");
                    } else if (entry.target.classList.contains('right-col')) {
                        entry.target.classList.add("animate-right");
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        leftCols.forEach(col => observer.observe(col));
        rightCols.forEach(col => observer.observe(col));
    });
</script>

<script>
    document.addEventListener("scroll", function() {
        const image = document.querySelector(".animate-left");
        const textSection = document.querySelector(".animate-right");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                }
            });
        }, { threshold: 0.1 });

        observer.observe(image);
        observer.observe(textSection);
    });
</script>