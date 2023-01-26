<?php

error_reporting(0);

if (!isset($_GET['komik'])) {
	header('location: index.php');
}
else{

	$url = $_GET['komik'];
	$new_url = 'https://komikindo.id'.$url;

	require 'vendor/autoload.php';

	$httpClient = new \GuzzleHttp\Client();
	$response = $httpClient->get($new_url);
	$htmlString = (string) $response->getBody();

//add this line to suppress any warnings
	libxml_use_internal_errors(true);

	$doc = new DOMDocument();

	$doc->loadHTML($htmlString);

	$xpath = new DOMXPath($doc);

	// Jadikan function saja, agar lebih rapi requestnya

	// Get Detail Chapter Komik

	$komik_titles = $xpath->evaluate('//div[@id="content"]//div[@class="chapter postbody"]//article//div[@class="chapter-area"]//div[@class="chapter-content"]//div[@class="dtlx"]/h1');

	$komik_prev_url = $xpath->evaluate('//div[@id="content"]//div[@class="chapter postbody"]//article//div[@class="chapter-area"]//div[@class="chapter-content"]//div[@class="navig"]//div[@class="nextprev"]/a');

	$komik_list_comic_url = $xpath->evaluate('//div[@id="content"]//div[@class="chapter postbody"]//article//div[@class="chapter-area"]//div[@class="chapter-content"]//div[@class="navig"]//div[@class="nextprev"]//a[2]');

	$komik_datas = $xpath->evaluate('//div[@id="content"]//div[@class="chapter postbody"]//article//div[@class="chapter-area"]//div[@class="chapter-content"]//div[@class="chapter-image eastengine bc"]//div[@class="imgch"]//div[@id="chimg-auh"]/img');

	$pattern = "/Komik/i";
	$no = 1;
	$detail_url = "/baca.php?komik=";
	$url_komik = "/detail.php?komik=";
	$pattern_url = "/https:\/\/komikindo.id/i";

	?>

	<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

		<style>
			body{
				background-color: #03120e;
				color: whitesmoke;
			}
		</style>

		<title>Komik Indo Scrap</title>
	</head>
	<body>
		<?php foreach ($komik_titles as $key => $komik_title) { ?>
			<h3>Baca Komik
				<strong><?= preg_replace($pattern, '', $komik_title->textContent);?></strong>
			</h3>
			<h6>
				Kamu sedang berada di halaman baca komik <b><?= preg_replace($pattern, '', $komik_title->textContent);?></b> bahasa Indonesia. Jika kamu ingin membaca manga <b><?= preg_replace('/Chapter (.*)[^\n]/i','',preg_replace($pattern, '', $komik_title->textContent));?></b>, pastikan Javascript kalian aktif . Untuk koleksi komik seru lainnya di <b>Website ini</b> ada di menu Daftar Komik.
			</h6>
		<br>
		<div class="container">
			<div class="d-flex justify-content-center">
				<div class="btn-group" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-secondary rounded-pill">
						<a style="text-decoration:none;color: white;" href="<?= preg_replace($pattern_url, $detail_url, $komik_prev_url[$key]->getAttribute('href')) ?>"><i class="fa fa-backward"></i> Chapter Sebelumnya</a>
					</button>
					<button type="button" class="btn btn-danger rounded-pill ml-2">
						<a style="text-decoration:none;color: white;" href="<?= preg_replace($pattern_url, $url_komik, $komik_list_comic_url[$key]->getAttribute('href')) ?>"><i class="fa fa-th"></i> Daftar Chapter</a>
					</button>
					<button type="button" class="btn btn-primary rounded-pill ml-2" data-toggle="tooltip" data-placement="top" title="Under Maintenance">
						Download <i class="fa fa-forward"></i>
					</button>
				</div>
			</div>
			<div class="d-flex justify-content-center my-4">
				<div class="card" style="width: 80%;">
					<?php foreach ($komik_datas as $key => $komik_data) { ?>
					<img class="card-img-top" src="<?= $komik_data->getAttribute('src') ?>" alt="Card image cap">
					<?php } ?>
				</div>
			</div>
		</div>
		<?php } ?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script>
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		</script>

	</body>
	</html>
	<?php } ?>