<?php require_once '../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Users | ERIGO STORE"); ?>
</head>

<body>
    <div class="flex">
        <?php include_once  '../components/core/sidebar.php'; ?>
        <main class="w-full h-screen font-[Poppins]">
            <?php include_once  '../components/core/header.php'; ?>
            <section>
                <div class="container">
                    <table class="w-full mb-6">
                        <thead class="rounded-sm bg-gray/10">
                            <tr>
                                <th class="p-2 text-center xl:p-5">
                                    <h5 class="text-sm font-medium uppercase xsm:text-base">
                                        Name
                                    </h5>
                                </th>
                                <th class="p-2 text-center xl:p-5">
                                    <h5 class="text-sm font-medium uppercase xsm:text-base">
                                        Address
                                    </h5>
                                </th>
                                <th class="p-2 text-center xl:p-5">
                                    <h5 class="text-sm font-medium uppercase xsm:text-base">
                                        Phone
                                    </h5>
                                </th>
                                <th class="p-2 text-center xl:p-5">
                                    <h5 class="text-sm font-medium uppercase xsm:text-base">
                                        Email
                                    </h5>
                                </th>
                                <th class="p-2 text-center xl:p-5">
                                    <h5 class="text-sm font-medium uppercase xsm:text-base">
                                        Role
                                    </h5>
                                </th>
                                <th class="p-2 text-center xl:p-5">
                                    <h5 class="text-sm font-medium uppercase xsm:text-base">
                                        Action
                                    </h5>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <td class="flex items-center justify-center gap-3 p-2 xl:p-5">
                                <div class="flex-shrink-0">
                                    <img src="{
                            a?.pict
                              ? a?.pict
                              : `https://ui-avatars.com/api/?name=${a?.name}`
                          }" alt="Avatar" width={48} height={48} class="rounded-full" />
                                </div>
                                <p class="text-black">name</p>
                            </td>

                            <td class="p-2 xl:p-5">
                                <p class="text-center text-black">address</p>
                            </td>

                            <td class="p-2 xl:p-5">
                                <p class="text-center text-black">phone</p>
                            </td>

                            <td class="p-2 xl:p-5">
                                <p class="text-center text-black">email</p>
                            </td>

                            <td class="p-2 xl:p-5">
                                <div class="flex items-center justify-center">
                                    <Badge class="capitalize bg-blue-500 hover:bg-blue-500 dark:text-white">role
                                    </Badge>
                                </div>
                            </td>

                            <td class="p-2 xl:p-5">
                                <div class="flex items-center justify-center gap-3">
                                    <Link href="/" class="flex items-center justify-center bg-yellow px-3 py-2 rounded-lg w-auto">
                                    <FaEdit class="text-white" />
                                    </Link>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>

</html>