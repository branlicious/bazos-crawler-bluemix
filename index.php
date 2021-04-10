<?php
require __DIR__ . '/vendor/autoload.php';

$crawler = new Bazos\Crawler();

$items = $crawler->crawlAds('https://auto.bazos.sk/', 5); // 5 means number of pages to parse, default is 1

foreach ($items as $item) {
    echo $item->getTitle() . "\n";
}
