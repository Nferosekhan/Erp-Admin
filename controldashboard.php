<?php
include('bd.php');
include('session.php');	
if(!isset($_SESSION["username"])){
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include('externals.php');
?>
  <title>
   Dashboard | Console | Pairscript
  </title>
  <meta name="description" content="Dashboard | Console | Pairscript"/>
<style>
    .software-box {
      border: 1px solid #dee2e6;
      padding: 20px;
      margin: -3px -9px;
      transition: transform 0.3s ease-in-out;
      cursor: pointer;
      border-radius: 0px;
    }

    .software-box:hover {
      transform: scale(1.05);
    }
    .software-box p {
      color: green;
      font-size: 10px;
    }
      #loginforms .col-lg-2{
        margin: 16px 25px 16px 0px;
        padding: 0px 8px;
      }
      #loginforms button{
        width: 115%;
      }
    @media only screen and (max-width: 991px) {
      #loginforms button{
        width: 100% !important;
      }
    }
    .fa-bell{
      -webkit-animation: ring 6s .7s ease-in-out infinite;
      -webkit-transform-origin: 50% 4px;
      -moz-animation: ring 6s .7s ease-in-out infinite;
      -moz-transform-origin: 50% 4px;
      animation: ring 6s .7s ease-in-out infinite;
      transform-origin: 50% 4px;
    }
    @-webkit-keyframes ring {
      0% { -webkit-transform: rotateZ(0); }
      1% { -webkit-transform: rotateZ(30deg); }
      3% { -webkit-transform: rotateZ(-28deg); }
      5% { -webkit-transform: rotateZ(34deg); }
      7% { -webkit-transform: rotateZ(-32deg); }
      9% { -webkit-transform: rotateZ(30deg); }
      11% { -webkit-transform: rotateZ(-28deg); }
      13% { -webkit-transform: rotateZ(26deg); }
      15% { -webkit-transform: rotateZ(-24deg); }
      17% { -webkit-transform: rotateZ(22deg); }
      19% { -webkit-transform: rotateZ(-20deg); }
      21% { -webkit-transform: rotateZ(18deg); }
      23% { -webkit-transform: rotateZ(-16deg); }
      25% { -webkit-transform: rotateZ(14deg); }
      27% { -webkit-transform: rotateZ(-12deg); }
      29% { -webkit-transform: rotateZ(10deg); }
      31% { -webkit-transform: rotateZ(-8deg); }
      33% { -webkit-transform: rotateZ(6deg); }
      35% { -webkit-transform: rotateZ(-4deg); }
      37% { -webkit-transform: rotateZ(2deg); }
      39% { -webkit-transform: rotateZ(-1deg); }
      41% { -webkit-transform: rotateZ(1deg); }
      43% { -webkit-transform: rotateZ(0); }
      100% { -webkit-transform: rotateZ(0); }
    }
    @-moz-keyframes ring {
      0% { -moz-transform: rotate(0); }
      1% { -moz-transform: rotate(30deg); }
      3% { -moz-transform: rotate(-28deg); }
      5% { -moz-transform: rotate(34deg); }
      7% { -moz-transform: rotate(-32deg); }
      9% { -moz-transform: rotate(30deg); }
      11% { -moz-transform: rotate(-28deg); }
      13% { -moz-transform: rotate(26deg); }
      15% { -moz-transform: rotate(-24deg); }
      17% { -moz-transform: rotate(22deg); }
      19% { -moz-transform: rotate(-20deg); }
      21% { -moz-transform: rotate(18deg); }
      23% { -moz-transform: rotate(-16deg); }
      25% { -moz-transform: rotate(14deg); }
      27% { -moz-transform: rotate(-12deg); }
      29% { -moz-transform: rotate(10deg); }
      31% { -moz-transform: rotate(-8deg); }
      33% { -moz-transform: rotate(6deg); }
      35% { -moz-transform: rotate(-4deg); }
      37% { -moz-transform: rotate(2deg); }
      39% { -moz-transform: rotate(-1deg); }
      41% { -moz-transform: rotate(1deg); }
      43% { -moz-transform: rotate(0); }
      100% { -moz-transform: rotate(0); }
    }

    @keyframes ring {
      0% { transform: rotate(0); }
      1% { transform: rotate(30deg); }
      3% { transform: rotate(-28deg); }
      5% { transform: rotate(34deg); }
      7% { transform: rotate(-32deg); }
      9% { transform: rotate(30deg); }
      11% { transform: rotate(-28deg); }
      13% { transform: rotate(26deg); }
      15% { transform: rotate(-24deg); }
      17% { transform: rotate(22deg); }
      19% { transform: rotate(-20deg); }
      21% { transform: rotate(18deg); }
      23% { transform: rotate(-16deg); }
      25% { transform: rotate(14deg); }
      27% { transform: rotate(-12deg); }
      29% { transform: rotate(10deg); }
      31% { transform: rotate(-8deg); }
      33% { transform: rotate(6deg); }
      35% { transform: rotate(-4deg); }
      37% { transform: rotate(2deg); }
      39% { transform: rotate(-1deg); }
      41% { transform: rotate(1deg); }
      43% { transform: rotate(0); }
      100% { transform: rotate(0); }
    }
  </style>
</head>

<body class="g-sidenav-show" style="background-color:#F1F2F6">
  <?php
  include('controlsidebar.php');
  ?>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-0 ">
    <!-- Navbar -->
    <?php
    include('controlnavhead.php');
    ?>
    <!-- End Navbar -->
    <div class="container-fluid py-3 bg-body" style="min-height:400px;">
        
  <?php
   // notifications
     if(isset($_GET['remarks']))
     {
     ?>
     <div class="alert alert-dismissible" style="position: relative;top: 50px;z-index: 1999;height: 10px;background-color: #53b05a !important;margin-top: -50px;border-radius: 0px !important;">
    <button type="button" class="btn-close" data-bs-dismiss="alert" style="z-index: 900000;color: white;top: -11px;background-image: white !important;"></button><p style="position: relative;top: -10px;color: white !important;background-color: #53b05a !important;">
    <i class="fa fa-check"></i> &nbsp;<?=$_GET['remarks']?></p>
  </div>
     <?php
     }
     ?>
     <?php
     if(isset($_GET['error']))
     {
     ?>
      <div class="alert alert-dismissible" style="position: relative;top: 50px;z-index: 1999;height: 10px;background-color: #d64830 !important;margin-top: -50px;border-radius: 0px !important;">
    <button type="button" class="btn-close" data-bs-dismiss="alert" style="z-index: 900000;color: white;top: -11px;background-image: white !important;"></button><p style="position: relative;top: -10px;color: white !important;background-color: #d64830 !important;">
    <i class="fa fa-times"></i> &nbsp;<?=$_GET['error']?></p>
  </div>
     <?php
     }
     ?>
    <div style="max-width: 1650px;">
      <div class="row min-height-480">
        <div class="col-12">
          <div class="card mb-4 mt-5">
             <div class="card-body p-3">

                 <div class="customcont-header ml-0 mb-1" style="height:41px;font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
	<a class="customcont-heading customcont-heading-active">Dashboard</a>
	</div>

<?php
$tonic_query = mysqli_query($tonic_con, "SELECT count(id) as num_of_users FROM paircontrols WHERE is_active='0' AND role='SUPER ADMIN'");
$tonic_users = mysqli_fetch_array($tonic_query);
$tonicbellnotifications = 0;
$tonic_usersExistsQuery = "DESCRIBE paircontrols expdate";
$tonic_usersExistsResult = $tonic_con->query($tonic_usersExistsQuery);
if ($tonic_usersExistsResult) {
if ($tonic_usersExistsResult->num_rows == 1) {
$sqli=mysqli_query($tonic_con, "select * from paircontrols where is_active='0' and role='SUPER ADMIN' order by id desc");
while($info=mysqli_fetch_array($sqli)){
$expiryDate = strtotime($info['expdate']);
$reminderDays = $info['remindon'];
$reminderDate = strtotime("-$reminderDays days", $expiryDate);
$currentDate = time();
if ($currentDate >= $reminderDate) {
$tonicbellnotifications = 1;
}
}
}
}

$tasky_query = mysqli_query($tasky_con, "SELECT count(id) as num_of_users FROM paircontrols WHERE is_active='0' AND role='SUPER ADMIN'");
$tasky_users = mysqli_fetch_array($tasky_query);
$taskybellnotifications = 0;
$tasky_usersExistsQuery = "DESCRIBE paircontrols expdate";
$tasky_usersExistsResult = $tasky_con->query($tasky_usersExistsQuery);
if ($tasky_usersExistsResult) {
if ($tasky_usersExistsResult->num_rows == 1) {
$sqli=mysqli_query($tasky_con, "select * from paircontrols where is_active='0' and role='SUPER ADMIN' order by id desc");
while($info=mysqli_fetch_array($sqli)){
$expiryDate = strtotime($info['expdate']);
$reminderDays = $info['remindon'];
$reminderDate = strtotime("-$reminderDays days", $expiryDate);
$currentDate = time();
if ($currentDate >= $reminderDate) {
$taskybellnotifications = 1;
}
}
}
}

$betatonic_query = mysqli_query($betatonic_con, "SELECT count(id) as num_of_users FROM paircontrols WHERE is_active='0' AND role='SUPER ADMIN'");
$betatonic_users = mysqli_fetch_array($betatonic_query);
$betatonicbellnotifications = 0;
$betatonic_usersExistsQuery = "DESCRIBE paircontrols expdate";
$betatonic_usersExistsResult = $betatonic_con->query($betatonic_usersExistsQuery);
if ($betatonic_usersExistsResult) {
if ($betatonic_usersExistsResult->num_rows == 1) {
$sqli=mysqli_query($betatonic_con, "select * from paircontrols where is_active='0' and role='SUPER ADMIN' order by id desc");
while($info=mysqli_fetch_array($sqli)){
$expiryDate = strtotime($info['expdate']);
$reminderDays = $info['remindon'];
$reminderDate = strtotime("-$reminderDays days", $expiryDate);
$currentDate = time();
if ($currentDate >= $reminderDate) {
$betatonicbellnotifications = 1;
}
}
}
}

$betatasky_query = mysqli_query($betatasky_con, "SELECT count(id) as num_of_users FROM paircontrols WHERE is_active='0' AND role='SUPER ADMIN'");
$betatasky_users = mysqli_fetch_array($betatasky_query);
$betataskybellnotifications = 0;
$betatasky_usersExistsQuery = "DESCRIBE paircontrols expdate";
$betatasky_usersExistsResult = $betatasky_con->query($betatasky_usersExistsQuery);
if ($betatasky_usersExistsResult) {
if ($betatasky_usersExistsResult->num_rows == 1) {
$sqli=mysqli_query($betatasky_con, "select * from paircontrols where is_active='0' and role='SUPER ADMIN' order by id desc");
while($info=mysqli_fetch_array($sqli)){
$expiryDate = strtotime($info['expdate']);
$reminderDays = $info['remindon'];
$reminderDate = strtotime("-$reminderDays days", $expiryDate);
$currentDate = time();
if ($currentDate >= $reminderDate) {
$betataskybellnotifications = 1;
}
}
}
}

$custom_query = mysqli_query($con, "SELECT count(id) as num_of_users FROM paircustoms where activestatus='1'");
$custom_users = mysqli_fetch_array($custom_query);
$custombellnotifications = 0;
$sqli=mysqli_query($con, "select * from paircustoms where activestatus='1' order by id desc");
while($info=mysqli_fetch_array($sqli)){
$expiryDate = strtotime($info['expdate']);
$reminderDays = $info['remindon'];
$reminderDate = strtotime("-$reminderDays days", $expiryDate);
$currentDate = time();
if ($currentDate >= $reminderDate) {
$custombellnotifications = 1;
}
}
?>

<form method="POST" id="loginforms" action="">
  <input type="text" name="tokenforconsole" placeholder="Console Token" required value="yes" style="display: none;">
<div class="container m-3">
  <div class="row">
    <div class="col-lg-2">
      <button name="submitfromsecure" onclick="submitForm('https://tonic.pairscript.com/control/index.php')">
      <div class="software-box" style="background-color: #ec4439;">
        <div style="color:white !important;" class="row">
          <div class="col-12 mb-3" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 16px;line-height: 1.5em;font-weight: 600;">TONIC <span style="float: right;color:white;font-size:25px;<?=(($tonicbellnotifications==1)?'visibility: visible;':'visibility: hidden;')?>"><i class="fa fa-bell"></i></span></div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 10px;font-weight:600;letter-spacing:.04em;line-height: 1rem;">ACTIVE USERS</div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 24px;line-height:2rem;">
            <?=$tonic_users['num_of_users']?>
          </div>
        </div>
      </div>
      </button>
    </div>
    <div class="col-lg-2">
      <button name="submitfromsecure" onclick="submitForm('https://tasky.pairscript.com/control/index.php')">
      <div class="software-box" style="background-color: #2b78f1;">
        <div style="color:white !important;" class="row">
          <div class="col-12 mb-3" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 16px;line-height: 1.5em;font-weight: 600;">TASKY <span style="float: right;color:white;font-size:25px;<?=(($taskybellnotifications==1)?'visibility: visible;':'visibility: hidden;')?>"><i class="fa fa-bell"></i></span></div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 10px;font-weight:600;letter-spacing:.04em;line-height: 1rem;">ACTIVE USERS</div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 24px;line-height:2rem;">
            <?=$tasky_users['num_of_users']?>
          </div>
        </div>
      </div>
      </button>
    </div>
    <div class="col-lg-2">
      <button name="submitfromsecure" onclick="submitForm('https://betatonic.pairscript.com/control/index.php')">
      <div class="software-box" style="background-color: #22a658;">
        <div style="color:white !important;" class="row">
          <div class="col-12 mb-3" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 16px;line-height: 1.5em;font-weight: 600;">BETA TONIC <span style="float: right;color:white;font-size:25px;<?=(($betatonicbellnotifications==1)?'visibility: visible;':'visibility: hidden;')?>"><i class="fa fa-bell"></i></span></div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 10px;font-weight:600;letter-spacing:.04em;line-height: 1rem;">ACTIVE USERS</div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 24px;line-height:2rem;">
            <?=$betatonic_users['num_of_users']?>
          </div>
        </div>
      </div>
      </button>
    </div>
    <div class="col-lg-2">
      <button name="submitfromsecure" onclick="submitForm('https://betatasky.pairscript.com/control/index.php')">
      <div class="software-box" style="background-color: #fdbd08;">
        <div style="color:white !important;" class="row">
          <div class="col-12 mb-3" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 16px;line-height: 1.5em;font-weight: 600;">BETA TASKY <span style="float: right;color:white;font-size:25px;<?=(($betataskybellnotifications==1)?'visibility: visible;':'visibility: hidden;')?>"><i class="fa fa-bell"></i></span></div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 10px;font-weight:600;letter-spacing:.04em;line-height: 1rem;">ACTIVE USERS</div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 24px;line-height:2rem;">
            <?=$betatasky_users['num_of_users']?>
          </div>
        </div>
      </div>
      </button>
    </div>
    <div class="col-lg-2">
      <button name="submiting" onclick="submitForm('custom.php')">
      <div class="software-box" style="background-color: #ffffff;">
        <div style="color: royalblue !important;" class="row">
          <div class="col-12 mb-3" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 16px;line-height: 1.5em;font-weight: 600;">CUSTOM <span style="float: right;color:red;font-size:25px;<?=(($custombellnotifications==1)?'visibility: visible;':'visibility: hidden;')?>"><i class="fa fa-bell"></i></span></div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 10px;font-weight:600;letter-spacing:.04em;line-height: 1rem;">ACTIVE USERS</div>
          <div class="col-12" style="font-family:'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;text-align:left;font-size: 24px;line-height:2rem;">
            <?=$custom_users['num_of_users']?>
          </div>
        </div>
      </div>
      </button>
    </div>
  </div>
</div> 
</form>

	</div>
	</div>
	</div>
	</div>
	</div>
    
     <?php 
	  include('footer.php');
	  ?>
    </div>
  </main>
 <?php
 include('fexternals.php');
 ?>
 <script type="text/javascript">
   function submitForm(targetUrl) {
    var form = document.getElementById("loginforms");
    form.action = targetUrl;
    form.submit();
  }
 </script>
</body>

</html>