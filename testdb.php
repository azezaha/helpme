<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $name = "db_kota";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
  
  $sql = "SELECT * FROM kota";

  $query = mysqli_query ($link, $sql);
  if ($query) {
      while ( $row = mysqli_fetch_assoc($query)){
          echo '<option>'.$row['nama_kota'].'</option>' ;
  }
    } else {
        die ("Koneksi Gagal: " . mysqli_connect_error());
          } mysqli_close ($link);
?>