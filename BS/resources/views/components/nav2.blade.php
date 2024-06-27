<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

.inset-l-full {
    left: 100%;
}
</style>

<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get started</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                    </li>
                    
                    <li x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" @click.prevent="showChildren=!showChildren">Services</a>
                        
                        <nav  class="bg-gradient-to-r from-blue-500 to-blue-900 shadow-md text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-4" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                            <ul class="flex justify-center items-center">
                                {{-- PMO --}}
                                <li class="relative parent ">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2 xl:text-[15px]">
                                        <span>PMO</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                                            <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                                        </svg>
                                    </a>
                                    <ul
                                        class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web development
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Machine Learning
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- TME/PME --}}
                                <li class="relative parent">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2 xl:text-[15px] w-44">
                                        <span>Service TPM/PME</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                                            <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                                        </svg>
                                    </a>
                                    <ul
                                        class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web development
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Machine Learning
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- SERVICES DIGITAUX  --}}
                                <li class="relative parent">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2 xl:text-[15px] w-44">
                                        <span>Service Digitaux</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                                            <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                                        </svg>
                                    </a>
                                    <ul
                                        class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web development
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Machine Learning
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- RH  --}}
                                <li class="relative parent">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2 xl:text-[15px] w-40">
                                        <span>Carriere RH</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                                            <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                                        </svg>
                                    </a>
                                    <ul
                                        class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web development
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Machine Learning
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- FORMATION PRO  --}}
                                <li class="relative parent">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2 xl:text-[15px] w-60">
                                        <span>Formation Professionnelle</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                                            <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                                        </svg>
                                    </a>
                                    <ul
                                        class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web development
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Machine Learning
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- PROJECT D'ESS  --}}
                                <li class="relative parent">
                                    <a href="#"
                                        class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2 xl:text-[15px] w-64">
                                        <span>Entreprenariat Et Project D’ess</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                                            <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                                        </svg>
                                    </a>
                                    <ul
                                        class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web development
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Web Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                                Machine Learning
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </li>
                    
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Nav 2 -->
    
</header>