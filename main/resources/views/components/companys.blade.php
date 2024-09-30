<style>

.logo-container {
    animation: moveLogos 12s linear infinite; 
    display: flex;
}

@keyframes moveLogos {
    0% {
        transform: translateX(100%); 
    }
    100% {
        transform: translateX(-200%); 
    }
}


#FLOAT2 {
        z-index: 0;
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(to bottom, #001eff, #235cb3);
        opacity: 0.1;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular2 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT3 {
        z-index: 0;
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(to bottom, #001eff, #235cb3);
        opacity: 0.1;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular3 40s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }
    
    @keyframes moveCircular2 {
        0% {
            transform: translate(0%, 0%) rotate(0deg) translateX(200px) rotate(0deg);
        }

        100% {
            transform: translate(20%, 20%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }

    @keyframes moveCircular3 {
        0% {
            transform: translate(120%, 120%) rotate(0deg) translateX(300px) rotate(0deg);
        }

        100% {
            transform: translate(150%, 150%) rotate(360deg) translateX(300px) rotate(-360deg);
        }
    }
</style>
<!-- OUR CAMPANYS -->
<section class="bg-white dark:bg-gray-900">
    <div id="FLOAT2" class=" hidden md:block"></div>
    <div id="FLOAT3" class=" hidden md:block"></div>

    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4 overflow-hidden">
        <h2 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
            Nos références
        </h2>
        <div class="logo-container flex gap-8 text-gray-500 dark:text-gray-400">
            @foreach($images as $image)
                <img class="w-16 h-16 lg:w-40 lg:h-40" src="{{ asset($image->image) }}" alt="Image">
            @endforeach
        </div>
    </div>

    
</section>
