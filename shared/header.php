<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBond</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<header class="bg-red-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="font-bold text-3xl">BloodBond</a>
        <nav class="flex items-center">
            <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
            <a href="/pages/about-us.php" class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'about-us.php') { echo 'text-red-300 border-red-300'; } ?>">About Us</a>
            <span class="border-r border-white h-6 mx-2"></span>
            <a href="/pages/why-donate-blood.php" class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'why-donate-blood.php') { echo 'text-red-300 border-red-300'; } ?>">Why Donate Blood</a>
            <span class="border-r border-white h-6 mx-2"></span>
            <a href="/pages/become-a-donor.php" class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'become-a-donor.php') { echo 'text-red-300 border-red-300'; } ?>">Become A Donor</a>
            <span class="border-r border-white h-6 mx-2"></span>
            <a href="/pages/need-blood.php" class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'need-blood.php') { echo 'text-red-300 border-red-300'; } ?>">Need Blood</a>
            <span class="border-r border-white h-6 mx-2"></span>
            <a href="/pages/contact-us.php" class="hover:text-red-300 text-2xl transition-colors border-b-2 border-transparent hover:border-red-300 <?php if ($currentPage == 'contact-us.php') { echo 'text-red-300 border-red-300'; } ?>">Contact Us</a>
        </nav>
    </div>
</header>



