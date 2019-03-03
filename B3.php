<!DOCTYPE html>
<html lang="en">
<body>
    
       
 <center>

<?php
 
$db=new mysqli("localhost","root","","dbname");



$rod=$db->query("insert into Swap (select * from d3) ");
$res10=$db->query("truncate table d3");

$rod1=$db->query("insert into d3 (select * from d2) ");
$res11=$db->query("truncate table d2");
$rod2=$db->query("insert into d2 (select * from Swap) ");
$res12=$db->query("truncate table Swap");

$f1=$db->query("select * from d1 ");
$f2=$db->query("select * from d2 ");
$f3=$db->query("select * from d3 ");

$f4=$db->query("select * from d1 ");
$f5=$db->query("select * from d2 ");
$f6=$db->query("select * from d3 ");

$f7=$db->query("select * from d1 ");
$f8=$db->query("select * from d2 ");
$f9=$db->query("select * from d3 ");
$i=0;

while($row=mysqli_fetch_array($f1))
	{
	
	if(($i)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s1 (select id,image,created from d1 where id=$k) ");
	}
	
	$i=$i+1;
	}
$i=2;

while($row=mysqli_fetch_array($f2))
	{
	
	if(($i+2)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s1 (select id,image,created from d2 where id=$k) ");
	}
	
	$i=$i+1;
	}
$i=1;

while($row=mysqli_fetch_array($f3))
	{
	
	if(($i+1)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s1 (select id,image,created from d3 where id=$k) ");
	}
	
	$i=$i+1;
	}

// now second one

$i=1;

while($row=mysqli_fetch_array($f4))
	{
	
	if(($i+1)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s2 (select id,image,created from d1 where id=$k) ");
	}
	
	$i=$i+1;
	}


$i=0;



while($row=mysqli_fetch_array($f5))
	{
	
	if(($i)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s2 (select id,image,created from d2 where id=$k) ");
	}
	
	$i=$i+1;
	}
$i=2;

while($row=mysqli_fetch_array($f6))
	{
	
	if(($i+2)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s2 (select id,image,created from d3 where id=$k) ");
	}
	
	$i=$i+1;
	}

//third one


$i=2;

while($row=mysqli_fetch_array($f7))
	{
	
	if(($i+2)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s3 (select id,image,created from d1 where id=$k) ");
	}
	
	$i=$i+1;
	}


$i=1;

while($row=mysqli_fetch_array($f8))
	{
	
	if(($i+1)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s3 (select id,image,created from d2 where id=$k) ");
	}
	
	$i=$i+1;
	}

$i=0;

while($row=mysqli_fetch_array($f9))
	{
	
	if(($i)%3==0)
	{
		$k=$row['id'];
		$red2=$db->query("insert into s3 (select id,image,created from d3 where id=$k) ");
	}
	
	$i=$i+1;
	}


$res20=$db->query("truncate table d1");
$res21=$db->query("truncate table d2");
$res22=$db->query("truncate table d3");

$rest1=$db->query("insert into d1 (select * from s1) ");
$rest2=$db->query("insert into d2 (select * from s2) ");
$rest3=$db->query("insert into d3 (select * from s3) ");

$res23=$db->query("truncate table s1");
$res24=$db->query("truncate table s2");
$res25=$db->query("truncate table s3");


?>

</center>
</body>
</html>