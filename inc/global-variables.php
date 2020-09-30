<?php

// global variables
$customizer_params = get_theme_mods();

$theme_path = get_template_directory_uri() .'/';

// currency rate NBRB

// $bank_res = json_decode(file_get_contents("https://www.nbrb.by/API/ExRates/Rates/USD?ParamMode=2"));

// $rate = $bank_res->Cur_OfficialRate;


// currency rate BSB bank

$bank_res = json_decode(file_get_contents("https://www.bsb.by/ajax.php?request=currencyrate"));

$rate = $bank_res->data->USD->BUY->BYN;


$leasing_percent = round( ($customizer_params['percent'] / 12 ) / 100, 4);

$credit_percent = round( ($customizer_params['percent_credit'] / 100 ) / 12, 4) ;