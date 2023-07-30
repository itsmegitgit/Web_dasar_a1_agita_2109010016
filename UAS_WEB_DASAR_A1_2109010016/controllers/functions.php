<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "uas_web_dasar_a1_npm";
  return mysqli_connect(
    $server,
    $username,
    $password,
    $database
  );
}
?>