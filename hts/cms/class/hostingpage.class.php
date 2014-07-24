<?php
class Hostingpage
{
	function addHosting(){
	
	
	for ($n=1; $n<=15; $n++)
	{
	$features=$_POST['fea'.$n];
	$charge=$_POST['cpy'.$n];
	$emails=$_POST['noe'.$n];
	$bandwidth=$_POST['bpm'.$n];
	
	
	if ( $features!='' && $charge!='' && $emails!='' && $bandwidth!='')
	{
		$reqsql2= "insert into hosting (features_Quota,chargePerYear,no_Email,band_PM) values ('$features','$charge','$emails','$bandwidth');";
		mysql_query($reqsql2) or die("Error in SQL :".mysql_error());
		
	}	
	}
	}
	
	
	function editHosting(){
	
	$sql1="select * from hosting";
	$result1=mysql_query($sql1) or die("error in mysql :" .mysql_error());
	
	$count=mysql_num_rows($result1);
	for ($n=1; $n<=$count; $n++)
	{
	$hostid=$_POST['host'.$n];
	$features=$_POST['fea'.$n];
	$charge=$_POST['cpy'.$n];
	$emails=$_POST['noe'.$n];
	$bandwidth=$_POST['bpm'.$n];
	
	
	if ( $features!='' && $charge!='' && $emails!='' && $bandwidth!='')
	{
	
		$reqsql2= "Update hosting Set features_Quota= '$features', chargePerYear='$charge', no_Email='$emails', band_PM='$bandwidth' where hostingID='$hostid';";
		mysql_query($reqsql2) or die("Error in SQL :".mysql_error());
		
	}	
	}
	}
	
	}
$Hostingpage = new Hostingpage();
?>