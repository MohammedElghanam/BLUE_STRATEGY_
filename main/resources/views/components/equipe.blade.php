<style>
    .BG{
        background-color: #5c5470;
    }

    .Circle{
        background: linear-gradient( to bottom, blue, rgb(0, 110, 255));
    }
    .TIT{
        color: blue;
    }
    .SHADOW{
        box-shadow: 0 0 50px 4px #26262600;
    }
    .BOR{
        position: relative;
        border-top: 5px solid rgb(0, 14, 169);
        border-left: 5px solid rgb(0, 14, 169);
        border-right: 5px solid rgb(0, 14, 169);
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }
    .BOR1{
        position: relative;
        border-top: 5px solid rgb(0, 14, 169);
        border-left: 5px solid rgb(0, 14, 169);
        border-right: 5px solid rgb(0, 14, 169);
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }
    .BOR2{
        z-index: -10px;
        border-right: 5px solid rgb(0, 14, 169);
    }
    .BOR3{
        border-left: 5px solid rgb(0, 14, 169);
    }
    .BOR2::after{
        content: '';
        position: absolute;
        bottom: -15px;
        right: -23px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient( to bottom, blue, rgb(0, 110, 255));
    }
    .BOR3::after{
        content: '';
        position: absolute;
        bottom: -15px;
        left: -23px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(to bottom, blue, rgb(0, 110, 255));
    }

    .BOR::after{
        content: '';
        position: absolute;
        bottom: -15px;
        left: -23px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(to bottom, blue, rgb(0, 110, 255));
    }
    .BOR1::before{
        content: '';
        position: absolute;
        bottom: -15px;
        right: -23px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(to bottom, blue, rgb(0, 110, 255));
    }
</style>

{{-- NOS Experts --}}
<section class="my-16 px-4 md:px-20">
    <div class="grid grid-cols-1 gap-4">
        <div class=" col-span-1 flex justify-start items-center gap-5">
            <div class=" ">
                <img class=" w-12 h-12 " src="Equipe/8.png" alt="">
            </div>
            <h1 class=" text-4xl font-semibold text-gray-900">Nos Experts</h1>
        </div>
        <!-- Services Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Service 5 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="Equipe/1.jpg" alt="Conseil" loading="lazy">
                <h2 class="font-semibold text-lg">EXPERTS MÉTIERS DE TERRAIN</h2>
                <p class="text-gray-900">
                    Nos experts de terrain sont directement issus des réalités du marché. 
                    Avec une expérience pratique et une compréhension profonde des défis 
                    quotidiens, ils apportent des solutions concrètes et immédiatement 
                    applicables à vos projets. Leur expertise va au-delà de la théorie, 
                    garantissant des résultats tangibles.
                </p>
            </div>

            <!-- Service 1 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="Equipe/2.jpg" alt="Gestion de projet" loading="lazy">
                <h2 class="font-semibold text-lg">CONSULTANTS AMOA TECHNICO-FONCTIONNELS</h2>
                <p class="text-gray-900">
                    Nos consultants technico-fonctionnels possèdent une double compétence essentielle : comprendre vos besoins techniques tout en intégrant les aspects fonctionnels. Ils assurent une mise en œuvre fluide et efficace de vos projets, en alignant parfaitement les solutions technologiques avec vos objectifs stratégiques.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="Equipe/3.png" alt="Mentorat"  loading="lazy">
                <h2 class="font-semibold text-lg">DÉVELOPPEURS DE SOLUTIONS</h2>
                <p class="text-gray-900">
                    Nos développeurs de solutions sont une équipe diversifiée comprenant des spécialistes métiers, ingénieurs, designers UX, marketers, développeurs web, et spécialistes IT. Ensemble, ils créent des solutions innovantes et sur mesure, adaptées à vos besoins spécifiques. Leur créativité et leur expertise technique garantissent des résultats exceptionnels.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2 " src="Equipe/4.png" alt="Coaching" loading="lazy">
                <h2 class="font-semibold text-lg">COACHS PROFESSIONNELS CERTIFIÉS</h2>
                <p class="text-gray-900">
                    Nos coachs professionnels certifiés sont dédiés à vous guider vers l'excellence. Avec des années d'expérience et des certifications reconnues, ils vous accompagnent dans le développement de vos compétences, l'amélioration de votre performance et l'atteinte de vos objectifs professionnels.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="Equipe/6.jpg" alt="Formation" loading="lazy">
                <h2 class="font-semibold text-lg">MENTORS BUSINESS CERTIFIÉS</h2>
                <p class="text-gray-900">
                    Nos mentors business sont des experts reconnus avec une longue expérience dans l'accompagnement des entreprises. Leur rôle est de vous guider stratégiquement, en partageant des insights précieux et en vous aidant à naviguer dans les défis complexes du monde des affaires.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="p-4 bg-white rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img class="rounded-xl mb-2" src="Equipe/7.jpg" alt="Conseil" loading="lazy">
                <h2 class="font-semibold text-lg">FORMATEURS PROFESSIONNELS</h2>
                <p class="text-gray-900">
                    Nos formateurs professionnels sont spécialisés dans la transmission des compétences essentielles. Ils travaillent en étroite collaboration avec vos équipes pour favoriser leur développement et les préparer à relever de nouveaux défis avec succès.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 px-4 md:px-8 lg:px-28 my-10 md:my-20">
        <div id="1" class="grid grid-cols-6 md:grid-cols-2 lg:grid-cols-6 gap-4 p-2 md:p-4 col-span-1 md:col-span-2 lg:col-span-6 rounded-xl">
            <div class="col-span-3 lg:col-span-3 rounded-lg">
                <img class="w-full h-auto rounded-lg" src="Equipe/1.jpg" alt="">
            </div>
            <div class="col-span-3 lg:col-span-3 rounded-lg">
                <img class="w-full h-auto rounded-lg" src="Equipe/2.jpg" alt="">
            </div>
            <div class="col-span-3 lg:col-span-3 rounded-lg">
                <img class="w-full h-auto rounded-lg" src="Equipe/6.jpg" alt="">
            </div>
            <div class="bg-gradient-to-b from-blue-600 to-blue-800 col-span-3 lg:col-span-3 rounded-lg p-4"></div>
        </div>

        <div class="shadow-2xl col-span-1 md:col-span-2 lg:col-span-6 bg-white rounded-xl p-6 md:p-8 lg:p-10 text-center">
            <div class="h-12 w-full flex justify-center items-center gap-1">
                <div class="w-2.5 h-2.5 rounded-lg bg-blue-300"></div>
                <div class="w-3.5 h-3.5 rounded-lg bg-blue-500"></div>
                <div class="w-2.5 h-2.5 rounded-lg bg-blue-300"></div>
            </div>
            <h1 class="text-2xl md:text-3xl font-semibold mb-6 md:mb-10">UNE ÉQUIPE CRÉATIVE <br> .. UN RÉSEAU UNIQUE</h1>
            <p class="text-gray-900 text-sm md:text-base">
                Chez BLUE STRATEGY, nous croyons fermement 
                que chaque défi mérite une solution unique. Notre équipe, 
                composée d'experts de terrain et de profils inspirants, couvre 
                un large éventail de domaines. Nous réunissons des professionnels 
                diversifiés pour traiter vos enjeux sous tous les angles, toujours 
                informés des dernières tendances et des meilleures pratiques, qualifiés et certifiés.
            </p>
        </div>
    </div>
</section>


{{-- <div class=" flex mt-40 px-20 bg-blue-600 p-6">

    <div class=" bg-red-500">
        <div class=" w-1/4 h-48 bg-white shadow-2xl p-4 rounded-xl">
            <h1 class=" font-medium mb-2">Équipe polyvalente </h1>
            <p class=" text-gray-900 ">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
        </div>

        <div class="w-1/4 h-20 flex items-center bg-yellow-400">
            <div class="relative flex items-center justify-center h-1 w-full bg-red-900">
                <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                    <div class=" text-blue-900">03</div>
                </div>
            </div>
        </div>
        <div class=" w-1/4 h-48 bg-white shadow-2xl p-4 rounded-xl"></div>

    </div>
    <div class=" bg-red-600">
        <div class=" w-1/4 h-48 bg-white shadow-2xl p-4 rounded-xl">
            <h1 class=" font-medium mb-2">Équipe polyvalente </h1>
            <p class=" text-gray-900 ">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
        </div>

        <div class="w-1/4 h-20 flex items-center bg-yellow-400">
            <div class="relative flex items-center justify-center h-1 w-full bg-red-900">
                <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                    <div class=" text-blue-900">03</div>
                </div>
            </div>
        </div>
        <div class=" w-1/4 h-48 bg-white shadow-2xl p-4 rounded-xl"></div>

    </div>

    
    <div class=" flex gap-4 bg-pink-600">
        <div class=" w-1/4 bg-white shadow-2xl p-4 rounded-xl">
            <h1 class=" font-medium mb-2">Équipe polyvalente </h1>
            <p class=" text-gray-900 ">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
        </div>
        <div class=" bg-white shadow-2xl p-4 rounded-xl"></div>
        <div class=" w-1/4 bg-white shadow-2xl p-4 rounded-xl">
            <h1 class=" font-medium mb-2">Équipe polyvalente </h1>
            <p class=" text-gray-900 ">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
        </div>
        <div class=" bg-white shadow-2xl p-4 rounded-xl"></div>
        <div class=" w-1/4 bg-white shadow-2xl p-4 rounded-xl">
            <h1 class=" font-medium mb-2">Équipe polyvalente </h1>
            <p class=" text-gray-900 ">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
        </div>
        <div class=" bg-white shadow-2xl p-4 rounded-xl"></div>
    </div>

    <div class="  flex justify-center w-full">
        <div class="w-1/5 h-10 bg-yellow-400">
            <div class="relative flex items-center justify-start h-1 w-full bg-red-900">
                <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                    <div class=" text-blue-900">03</div>
                </div>
            </div>
        </div>
        <div class="w-1/5 flex justify-end bg-yellow-400">
            <div class="relative flex items-center justify-center h-1 w-full bg-red-900">
                <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                    <div class=" text-blue-900">03</div>
                </div>
            </div>
        </div>
        <div class="w-1/5 flex justify-end bg-yellow-400">
            <div class="relative flex items-center justify-center h-1 w-full bg-red-900">
                <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                    <div class=" text-blue-900">03</div>
                </div>
            </div>
        </div>
        <div class="w-1/5 flex justify-end bg-yellow-400">
            <div class="relative flex items-center justify-center h-1 w-full bg-red-900">
                <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                    <div class=" text-blue-900">03</div>
                </div>
            </div>
        </div>
        <div class="w-1/5 flex justify-end bg-yellow-400">
            <div class="relative flex items-center justify-center h-1 w-full bg-red-900">
                <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                    <div class=" text-blue-900">03</div>
                </div>
            </div>
        </div>
        <div class="w-1/5 flex justify-end bg-yellow-400">
            <div class="relative flex items-center justify-end h-1 w-full bg-red-900">
                <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                    <div class=" text-blue-900">03</div>
                </div>
            </div>
        </div>
    
    </div>
    <div class=" flex gap-4 bg-pink-600">
        <div class=" bg-white shadow-2xl p-4 rounded-xl"></div>
        <div class=" w-1/4 bg-white shadow-2xl p-4 rounded-xl">
            <h1 class=" font-medium mb-2">Équipe polyvalente </h1>
            <p class=" text-gray-900 ">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
        </div>
        <div class=" bg-white shadow-2xl p-4 rounded-xl"></div>
        <div class=" w-1/4 bg-white shadow-2xl p-4 rounded-xl">
            <h1 class=" font-medium mb-2">Équipe polyvalente </h1>
            <p class=" text-gray-900 ">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
        </div>
        <div class=" bg-white shadow-2xl p-4 rounded-xl"></div>
        <div class=" w-1/4 bg-white shadow-2xl p-4 rounded-xl">
            <h1 class=" font-medium mb-2">Équipe polyvalente </h1>
            <p class=" text-gray-900 ">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
        </div>
    </div>
</div> --}}


<section class=" bg-gray-100 mt-40 px-32 py-20">
    <div class=" grid grid-cols-12 h-80">

        <div class="grid grid-cols-1 col-span-4">
            <div class=" BOR col-span-1 flex justify-center items-center">
                <div class=" Circle w-20 h-20 flex justify-center items-center rounded-full">
                    <img class=" w-10 h-10" src="Equipe/11.png" alt="">
                </div>
            </div>
            <div class=" BOR2 col-span-1 p-6 text-center text-white relative">
                <h1 class=" text-gray-900 font-medium mb-2">Équipe polyvalente </h1>
                <p class=" text-gray-700">Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 col-span-4">
            <div class=" col-span-1 flex justify-center items-center">
                <div class=" Circle w-20 h-20 flex justify-center items-center rounded-full">
                    <img class=" w-10 h-10" src="Equipe/10.png" alt="">                
                </div>
            </div>
            <div class=" col-span-1 p-6 text-center text-white">
                <h1 class=" text-gray-900 font-medium mb-2">Expertise approfondie </h1>
                <p class=" text-gray-700">
                    Avec plus de 20 experts et jusqu'à 25 ans d'expérience, nous offrons une expertise approfondie et reconnue, toujours à la pointe des tendances.                
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 col-span-4">
            <div class=" BOR1 col-span-1 flex justify-center items-center">
                <div class=" Circle w-20 h-20 flex justify-center items-center rounded-full">
                    <img class=" w-10 h-10" src="Equipe/9.png" alt="">                </div>
            </div>
            <div class=" BOR3 col-span-1 p-6 text-center text-white relative">
                <h1 class=" text-gray-900 font-medium mb-2"> Mobilité et flexibilité </h1>
                <p class=" text-gray-700">
                    Présents sur tout le territoire marocain, nous sommes réactifs et proches de vous, garantissant des solutions rapides et efficaces.                
                </p>
            </div>
        </div>
    </div>
</section>

  

<section class="bg-gray-100 mt-20 md:mt-40 px-4 sm:px-8 md:px-16 lg:px-32 py-10 lg:py-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-6 lg:gap-8">
        <!-- First Column -->
        <div class="flex flex-col items-center">
            <div class="w-20 h-20 flex justify-center items-center rounded-full bg-white shadow-lg">
                <img class="w-10 h-10" src="Equipe/11.png" alt="Équipe polyvalente">
            </div>
            <div class="bg-white p-6 text-center text-gray-900 rounded-lg shadow-md mt-6">
                <h1 class="font-medium mb-2">Équipe polyvalente</h1>
                <p class="text-gray-700">
                    Chez BLUE STRATEGY, notre équipe diversifiée s'attaque à vos défis sous tous les angles, offrant des perspectives uniques et des compétences spécialisées.
                </p>
            </div>
        </div>

        <!-- Second Column -->
        <div class="flex flex-col items-center">
            <div class="w-20 h-20 flex justify-center items-center rounded-full bg-white shadow-lg">
                <img class="w-10 h-10" src="Equipe/10.png" alt="Expertise approfondie">
            </div>
            <div class="bg-white p-6 text-center text-gray-900 rounded-lg shadow-md mt-6">
                <h1 class="font-medium mb-2">Expertise approfondie</h1>
                <p class="text-gray-700">
                    Avec plus de 20 experts et jusqu'à 25 ans d'expérience, nous offrons une expertise approfondie et reconnue, toujours à la pointe des tendances.
                </p>
            </div>
        </div>

        <!-- Third Column -->
        <div class="flex flex-col items-center">
            <div class="w-20 h-20 flex justify-center items-center rounded-full bg-white shadow-lg">
                <img class="w-10 h-10" src="Equipe/9.png" alt="Mobilité et flexibilité">
            </div>
            <div class="bg-white p-6 text-center text-gray-900 rounded-lg shadow-md mt-6">
                <h1 class="font-medium mb-2">Mobilité et flexibilité</h1>
                <p class="text-gray-700">
                    Présents sur tout le territoire marocain, nous sommes réactifs et proches de vous, garantissant des solutions rapides et efficaces.
                </p>
            </div>
        </div>
    </div>
</section>

