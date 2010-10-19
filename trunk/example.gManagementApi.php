<?php

require('../gapi.class.php');
require('gManagementApi.class.php');

define('GA_EMAIL', 'myUsername');;
define('GA_PASSWORD', 'mySecretPassword');

$ga = new gManagementApi(GA_EMAIL, GA_PASSWORD);

// Get all the accounts
$ga->requestAccountFeed();

// Get all web properties for all your accounts
$ga->requestAccountFeed('~all');

// Get all web properties for specfically UA-12345-2
$ga->requestAccountFeed('12345');

// To get all the profiles you have access to for web property under account 12345
$ga->requestAccountFeed('12345', '~all');

// To get the profiles for a specific web property UA-12345-2 under account 12345
$ga->requestAccountFeed('12345', 'UA-12345-2');

// To get all the goals for profile 6789 for web property UA-12345-2 under acount 12345
$ga->requestAccountFeed('12345', 'UA-12345-2', '~all');

// To get everything and the kitchen sink
$ga->requestAccountFeed('~all', '~all', '~all');

// To get all advanced segments
$ga->requestAdvancedSegmentFeed();

?>