<?php
session_start();

if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] != true) {
  header("Location: ./login.php");
  exit();
}
?>

<?php require_once '../../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php SEO("Dashboard | Admin Panel"); ?>
</head>

<body>
  <div class="flex font-[Poppins]">
    <?php include_once  '../../components/core/sidebar.php'; ?>
    <main class="w-full min-h-screen bg-slate-100">
      <?php include_once  '../../components/core/header.php'; ?>
      <section class="max-w-7xl mx-auto mt-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
          <div class="card-data-stats bg-danger">
            <div class="card-title text-white">Total Categories</div>
            <div class="card-total text-white">10</div>
            <svg class="fill-white" width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z" fill=""></path>
              <path d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z" fill=""></path>
            </svg>
          </div>
          <div class="card-data-stats bg-warning">
            <div class="card-title text-white">Total Product</div>
            <div class="card-total text-white">10</div>
            <svg class="fill-white" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21.1063 18.0469L19.3875 3.23126C19.2157 1.71876 17.9438 0.584381 16.3969 0.584381H5.56878C4.05628 0.584381 2.78441 1.71876 2.57816 3.23126L0.859406 18.0469C0.756281 18.9063 1.03128 19.7313 1.61566 20.3844C2.20003 21.0375 2.99066 21.3813 3.85003 21.3813H18.1157C18.975 21.3813 19.8 21.0031 20.35 20.3844C20.9 19.7656 21.2094 18.9063 21.1063 18.0469ZM19.2157 19.3531C18.9407 19.6625 18.5625 19.8344 18.15 19.8344H3.85003C3.43753 19.8344 3.05941 19.6625 2.78441 19.3531C2.50941 19.0438 2.37191 18.6313 2.44066 18.2188L4.12503 3.43751C4.19378 2.71563 4.81253 2.16563 5.56878 2.16563H16.4313C17.1532 2.16563 17.7719 2.71563 17.875 3.43751L19.5938 18.2531C19.6282 18.6656 19.4907 19.0438 19.2157 19.3531Z" fill=""></path>
              <path d="M14.3345 5.29375C13.922 5.39688 13.647 5.80938 13.7501 6.22188C13.7845 6.42813 13.8189 6.63438 13.8189 6.80625C13.8189 8.35313 12.547 9.625 11.0001 9.625C9.45327 9.625 8.1814 8.35313 8.1814 6.80625C8.1814 6.6 8.21577 6.42813 8.25015 6.22188C8.35327 5.80938 8.07827 5.39688 7.66577 5.29375C7.25327 5.19063 6.84077 5.46563 6.73765 5.87813C6.6689 6.1875 6.63452 6.49688 6.63452 6.80625C6.63452 9.2125 8.5939 11.1719 11.0001 11.1719C13.4064 11.1719 15.3658 9.2125 15.3658 6.80625C15.3658 6.49688 15.3314 6.1875 15.2626 5.87813C15.1595 5.46563 14.747 5.225 14.3345 5.29375Z" fill=""></path>
            </svg>
          </div>

          <div class="card-data-stats bg-success">
            <div class="card-title text-white">Total Transaction</div>
            <div class="card-total text-white">10</div>
            <svg class="fill-white" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.7531 16.4312C10.3781 16.4312 9.27808 17.5312 9.27808 18.9062C9.27808 20.2812 10.3781 21.3812 11.7531 21.3812C13.1281 21.3812 14.2281 20.2812 14.2281 18.9062C14.2281 17.5656 13.0937 16.4312 11.7531 16.4312ZM11.7531 19.8687C11.2375 19.8687 10.825 19.4562 10.825 18.9406C10.825 18.425 11.2375 18.0125 11.7531 18.0125C12.2687 18.0125 12.6812 18.425 12.6812 18.9406C12.6812 19.4219 12.2343 19.8687 11.7531 19.8687Z" fill=""></path>
              <path d="M5.22183 16.4312C3.84683 16.4312 2.74683 17.5312 2.74683 18.9062C2.74683 20.2812 3.84683 21.3812 5.22183 21.3812C6.59683 21.3812 7.69683 20.2812 7.69683 18.9062C7.69683 17.5656 6.56245 16.4312 5.22183 16.4312ZM5.22183 19.8687C4.7062 19.8687 4.2937 19.4562 4.2937 18.9406C4.2937 18.425 4.7062 18.0125 5.22183 18.0125C5.73745 18.0125 6.14995 18.425 6.14995 18.9406C6.14995 19.4219 5.70308 19.8687 5.22183 19.8687Z" fill=""></path>
              <path d="M19.2126 8.75941C18.8094 8.30941 18.2313 8.05316 17.6188 8.05316H16.0375V6.1063C16.0375 3.39066 13.9532 1.14379 11.2375 0.850041C10.5344 0.781291 9.78441 0.837541 9.10628 1.01879C7.82503 1.35504 6.72503 2.07816 5.99378 3.11254C5.35628 2.01254 4.20003 1.35004 2.91878 1.35004H1.28753C0.684404 1.35004 0.200028 1.83441 0.200028 2.43754C0.200028 3.04066 0.684404 3.52504 1.28753 3.52504H2.91878C3.90316 3.52504 4.70003 4.32191 4.70003 5.30629V17.2907C4.70003 18.675 5.83128 19.825 7.21565 19.8688C7.91878 19.8969 8.66878 19.8407 9.34691 19.6594C10.6532 19.3063 11.7407 18.5344 12.475 17.4875C13.1313 18.4875 14.2313 19.1313 15.4875 19.225C15.5375 19.2312 15.5907 19.2312 15.6469 19.2312H17.5969C18.2063 19.2312 18.7875 18.975 19.1907 18.5219C19.6063 18.0562 19.8188 17.4219 19.7875 16.7594C19.7375 15.875 19.1781 15.1094 18.3563 14.8063C19.2157 14.5063 19.7938 13.6688 19.7938 12.7094C19.7938 11.6125 19.1157 10.6844 18.1188 10.3438C18.9969 9.92191 19.5344 9.08129 19.5344 8.13129C19.5344 8.00629 19.5282 8.11879 19.2126 8.75941ZM14.3938 7.08754H7.68128V4.88129C8.14378 4.16879 8.87816 3.66254 9.75316 3.46879C10.9719 3.20941 12.2063 3.48129 13.075 4.21566C13.8219 4.81879 14.3938 5.81879 14.3938 6.94691V7.08754ZM11.975 17.2212C11.4875 17.6781 10.8469 17.925 10.1625 17.8562C9.08753 17.7594 8.25628 16.8688 8.25628 15.7969V9.63129H11.7688C12.7438 9.63129 13.5 10.3875 13.5 11.3625C13.5 12.2062 12.7781 12.9281 11.9344 12.9312H9.88128C9.27816 12.9312 8.79378 13.4157 8.79378 14.0188C8.79378 14.6219 9.27816 15.1063 9.88128 15.1063H11.7875C12.5532 15.1063 13.2907 15.2938 13.9594 15.6532C14.0063 16.6657 13.6125 17.6281 12.8625 18.2712V18.2712Z" fill=""></path>
            </svg>
          </div>

          <div class="card-data-stats bg-info">
            <div class="card-title text-white">Total User</div>
            <div class="card-total text-white">10</div>
            <svg class="fill-white" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 9.53755C11.5406 9.53755 13.5 7.53754 13.5 5.03754C13.5 2.53754 11.5406 0.537537 9 0.537537C6.45997 0.537537 4.49997 2.53754 4.49997 5.03754C4.49997 7.53754 6.45997 9.53755 9 9.53755ZM9 2.08754C10.3687 2.08754 11.5 3.21879 11.5 4.58754C11.5 5.95629 10.3687 7.08755 9 7.08755C7.63122 7.08755 6.49997 5.95629 6.49997 4.58754C6.49997 3.21879 7.63122 2.08754 9 2.08754ZM11.25 11.0813H6.75C4.54059 11.0813 2.75 12.8875 2.75 15.0938V17.5375C2.75 18.3344 3.41562 19.0031 4.21247 19.0031H13.7875C14.5844 19.0031 15.25 18.3344 15.25 17.5375V15.0938C15.25 12.8875 13.4594 11.0813 11.25 11.0813ZM4.25 17.5375V15.0938C4.25 13.6907 5.35622 12.5875 6.75 12.5875H11.25C12.6437 12.5875 13.75 13.6907 13.75 15.0938V17.5375H4.25Z" fill=""></path>
            </svg>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>

</html>