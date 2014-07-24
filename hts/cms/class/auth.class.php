<?php
class Auth
{

	function login(){
		
		$username= mysql_real_escape_string(md5($_POST['user']));
		$password= mysql_real_escape_string(md5($_POST['pass']));
		
		
		$query=mysql_query("select * from login where Login_Name='$username' && Login_Pass='$password'");
		$row=mysql_num_rows($query);
		
		if($row>0){
						
				$_SESSION['Login_Name']=$username;
				header("Location:custom-module.php");
				exit();
				}
				else{
					echo "<h3 style='color:red'> Invalid Username or Password!! Please Try again..</h3>";
										
				exit ();
				}
				
				}
	
	}
	
	$Auth=new Auth();


?>