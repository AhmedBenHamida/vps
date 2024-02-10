
<?php
session_start();

// Assuming you receive 'captcha', 'messageId', and 'ipzebi' via POST
if(isset($_POST['captcha'])) {
    // Perform your captcha validation here
    if($_POST['captcha'] == 'expectedCaptchaValue') { // This should be your actual validation logic
        $_SESSION["username"] = "JohnDoe";
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "failure", "message" => "Invalid captcha"]);
    }
} else {
    echo json_encode(["status" => "failure", "message" => "Captcha not set"]);
}
?>
