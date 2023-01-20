<?php

// Set the secret generated in generate.php, this should be fetched from a DB.
$secret = '';

// Fetching the generated MFA code from your MFA app.
// This as a $_GET value to test it out easily, but should be a POST in production!
echo "<p>Confirm code:</p>";
$code = $_GET['code'];
echo "<p>Code: $code</p>";

$ga = new GoogleAuthenticator();
// Code verify with your secret and the supplied code.
// Discrepancy is set to '2' which is 60 seconds. Default is 1 (30 seconds) but you might be too late to input the code.
$login = $ga->verifyCode($secret, $code, $discrepancy = 2);

// If login returns TRUE
if ($login) {
        echo "OK";
} else {
        echo "FAILED";
}
?>
