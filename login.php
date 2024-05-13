<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO(""); ?>
</head>

<body>
    <main class="bg-[#F9FAFB] w-full min-h-screen flex items-center justify-center font-[Poppins]">

        <section class="bg-white max-w-lg mx-auto rounded-2xl p-[50px] w-5/6 xl:w-full">
            <!-- Logo -->
            <div class="flex items-center justify-center">
                <h1 class="font-['Poppins'] text-black text-4xl font-extrabold">ERIGO</h1>
            </div>
            <!-- Logo End -->

            <!-- Title Section -->
            <div class="mt-[20px] flex items-center justify-center">
                <h2 class="text-black text-xl font-bold font-['Poppins']">Login to your account</h2>
            </div>
            <!-- Title Section End -->

            <!-- Form Data -->
            <form action="./process/auth/auth_login.php" method="POST" class="mt-[20px]">
                <div class="flex flex-col items-start mb-[20px]">
                    <label for="email" class="font-['Poppins'] font-medium text-sm mb-2">Email Address</label>
                    <input type="email" name="email" id="email" class="border border-black rounded-lg w-full h-[35px] px-3">
                </div>

                <div class="flex flex-col items-start mb-[20px]">
                    <div class="flex items-center justify-between mb-2 w-full">
                        <label for="password" class="font-['Poppins'] font-medium text-sm">Password</label>
                        <a href="#" class="font-['Poppins'] font-medium text-sm text-blue-500 hover:text-blue-600 transition-all duration-250 ease-linear">Forgot Password?</a>
                    </div>
                    <input type="password" name="password" id="password" class="border border-black rounded-lg w-full h-[35px] px-3">
                </div>

                <div class="flex flex-col items-start mb-[20px]">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 transition-all duration-250 ease-linear text-white h-[35px] rounded-lg font-['Poppins'] font-semibold flex items-center justify-center">Login</button>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <p class="font-['Poppins'] font-medium text-sm text-[#757575]">Don't have account? <a href="./sign_up.html" class="text-blue-500 hover:text-blue-600 transition-all duration-250 ease-linear">Create Account</a></p>
                </div>
            </form>
            <!-- Form Data End -->
        </section>

    </main>
</body>

</html>