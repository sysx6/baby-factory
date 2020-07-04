<?php

class CurrencyConverter {

    public function convert_currency($nativeCurrency, $foreginCurrency, $amount) {
        $url = 'https://prime.exchangerate-api.com/v5/a4606f1efee1e5dcf7f3fd0c/latest/' . $nativeCurrency; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data, true); // decode the JSON feed
        
        echo "You have " . $amount . $nativeCurrency . "<br>";
        echo "Current conversion rate is 1" . $nativeCurrency . " to " . $characters['conversion_rates'][$foreginCurrency] . $foreginCurrency . "<br>";
        echo "You will receive " . $amountReceived = $amount * $characters['conversion_rates'][$foreginCurrency] . $foreginCurrency;

    }
}




/*
class Currency {

    public function convert_currency($currency) {
        // create & initialize a curl session
    $curl = curl_init();

        // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_URL, "https://prime.exchangerate-api.com/v5/a4606f1efee1e5dcf7f3fd0c/latest/" . $currency);

    // return the transfer as a string, also with setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // curl_exec() executes the started curl session
    // $output contains the output string
    $output = curl_exec($curl);

    // close curl resource to free up system resources
    // (deletes the variable made by curl_init)
    curl_close($curl);

    echo $output;
    
    $currencyData = json_decode($output);
    echo $currencyData;
    }
}*/
