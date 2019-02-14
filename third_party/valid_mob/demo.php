<?php

//Registering
include('autoload.php');
//Use the Class
$swissNumberStr = "+201123303370";
$phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
try {
    $phoneNumberObject = $phoneUtil->parse($swissNumberStr, "EG");

    $num_example = $phoneUtil->getExampleNumberForType('EG', \libphonenumber\PhoneNumberType::MOBILE);
    echo "<pre>";
    print_r($num_example);
    var_dump($phoneUtil->isValidNumberForRegion($phoneNumberObject, 'FR'));


} catch (\libphonenumber\NumberParseException $e) {
    var_dump($e);
}