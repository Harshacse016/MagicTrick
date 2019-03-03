<!DOCTYPE html>
<html lang="en">
<body>
    
        <form action="File.php">
       
       <input type="submit" name="submit" value="START"/>
	</form>
 <center>

<?php
 
$db=new mysqli("localhost","root","","dbname");
$res10=$db->query("truncate table images1");
$res=$db->query("select * from images ");
$res2=$db->query("select * from images ");
$res3=$db->query("select * from images ");
$res4=$db->query("select * from images ");
$res1=$db->query("insert into images1 (select * from images) ");
$i=-2;

while($row=mysqli_fetch_array($res))
	{
	echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="100" height="100">';
	if($i%3==0)
	{
		echo "<br>";
	}
	
	$i=$i+1;
	}
$i=0;

while($row=mysqli_fetch_array($res2))
	{
	
	if(($i)%3==0)
	{
		$k=$i+2;
		$red2=$db->query("insert into d1 (select id,image,created from images where id=$k) ");
	}
	
	$i=$i+1;
	}

$i=1;

while($row=mysqli_fetch_array($res3))
	{
	
	if(($i+1)%3==0)
	{
		$k=$i+1;
		$red2=$db->query("insert into d2 (select id,image,created from images where id=$k) ");
	}
	
	$i=$i+1;
	}


$i=2;

while($row=mysqli_fetch_array($res4))
	{
	
	if(($i+2)%3==0)
	{
		$k=$i;
		$red2=$db->query("insert into d3 (select id,image,created from images where id=$k) ");
	}
	
	$i=$i+1;
	}


?>

</center>
</body>
</html>