<?php
$myDir = "C:/xampp/htdocs/PraktikumPWD/uplaod_file";
$dir = opendir($myDir);
echo "Isi folder (klik link untuk download : <br>";
while($tmp = readdir($dir)){
echo "<a href='$tmp' target='_blank' download>$tmp</a><br>";
}
closedir($dir);
?>