
<style>
    .current-day {
        background-color: #0066ff9c;
        color: white;
        font-weight: bold;
        border-radius: 50%;
        border: 2px solid rgb(255, 255, 255);
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .selected-day {
        background-color: rgba(102, 0, 255, 0.358);
        color: white;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .holiday {
        background-color: #35495e;
        color: white;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .booked-time {
        background-color: #FF00004D; /* Light red for booked times */
    }
</style>


{{-- <div class=" bg-white pt-28">
    <div class=" bg-blue-900">
        <div class=" grid grid-cols-12 px-20 w-full bg-white">
            <div class=" col-span-12 h-96 relative">
                <img src="AP/91.png" alt="fo bar" class=" h-96 w-full">
                <img id="1" src="AP/22.png" alt="" class=" absolute right-40 -bottom-40 w-68 h-64">
                <div class=" flex items-end justify-start w-1/2 absolute bottom-0 left-0">
                    <div class=" w-96 h-28 bg-white flex items-end justify-center">
                        <div class=" w-96 h-1 bg-blue-900"></div>
                    </div>
                    <div class=" h-16 w-40 bg-white"></div>
                </div>
            </div>
            <div id="2" class=" w-32 bg-blue-900 opacity-70 h-3/4 absolute top-[84px] right-1/3"></div>
            <div class="  col-span-7 mt-4">
                <h1 class=" text-3xl font-semibold text-gray-900 mb-5 w-3/4">Facilitez votre succès : Réservez votre RDV dès maintenant</h1>
                <p class=" text-xl font-light text-gray-900">
                    Réservez votre rendez-vous dès maintenant et 
                    bénéficiez de notre expertise personnalisée 
                    pour répondre à tous vos besoins professionnels.
                </p>
            </div>
        </div>
        <div id="3" class=" grid grid-cols-12 h-56 rounded-bl-full bg-white"></div>
</div> --}}

<div class="bg-white pt-28">
    <div class="bg-blue-900">
        <div class="grid grid-cols-12 px-4 md:px-20 w-full bg-white">
            <div class="col-span-12 h-96 relative">
                <img src="AP/91.png" alt="fo bar" class="h-96 w-full object-cover">
                <img id="1" src="AP/22.png" alt="" class="absolute right-10 md:right-40 bottom-10 md:-bottom-40 w-68 h-64 hidden md:block">
                <!-- Optional Additional Content (Uncomment if needed) -->
                <!-- <div class="flex items-end justify-start w-1/2 absolute bottom-0 left-0">
                    <div class="w-96 h-28 bg-white flex items-end justify-center">
                        <div class="w-96 h-1 bg-blue-900"></div>
                    </div>
                    <div class="h-16 w-40 bg-white"></div>
                </div> -->
            </div>
            <div id="2" class="w-32 bg-blue-900 opacity-70 h-3/4 absolute top-[84px] right-1/3 hidden md:block"></div>
            <div class="col-span-12 md:col-span-7 mt-4">
                <h1 class="text-3xl font-semibold text-gray-900 mb-5 w-full md:w-3/4">Facilitez votre succès : Réservez votre RDV dès maintenant</h1>
                <p class="text-xl font-light text-gray-900">
                    Réservez votre rendez-vous dès maintenant et 
                    bénéficiez de notre expertise personnalisée 
                    pour répondre à tous vos besoins professionnels.
                </p>
            </div>
        </div>
        <div id="3" class="grid grid-cols-12 h-56 rounded-bl-full bg-white hidden md:block"></div>
    </div>
</div>



<!-- pop up validation false -->
@if ($errors->has('date'))
<div id="form_booking2" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-50 flex items-center justify-center p-4 sm:p-0">
    <div class="relative bg-gray-100 shadow-lg rounded-md p-4 max-w-md w-full sm:w-80 sm:max-w-sm sm:h-80 grid justify-center items-end">
        <div class="absolute -top-11 left-1/2 transform -translate-x-1/2 w-28 h-28 bg-red-700 rounded-full flex justify-center items-center">
            <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff" d="M459.1 52.4L442.6 6.5C440.7 2.6 436.5 0 432.1 0s-8.5 2.6-10.4 6.5L405.2 52.4l-46 16.8c-4.3 1.6-7.3 5.9-7.2 10.4 0 4.5 3 8.7 7.2 10.2l45.7 16.8 16.8 45.8c1.5 4.4 5.8 7.5 10.4 7.5s8.9-3.1 10.4-7.5l16.5-45.8 45.7-16.8c4.2-1.5 7.2-5.7 7.2-10.2 0-4.6-3-8.9-7.2-10.4L459.1 52.4zm-132.4 53c-12.5-12.5-32.8-12.5-45.3 0l-2.9 2.9C256.5 100.3 232.7 96 208 96C93.1 96 0 189.1 0 304S93.1 512 208 512s208-93.1 208-208c0-24.7-4.3-48.5-12.2-70.5l2.9-2.9c12.5-12.5 12.5-32.8 0-45.3l-80-80zM200 192c-57.4 0-104 46.6-104 104v8c0 8.8-7.2 16-16 16s-16-7.2-16-16v-8c0-75.1 60.9-136 136-136h8c8.8 0 16 7.2 16 16s-7.2 16-16 16h-8z" />
            </svg>
        </div>

        <div id="popup-form" class="popup grid justify-center items-end mt-12 sm:mt-16">
            <h1 class="text-lg font-medium text-gray-800 mb-4 text-center">{{ $errors->first('date') }}</h1>                
        </div>

        <button id="OK2" class="bg-red-700 w-full h-10 rounded-lg text-white text-xl hover:bg-red-600">
            Ok
        </button>
    </div>
</div>
@endif


<!-- pop up validation true -->
@if(session('success'))
<div id="validation" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-50 flex items-center justify-center p-4 sm:p-0">
    <div class="relative bg-gray-100 shadow-lg rounded-md p-4 max-w-md w-full sm:w-80 sm:max-w-sm sm:h-80">
        <div class="absolute -top-11 left-1/2 transform -translate-x-1/2 w-28 h-28 bg-green-500 rounded-full flex justify-center items-center">
            <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <circle cx="12" cy="12" r="9"/>
                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="14;0"/>
                    </path>
                </g>
            </svg>
        </div>

        <div id="popup-form" class="popup grid justify-center items-end mt-12 sm:mt-16">
            <p class="text-lg font-bold mb-4 text-center">
                Je vous remercie de votre réservation
            </p>
            <h1 class="text-lg text-gray-800 mb-4 text-center">{{ session('success') }}</h1>
        </div>

        <button id="OK" class="bg-green-500 w-full h-10 rounded-lg text-white text-xl hover:bg-green-600">
            Ok
        </button>
    </div>
</div>
@endif


<!-- pop up validation false -->
@if(session('error'))
<div id="validation1" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-50 flex items-center justify-center p-4 sm:p-0">
    <div class="relative bg-gray-100 shadow-lg rounded-md p-4 max-w-md w-full sm:w-80 sm:max-w-sm sm:h-80 grid justify-center items-end">
        <div class="absolute -top-11 left-1/2 transform -translate-x-1/2 w-28 h-28 bg-red-700 rounded-full flex justify-center items-center">
            <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff" d="M459.1 52.4L442.6 6.5C440.7 2.6 436.5 0 432.1 0s-8.5 2.6-10.4 6.5L405.2 52.4l-46 16.8c-4.3 1.6-7.3 5.9-7.2 10.4 0 4.5 3 8.7 7.2 10.2l45.7 16.8 16.8 45.8c1.5 4.4 5.8 7.5 10.4 7.5s8.9-3.1 10.4-7.5l16.5-45.8 45.7-16.8c4.2-1.5 7.2-5.7 7.2-10.2 0-4.6-3-8.9-7.2-10.4L459.1 52.4zm-132.4 53c-12.5-12.5-32.8-12.5-45.3 0l-2.9 2.9C256.5 100.3 232.7 96 208 96C93.1 96 0 189.1 0 304S93.1 512 208 512s208-93.1 208-208c0-24.7-4.3-48.5-12.2-70.5l2.9-2.9c12.5-12.5 12.5-32.8 0-45.3l-80-80zM200 192c-57.4 0-104 46.6-104 104v8c0 8.8-7.2 16-16 16s-16-7.2-16-16v-8c0-75.1 60.9-136 136-136h8c8.8 0 16 7.2 16 16s-7.2 16-16 16h-8z"/>
            </svg>
        </div>

        <div id="popup-form" class="popup grid justify-center items-end mt-12 sm:mt-16">
            <h1 class="text-lg font-medium text-gray-800 mb-4 text-center ">{{ session('error') }}</h1>
        </div>

        <button id="OK1" class="bg-red-700 w-full h-10 rounded-lg text-white text-xl hover:bg-red-600">
            Ok
        </button>
    </div>
</div>
@endif


<!-- Calendar and Form Section -->
<div class="flex flex-col md:flex-row items-center justify-center py-8 px-4 gap-6 bg-blue-900">
    <!-- Calendar -->
    <div class="max-w-sm w-full md:w-1/2">
        <div class="mt-20 bg-gray-100 blur-xl p-3 rounded-md">
            <div class="flex justify-around mb-2">
                <button id="back" aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <div class="flex gap-3">
                    <span id="months"></span>
                    <span id="years"></span>
                </div>
                <button id="next" aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
            </div>
            <div class="flex bg-gray-200 rounded">
                <p class="p-3 font-semibold">Dim</p>
                <p class="p-3 font-semibold">Lun</p>
                <p class="p-3 font-semibold">Mar</p>
                <p class="p-3 font-semibold">Mer</p>
                <p class="p-3 font-semibold">Jeu</p>
                <p class="p-3 font-semibold">Ven</p>
                <p class="p-3 font-semibold">Sam</p>
            </div>
            <div id="calendarBody" class="grid grid-cols-7 gap-1 p-3">
                <!-- Calendar Dates Will Be Populated Here -->
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="w-full md:w-1/2 p-4">
        <form action="{{route('Booking')}}" method="POST" class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-6 bg-white shadow-lg rounded-lg">
            @csrf
            <!-- Name Field -->
            <div class="col-span-1 sm:col-span-2">
                <h1 class="font-medium mb-1 text-gray-600">Nom complet <span class="text-red-600">*</span></h1>
                <input name="name" class="w-full rounded-md bg-gray-100 border-none p-2" type="text" placeholder="Enter name">
                @error('name')
                <p class="text-red-500">{{ $message }}*</p>
                @enderror
            </div>

            <!-- Vous Field -->
            <div class="col-span-1 sm:col-span-2">
                <h4 class="font-medium mb-1 text-gray-600">Vous êtes</h4>
                <div class="flex flex-col sm:flex-row">
                    <div class="flex items-center mb-2 sm:mb-0 sm:mr-4">
                        <input id="personne" type="radio" name="Vous" value="personne" class="form-radio h-4 w-4 text-indigo-600">
                        <label for="personne" class="ml-2 text-gray-500">Une personne</label>
                    </div>
                    <div class="flex items-center">
                        <input id="organisation" type="radio" name="Vous" value="organisation" class="form-radio h-4 w-4 text-indigo-600">
                        <label for="organisation" class="ml-2 text-gray-500">Une organisation</label>
                    </div>
                </div>
                @error('Vous')
                <p class="text-red-500">{{$message}}*</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="col-span-1">
                <h1 class="font-medium mb-1 text-gray-600">Email <span class="text-red-600">*</span></h1>
                <input name="email" class="w-full rounded-md bg-gray-100 border-none p-2" type="text" placeholder="example@gmail.com">
                @error('email')
                <p class="text-red-500">{{ $message }}*</p>
                @enderror
            </div>

            <!-- Phone Field -->
            <div class="col-span-1">
                <h1 class="font-medium mb-1 text-gray-600">Telephone <span class="text-red-600">*</span></h1>
                <input name="phone" class="w-full rounded-md bg-gray-100 border-none p-2" type="text" placeholder="06 00000000">
                @error('phone')
                <p class="text-red-500">{{ $message }}*</p>
                @enderror
            </div>

            <!-- Sujet Field -->
            <div class="col-span-1 sm:col-span-2">
                <h1 class="font-medium mb-1 text-gray-600">Sujet <span class="text-red-600">*</span></h1>
                <select name="sujet" class="w-full rounded-md bg-gray-100 border-none h-11 px-4">
                    <option value="" disabled selected>Select sujet</option>
                    <option value="Prestation">Prestation</option>
                    <option value="Consultation">Consultation</option>
                    <option value="Partenariat">Partenariat</option>
                </select>
                @error('sujet')
                <p class="text-red-500">{{ $message }}*</p>
                @enderror
            </div>

            <!-- Description Field -->
            <div class="col-span-1 sm:col-span-2">
                <h1 class="font-medium mb-1 text-gray-600">Description</h1>
                <textarea name="description" class="w-full rounded-md bg-gray-100 border-none p-2" placeholder="Enter description"></textarea>
            </div>

            <!-- Time Field -->
            <div class="col-span-1 sm:col-span-2">
                <h1 class="font-medium mb-1 text-gray-600">Créneau horaire <span class="text-red-600">*</span></h1>
                <select id="heursDropdown" name="time" class="w-full rounded-md bg-gray-100 border-none h-11 px-4">
                    <option value="" disabled selected>Select time</option>
                </select>
                @error('time')
                <p class="text-red-500">{{ $message }}*</p>
                @enderror
            </div>

            <!-- Date Field -->
            <div class="col-span-1 hidden">
                <h1 class="font-medium mb-1 text-gray-600">Date *</h1>
                <input class="w-full rounded-md bg-gray-100 border-none Date" id="selectedDate" name="date" type="text" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" placeholder="yyyy/mm/dd">
                @error('date')
                <p class="text-red-500">{{ $message }}*</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="col-span-1 sm:col-span-2 flex justify-center">
                <button class="w-full sm:w-auto px-6 py-2 rounded-md font-medium text-lg bg-blue-700 text-white hover:bg-blue-800">Envoyer</button>
            </div>
        </form>
    </div>
</div>


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

        $("#form_booking2").click(function () {
            if (event.target === this) {
                $(this).hide();
            }
        });

        $("#OK2").click(function () {
            $("#form_booking2").hide();
        });
    });
</script>




<script>
    const Array_months = [
        "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
        "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
    ];

    const holidays = [
        { month: 0, day: 1 },  
        { month: 4, day: 1 },  
        { month: 6, day: 30 }, 
        { month: 10, day: 18 }, 
    ];

    let today = new Date();
    let currentYear = today.getFullYear();
    let currentMonth = today.getMonth();
    let currentDay = today.getDate();

    const years = document.getElementById('years');
    const months = document.getElementById('months');
    const calendarBody = document.getElementById('calendarBody');
    const selectedDateInput = document.getElementById('selectedDate');

    function updateCalendar() {
        months.innerText = Array_months[currentMonth];
        years.innerText = currentYear;

        calendarBody.innerHTML = '';

        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();

        let date = 1;
        for (let i = 0; i < 6; i++) {
            for (let j = 0; j < 7; j++) {
                const cell = document.createElement('div');
                cell.className = 'w-12 h-12 flex justify-center items-center cursor-pointer';

                if (i === 0 && j < firstDayOfMonth) {
                    cell.innerHTML = '';
                } else if (date > daysInMonth) {
                    break;
                } else {
                    cell.innerHTML = date;

                    if (currentYear === today.getFullYear() && currentMonth === today.getMonth() && date === currentDay) {
                        cell.classList.add('current-day');
                    }

                    const currentCellDate = date;
                    const isHoliday = holidays.some(holiday => holiday.month === currentMonth && holiday.day === currentCellDate);

                    if (isHoliday) {
                        cell.classList.add('holiday');
                    }

                    cell.addEventListener('click', () => {
                        document.querySelectorAll('.selected-day').forEach(cell => cell.classList.remove('selected-day'));
                        cell.classList.add('selected-day');
                        const selectedDate = `${currentYear}/${String(currentMonth + 1).padStart(2, '0')}/${String(currentCellDate).padStart(2, '0')}`;
                        selectedDateInput.value = selectedDate;
                        $(selectedDateInput).trigger('change'); 
                    });

                    date++;
                }
                calendarBody.appendChild(cell);
            }
        }
    }

    function changeMonth(offset) {
        let newMonth = currentMonth + offset;
        let newYear = currentYear;

        if (newMonth < 0) {
            newMonth = 11;
            newYear -= 1;
        } else if (newMonth > 11) {
            newMonth = 0;
            newYear += 1;
        }

        if (newYear < today.getFullYear() || (newYear === today.getFullYear() && newMonth < today.getMonth())) {
            return;
        }

        currentMonth = newMonth;
        currentYear = newYear;

        updateCalendar();
    }

    document.getElementById('back').addEventListener('click', () => changeMonth(-1));
    document.getElementById('next').addEventListener('click', () => changeMonth(1));

    updateCalendar();
</script>

<script type="text/javascript">
        $(document).ready(function() {
            $('.Date').on('change', function() {
                var selectedDate = $(this).val();
                
                if (selectedDate) {
                    $.ajax({
                        url: '/available-dates',
                        type: 'GET',
                        data: { date: selectedDate },
                        success: function(data) {
                            $('#heursDropdown').empty();
                            $('#heursDropdown').append(`<option class="" value="" disabled selected>Select time</option>`);
                            $.each(data, function(index, heur) {
                                $('#heursDropdown').append(`<option value="${heur}">${heur}</option>`);
                            });
                        }
                    });
                } else {
                    $('#heursDropdown').empty();
                    $('#heursDropdown').append('<option class="" value="" disabled selected>Select time</option>');
                }
            });
        });
</script>