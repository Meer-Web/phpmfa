# MFA / 2FA for PHP (Using GoogleAuthenticator)

Add the GoogleAuthenticator.php file in your application.

Generate a secret and store this in a database with the user. This secret should be unknown to anybody and is needed for the MFA confirmation.

Scan the QR code generated

Confirm the MFA code using your MFA application on your phone.

## Note
For this test you have to put the code you generated into the check_mfa.php file and use a $_GET['code'] to check if the code is working or not.

You should build this using a proper POST!