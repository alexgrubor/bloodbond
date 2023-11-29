<?php 
require('./db_config.php');


$sql = "SELECT * FROM blood_donors";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$donors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">List of Blood Donors</h2>
    <div class="flex flex-wrap -mx-4">
        <?php foreach ($donors as $donor): ?>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <!-- Profile Circle with First Letter -->
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="h-10 w-10 rounded-full flex items-center justify-center bg-blue-500 text-white text-xl font-semibold uppercase">
                                <?php echo htmlspecialchars($donor['donor_name'][0]); ?>
                            </div>
                            <h3 class="text-lg font-semibold">Name: <?php echo htmlspecialchars($donor['donor_name']); ?></h3>
                        </div>
                        <p class="text-gray-700 mb-2">Blood Type: <?php echo htmlspecialchars($donor['donor_blood_type']); ?></p>
                        <p class="text-gray-700 mb-2">Contact: <?php echo htmlspecialchars($donor['donor_contact']); ?></p>
                        <p class="text-gray-700">Email: <?php echo htmlspecialchars($donor['donor_email']); ?></p>
                        <p class="text-gray-700">Address: <?php echo htmlspecialchars($donor['donor_address']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


