<footer class="p-2 pl-4 lg:pl-0 bg-gray-50 lg:p-6 dark:bg-gray-800" id="footer">
    <div class="mx-auto max-w-screen-xl">
        <div class="flex flex-col md:flex-row md:justify-between">
            <!-- Logo Section -->
            <div class="mb-6 md:mb-0 flex items-center">
                <a href="/" class="flex items-center">
                    <img src="AP/logo.png" class="mr-3 h-10 sm:h-12" alt="Logo" />
                    <div class="flex flex-col items-start">
                        <span id="logo" class="text-xl font-bold text-blue-900 dark:text-white">BLUE STRATEGY</span>
                    </div>
                </a>
            </div>
            
            <!-- Footer Links -->
            <div class="grid grid-cols-12 gap-0 lg:gap-6 lg:grid-cols-3 ">
                <div class=" col-span-1 hidden md:block"></div>
                <!-- About Us -->
                <div class=" col-span-5 lg:col-span-1 ">
                    <h2 class="mb-2 text-xs lg:text-base font-semibold text-gray-900 uppercase dark:text-white">A PROPOS DE NOUS</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li><a href="{{route('propos')}}" class="hover:underline text-xs lg:text-sm">Qui sommes-nous</a></li>
                        <li><a href="{{route('equipe')}}" class="hover:underline text-xs lg:text-sm">Notre équipe</a></li>
                        <li><a href="{{route('vision')}}" class="hover:underline text-xs lg:text-sm">Nos secteurs d'activités</a></li>
                        <li><a href="{{ url('/') }}#founder" class="hover:underline text-xs lg:text-sm">Mot du CEO et fondateur</a></li>
                    </ul>
                </div>
                
                <!-- Areas of Expertise -->
                <div class=" col-span-7 lg:col-span-1 ">
                    <h2 class="mb-2 text-xs lg:text-base font-semibold text-gray-900 uppercase dark:text-white">NOS DOMAINES D'EXPERTISE</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li><a href="{{ url('/PMO') }}#1" class="hover:underline text-xs lg:text-sm">PMO - Project Management Office</a></li>
                        <li><a href="{{ url('/TPE') }}#2" class="hover:underline text-xs lg:text-sm">Services aux TPE/PME</a></li>
                        <li><a href="{{ url('/DIGITAL') }}#3" class="hover:underline text-xs lg:text-sm">Services Digitaux</a></li>
                        <li><a href="{{ url('/RH') }}#4" class="hover:underline text-xs lg:text-sm">Services RH & Carrière</a></li>
                        <li><a href="{{ url('/FORMATION') }}#5" class="hover:underline text-xs lg:text-sm">Formation Professionnelle</a></li>
                        <li><a href="{{ url('/DESS') }}#5" class="hover:underline text-xs lg:text-sm">Entrepreneuriat et Projets ESS</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Divider -->
        <hr class="my-6 border-gray-200 dark:border-gray-700" />

        <!-- Footer Bottom -->
        <div class="flex flex-col lg:flex-row justify-center items-center lg:items-center lg:justify-between">
            <span class="text-sm text-gray-500 dark:text-gray-400">
                ©2024 <a href="#" class="hover:underline">Votre site Web</a>. Tous droits réservés. 
            </span>
            
            <!-- Social Media Links -->
            <div class="flex mt-4 space-x-6 sm:mt-0">
                <a href="https://www.facebook.com/profile.php?id=61552391026429&mibextid=ZbWKwL" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/cabinet.blue.strategy?igsh=ZHk2MWQxajI1YnR0" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/77000058/admin/dashboard/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                        <path fill="#6b7280" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4M7.65 13.979H5.706V7.723H7.65zm-.984-7.024c-.614 0-1.011-.435-1.011-.973c0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973m8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355c-.537 0-.856.371-.997.728c-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01c1.279 0 2.238.857 2.238 2.699z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
