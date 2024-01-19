<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRO Barbershop</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <?php $this->load->view('sidebar_c') ?>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 p-4 gap-4">
            <div class="bg-blue-400 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-4 border-b-8 border-blue-500 dark:border-gray-600 text-white font-medium group">
                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full">
                    <svg class="w-[25px] h-[25px] text-blue-800 dark:text-white transition-all group-hover:scale-110 duration-300 ease-linear" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                        <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                </div>
                <div class="text-right">
                    <p class="text-2xl">0</p>
                    <p>Customer</p>
                </div>
            </div>
            <div class="bg-blue-400 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-4 border-b-8 border-blue-500 dark:border-gray-600 text-white font-medium group">
                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full">
                    <svg class="w-[25px] h-[25px] text-blue-800 dark:text-white transition-all group-hover:scale-110 duration-300 ease-linear" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 9a1 1 0 0 0-1 1 6.994 6.994 0 0 1-11.89 5H7a1 1 0 0 0 0-2H2.236a1 1 0 0 0-.585.07c-.019.007-.037.011-.055.018-.018.007-.028.006-.04.014-.028.015-.044.042-.069.06A.984.984 0 0 0 1 14v5a1 1 0 1 0 2 0v-2.32A8.977 8.977 0 0 0 18 10a1 1 0 0 0-1-1ZM2 10a6.994 6.994 0 0 1 11.89-5H11a1 1 0 0 0 0 2h4.768a.992.992 0 0 0 .581-.07c.019-.007.037-.011.055-.018.018-.007.027-.006.04-.014.028-.015.044-.042.07-.06A.985.985 0 0 0 17 6V1a1 1 0 1 0-2 0v2.32A8.977 8.977 0 0 0 0 10a1 1 0 1 0 2 0Z" />
                    </svg>
                </div>
                <div class="text-right">
                    <p class="text-2xl">0</p>
                    <p>History Customer </p>
                </div>
            </div>
        </div>
        <!-- ./Statistics Cards -->

        <!-- Client Table -->
        <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-blue-100 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Addres</th>
                                <th class="px-4 py-3">Phone Number</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        </tbody>
                    </table>
                </div>
                <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="col-span-2"></span>
                </div>
            </div>
        </div>
        <!-- ./Client Table -->
</body>

</html>