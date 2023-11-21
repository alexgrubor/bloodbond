<?php
require('../shared/header.php');

$errors = '';
$isEmailSent = false;


$myemail = 'alexgrubor@gmail.com'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if (!$name || !$email_address || !$message) {
        $errors .= "\n Error: All fields are required";
    }

    if (!$email_address) {
        $errors .= "\n Error: Invalid email address";
    }

   
    if (empty($errors)) {
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. \n\n" .
            "Here are the details:\n Name: $name \n" .
            "Email: $email_address\n Message: \n$message";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email_address";

        if (mail($to, $email_subject, $email_body, $headers)) {
            $isEmailSent = true;
        } else {
            $errors .= "\n Error: Failed to send email. Please try again later.";
        }
    }
}
?>


<div class="p-3 flex lg:flex-row flex-col-reverse justify-center items-center gap-3">
   
    <form action="contact-us.php" method="POST" class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="name" type="text" name="name" required>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="email" type="email" name="email" required>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                    Message
                </label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500" id="message" name="message" required></textarea>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Send
                </button>
            </div>
        </div>
        <?php if (!empty($errors)) : ?>
        <p class="text-red-500 text-center font-bold"><?php echo nl2br(htmlspecialchars($errors)); ?></p>
    <?php endif; ?>
    <?php if ($isEmailSent) : ?>
        <p class="text-green-500 text-center font-bold">Thanks for contacting us!</p>
    <?php endif; ?>


    </form>
    <img src="../images/contact-us.png" alt="contact" class='w-full lg:w-1/3 md:w-1/2 sm:w-2/3'>
</div>

<?php require('../shared/footer.php') ?>