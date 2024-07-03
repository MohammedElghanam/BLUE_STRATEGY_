<style>
    .current-day {
        background-color: #0059ff; /* Light gray background color */
        color: #f0f0f0;
        font-weight: 700; /* Example: Bold text for the current day */
        padding-left: 25px;
        border-radius: 50px;
        width: 50px;
        height: 57px;
        
    }

    .selected-day {
        background-color: #0055ff67; /* Light gray background color */
        color: #f0f0f0;
        font-weight: bold; /* Example: Bold text for the current day */
        padding-left: 15px;
        margin: 5px;
        border-radius: 50px;
        width: 50px;
        height: 57px;
    }
</style>
<div class=" bg-blue-800">
    <div class=" grid grid-cols-12 px-20 w-full bg-white">
        <div class=" col-span-12 h-96 relative">
            <img src="AP/91.png" alt="fo bar" class=" h-96 w-full">
            <img src="AP/22.png" alt="" class=" absolute right-40 -bottom-40 w-68 h-64">
            <div class=" flex items-end justify-start w-1/2 absolute bottom-0 left-0">
                <div class=" w-96 h-28 bg-white flex items-end justify-center">
                    <div class=" w-96 h-3 bg-blue-900"></div>
                </div>
                <div class=" h-16 w-40 bg-white"></div>
            </div>

        </div>
        <div class=" w-32 bg-blue-900 opacity-70 h-3/4 absolute top-[84px] right-1/3"></div>
        <div class="  col-span-5 mt-4">
            <h1 class=" text-7xl font-bold text-gray-900 mb-5">BOOking</h1>
            <p class=" text-4xl font-medium text-gray-900">Enjoy a better experience with our company</p>
        </div>
    </div>
    <div class=" grid grid-cols-12 h-56 rounded-bl-full bg-white"></div>


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

            <button id="OK" class=" bg-green-500 col-span-12 h-10 rounded-lg text-white text-xl hover:bg-green-600">Ok</button>
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
                    <path fill="#ffffff" d="M459.1 52.4L442.6 6.5C440.7 2.6 436.5 0 432.1 0s-8.5 2.6-10.4 6.5L405.2 52.4l-46 16.8c-4.3 1.6-7.3 5.9-7.2 10.4c0 4.5 3 8.7 7.2 10.2l45.7 16.8 16.8 45.8c1.5 4.4 5.8 7.5 10.4 7.5s8.9-3.1 10.4-7.5l16.5-45.8 45.7-16.8c4.2-1.5 7.2-5.7 7.2-10.2c0-4.6-3-8.9-7.2-10.4L459.1 52.4zm-132.4 53c-12.5-12.5-32.8-12.5-45.3 0l-2.9 2.9C256.5 100.3 232.7 96 208 96C93.1 96 0 189.1 0 304S93.1 512 208 512s208-93.1 208-208c0-24.7-4.3-48.5-12.2-70.5l2.9-2.9c12.5-12.5 12.5-32.8 0-45.3l-80-80zM200 192c-57.4 0-104 46.6-104 104v8c0 8.8-7.2 16-16 16s-16-7.2-16-16v-8c0-75.1 60.9-136 136-136h8c8.8 0 16 7.2 16 16s-7.2 16-16 16h-8z"/>
                </svg>
            </div>

            <div id="popup-form" class="popup col-span-12 grid justify-center items-end">
                <h1 class="text-lg font-bold mb-4 text-center"> {{ session('error') }}</h1>
                <p class=" text-center">Lorem ipsum, or lipsum as it is sometimes known</p>
            </div>

            <button id="OK1" class=" bg-red-700 col-span-12 h-10 rounded-lg text-white text-xl hover:bg-red-600">Ok</button>
        </div>
    </div>
    @endif

    <div class="flex items-center justify-center py-8 px-4  gap-6">
        <div class="max-w-sm w-full  ">
            {{-- <div class="md:p-8 p-5 dark:bg-gray-800 bg-white rounded-lg">
                <div class="px-4 flex items-center justify-between">
                    <span id="monthYear" tabindex="0" class="focus:outline-none text-base font-bold dark:text-gray-100 text-gray-800"></span>
                    <div class="flex items-center">
                        <button id="prevBtn" aria-label="calendar backward"
                            class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 disabled:opacity-50"
                            onclick="previousMonth()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                        </button>
                        <button aria-label="calendar forward"
                            class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100"
                            onclick="nextMonth()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="9 6 15 12 9 18" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-12 overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su
                                        </p>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="calendarBody">

                        </tbody>
                    </table>
                </div>
            </div> --}}

            <div class="mt-20 bg-white p-3 shadow-lg rounded-lg">
                {{-- arrow left and right  --}}
                <div class="flex justify-around mb-2">
                    <button id="back" aria-label="calendar backward"
                            class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 disabled:opacity-50"
                            onclick="previousMonth()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                    </button>

                    <div class="flex gap-3 ">
                        <span id="months"></span>
                        <span id="years"></span>
                    </div>
                    
                    <button id="next" aria-label="calendar forward"
                            class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100"
                            onclick="nextMonth()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="9 6 15 12 9 18" />
                            </svg>
                    </button>
                </div>

                <table>
                    <thead class=" mb-4 p-1">
                        <tr class=" border-b-2 border-gray-400 mb-3">
                            <th class="p-3 font-medium text-blue-500">Sun</th>
                            <th class="p-3 font-medium text-blue-500">Mon</th>
                            <th class="p-3 font-medium text-blue-500">Tue</th>
                            <th class="p-3 font-medium text-blue-500">Wed</th>
                            <th class="p-3 font-medium text-blue-500">Thu</th>
                            <th class="p-3 font-medium text-blue-500">Fri</th>
                            <th class="p-3 font-medium text-blue-500">Sat</th>
                        </tr>
                    </thead>
                    <tbody id="calendarBody" class=" p-3 h-72 w-full">
                        <!-- Calendar days will be generated here -->
                    </tbody>
                </table>
            </div>

        </div>

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

                <div class="  h-16 col-span-2 pb-10">
                    <h1 class=" font-medium mb-1 text-gray-600">Time *</h1>
                    <select name="time" class=" w-full rounded-md bg-gray-100 border-none h-11  px-4">
                        <option class="" value="" disabled selected>Select time</option>
                        <option value="09-10" class="">09-10</option>
                        <option value="10-11" class="">10-11</option>
                        <option value="11-12" class="">11-12</option>
                        <option value="12-13" class="">12-13</option>
                        <option value="14:30 - 15:30" class="">14:30 - 15:30</option>
                        <option value="15:30 - 16:30" class="">15:30 - 16:30</option>
                        <option value="16:30 - 17:30" class="">16:30 - 17:30</option>
                        <option value="17:30 - 18:30" class="">17:30 - 18:30</option>
                    </select>
                    @error('time')
                    <p class=" text-red-500">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="  h-16 col-span-2 mb-4">
                    <h1 class=" font-medium mb-1 text-gray-600">Date *</h1>
                    <input class=" w-full rounded-md bg-gray-100 border-none" id="selectedDate" name="date" type="text"
                        placeholder=" dd/mm/yyyy">
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

{{-- <script>
    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    let selectedDate = null;

    function renderCalendar(month, year) {
        const firstDay = (new Date(year, month)).getDay();
        const daysInMonth = 32 - new Date(year, month, 32).getDate();
        const tbl = document.getElementById("calendarBody");
        tbl.innerHTML = "";
        document.getElementById("monthYear").innerHTML = `${months[month]} ${year}`;
        let date = 1;

        for (let i = 0; i < 6; i++) {
            let row = document.createElement("tr");
            for (let j = 0; j < 7; j++) {
                let cell = document.createElement("td");
                let cellText = document.createTextNode("");
                if (i === 0 && j < firstDay) {
                    cell.appendChild(cellText);
                } else if (date > daysInMonth) {
                    break;
                } else {
                    cellText = document.createTextNode(date);
                    cell.classList.add("text-gray-500", "cursor-pointer");
                    cell.onclick = () => selectDate(date, month, year, cell);
                    cell.appendChild(cellText);
                    date++;
                }
                row.appendChild(cell);
            }
            tbl.appendChild(row);
        }

        document.getElementById("prevBtn").disabled = (month === today.getMonth() && year === today.getFullYear());
    }

    function previousMonth() {
        currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
        currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
        renderCalendar(currentMonth, currentYear);
    }

    function nextMonth() {
        currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
        currentMonth = (currentMonth + 1) % 12;
        renderCalendar(currentMonth, currentYear);
    }

    function selectDate(day, month, year, cell) {
        // // Remove previous selected date style
        // if (selectedDate) {
        //     selectedDate.classList.remove("bg-indigo-500", "text-white", "rounded-full", "h-8");
        // }

        // // Update selected date style
        // selectedDate = cell;
        // selectedDate.classList.add("bg-indigo-500", "text-white", "rounded-full", "h-8");

        // Update form with selected date
        const formattedDate = `${year}/${String(month + 1).padStart(2, '0')}/${String(day).padStart(2, '0')}`;
        document.getElementById("selectedDate").value = formattedDate;
    }


    renderCalendar(currentMonth, currentYear);
</script> --}}


<script>
    const Array_months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
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
            const row = document.createElement('tr');
    
            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < firstDayOfMonth) {
                    // Empty cells before the first day of the month
                    const cell = document.createElement('td');
                    row.appendChild(cell);
                } else if (date > daysInMonth) {
                    // Stop adding cells if we've reached the end of the month
                    break;
                } else {
                    // Create a cell for each day of the month
                    const cell = document.createElement('td');
                    cell.textContent = date;
    
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
                        const selectedDate = `${currentCellDate}/${currentMonth + 1}/${currentYear}`;
                        selectedDateInput.value = selectedDate;
                    });
    
                    row.appendChild(cell);
                    date++;
                }
            }
    
            calendarBody.appendChild(row);
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
    
    updateCalendar();  // Initialize the calendar with the current date
    </script>