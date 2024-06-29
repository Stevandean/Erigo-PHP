<div id="sidebar" class="absolute left-0 top-0 z-50 flex min-h-full w-72 flex-col overflow-y-hidden bg-navy duration-300 ease-linear lg:static lg:translate-x-0">
  <div class="flex items-center justify-between xl:justify-center between gap-2 px-6 py-5.5 lg:py-6.5">
    <a href="/">
      <h1 class="text-2xl font-bold text-white mt-5">ERIGO</h1>
    </a>

    <button aria-controls="sidebar" aria-expanded={sidebarOpen} class="block lg:hidden" onclick="setSidebarOpen(!sidebarOpen)">
      <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z" fill="" />
      </svg>
    </button>
  </div>

  <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
    <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6">
      <div>
        <ul class="mb-6 flex flex-col gap-1.5">
          <li class="text-white font-semibold">
            MENU
          </li>
          <li>
            <a href="../dashboard.php" class="text-white group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-semibold duration-300 ease-in-out hover:bg-white dark:hover:bg-blue-900">
              <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z" fill="" />
                <path d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z" fill="" />
                <path d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z" fill="" />
                <path d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z" fill="" />
              </svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="../categories/categories.php" class="text-white group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-semibold duration-300 ease-in-out hover:bg-white dark:hover:bg-blue-900">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M8 6L21 6.00078M8 12L21 12.0008M8 18L21 18.0007M3 6.5H4V5.5H3V6.5ZM3 12.5H4V11.5H3V12.5ZM3 18.5H4V17.5H3V18.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
              Categories
            </a>
          </li>
          <li>
            <a href="../product/product.php" class="text-white group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-semibold duration-300 ease-in-out hover:bg-white dark:hover:bg-blue-900">
              <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <rect x="0" fill="none" width="24" height="24"></rect>
                  <g>
                    <path d="M22 3H2v6h1v11c0 1.105.895 2 2 2h14c1.105 0 2-.895 2-2V9h1V3zM4 5h16v2H4V5zm15 15H5V9h14v11zM9 11h6c0 1.105-.895 2-2 2h-2c-1.105 0-2-.895-2-2z"></path>
                  </g>
                </g>
              </svg>
              Product
            </a>
          </li>
          <li>
            <a href="../user/user.php" class="text-white group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-semibold duration-300 ease-in-out hover:bg-white dark:hover:bg-blue-900">
              <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.00016 8.15625C11.0216 8.15625 12.6562 6.52163 12.6562 4.50016C12.6562 2.47869 11.0216 0.84375 9.00016 0.84375C6.97869 0.84375 5.34375 2.47869 5.34375 4.50016C5.34375 6.52163 6.97869 8.15625 9.00016 8.15625ZM9.00016 2.15625C10.2919 2.15625 11.3438 3.20803 11.3438 4.50016C11.3438 5.79188 10.2919 6.84375 9.00016 6.84375C7.70844 6.84375 6.65625 5.79188 6.65625 4.50016C6.65625 3.20803 7.70844 2.15625 9.00016 2.15625ZM9.00016 9.84375C6.79322 9.84375 2.15625 10.9255 2.15625 13.1252V14.5312C2.15625 14.9302 2.49047 15.2812 2.90625 15.2812C3.32203 15.2812 3.65625 14.9302 3.65625 14.5312V13.1252C3.65625 12.2785 7.05172 11.1562 9.00016 11.1562C10.9486 11.1562 14.3438 12.2785 14.3438 13.1252V14.5312C14.3438 14.9302 14.678 15.2812 15.0938 15.2812C15.5095 15.2812 15.8438 14.9302 15.8438 14.5312V13.1252C15.8438 10.9255 11.2071 9.84375 9.00016 9.84375Z" fill="" />
              </svg>
              User
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>