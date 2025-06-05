<?php
include('bd.php');
include('session.php');	
if(!isset($_SESSION["username"])){
	header('location:index.php');
}
if(isset($_POST['submit']))
{
$url=mysqli_real_escape_string($con, $_POST['url']);
$suv=mysqli_real_escape_string($con, $_POST['suv']);
$expdate=mysqli_real_escape_string($con, $_POST['expdate']);
$remindon=mysqli_real_escape_string($con, $_POST['remindon']);
$renewamt=mysqli_real_escape_string($con, $_POST['renewamt']);
$contact=mysqli_real_escape_string($con, $_POST['contact']);
$represent=mysqli_real_escape_string($con, $_POST['represent']);
$remark=mysqli_real_escape_string($con, $_POST['remark']);
$sqlup = "insert into paircustoms set createdon='$times',url='$url',suv='$suv',expdate='$expdate',remindon='$remindon',renewamt='$renewamt',contact='$contact',represent='$represent',remark='$remark'";
$queryup = mysqli_query($con, $sqlup);
if ($queryup) {
$id = mysqli_insert_id($con);
$ch = '';
$ch.='<span style="color:royalblue;">CUSTOM CREATED</span>';
if ($url != '') {
    if ($ch != '') {
        $ch .= '<br> URL <span style="color:green;" id="prohisfromtospan">( ' . $url . ' ) </span>';
    } else {
        $ch = 'URL <span style="color:green;" id="prohisfromtospan">( ' . $url . ' ) </span>';
    }
}

if ($suv != '') {
    if ($ch != '') {
        $ch .= '<br> SUB URL <span style="color:green;" id="prohisfromtospan">( ' . $suv . ' ) </span>';
    } else {
        $ch = 'SUB URL <span style="color:green;" id="prohisfromtospan">( ' . $suv . ' ) </span>';
    }
}

if ($expdate != '') {
    if ($ch != '') {
        $ch .= '<br> Expiry Date <span style="color:green;" id="prohisfromtospan">( ' . date('d/m/Y',strtotime($expdate)) . ' ) </span>';
    } else {
        $ch = 'Expiry Date <span style="color:green;" id="prohisfromtospan">( ' . date('d/m/Y',strtotime($expdate)) . ' ) </span>';
    }
}

if ($remindon != '') {
    if ($ch != '') {
        $ch .= '<br> Remind Me In <span style="color:green;" id="prohisfromtospan">( ' . $remindon . ' Days ) </span>';
    } else {
        $ch = 'Remind Me In <span style="color:green;" id="prohisfromtospan">( ' . $remindon . ' Days ) </span>';
    }
}

if ($renewamt != '') {
    if ($ch != '') {
        $ch .= '<br> Renewal Amount <span style="color:green;" id="prohisfromtospan">( ' . $renewamt . ' ) </span>';
    } else {
        $ch = 'Renewal Amount <span style="color:green;" id="prohisfromtospan">( ' . $renewamt . ' ) </span>';
    }
}

if ($contact != '') {
    if ($ch != '') {
        $ch .= '<br> Name and Contact <span style="color:green;" id="prohisfromtospan">( ' . $contact . ' ) </span>';
    } else {
        $ch = 'Name and Contact <span style="color:green;" id="prohisfromtospan">( ' . $contact . ' ) </span>';
    }
}

if ($represent != '') {
    if ($ch != '') {
        $ch .= '<br> Pairscript Representative <span style="color:green;" id="prohisfromtospan">( ' . $represent . ' ) </span>';
    } else {
        $ch = 'Pairscript Representative <span style="color:green;" id="prohisfromtospan">( ' . $represent . ' ) </span>';
    }
}

if ($remark != '') {
    if ($ch != '') {
        $ch .= '<br> Remark <span style="color:green;" id="prohisfromtospan">( ' . $remark . ' ) </span>';
    } else {
        $ch = 'Remark <span style="color:green;" id="prohisfromtospan">( ' . $remark . ' ) </span>';
    }
}
if($ch!=''){
    $sqluse=mysqli_query($con, "insert into pairusehistory set usetype='CONSOLE', createdon='$times',  createdby='".$_SESSION["username"]."', useid='$id', userremarks='".$ch."' ");
}
header("Location: custom.php?remarks=Inserted Successfully");
}
else{
echo mysqli_err($con);
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include('externals.php');
?>
  <title>
    New User | Custom | Console | Pairscript
  </title>
  <meta name="description" content="New User | Custom | Console | Pairscript"/>
  <style type="text/css">
    textarea{
      overflow-y: hidden;
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
             <div class="card-body p-3" style="z-index: 0;">

 <p class="mb-3" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 20px;"><i class="fa fa-file-import"></i> New User</p>
<form action="" onsubmit="return checkvalidate()" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">


<div class="accordion" id="accordionRental">
          <div class="accordion-item mb-1">
            <h5 class="accordion-header" id="headingOne">
              <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			  
			  <div class="customcont-header ml-0 mb-1" style="font-size: 18px;font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
				<a class="customcont-heading">User Details</a>	
             
				</div> 
                
              </button>
            </h5>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"  style="">
              <div class="accordion-body text-sm">
	
	
	<div class="row">
<div class="col-lg-12">
<br>

<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="col-lg-6">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for="url" class="custom-label"><span class="text-danger">URL *</span></label>
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control  form-control-sm" id="url" name="url" placeholder="URL" required>
            </div>
          </div>
    </div>
</div>
<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="col-lg-6">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for="suv" class="custom-label">SUB URL </label>
            </div>
            <div class="col-sm-8">
              <textarea oninput="autoGrowsuv(this)" class="form-control  form-control-sm" id="suv" name="suv" placeholder="SUB URL"></textarea>
            </div>
          </div>
    </div>
</div>
<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="col-lg-6">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for="expdate" class="custom-label"><span class="text-danger">Expiry Date *</span></label>
            </div>
            <div class="col-sm-8">
              <input type="date" class="form-control  form-control-sm" id="expdate" name="expdate" placeholder="Expiry Date" style="width:100% !important" required>
            </div>
          </div>
    </div>
</div>
<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="col-lg-6">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for="remindon" class="custom-label"><span class="text-danger">Remind Me In *</span></label>
            </div>
            <div class="col-sm-8">
              <div class="input-group input-group-sm">
             <input type="number" step="any" class="form-control  form-control-sm" id="remindon" name="remindon" placeholder="Remind Me In" required style="border-radius:2px !important;font-size: 0.85rem;padding: 5px 8px;">
             <div class="input-group-append">
                <span style="border: 1px solid #ced4da;border-radius:2px !important;background-color: #fff;padding: .290rem .75rem;display: flex;">Days</span>
              </div>
            </div>
            </div>
          </div>
    </div>
</div>
<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="col-lg-6">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for="renewamt" class="custom-label"><span class="text-danger">Renewal Amount *</span></label>
            </div>
            <div class="col-sm-8">
             <input type="text" class="form-control  form-control-sm" id="renewamt" name="renewamt" placeholder="Renewal Amount" required>
            </div>
          </div>
    </div>
</div>
<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="col-lg-6">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for="contact" class="custom-label"><span class="text-danger">Name and Contact *</span></label>
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control  form-control-sm" id="contact" name="contact" placeholder="Name and Contact" required>
              <div id="uname_response" ></div>
            </div>
          </div>
    </div>
</div>
<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="col-lg-6">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for="represent" class="custom-label"><span class="text-danger">Pairscript Representative *</span></label>
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control  form-control-sm" id="represent" name="represent" placeholder="Pairscript Representative" autocomplete="off" required>
            </div>
          </div>
    </div>
</div>

<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="col-lg-6">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for="remark" class="custom-label">Remark </label>
            </div>
            <div class="col-sm-8">
             <textarea oninput="autoGrowremark(this)" class="form-control  form-control-sm" id="remark" name="remark" placeholder="Remark"></textarea>
            </div>
          </div>
    </div>
</div>

</div>

    </div>

			   
              </div>
            </div>
          </div>
		  
		  

			  
			  <div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;margin-bottom: -14px;">
    <div class="col-lg-12"><hr>
        <button name="submit"
                                                            class="btn btn-primary btn-sm btn-custom arlina-button expand-left"
                                                            type="submit" id="submittableview" value="Submit"
                                                            style="margin-bottom: 15px;">
                                                            <span class="label">Save</span> <span
                                                                class="spinner"></span>
                                                        </button><a class="btn btn-primary btn-sm btn-custom-grey" href="custom.php">Cancel</a>
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
    };
    function autoGrowsuv(element) {
        element.style.height = 'auto';
        element.style.height = (element.scrollHeight) + 'px';
    }
    function autoGrowremark(element) {
        element.style.height = 'auto';
        element.style.height = (element.scrollHeight) + 'px';
    }
</script>

<script type="text/javascript">
  $(function() {
     $( "#lastname" ).autocomplete({
       source: 'productsearch.php?type=lastname',
     });
  });
</script>
<script>
 function previewFile() {
  var preview = document.getElementById('profile-image1');
  var file    = document.getElementById('profile-image-upload').files[0];
  var reader  = new FileReader();

  reader.addEventListener("load", function () {
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
  
}
                      $(function() {
            $('#profile-image1').on('click', function() {
                $('#profile-image-upload').click();
            });
            $('#profile-image2').on('click', function() {
                $('#profile-image-upload').click();
            });
        });
        
</script>
<script>
$(document).ready(function(){
   $("#email").keyup(function(){
      var username = $(this).val().trim();
      var oldemail = $('#id').val().trim();
      if(username != ''){
         $.ajax({
            url: 'emailvalidate.php',
            type: 'post',
            data: {email: username, oldemail: <?=$id?>},
            success: function(response){
            $('#uname_response').html(response);
             }
         });
      }else{
         $("#uname_response").html("");
      }

    });

 });
</script>
<script>
$(document).ready(function(){
   $("#usernewname").keyup(function(){
      var usernewname = $(this).val().trim();
      var oldusernewname = $('#id').val().trim();
      if(usernewname != ''){
         $.ajax({
            url: 'usernewnamevalidate.php',
            type: 'post',
            data: {usernewname: usernewname, oldusernewname: <?=$id?>},
            success: function(response){
            $('#unewname_response').html(response);
             }
         });
      }else{
         $("#unewname_response").html("");
      }

    });

 });
</script>
<script>
    function checkvalidate()
    {
        var response=$('#uname_response').html();
        
        if(response=='<span style="color: red;">Not Available.</span>')
        {
            alert('This email is Not Available. Please Try Any other Email');
            return false;
        }
		return matchPassword();
    }
</script>
<script>
$("#checkAll").click(function () {
    $(".check").prop('checked', $(this).prop('checked'));
});
</script>
<script>  
function matchPassword()
{
var pw1 = document.getElementById("password");  
var pw2 = document.getElementById("cpassword");  
if(pw1.value != pw2.value)
{
$("#password_response").html('<span style="color: red;"><i class="fa fa-exclamation-circle"></i> Those passwords didn\'t match. Try again</span>');  
pw1.focus();
return false;
}
else
{
$("#password_response").html('');  	
}
}
</script>

<script type='text/javascript'>
	$(document).ready(function(){
            $('#showpassword').click(function(){
                $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
				$(this).is(':checked') ? $('#cpassword').attr('type', 'text') : $('#cpassword').attr('type', 'password');
            });
        });
    </script>
    <script>
    var buttons = document.querySelectorAll('.arlina-button');

    Array.prototype.slice.call(buttons).forEach(function(button) {

        var resetTimeout;

        button.addEventListener('click', function() {

            if (typeof button.getAttribute('data-loading') === 'string') {
                button.removeAttribute('data-loading');
            } else {
                button.setAttribute('data-loading', '');
            }

            clearTimeout(resetTimeout);
            resetTimeout = setTimeout(function() {
                button.removeAttribute('data-loading');
            }, 1000);

        }, false);

    });
    </script>
</body>

</html>