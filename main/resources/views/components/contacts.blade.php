<!-- pop up validation true -->
@if(session('success'))
<div id="validation" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 pt-14 z-50">
    <div
        class="container grid grid-cols-12 items-end relative mx-auto mt-8 p-4 bg-gray-100 shadow-lg max-w-md w-80 h-80 rounded-md">
        <div class=" w-28 h-28 bg-green-500 absolute left-24 -top-11 rounded-full flex justify-center items-center">
            <svg class=" w-20 h-20 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="#ffffff"
                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
        </svg>
        </div>

            <div id="popup-form" class="popup col-span-12 grid justify-center items-end">
            <h1 class="text-lg font-bold mb-4 text-center"> {{ session('success') }}</h1>
            <p class=" text-center">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>

            <button id="OK"
            class=" bg-green-500 col-span-12 h-10 rounded-lg text-white text-xl hover:bg-green-600">Ok</button>
    </div>
</div>
@endif

<!-- pop up validation false -->
@if(session('error'))
<div id="validation1" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 pt-14 z-50">
    <div
        class="container grid grid-cols-12 items-end relative mx-auto mt-8 p-4 bg-gray-100 shadow-lg max-w-md w-80 h-80 rounded-md">
        <div class=" w-28 h-28 bg-red-700 absolute left-24 -top-11 rounded-full flex justify-center items-center">
            <svg class=" w-20 h-20 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff"
                    d="M459.1 52.4L442.6 6.5C440.7 2.6 436.5 0 432.1 0s-8.5 2.6-10.4 6.5L405.2 52.4l-46 16.8c-4.3 1.6-7.3 5.9-7.2 10.4c0 4.5 3 8.7 7.2 10.2l45.7 16.8 16.8 45.8c1.5 4.4 5.8 7.5 10.4 7.5s8.9-3.1 10.4-7.5l16.5-45.8 45.7-16.8c4.2-1.5 7.2-5.7 7.2-10.2c0-4.6-3-8.9-7.2-10.4L459.1 52.4zm-132.4 53c-12.5-12.5-32.8-12.5-45.3 0l-2.9 2.9C256.5 100.3 232.7 96 208 96C93.1 96 0 189.1 0 304S93.1 512 208 512s208-93.1 208-208c0-24.7-4.3-48.5-12.2-70.5l2.9-2.9c12.5-12.5 12.5-32.8 0-45.3l-80-80zM200 192c-57.4 0-104 46.6-104 104v8c0 8.8-7.2 16-16 16s-16-7.2-16-16v-8c0-75.1 60.9-136 136-136h8c8.8 0 16 7.2 16 16s-7.2 16-16 16h-8z" />
            </svg>
        </div>

        <div id="popup-form" class="popup col-span-12 grid justify-center items-end">
            <h1 class="text-lg font-bold mb-4 text-center"> {{ session('error') }}</h1>
            <p class=" text-center">Lorem ipsum, or lipsum as it is sometimes known</p>
        </div>

        <button id="OK1"
            class=" bg-red-700 col-span-12 h-10 rounded-lg text-white text-xl hover:bg-red-600">Ok</button>
    </div>
</div>
@endif

{{-- section 4 --}}
<form action="{{route('contact_callback')}}" method="post" id="contact">
    @csrf
    <section class="py-24 bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 grid-cols-1">
                <div class="lg:mb-0 mb-10">
                    <div class="group w-full h-full">
                        <div class="relative h-full">
                            <img src="https://pagedone.io/asset/uploads/1696488602.png" alt="ContactUs tailwind section"
                                class="w-full h-full lg:rounded-l-2xl rounded-l-2xl bg-blend-multiply bg-indigo-700" />
                            <h1 class="font-manrope text-white text-4xl font-bold leading-10 absolute top-11 left-11">
                                Contactez-nous
                            </h1>
                            <div class="absolute bottom-0 w-full lg:p-11 p-5">
                                <div class="bg-blue-800 rounded-lg p-6 block text-white">
                                    <a href="javascript:;" class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="64" stroke-dashoffset="64" d="M8 3C8.5 3 10.5 7.5 10.5 8C10.5 9 9 10 8.5 11C8 12 9 13 10 14C10.3943 14.3943 12 16 13 15.5C14 15 15 13.5 16 13.5C16.5 13.5 21 15.5 21 16C21 18 19.5 19.5 18 20C16.5 20.5 15.5 20.5 13.5 20C11.5 19.5 10 19 7.5 16.5C5 14 4.5 12.5 4 10.5C3.5 8.5 3.5 7.5 4 6C4.5 4.5 6 3 8 3Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.9s" values="64;0"/><animateTransform attributeName="transform" begin="0.9s;lineMdPhoneCallLoop0.begin+3.9s" dur="0.75s" type="rotate" values="0 12 12;15 12 12;0 12 12;-12 12 12;0 12 12;12 12 12;0 12 12;-15 12 12;0 12 12"/></path><path stroke-dasharray="4" stroke-dashoffset="4" d="M14 7.04404C14.6608 7.34734 15.2571 7.76718 15.7624 8.27723M16.956 10C16.6606 9.35636 16.2546 8.77401 15.7624 8.27723" opacity="0"><set id="lineMdPhoneCallLoop0" attributeName="opacity" begin="1.05s;lineMdPhoneCallLoop0.begin+4.05s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.05s;lineMdPhoneCallLoop0.begin+4.05s" dur="0.3s" values="4;8"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.95s;lineMdPhoneCallLoop0.begin+4.95s" dur="0.45s" values="0;4"/><set attributeName="opacity" begin="2.4s;lineMdPhoneCallLoop0.begin+5.4s" to="0"/></path><path stroke-dasharray="10" stroke-dashoffset="10" d="M20.748 9C20.3874 7.59926 19.6571 6.347 18.6672 5.3535M15 3.25203C16.4105 3.61507 17.6704 4.3531 18.6672 5.3535" opacity="0"><set attributeName="opacity" begin="1.5s;lineMdPhoneCallLoop0.begin+4.5s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.5s;lineMdPhoneCallLoop0.begin+4.5s" dur="0.3s" values="10;20"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="2.25s;lineMdPhoneCallLoop0.begin+5.25s" dur="0.45s" values="0;10"/><set attributeName="opacity" begin="2.7s;lineMdPhoneCallLoop0.begin+5.7s" to="0"/></path></g></svg>
                                        <h5 class=" text-base font-normal leading-6 ml-5">+212 5 24 62 34 24</h5>
                                    </a>
                                    <a href="https://veilmail.io/irish-geoff" class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"><rect width="18" height="14" x="3" y="5" stroke-dasharray="64" stroke-dashoffset="64" rx="1"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.9s" values="64;0"/></rect><path stroke-dasharray="24" stroke-dashoffset="24" d="M3 6.5L12 12L21 6.5"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.9s" dur="0.6s" values="24;0"/></path></g></svg>
                                        <h5 class=" text-base font-normal leading-6 ml-5">contact@bluestrategy.ma</h5>
                                    </a>
                                    <a href="javascript:;" class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7"/>
                                        </svg>
                                        <div class="  ml-5">
                                            <h5 class=" text-xs font-medium leading-6">Bureau N° 14, 2ème étage, imm OMAR, rue idriss 1, ville nouvelle - Safi  </h5>
                                            <p class=" text-xs">(au-dessus du showroom renault et dacia AUTO ABDA )</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-5 lg:p-11 lg:rounded-r-2xl rounded-r-2xl">
                    <h2 class="text-blue-800 font-manrope text-3xl font-semibold leading-10 mb-11">Envoyez nous un message </h2>
                    <div class=" mb-10">
                        <input name="name" type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400  shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4"
                        placeholder="Nom complet">
                        @error('name')
                            <p class=" text-red-500">{{$message}}*</p>
                        @enderror
                    </div>
                    <div class=" mb-10">
                        <input name="email" type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4"
                        placeholder="Email">
                        @error('email')
                            <p class=" text-red-500">{{$message}}*</p>
                        @enderror
                    </div>
                    <div class=" mb-10">
                        <input name="phone" type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4"
                        placeholder="Numéro de télephone">
                        @error('phone')
                            <p class=" text-red-500">{{$message}}*</p>
                        @enderror
                    </div>

                    <div class="mb-10">
                        <h4 class="text-gray-500 text-lg font-normal leading-7 mb-4">Vous êtes</h4>

                        <div class="flex">
                            <div>
                                <div class="flex items-center mr-11">
                                    <input id="personne" type="radio" name="method" value="personne"
                                        class="checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 mr-2">
                                    <label for="personne" class="flex items-center cursor-pointer text-gray-500 text-base font-normal leading-6">
                                        Une personne
                                    </label>
                                </div>
                                @error('method')
                                    <p class="text-red-500">{{$message}}*</p>
                                @enderror
                            </div>
                            <div>
                                <div class="flex items-center">
                                    <input id="organisation" type="radio" name="method" value="organisation"
                                        class="checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 mr-2">
                                    <label for="organisation" class="flex items-center cursor-pointer text-gray-500 text-base font-normal leading-6">
                                        Une organisation
                                    </label>
                                </div>
                                @error('method')
                                    <p class="text-red-500">{{$message}}*</p>
                                @enderror
                            </div>
                        </div>                        
                    </div>

                    <div class="mb-10">
                        <input name="content" type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 bg-transparent text-lg shadow-sm font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-3"
                        placeholder="Décrivez votre demande">
                        @error('content')
                            <p class=" text-red-500">{{$message}}*</p>
                        @enderror
                    </div>
                    <button
                        class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all duration-700 hover:bg-blue-600 bg-blue-800 shadow-sm">Envoyer</button>
                </div>
            </div>
    </section>
    
</form>


<script>
    $(document).ready(function () {
        $("#validation").click(function (event) {
            if (event.target === this) {
                $(this).hide();
            }
        });
        $("#OK").click(function (event) {
            $("#validation").hide();
        });

        $("#validation1").click(function (event) {
            if (event.target === this) {
                $(this).hide();
            }
        });
        $("#OK1").click(function (event) {
            $("#validation1").hide();
        });
    });
</script>