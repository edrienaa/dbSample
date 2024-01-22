<?php

$namahost = "localhost";
$pengguna_mysql = "root";
$katalaluan_mysql = "";
$dbname = "dbsample";

$connection = mysqli_connect ($namahost, $pengguna_mysql, $katalaluan_mysql) or die ("Maaf pangkalan data tidak dapat disambungkan");
mysqli_select_db ($connection, $dbname) or die ("Tidak dapat pilih pangkalan data");

?>