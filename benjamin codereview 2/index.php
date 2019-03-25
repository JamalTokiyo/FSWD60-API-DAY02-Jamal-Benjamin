<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Second CodeReview</title>
	<link rel="stylesheet" type="text/css" href="Second_CodeReview_Style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- This is the content of the whole page -->
	<div class="wrapper">
		<!-- This is the header -->
		<header class ="header">
			<div class="headerimg1">
				<img src="img/logo-newspaper-cf.png">
			</div>
			<div class="headerimg2">
				<a href="https://www.codefactory.wien" title="www.codefactory.wien"><img src="img/banner-1.png"></a>
			</div>
		</header>
		<!-- This is the navbar -->
		<nav class="navbar">
			<ul class="ulist up">
				<li><a href="index.html" title="Home"><span class="currentsite">Home</span></a></li>
				<li><a href="tech.html" title="Tech">Tech</a></li>
				<li><a href="culture.html" title="Culture">Culture</a></li>
				<li><a href="video.html" title="Video">Video</a></li>
			</ul>
		</nav>
		<div class="container">
			<div style="text-align: center" class="jokes">
					<?php

						require_once 'RESTful.php';
						$url = 'http://api.serri.codefactory.live/random/';
						$response = curl_get($url);
						$result = json_decode($response);
						echo $result->id_joke. ") ". $result->joke;
						

					?>	
			</div>
			<hr>
			<div class="row">	
				<div class="col-lg-8 bbc">
					<h1>BBC API</h1>
					<?php

						$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
						$response = curl_get($url);
						$xml = simplexml_load_string($response);
						foreach ($xml->channel->item as $item) {
						echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
						}

					?>
				</div>
				<div class="col-lg-4 cnn">
					<h1>CNN API</h1>
					<?php

						$url = 'http://rss.cnn.com/rss/edition_technology.rss';
						$response = curl_get($url);
						$xml = simplexml_load_string($response);
						foreach ($xml->channel->item as $item) {
						echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
						}

					?>
				</div>
			</div>				
		</div>
		<!-- This is the footer at the bottom of the page -->
		<div class="footer">
			<ul class="ulist down">
				<li class="bl">Home</li>
				<li class="bl">Tech</li>
				<li class="bl">Culture</li>
				<li class="bl">Video</li>
			</ul>
			<div class="footerimg">
				<img src="img/logo-newspaper-cf.png">
			</div>
			<div class="footertxt">
				<p>Benjamin Schneider - CodeFactory 2019</p>
			</div>
		</div>
	</div>
</body>
</html>