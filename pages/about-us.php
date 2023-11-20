<?php require('../shared/header.php') ?>
<style>
    .red-shadow {
        box-shadow: 0 4px 14px 0 rgba(225, 29, 72, 0.4);
    }
</style>
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-red-600 text-center mb-8">About Us</h2>

    <section class="mb-6 flex flex-col md:flex-row justify-center items-center mx-auto w-full md:w-3/4 lg:w-3/4">
        <div class="md:w-1/2">
            <h3 class="text-2xl font-semibold mb-2">Welcome to BloodBond - Your Trusted Blood Bank and Donation Management System</h3>
            <p class="text-gray-700 text-lg mb-4">At BloodBond, we are dedicated to the crucial task of managing and preserving life's most vital resource: blood. Our system is not just a repository; it's a beacon of hope for those in need and a testament to the generosity of our donors.</p>
        </div>
        <img src="../images/about-us.png" alt="about-us" class="block w-full md:w-[400px] md:ml-6">
    </section>

   
    <section class="mb-6 bg-gray-100 p-4 red-shadow rounded-lg shadow mx-auto w-full md:w-3/4 lg:w-3/4">
        <h3 class="text-2xl font-semibold mb-2">Our Mission: Ensuring Safe and Efficient Blood Management</h3>
        <p class="text-gray-700 text-lg mb-4">BloodBond serves as an integral part of hospital laboratories, specializing in the storage and meticulous handling of blood products. Our primary focus is on safety and reliability, reducing the risk of transfusion-related complications through rigorous testing and careful management.</p>
    </section>

    <section class="mb-6 bg-gray-100 p-4 red-shadow rounded-lg shadow mx-auto w-full md:w-3/4 lg:w-3/4">
        <h3 class="text-2xl font-semibold mb-2">A Systematic Approach to Blood Management</h3>
        <p class="text-gray-700 text-lg mb-4">Every blood bag received from donation events is treated with the utmost care and precision. We understand that this isn't just about handling a medical product; it's about safeguarding a precious gift that can save lives. BloodBond's Web-based interface ensures streamlined management, facilitating the tracking and maintenance of blood supplies with efficiency and transparency.</p>
    </section>

    <section class="mb-6 bg-gray-100 p-4 red-shadow rounded-lg shadow mx-auto w-full md:w-3/4 lg:w-3/4">
        <h3 class="text-2xl font-semibold mb-2">Connecting Donors and Recipients</h3>
        <p class="text-gray-700 text-lg mb-4">Our platform is more than just a management system; it's a bridge that connects generous donors with those in urgent need. BloodBond simplifies the process of donating blood, making it easier for individuals to contribute to this noble cause. Simultaneously, it offers a lifeline for patients requiring transfusions, ensuring they receive the right type of blood when they need it the most.</p>
    </section>

    <section class="text-center mx-auto w-full md:w-3/4 lg:w-3/4">
        <h3 class="text-2xl font-semibold mb-2">Join Us in This Noble Cause</h3>
        <p class="text-gray-700 text-lg mb-6">BloodBond is committed to fostering a community of care and support. By joining our network of donors, you are not only giving blood; you are giving hope. Together, let's make a difference in countless lives.</p>
        <a href="/pages/become-a-donor.php" class="bg-red-600 text-white font-bold py-2 px-4 rounded hover:bg-red-700 transition-colors">Become a Donor</a>
    </section>
</div>


<?php require('../shared/footer.php') ?>