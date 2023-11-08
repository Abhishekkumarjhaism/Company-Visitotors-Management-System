	<?php
	include('includes/dbconnection.php');
	$id=$_GET['editid'];
	$sql="delete from `tblvisitor` where ID='$id'";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		echo' <script language="javascript" type="text/javascript"> alert("visitors details are removed") </script>';
		header("location:manage-newvisitors.php");
}
?>