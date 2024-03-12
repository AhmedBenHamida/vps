<?php
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
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'notify') {
    include 'config.php';
    $userIP = getUserIP(); 
    $message = "Alert: An attempt to save the web page content was detected from $userIP.";
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=" . urlencode($message);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $response = curl_exec($ch);
    curl_close($ch);
    $htaccessPath = '.htaccess';
    $denyRule = "Deny from $userIP";
    $htaccessFile = fopen($htaccessPath, 'r+');
    $isBlocked = false;
    if ($htaccessFile) {
        while (($line = fgets($htaccessFile)) !== false) {
            if (strpos($line, $denyRule) !== false) {
                $isBlocked = true;
                break;
            }
        }
        if (!$isBlocked) {
            fseek($htaccessFile, 0, SEEK_END); // Move the pointer to the end of the file
            fwrite($htaccessFile, "\n$denyRule\n");
            echo "IP blocked successfully.";
        } else {
            echo "IP blocked successfully.";
        }
        fclose($htaccessFile); // Close the file
    }
} else {
    echo "Access denied.";
}
?>
