<?php

error_reporting(0);

require 'vendor/autoload.php';

$httpClient = new \GuzzleHttp\Client();
$response = $httpClient->get('https://komikindo.id/');
$htmlString = (string) $response->getBody();

//add this line to suppress any warnings
libxml_use_internal_errors(true);

$doc = new DOMDocument();

$doc->loadHTML($htmlString);

$xpath = new DOMXPath($doc);

// Jadikan function saja, agar lebih rapi requestnya

// Komik Populer

$images_populer = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show mangapopuler"]//div[@class="listupd customslider"][1]//div[@class="animposx"]//a//div[@class="limit"]/img');
$urles_populer = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show mangapopuler"]//div[@class="listupd customslider"][1]//div[@class="animposx"][1]/a');
$titles_populer = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show mangapopuler"]//div[@class="listupd customslider"][1]//div[@class="animposx"][1]//a//div[@class="tt"]/h4');
$volume_populer = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show mangapopuler"]//div[@class="listupd customslider"][1]//div[@class="animposx"][1]//div[@class="adds"]//div[@class="lsch"]/a');
$di_post_populer = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show mangapopuler"]//div[@class="listupd customslider"][1]//div[@class="animposx"][1]//div[@class="adds"]//div[@class="lsch"]//span[@class="datech"]');

// Komik Terbaru

$images = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show chapterbaru"]//div[@class="listupd latestupdate-v2"][1]//a//div[@class="limietles"]/img');
$urles = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show chapterbaru"]//div[@class="listupd latestupdate-v2"][1]//div[@class="animposx"]//div[@class="animepostxx-top"]/a');
$titles = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show chapterbaru"]//div[@class="listupd latestupdate-v2"][1]//a//div[@class="tt"]/h4');
$ratings = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show chapterbaru"]//div[@class="listupd latestupdate-v2"][1]//a//div[@class="info-skroep"]//div[@class="flex-skroep nginfo-skroep"][1]');
$genre = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show chapterbaru"]//div[@class="listupd latestupdate-v2"][1]//a//div[@class="info-skroep"]//div[@class="flex-skroep nginfo-skroep"][2]');
$jenis_gambar = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show chapterbaru"]//div[@class="listupd latestupdate-v2"][1]//a//div[@class="info-skroep"]//div[@class="flex-skroep nginfo-skroep"][4]');
$dilihat = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show chapterbaru"]//div[@class="listupd latestupdate-v2"][1]//a//div[@class="info-skroep"]//div[@class="flex-skroep nginfo-skroep"][3]');
$status = $xpath->evaluate('//div[@class="widget-body"]//div[@class="content"][1]//div[@class="post-show chapterbaru"]//div[@class="listupd latestupdate-v2"][1]//div[@class="animposx"]//div[@class="animepostxx-bottom"]//div[@class="info-skroep"][1]//div[@class="flex-skroep nginfo-skroep status-skroep Ongoing"]');

$detail_url = "/detail.php?komik=";
$pattern = "/https:\/\/komikindo.id\/komik/i";

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style>
		body{
			background-color: #03120e;
			color: whitesmoke;
		}
	</style>

	<title>Komik Indo Scrap</title>
</head>
<body>

	<h3>List Komik Terpopuler</h3>
	<br>

	<table class="table">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Cover</th>
				<th scope="col">Judul</th>
				<th scope="col">Volume</th>
				<th scope="col">Di post pada :</th>
			</tr>
		</thead>
		<tbody>
			<?php

			$no = 1;

			foreach ($titles_populer as $key => $title_populer) {
				?>
				<tr>
					<th scope="row"><?= $no++ ?></th>
					<th><img src="<?=$images_populer[$key]->getAttribute('src'); ?>" alt=""></th>
					<td><a href="<?= preg_replace($pattern, $detail_url, $urles_populer[$key]->getAttribute('href')); ?>"><?= $title_populer->textContent; ?></a></td>
					<td><?= $volume_populer[$key]->textContent; ?></td>
					<td><?= $di_post_populer[$key]->textContent; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<br>

	<h3>List Komik Terbaru</h3>
	<br>

	<table class="table">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Cover</th>
				<th scope="col">Judul</th>
				<th scope="col">Dilihat</th>
				<th scope="col">Rating</th>
				<th scope="col">Genre</th>
				<th scope="col">Jenis Gambar</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody>
			<?php

			$no = 1;

			foreach ($titles as $key => $title) {
				?>
				<tr>
					<th scope="row"><?= $no++ ?></th>
					<th><img src="<?=$images[$key]->getAttribute('src'); ?>" alt=""></th>
					<td><a href="<?= preg_replace($pattern, $detail_url, $urles[$key]->getAttribute('href')) ?>"><?= $title->textContent; ?></a></td>
					<td><?= $dilihat[$key]->textContent; ?> orang</td>
					<td><?= $ratings[$key]->textContent; ?></td>
					<td><?= $genre[$key]->textContent; ?></td>
					<td><?= $jenis_gambar[$key]->textContent; ?></td>
					<td><?= $status[$key]->textContent; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>