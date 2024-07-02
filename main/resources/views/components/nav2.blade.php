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

<header>
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
                <button type="button" data-dropdown-toggle="language-dropdown-menu"
                    class="inline-flex items-center  font-medium justify-center px-4 py-2 text-sm text-gray-500 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                        <path fill="#b22234" d="M0 0h7410v3900H0z" />
                        <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                            stroke-width="300" />
                        <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                        <g fill="#fff">
                            <g id="d">
                                <g id="c">
                                    <g id="e">
                                        <g id="b">
                                            <path id="a"
                                                d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                            <use xlink:href="#a" y="420" />
                                            <use xlink:href="#a" y="840" />
                                            <use xlink:href="#a" y="1260" />
                                        </g>
                                        <use xlink:href="#a" y="1680" />
                                    </g>
                                    <use xlink:href="#b" x="247" y="210" />
                                </g>
                                <use xlink:href="#c" x="494" />
                            </g>
                            <use xlink:href="#d" x="988" />
                            <use xlink:href="#c" x="1976" />
                            <use xlink:href="#e" x="2470" />
                        </g>
                    </svg>
                    English (US)
                </button>

                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                    id="language-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
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
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de"
                                        viewBox="0 0 512 512">
                                        <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                        <path d="M0 0h512v170.7H0z" />
                                        <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                                    </svg>
                                    Frensh
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                        viewBox="0 0 512 512">
                                        <defs>
                                            <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                        </defs>
                                        <path fill="#de2910" d="M0 0h512v512H0z" />
                                        <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                            xlink:href="#a" />
                                        <use width="30" height="20"
                                            transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                                        <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)"
                                            xlink:href="#a" />
                                        <use width="30" height="20"
                                            transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                                        <use width="30" height="20"
                                            transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
                                    </svg>
                                    Arab
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
             {{-- lang  --}}
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Contact Us</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li class="h-16 flex items-center justify-center px-4">
                        <a href="#footer" class="block py-2 pr-4 pl-3 text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white" aria-current="page">Acceuil</a>
                    </li>
                    {{-- <li class=" P bg-red-600 relative">
                        <div class=" flex items-center gap-2 hover:text-blue-600">
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Qui Somme Nous</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1"
                                    viewBox="0 0 24 24">
                                    <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                            </svg>
                        </div>
                        <div class=" DIV HI bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1">
                            <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                            <div class="bg-white rounded w-full relative z-10 py-1">
                                <ul class="list-reset">
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Calender</span> </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Chat</span> </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Email</span> </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Todo</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li> --}}

                    <li class=" relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <div class=" flex items-center gap-2 hover:text-blue-600 h-16">
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" @click.prevent="showChildren=!showChildren">Qui Somme Nous</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1"
                                viewBox="0 0 24 24">
                                <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                            </svg>
                        </div>
                        <nav  class=" bg-white text-sm absolute top-auto left-0 w-60 z-30 mt-2 border-2 border-200 rounded-lg" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                            <div class=" flex items-center justify-between w-full p-2 hover:bg-blue-200">   
                                <a  href="">A propos</a>
                                <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="black" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>
                            </div>
                            <div class=" flex items-center justify-between w-full p-2 hover:bg-blue-200">   
                                <a  href="">Notre equipe</a>
                                <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="black" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>
                            </div>
                            <div class=" flex items-center justify-between w-full p-2 hover:bg-blue-100">   
                               <a  href="">Nos secteur d'activitè</a>
                               <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="black" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>
                            </div>
                            <div class=" flex items-center justify-between w-full p-2 hover:bg-blue-100">   
                               <a  href="">Mot du fondatrice</a>
                               <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="black" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>
                            </div>
                        </nav>
                    </li>
                    
                    
                    <li x-data="{showChildren:false}" @click.away="showChildren=false">
                        <div class=" flex items-center gap-2 hover:text-blue-600 h-16">
                            <a href="#" class="block z-50 py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100  hover:bg-white lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" @click.prevent="showChildren=!showChildren">Nos Domaines D'expertise</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1"
                                viewBox="0 0 24 24">
                                <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                            </svg>
                        </div>
                        <nav  class="bg-white text-sm absolute top-auto left-0 min-w-full w-56 h-96 z-30 mt-2 p-10" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                           <div class=" w-full flex gap-4 border border-gray-300 mb-8">
                            <div class=" bg-gradient-to-r from-blue-900 to-blue-700 w-2/5">
                                {{-- PMO --}}
                                <li id="C1" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px]">
                                        <span>PROJECT MANAGEMENT OFFICE</span>
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                    
                                </li>
                                {{-- TME/PME --}}
                                <li id="C2" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-44">
                                        <span>Service TPM/PME</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                                {{-- SERVICES DIGITAUX  --}}
                                <li id="C3" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-44">
                                        <span>Service Digitaux</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                                {{-- RH  --}}
                                <li id="C4" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-40">
                                        <span>Carriere RH</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                                {{-- FORMATION PRO  --}}
                                <li id="C5" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-60">
                                        <span>Formation Professionnelle</span>
                                        
                                    </a>
                                    <svg class=" w-4 h-4 rotate-90" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="white" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/>
                                    </svg>
                                </li>
                                {{-- PROJECT D'ESS  --}}
                                <li id="C6" class=" px-6 flex items-center justify-between relative parent hover:bg-blue-800">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white space-x-2 xl:text-[15px] w-64">
                                        <span>Entreprenariat Et Project D’ess</span>
                                        
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
                                <div id="S2" class=" hidden flex-col gap-2 p-2 m-2">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">SERVICES TPE/PME</h1>
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
                                <div id="S3" class=" hidden flex-col gap-2 p-2 m-2">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">SERVICES DIGITAUX</h1>
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
                                <div id="S4" class=" hidden flex-col gap-2 p-2 m-2">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">CARRIERE RH</h1>
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
                                <div id="S5" class=" hidden flex-col gap-2 p-2 m-2">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">FORMATION PROFESSIONNELLE</h1>
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
                                <div id="S6" class=" hidden flex-col gap-2 p-2 m-2 ">
                                    <h1 class=" select-none text-2xl mb-4 font-bold text-gray-900">ENTREPRENARIAT ET PROJECT D'ESS</h1>
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

    <!-- Nav 2 -->
</header>


    
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

