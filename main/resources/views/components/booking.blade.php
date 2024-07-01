
    <div class="flex items-center justify-center py-8 px-4">
        <div class="max-w-sm w-full shadow-lg">
            <div class="md:p-8 p-5 dark:bg-gray-800 bg-white rounded-t">
                <div class="px-4 flex items-center justify-between">
                    <span id="monthYear" tabindex="0" class="focus:outline-none text-base font-bold dark:text-gray-100 text-gray-800"></span>
                    <div class="flex items-center">
                        <button id="prevBtn" aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 disabled:opacity-50" onclick="previousMonth()" disabled>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                        </button>
                        <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100" onclick="nextMonth()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su</p>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="calendarBody">
                            <!-- Calendar rows will be inserted here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center py-8 px-4">
        <form id="dateForm" class="max-w-sm w-full shadow-lg p-8 dark:bg-gray-800 bg-white rounded">
            <label for="selectedDate" class="block text-sm font-medium text-gray-700 dark:text-gray-100">Selected Date</label>
            <input type="text" id="selectedDate" name="selectedDate" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" readonly>
        </form>
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
                        cell.classList.add("text-gray-500", "dark:text-gray-100", "cursor-pointer");
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
            if (currentMonth === today.getMonth() && currentYear === today.getFullYear()) {
                return;
            }
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
            // Remove previous selected date style
            if (selectedDate) {
                selectedDate.classList.remove("bg-indigo-500", "text-white");
            }

            // Update selected date style
            selectedDate = cell;
            selectedDate.classList.add("bg-indigo-500", "text-white");

            // Update form with selected date
            const formattedDate = `${year}-${month + 1}-${day}`;
            document.getElementById("selectedDate").value = formattedDate;
        }

        renderCalendar(currentMonth, currentYear);
    </script>