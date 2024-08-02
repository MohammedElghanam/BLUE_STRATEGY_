<style>
    .slide-up {
        animation: slide-up 1s ease-out forwards;
    }

    @keyframes slide-up {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes zoomIn {
        0% {
            opacity: 0;
            transform: scale(0.5); /* Start smaller */
        }
        100% {
            opacity: 1;
            transform: scale(1.5); /* End at normal size */
        }
    }

</style>
<section class="bg-gray-50">
    <div id="FLOAT5" class=" hidden md:block"></div>
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="col-span-12 h-20 mb-8 lg:mb-2">
            <div id="content" class="flex flex-col justify-center items-center">
                <h1 class="font-medium lg:text-5xl text-2xl text-gray-700 z-30 mb-2">Pourquoi nous choisir?</h1>
                <p class="lg:text-2xl text-lg font-normal text-gray-700 z-30">NOUS SOMMES CENTRÉS SUR</p>
            </div> 
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-5 justify-center items-center col-span-12 px-8 lg:px-20 lg:mt-10">
            <div class="icon col-span-1 flex flex-col justify-center items-center">
                <img src="AP/profile.png" alt="" class="w-12 h-12 mb-2">
                <h3 class="font-medium text-center text-gray-600"> UTILISATEUR</h3>
            </div>
            <div class="icon col-span-1 flex flex-col justify-center items-center">
                <img src="AP/business.png" alt="" class="w-12 h-12 mb-2">
                <h3 class="font-medium text-center text-gray-600">CRÉATIVITÉ</h3>
            </div>
            <div class="icon col-span-1 flex flex-col justify-center items-center">
                <img src="AP/growth.png" alt="" class="w-12 h-12 mb-2">
                <h3 class="font-medium text-center text-gray-600">CROISSANCE</h3>
            </div>
            <div class="icon col-span-1 flex flex-col justify-center items-center">
                <img src="AP/scrum.png" alt="" class="w-12 h-12 mb-2">
                <h3 class="font-medium text-center text-gray-600">AGILITÉ</h3>
            </div>
            <div class="icon col-span-1 flex flex-col justify-center items-center">
                <img src="AP/connection.png" alt="" class="w-12 h-12 mb-2">
                <h3 class="font-medium text-center text-gray-600">DIGITAL</h3>
            </div>
            <div class="icon col-span-1 flex flex-col justify-center items-center">
                <img src="AP/profit.png" alt="" class="w-12 h-12 mb-2">
                <h3 class="font-medium text-center text-gray-600">PROFIT</h3>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener("scroll", function () {
    const iconElements = document.querySelectorAll('.icon');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-up');
            }
        });
    });

    iconElements.forEach(icon => {
        observer.observe(icon);
    });
    });

</script>

<script>
    document.addEventListener("scroll", function() {
        const contentElement = document.getElementById('content');

        function animateOnScroll(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    contentElement.style.animation = "zoomIn 2s ease forwards"; 
                    observer.unobserve(entry.target); 
                }
            });
        }

        const observer = new IntersectionObserver(animateOnScroll, { threshold: 0.5 });

        observer.observe(contentElement);
    });

</script>
