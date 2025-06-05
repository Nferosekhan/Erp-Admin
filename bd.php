<?php      
$host = "localhost";  
$whitelist = array(
    '127.0.0.1',
    '::1'
);


if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
$tonicuser = "tonic_pairscript";  
$tonicpassword = 'dNzy2GXyLRteHFbW';  
$tonicdb_name = "tonic_pairscript";
}
else
{
$tonicuser = "root";  
$tonicpassword = '';  
$tonicdb_name = "tonic_pairscript"; 
}
$tonic_con = mysqli_connect($host, $tonicuser, $tonicpassword, $tonicdb_name);
if (!$tonic_con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
$taskyuser = "tasky_pairscript";  
$taskypassword = 'WYNbbB2PtwS8aitj';  
$taskydb_name = "tasky_pairscript";
}
else
{
$taskyuser = "root";  
$taskypassword = '';  
$taskydb_name = "tasky_pairscript"; 
}
$tasky_con = mysqli_connect($host, $taskyuser, $taskypassword, $taskydb_name);
if (!$tasky_con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
$betatonicuser = "betatonic_pairsc";  
$betatonicpassword = 'rcGxtPaMCXWdrfcB';  
$betatonicdb_name = "betatonic_pairsc";
}
else
{
$betatonicuser = "root";  
$betatonicpassword = '';  
$betatonicdb_name = "betatonic_pairsc"; 
}
$betatonic_con = mysqli_connect($host, $betatonicuser, $betatonicpassword, $betatonicdb_name);
if (!$betatonic_con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
$betataskyuser = "betatasky_pairsc";  
$betataskypassword = 'n7M5YRLw2FT2b2dS';  
$betataskydb_name = "betatasky_pairsc";
}
else
{
$betataskyuser = "root";  
$betataskypassword = '';  
$betataskydb_name = "betatasky_pairsc"; 
}
$betatasky_con = mysqli_connect($host, $betataskyuser, $betataskypassword, $betataskydb_name);
if (!$betatasky_con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
$user = "paircontrol";  
$password = 'APXYDp3k7NEkkb6K';  
$db_name = "paircontrol";
}
else
{
$user = "root";  
$password = '';  
$db_name = "paircontrol"; 
}
$con = mysqli_connect($host, $user, $password, $db_name);  
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>