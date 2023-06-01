<?php
$uname=$_POST['uname'];
$psd=$_POST['psd'];

$con=mysqli_connect("localhost","root","","task") or die ("db not connected");
$que="select * from lpdo where uname='$uname'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	if($row['psd']==$psd)
	{
		echo"<script>alert('Login success')</script>";
	}
	else
	{
		echo"<script>alert('invalid password')</script>";
	}
}
else
{
	echo"<script>alert('invalid username')</script>";
}
?>