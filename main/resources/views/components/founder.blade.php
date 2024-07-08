<style>
    .BG {
        /* background-color: #9FD3C7; */
        background: linear-gradient(to bottom, #ffffff, #fefefe);
        opacity: 0.1;
        border-radius: 45% 55% 47% 53% / 39% 43% 57% 61% ;
        animation: spinx 9s linear infinite;;
    }

    .blur-effect {
        background-color: rgb(255, 255, 255, 0.1);
        border: 1px solid rgb(255, 255, 255, 0.3);
        backdrop-filter: blur(20px); 
        -webkit-backdrop-filter: blur(20px);
    }

    @keyframes spinx {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes zoomIn {
        0% {
            opacity: 0;
            transform: scale(0.5); /* Start smaller */
        }
        100% {
            opacity: 1;
            transform: scale(1); /* End at normal size */
        }
    }

    .text-animate {
        opacity: 0;
        transform: translateX(-50%);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .text-animate.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .SCALE:hover {
        transform: scale(1.1);
    }

</style>

<section  class="COUNT grid grid-cols-12 mb-12 my-10 relative bg-blue-900 select-none" style="height: 90vh;">
    <div id="founder" class=" hidden"></div>
    <div class="h-full w-full flex absolute">
        <div class="w-1/2 h-full flex items-center justify-center py-32 pl-28">
            <div class="text-6xl font-semibold select-none text-animate">
                <h1 class="mb-2 text-white">Opportunities</h1>
                <h1 class="mb-2 text-white">don't happen, You</h1>
                <h1 class="mb-2 text-blue-500 text-7xl font-bold">create them.</h1>
            </div>

        </div>
        <div class="w-1/2 h-full flex items-center justify-start relative">

            <div id="conten1" class="w-80 h-80 rounded-full absolute right-20 z-30 flex justify-center items-center pt-5">
                {{-- <div class=" absolute bottom-40 -left-20 w-20 h-40 rounded-l-full border-l-8 border-white bg-red-400"></div> --}}
                <div class="BG absolute -top-0 right-0 rounded-b-md rotate-45" style="width: 330px; height:350px;"></div>
                <img class="rounded-full z-20" src="images/unsplash.png" alt="" style="width: 300px; height:300px;">
                <div class="w-28 h-28 rounded-full absolute top-0 -right-4 z-30 flex justify-center items-center rotate-90">
                    <img src="AP/4.svg" alt="" class="w-10 h-10 absolute left-3 bottom-10">
                </div>
                <div class="w-20 h-20 absolute top-10 left-0 flex flex-col justify-center items-center gap-5 z-40 ">
                    <a class=" SCALE -top-7 -right-2 absolute col-span-2 flex items-end justify-center" aria-label="Twitter link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                            <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m3.905 7.864c.004.082.005.164.005.244c0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 0 1-2.898-.85c.147.018.298.025.451.025c.886 0 1.701-.301 2.348-.809a1.895 1.895 0 0 1-1.766-1.312a1.9 1.9 0 0 0 .853-.033a1.892 1.892 0 0 1-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 0 1-.585-2.526a5.376 5.376 0 0 0 3.897 1.977a1.891 1.891 0 0 1 3.222-1.725a3.797 3.797 0 0 0 1.2-.459a1.9 1.9 0 0 1-.831 1.047a3.799 3.799 0 0 0 1.086-.299a3.834 3.834 0 0 1-.943.979"/>
                        </svg>
                    </a>
                    <a class=" SCALE bottom-14 left-6 absolute col-span-1 flex justify-end" aria-label="Facebook link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                            <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443z"/>
                        </svg>
                    </a>
                    <a class=" SCALE bottom-5 left-0 absolute col-span-1" aria-label="Linkedin link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                            <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4M7.65 13.979H5.706V7.723H7.65zm-.984-7.024c-.614 0-1.011-.435-1.011-.973c0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973m8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355c-.537 0-.856.371-.997.728c-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01c1.279 0 2.238.857 2.238 2.699z"/>
                        </svg>
                    </a>
                </div>
            </div>

            

            
        </div>
    </div>

    <div class="">
        <div class="w-28 h-28 bg-blue-600 absolute top-0 left-0 rounded-br-full"></div>
        <div class="w-72 h-72 bg-blue-600 absolute bottom-0 right-0 rounded-tl-full"></div>
    </div>
    
    <div class="">
        <img src="AP/3.svg" alt="" class="absolute left-28 top-24 w-20 h-20">
        
        <img src="AP/3.svg" alt="" class="w-24 h-24 absolute bottom-6 right-20">
    </div>
</section>


<script>
    document.addEventListener("scroll", function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    });

    document.querySelectorAll(".text-animate").forEach((element) => {
        observer.observe(element);
    });
});

</script>

<script>
    document.addEventListener("scroll", function() {
        const contentElement = document.getElementById('content1');

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