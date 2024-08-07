<?php require_once '../../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Maintenance | Erigo Store"); ?>
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
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="main.js" defer></script>
            <link rel="shortcut icon" href="//erigostore.co.id/cdn/shop/files/New_Logo_Erigo_81faf464-002f-434b-bae0-632202133822_32x32.png?v=1692002740" type="image/png">
            <link rel="stylesheet" href="style.css">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            </style>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            colors: {
                                gray: '#757575',
                                navy: '#1B2E57',
                                red: '#E95144',
                                yellow: '#FFBB49',
                                grayRating: '#D9D9D9',
                                yellowRating: '#FACC15',
                            }
                        }
                    }
                }
            </script>
            <title>maintenance</title>
            </head>

            <body>
                <div class="w-fulL min-h-screen">
                    <div class=" flex flex-col justify-center items-center min-h-screen">
                        <div class="mt-[10px]">
                            <h2 class="text-black text-xl font-bold font-['Poppins']">We'll back.</h2>
                        </div>
                        <div class="mt-[10px]">
                            <h2 class="text-black text-sm font-medium font-['Poppins']">We're busy updating this page for you</h2>
                        </div>
                        <div class="mt-[10px]">
                            <h2 class="text-black text-sm font-medium font-['Poppins']">please check soon.</h2>
                        </div>
                        <div id="countdown" class="countdown">
                            <ul class="flex justify-center space-x-3 pt-6">
                                <li class="flex flex-col justify-center items-center font-medium border border-black rounded-md p-3 text-sm w-16">
                                    <span class="flex justify-center items-center" id="days">00</span>Days
                                </li>
                                <li class="flex flex-col justify-center items-center font-medium border border-black rounded-md p-3 text-sm w-16">
                                    <span class="flex justify-center items-center" id="hours">00</span>Hours
                                </li>
                                <li class="flex flex-col justify-center items-center font-medium border border-black rounded-md p-3 text-sm w-16">
                                    <span class="flex justify-center items-center" id="minutes">00</span>Minutes
                                </li>
                                <li class="flex flex-col justify-center items-center font-medium border border-black rounded-md p-3 text-sm w-16">
                                    <span class="flex justify-center items-center" id="seconds">00</span>Seconds
                                </li>
                            </ul>
                        </div>
                        <div class="social_links flex justify-center space-x-3 pt-6">
                            <a href="http://instagram.com/erigostore" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
                            <a href="https://www.tiktok.com/@erigo.store" target="_blank"><ion-icon name="logo-tiktok"></ion-icon></a>
                            <a href="https://twitter.com/erigostore" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
                            <a href="https://www.youtube.com/c/ErigoOfficial/videos" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
                        </div>
        </section>
    </main>
</body>
</div>
</div>
</body>

<script>
    var daysEL = document.getElementById('days');
    var hoursEL = document.getElementById('hours');
    var minutesEL = document.getElementById('minutes');
    var secondsEL = document.getElementById('seconds');

    function maintenance() {
        const currentDate = new Date(); // Tanggal saat ini
        const targetDate = new Date('06/11/2024'); // Tanggal target
        const difference = targetDate.getTime() - currentDate.getTime(); // Selisih waktu dalam milidetik

        // Konversi selisih waktu menjadi hari, jam, menit, dan detik
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        daysEL.innerText = formatNumber(days);
        hoursEL.innerText = formatNumber(hours);
        minutesEL.innerText = formatNumber(minutes);
        secondsEL.innerText = formatNumber(seconds);
    }

    function formatNumber(number) {
        if (number < 10) {
            return '0' + number;
        }
        return number;
    }

    setInterval(maintenance, 1000)
</script>

</html>