<html>
<body>
 <?php
 $flowers=array("sunflower","rose","dahlia");
 sort($flowers);
 $length=count($flowers);
 echo"<br><b>Sort flowers is ascending order</b><br>";
for($x=0;$x<$length;$x++)
{
  echo"<br>";
  echo $flowers[$x];
  echo"<br>";
} 
 $flowers=array("sunflower","rose","dahlia");
 rsort($flowers);
 $length=count($flowers);
 echo"<br><b>Sort flowers is descending order</b><br>";
for($x=0;$x<$length;$x++)
{
 echo"<br>";
 echo $flowers[$x];
 echo"<br>";
}
$flowers=array("one"=>"sunflowres","two"=>"rose","three"=>"dahlia");
asort($flowers);
echo"<br><b>Sort flowers is ascending value order</b><br>";
foreach($flowers as $x=>$y)
{
 echo "<br>$x:$y<br>";
}
$flowers=array("one"=>"sunflowres","two"=>"rose","three"=>"dahlia");
ksort($flowers);
echo"<br><b>Sort flowers is ascending key order</b><br>";
foreach($flowers as $x=>$y)
{
 echo "<br>$x:$y<br>";
}
$flowers=array("one"=>"sunflowres","two"=>"rose","three"=>"dahlia");
arsort($flowers);
echo"<br><b>Sort flowers is descending value order</b><br>";
foreach($flowers as $x=>$y)
{
 echo "<br>$x:$y<br>";
}
$flowers=array("one"=>"sunflowres","two"=>"rose","three"=>"dahlia");
krsort($flowers);
echo"<br><b>Sort flowers is descending key order</b><br>";
foreach($flowers as $x=>$y)
{
 echo "<br>$x=>$y<br>";
}
?>
</body>
<html>
