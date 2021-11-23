 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Akun baru</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="https://cf.shopee.co.id/file/bf9360246d76a7c318081b87242532eb_tn">
 <body>
 	<div class="container position-absolute start-50 translate-middle " style="margin-top: 20%">
 		<h1 class="display-5 text-center mb-5" style="width: 100%">Buat akun - Admin baru</h1>
 		<div class="container" style="width: 500px;">
 			<form method=post action=input_user.php>
			  <div class="mb-3">
			    <label for="username" class="form-label">Username</label>
			    <input type="text" class="form-control" id="username" name='id_user'>
			  </div>
			  <div class="mb-3">
			    <label for="password" class="form-label">Password</label>
			    <input type="password" class="form-control" id="password" name='password' >
			  </div>
			  <div class="mb-3">
			    <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
			    <input type="text" class="form-control" id="NamaLengkap" name='nama'>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" name='email' >
			  </div>
			  <button type="submit" class="btn btn-primary" name='submit'>Buat Akun</button>
			  <span ><a href="form_login.php"  style="text-decoration:none; margin-top: -30px;" class="d-flex justify-content-end" >Kembali ke halaman Login</a></span>
			</form>
 		</div>
	 	
	</div>
	 	
 </body>
 </html>