<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Fill the string when you want change title of page -->
    <?php SEO(""); ?>
</head>

<body>
    <main class="w-full min-h-screen flex flex-col items-center justify-center mx-auto font-[Poppins]">

        <section>
            <h1 class="font-['Poppins'] text-black text-4xl font-extrabold flex items-center justify-center">ERIGO</h1>

            <div class="mt-[10px] flex items-center justify-center">
                <h2 class="text-black text-xl font-bold font-['Poppins']">We'll back.</h2>
            </div>

            <div class="mt-[10px] flex items-center justify-center">
                <h2 class="text-black text-sm font-medium font-['Poppins']">We're busy updating this page for you</h2>
            </div>

            <div class="mt-[10px] flex items-center justify-center">
                <h2 class="text-black text-sm font-medium font-['Poppins']">please check soon.</h2>
            </div>

            <div id="countdown" class="countdown">
                <ul class="flex justify-center space-x-3 pt-6">
                    <li
                        class="flex flex-col justify-center items-center font-medium border border-black rounded-md p-3 text-sm w-16">
                        <span class="flex justify-center items-center" id="days">00</span>Days
                    </li>

                    <li
                        class="flex flex-col justify-center items-center font-medium border border-black rounded-md p-3 text-sm w-16">
                        <span class="flex justify-center items-center" id="hours">00</span>Hours
                    </li>

                    <li
                        class="flex flex-col justify-center items-center font-medium border border-black rounded-md p-3 text-sm w-16">
                        <span class="flex justify-center items-center" id="minutes">00</span>Minutes
                    </li>

                    <li
                        class="flex flex-col justify-center items-center font-medium border border-black rounded-md p-3 text-sm w-16">
                        <span class="flex justify-center items-center" id="seconds">00</span>Seconds
                    </li>
                </ul>
            </div>

            <div class="social_links flex justify-center space-x-3 pt-6">
                <a href="http://instagram.com/erigostore" target="_blank"><ion-icon
                        name="logo-instagram"></ion-icon></a>
                <a href="https://www.tiktok.com/@erigo.store" target="_blank"><ion-icon
                        name="logo-tiktok"></ion-icon></a>
                <a href="https://twitter.com/erigostore" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="https://www.youtube.com/c/ErigoOfficial/videos" target="_blank"><ion-icon
                        name="logo-youtube"></ion-icon></a>
            </div>
        </section>

    </main>
</body>

</html>