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

    .booked-time {
        background-color: #FF00004D; /* Light red for booked times */
    }
</style>
<div class=" bg-white pt-28">
    <div class=" bg-blue-900">
        <div class=" grid grid-cols-12 px-20 w-full bg-white">
            <div class=" col-span-12 h-96 relative">
                <img src="AP/91.png" alt="fo bar" class=" h-96 w-full">
                <img src="AP/22.png" alt="" class=" absolute right-40 -bottom-40 w-68 h-64">
                {{-- <div class=" flex items-end justify-start w-1/2 absolute bottom-0 left-0">
                    <div class=" w-96 h-28 bg-white flex items-end justify-center">
                        <div class=" w-96 h-1 bg-blue-900"></div>
                    </div>
                    <div class=" h-16 w-40 bg-white"></div>
                </div> --}}
            </div>
            <div class=" w-32 bg-blue-900 opacity-70 h-3/4 absolute top-[84px] right-1/3"></div>
            <div class="  col-span-5 mt-4">
                <h1 class=" text-7xl font-semibold text-gray-900 mb-5">BOOking</h1>
                <p class=" text-4xl font-light text-gray-900">Enjoy a better experience with our company</p>
            </div>
        </div>
        <div class=" grid grid-cols-12 h-56 rounded-bl-full bg-white"></div>
    </div>

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

    {{-- calender  --}}
    <div class="flex items-center justify-center py-8 px-4 gap-6 bg-blue-900">
        <div class="max-w-sm w-full  ">

            <div class="mt-20 bg-gray-100 blur-xl p-3 rounded-md">
                <div class="flex justify-around mb-2">
                    <button id="back" aria-label="calendar backward"
                        class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="15 6 9 12 15 18" />
                        </svg>
                    </button>
                    <div class="flex gap-3">
                        <span id="months"></span>
                        <span id="years"></span>
                    </div>
                    <button id="next" aria-label="calendar forward"
                        class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="9 6 15 12 9 18" />
                        </svg>
                    </button>
                </div>
                <div class="flex bg-gray-200 rounded">
                    <p class="p-3 font-semibold">Sun</p>
                    <p class="p-3 font-semibold">Mon</p>
                    <p class="p-3 font-semibold">Tue</p>
                    <p class="p-3 font-semibold">Wed</p>
                    <p class="p-3 font-semibold">Thu</p>
                    <p class="p-3 font-semibold">Fri</p>
                    <p class="p-3 font-semibold">Sat</p>
                </div>
                <div id="calendarBody" class="grid grid-cols-7 gap-1 p-3">

                </div>
            </div>

        </div>

        {{-- form  --}}
        <div class=" w-1/2">
            <form action="{{route('Booking')}}" method="POST"
                class=" grid grid-cols-4 gap-4 p-8 rounded-lg bg-white shadow-lg">
                @csrf
                <div class="  h-16 col-span-4 mb-4">
                    <h1 class=" font-medium mb-1 text-gray-600">Full name *</h1>
                    <input name="name" class=" w-full rounded-md bg-gray-100 border-none" type="text"
                        placeholder=" Enter name">
                    @error('name')
                    <p class=" text-red-500">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="  h-16 col-span-2 mb-4">
                    <h1 class=" font-medium mb-1 text-gray-600">Email *</h1>
                    <input name="email" class=" w-full rounded-md bg-gray-100 border-none" type="text"
                        placeholder=" example@gmail.com">
                    @error('email')
                    <p class=" text-red-500">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="  h-16 col-span-2 mb-4">
                    <h1 class=" font-medium mb-1 text-gray-600">Phone *</h1>
                    <input name="phone" class=" w-full rounded-md bg-gray-100 border-none" type="text"
                        placeholder=" 06 00000000">
                    @error('phone')
                    <p class=" text-red-500">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="  h-16 col-span-4 pb-10 mb-4">
                    <h1 class=" font-medium mb-1 text-gray-600">Sujet *</h1>
                    <select name="sujet" class=" w-full rounded-md bg-gray-100 border-none h-11 px-4">
                        <option value="" disabled selected>Select sujet</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                    @error('sujet')
                    <p class=" text-red-500">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="  h-16 col-span-4 mb-5">
                    <h1 class=" font-medium mb-1 text-gray-600">Description</h1>
                    <textarea name="description" class=" w-full rounded-md bg-gray-100 border-none" type="text"
                        placeholder=" Enter description"></textarea>
                </div>

                <div class="  h-16 col-span-4 pb-10">
                    <h1 class=" font-medium mb-1 text-gray-600">Time *</h1>
                    <select id="heursDropdown" name="time" class=" w-full rounded-md bg-gray-100 border-none h-11  px-4">
                        <option class="" value="" disabled selected>Select time</option>
                    </select>
                    @error('time')
                    <p class=" text-red-500">{{ $message }}*</p>
                    @enderror
                </div>

                <div class=" h-16 col-span-2 mb-4 hidden">
                    <h1 class=" font-medium mb-1 text-gray-600">Date *</h1>
                    <input class=" w-full rounded-md bg-gray-100 border-none Date" id="selectedDate" name="date" type="text"  max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" placeholder=" yyyy/mm/dd">
                        
                    @error('date')
                    <p class=" text-red-500">{{ $message }}*</p>
                    @enderror
                </div>
                <div class="  h-16 col-span-4 flex items-end">
                    <button class=" h-11 w-full rounded-md font-medium text-lg bg-blue-700 text-white ">Send</button>
                </div>
            </form>
        </div>
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
    });
</script>



<script>
    const Array_months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
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

        // Clear previous calendar days
        calendarBody.innerHTML = '';

        // Get the number of days in the current month
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        // Get the first day of the month (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
        const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();

        // Create rows and cells for the calendar
        let date = 1;
        for (let i = 0; i < 6; i++) { // 6 rows for maximum display, adjust as needed
            for (let j = 0; j < 7; j++) {
                const cell = document.createElement('div');
                cell.className = 'w-12 h-12 flex justify-center items-center cursor-pointer';

                if (i === 0 && j < firstDayOfMonth) {
                    // Empty cells before the first day of the month
                    cell.innerHTML = '';
                } else if (date > daysInMonth) {
                    // Stop adding cells if we've reached the end of the month
                    break;
                } else {
                    cell.innerHTML = date;

                    if (currentYear === today.getFullYear() && currentMonth === today.getMonth() && date === currentDay) {
                        cell.classList.add('current-day');
                    }

                    const currentCellDate = date; // Capture the current date for the event listener
                    cell.addEventListener('click', () => {
                        // Remove existing selected class from all cells
                        const selectedCells = document.querySelectorAll('.selected-day');
                        selectedCells.forEach(cell => cell.classList.remove('selected-day'));

                        // Add selected class to the clicked cell
                        cell.classList.add('selected-day');

                        // Update the input field with the selected date
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

        // Prevent going back to the past beyond the current month and year
        if (newYear < today.getFullYear() || (newYear === today.getFullYear() && newMonth < today.getMonth())) {
            return;
        }

        currentMonth = newMonth;
        currentYear = newYear;

        updateCalendar();
    }

    document.getElementById('back').addEventListener('click', () => changeMonth(-1));
    document.getElementById('next').addEventListener('click', () => changeMonth(1));

    updateCalendar(); // Initialize the calendar with the current date
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