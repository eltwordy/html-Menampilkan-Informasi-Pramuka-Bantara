<?php
$alamat="localhost"; //Alamat WEB Server
$user="root"; //User Web Server
$pass=""; //Password WEB Server
$koneksi=mysql_connect("$alamat","$user","$pass"); //koneksi ke WEB Server
$sambung=mysql_select_db("db_formulir",$koneksi); //mengkoneksikan ke Database
?>