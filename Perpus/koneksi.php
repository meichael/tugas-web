<?php
define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'perpus');
 
 $koneksi = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
 mysql_connect("localhost","root", "");
 mysql_select_db("perpus");
 
# Check koneksi, berhasil atau tidak
 if ( $koneksi->connect_error ) {
    die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
}
?>