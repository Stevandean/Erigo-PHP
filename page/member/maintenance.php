<?php require_once '../../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Fill the string when you want change title of page -->
    <?php SEO("Maintenance | Erigo Store"); ?>
</head>

<body>
    <main class="w-full min-h-screen flex items-center justify-center font-[Poppins]">

        <section class="p-[50px] w-5/6 xl:w-ful">
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
<div class="social_links flex justify-center space-x-3 pt-6">
    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
</div>

</div>
</div>
<script>
    var daysEL = document.getElementById('days');
    var hoursEL = document.getElementById('hours');
    var minutesEL = document.getElementById('minutes');
    var secondsEL = document.getElementById('seconds');

    function maintenance() {
        const currentDate = new Date(); // Tanggal saat ini
        const targetDate = new Date('12/30/2024'); // Tanggal target
        const difference = targetDate.getTime() - currentDate.getTime(); // Selisih waktu dalam milidetik

        // Konversi selisih waktu menjadi hari, jam, menit, dan detik
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        // Menampilkan jumlah hari, jam, menit, dan detik yang tersisa
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