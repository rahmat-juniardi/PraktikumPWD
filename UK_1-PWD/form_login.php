<!DOCTYPE html>
<html>
<head>
	<title>Login - Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="https://cf.shopee.co.id/file/bf9360246d76a7c318081b87242532eb_tn">
</head>
<body >
	<div class="container position-absolute start-50 translate-middle " style="margin-top: 20%">
		<h1 class="display-5 text-center mb-5" style="width: 100%">Aplikasi Data Penjualan Kalung Kucing</h1>
		<div class="container" style="width: 500px;">
			<form method=post action=cek_login.php>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Username</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='id_user'>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <span ><a href="form_user.php"  style="text-decoration:none; margin-top: -30px;" class="d-flex justify-content-end" >Daftar akun admin baru jika belum punya !</a></span>
			</form>
		</div>
		
	</div>
	
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>