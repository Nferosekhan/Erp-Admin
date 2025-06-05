<?php
include('bd.php');
include('session.php');	
if(!isset($_SESSION["username"])){
	header('location:index.php');
}
if(isset($_GET['id'])){
	$id=mysqli_real_escape_string($con, $_GET['id']);
	$activestatus=mysqli_real_escape_string($con, $_GET['req']);
	$sqlup = "update paircustoms set activestatus='$activestatus' where id='".$id."'";
	$queryup = mysqli_query($con, $sqlup);
	if ($queryup) {
		$ch = 'Moved to '.(($_GET['req']=='1')?'Active':'Expire').'';
		$sqluse=mysqli_query($con, "insert into pairusehistory set usetype='CONSOLE', createdon='$times',  createdby='".$_SESSION["username"]."', useid='$id', userremarks='".$ch." '");
		header("Location: customview.php?id=".$id."&remarks=Moved to ".(($_GET['req']=='1')?'Active':'Expire')." Successfully");
	}
}
else{
	header("Location: customview.php?id=".$id."&error=Unable to Move");
}
?>