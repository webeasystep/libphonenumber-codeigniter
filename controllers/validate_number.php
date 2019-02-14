<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-02-14
 * Time: 11:53 AM
 */

class  validate_number extends  CI_Controller{

    function is_valid_mobile($user_login,$country_code){
        $this->load->library('Valid_mob');
        $phoneUtil = $this->valid_mob->load();
        $phoneNumberObject = $phoneUtil->parse($user_login,$country_code);
        $is_valid_mobile = $phoneUtil->isValidNumberForRegion($phoneNumberObject,$country_code);

        if ($is_valid_mobile == false) {
            echo " this is a not valid number";
        }else{
            echo " this is a valid number";
        }
    }
}