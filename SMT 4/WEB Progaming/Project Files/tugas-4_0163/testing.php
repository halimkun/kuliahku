<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.binderbyte.com/v1/validation/npwp?api_key=625ee0c092ee0062456ee88ae66eff26bdc935b024398bd051e197e658b2b7a8',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('npwp' => '857749949417000'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;