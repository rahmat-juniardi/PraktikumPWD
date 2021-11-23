<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cf.shopee.co.id/file/bf9360246d76a7c318081b87242532eb_tn">
</head>
<body>
	<div class="container position-absolute start-50 translate-middle " style="margin-top: 20%">
		<h1 class="display-5 text-center mb-5" style="width: 100%">Berhasil Logout</h1>
		<div class="container text-center" style="width: 500px;">
			<button type="button" onclick="btnLogin()" class="btn btn-outline-dark">Kembali ke Halaman Login</button>
		</div>
		
	</div>
</body>
</html>


<script type="text/javascript">
    function btnLogin(){
        location.href = "form_login.php";
    }
</script>
