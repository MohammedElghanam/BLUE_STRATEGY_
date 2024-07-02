<div class=" bg-blue-800">
    <div class=" grid grid-cols-12 px-20 w-full bg-white mt-20">
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
        <div class=" w-40 bg-blue-900 opacity-70 h-5/6 absolute top-0 right-1/3"></div>
        <div class="  col-span-5 mt-4">
            <h1 class=" text-7xl font-bold text-gray-900 mb-5">BOOking</h1>
            <p class=" text-4xl font-medium text-gray-900">Enjoy a better experience with our company</p>
        </div>
    </div>
    <div class=" grid grid-cols-12 h-56 rounded-bl-full bg-white"></div>


    <div class="flex items-center justify-center py-8 px-4  gap-6">
        <div class="max-w-sm w-full shadow-lg ">
            <div class="md:p-8 p-5 dark:bg-gray-800 bg-white rounded-lg">
                <div class="px-4 flex items-center justify-between">
                    <span id="monthYear" tabindex="0"
                        class="focus:outline-none text-base font-bold dark:text-gray-100 text-gray-800"></span>
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
            </div>
        </div>

        <div class=" w-1/2">
            <form action="{{route('Booking')}}" class=" grid grid-cols-4 gap-4 p-8 rounded-lg   bg-white shadow-lg">
                @csrf
                <div class="  h-16 col-span-4">
                    <h1 class=" font-medium mb-1 text-gray-600">Full name *</h1>
                    <input class=" w-full rounded-md bg-gray-100 border-none" type="text" placeholder=" Enter name"
                        required>
                </div>

                <div class="  h-16 col-span-2">
                    <h1 class=" font-medium mb-1 text-gray-600">Email *</h1>
                    <input class=" w-full rounded-md bg-gray-100 border-none" type="text" placeholder=" Enter email"
                        required>
                </div>

                <div class="  h-16 col-span-2">
                    <h1 class=" font-medium mb-1 text-gray-600">Phone *</h1>
                    <input class=" w-full rounded-md bg-gray-100 border-none" type="text" placeholder=" Enter phone"
                        required>
                </div>

                <div class="  h-16 col-span-4 pb-10 ">
                    <h1 class=" font-medium mb-1 text-gray-600">Sujet *</h1>
                    <select class=" w-full rounded-md bg-gray-100 border-none h-11 px-4">
                        <option value="" disabled selected>Select sujet</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                </div>

                <div class="  h-16 col-span-4 mb-5">
                    <h1 class=" font-medium mb-1 text-gray-600">Description</h1>
                    <textarea class=" w-full rounded-md bg-gray-100 border-none" type="text"
                        placeholder=" Enter description" required></textarea>
                </div>

                <div class="  h-16 col-span-2 pb-10">
                    <h1 class=" font-medium mb-1 text-gray-600">Time *</h1>
                    <select class=" w-full rounded-md bg-gray-100 border-none h-11  px-4">
                        <option class="" value="" disabled selected>Select time</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                </div>

                <div class="  h-16 col-span-2">
                    <h1 class=" font-medium mb-1 text-gray-600">Date</h1>
                    <input class=" w-full rounded-md bg-gray-100 border-none" id="selectedDate" name="selectedDate"
                        type="text" placeholder=" dd/mm/yyyy">
                </div>
                <div class="  h-16 col-span-4 flex items-end">
                    <button class=" h-11 w-full rounded-md font-medium text-lg bg-blue-700 text-white ">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
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
        const formattedDate = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        document.getElementById("selectedDate").value = formattedDate;
    }


    renderCalendar(currentMonth, currentYear);
</script>