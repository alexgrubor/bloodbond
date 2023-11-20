<?php require ('../shared/header.php')?>


<div class="flex flex-col items-center justify-center">
    <h2 class="text-2xl font-bold mb-6 text-center">Become a Blood Donor</h2>
    <div class="p-3 flex lg:flex-row flex-col-reverse justify-center items-center gap-3">
        <form action="submit-donor.php" method="post" class="w-full max-w-lg mx-auto">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="donor-name">
                    Full Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="donor-name" type="text" name="donor_name" placeholder="Your Full Name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="donor-blood-type">
                    Blood Type
                </label>
                <select class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="donor-blood-type" name="donor_blood_type" required>
                    <option value="">Select Blood Type</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2 " for="donor-contact">
                    Contact Number
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="donor-contact" type="text" name="donor_contact" placeholder="Your Contact Number" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="donor-email">
                    Email Address
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="donor-email" type="email" name="donor_email" placeholder="Your Email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="donor-address">
                    Address
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="donor-address" name="donor_address" placeholder="Your Address" required></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Register
                </button>
            </div>
        </form>
        <img src="../images/become-a-donor.png" alt="become a donor" class='w-full lg:w-1/3 md:w-1/2 sm:w-2/3'>
    </div>

</div>

<?php require ('../shared/footer.php')?>