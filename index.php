<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
/*starts here */
$mail = new PHPMailer(true); // create a new object
$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false; 
$mail->Port = 25; 
$mail->IsHTML(true);
$mail->Username = "admin@pairscript.com";
$mail->Password = "d_lxlyU0a";
$mail->setFrom('admin@pairscript.com', 'Console - Pairscript');
$mail->addReplyTo('admin@pairscript.com', 'Console - Pairscript');
$year=date("Y");
/*end here*/
// login for users    ferose-start
include('bd.php');
session_start();
function argon2idHash($plaintext, $password, $encoding = null) {
   $plaintextsecured = hash_hmac("sha256", $plaintext, $password);
   return $encoding == "hex" ? bin2hex(password_hash($plaintextsecured, PASSWORD_ARGON2ID)) : ($encoding == "base64" ? base64_encode(password_hash($plaintextsecured, PASSWORD_ARGON2ID)) : password_hash($plaintextsecured, PASSWORD_ARGON2ID));
}
function argon2idHashVerify($plaintext, $password, $hash, $encoding = null) {
   $plaintextsecured = hash_hmac("sha256", $plaintext, $password);
   return password_verify($plaintextsecured, $encoding == "hex" ? hex2bin($hash) : ($encoding == "base64" ? base64_decode($hash) : $hash)) ? true : false;
}
if((((isset($_COOKIE['rememberMe']))&&($_COOKIE['rememberMe']==1)))){
   setcookie('rememberMe', $_POST['rememberMe'], time() + (86400 * 30), "/");
   header('Location: controldashboard.php');
}
if(isset($_POST['submit'])){

date_default_timezone_set('Asia/Kolkata');
$loginDateTime = date("d-m-Y H:i:s");

$ipAddress = $_SERVER['REMOTE_ADDR'];

$deviceBrowser = $_SERVER['HTTP_USER_AGENT'];

function getBrowserInfo($userAgent) {
    if (preg_match('/MSIE (.*?);/', $userAgent, $matches)) {
        return 'Internet Explorer ' . $matches[1];
    } elseif (preg_match('/Trident\/.*; rv:(.*?)]/', $userAgent, $matches)) {
        return 'Internet Explorer ' . $matches[1];
    } elseif (preg_match('/Edge\/(.*?)/', $userAgent, $matches)) {
        return 'Edge ' . $matches[1];
    } elseif (preg_match('/Chrome\/(.*?)/', $userAgent, $matches)) {
        return 'Chrome ' . $matches[1];
    } elseif (preg_match('/Safari\/(.*?)/', $userAgent, $matches)) {
        if (preg_match('/Version\/(.*?)/', $userAgent, $versionMatches)) {
            return 'Safari ' . $versionMatches[1];
        }
        return 'Safari';
    } elseif (preg_match('/Firefox\/(.*?)/', $userAgent, $matches)) {
        return 'Firefox ' . $matches[1];
    } elseif (preg_match('/OPR\/(.*?)/', $userAgent, $matches)) {
        return 'Opera ' . $matches[1];
    }
    return 'Unknown Browser';
}

$browserInfo = getBrowserInfo($deviceBrowser);

if ($ipAddress == '::1' || $ipAddress == '127.0.0.1') {
    $ipAddress = '8.8.8.8';
}

$location = file_get_contents("http://ip-api.com/json/");
if ($location === false) {
    die('Error: Unable to fetch data from IP-API');
}
$locationData = json_decode($location, true);

if ($locationData && $locationData['status'] == 'success') {
    $country = $locationData['country'];
    $region = $locationData['regionName'];
    $city = $locationData['city'];
    $pin = $locationData['zip'];
}
else {
    $country = "Unable To Fetch User's Country";
    $region = "Unable To Fetch User's Region";
    $city = "Unable To Fetch User's City";
    $pin = "Unable To Fetch User's Pincode";
}

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$saltforpassword = "PAIRSALT";
$sql = "select id,password,username from controlroot where username = '$username'";  
$result = mysqli_query($con,$sql);    
if(mysqli_num_rows($result)==1)
{
	$row = mysqli_fetch_array($result);
   $hashedPassword = mysqli_real_escape_string($con, $row['password']);
   if (argon2idHashVerify($password, $saltforpassword, $hashedPassword)) {
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
      $_SESSION["rememberMe"] = (isset($_POST['rememberMe'])?$_POST['rememberMe']:0);
      if(isset($_POST['rememberMe'])){
         setcookie('rememberMe', $_POST['rememberMe'], time() + (86400 * 30), "/");
      }
   		$mail->addAddress('pairscript@gmail.com', 'Pairscript');
   		$mail->Subject = 'Successful Login Alert';
   		$mail->msgHTML('<div style="margin:0;padding:0" bgcolor="#E4E6F3">
      <table width="100%" height="100%" style="min-width:348px; background-color:#E4E6F3" border="0" cellspacing="0" cellpadding="0" lang="en">
         <tbody>
            <tr height="32" style="height:32px">
               <td></td>
            </tr>
            <tr align="center">
               <td>
                  <div>
                     <div></div>
                  </div>
                  <table border="0" cellspacing="0" cellpadding="0" style="padding-bottom:20px;max-width:516px;min-width:220px; ">
                     <tbody>
                        <tr>
                           <td width="8" style="width:8px"></td>
                           <td>
                              <div style="border-style:solid;border-width:thin;border-color:#dadce0;border-radius:8px;padding:20px 20px;background-color:#ffffff" align="center" class="m_37516624310573855mdv2rw">
                              <div style="margin-top: -30px;">
                                <img src="https://console.pairscript.com/assets/img/headerlogo.png" width="200" aria-hidden="true" style="margin-bottom:16px;margin-top:11px;" alt="Console" class="CToWUd">
                                 
                                 
                                  <div style="font-family:\'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;border-bottom:thin solid #dadce0;color:rgba(0,0,0,0.87);line-height:32px;padding-bottom:5px;text-align:center;word-break:break-word;margin-top:-15px;">
                            
                                 </div>
                                  </div>
                                 
                                 <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:20px;text-align:left">
                                    Dear Console,
                                    </div>
                                 
                                 <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:3px;text-align:left;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your account was successfully logged in.
                                    
                                    
                                    <div style="padding-top:3px;text-align:left;">   
                                  
                                  <p style="font-weight: bold;">Login Details:</p>

                                  <div style="text-align: left;margin-left: 35px;">
                                     Date and Time: '.$loginDateTime.'<br>
                                     IP Address: '.$ipAddress.'<br>
                                     Device/Browser: '.$browserInfo.'<br>
                                     Location: '.$city.', '.$region.', '.$country.', '.$pin.'
                                  </div>
                                  
                                  
                                </div>
                                    
                                   
                                 </div>
                                 
                                 
                                 <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:3px;text-align:center">
                                    <p style="text-align: left;">If this was you, no action is needed.</p>
                                    <p style="text-align: left;">If this wasn\'t you, please change your password and contact support at pairscript@gmail.com / +91 96 26 26 74 54.</p>
                                    <p style="text-align: left;">Thank you,<br>Pairscript</p>
                                    </div>
                                 
                              </div>
                           </td>
                           <td width="8" style="width:8px"></td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr height="32" style="height:32px">
               <td></td>
            </tr>
         </tbody>
      </table>
   </div>');
   		if (!$mail->send()) {
   			echo mysqli_error($con);
   		}
   		else{
         	header('location:controldashboard.php');
         }
   }
   else{
   	$mail->addAddress('pairscript@gmail.com', 'Pairscript');
		$mail->Subject = 'Unsuccessful Login Alert';
		$mail->msgHTML('<div style="margin:0;padding:0" bgcolor="#E4E6F3">
   <table width="100%" height="100%" style="min-width:348px; background-color:#E4E6F3" border="0" cellspacing="0" cellpadding="0" lang="en">
      <tbody>
         <tr height="32" style="height:32px">
            <td></td>
         </tr>
         <tr align="center">
            <td>
               <div>
                  <div></div>
               </div>
               <table border="0" cellspacing="0" cellpadding="0" style="padding-bottom:20px;max-width:516px;min-width:220px; ">
                  <tbody>
                     <tr>
                        <td width="8" style="width:8px"></td>
                        <td>
                           <div style="border-style:solid;border-width:thin;border-color:#dadce0;border-radius:8px;padding:20px 20px;background-color:#ffffff" align="center" class="m_37516624310573855mdv2rw">
                           <div style="margin-top: -30px;">
                             <img src="https://console.pairscript.com/assets/img/headerlogo.png" width="200" aria-hidden="true" style="margin-bottom:16px;margin-top:11px;" alt="Console" class="CToWUd">
                              
                              
                               <div style="font-family:\'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;border-bottom:thin solid #dadce0;color:rgba(0,0,0,0.87);line-height:32px;padding-bottom:5px;text-align:center;word-break:break-word;margin-top:-15px;">
                         
                              </div>
                               </div>
                              
                              <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:20px;text-align:left">
                                 Dear Console,
                                 </div>
                              
                              <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:3px;text-align:left;">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We noticed an unsuccessful login attempt on your account.
                                 
                                 
                                 <div style="padding-top:3px;text-align:left;">   
                               
                               <p style="font-weight: bold;">Login Details:</p>

                               <div style="text-align: left;margin-left: 35px;">
                                  Date and Time: '.$loginDateTime.'<br>
                                  IP Address: '.$ipAddress.'<br>
                                  Device/Browser: '.$browserInfo.'<br>
                                  Location: '.$city.', '.$region.', '.$country.', '.$pin.'
                               </div>
                               
                               
                             </div>
                                 
                                
                              </div>
                              
                              
                              <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:3px;text-align:center">
                                 <p style="text-align: left;">If this was you, no action is needed.</p>
                                 <p style="text-align: left;">If this wasn\'t you, please change your password and contact support at pairscript@gmail.com / +91 96 26 26 74 54.</p>
                                 <p style="text-align: left;">Thank you,<br>Pairscript</p>
                                 </div>
                              
                           </div>
                        </td>
                        <td width="8" style="width:8px"></td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
         <tr height="32" style="height:32px">
            <td></td>
         </tr>
      </tbody>
   </table>
</div>');
		if (!$mail->send()) {
			echo mysqli_error($con);
		}
		else{
      	header('location:index.php');
      }
   }
}
else{
	$mail->addAddress('pairscript@gmail.com', 'Pairscript');
	$mail->Subject = 'Unsuccessful Login Alert';
	$mail->msgHTML('<div style="margin:0;padding:0" bgcolor="#E4E6F3">
   <table width="100%" height="100%" style="min-width:348px; background-color:#E4E6F3" border="0" cellspacing="0" cellpadding="0" lang="en">
      <tbody>
         <tr height="32" style="height:32px">
            <td></td>
         </tr>
         <tr align="center">
            <td>
               <div>
                  <div></div>
               </div>
               <table border="0" cellspacing="0" cellpadding="0" style="padding-bottom:20px;max-width:516px;min-width:220px; ">
                  <tbody>
                     <tr>
                        <td width="8" style="width:8px"></td>
                        <td>
                           <div style="border-style:solid;border-width:thin;border-color:#dadce0;border-radius:8px;padding:20px 20px;background-color:#ffffff" align="center" class="m_37516624310573855mdv2rw">
                           <div style="margin-top: -30px;">
                             <img src="https://console.pairscript.com/assets/img/headerlogo.png" width="200" aria-hidden="true" style="margin-bottom:16px;margin-top:11px;" alt="Console" class="CToWUd">
                              
                              
                               <div style="font-family:\'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;border-bottom:thin solid #dadce0;color:rgba(0,0,0,0.87);line-height:32px;padding-bottom:5px;text-align:center;word-break:break-word;margin-top:-15px;">
                         
                              </div>
                               </div>
                              
                              <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:20px;text-align:left">
                                 Dear Console,
                                 </div>
                              
                              <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:3px;text-align:left;">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We noticed an unsuccessful login attempt on your account.
                                 
                                 
                                 <div style="padding-top:3px;text-align:left;">   
                               
                               <p style="font-weight: bold;">Login Details:</p>

                               <div style="text-align: left;margin-left: 35px;">
                                  Date and Time: '.$loginDateTime.'<br>
                                  IP Address: '.$ipAddress.'<br>
                                  Device/Browser: '.$browserInfo.'<br>
                                  Location: '.$city.', '.$region.', '.$country.', '.$pin.'
                               </div>
                               
                               
                             </div>
                                 
                                
                              </div>
                              
                              
                              <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:3px;text-align:center">
                                 <p style="text-align: left;">If this was you, no action is needed.</p>
                                 <p style="text-align: left;">If this wasn\'t you, please change your password and contact support at pairscript@gmail.com / +91 96 26 26 74 54.</p>
                                 <p style="text-align: left;">Thank you,<br>Pairscript</p>
                                 </div>
                              
                           </div>
                        </td>
                        <td width="8" style="width:8px"></td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
         <tr height="32" style="height:32px">
            <td></td>
         </tr>
      </tbody>
   </table>
</div>');
	if (!$mail->send()) {
		echo mysqli_error($con);
	}
	else{
      header('location:index.php');
   }
	//header('location:index.php');
}
}
$usernameval = '';
if (isset($_POST['submitfromsecurecontrol'])) {
   $usernameval = 'console';
   $_SESSION["tokenforconsole"] = '';
}
//ferose-finish
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include('externals.php');
?>
    <title>Login | Console | Pairscript</title>
    <meta name="description" content="Login | Console | Pairscript"/>

   
    <style>
*, *:before, *:after {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	color: #999;
	padding: 20px;
	display: flex;
	min-height: 100vh;
	align-items: center;
	font-family: 'Raleway';
	justify-content: center;
	background-color: #fbfbfb;
}
#mainButton {
	color: white;
	border: none;
	outline: none;
	font-size: 24px;
	font-weight: 200;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
	letter-spacing: 2px;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
	text-transform: uppercase;
	background-color: #00a7ee;
	-webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}
#mainButton .btn-text {
	z-index: 2;
	display: block;
	padding: 10px 20px;
	position: relative;
}
#mainButton .btn-text:hover {
	cursor: pointer;
}
#mainButton:after {
	top: -50%;
	z-index: 1;
	content: '';
	width: 150%;
	height: 200%;
	position: absolute;
	left: calc(-150% - 40px);
	background-color: rgba(255, 255, 255, 0.2);
	-webkit-transform: skewX(-40deg);
	-moz-transform: skewX(-40deg);
	-ms-transform: skewX(-40deg);
	-o-transform: skewX(-40deg);
	transform: skewX(-40deg);
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}
#mainButton:hover {
	cursor: default;
	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}
#mainButton:hover:after {
	-webkit-transform: translateX(100%) skewX(-30deg);
	-moz-transform: translateX(100%) skewX(-30deg);
	-ms-transform: translateX(100%) skewX(-30deg);
	-o-transform: translateX(100%) skewX(-30deg);
	transform: translateX(100%) skewX(-30deg);
}
#mainButton.active {
	box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
}
#mainButton.active .modal {
	-webkit-transform: scale(1, 1);
	-moz-transform: scale(1, 1);
	-ms-transform: scale(1, 1);
	-o-transform: scale(1, 1);
	transform: scale(1, 1);
}
#mainButton .modal {
	top: 0;
	left: 0;
	z-index: 3;
	width: 100%;
	height: 100%;
	padding: 20px;
	display: flex;
	position: fixed;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	background-color: inherit;
	transform-origin: center center;
	background-image: linear-gradient(to top left, #00a7ee 10%, #55ccff 65%, white 200%);
	-webkit-transform: scale(0, 0.00001);
	-moz-transform: scale(0, 0.00001);
	-ms-transform: scale(0, 0.00001);
	-o-transform: scale(0, 0.00001);
	transform: scale(0, 0.00001);
	-webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}
.close-button {
	top: 20px;
	right: 20px;
	position: absolute;
	-webkit-transition: opacity 0.2s ease-in;
	-moz-transition: opacity 0.2s ease-in;
	-ms-transition: opacity 0.2s ease-in;
	-o-transition: opacity 0.2s ease-in;
	transition: opacity 0.2s ease-in;
}
.close-button:hover {
	opacity: 0.5;
	cursor: pointer;
}
.form-title {
	margin-bottom: 15px;
	text-align:center;
}
.form-button {
	width: 100%;
	padding: 10px;
	color: #00a7ee;
	margin-top: 10px;
	max-width: 400px;
	text-align: center;
	border: solid 1px white;
	background-color: white;
	-webkit-transition: color 0.2s ease-in, background-color 0.2s ease-in;
	-moz-transition: color 0.2s ease-in, background-color 0.2s ease-in;
	-ms-transition: color 0.2s ease-in, background-color 0.2s ease-in;
	-o-transition: color 0.2s ease-in, background-color 0.2s ease-in;
	transition: color 0.2s ease-in, background-color 0.2s ease-in;
}
.form-button:hover {
	color: white;
	cursor: pointer;
	background-color: transparent;
}
form
{
	width:400px;
}
.input-group {
	width: 100%;
	font-size: 16px;
	max-width: 400px;
	padding-top: 20px;
	position: relative;
	margin-bottom: 15px;
}
.input-group input {
	width: 100%;
	color: white;
	border: none;
	outline: none;
	padding: 5px 0;
	line-height: 1;
	font-size: 16px;
	font-family: 'Raleway';
	border-bottom: solid 1px white;
	background-color: transparent;
	-webkit-transition: box-shadow 0.2s ease-in;
	-moz-transition: box-shadow 0.2s ease-in;
	-ms-transition: box-shadow 0.2s ease-in;
	-o-transition: box-shadow 0.2s ease-in;
	transition: box-shadow 0.2s ease-in;
}
.input-group input + label {
	left: 0;
	top: 20px;
	position: absolute;
	pointer-events: none;
	-webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}
.input-group input:focus {
	box-shadow: 0 1px 0 0 white;
}
.input-group input:focus + label, .input-group input.active + label {
	font-size: 12px;
	-webkit-transform: translateY(-20px);
	-moz-transform: translateY(-20px);
	-ms-transform: translateY(-20px);
	-o-transform: translateY(-20px);
	transform: translateY(-20px);
}
.codepen-by {
	left: 0;
	bottom: 0;
	width: 100%;
	padding: 10px;
	font-size: 16px;
	position: absolute;
	text-align: center;
	text-transform: none;
	letter-spacing: initial;
}
.icon-lock {
	width: 48px;
	height: 38px;
	position: relative;
	overflow: hidden;
	top: -8px;
	margin-left: 0px;
	margin-bottom: 0px;
}
.icon-lock .lock-top-1 {
	width: 40%;
	height: 40%;
	position: absolute;
	left: 50%;
	margin-left: -20%;
	top: 14%;
	background-color: #000;
	border-radius: 40%;
}
.icon-lock .lock-top-2 {
	width: 24%;
	height: 40%;
	position: absolute;
	left: 50%;
	margin-left: -12%;
	top: 22%;
	background-color: #151517;
	border-radius: 25%;
}
.icon-lock .lock-body {
	width: 60%;
	height: 48%;
	position: absolute;
	left: 50%;
	margin-left: -30%;
	bottom: 11%;
	background-color: #000;
	border-radius: 15%;
}
.icon-lock .lock-hole {
	width: 16%;
	height: 16%;
	position: absolute;
	left: 50%;
	margin-left: -8%;
	top: 51%;
	border-radius: 100%;
	background-color: #151517;
}
.icon-lock .lock-hole:after {
	content: "";
	width: 43%;
	height: 78%;
	position: absolute;
	left: 50%;
	margin-left: -20%;
	top: 100%;
	background-color: inherit;
}

@media screen and (min-device-width: 300px) and (max-device-width: 450px) { 
    form {
        width: 300px;
        padding: 20px;
    }

}

@media screen and (min-device-width: 200px) and (max-device-width: 300px) { 
    form {
        width: 200px;
        padding: 10px;
    }

}
    </style>
</head>

<body>
<style media="" data-href="https://fonts.googleapis.com/css?family=Raleway:400,500,300">
/* latin-ext */
@font-face {
font-family: 'Raleway';
font-style: normal;
font-weight: 300;
src: local('Raleway Light'), local('Raleway-Light'), url(https://fonts.gstatic.com/s/raleway/v11/ZKwULyCG95tk6mOqHQfRBCEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
font-family: 'Raleway';
font-style: normal;
font-weight: 300;
src: local('Raleway Light'), local('Raleway-Light'), url(https://fonts.gstatic.com/s/raleway/v11/-_Ctzj9b56b8RgXW8FArifk_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* latin-ext */
@font-face {
font-family: 'Raleway';
font-style: normal;
font-weight: 400;
src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v11/yQiAaD56cjx1AooMTSghGfY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
font-family: 'Raleway';
font-style: normal;
font-weight: 400;
src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v11/0dTEPzkLWceF7z0koJaX1A.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* latin-ext */
@font-face {
font-family: 'Raleway';
font-style: normal;
font-weight: 500;
src: local('Raleway Medium'), local('Raleway-Medium'), url(https://fonts.gstatic.com/s/raleway/v11/Li18TEFObx_yGdzKDoI_ciEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
font-family: 'Raleway';
font-style: normal;
font-weight: 500;
src: local('Raleway Medium'), local('Raleway-Medium'), url(https://fonts.gstatic.com/s/raleway/v11/CcKI4k9un7TZVWzRVT-T8_k_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
</style>
    <div id="mainButton" class="">
        <div class="btn-text" onclick="openForm()">
            <div class="icon-lock" style="float: left;margin-top: 7px;">
                <div class="lock-top-1" style="background-color: #E5E9EA"></div>
                <div class="lock-top-2"></div>
                <div class="lock-body" style="background-color: #E5E9EA"></div>
                <div class="lock-hole"></div>
            </div>
            Locked
        </div>
        <div class="modal">
        <div class="continer">
      
            <form accept-charset="utf-8" action="" method="post" onsubmit="return checkvalidate();">
                <div class="close-button" onclick="closeForm()">x</div>
                <div class="form-title">Sign In</div>
                <div class="input-group">
                    <input type="text"  name="username" id="username" value="<?=$usernameval?>" required onblur="checkInput(this)">
                    <label style="color: white;"  for="name">Username</label>
                </div>
                
                <div class="input-group">
                    <input type="password"  name="password" id="password" required onblur="checkInput(this)">
                    <label style="color: white;"  for="password">Password</label>
                </div>

               <div class="mb-2 text-center">
                  <label style="font-size:13px;color:white">
                     <input type="checkbox" name="rememberMe" id="rememberMe" value="1" <?=(((isset($_SESSION['rememberMe']))&&($_SESSION['rememberMe']==1))?'checked':'')?> style="height:11px;">
                     Remember me
                  </label>
               </div>
               
                    <button style="margin-top: 0px;padding-top: 0px;padding-bottom: 0px;" class="form-button" type="submit" name="submit">Go</button>

                <div class="codepen-by"> Made with <i class="fa fa-heart" style="color:red;"></i> by
                <a href="https://www.pairscript.com" class="text-dark" target="_blank">Pairscript</a>
                for a better web.</div>
            </form>
        </div>
        </div>
        </div>

        



    </div>
    <div class="codepen-by"> Made with <i class="fa fa-heart" style="color:red;"></i> by
                <a href="https://www.pairscript.com" class="text-info" target="_blank">Pairscript</a>
                for a better web.</div>
    <script>
    var button = document.getElementById('mainButton');
    var openForm = function() {
        button.className = 'active';
    };
    var checkInput = function(input) {
        if (input.value.length > 0) {
            input.className = 'active';
        } else {
            input.className = '';
        }
    };
    var closeForm = function() {
        button.className = '';
    };
    document.addEventListener("keyup", function(e) {
        if (e.keyCode == 27 || e.keyCode == 13) {
            closeForm();
        }
    });
    //# sourceURL=pen.js
   <?php
      if ($usernameval!='') {
   ?>
   setTimeout(function(){
      openForm();
      document.getElementById("username").focus();
      document.getElementById("password").focus();
      document.getElementById("password").value = '';
   },1000);
   <?php
      }
   ?>
    </script>
</body>

</html>