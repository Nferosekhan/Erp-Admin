<?php
include('bd.php');
include('session.php');	
if(!isset($_SESSION["username"])){
	header('location:index.php');
}
$sqliallcount=mysqli_query($con, "SELECT id FROM paircustoms ORDER BY expdate ASC, remindon DESC");
$sqliactivecount=mysqli_query($con, "SELECT id FROM paircustoms WHERE activestatus='1' ORDER BY expdate ASC, remindon DESC");
$sqliinactivecount=mysqli_query($con, "SELECT id FROM paircustoms WHERE activestatus='0' ORDER BY expdate ASC, remindon DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include('externals.php');
?>
  <title>
    Custom Users | Console | Pairscript
  </title>
  <meta name="description" content="Custom Users | Console | Pairscript"/>
<style type="text/css">
.blinkrow{
  background-color: red !important;
  color: white !important;
  animation: blinkrows 1s linear infinite;
}
.blinkrow .blinkornone{
color: white !important;
}
@keyframes blinkrows{
  0%{opacity: 0;}
  50%{opacity: .5;}
  100%{opacity: 1;}
}
    textarea{
      overflow-y: hidden !important;
      border: none !important;
      resize: none !important;
      outline: none !important;
      box-shadow: none !important;
      padding: 0px !important;
      margin-top: 3px !important;
      font-size: 13px !important;
      color: #212529 !important;
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
     <div class="container-fluid py-4 bg-body">
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
             <div class="card-body p-3" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
                  <p class="mb-3" style="color:black;font-size: 20px;margin-top: -8px;"><i class="fa fa-laptop"></i> Custom Users</p>
			 <div align="right" class=" p-2" style="margin-top: -60px;">
			 <a href="customadd.php" class="btn btn-sm btn-custom add" style="font-size: 13px;height: 24px;margin-bottom:1rem;margin-top: 9px;margin-right:-9px;padding-right: 5px;"><p style="width: max-content;margin-top:-5px;margin-left: -6px;padding: 0px;"><i class="fa fa-plus" style="font-size:13px;padding: 0px;width: max-content;"></i> &nbsp; <span style="margin-left: -5px;width: max-content;">New User</span></p></a>
			 <br>
			 </div>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <button class="nav-link" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">
      <div class="customcont-header ml-0">
        <a class="customcont-heading" style="font-size: 18px;">All <span style="position: relative;top: -1.5px;" class="badge badge-sm mybadge"><?=mysqli_num_rows($sqliallcount)?></span></a>
      </div>
    </button>
    <button class="nav-link active" id="nav-active-tab" data-bs-toggle="tab" data-bs-target="#nav-active" type="button" role="tab" aria-controls="nav-active" aria-selected="true">
      <div class="customcont-header ml-0">
        <a class="customcont-heading" style="font-size: 18px;">Active <span style="position: relative;top: -1.5px;" class="badge badge-sm mybadge"><?=mysqli_num_rows($sqliactivecount)?></span></a>
      </div>
    </button>
    <button class="nav-link" id="nav-inactive-tab" data-bs-toggle="tab" data-bs-target="#nav-inactive" type="button" role="tab" aria-controls="nav-inactive" aria-selected="false">
      <div class="customcont-header ml-0">
        <a class="customcont-heading" style="font-size:18px;">Expired <span style="position: relative;top: -1.5px;" class="badge badge-sm mybadge bg-danger"><?=mysqli_num_rows($sqliinactivecount)?></span></a>
      </div>
    </button>
  </div>
</nav>
<div class="tab-content mt-5" id="nav-tabContent" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
  <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
              <div class="table-responsive p-0">
                <table class="table table-bordered align-items-center mb-0" style="table-layout: fixed;">
                  <thead>
                    <tr>
					  <td class="text-uppercase" style="width:53px;"><span style="font-size:13px;">URL</span></td><td class="text-uppercase" style="width:64px;"><span style="font-size:13px;">SUB URL</span></td><td class="text-uppercase" style="width:39px;"><span style="font-size:13px;">EXPIRY DATE</span></td><td class="text-uppercase" style="width:42px;"><span style="font-size:13px;">REMIND ME IN</span></td><td class="text-uppercase" style="width:42px;"><span style="font-size:13px;">CONTACT</span></td><td class="text-uppercase" style="width:50px;"><span style="font-size:13px;">REPRESENTATIVE</span></td><td class="text-uppercase" style="width:50px;"><span style="font-size:13px;">STATUS</span></td>
					  
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				  $count=1;
				  $sqli=mysqli_query($con, "select * from paircustoms order by expdate asc,remindon desc");
				  while($info=mysqli_fetch_array($sqli))
				  {
$expiryDate = strtotime($info['expdate']);
$reminderDays = $info['remindon'];
$reminderDate = strtotime("-$reminderDays days", $expiryDate);
$currentDate = time();
					  ?>
                    <tr onclick="window.open('customview.php?id=<?=$info['id']?>', '_self')" class="<?=((($currentDate >= $reminderDate)))?'notblinkrow':'notblinkrow'?>">
									
						<td data-label="URL" style="color:#1878F1;" class="blinkornone"><span class="wrapword"><?=$info['url']?></span>  </td>
					  <td data-label="SUB URL" class="">
           <textarea class="form-control  form-control-sm suv-textarea" id="suv<?=$count?>" name="suv<?=$count?>" placeholder="SUB URL" readonly style="display: none;"><?=$info['suv']?></textarea>
           <div id="suvans<?=$count?>"></div><?=($info['suv']!='')?'':'&nbsp;'?></td>
					  <td data-label="EXPIRY DATE" class=""> <?=date('d/m/Y', strtotime($info['expdate']))?></td>
            <td data-label="REMIND ME IN" class=""> <?=$info['remindon']?> Days</td><td data-label="CONTACT" class=""><?=$info['contact']?></td><td data-label="REPRESENTATIVE" class=""><?=$info['represent']?></td><td data-label="STATUS" class=""><span style="position: relative;top: -1.5px;" class="badge badge-sm mybadge <?=(($info['activestatus']=='1')?'':'bg-danger')?>"><?=(($info['activestatus']=='1')?'ACTIVE':'EXPIRED')?></span></td>
                    </tr>
					<?php
					$count++;
				  }
				  ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
  <div class="tab-pane fade show active" id="nav-active" role="tabpanel" aria-labelledby="nav-active-tab">
              <div class="table-responsive p-0">
                <table class="table table-bordered align-items-center mb-0" style="table-layout: fixed;">
                  <thead>
                    <tr>
            <td class="text-uppercase" style="width:53px;"><span style="font-size:13px;">URL</span></td><td class="text-uppercase" style="width:64px;"><span style="font-size:13px;">SUB URL</span></td><td class="text-uppercase" style="width:39px;"><span style="font-size:13px;">EXPIRY DATE</span></td><td class="text-uppercase" style="width:42px;"><span style="font-size:13px;">REMIND ME IN</span></td><td class="text-uppercase" style="width:42px;"><span style="font-size:13px;">CONTACT</span></td><td class="text-uppercase" style="width:50px;"><span style="font-size:13px;">REPRESENTATIVE</span></td>
            
                    </tr>
                  </thead>
                  <tbody>
          <?php
          $count=1;
          $sqli=mysqli_query($con, "SELECT * FROM paircustoms WHERE activestatus='1' ORDER BY expdate ASC, remindon DESC");
          while($info=mysqli_fetch_array($sqli))
          {
$expiryDate = strtotime($info['expdate']);
$reminderDays = $info['remindon'];
$reminderDate = strtotime("-$reminderDays days", $expiryDate);
$currentDate = time();
            ?>
                    <tr onclick="window.open('customview.php?id=<?=$info['id']?>', '_self')" class="<?=((($currentDate >= $reminderDate)))?'blinkrow':'notblinkrow'?>">
                  
            <td data-label="URL" style="color:#1878F1;" class="blinkornone"><span class="wrapword"><?=$info['url']?></span>  </td>
            <td data-label="SUB URL" class="">
           <textarea class="form-control  form-control-sm suv-textarea" id="suv<?=$count?>" name="suv<?=$count?>" placeholder="SUB URL" readonly style="display: none;"><?=$info['suv']?></textarea>
           <div id="suvans<?=$count?>"></div><?=($info['suv']!='')?'':'&nbsp;'?></td>
            <td data-label="EXPIRY DATE" class=""> <?=date('d/m/Y', strtotime($info['expdate']))?></td>
            <td data-label="REMIND ME IN" class=""> <?=$info['remindon']?> Days</td><td data-label="CONTACT" class=""><?=$info['contact']?></td><td data-label="REPRESENTATIVE" class=""><?=$info['represent']?></td>
                    </tr>
          <?php
          $count++;
          }
          ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
  <div class="tab-pane fade" id="nav-inactive" role="tabpanel" aria-labelledby="nav-inactive-tab">
              <div class="table-responsive p-0">
                <table class="table table-bordered align-items-center mb-0" style="table-layout: fixed;">
                  <thead>
                    <tr>
            <td class="text-uppercase" style="width:53px;"><span style="font-size:13px;">URL</span></td><td class="text-uppercase" style="width:64px;"><span style="font-size:13px;">SUB URL</span></td><td class="text-uppercase" style="width:39px;"><span style="font-size:13px;">EXPIRY DATE</span></td><td class="text-uppercase" style="width:42px;"><span style="font-size:13px;">REMIND ME IN</span></td><td class="text-uppercase" style="width:42px;"><span style="font-size:13px;">CONTACT</span></td><td class="text-uppercase" style="width:50px;"><span style="font-size:13px;">REPRESENTATIVE</span></td>
            
                    </tr>
                  </thead>
                  <tbody>
          <?php
          $count=1;
          $sqli=mysqli_query($con, "SELECT * FROM paircustoms WHERE activestatus='0' ORDER BY expdate ASC, remindon DESC");
          while($info=mysqli_fetch_array($sqli))
          {
            ?>
                    <tr onclick="window.open('customview.php?id=<?=$info['id']?>', '_self')" class="notblinkrow">
                  
            <td data-label="URL" style="color:#1878F1;" class="blinkornone"><span class="wrapword"><?=$info['url']?></span>  </td>
            <td data-label="SUB URL" class="">
           <textarea class="form-control  form-control-sm suv-textarea" id="suv<?=$count?>" name="suv<?=$count?>" placeholder="SUB URL" readonly style="display: none;"><?=$info['suv']?></textarea>
           <div id="suvans<?=$count?>"></div><?=($info['suv']!='')?'':'&nbsp;'?></td>
            <td data-label="EXPIRY DATE" class=""> <?=date('d/m/Y', strtotime($info['expdate']))?></td>
            <td data-label="REMIND ME IN" class=""> <?=$info['remindon']?> Days</td><td data-label="CONTACT" class=""><?=$info['contact']?></td><td data-label="REPRESENTATIVE" class=""><?=$info['represent']?></td>
                    </tr>
          <?php
          $count++;
          }
          ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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
<script>
window.onload = function () {
    convertToAnchors();
}

function convertToAnchors() {
    $('.suv-textarea').each(function(index, element) {
        var textareaContent = $(element).val();
        var resultId = 'suvans' + (index + 1);
        var lines = textareaContent.split('\n');
        var result = '';
        
        lines.forEach(function(line, lineIndex) {
            line = line.trim();
            // if (line !== '') {
                result += line;
                if (lineIndex < lines.length - 1) {
                    result += '<br>';
                }
            // }
        });

        $('#' + resultId).html(result);
    });
}
</script>
</body>

</html>