<?php
include('bd.php');
include('session.php');	
if(!isset($_SESSION["username"])){
	header('location:index.php');
}
function argon2idHash($plaintext, $password, $encoding = null) {
   $plaintextsecured = hash_hmac("sha256", $plaintext, $password);
   return $encoding == "hex" ? bin2hex(password_hash($plaintextsecured, PASSWORD_ARGON2ID)) : ($encoding == "base64" ? base64_encode(password_hash($plaintextsecured, PASSWORD_ARGON2ID)) : password_hash($plaintextsecured, PASSWORD_ARGON2ID));
}
function argon2idHashVerify($plaintext, $password, $hash, $encoding = null) {
   $plaintextsecured = hash_hmac("sha256", $plaintext, $password);
   return password_verify($plaintextsecured, $encoding == "hex" ? hex2bin($hash) : ($encoding == "base64" ? base64_decode($hash) : $hash)) ? true : false;
}
if (isset($_POST['submit'])) {
	$password = argon2idHash((mysqli_real_escape_string($con,$_POST['password'])),'PAIRSALT');
	header("Location:argonidgenerate.php?password=".base64_encode($password)."");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include('externals.php');
?>
  <title>
	Argon2id | Console | Pairscript
  </title>
  <meta name="description" content="Argon2id | Console | Pairscript"/>
  <style type="text/css">
	.mfsub{
	display: block;
	}
	.modal-content {
	border-radius: 0px;
	}
	.modal-header {
	background: #F1F2F6;
	border-radius: 0;
	}
	.modal-title {
	font-weight: normal;
	}
	#procloseicon{
	font-size: 21px;
	font-weight: 600;
	}
	.modal-body{
	padding-bottom: 0px !important;
	margin-bottom: -24.5px !important;
	}
	.modal-footer{
	display: block;
	margin-bottom: -14.5px;
	}
	.mbsub{
	padding-bottom: 0px !important;
	margin-bottom: 0px !important;
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
							<a class="customcont-heading customcont-heading-active">Argon2id</a>
					  </div>

					  <div class="accordion" id="accordionRental" class="mt-5">
			          <div class="accordion-item mb-1">
			            <h5 class="accordion-header mt-5" id="headingOne">
			              <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						  
						  <div class="customcont-header ml-0 mb-1" style="font-size: 18px;font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
							<a class="customcont-heading">Argon2id Password Generate</a>	
			             
							</div> 
			                
			              </button>
			            </h5>
			            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" >
			              <div class="accordion-body text-sm">
				
				
						<div class="row">
							<div class="col-lg-12">
							<br>
					  	<form action="" method="POST">
					  		<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
							    <div class="col-lg-6">
							        <div class="form-group row">
							            <div class="col-sm-4">
							            <label for="password" class="custom-label"><span class="text-danger">PASSWORD *</span></label>
							            </div>
							            <div class="col-sm-8">
							              <input type="text" class="form-control  form-control-sm" id="password" name="password" placeholder="ENTER YOUR NEW PASSWORD HERE" required>
							            </div>
							          </div>
							    </div>
							    <?php
							    	if (isset($_GET['password'])) {
							    ?>
							    <div class="modal fade show" id="PasswordModalPage" tabindex="-1" style="display: block;cursor: pointer;" aria-modal="true" role="dialog">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">
													Password
												</h5>
												<span type="button" onclick="closethemodal()" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true" id="procloseicon">&times;</span>
												</span>
											</div>
												<div class="modal-body mbsub" id="promodal" style="text-align: center;">
													<p style="font-size: 18px !important;font-weight: 300;">Your Password Is Here Click To Copy</p>
													<p style="font-size: 15px !important;color: royalblue;" id="copyText"><?=base64_decode($_GET['password'])?></p>
												</div>
												<div class="modal-footer mfsub">
													<div class="col">
														<button type="button" class="btn btn-primary btn-sm btn-custom-grey" onclick="closethemodal()">
														Close
														</button>
													</div>
												</div>
										</div>
									</div>
								</div>
							    <?php
							    	}
							    ?>
							</div>
							<div class="row justify-content-center" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;margin-bottom: -14px;">
    							<div class="col-lg-12">
    								<hr>
        							<button name="submit" class="btn btn-primary btn-sm btn-custom arlina-button expand-left" type="submit" id="submittableview" value="Submit" style="margin-bottom: 15px;">
        								<span class="label">Save</span>
        								<span class="spinner"></span>
                           </button>
                           <a class="btn btn-primary btn-sm btn-custom-grey" href="argonidgenerate.php">Cancel</a>
							    </div>
							</div>
					  	</form>
					  </div>
					 </div>
					</div>
				  </div>
			    </div>
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
 <script type="text/javascript">
	function submitForm(targetUrl) {
	 var form = document.getElementById("loginforms");
	 form.action = targetUrl;
	 form.submit();
  }
  function closethemodal() {
  	$("#PasswordModalPage").hide('');
  }
 </script>
<script>
document.getElementById("copyText").addEventListener("click", function() {
    // Create a range object
    var range = document.createRange();
    range.selectNode(this);

    // Get the selection object
    var selection = window.getSelection();
    selection.removeAllRanges();
    selection.addRange(range);

    // Copy the selected text to the clipboard
    try {
        document.execCommand("copy");
        alert("Password successfully copied to clipboard");
    } catch (err) {
        console.error("Unable to copy to clipboard", err);
    }

    // Deselect the text
    selection.removeAllRanges();
});
</script>
</body>

</html>