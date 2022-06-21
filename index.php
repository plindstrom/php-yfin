<?php
/*
  File Name  index.php
  Project    php-yfin
  Version    0.1.0
  Author     Peter Lindstrom
  Purpose    Gets market data from Yahoo Finance.
  Copyright  2022, Peter Lindstrom
  Link       https://github.com/plindstrom/php-yfin
*/


// Set configuration options -------------------------------------------------
ini_set("allow_url_fopen", 1);


// Setup variables -----------------------------------------------------------
$yapi = "https://query2.finance.yahoo.com/v7/finance/options/";
$symbol = htmlEntities($_GET["symbol"], ENT_QUOTES);
$data = htmlEntities($_GET["data"], ENT_QUOTES);
$url = $yapi . $symbol;


// Display the requested response --------------------------------------------
if($symbol != ""){
    $response = json_decode(file_get_contents($url));

    if($data == "analystRating"){
        echo $response->optionChain->result[0]->quote->averageAnalystRating;
    } elseif($data == "shortName"){
        echo $response->optionChain->result[0]->quote->shortName;
    } elseif($data == "longName"){
        echo $response->optionChain->result[0]->quote->longName;
    } else {
        echo "$".$response->optionChain->result[0]->quote->regularMarketPrice;
    }    
} else {
    echo "A symbol is required!  For example: " . $_SERVER["REQUEST_URI"] . "?symbol=MSFT";
}
?>