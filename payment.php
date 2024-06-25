<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Payment | Erigo Store"); ?>
</head>

<body>
    <main class="w-full min-h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>

        <section class="min-h-full flex flex-col p-10">
            <h1 class="text-2xl font-extrabold uppercase mb-10">Payment Method</h1>
            <div class="space-y-10 xl:px-10">
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-x-28 space-y-7 xl:space-y-4">
                    <div class="flex flex-col justify-center">
                        <span class="font-medium">Name</span>
                        <div class="flex border py-1.5 px-3 rounded-md space-x-3">
                            <svg width="30" height="30" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31.3503 33.275C31.1462 33.2458 30.8837 33.2458 30.6503 33.275C25.517 33.1 21.4336 28.9 21.4336 23.7374C21.4336 18.4583 25.692 14.1708 31.0003 14.1708C36.2795 14.1708 40.567 18.4583 40.567 23.7374C40.5378 28.9 36.4837 33.1 31.3503 33.275Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M50.6584 52.5253C45.4668 57.2795 38.5834 60.167 31.0001 60.167C23.4168 60.167 16.5335 57.2795 11.3418 52.5253C11.6335 49.7836 13.3835 47.1003 16.5043 45.0003C24.496 39.692 37.5626 39.692 45.4959 45.0003C48.6168 47.1003 50.3668 49.7836 50.6584 52.5253Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M31.0006 60.1667C47.1088 60.1667 60.1673 47.1082 60.1673 31C60.1673 14.8917 47.1088 1.83333 31.0006 1.83333C14.8923 1.83333 1.83398 14.8917 1.83398 31C1.83398 47.1082 14.8923 60.1667 31.0006 60.1667Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="" id="" placeholder="Ainu Azaria" class="px-2 focus:outline-none w-full">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-medium">Phone</span>
                        <div class="flex border py-1.5 px-3 rounded-md space-x-3">
                            <svg width="30" height="30" viewBox="0 0 58 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.5022 37.5151L40.8307 36.1942L37.7458 33.0917L36.4175 34.4127L39.5022 37.5151ZM45.2921 35.6409L50.8644 38.6701L52.9539 34.8265L47.3816 31.7973L45.2921 35.6409ZM51.9371 44.6907L47.7937 48.8105L50.8784 51.913L55.0218 47.7932L51.9371 44.6907ZM45.269 50.137C41.0402 50.531 30.0992 50.1799 18.2533 38.4012L15.1686 41.5037C28.0954 54.3571 40.3988 54.9848 45.675 54.493L45.269 50.137ZM18.2533 38.4012C6.96182 27.1738 5.09139 17.7306 4.85856 13.6339L0.490616 13.8821C0.783624 19.0383 3.09966 29.5033 15.1686 41.5037L18.2533 38.4012ZM22.2647 20.3754L23.1012 19.5436L20.0165 16.4412L19.18 17.273L22.2647 20.3754ZM23.7671 8.94086L20.0893 4.02803L16.587 6.64993L20.2647 11.5628L23.7671 8.94086ZM7.71966 2.95872L3.14166 7.51073L6.22645 10.6131L10.8044 6.06112L7.71966 2.95872ZM20.7224 18.8242C19.18 17.273 19.1779 17.275 19.1758 17.2771C19.1751 17.2778 19.173 17.28 19.1716 17.2814C19.1687 17.2843 19.1658 17.2872 19.1629 17.2902C19.1569 17.2962 19.1508 17.3025 19.1445 17.309C19.1319 17.3221 19.1185 17.3363 19.1045 17.3516C19.0763 17.3821 19.0454 17.4171 19.0124 17.4565C18.9462 17.5354 18.8713 17.6326 18.7926 17.7488C18.6347 17.9818 18.4626 18.2899 18.3167 18.6774C18.0188 19.4679 17.8591 20.5101 18.0593 21.8006C18.4508 24.3243 20.1889 27.658 24.6412 32.0849L27.7259 28.9824C23.5594 24.8396 22.5669 22.3184 22.3825 21.1298C22.2947 20.5642 22.3857 20.2858 22.4108 20.2199C22.426 20.1791 22.4333 20.175 22.4146 20.2028C22.4053 20.2164 22.3898 20.2378 22.3656 20.2665C22.3537 20.2809 22.3394 20.2971 22.3227 20.3153C22.3143 20.3243 22.3055 20.3339 22.2956 20.3439C22.2909 20.3489 22.286 20.354 22.2807 20.3593C22.2781 20.3619 22.2755 20.3645 22.2729 20.3672C22.2717 20.3686 22.2697 20.3706 22.2688 20.3713C22.2667 20.3733 22.2647 20.3754 20.7224 18.8242ZM24.6412 32.0849C29.0949 36.5132 32.4442 38.2367 34.972 38.6246C36.2638 38.8227 37.3054 38.6646 38.0955 38.3703C38.4828 38.2259 38.7914 38.0559 39.0247 37.8995C39.1414 37.8214 39.2388 37.747 39.3179 37.6814C39.3575 37.6487 39.3925 37.6181 39.4232 37.5901C39.4386 37.5761 39.4529 37.563 39.466 37.5504C39.4727 37.544 39.4789 37.5379 39.485 37.532C39.4879 37.5291 39.4908 37.5262 39.4937 37.5233C39.4952 37.5218 39.4975 37.5198 39.4981 37.5192C39.5002 37.5172 39.5022 37.5151 37.9599 35.9637C36.4175 34.4127 36.4196 34.4106 36.4216 34.4086C36.4222 34.408 36.4242 34.406 36.4257 34.4045C36.4283 34.4019 36.431 34.3992 36.4336 34.3966C36.4391 34.3917 36.4441 34.3867 36.449 34.3817C36.4592 34.3721 36.4689 34.3634 36.4779 34.3549C36.496 34.3386 36.5123 34.3243 36.5269 34.3126C36.5555 34.2887 36.5768 34.2735 36.5899 34.2645C36.617 34.2464 36.6115 34.2546 36.5683 34.2706C36.4969 34.2972 36.2107 34.3885 35.6356 34.3001C34.4301 34.1155 31.8912 33.1238 27.7259 28.9824L24.6412 32.0849ZM20.0893 4.02803C17.1163 0.0567223 11.2702 -0.571674 7.71966 2.95872L10.8044 6.06112C12.3552 4.51916 15.1093 4.67611 16.587 6.64993L20.0893 4.02803ZM4.85856 13.6339C4.80119 12.6244 5.26418 11.5699 6.22645 10.6131L3.14166 7.51073C1.57448 9.06902 0.34242 11.2749 0.490616 13.8821L4.85856 13.6339ZM47.7937 48.8105C46.9922 49.6076 46.133 50.0565 45.269 50.137L45.675 54.493C47.8176 54.2933 49.5732 53.2109 50.8784 51.913L47.7937 48.8105ZM23.1012 19.5436C25.9727 16.6884 26.1862 12.1722 23.7671 8.94086L20.2647 11.5628C21.4416 13.1348 21.2666 15.1982 20.0165 16.4412L23.1012 19.5436ZM50.8644 38.6701C53.2496 39.9669 53.6212 43.016 51.9371 44.6907L55.0218 47.7932C58.931 43.9061 57.7255 37.4203 52.9539 34.8265L50.8644 38.6701ZM40.8307 36.1942C41.9507 35.0806 43.7535 34.8047 45.2921 35.6409L47.3816 31.7973C44.2211 30.0791 40.2987 30.5536 37.7458 33.0917L40.8307 36.1942Z" fill="black" />
                            </svg>
                            <input type="text" name="" id="" placeholder="+62 821-4073-9892" class="px-2 focus:outline-none w-full">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-medium">Email</span>
                        <div class="flex border py-1.5 px-3 rounded-md space-x-3">
                            <svg width="30" height="30" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.666 20.4168L29.7493 33.9792C32.8606 36.3125 37.1381 36.3125 40.2493 33.9792L58.3327 20.4167" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M55.4167 14.5833H14.5833C11.3617 14.5833 8.75 17.195 8.75 20.4167V49.5833C8.75 52.805 11.3617 55.4167 14.5833 55.4167H55.4167C58.6383 55.4167 61.25 52.805 61.25 49.5833V20.4167C61.25 17.195 58.6383 14.5833 55.4167 14.5833Z" stroke="black" stroke-width="3" stroke-linecap="round" />
                            </svg>
                            <input type="text" name="" id="" placeholder="ainu.azaria@gmail.com" class="px-2 focus:outline-none w-full">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center xl:col-span-2">
                        <span class="font-medium">Address</span>
                        <div class="flex border py-1.5 px-3 rounded-md space-x-3">
                            <svg width="30" height="30" viewBox="0 0 44 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9922 -0.0078125C9.8656 -0.0078125 -0.00585408 9.86368 -0.00585937 21.9902C-0.00586693 43.3277 20.752 59.5493 20.752 59.5493C21.1064 59.832 21.5462 59.986 21.9996 59.986C22.4529 59.986 22.8927 59.832 23.2471 59.5493C23.2471 59.5493 44.005 43.3277 44.005 21.9902C44.0049 9.86368 34.1187 -0.0078125 21.9922 -0.0078125ZM21.9922 3.99317C31.957 3.99317 40.004 12.0254 40.004 21.9902C40.004 39.446 24.1975 53.2374 22.0069 55.1054C19.8268 53.2468 3.99512 39.4528 3.99512 21.9902C3.99513 12.0254 12.0274 3.99317 21.9922 3.99317Z" fill="black" />
                                <path d="M21.9931 11.9951C16.494 11.9951 11.9981 16.4911 11.998 21.9902C11.998 27.4894 16.4939 32 21.9931 32C27.4923 32 32.003 27.4894 32.003 21.9902C32.003 16.4911 27.4923 11.9951 21.9931 11.9951ZM21.9931 15.9961C25.3305 15.9961 28.002 18.6528 28.002 21.9902C28.002 25.3276 25.3305 27.9991 21.9931 27.9991C18.6557 27.9991 15.999 25.3276 15.999 21.9902C15.999 18.6528 18.6557 15.9961 21.9931 15.9961Z" fill="black" />
                            </svg>
                            <input type="text" name="" id="" placeholder="Gang Mirej 01 No. 84, Madyopuro, Kedungkandang, Jawa Timur, 65139" class="px-2 focus:outline-none w-full">
                        </div>
                    </div>
                </div>
                <div class="space-y-3">
                    <span class="text-xl font-semibold">Payment</span>
                    <div class="flex flex-col bg-[#F7F9FC] rounded-xl py-10 px-20">
                        <div class="flex space-x-10">
                            <span class="font-semibold mt-0.5">Product</span>
                            <table class="table-fixed w-full">
                                <tbody>
                                    <tr class="font-semibold text-lg flex flex-row justify-between items-start">
                                        <td class="w-[40%] flex justify-start">
                                            <div class="flex flex-col">
                                                <span>Erigo T-Shirt Basic Olive White Unisex</span>
                                                <span class="text-gray text-base font-normal mb-5">Size : XL</span>
                                            </div>
                                        </td>
                                        <td class="w-[20%] flex justify-center">
                                            <span>x1</span>
                                        </td>
                                        <td class="w-[40%] flex justify-end">
                                            <span>Rp. 250.000</span>
                                        </td>
                                    </tr>
                                    <tr class="font-semibold text-lg flex flex-row items-start">
                                        <td class="w-[40%] flex justify-start">
                                            <div class="flex flex-col">
                                                <span>Erigo Chino Pants Sirius Black</span>
                                                <span class="text-gray text-base font-normal mb-5">Size : 32</span>
                                            </div>
                                        </td>
                                        <td class="w-[20%] flex justify-center">
                                            <span>x1</span>
                                        </td>
                                        <td class="w-[40%] flex justify-end">
                                            <span>Rp. 500.000</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="border w-full border-[#757575]">
                        <div class="flex justify-between mt-3 text-lg">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold">Rp. 750.000</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-semibold">Select Method</span>
                    <div class="w-36 text-lg font-medium flex justify-between">
                        <span>QRIS</span>
                        <span>></span>
                    </div>
                    <div class="flex justify-end items-center space-x-3">
                        <span class="font-semibold text-lg">Total : Rp.752.999</span>
                        <button class="text-white bg-navy rounded-md px-3 py-2">
                            <a href="./qris.html">
                                Payment
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html>