<!DOCTYPE html>
<html lang="en">
<body>
    
        
       
 <center>

<?php
 
$db=new mysqli("localhost","root","","dbname");

$res=$db->query("select * from d1 ");
$i=-2;

while($row=mysqli_fetch_array($res))
	{
	
	//if($i%3==0)
	{
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="100" height="100">';
		
	}
	
	$i=$i+1;
	}
?>

</center>
</body>
</html>