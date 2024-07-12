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

</style>

<section class=" grid grid-cols-12 px-40 pt-40 w-full ">
    <div class=" col-span-6 h-3/4">
        <h1 class="TOP text-5xl font-meduim text-blue-800 mb-6">A propos de nous</h1>
        <div class=" grid grid-cols-12 justify-center items-center w-full bg-blue-900 p-12">
            <div class="DATA col-span-12">
            <p class=" col-span-12 text-lg font-light pl-5 text-white mb-3">
                BLUE STRATEGY est un cabinet d'études, d'accompagnement et PMO
                multidisciplinaire, lancé en 2023, dédié aux entreprises et aux organisations
                des secteurs public et privé.
            </p>    
            <p class=" col-span-12 text-lg font-light pl-5 text-white mb-3">
                Nous accompagnons nos clients (TPE, PME, STARTUPS, ONG..) dans la réalisation
                de leurs projets de développement et dans l'exploration de nouveaux leviers de
                performance, afin de stimuler l'évolution et la croissance de leurs activités sur
                le marché dynamique d'aujourd'hui.
            </p>
            <p class=" col-span-12 text-lg font-light pl-5 text-white">
                BLUE STRATEGY s’est construit sur la conviction que le succès des
                transformations repose sur l'adoption d'une vision 360° et une équipe
                diversifiée, combinant les compétences les plus solides en matière de
                business, de technologie et de durabilité
            </p>
            </div>
        </div>
    </div>
    <div class=" col-span-6 h-fit relative">
        <img src="AP/120.png" alt="" class="BOR absolute -left-7 shadow-2xl">
        <div class=" BOTTOM grid grid-rows-4 grid-flow-col gap-8 absolute bottom-0 left-0 w-full pt-10 pl-5">
            <div class=" row-span-1 flex justify-start items-center gap-3 w-1/2">
                <?xml version="1.0" encoding="utf-8"?>
                <svg class=" w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 113.02 122.88" style="enable-background:new 0 0 113.02 122.88" xml:space="preserve">
                    <style type="text/css"><![CDATA[.st0{fill-rule:evenodd;clip-rule:evenodd;}]]></style>
                    <g>
                        <path class="st0" d="M70.12,40.96l2.86,2.86c0.75,0.75,0.75,1.99,0,2.74l-2.31,2.31c0.64,1.19,1.12,2.47,1.43,3.81h2.99 c1.07,0,1.94,0.87,1.94,1.94v4.05c0,1.07-0.87,1.94-1.94,1.94h-3.26c-0.4,1.32-0.97,2.56-1.69,3.71l2.11,2.11 c0.75,0.75,0.75,1.99,0,2.74l-2.86,2.86c-0.75,0.75-1.99,0.75-2.74,0l-2.3-2.3c-1.19,0.64-2.47,1.12-3.82,1.43v2.99 c0,1.07-0.87,1.94-1.94,1.94h-4.05c-1.07,0-1.94-0.87-1.94-1.94v-3.26c-1.32-0.4-2.56-0.97-3.71-1.69L46.8,71.3 c-0.75,0.75-1.99,0.75-2.74,0l-2.86-2.86c-0.75-0.75-0.75-1.99,0-2.74l2.3-2.3c-0.64-1.19-1.12-2.47-1.43-3.81h-2.99 c-1.06,0-1.94-0.87-1.94-1.94v-4.05c0-1.07,0.87-1.94,1.94-1.94h3.26c0.4-1.32,0.97-2.56,1.69-3.71l-2.11-2.11 c-0.75-0.75-0.75-1.99,0-2.74l2.86-2.86c0.75-0.75,1.99-0.75,2.74,0l2.31,2.31c1.19-0.64,2.47-1.12,3.81-1.43v-2.99 c0-1.07,0.87-1.94,1.94-1.94h4.05c1.07,0,1.94,0.87,1.94,1.94v3.26c1.32,0.4,2.56,0.97,3.71,1.69l2.11-2.11 C68.14,40.2,69.37,40.2,70.12,40.96L70.12,40.96L70.12,40.96z M44.13,102.07c-1.14,0.03-2.14-0.81-2.3-1.96 c-0.17-1.2,0.64-2.31,1.82-2.54c-1.3-7.37-4.85-11.43-8.6-15.72c-2.92-3.34-5.95-6.81-8.34-11.92c-2.35-5.03-3.64-10.23-3.6-15.63 c0.05-5.4,1.42-10.96,4.4-16.71c0.02-0.04,0.04-0.07,0.06-0.11l0,0c3.91-6.62,9.38-11.04,15.47-13.52c5.11-2.09,10.66-2.8,16.1-2.3 c5.42,0.5,10.73,2.2,15.37,4.94c5.9,3.49,10.75,8.67,13.42,15.21c1.44,3.54,2.42,7.49,2.54,11.82c0.12,4.31-0.62,8.96-2.61,13.88 c-2.66,6.59-6.18,10.68-9.47,14.51c-3.03,3.53-5.85,6.81-7.42,11.84c0.89,0.21,1.59,0.94,1.73,1.9c0.17,1.24-0.7,2.39-1.94,2.56 L70,98.43c-0.14,1.09-0.23,2.26-0.27,3.51l0.25-0.04c1.24-0.17,2.39,0.7,2.56,1.94c0.17,1.24-0.7,2.39-1.94,2.56l-0.78,0.11 c0.01,0.15,0.02,0.3,0.03,0.45l0,0c0.07,0.88,0.08,1.73,0.03,2.54l0.13-0.02c1.25-0.15,2.38,0.74,2.54,1.98 c0.15,1.25-0.74,2.38-1.98,2.54l-1.68,0.21c-1.2,3.11-3.34,5.48-5.87,6.94c-1.74,1.01-3.67,1.59-5.61,1.71 c-1.97,0.12-3.96-0.25-5.78-1.13c-2.08-1.02-3.94-2.71-5.29-5.14c-0.65-0.33-1.13-0.97-1.23-1.75c-0.04-0.31-0.01-0.61,0.07-0.89 c-0.39-1.16-0.68-2.43-0.87-3.83l-0.07,0.01c-1.24,0.17-2.39-0.7-2.56-1.94s0.7-2.39,1.94-2.56l0.54-0.08 C44.19,104.33,44.18,103.17,44.13,102.07L44.13,102.07L44.13,102.07z M2.18,58.86C1.01,58.89,0.04,57.98,0,56.81 c-0.04-1.17,0.88-2.14,2.05-2.18l8.7-0.3c1.17-0.04,2.14,0.88,2.18,2.05c0.04,1.17-0.88,2.14-2.05,2.18L2.18,58.86L2.18,58.86 L2.18,58.86z M110.69,50.25c1.16-0.12,2.2,0.73,2.32,1.89c0.12,1.16-0.73,2.2-1.89,2.32l-8.66,0.91c-1.16,0.12-2.2-0.73-2.32-1.89 c-0.12-1.16,0.73-2.2,1.89-2.32L110.69,50.25L110.69,50.25L110.69,50.25z M94.92,14.78c0.65-0.97,1.96-1.23,2.93-0.58 c0.97,0.65,1.23,1.96,0.58,2.93l-4.84,7.24c-0.65,0.97-1.96,1.23-2.93,0.58c-0.97-0.65-1.23-1.96-0.58-2.93L94.92,14.78 L94.92,14.78L94.92,14.78z M57.63,2.06c0.03-1.17,1-2.09,2.16-2.06c1.17,0.03,2.09,1,2.06,2.16l-0.22,8.7 c-0.03,1.17-1,2.09-2.16,2.06c-1.17-0.03-2.09-1-2.06-2.16L57.63,2.06L57.63,2.06L57.63,2.06z M13.88,15.53 c-0.86-0.8-0.9-2.14-0.11-2.99c0.8-0.86,2.14-0.9,2.99-0.11l6.37,5.94c0.86,0.8,0.9,2.14,0.11,2.99c-0.8,0.86-2.14,0.9-2.99,0.11 L13.88,15.53L13.88,15.53L13.88,15.53z M47.88,96.96l18.49-2.63c1.59-6.7,5.05-10.73,8.8-15.08c3.08-3.58,6.36-7.4,8.76-13.34 c1.76-4.35,2.41-8.43,2.31-12.19c-0.1-3.75-0.96-7.21-2.24-10.34c-2.3-5.63-6.51-10.11-11.65-13.15c-4.11-2.43-8.8-3.94-13.59-4.37 c-4.77-0.44-9.64,0.19-14.13,2.02c-5.26,2.15-9.99,5.97-13.39,11.72c-2.64,5.12-3.86,10.02-3.9,14.73 c-0.04,4.74,1.11,9.33,3.2,13.8c2.13,4.56,4.97,7.8,7.69,10.92C42.47,83.91,46.48,88.5,47.88,96.96L47.88,96.96L47.88,96.96z M65.62,99.03l-17.27,2.45c0.05,1.1,0.07,2.25,0.05,3.47l17.05-2.42C65.47,101.3,65.52,100.13,65.62,99.03L65.62,99.03L65.62,99.03 z M48.49,109.53c0.12,0.92,0.3,1.76,0.53,2.54l16.55-2.04c0.11-0.86,0.13-1.77,0.05-2.74l0,0v-0.02l-0.01-0.17L48.49,109.53 L48.49,109.53L48.49,109.53z M51.37,116.37c0.64,0.67,1.35,1.19,2.1,1.55c1.15,0.56,2.42,0.79,3.67,0.72 c1.29-0.08,2.57-0.47,3.74-1.15c1.1-0.64,2.09-1.53,2.88-2.65L51.37,116.37L51.37,116.37L51.37,116.37z M57.09,48.17 c4.39,0,7.96,3.56,7.96,7.96s-3.56,7.96-7.96,7.96s-7.96-3.56-7.96-7.96C49.13,51.73,52.7,48.17,57.09,48.17L57.09,48.17 L57.09,48.17z"/>
                    </g>
                </svg>
                <p class=" font-medium text-xl text-blue-900">Innovation</p>
            </div>
            <div class=" row-span-1 flex justify-start items-center gap-3 w-1/2">
                <img src="images/34.png" alt="" class=" w-10 h-10">
                <p class=" font-medium text-xl text-blue-900">Authenticité</p>
            </div>
            <div class=" row-span-1 flex justify-start items-center gap-3 w-1/2">
                <?xml version="1.0" encoding="utf-8"?>
                <svg class=" w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 101.01" style="enable-background:new 0 0 122.88 101.01" xml:space="preserve">
                    <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style>
                    <g>
                        <path class="st0" d="M61.44,0l5.88,4.77l7.48-1.2l2.69,7.08l7.08,2.69l-1.2,7.48l4.77,5.88l-4.77,5.88l1.2,7.48l-7.08,2.69 l-2.69,7.08l-7.48-1.2l-5.88,4.77l-5.88-4.77l-7.48,1.2l-2.69-7.08l-7.08-2.69l1.2-7.48l-4.77-5.88l4.77-5.88l-1.2-7.48l7.08-2.69 l2.69-7.08l7.48,1.2L61.44,0L61.44,0z M66.41,84.78h21.91c1.76-1.75,3.69-3.57,5.64-5.42c4.11-3.89,8.4-7.95,12.81-13.03 c5.04-5.81,5.58-7.82,7.11-13.51c0.29-1.07,0.61-2.27,1.03-3.76l2.62-9.21l0.03-0.1c1.4-4.1,1.51-6.81,0.93-8.37 c-0.18-0.48-0.41-0.8-0.68-0.97c-0.21-0.14-0.49-0.19-0.78-0.16c-0.68,0.07-1.45,0.5-2.15,1.27l-7.78,18.53 c-0.07,0.17-0.17,0.33-0.28,0.47c-0.46,0.83-1.08,1.64-1.88,2.41l-13.8,15.39c-0.75,0.84-2.04,0.91-2.87,0.16 c-0.84-0.75-0.91-2.04-0.16-2.87c1.87-2.08,16.37-16.31,15.63-19.5c-0.92-3.93-10.8,6.16-11.98,7.2l-0.03,0.03 c-5.79,5.48-8.28,6.78-12.82,9.15c-0.95,0.5-1.99,1.04-3.28,1.74c-0.51,0.28-1.01,0.62-1.5,0.99c-0.52,0.4-1.02,0.81-1.49,1.21 c-2.4,2.02-3.66,3.66-4.38,5.47c-0.75,1.88-1.02,4.17-1.39,7.31c-0.15,1.26-0.26,2.52-0.35,3.77 C66.47,83.59,66.44,84.19,66.41,84.78L66.41,84.78L66.41,84.78z M56.47,84.78H34.55c-1.76-1.75-3.69-3.57-5.65-5.42 c-4.11-3.89-8.4-7.95-12.81-13.03c-5.04-5.81-5.58-7.82-7.11-13.51c-0.29-1.07-0.61-2.27-1.03-3.76l-2.62-9.21l-0.03-0.1 c-1.4-4.1-1.51-6.81-0.93-8.37c0.18-0.48,0.41-0.8,0.68-0.97c0.21-0.14,0.49-0.19,0.78-0.16c0.68,0.07,1.45,0.5,2.15,1.27 l7.78,18.53c0.07,0.17,0.17,0.33,0.28,0.47c0.46,0.83,1.08,1.64,1.88,2.41l13.8,15.39c0.75,0.84,2.04,0.91,2.87,0.16 c0.84-0.75,0.91-2.04,0.16-2.87C32.9,63.52,18.4,49.29,19.14,46.1c0.92-3.93,10.8,6.16,11.98,7.2l0.03,0.03 c5.79,5.48,8.28,6.78,12.82,9.15c0.95,0.5,1.99,1.04,3.28,1.74c0.51,0.28,1.01,0.62,1.5,0.99c0.52,0.4,1.02,0.81,1.49,1.21 c2.4,2.02,3.66,3.66,4.38,5.47c0.75,1.88,1.02,4.17,1.39,7.31c0.15,1.26,0.26,2.52,0.35,3.77C56.41,83.59,56.44,84.19,56.47,84.78 L56.47,84.78L56.47,84.78z M29.45,85.48c-0.31,0.36-0.5,0.83-0.5,1.34v12.14c0,1.13,0.92,2.04,2.04,2.04h27.58 c1.13,0,2.04-0.92,2.04-2.04V86.71c0-1.3-0.08-2.7-0.17-4c-0.09-1.33-0.21-2.65-0.36-3.96c-0.4-3.43-0.7-5.94-1.66-8.35 c-0.99-2.47-2.58-4.6-5.53-7.09c-0.54-0.46-1.09-0.92-1.67-1.35c-0.61-0.46-1.27-0.9-2.01-1.31c-1.2-0.65-2.32-1.24-3.34-1.78 c-4.2-2.2-6.5-3.4-11.91-8.52c-0.04-0.04-0.09-0.08-0.13-0.11l-5.22-4.61c-2.64-3.09-7.87-6.77-11.68-3.43 c-2.03-4.83-4.03-15.36-10.67-16.01c-1.21-0.12-2.38,0.14-3.4,0.8c-0.97,0.63-1.77,1.61-2.27,2.96c-0.88,2.35-0.86,6,0.86,11.05 l2.6,9.15c0.38,1.32,0.71,2.59,1.02,3.71c1.7,6.35,2.3,8.6,7.97,15.12c4.49,5.17,8.89,9.33,13.1,13.32 C27.23,83.36,28.33,84.41,29.45,85.48L29.45,85.48L29.45,85.48z M33.35,88.86c0.27,0.06,0.55,0.06,0.83,0h22.34v8.06H33.03v-8.06 H33.35L33.35,88.86z M93.43,85.48c0.31,0.36,0.5,0.83,0.5,1.34v12.14c0,1.13-0.91,2.04-2.04,2.04H64.32 c-1.13,0-2.04-0.92-2.04-2.04V86.71c0-0.07,0-0.15,0.01-0.22c0.03-1.31,0.08-2.58,0.16-3.78c0.09-1.33,0.21-2.65,0.36-3.96 c0.4-3.43,0.7-5.94,1.66-8.35c0.99-2.47,2.58-4.6,5.53-7.09c0.54-0.46,1.09-0.92,1.67-1.35c0.61-0.46,1.27-0.9,2.01-1.31 c1.2-0.65,2.32-1.24,3.34-1.78c4.2-2.2,6.5-3.4,11.91-8.52c0.04-0.04,0.09-0.08,0.13-0.11l5.22-4.61 c2.64-3.09,7.87-6.77,11.68-3.43c0.99-2.37,4.41-11.65,5.59-13.07c1.46-1.75,3.31-2.77,5.08-2.95c1.21-0.12,2.38,0.14,3.4,0.8 c0.97,0.63,1.77,1.61,2.27,2.96c0.88,2.35,0.86,6-0.86,11.05l-2.6,9.15c-0.38,1.32-0.71,2.59-1.02,3.71 c-1.7,6.35-2.3,8.6-7.97,15.12c-4.49,5.17-8.88,9.33-13.1,13.32C95.65,83.36,94.55,84.41,93.43,85.48L93.43,85.48L93.43,85.48z M89.53,88.86c-0.27,0.06-0.55,0.06-0.83,0H66.36v8.06h23.49v-8.06H89.53L89.53,88.86z M61.44,17.18l2.75,6.72l7.25,0.54 l-5.54,4.69l1.73,7.06l-6.18-3.83l-6.18,3.83L57,29.14l-5.56-4.69l7.25-0.54l2.75-6.72H61.44L61.44,17.18z M61.44,11.61 c8.33,0,15.08,6.76,15.08,15.08c0,8.33-6.76,15.08-15.08,15.08c-8.33,0-15.08-6.76-15.08-15.08 C46.36,18.37,53.11,11.61,61.44,11.61L61.44,11.61z"/>
                    </g>
                </svg>
                <p class=" font-medium text-xl text-blue-900">Excellence</p>
            </div>
            <div class=" row-span-1 flex justify-start items-center gap-3 w-1/2">
                <img src="images/ch.png" alt="" class=" w-10 h-10">
                <p class=" font-medium text-xl text-blue-900">Proximité</p>
            </div>
        </div>
    </div>
    
</section>


<section class="grid grid-cols-12 px-40 w-full mt-40 bg-blue-900" style="height: 250px;">
    <div class="col-span-6 relative">
        <img src="AP/121.png" alt="" class="absolute -top-6 IMG">
    </div>
    <div class="col-span-5 relative p-2">
        <div class="DESC bg-white absolute -left-16 -top-20 shadow-2xl">
            <h1 class="text-3xl font-semibold px-8 text-blue-800">Notre vision</h1>
            <div class="grid grid-cols-12 justify-center items-center w-full px-4 pb-10 pt-5">
                <h1 class=" col-span-12 pl-4 font-semibold mb-4 text-gray-700">Accélérer votre développement</h1>
                <p class="col-span-12 text-lg font-light pl-4 mb-2">
                    Allant au-delà de notre expertise, notre raison d'être est de vous offrir
                    simultanément, efficacité, inspiration, innovation et renouvellement.
                    Nous vous accompagnons dans vos projets, vos évolutions et vos
                    transformations tout en veillant à la performance et à la durabilité.
                </p>    
                <p class="col-span-12 text-lg font-light pl-4">
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
    </div>
</section>



<div class="min-h-screen bg-white">
    <div class="min-h-screen justify-center mt-80">
        <div class=" mb-8">
            <h1 class=" text-center font-bold text-3xl text-blue-900">NOUS INTERVENONS PRINCIPALEMENT</h1>
            <h1 class=" text-center font-bold text-3xl text-blue-900">POUR RÉPONDRE À 06 ENJEUX</h1>
        </div>
        <div class="w-2/3 mx-auto">

            <div class="flex flex-row justify-center w-full">
                <!-- left col -->
                <div class="left-col w-3/12 py-8">
                    <div class="flex justify-center w-fulld px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/lamp.png" alt="" class=" w-12 h-12">                
                            </div>
                            <div class="flex flex-row text-center">
                                Soutien à l'innovation et digitalisation
                            </div>
                        </div>
                    </div>
                </div>
                <!--line column-->
                <div class="w-1/5 flex justify-center items-end">
                    <div class="relative flex items-start justify-center h-1/2 w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center items-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">01</div>
                        </div>
                    </div>
                </div>
                <!--right column-->
                <div class="right-col w-3/12 px-2 py-10"></div>
            </div>

            <div class="flex flex-row justify-center w-full">                
                <!--right column-->
                <div class="right-col w-3/12 px-2 py-10"></div>
                <!--line column-->
                <div class="w-1/5 flex justify-center">
                    <div class="relative flex h-full w-1 bg-blue-900 items-center justify-center">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">02</div>
                        </div>
                    </div>
                </div>
                <!-- left col -->
                <div class="left-col w-3/12 py-8">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/33.png" alt="" class=" w-12 h-12">
                            </div>
                            <div class="flex flex-row text-center">
                                Soutien à l'economie sociale et solidaire
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row justify-center w-full">
                <!-- left col -->
                <div class="left-col w-3/12 py-8">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/63.png" alt="" class=" w-12 h-12">
                            </div>
                            <div class="flex flex-row text-center">
                                Investissement et valorisation des produits
                            </div>
                        </div>
                    </div>
                </div>
                <!--line column-->
                <div class="w-1/5 flex justify-center">
                    <div class="relative flex items-center justify-center h-full w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">03</div>
                        </div>
                    </div>
                </div>
                <!--right column-->
                <div class="right-col w-3/12 px-2 py-10"></div>
            </div>

            <div class="flex flex-row justify-center w-full">                
                <!--right column-->
                <div class="right-col w-3/12 px-2 py-10"></div>
                <!--line column-->
                <div class="w-1/5 flex justify-center">
                    <div class="relative flex items-center justify-center h-full w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">04</div>
                        </div>
                    </div>
                </div>
                <!-- left col -->
                <div class="left-col w-3/12 py-8">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/36.png" alt="" class=" w-12 h-12">
                            </div>
                            <div class="flex flex-row text-center">
                                Employabilité et capital RH
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row justify-center w-full">
                <!-- left col -->
                <div class="left-col w-3/12 py-8">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/35.png" alt="" class=" w-12 h-12">
                            </div>
                            <div class="flex flex-row text-center">
                                Alignement sur le marché
                            </div>
                        </div>
                    </div>
                </div>
                <!--line column-->
                <div class="w-1/5 flex justify-center">
                    <div class="relative flex items-center justify-center h-full w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">05</div>
                        </div>
                    </div>
                </div>
                <!--right column-->
                <div class="right-col w-3/12 px-2 py-10"></div>
            </div>

            <div class="flex flex-row justify-center w-full">                
                <!--right column-->
                <div class="right-col w-3/12 px-2 py-10"></div>
                <!--line column-->
                <div class="w-1/5 flex justify-center">
                    <div class="relative flex justify-center items-end h-1/2 w-1 bg-blue-900">
                        <div class="absolute flex flex-col justify-center h-16 w-16 rounded-full border-2 border-blue-900 leading-none text-center z-10 bg-white font-thin">
                            <div class=" text-blue-900">06</div>
                        </div>
                    </div>
                </div>
                <!-- left col -->
                <div class="left-col w-3/12 py-8">
                    <div class="flex justify-center w-full px-4 py-5">
                        <div class="text-gray-600 mb-2 ">
                            <div class="font-bold flex justify-center mb-3">
                                <img src="images/31.png" alt="" class=" w-12 h-12">
                            </div>
                            <div class="flex flex-row text-center">
                                Accélération de la croissance
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="grid grid-cols-12 w-full mt-10 bg-blue-900 relative" style="height: 500px;">
    <img src="AP/121.png" alt="" class="absolute left-40 top-32 w-96 shadow-2xl animate-left">
    <div class="bg-white absolute left-1/3 ml-16 top-20 shadow-2xl w-2/5 animate-right">
        <h1 class="text-4xl font-meduim text-blue-800 px-8 mt-4 mb-4">Notre engagement</h1>
        <div class="grid grid-cols-12 justify-center items-center w-full px-4 py-4">
            <h1 class="col-span-10 pl-5 font-semibold mb-4">Un équipe engagée pour le développement.</h1>
            <p class="col-span-10 text-lg font-light pl-5 mb-2">
                Chez BLUE STRATEGY, nous sommes bien plus
                qu'un simple cabinet. Nous sommes un
                équipe engagée, déterminée à contribuer au
                développement du Maroc et de l'Afrique de
                demain.
            </p>
            <p class="col-span-10 text-lg font-light pl-5">          
                Notre mission fondamentale consiste à élever
                nos partenaires vers l'excellence, afin qu'ils
                deviennent des acteurs de référence dans la
                construction d'un avenir meilleur.
            </p>
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