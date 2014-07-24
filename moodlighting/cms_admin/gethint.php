<?php
include('connect.php'); 
?>

<?php
// Fill up array with names
	$b=mysqli_query($connect,"select * from product;");
	$roww=mysqli_num_rows($b);
	if($roww>0){
		while($row=mysqli_fetch_array($b)){		 	
		$a0=$row['productID'];
		$a1=$row['productName']."-";
		$brand=$row['brandID'];
		$sql1=mysqli_query($connect, "select * from brand where brandID='$brand'");
		if($val=mysqli_fetch_array($sql1)){
				$a2=$val['brandName'];
			}

			$a[]=$a1.$a0."[$a2]";

		 }
?>

<?php
// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

// lookup all hints from array if $q is different from "" 
if ($q !== "")
  { $q=strtolower($q); $len=strlen($q);
    foreach($a as $name)
    { if (stristr($q, substr($name,0,$len)))
    		try{
    			$x1="<a href='edit_product.php?ed=$name' style='text-decoration:none;'>$name</a></br>\n";
        	$hint .= "$x1";	
    		}
    		catch (Exception $e){
    			$hint="";
    		}
        	
      }
    }
  

// Output "no suggestion" if no hint were found
// or output the correct values 
echo $hint=="" ? "no suggestion" : $hint;
}
	else{
		echo "no suggestions";
		}
	?>

