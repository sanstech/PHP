<?php

error_reporting(0);

if (!isset($_GET['komik'])) {
	header('location: index.php');
}
else{

	$url = $_GET['komik'];
	$new_url = 'https://komikindo.id/komik'.$url;

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

	// Get Detail Komik

	$komik_titles = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="infoanime"]/h1');

	$komik_covers = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="infoanime"]//div[@class="thumb"]/img');

	$komik_tema = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="infoanime"]//div[@class="infox"]//div[@class="spe"]//span[6]');

	$komik_jenis_komik = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="infoanime"]//div[@class="infox"]//div[@class="spe"]//span[7]');

	$komik_other_titles = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="infoanime"]//div[@class="infox"]//div[@class="spe"]//span[1]');

	$komik_status = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="infoanime"]//div[@class="infox"]//div[@class="spe"]//span[2]');

	$komik_author = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="infoanime"]//div[@class="infox"]//div[@class="spe"]//span[3]');

	$komik_description = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="infoanime"]//div[@class="infox"]//div[@class="shortcsc sht2"]/p');

	// Get Chapter

	$komik_chapter_titles = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="eps_lst"]//ul/li//span[@class="lchx"]');

	$komik_chapter_url = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="eps_lst"]//ul/li//span[@class="lchx"]/a');

	$komik_chapter_dates = $xpath->evaluate('//div[@id="content"]//main//div[@class="postbody"]//article//section[@class="whites"]//div[@class="eps_lst"]//span[@class="dt"]//a');

	$pattern = "/Komik/i";
	$no = 1;
	$detail_url = "/baca.php?komik=";
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
		<div class="container">
			<div class="col-md-6">
				<a href="./index.php" style="color:white; text-decoration: none;">
					<i class="fa fa-home"></i> Home
				</a>
			</div>
		
			<div class="d-flex justify-content-center">
				<?php foreach ($komik_titles as $key => $komik_title) { ?>					
					<h3> Komik
						<strong><?= preg_replace($pattern, '', $komik_title->textContent);?></strong>
					</h3>
			</div>
		</div>
		
		<br>
		<div class="container">
			<div class="d-flex justify-content-center">
				<div class="col-md-6">
					<div class="card flex-md-row mb-4 shadow-sm h-md-250">
						<img class="card-img-right flex-auto d-none d-lg-block" src="<?= $komik_covers[$key]->getAttribute('src') ?>" alt="Card image cap" style="height: 300px;">
						<div class="card-body d-flex flex-column align-items-start">
							<p class="text-dark">
								<strong class="d-inline-block mr-4">
									Tema :
									<span class="badge badge-pill badge-primary">
										<?= preg_replace('/Tema:/i', '', $komik_tema[$key]->textContent) ?>
									</span>
									
								</strong>
								<strong class="d-inline-block">
									Status :
									<span class="badge badge-pill badge-success">
										<?= preg_replace('/Status:/i', '', $komik_status[$key]->textContent) ?>
									</span>
								</strong> 
								<strong class="d-inline-block">
									Jenis Komik :
									<span class="badge badge-pill badge-danger">
										<?= preg_replace('/Jenis Komik:/i', '', $komik_jenis_komik[$key]->textContent) ?>
									</span>
								</strong>
							</p>
							<h3 class="mb-0">
								<a class="text-dark" href="#"><?= preg_replace('/Judul Alternatif:/i', '', $komik_other_titles[$key]->textContent) ?></a>
							</h3>
							<div class="mb-1 text-muted">by <?= preg_replace('/Pengarang:/i', '', $komik_author[$key]->textContent) ?></div>
							<p class="card-text mb-auto text-dark"><?= $komik_description[$key]->textContent ?></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h3>List Chapter</h3>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Chapter</th>
									<th scope="col">Upload at</th>
									<th scope="col" colspan="2" style="text-align:center;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($komik_chapter_titles as $key => $komik_chapter_title) {?>
								<tr>
									<th scope="row"><?= $no++ ?></th>
									<td><?= $komik_chapter_title->textContent ?></td>
									<td><?= $komik_chapter_dates[$key]->textContent ?></td>
									<td>
										<a href="<?= preg_replace($pattern_url, $detail_url, $komik_chapter_url[$key]->getAttribute('href')); ?>">
											<span>
												<i class="fa fa-eye"></i>
											</span>
										</a>
									</td>
									<td><span data-toggle="tooltip" data-placement="top" title="Under Maintainance">
										<i class="fa fa-download"></i>
									</span></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
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