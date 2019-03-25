<?php

require_once 'RESTfull.php';
$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);
foreach ($xml->channel->item as $item) {
echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
}

?>