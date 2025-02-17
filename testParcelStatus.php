<?php

require_once 'vendor/autoload.php';
	
use DPDWebservice\DPDAuthorisation;
use DPDWebservice\DPDParcelStatus;

try{

    // Authorize
    // Be aware that this functionality doesn't work with test credentials
    $authorisation = new DPDAuthorisation([
        'staging' => false,
        'delisId' => '<delisId>',
        'password' => '<password>',
        'messageLanguage' => 'en_EN',
        'customerNumber' => '<customerNumber>'
    ]);

    // Init
    $status = new DPDParcelStatus($authorisation);

    // Retrieve the parcel's status by it's awb number
    $parcelStatus = $status->getStatus('12345678987654');

    echo '<pre>';
    print_r($parcelStatus);
    echo '</pre>';

}catch(Exception $e){
    echo $e->getMessage();		
}
	
	
	
	
