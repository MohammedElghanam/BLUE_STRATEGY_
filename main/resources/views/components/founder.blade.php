<style>
    .BG {
        background-color: #9FD3C7;
    }

    .blur-effect {
        background-color: rgb(255, 255, 255, 0.1);
        border: 1px solid rgb(255, 255, 255, 0.3);
        backdrop-filter: blur(20px); 
        -webkit-backdrop-filter: blur(20px);
    }

</style>

<section class="COUNT grid grid-cols-12 mb-12 my-10 relative bg-blue-900 select-none" style="height: 90vh;">

    <div class="h-full w-full flex absolute">
        <div class="w-1/2 h-full flex items-center justify-center py-32 pl-28">
            <div class="text-6xl font-semibold select-none">
                <h1 class="mb-2 text-white">Opportunities</h1>
                <h1 class="mb-2 text-white">don't happen, You</h1>
                <h1 class="mb-2 text-blue-500 text-7xl font-bold">create them.</h1>
            </div>
        </div>
        <div class="w-1/2 h-full flex items-center justify-start relative">

            <div class="w-80 h-80 rounded-full absolute right-20 z-30 flex justify-center items-center pt-5">
                <div class="BG absolute top-6 -right-16 rounded-t-full rounded-b-md rotate-45" style="width: 330px; height:175px;"></div>
                <img class="rounded-full z-20" src="images/unsplash.png" alt="" style="width: 300px; height:300px;">
                <div class="w-28 h-28 bg-blue-500 rounded-full absolute left-10 -bottom-14 z-30 flex justify-center items-center">
                    <img src="AP/4.svg" alt="" class="w-10 h-10 absolute -top-4 -left-8">
                    <div class="w-24 h-24 bg-white rounded-full grid grid-cols-2 gap-2 opacity-45">
                        {{-- <a class="text-black col-span-2 flex items-end justify-center" aria-label="Twitter link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" viewBox="0 0 448 512">
                                <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/>
                            </svg>
                        </a>
                        <a class="text-black col-span-1 flex justify-end" aria-label="Facebook link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1rem" height="1rem" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path>
                            </svg>
                        </a>
                        <a class="text-black col-span-1" aria-label="Linkedin link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1rem" height="1rem" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"></path>
                            </svg>
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="w-40 h-12 rounded-md absolute bottom-10 -left-20 flex justify-center items-center gap-5 blur-effect">
                <a class="text-white col-span-2 flex items-end justify-center" aria-label="Twitter link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                        <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m3.905 7.864c.004.082.005.164.005.244c0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 0 1-2.898-.85c.147.018.298.025.451.025c.886 0 1.701-.301 2.348-.809a1.895 1.895 0 0 1-1.766-1.312a1.9 1.9 0 0 0 .853-.033a1.892 1.892 0 0 1-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 0 1-.585-2.526a5.376 5.376 0 0 0 3.897 1.977a1.891 1.891 0 0 1 3.222-1.725a3.797 3.797 0 0 0 1.2-.459a1.9 1.9 0 0 1-.831 1.047a3.799 3.799 0 0 0 1.086-.299a3.834 3.834 0 0 1-.943.979"/>
                    </svg>
                </a>
                <a class="text-white col-span-1 flex justify-end" aria-label="Facebook link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                        <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443z"/>
                    </svg>
                </a>
                <a class="text-black col-span-1" aria-label="Linkedin link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20">
                        <path fill="#ffffff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4M7.65 13.979H5.706V7.723H7.65zm-.984-7.024c-.614 0-1.011-.435-1.011-.973c0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973m8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355c-.537 0-.856.371-.997.728c-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01c1.279 0 2.238.857 2.238 2.699z"/>
                    </svg>
                </a>
            </div>
            
        </div>
    </div>

    <div class="">
        <div class="w-28 h-28 bg-blue-600 absolute top-0 left-0 rounded-br-full"></div>
        <div class="w-72 h-72 bg-blue-600 absolute bottom-0 right-0 rounded-tl-full"></div>
    </div>
    
    <div class="">
        <img src="AP/2.svg" alt="" class="w-14 h-14 absolute top-10 right-10">
        <img src="AP/3.svg" alt="" class="absolute left-28 top-24 w-20 h-20">
        
        <img src="AP/1.svg" alt="" class="w-20 h-20 absolute bottom-10 left-20">
        <img src="AP/3.svg" alt="" class="w-24 h-24 absolute bottom-6 right-20">
    </div>
</section>
