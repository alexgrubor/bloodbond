<?php 
require('../shared/header.php');
require('../db_config.php');

$submissionSuccessful = false; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name = $_POST['full_name'];
    $blood_type = $_POST['blood_type'];
    $quantity = $_POST['quantity'];
    $contact_email = $_POST['contact_email'];
    $donor_address = $_POST['donor_address'];
    $sql = "INSERT INTO blood_donation_requests (full_name, blood_type, quantity, contact_email, address) VALUES (:full_name, :blood_type, :quantity, :contact_email, :donor_address)";
    $stmt = $pdo->prepare($sql);

    
    if ($stmt->execute([
        'full_name' => $full_name, 
        'blood_type' => $blood_type, 
        'quantity' => $quantity, 
        'contact_email' => $contact_email, 
        'donor_address' => $donor_address
    ])) {
        $submissionSuccessful = true;
    }
  
 
}
?>

<div class="flex flex-col items-center justify-center">
    <h2 class="text-2xl font-bold mb-6 text-center">Request Blood Donation</h2>
    <?php if ($submissionSuccessful): ?>
        <div class="mb-4 p-3 bg-green-200 text-green-700 border border-green-700 rounded">
            <p>Your request has been successfully submitted.</p>
        </div>
    <?php endif; ?>
    <div class="p-3 flex lg:flex-row flex-col-reverse justify-center items-center gap-3">
        <form action="need-blood.php" method="post" class="w-full max-w-lg mx-auto">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="full-name">
                    Full Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="full-name" type="text" name="full_name" placeholder="Your Full Name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="blood-type">
                    Blood Type
                </label>
                <select class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="blood-type" name="blood_type" required>
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
                <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
                    Quantity Needed (in units)
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="quantity" type="number" name="quantity" placeholder="Quantity" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-email">
                    Contact Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="contact-email" type="email" name="contact_email" placeholder="Your Contact Email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="donor-address">
                    Address
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="donor-address" name="donor_address" placeholder="Your Address" required></textarea>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Submit Request
                </button>
            </div>
        </form>
        <img src="../images/need-blood.png" alt="need-blood" class='w-full lg:w-1/3 md:w-1/2 sm:w-2/3'>
    </div>

</div>

<?php require('../shared/footer.php') ?>