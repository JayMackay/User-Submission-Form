<--SIMPLE USER INPUT FORM-->

Interview assesment creating a webpage that runs a simple user input box with regex to validate email and LUHN algorithm to validate credit card input. Submitting the form will send an email to a specifed address in the PHP script with the inputted user details.


INSTRUCTIONS TO RUN

1) Please download all the files into a named folder
2) To run double click index.html
3) Navigate accordingly 
4) WARNING: Submit button will not function unless server is set up for the PHP script to run, to confirm that the button works set up a local host.
5) To confirm that siubmit works, clicking the button should take you to a page with the PHP script.
6) Additional code can be implemented to store the mail() function and send a echo with a bool to test true or false

TESTING USING XAMPP

1) To test in using an Apache and MySQL local host download and run XAMPP
2) Ensure that the sendmail.ini is configured with your email login details that you will be using to test
3) Specify the SMTP mail server related to your address to send the mail i.e. smtp.gmail.com, smpt.live.com etc.
4) Configure the SMTP-SSL to run TLS and specify the port address as 587
5) Configure mail function in php.ini (Comment out all the functions as we are using the sendmail.exe to test the script)
6) Speicfy the path for sendmail_path to whichever directory your send.exe appplication is in
6) Create a folder named test in htdocs directory and copy all the files of the website into the test folder
8) In your browser address run localhost/test and you can test your website including the submit fuction which will send you an emai response with all the inputted data

*Note you will also need to configure the PHP script with your specified email for testing purposes

REFERENCCES

LUHN Algorithm: https://gist.github.com/DiegoSalazar/4075533 
Simple form to emai submission: http://form.guide/email-form/php-form-to-email.html

DISCLAIMER

This code may be used and distributed freely without any charge.
This file is provided "as is" with no expressed or implied warranty.
The author accepts no liability if it causes any damage whatsoever.