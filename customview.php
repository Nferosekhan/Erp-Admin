<?php
include('bd.php');
include('session.php');	
if(!isset($_SESSION["username"])){
	header('location:index.php');
}
if(isset($_GET['id']))
{
$id=mysqli_real_escape_string($con, $_GET['id']);
$sqli=mysqli_query($con, "select * from paircustoms where id='".$id."' order by id asc");
if(mysqli_num_rows($sqli)>0)
{
$info=mysqli_fetch_array($sqli);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include('externals.php');
?>
  <title>
    Users &gt; <?= $info['url'] ?> | Custom | Console | Pairscript
  </title>
  <meta name="description" content="Users &gt; <?= $info['url'] ?> | Custom | Console | Pairscript"/>
  <style type="text/css">
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
   <link href="../assets/css/bootstrap-toggle.min.css" rel="stylesheet">
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
     ?>       <div style="max-width: 1650px;">
      <div class="row min-height-480">
        <div class="col-12">
          <div class="card mb-4 mt-5">
             <div class="card-body p-3" style="z-index:0;">

<div class="row" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
<div class="col-lg-6">
 <p class="mb-3" style="font-size: 14.6px;color: black;position: relative;top: -12px;"><a href="custom.php" style="color: #1878F1"> Users</a> <span>&gt;</span> <?= $info['url'] ?></p>
 <div class="mt-3" style="border-top: 1px solid #dee2e6;position: relative;top: -27px;"></div>
    <p class="mb-0" style="font-size: 20px;color: black;position: relative;top: -10px;margin-bottom: -15px !important;"><i class="fa fa-eye"></i> Users</p>
 </div>
 <div class="col-lg-6">
 <span style="float:right" class="mb-3">
<a class="btn btn-primary btn-sm btn-custom-grey" href="customedit.php?id=<?=$info['id']?>" style="margin-bottom:0rem; margin-right:10px;"><i class="fa fa-pencil-alt"></i> Edit</a>
  </span>
 <span style="float:right;<?=(($info['activestatus']=='0')?'display: none;':'')?>" class="mb-3">
<a class="btn btn-primary btn-sm btn-custom-grey" href="movetoexpired.php?id=<?=$info['id']?>&req=0" style="margin-bottom:0rem; margin-right:10px;"><i class="fa fa-ban"></i> Move to Expired</a>
  </span>
 <span style="float:right;<?=(($info['activestatus']=='1')?'display: none;':'')?>" class="mb-3">
<a class="btn btn-primary btn-sm btn-custom-grey" href="movetoexpired.php?id=<?=$info['id']?>&req=1" style="margin-bottom:0rem; margin-right:10px;"><i class="fa fa-ban"></i> Move to Active</a>
  </span>
  </div>
  </div>
<form action="" onsubmit="return checkvalidate()" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">


<nav>
	<div class="nav nav-tabs" id="nav-tab" role="tablist" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><div class="customcont-header ml-0">
	
		<a class="customcont-heading" style="font-size: 18px;">Overview</a>	
             
				</div></button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
    <div class="customcont-header ml-0">
  
    <a class="customcont-heading" style="font-size:18px;">History</a> 
             
        </div>
    
    </button>
		
  </div>
  
</nav>
<div class="tab-content" id="nav-tabContent" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<p class="m-3" style="font-size: 17px;">User Details</p>	  
	  <div class="row m-3" style="align-items: center;cursor: pointer;margin-bottom: -6px !important;">
        <div class="col-sm-3 col-md-2 col-6">
          <span style="font-size:13px;">URL</span>
        </div>
        <div class="col-md-8 col-6">
           <a href="https://<?=$info['url']?>" style="color:royalblue;"><?=$info['url']?></a>
        </div>
      </div>
	  
	  <div class="row m-3" style="align-items: center;margin-bottom: -6px !important;">
        <div class="col-sm-3 col-md-2 col-6">
          <span style="font-size:13px;">SUB URL</span>
        </div>
        <div class="col-md-8 col-6">
           <textarea oninput="autoGrowsuv(this)" class="form-control  form-control-sm" id="suv" name="suv" placeholder="SUB URL" readonly style="display: none;"><?=$info['suv']?></textarea>
           <div id="suvans"></div>
        </div>
      </div>
	  
	  <div class="row m-3" style="align-items: center;">
        <div class="col-sm-3 col-md-2 col-6">
          <span style="font-size:13px;">Expiry Date</span>
        </div>
        <div class="col-md-8 col-6">
           <?=($info['expdate']!='')?date('d/m/Y', strtotime($info['expdate'])):''?>
        </div>
      </div>

    <div class="row m-3" style="align-items: center;">
        <div class="col-sm-3 col-md-2 col-6">
          <span style="font-size:13px;">Remind Me In</span>
        </div>
        <div class="col-md-8 col-6">
           <?=$info['remindon']?> Days
        </div>
      </div>

	  <div class="row m-3" style="align-items: center;">
	  
		  <div class="col-sm-3 col-md-2 col-6">
          <span style="font-size:13px;">Renewal Amount</span>
        </div>
        <div class="col-md-8 col-6">
           <?=$info['renewamt']?>
        </div>
      </div>
	  <div class="row m-3" style="align-items: center;">
        <div class="col-sm-3 col-md-2 col-6">
          <span style="font-size:13px;">Name and Contact</span>
        </div>
        <div class="col-md-8 col-6">
           <?=$info['contact']?>
        </div>
      </div>
	  <div class="row m-3" style="align-items: center;">
        <div class="col-sm-3 col-md-2 col-6">
          <span style="font-size:13px;">Pairscript Representative</span>
        </div>
        <div class="col-md-8 col-6">
           <?=$info['represent']?>
        </div>
      </div>
	  <div class="row m-3" style="align-items: center;">
        <div class="col-sm-3 col-md-2 col-6">
          <span style="font-size:13px;">Remark</span>
        </div>
        <div class="col-md-8 col-6">
           <textarea oninput="autoGrowremark(this)" class="form-control  form-control-sm" id="remark" name="remark" placeholder="Remark" readonly><?=$info['remark']?></textarea>
        </div>
      </div>

	  
	  
  </div>

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="table-responsive m-3">
    <table class="table table-bordered">
    <thead>
    <tr>
      <td><span>DATE</span></td>
      <td><span>DETAILS</span></td>
    </tr>
    </thead>
    <tbody>
    <?php
    $sqluse=mysqli_query($con, "select * from pairusehistory where (usetype='CONSOLE') and (useid='$id' OR useid='000')  order by createdon desc");
    while($infouse=mysqli_fetch_array($sqluse))
    {
          if (str_contains($infouse['userremarks'], 'CUSTOM CREATED')) {
          $changesofhis = "Created By";
          }
          else {
          $changesofhis = "Changed By";
          }
    ?>
    <tr>
      <td data-label="DATE" style="color: #808080;"><?=date('d/m/Y h:i:s a', strtotime($infouse['createdon']))?></td>
      <td data-label="DETAILS"><?=$infouse['userremarks']?> <br> <span><?=$changesofhis?></span> <span  style="color:grey"><?=($infouse['usetype']=='CONSOLE')?'Console':$infouse['createdby']?></span></td>
    </tr>
    <?php
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





</form>

			 
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
        autoGrowremark(document.getElementById('remark'));
        autoGrowsuv(document.getElementById('suv'));
        convertToAnchors();
    };
    function autoGrowsuv(element) {
        // element.style.height = 'auto';
        element.style.height = (element.scrollHeight-4) + 'px';
    }
    function autoGrowremark(element) {
        // element.style.height = 'auto';
        element.style.height = (element.scrollHeight-4) + 'px';
    }
</script>
<script>
function convertToAnchors() {
    var textareaContent = $('#suv').val();
    var lines = textareaContent.split('\n');
    var result = '';
    lines.forEach(function(line) {
        line = line.trim();
        // if (line !== '') {
            result += '<a href="https://' + line + '" style="color:royalblue;">' + line + '</a><br>';
        // }
    });
    $('#suvans').html(result);
}
</script>
 <script src="../assets/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript">
  $(function() {
	  $( "#area" ).autocomplete({
       source: 'areasearch.php', select: function (event, ui) { $("#area").val(ui.item.area); $("#city").val(ui.item.city); $("#district").val(ui.item.district); $("#state").val(ui.item.state); $("#pincode").val(ui.item.pincode);}, minLength: 2
     });
     $( "#email" ).autocomplete({
       source: 'usersearch.php?type=email',
     });
  });
</script>
 
</body>

</html>
<?php
}
else
{
	header("Location: custom.php?error=No Information Found");
}
}
else
{
	header("Location: custom.php?error=No Information Found");
}
?>