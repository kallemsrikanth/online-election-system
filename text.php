<?php
// Required if your environment does not handle autoloading
require 'C:/Users/Aamir/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC66dead53c973552acb3620dce467cdb9';
$token = 'c45a57ff20582c121a6bd1a2f2df7673';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+918686427332',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+1660202 6479 ',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    )
);