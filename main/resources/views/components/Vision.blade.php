<style>
    .SCAL {
    position: relative;
    transition: transform 1s;
}

.SCAL:hover {
    transform: scale(1.1);
}

.SCAL:hover .overlay {
    opacity: 0; 
    transition: opacity 1s; 
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); 
    padding: 5px;
    text-align: center;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 1;
    transition: opacity 1s;
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

.H{
    height: 380px;
    position: absolute;
    top: 112px;
    left: 410px;
}
.WIDTH{
    width: fit-content;
}
</style>



<div class="bg-white pt-28">
    <div class="grid grid-cols-1 lg:grid-cols-12 px-4 lg:px-20 w-full bg-white">
        <div class="col-span-12 relative bg-yellow-300">
            <img src="AP/91.png" alt="fo bar" class="h-40 md:h-60 lg:h-80 w-full object-cover">
            <img src="AP/22.png" alt="" class="hidden md:block absolute left-10 md:left-20 lg:left-40 -bottom-12 md:-bottom-20 lg:-bottom-28 w-24 md:w-40 lg:w-52 h-24 md:h-36 lg:h-48">
            
        </div>
        <div class="hidden H md:block w-24 bg-blue-900 opacity-70"></div>
        <div class="col-span-12 lg:col-span-5"></div>
        <div class="col-span-12 lg:col-span-7 mt-4">
            <div class="p-2">
                <div class="WIDTH pb-2 border-b-4 border-blue-900 text-3xl md:text-4xl lg:text-5xl font-bold text-blue-900">Nos secteurs d'activite</div>
            </div>
        </div>
        <div class="col-span-12 mt-16">
            <p class="text-lg font-normal text-gray-900 mb-4 px-4 md:px-0">
                BLUE STRATEGY développe des compétences sectorielles pour mettre en place des solutions qui anticipent ou
                répondent aux attentes de différents clients.
                Notre cabinet intervient dans divers secteurs d'activité, aussi bien au sein d'entreprises que d'organisations de
                toutes tailles, que ce soit dans le secteur public ou privé.
            </p>
        </div>
    </div>
</div>


<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-8 p-4 lg:p-20 w-full bg-gray-50">
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Made in Morocco</div>
        <img class="rounded-xl w-full h-auto" src="VI/1.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Agriculture et agroalimentaire</div>
        <img class="rounded-xl w-full h-auto" src="VI/10.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Peche maritime</div>
        <img class="rounded-xl w-full h-auto" src="VI/22.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Artisanat</div>
        <img class="rounded-xl w-full h-auto" src="VI/12.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Industrie</div>
        <img class="rounded-xl w-full h-auto" src="VI/18.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Education</div>
        <img class="rounded-xl w-full h-auto" src="VI/126.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Digital, IT et médias</div>
        <img class="rounded-xl w-full h-auto" src="VI/5.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Santé et le bien-etre</div>
        <img class="rounded-xl w-full h-auto" src="VI/3.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Culture et art</div>
        <img class="rounded-xl w-full h-auto" src="VI/127.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Sport</div>
        <img class="rounded-xl w-full h-auto" src="VI/6.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Developpement durable</div>
        <img class="rounded-xl w-full h-auto" src="VI/128.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Environnement et energie</div>
        <img class="rounded-xl w-full h-auto" src="VI/8.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Textile et produits cosmétiques</div>
        <img class="rounded-xl w-full h-auto" src="VI/13.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Distribution et consommation</div>
        <img class="rounded-xl w-full h-auto" src="VI/14.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Hotellerie et restauration</div>
        <img class="rounded-xl w-full h-auto" src="VI/15.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Tourisme et divertissements</div>
        <img class="rounded-xl w-full h-auto" src="VI/17.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Evénementiel</div>
        <img class="rounded-xl w-full h-auto" src="VI/1.0.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Prestation et services</div>
        <img class="rounded-xl w-full h-auto" src="VI/23.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Transport et logistique</div>
        <img class="rounded-xl w-full h-auto" src="VI/19.png" alt="">
    </div>
    <div class="SCAL relative col-span-1">
        <div class="overlay rounded-xl text-lg md:text-xl font-medium">Immobilier et ameublement</div>
        <img class="rounded-xl w-full h-auto" src="VI/21.png" alt="">
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const headings = document.querySelectorAll(".TOP");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        headings.forEach(heading => {
            observer.observe(heading);
        });
    });
</script>
