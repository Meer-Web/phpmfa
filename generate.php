<?php
require_once('GoogleAuthenticator.php');

echo "<p>Create token:</p>";
$user = 'MyLoginUsername';

// Generate a new secret for the user, this secret should be stored with the user in a database or make a static setting
$ga = new GoogleAuthenticator();
$secret = $ga->createSecret();
echo "<p>This personal secret should be stored in a database/user table and should never be known to anybody: $secret</p>";
echo "<hr>"

// Generate QR by using Google Charts.
$qrCodeUrl      = $ga->getQRCodeGoogleUrl($user, $secret, 'My Environment');
echo "<p>Scan in Google Authenticator or Microsoft Authenticator"
echo "<img src='$qrCodeUrl'>";
?>