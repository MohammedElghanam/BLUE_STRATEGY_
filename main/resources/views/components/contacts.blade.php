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
                                Contact us</h1>
                            <div class="absolute bottom-0 w-full lg:p-11 p-5">
                                <div class="bg-blue-800 rounded-lg p-6 block text-white">
                                    <a href="javascript:;" class="flex items-center mb-6">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.3092 18.3098C22.0157 18.198 21.8689 18.1421 21.7145 18.1287C21.56 18.1154 21.4058 18.1453 21.0975 18.205L17.8126 18.8416C17.4392 18.9139 17.2525 18.9501 17.0616 18.9206C16.8707 18.891 16.7141 18.8058 16.4008 18.6353C13.8644 17.2551 12.1853 15.6617 11.1192 13.3695C10.9964 13.1055 10.935 12.9735 10.9133 12.8017C10.8917 12.6298 10.9218 12.4684 10.982 12.1456L11.6196 8.72559C11.6759 8.42342 11.7041 8.27233 11.6908 8.12115C11.6775 7.96998 11.6234 7.82612 11.5153 7.5384L10.6314 5.18758C10.37 4.49217 10.2392 4.14447 9.95437 3.94723C9.6695 3.75 9.29804 3.75 8.5551 3.75H5.85778C4.58478 3.75 3.58264 4.8018 3.77336 6.06012C4.24735 9.20085 5.64674 14.8966 9.73544 18.9853C14.0295 23.2794 20.2151 25.1426 23.6187 25.884C24.9335 26.1696 26.0993 25.1448 26.0993 23.7985V21.2824C26.0993 20.5428 26.0993 20.173 25.9034 19.8888C25.7076 19.6046 25.362 19.4729 24.6708 19.2096L22.3092 18.3098Z"
                                                stroke="#4F46E5" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <h5 class=" text-base font-normal leading-6 ml-5">470-601-1911</h5>
                                    </a>
                                    <a href="https://veilmail.io/irish-geoff" class="flex items-center mb-6">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.81501 8.75L10.1985 13.6191C12.8358 15.2015 14.1544 15.9927 15.6032 15.9582C17.0519 15.9237 18.3315 15.0707 20.8905 13.3647L27.185 8.75M12.5 25H17.5C22.214 25 24.5711 25 26.0355 23.5355C27.5 22.0711 27.5 19.714 27.5 15C27.5 10.286 27.5 7.92893 26.0355 6.46447C24.5711 5 22.214 5 17.5 5H12.5C7.78595 5 5.42893 5 3.96447 6.46447C2.5 7.92893 2.5 10.286 2.5 15C2.5 19.714 2.5 22.0711 3.96447 23.5355C5.42893 25 7.78595 25 12.5 25Z"
                                                stroke="#4F46E5" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <h5 class=" text-base font-normal leading-6 ml-5">
                                            https://veilmail.io/irish-geoff</h5>
                                    </a>
                                    <a href="javascript:;" class="flex items-center">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z"
                                                stroke="#4F46E5" stroke-width="2" />
                                            <path
                                                d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z"
                                                stroke="#4F46E5" stroke-width="2" />
                                        </svg>
                                        <h5 class=" text-base font-normal leading-6 ml-5">654 Sycamore Avenue,
                                            Meadowville, WA 76543</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-5 lg:p-11 lg:rounded-r-2xl rounded-r-2xl">
                    <h2 class="text-indigo-600 font-manrope text-4xl font-semibold leading-10 mb-11">Send Us A Message
                    </h2>
                    <div class=" mb-10">
                        <input name="name" type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400  shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4"
                        placeholder="Name">
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
                        placeholder="Phone">
                        @error('phone')
                            <p class=" text-red-500">{{$message}}*</p>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <h4 class="text-gray-500 text-lg font-normal leading-7 mb-4">Preferred method of communication
                        </h4>

                        <div class="flex">
                            <div>
                                <div class="flex items-center mr-11">
                                    <input id="radio-email" type="radio" name="method" value="email"
                                        class="checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 mr-2">
                                    <label for="radio-email" class="flex items-center cursor-pointer text-gray-500 text-base font-normal leading-6">
                                        Email
                                    </label>
                                </div>
                                @error('method')
                                    <p class="text-red-500">{{$message}}*</p>
                                @enderror
                            </div>
                            <div>
                                <div class="flex items-center">
                                    <input id="radio-phone" type="radio" name="method" value="phone"
                                        class="checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 mr-2">
                                    <label for="radio-phone" class="flex items-center cursor-pointer text-gray-500 text-base font-normal leading-6">
                                        Phone
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
                        placeholder="Message">
                        @error('content')
                            <p class=" text-red-500">{{$message}}*</p>
                        @enderror
                    </div>
                    <button
                        class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all duration-700 hover:bg-indigo-800 bg-indigo-600 shadow-sm">Send</button>
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