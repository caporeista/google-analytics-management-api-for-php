# PHP Interface for Google Analytics Management API #

This is a class extension of Stig Manning's [ga:pi()](http://code.google.com/p/gapi-google-analytics-php-interface/) class.  It allows you to also request information from Google Analytics Management API.

Works great with PHP5 OOP projects such as CakePHP, Symfony, and Zend by giving you a nice class based interface to work with.


---

# How to install: #
Simply download the [ga:pi()](http://code.google.com/p/gapi-google-analytics-php-interface/) and this class extension and place it in the same place you have your gapi.class.php file.

# How to use: #
Using this class extension is similar to using the original class.
```
require('gapi.class.php');
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
```


---


# About me #
My name is Chris Le and I'm a developer for [Seer Interactive](http://www.seerinteractive.com).

Read my blog post about this library here: http://www.seerinteractive.com/blog/google-analytics-management-api-phpinterface-for-php/2010/10/19/

I like learning new stuff and create fun things.  In my spare time (if I ever get any) I'm also DJ.