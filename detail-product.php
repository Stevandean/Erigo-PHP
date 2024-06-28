<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Detail Product | Erigo Store"); ?>
</head>

<body>
    <main class="w-full h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>
        <section class="min-h-full flex ">
            <div class="grid xl:grid-cols-5 h-full xl:px-20">
                <div class="flex items-center justify-center h-full xl:col-span-2">
                    <img class="rounded-3xl h-5/6" src="./assets/img/products_1.png" alt="">
                </div>
                <div class="xl:col-span-3 flex flex-col xl:py-16 px-10 space-y-8">
                    <div class="space-y-3 pb-5">
                        <h1 class="text-xl xl:text-3xl font-semibold ">Erigo Last Stock T-Shirt</h1>
                        <div class="flex items-center space-x-2">
                            <span class="text-lg">3.9</span>
                            <div class="flex">
                                <svg width="16" height="16" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5734 1.39057C20.0224 0.00860763 21.9776 0.00861025 22.4266 1.39058L26.2761 13.2381C26.4769 13.8561 27.0528 14.2746 27.7027 14.2746H40.1599C41.613 14.2746 42.2171 16.134 41.0416 16.9881L30.9635 24.3103C30.4377 24.6922 30.2177 25.3693 30.4186 25.9873L34.2681 37.8349C34.7171 39.2168 33.1354 40.366 31.9598 39.5119L21.8817 32.1897C21.3559 31.8078 20.6441 31.8078 20.1183 32.1897L10.0402 39.5119C8.86464 40.366 7.28292 39.2168 7.73195 37.8349L11.5814 25.9873C11.7823 25.3693 11.5623 24.6922 11.0365 24.3103L0.958431 16.9881C-0.217139 16.134 0.387027 14.2746 1.84011 14.2746H14.2973C14.9472 14.2746 15.5231 13.8561 15.7239 13.2381L19.5734 1.39057Z" fill="#FACC15" />
                                </svg>
                                <svg width="16" height="16" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5734 1.39057C20.0224 0.00860763 21.9776 0.00861025 22.4266 1.39058L26.2761 13.2381C26.4769 13.8561 27.0528 14.2746 27.7027 14.2746H40.1599C41.613 14.2746 42.2171 16.134 41.0416 16.9881L30.9635 24.3103C30.4377 24.6922 30.2177 25.3693 30.4186 25.9873L34.2681 37.8349C34.7171 39.2168 33.1354 40.366 31.9598 39.5119L21.8817 32.1897C21.3559 31.8078 20.6441 31.8078 20.1183 32.1897L10.0402 39.5119C8.86464 40.366 7.28292 39.2168 7.73195 37.8349L11.5814 25.9873C11.7823 25.3693 11.5623 24.6922 11.0365 24.3103L0.958431 16.9881C-0.217139 16.134 0.387027 14.2746 1.84011 14.2746H14.2973C14.9472 14.2746 15.5231 13.8561 15.7239 13.2381L19.5734 1.39057Z" fill="#FACC15" />
                                </svg>
                                <svg width="16" height="16" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5734 1.39057C20.0224 0.00860763 21.9776 0.00861025 22.4266 1.39058L26.2761 13.2381C26.4769 13.8561 27.0528 14.2746 27.7027 14.2746H40.1599C41.613 14.2746 42.2171 16.134 41.0416 16.9881L30.9635 24.3103C30.4377 24.6922 30.2177 25.3693 30.4186 25.9873L34.2681 37.8349C34.7171 39.2168 33.1354 40.366 31.9598 39.5119L21.8817 32.1897C21.3559 31.8078 20.6441 31.8078 20.1183 32.1897L10.0402 39.5119C8.86464 40.366 7.28292 39.2168 7.73195 37.8349L11.5814 25.9873C11.7823 25.3693 11.5623 24.6922 11.0365 24.3103L0.958431 16.9881C-0.217139 16.134 0.387027 14.2746 1.84011 14.2746H14.2973C14.9472 14.2746 15.5231 13.8561 15.7239 13.2381L19.5734 1.39057Z" fill="#FACC15" />
                                </svg>
                                <svg width="16" height="16" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5734 1.39057C20.0224 0.00860763 21.9776 0.00861025 22.4266 1.39058L26.2761 13.2381C26.4769 13.8561 27.0528 14.2746 27.7027 14.2746H40.1599C41.613 14.2746 42.2171 16.134 41.0416 16.9881L30.9635 24.3103C30.4377 24.6922 30.2177 25.3693 30.4186 25.9873L34.2681 37.8349C34.7171 39.2168 33.1354 40.366 31.9598 39.5119L21.8817 32.1897C21.3559 31.8078 20.6441 31.8078 20.1183 32.1897L10.0402 39.5119C8.86464 40.366 7.28292 39.2168 7.73195 37.8349L11.5814 25.9873C11.7823 25.3693 11.5623 24.6922 11.0365 24.3103L0.958431 16.9881C-0.217139 16.134 0.387027 14.2746 1.84011 14.2746H14.2973C14.9472 14.2746 15.5231 13.8561 15.7239 13.2381L19.5734 1.39057Z" fill="#D9D9D9" />
                                </svg>
                                <svg width="16" height="16" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5734 1.39057C20.0224 0.00860763 21.9776 0.00861025 22.4266 1.39058L26.2761 13.2381C26.4769 13.8561 27.0528 14.2746 27.7027 14.2746H40.1599C41.613 14.2746 42.2171 16.134 41.0416 16.9881L30.9635 24.3103C30.4377 24.6922 30.2177 25.3693 30.4186 25.9873L34.2681 37.8349C34.7171 39.2168 33.1354 40.366 31.9598 39.5119L21.8817 32.1897C21.3559 31.8078 20.6441 31.8078 20.1183 32.1897L10.0402 39.5119C8.86464 40.366 7.28292 39.2168 7.73195 37.8349L11.5814 25.9873C11.7823 25.3693 11.5623 24.6922 11.0365 24.3103L0.958431 16.9881C-0.217139 16.134 0.387027 14.2746 1.84011 14.2746H14.2973C14.9472 14.2746 15.5231 13.8561 15.7239 13.2381L19.5734 1.39057Z" fill="#D9D9D9" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h1 class="font-semibold tracking-wider text-lg">Size</h1>
                        <div class=" xl:space-x-3 space-y-3 xl:space-y-0">
                            <button class="border border-1 rounded-lg px-8 py-1.5 hover:bg-navy hover:text-white transition-all ease-in-out duration-300 focus:bg-navy focus:text-white">S</button>
                            <button class="border border-1 rounded-lg px-8 py-1.5 hover:bg-navy hover:text-white transition-all ease-in-out duration-300 focus:bg-navy focus:text-white">M</button>
                            <button class="border border-1 rounded-lg px-8 py-1.5 hover:bg-navy hover:text-white transition-all ease-in-out duration-300 focus:bg-navy focus:text-white">L</button>
                            <button class="border border-1 rounded-lg px-8 py-1.5 hover:bg-navy hover:text-white transition-all ease-in-out duration-300 focus:bg-navy focus:text-white">XL</button>
                            <button class="border border-1 rounded-lg px-8 py-1.5 hover:bg-navy hover:text-white transition-all ease-in-out duration-300 focus:bg-navy focus:text-white">XXL</button>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h1 class="font-semibold tracking-wider text-lg">Quantity</h1>
                        <div class="flex">
                            <button onclick="decrement()" type="button" class="w-8 h-8 border rounded-l-md">-</button>
                            <input id="qtyinput" type="text" class="w-16 h-8 text-center border-y" value="1">
                            <button onclick="increment()" class="w-8 h-8 border rounded-r-md">+</button>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h1 class="font-semibold tracking-wider text-lg">Description</h1>
                        <p class="text-wrap">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="space-y-3">
                        <h1 class="font-bold tracking-wider text-lg">Sub Total</h1>
                        <span>Rp.49.000</span>
                    </div>
                    <div class="flex space-x-2 xl:space-x-5 text-white font-bold pb-10 xl:pb-0">
                        <button class="bg-navy px-3 py-1.5 rounded-lg hover:scale-[1.2] transition-all ease-in-out duration-300">Add
                            to cart</button>
                        <button class="bg-gray px-3 py-1.5 rounded-lg hover:scale-[1.2] transition-all ease-in-out duration-300">Buy
                            Now</button>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html>