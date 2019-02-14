<?php

class Valid_mob {

    function load() {
        require_once APPPATH .'third_party/valid_mob/autoload.php';
        return \libphonenumber\PhoneNumberUtil::getInstance();
    }

}
