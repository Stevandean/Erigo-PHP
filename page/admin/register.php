<?php require_once '../../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Register | Admin Panel"); ?>
</head>

<body>
    <main class="bg-[#F9FAFB] w-full min-h-screen flex items-center justify-center font-[Poppins]">
        <section class="bg-white max-w-lg mx-auto rounded-2xl p-[50px] w-5/6 xl:w-full">
            <!-- Logo -->
            <div class="flex items-center justify-center">
                <h1 class="font-['Poppins'] text-black text-4xl font-extrabold">ERIGO</h1>
            </div>
            <!-- Logo end-->
            <!-- title section -->
            <div class="mt-[20px] flex items-center justify-center">
                <h2 class="text-black text-xl font-bold font-['Poppins']">Create your account</h2>
            </div>
            <!-- title section end -->
            <!-- input nama -->
            <form action="../../process/auth/auth-regist-admin.php" method="POST" class="mt-[20px]">
                <div class="flex flex-col items-start mb-[20px]">
                    <label for="name" class="font-['Poppins'] font-medium text-xs mb-2">Name</label>
                    <input type="text" name="name" id="name" class="border border-black rounded-lg w-full h-[35px] px-3">
                </div>
                <div class="flex flex-col items-start mb-[20px]">
                    <label for="address" class="font-['Poppins'] font-medium text-xs mb-2">Address</label>
                    <textarea name="address" id="address" class="border border-black rounded-lg w-full h-[50px] px-3 resize-none"></textarea>
                    <!-- <input type="text" name="address" id="address" class="border border-black rounded-lg w-full h-[50px]"> -->
                </div>
                <div class="flex flex-col items-start mb-[20px]">
                    <label for="phone" class="font-['Poppins'] font-medium text-xs mb-2">Phone</label>
                    <input type="text" name="phone" id="phone" class="border border-black rounded-lg w-full h-[35px] px-3">
                </div>
                <div class="flex flex-col items-start mb-[20px]">
                    <label for="email" class="font-['Poppins'] font-medium text-xs mb-2">Email Address</label>
                    <input type="email" name="email" id="email" class="border border-black rounded-lg w-full h-[35px] px-3">
                </div>
                <div class="flex flex-col items-start mb-[20px]">
                    <label for="password" class="font-['Poppins'] font-medium text-xs mb-2">Password</label>
                    <input type="password" name="password" id="password" class="border border-black rounded-lg w-full h-[35px] px-3">
                </div>
                <div class="flex flex-col items-start mb-[20px]">
                    <label for="confirm_password" class="font-['Poppins'] font-medium text-xs mb-2"> Confirm Password </label>
                    <input type="password" name="confirm_password" id="confirm_password" class="border border-black rounded-lg w-full h-[35px] px-3" />
                </div>
                <div class="flex flex-col items-start mb-[20px]">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 transition-all duration-250 ease-linear text-white h-[35px] mt-[5px] rounded-lg font-['Poppins'] font-semibold flex items-center justify-center">Create Account</button>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p class="font-['Poppins'] font-medium text-sm text-[#757575]">Already have account? <a href="./login.php" class="text-blue-500 hover:text-blue-600 transition-all duration-250 ease-linear">Login</a></p>
                </div>
            </form>
            <!-- input nama -->
        </section>
    </main>
</body>

</html>