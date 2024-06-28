<?php
session_start();
?>

<nav class="shadow-lg px-5 md:px-16 h-auto md:h-16">
    <div class="py-6 flex h-full w-full items-center justify-start justify-between">
        <a class="text-3xl font-extrabold font-heading text-black uppercase" href="./">
            erigo
        </a>
        <div class="flex items-center">
            <ul class="hidden md:flex px-4 mx-auto text-lg font-bold space-x-6">
                <li><a class="text-navy hover:text-navy transition-all ease-in-out duration-300" href="./index.php">Home</a></li>
                <li><a class="text-gray hover:text-navy transition-all ease-in-out duration-300" href="./about.php">About</a></li>
                <li><a class="text-gray hover:text-navy transition-all ease-in-out duration-300" href="./product.php">Product</a></li>
                <li><a class="text-gray hover:text-navy transition-all ease-in-out duration-300" href="./faq.php">FAQ</a></li>
                <li><button class="text-gray"><a class="text-gray hover:text-navy transition-all ease-in-out duration-300" href="./login.php">Logout</a></button></li>
                <li><a class="text-gray hover:text-navy transition-all ease-in-out duration-300" href="./maintenance.php">FAQ</a></li>
                <li><a class="text-gray" href="./process/auth/auth_logout.php">Logout</a></li>
                <li><span class="font-medium cursor default">|</span></li>
            </ul>

            <div class="hidden xl:flex items-center space-x-5 items-center">
                <?php if ($_SESSION['status_login'] != true) { ?>
                    <a href="./login.php" id="loginBtn" class="font-bold">Login</a>
                    <a href="./register.php" id="registerBtn" class="bg-navy px-3 py-1.5 rounded-lg text-white font-bold">Register</a>
                <?php } else { ?>
                    <a id="cartBtn" class="flex items-center" href="./shopping_cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="flex absolute -mt-5 ml-4">
                            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                            </span>
                        </span>
                    </a>
                    <a href="./profile_settings.php" id="profileBtn">
                        <img class="overflow-clip w-9 h-9 object-cover rounded-full" src="./assets/img/products_2.png" alt="">
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="flex xl:hidden">
            <a class="xl:hidden flex mr-6 items-center" href="./shopping_cart.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="flex absolute -mt-5 ml-4">
                    <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                    </span>
                </span>
            </a>
            <div id="menuBtn" class="navbar-burger self-center xl:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
        </div>
    </div>

    <div id="responsiveMenu" class="hidden md:hidden px-6 py-4">
        <ul class="flex flex-col mb-3 space-y-3 text-lg font-bold text-gray">
            <li>
                <a href="./" class="text-navy hover:text-navy transition-all ease-in-out duration-300">Home</a>
            </li>
            <li>
                <a href=./about.php" class="text-gray hover:text-navy transition-all ease-in-out duration-300">About</a>
            </li>
            <li>
                <a href="./product.php" class="text-gray hover:text-navy transition-all ease-in-out duration-300">Product</a>
            </li>
            <li>
                <a href="./payment.php" class="text-gray hover:text-navy transition-all ease-in-out duration-300">Payment</a>
            </li>
        </ul>
        <div class="space-y-3 xl:space-y-0 xl:space-x-3 flex flex-col">
            <?php if ($_SESSION['status_login'] !== true) { ?>
                <a href="./login.php" id="loginBtnMbl" class="font-bold">Login</a>
                <a href="./register.php" id="registerBtnMbl" class="bg-navy px-3 py-1.5 w-fit rounded-lg text-white font-bold">Register</a>
            <?php } else { ?>
                <a href="./shopping_cart.php" id="cartBtnMbl">
                    <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6771 23.8369C12.0689 27.3631 12.2648 29.126 13.4513 30.1881C14.6378 31.25 16.4117 31.25 19.9595 31.25H20.2214H28.0645H30.8904C33.3345 31.25 34.5564 31.25 35.5481 30.6529C36.5397 30.0558 37.1116 28.9758 38.2552 26.8158L43.3972 17.1031C44.5029 15.0146 42.9889 12.5 40.6258 12.5H20.2214H19.728C15.3828 12.5 13.2102 12.5 11.968 13.8878C10.7259 15.2756 10.9658 17.435 11.4456 21.7535L11.6771 23.8369Z" stroke="#757575" stroke-width="3" stroke-linejoin="round" />
                        <path d="M6.25 6.25H7.29167C8.67542 6.25 9.83787 7.29046 9.99069 8.66573L11.5741 22.9167" stroke="#757575" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.75 40.625C18.75 42.3508 17.3509 43.75 15.625 43.75C13.8991 43.75 12.5 42.3508 12.5 40.625C12.5 38.8992 13.8991 37.5 15.625 37.5C17.3509 37.5 18.75 38.8992 18.75 40.625Z" stroke="#757575" stroke-width="3" />
                        <path d="M37.5 40.625C37.5 42.3508 36.1008 43.75 34.375 43.75C32.6492 43.75 31.25 42.3508 31.25 40.625C31.25 38.8992 32.6492 37.5 34.375 37.5C36.1008 37.5 37.5 38.8992 37.5 40.625Z" stroke="#757575" stroke-width="3" />
                    </svg>
                </a>
                <a id="profileBtnMbl">
                    <img class="overflow-clip w-9 h-9 object-cover rounded-full" src="./assets/img/products_2.png" alt="">
                </a>
            <?php } ?>
        </div>

    </div>
</nav>