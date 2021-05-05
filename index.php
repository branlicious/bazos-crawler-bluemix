<pre>
<?php
error_reporting(E_ALL & ~E_NOTICE);

if (function_exists('curl_init') === false) {
    echo "Curl not enabled";
    //Check if "curl" can be found in the array of loaded extensions.
    if (in_array('curl', get_loaded_extensions())) {
        //cURL module has been loaded
    } else {
        //It has not been loaded. Use a fallback.
        echo " Curl not loaded";
    }
} else {

    require __DIR__ . '/vendor/autoload.php';

    $crawler = new Bazos\Crawler();

    $items = $crawler->crawlAds('https://reality.bazos.sk/', 5); // 5 means number of pages to parse, default is 1

    //print_r($items);

    foreach ($items as $item) {
        echo $item->getTitle() . "\n";
    }
}
