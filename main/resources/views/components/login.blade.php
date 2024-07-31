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
        </div>

        <button id="OK1"
            class=" bg-red-700 col-span-12 h-10 rounded-lg text-white text-xl hover:bg-red-600">Ok</button>
    </div>
</div>
@endif

<section class="bg-gray-50 dark:bg-gray-900 pt-16">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-10 h-10 mr-2" src="AP/logo.png" alt="logo">
            Blue Strategy    
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Connectez-vous à votre compte
                </h1>
                <form action="{{route('login_callback')}}" method="POST" class="space-y-4 md:space-y-6">
                    @csrf
                    <div>
                        {{-- <input name="name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required=""> --}}
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre e-mail</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="entre email" required="">
                        @error('email')
                            <p class=" text-red-500">{{ $message }}*</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        @error('password')
                            <p class=" text-red-500">{{ $message }}*</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                </form>
            </div>
        </div>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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