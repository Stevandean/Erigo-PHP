<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <?php SEO("Profile Setting | ERIGO STORE"); ?>
</head>

<body>
    <main class="w-full h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>

        <section class="min-h-full p-10">
            <h1 class="font-['Poppins'] text-black text-2xl font-extrabold place-items-end p-[5px] flex items-center mb-7 xl:mb-0 xl:ml-[17px] uppercase">
                profile setting</h1>
            <form class="w-full flex flex-col justify-center items-center space-y-8">
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Photo</span>
                    <input class="border rounded-lg py-1.5 px-3" type="file">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-1">
                    <span class="font-semibold">Name</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="text">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Address</span>
                    <input class="border bg-white rounded-md h-[50px]" type="text">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Region</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="text">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Postal Code</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="text" maxlength="6" size="6">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Phone</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="text">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Email Address</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="email">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Password</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="password">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Confirm Password</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="password">
                </div>
                <div class="flex justify-end w-5/6 xl:w-2/4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-20 flex-col items-center justify-center">
                        Button
                    </button>
                </div>
            </form>
        </section>

        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>
</html>