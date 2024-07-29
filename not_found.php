<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Fill the string when you want change title of page -->
    <?php SEO(""); ?>
</head>

<body>
    <main class="w-full min-h-screen font-[Poppins]">

        <section class="some-class">
            <div class="min-h-screen bg-red-500 flex flex-col items-center justify-center mx-auto">
                <img src="./assets/svg/not-found.svg" alt="image" class="w-96 h-96">

                <div class="mt-[10px] flex items-center justify-center">
                    <h2 class="text-navy text-[40px] font-bold font-['Poppins'] leading-none">ERROR 404</h2>
                </div>

                <div class="mt-[10px] flex items-center justify-center">
                    <h2 class="text-black text-[20px] font-medium font-['Poppins']">Page Not Found</h2>
                </div>

                <div class="mt-[10px] flex items-center justify-center">
                    <h2 class="text-gray text-[15px] font-medium font-['Poppins']">Sorry, we couldn't find the page you
                        were looking for</h2>
                </div>

                <div class="mt-[20px] flex items-center justify-center">
                    <a href="/"
                        class="px-5 py-2 bg-navy hover:bg-navy/90 transition-all ease-linear duration-300 rounded-lg text-white text-[15px] font-bold font-['Poppins']">Back
                        To Home</a>
                </div>
            </div>

        </section>

    </main>
</body>

</html>