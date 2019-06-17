<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;


$products = [];
$discounted_products = [];
$best_price_products = [];
$reunions = [];
$url = 

$client = new Client();

$response = $client->request('GET', 'http://www.paris-turf.com/programme-courses/01-06-2019', [
    'allow_redirects' => true
]);


$body = $response->getBody()->getContents();

$crawler = new Crawler($body);


// CASE 1: Réunions

$filter = $crawler->filter('/html/body/main/div[2]/div/section/div/section[1]/div[2]/div[2]/div/div/div[1]/div/ul/li[1]/a/div[2]/p/strong');

var_dump($filter);
// if(count($filter) > 0)
// {
// 	foreach ($filter as $i => $content)
// 	{	
// 		$products[$i]['name'] = $content->nodeValue;
// 	}

// }

// // CASE 1: get product descriptions

// $filter = $crawler->filter('div#case1 > div > span[style="float: left"]');

// if(count($filter) > 0)
// {
// 	foreach ($filter as $i => $content)
// 	{	
// 		$desc = str_replace($products[$i]['name'], "", $content->nodeValue);
// 		$products[$i]['desc'] = $desc;
// 	}

// }

// // CASE 1: get product prices

// $filter = $crawler->filter('div#case1 > div > span[style="float: right"]');


// if(count($filter) > 0)
// {
// 	foreach ($filter as $i => $content)
// 	{	
		
// 		if(strpos($content->nodeValue, "discount") !== false)
// 		{
// 			$price = explode("discount", $content->nodeValue);
// 			$products[$i]['has_discount'] = true;
// 			$products[$i]['price'] = $price[0];

			
// 			// CASE 1: get discounted price products

// 			$discounted_products[] = $products[$i];
// 		}
// 		else{

// 			$products[$i]['price'] = $content->nodeValue;
// 		}

// 		// CASE 1: get best price products

// 		if($content->getAttribute('class') == 'best')
// 		{
// 			$best_price_products[] = $products[$i];
// 		}
	
// 	}

// }

// print_r($products);
// print_r($discounted_products);
// print_r($best_price_products);
