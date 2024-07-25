<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

.inset-l-full {
    left: 100%;
}

.HID{
    display: none;
}

</style>

<header class=" bg-white fixed w-full z-50 border-b">
    <nav class=" border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <img src="AP/logo.png" class="mr-1 h-10 sm:h-[50%]" alt="Logo" />
                <div class="w-full flex flex-col items-start">
                    <span id="logo" class="self-text-2xl font-bold whitespace-nowrap text-blue-900 w-full">BLUE
                        STRATEGY</span>

                </div>
            </a>
            {{-- lang --}}
            <div class="flex items-center lg:order-2">
                <div class="">
                    <button type="button" data-dropdown-toggle="language-dropdown-menu"
                        class="tooltip cursor-not-allowed inline-flex items-center font-medium justify-center px-5 py-2.5 text-sm text-gray-500 rounded-lg hover:bg-gray-200 bg-gray-100 relative">
                        <svg class="w-5 h-5 rounded-full me-3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                            <g fill-rule="evenodd" stroke-width="1">
                                <path fill="#fff" d="M0 0h512v512H0z"/>
                                <path fill="#000091" d="M0 0h170.7v512H0z"/>
                                <path fill="#e1000f" d="M341.3 0H512v512H341.3z"/>
                            </g>
                        </svg>
                        Frensh
                    </button>
                    <div id="progress" class="  absolute flex justify-center items-center gap-4 rounded-md py-5 px-4 h-8 bg-blue-800 text-white mt-4 opacity-30 font-medium" style=" display:none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24"><path fill="#ffffff" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="#ffffff" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>    
                        In progress
                    </div>
                </div>

                {{-- <div class="cursor-not-allowed z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                    id="language-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">
                        <li>
                            <div
                                class="cursor-not-allowed block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                                        xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us"
                                        viewBox="0 0 512 512">
                                        <g fill-rule="evenodd">
                                            <g stroke-width="1pt">
                                                <path fill="#bd3d44"
                                                    d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                    transform="scale(3.9385)" />
                                                <path fill="#fff"
                                                    d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                    transform="scale(3.9385)" />
                                            </g>
                                            <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                                transform="scale(3.9385)" />
                                        </g>
                                    </svg>
                                    English (US)
                                </div>
                            </div>
                        </li>
                        <li>
                            <div
                                class="cursor-not-allowed block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg" width="1.34em" height="1em" viewBox="0 0 32 24"><g fill="none" fill-rule="evenodd" clip-rule="evenodd"><path fill="#c51918" d="M0 0h32v22a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z"/><path fill="#e31d1c" d="M0 0h32v24H0z"/><path fill="#579d20" d="M22.482 19.626L16.166 2.701h-.274L9.795 19.626l6.332-3.805zM15.467 8.222l.677-2.638l.702 2.714l2.019 5.656l1.185 2.739l-2.559-1.803l-1.366-.818l-1.344.808l-2.5 1.813l1.156-2.795z"/><path fill="#579d20" d="m12.663 13.473l3.496 2.324l3.262-2.324l6.195-5.237H6.386zm.072-1.999l-2.377-1.455H21.58l-2.041 1.293l-3.397 2.577z"/></g></svg>
                                    Arab
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
             
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button> --}}
                
                <a href="{{ url('/') }}#contact" class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ml-4">Contactez nous</a>
            </div>

            {{-- navbar  --}}
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li class="h-16 flex items-center justify-center px-4">
                        <a href="{{route('home')}}" class="block py-2 pr-4 pl-3 text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white" aria-current="page">ACCUEIL</a>
                    </li>
                    
                    <li class=" relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <div class=" flex items-center gap-2 hover:text-blue-600 h-16">
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" @click.prevent="showChildren=!showChildren">À PROPOS DE NOUS</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1"
                                viewBox="0 0 24 24">
                                <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                            </svg>
                        </div>
                        <nav  class=" bg-white text-sm absolute top-auto left-0 w-60 z-30 mt-2 border-2 border-200 rounded-lg" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                            <a href="{{route('propos')}}" class=" flex items-center justify-between w-full p-2 hover:bg-blue-200">   
                                <p>QUI SOMMES NOUS ?</p>
                            </a>
                            <a class=" flex items-center justify-between w-full p-2 hover:bg-blue-200">   
                                <p>NOTRE EQUIPE</p>
                            </a>
                            <a href="{{route('vision')}}" class=" flex items-center justify-between w-full p-2 hover:bg-blue-100">   
                               <p>NOS SECTEURS D'ACTIVITES</p>
                            </a>
                            <a  href="{{ url('/') }}#founder" class=" flex items-center justify-between w-full p-2 hover:bg-blue-100">   
                               <p>MOT DU CEO & FOUNDER</p>
                            </a>
                        </nav>
                    </li>
                    
                    
                    <li x-data="{showChildren:false}" @click.away="showChildren=false">
                        <div class=" flex items-center gap-2 hover:text-blue-600 h-16">
                            <a href="#" class="block z-50 py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100  hover:bg-white lg:hover:bg-transparent lg:border-0 hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" @click.prevent="showChildren=!showChildren">NOS DOMAINES D'EXPERTISE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1"
                                viewBox="0 0 24 24">
                                <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                            </svg>
                        </div>
                        <nav  class="bg-white text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-2 p-10" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                           <div class=" w-full flex gap-4 border border-gray-300 mb-8">
                            <div class=" bg-gradient-to-r from-blue-900 to-blue-700 w-2/5">
                                {{-- PMO --}}
                                <li id="C1" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px]">
                                        <span>PMO - PROJECT MANAGEMENT OFFICE</span>
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                    
                                </li>
                                {{-- TME/PME --}}
                                <li id="C2" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class=" flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-full">
                                        <span>SERVICES AUX TPE/PME</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                                {{-- SERVICES DIGITAUX  --}}
                                <li id="C3" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-full">
                                        <span>SERVICES DIGITAUX</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                                {{-- RH  --}}
                                <li id="C4" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-full">
                                        <span>SERVICES RH & CARRIERE</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                                {{-- FORMATION PRO  --}}
                                <li id="C5" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-full">
                                        <span>FORMATION PROFESSIONNELLE</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                                {{-- PROJECT D'ESS  --}}
                                <li id="C6" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-full">
                                        <span>ENTREUPRENARIAT ET PROJETS ESS</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                            </div>
                            <div class=" w-2/5 pt-6">

                                <div id="S1" class=" flex-col gap-2 p-2 m-2">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">PROJECT MANAGEMENT OFFICE</h1>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/PMO') }}#about">About B.U</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/PMO') }}#service">Nos services PMO</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/PMO') }}#type">Nos services outsourcing PMO</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/PMO') }}#outsoursing">Nos types de projets</a>
                                    </div>
                                </div>

                                <div id="S2" class=" flex-col  gap-2 p-2 m-2" style=" display:none;">
                                    <h1 class=" col-span-12 select-none text-2xl mb-4 font-bold text-gray-900">SERVICES AUX TPE/PME</h1>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a  href="{{ url('/TPE') }}#about">About B.U</a>
                                    </div>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="">Services de conseil et stratégie</a>
                                    </div>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="">Services de création et reprise d'entreprise</a>
                                    </div>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="">Services de management et organisation</a>
                                    </div>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="">Services de design et expérience client</a>
                                    </div>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="">Services de développement commercial</a>
                                    </div>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="">Services de marketing et communication</a>
                                    </div>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="">Services de finance et controle gestion</a>
                                    </div>
                                    <div class="  cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="">Services de QHSE</a>
                                    </div>
                                </div>

                                <div id="S3" class=" hidden flex-col gap-2 p-2 m-2">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">SERVICES DIGITAUX</h1>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href=" {{ url('/DIGITAL') }}#about">About B.U</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/DIGITAL') }}#marketing">Services de marketing digital</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/DIGITAL') }}#web">Services de développement WEB</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/DIGITAL') }}#UX">Services de design UX/UI</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/DIGITAL') }}#Intégration">Services d'intégration ERP/CRM</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/DIGITAL') }}#AMOA">Services AMOA IT </a>
                                    </div>
                                </div>

                                <div id="S4" class=" hidden flex-col gap-2 p-2 m-2">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">SERVICES RH & CARRIERE</h1>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{ url('/RH') }}" >About B.U</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="" >Services de recherche de potentiel</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="" >Services de développement des talents </a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="" >Services d'organisation de l'univers RH</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="" >Services de bien-être au travail</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="" >Services de coaching professionnel</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="" >Services d'animation des équipes </a>
                                    </div>
                                </div>

                                <div id="S5" class=" hidden flex-col gap-2 p-2 m-2">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">FORMATION PROFESSIONNELLE</h1>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{url('/FORMATION')}}#about">About B.U</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{url('/FORMATION')}}#equipe">Nos solutions de formation</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{url('/FORMATION')}}#Solution">Nos services d'ingenierie de formation</a>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <a href="{{url('/FORMATION')}}#Ingenierie">Nos domaines de formation</a>
                                    </div>
                                </div>

                                <div id="S6" class=" hidden flex-col gap-2 p-2 m-2 ">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">ENTREUPRENARIAT ET PROJETS ESS</h1>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <span>About</span>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <span>Notre Equipe</span>
                                    </div>
                                    <div class=" cursor-pointer flex gap-1 items-center mb-2 text-lg text-gray-600 font-normal hover:text-blue-700">
                                        <svg class=" rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="#4b5563" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>                                        
                                        <span>Nos Service</span>
                                    </div>
                                </div>

                                
                            </div>
                           </div>
                        </nav>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    
</header>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#C1").click(function (e) { 
            e.preventDefault();
            $("#S1").show();
            $("#S2").hide();
            $("#S3").hide();
            $("#S4").hide();
            $("#S5").hide();
            $("#S6").hide();
        });

        $("#C2").click(function (e) { 
            e.preventDefault();
            $("#S1").hide();
            $("#S2").show();
            $("#S3").hide();
            $("#S4").hide();
            $("#S5").hide();
            $("#S6").hide();
        });

        $("#C3").click(function (e) { 
            e.preventDefault();
            $("#S1").hide();
            $("#S2").hide();
            $("#S3").show();
            $("#S4").hide();
            $("#S5").hide();
            $("#S6").hide();
        });

        $("#C4").click(function (e) { 
            e.preventDefault();
            $("#S1").hide();
            $("#S2").hide();
            $("#S3").hide();
            $("#S4").show();
            $("#S5").hide();
            $("#S6").hide();
        });

        $("#C5").click(function (e) { 
            e.preventDefault();
            $("#S1").hide();
            $("#S2").hide();
            $("#S3").hide();
            $("#S4").hide();
            $("#S5").show();
            $("#S6").hide();
        });

        $("#C6").click(function (e) { 
            e.preventDefault();
            $("#S1").hide();
            $("#S2").hide();
            $("#S3").hide();
            $("#S4").hide();
            $("#S5").hide();
            $("#S6").show();
        });


    });
    
</script>

<script>
    $(document).ready(function(){
        $(".P").keypress(function(event){
            if(event.which == 112 || event.which == 80){ // 112 is the ASCII code for 'p' and 80 is for 'P'
                $('.DIV').toggleClass('HID');
            }
        });
    });
</script>


<script>
    $(document).ready(function(){
        $(".tooltip").hover(function () {
            $("#progress").show();                
            }, function () {
                $("#progress").hide();
            }
        );
    });
</script>

