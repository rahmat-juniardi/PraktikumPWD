<?php 
	$url = "http://localhost/PraktikumPWD/UK_1-PWD/getDataPenjualan.php";
	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($client);
	$result = json_decode($response);
	foreach ($result as $r) {
		echo "<p>";
		echo "Tulisan Belakang : " . $r->tulisan_belakang . "<br />";
		echo "Nama Kucing : " . $r->nama_kucing . "<br />";
		echo "Jenis Liontin : " . $r->jenis_liontin . "<br />";
		echo "No Design : " . $r->nomor_design . "<br />";
		
		echo "</p>";
	}
 ?>

 <!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cf.shopee.co.id/file/bf9360246d76a7c318081b87242532eb_tn">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


</body>
</html> 