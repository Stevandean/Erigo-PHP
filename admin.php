<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard - Erigo</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .button {
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            /* Yellow */
            background-color: #FACC15;
        }

        .button2 {
            /* Red */
            background-color: #B91C1C;
        }

        .button3 {
            /* Blue */
            background-color: #3B82F6;
        }

        .active,
        .btn:hover {
            /* Style the active class, and buttons on mouse-over */
            background-color: #666;
            color: white;
        }
    </style>
</head>

<body>
    <div class="flex space-x-10">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 h-screen  w-full max-w-[20rem] p-4 shadow-xl shadow-blue-gray-900/5">
            <div class="mb-2 p-4">
                <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-gray-900">Erigo Store</h5>
            </div>
            <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-700">
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-gray-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    Dashboard
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-gray-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    Categories
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-gray-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    Product
                </div>
                <div role="button" tabindex="0" class="flex active items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-gray-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    Users
                </div>
                <a href="./login.php">
                    <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                        <div class="grid place-items-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                                <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>Log Out
                    </div>
                </a>
            </nav>
        </div>
        <div class="container w-full h-full">

            <div class="mb-2 p-4">
                <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-gray-900">Users Table</h5>
            </div>
            <table>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Action</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Maria Anders</td>
                    <td class="text-center"><button class="button rounded button3">Admin</button></td>
                    <td><button class="button rounded button1">Edit</button>
                        <button class="button rounded button2">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Francisco Chang</td>
                    <td class="text-center"><button class="button rounded button3">Manajer</button></td>
                    <td><button class="button rounded button1">Edit</button>
                        <button class="button rounded button2">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>Roland Mendel</td>
                    <td class="text-center"><button class="button rounded button3">Staff</button></td>
                    <td><button class="button rounded button1">Edit</button>
                        <button class="button rounded button2">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>Helen Bennett</td>
                    <td class="text-center"><button class="button rounded button3">Staff</button></td>
                    <td><button class="button rounded button1">Edit</button>
                        <button class="button rounded button2">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>Yoshi Tannamuri</td>
                    <td class="text-center"><button class="button rounded button3">Staff</button></td>
                    <td><button class="button rounded button1">Edit</button>
                        <button class="button rounded button2">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td>Giovanni Rovelli</td>
                    <td class="text-center"><button class="button rounded button3">Staff</button></td>
                    <td><button class="button rounded button1">Edit</button>
                        <button class="button rounded button2">Delete</button>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>