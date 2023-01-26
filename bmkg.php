<?php

function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

// $url = "https://data.bmkg.go.id/DataMKG/MEWS/DigitalForecast/DigitalForecast-SumateraUtara.xml";
// $data = simplexml_load_file($url);
// $json = json_encode($data);

// echo $json;

$datas = http_request("https://cuaca-gempa-rest-api.vercel.app/weather/sumatera-utara/medan");
//$datas = http_request("https://cuaca-gempa-rest-api.vercel.app/quake");
//$data = http_request("https://api.github.com/users/petanikode");

$array = json_decode($datas, TRUE);

$ex = $array['data'];
echo "ID Kota : " .$ex['id'];
echo "<br>Latitude : " .$ex['latitude'];
echo "<br>Longitude : " .$ex['longitude'];
echo "<br>Description : " .$ex['description'];

$cuaca = "";
$cuacas = "";
$cuacaq = "";
$data_cuaca = $ex['params'];

foreach ($data_cuaca as $key => $value) {
	// $data_key = $key;
	// $data_value = $value;

	 // echo "<pre>";
	 // print_r($data_value);

	$temperature = '5';
	$weather = '6';

	// echo $temperature;

	//var_dump((string)$key);

	if((string)$key == $temperature)
	{
		//echo $key;
		foreach($value as $key => $final)
		{		
			// echo "<pre>";
			// var_dump($final);

			$datass = 'times';


			// //echo $key;

			if($key == $datass)
			{
				//echo $final;
				foreach ($final as $data_final) {
					$cuaca = $data_final['celcius'];
					$cuacaq = $data_final['datetime'];

					
					echo $cuaca;
					// echo $finalss = $cuaca;
					// echo $finalss = $cuacaq;
				}
			}

		}

	}
	if((string)$key == $weather){
		foreach($value as $key => $finals)
		{		
			// echo "<pre>";
			// var_dump($final);

			$datasss = 'times';


			// //echo $key;

			if($key == $datasss)
			{
				//echo $final;
				foreach ($finals as $data_finals) {
					$cuacas = $data_finals['name'];

					//echo $finalsss = $cuacas;
					return($cuacas);
				}
			}
		}
	}

}

echo "<br>";
// echo $finalss." : ".$finalsss;
echo $cuacas." : ".$cuacaq;

?>