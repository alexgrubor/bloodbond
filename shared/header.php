<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBond</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>

    <header class="bg-red-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center relative">
            <a href="/" class="font-bold text-3xl">BloodBond</a>
            <button id="menuToggle" class="text-3xl lg:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <nav id="menu" class="hidden absolute top-10 bg-red-600 w-full p-3 ">
                <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
                <a href="/pages/about-us.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'about-us.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">About
                    Us</a>
                <span class="border-r border-white h-6 mx-2"></span>
                <a href="/pages/why-donate-blood.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'why-donate-blood.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">Why
                    Donate Blood</a>
                <span class="border-r border-white h-6 mx-2"></span>
                <a href="/pages/become-a-donor.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'become-a-donor.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">Become
                    A Donor</a>
                <span class="border-r border-white h-6 mx-2"></span>
                <a href="/pages/need-blood.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'need-blood.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">Need
                    Blood</a>
                <span class="border-r border-white h-6 mx-2"></span>
                <a href="/pages/contact-us.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'contact-us.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">Contact
                    Us</a>
            </nav>
            <nav class="hidden lg:flex lg:items-center flex-col lg:flex-row ">
                <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
                <a href="/pages/about-us.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'about-us.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">About
                    Us</a>
                <span class="border-r border-white h-6 mx-2"></span>
                <a href="/pages/why-donate-blood.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'why-donate-blood.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">Why
                    Donate Blood</a>
                <span class="border-r border-white h-6 mx-2"></span>
                <a href="/pages/become-a-donor.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'become-a-donor.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">Become
                    A Donor</a>
                <span class="border-r border-white h-6 mx-2"></span>
                <a href="/pages/need-blood.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'need-blood.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">Need
                    Blood</a>
                <span class="border-r border-white h-6 mx-2"></span>
                <a href="/pages/contact-us.php"
                    class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'contact-us.php') {
                        echo 'text-red-300 border-red-300';
                    } ?>">Contact
                    Us</a>
            </nav>

        </div>
        <script>
            document.getElementById('menuToggle').addEventListener('click', function () {
                var menu = document.getElementById('menu');
                if (menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                }
            });
        </script>
    </header>