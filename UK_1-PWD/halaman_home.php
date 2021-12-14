    <?php
        // $username = $_SESSION['iduser'];

        $con = mysqli_connect('localhost', 'root', '', 'db_penjualantreatandtail');

        $result = mysqli_query($con, "SELECT * FROM penjualan");

    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cf.shopee.co.id/file/bf9360246d76a7c318081b87242532eb_tn">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    .openbtn {
      font-size: 20px;
      cursor: pointer;
      background-color: #111;
      color: white;
      padding: 10px 15px;
      border: none;
    }

    .openbtn:hover {
      background-color: #444;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidebar {padding-top: 15px;}
      .sidebar a {font-size: 18px;}
    }
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="">
      <img src="https://cf.shopee.co.id/file/bf9360246d76a7c318081b87242532eb_tn" alt="TreatAndTailLogo" class="ms-3">
  </div>
  <p class="link-light h4 mt-3 ms-3">Admin Sekarang</p>
  <!-- <p class="link-light h3 ms-3"> - <?php echo $username ?> -</p> -->
  <!-- <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a> -->
</div>

<div id="main">
    <div class="d-flex justify-content-between mb-5">
        <button class="btn btn-dark fs-3" onclick="openNav()">☰</button>
        <h1 class="display-5 text-center">Aplikasi Data Penjualan Kalung Kucing</h1>

        <button type="button" onclick="btnLogout()" class="btn btn-outline-dark">Logout</button>
    </div>
    <div class="container">
        <div>
          <button type="button" class="btn btn-success mb-3" onclick="btnTambahdata()">Tambah Data</button>
        </div>
        
        <form action="" method="get">
          <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Name Cat - Ex. Muezza" aria-label="Search"
            aria-describedby="search-addon" name="cari" />

            <input type="submit" value="Search" class="btn btn-outline-primary"></button>
          </div>
        </form>
        <br/><br/>

        <table class="table">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tulisan Belakang</th>
              <th scope="col">Nama Kucing</th>
              <th scope="col">Jenis Liontin</th>
              <th scope="col">No Design</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            <?php 
              if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $sql="select * from penjualan where nama_kucing like'%".$cari."%'";
                $tampil = mysqli_query($con,$sql);
              }else{
                $sql="select * from penjualan";
                $tampil = mysqli_query($con,$sql);
              }
              $no = 1;
              while($user_data = mysqli_fetch_array($tampil)){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $user_data['tulisan_belakang'];?></td>
              <td><?php echo $user_data['nama_kucing'];?></td>
              <td><?php echo $user_data['jenis_liontin'];?></td>
              <td><?php echo $user_data['nomor_design']; ?></td>
              <td><a href='delete.php?nama_kucing=$user_data[nama_kucing]' class='link-danger'>Delete</a></td>
              
            </tr>

            <?php } ?>

          
            
          </tbody>
        </table>
    </div>

<!-- script sidebar -->
<script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }

    function cari() {

    }

</script>

<script type="text/javascript">
    function btnLogout(){
        location.href = "logout.php";
    }
    function btnTambahdata(){
      location.href = "tambahData.php";
    }
</script>

</body>
</html> 
