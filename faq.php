<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("FAQ | Erigo Store"); ?>
</head>

<body>
    <main class="w-full min-h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>
        <section class="h-50 mb-10">
            <h1 class="text-2xl font-extrabold p-10 uppercase">Frequently Asked Questions (FAQ)</h1>
            <div class="grid grid-cols-2">
                <div class="w-full lg:w-1/2 p-30">
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer1', 'arrow1')">
                            <p class="text-md font-bold px-5">If I forget my password, what should I do?</p>
                            <svg id="arrow1" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer1" class="dropdown-content">
                            <p class="text-md px-20">You can contact our customer service team via email or <br>
                                the phone number listed on our website.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer2', 'arrow2')">
                            <p class="text-md font-bold px-5">Do I need an account to place an order?</p>
                            <svg id="arrow2" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer2" class="dropdown-content">
                            <p class="text-md px-20">Yes, by creating an account, we can identify your location<br>
                                and contact you if your order is to be shipped.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer3', 'arrow3')">
                            <p class="text-md font-bold px-5">Does ERIGO have social media?</p>
                            <svg id="arrow3" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer3" class="dropdown-content">
                            <p class="text-md px-20">Yes, we do. You can find it on our website.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer4', 'arrow4')">
                            <p class="text-md font-bold px-5">How do I pay for my order?</p>
                            <svg id="arrow4" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer4" class="dropdown-content">
                            <p class="text-md px-20">You can pay for your order through E-Wallet.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer5', 'arrow5')">
                            <p class="text-md font-bold px-5">Does the store accept credit card payments?</p>
                            <svg id="arrow5" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer5" class="dropdown-content">
                            <p class="text-md px-20">Not at the moment, we only accept E-Wallet payments.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer6', 'arrow6')">
                            <p class="text-md font-bold px-5">Can I exchange the size or model of the item after purchase?</p>
                            <svg id="arrow6" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer6" class="dropdown-content">
                            <p class="text-md px-20">Yes, we accept exchanges of size or model within 14 days of<br>
                                purchase, provided the item is still in new condition and has not<br>
                                been used.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-30">
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer7', 'arrow7')">
                            <p class="text-md font-bold px-5">Is shopping at ERIGO safe?</p>
                            <svg id="arrow7" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer7" class="dropdown-content">
                            <p class="text-md px-20">At ERIGO, your security is our top priority.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer8', 'arrow8')">
                            <p class="text-md font-bold px-5">Is there a customer service that I can contact if I have
                                questions<br>
                                or issues with my order?</p>
                            <svg id="arrow8" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer8" class="dropdown-content">
                            <p class="text-md px-20">Yes, we have a customer service team ready to assist you with<br>
                                any questions or issues you may have. Please contact us via<br>
                                email or the phone number listed on our website.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer9', 'arrow9')">
                            <p class="text-md font-bold px-5">How can I get information about new products or the
                                latest<br>
                                collections?</p>
                            <svg id="arrow9" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer9" class="dropdown-content">
                            <p class="text-md px-20">You can sign up to receive email updates from us to get<br>
                                information about our new products or latest collections.<br>
                                Additionally, you can also visit our website regularly or follow our<br>
                                social media accounts for updates.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer10', 'arrow10')">
                            <p class="text-md font-bold px-5">Does the store offer any special discounts or promotions?</p>
                            <svg id="arrow10" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer10" class="dropdown-content">
                            <p class="text-md px-20">Does the store offer any special discounts or promotions?</p>
                            <p class="text-md px-20">Yes, we periodically offer discounts and special promotions to<br>
                                our customers. Be sure to join us or follow our social media<br>
                                accounts to get updates about our offers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="h-50 mb-10">
            <h1 class="text-2xl font-extrabold p-10 uppercase">Payment Information</h1>
            <div class="grid grid-cols-2 flex flex-col lg:flex-row mb-[100px] px-20">
                <div class="w-full lg:w-1/2">
                    <h2 class="text-xl font-bold uppercase">e-wallet</h2>
                    <div class="flex flex-col lg:flex-row items-center justify-center gap-[50px] mt-[50px]">
                        <div class="border-[3px] border-[#F2F2F2] rounded-md w-28 h-28 p-3">
                            <img class="flex items-center justify-center mt-2" src="./assets/img/dana.png" alt="">
                        </div>
                        <div class="border-[3px] border-[#F2F2F2] rounded-md w-28 h-28 p-3">
                            <img class="flex items-center justify-center mt-7" src="./assets/img/shopeepay.png" alt="">
                        </div>
                        <div class="border-[3px] border-[#F2F2F2] rounded-md w-28 h-28 p-3">
                            <img class="flex items-center justify-center mt-7" src="./assets/img/truemoney.png" alt="">
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row items-center justify-center gap-[50px] mt-[30px]">
                        <div class="border-[3px] border-[#F2F2F2] rounded-md w-28 h-28">
                            <img class="flex items-center justify-center mt-1" src="./assets/img/gopay.png" alt="">
                        </div>
                        <div class="border-[3px] border-[#F2F2F2] rounded-md w-28 h-28 p-3">
                            <img class="flex items-center justify-center mt-1" src="./assets/img/astrapay.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 p-30">
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer11', 'arrow11')">
                            <p class="text-md font-bold px-5">What payment methods can I use to make purchases?</p>
                            <svg id="arrow11" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer11" class="dropdown-content">
                            <p class="text-md px-20">We offer the following methods of payment: E-Wallet.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer12', 'arrow12')">
                            <p class="text-md font-bold px-5">Can I get an invoice in my company's name?</p>
                            <svg id="arrow12" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer12" class="dropdown-content">
                            <p class="text-md px-20">Yes. You just need to tick the "COMPANY" box in the personal information section and enter the
                                tax information requested.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer13', 'arrow13')">
                            <p class="text-md font-bold px-5">What should I do if I see a double charge for an order?</p>
                            <svg id="arrow13" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer13" class="dropdown-content">
                            <p class="text-md px-20">In this event, please contact our Customer Service department.</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="flex items-center ml-14" onclick="toggleDropdown('answer14', 'arrow14')">
                            <p class="text-md font-bold px-5">Can I pay in the store when I receive the order?</p>
                            <svg id="arrow14" class="w-7 h-7 transform -rotate-90 transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="answer14" class="dropdown-content">
                            <p class="text-md px-20">In order to complete the order, payment must be made online and it is not possible to pay in the
                                store when you receive the order. However, you have the option to try on the items in the store
                                when you pick up your order and return any items with which you are unhappy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html>