<html>
<body>
<?php
$flower=array("sunflower","rose","dahlia");
sort($flower);
$clength=count($flower);
echo "the array in ascending order";
for($x=0;$x<$clength;$x++)
{
 echo "<br>".$flower[$x]."<br>";
}

$flower=array("sunflower","rose","dahlia");
rsort($flower);
$clength=count($flower);
echo "<b>The array in descending order</b>";
for($x=0;$x<$clength;$x++)
{
 echo "<br>".$flower[$x]."<br>";
}
$flower=array("one"=>"sunflower","two"=>"rose","three"=>"dahlia");
asort($flower);
echo "<b>The associative array in ascending order according to value:</b>";
foreach($flower as $x => $x_value)
{
 echo "<br>Key:".$x."Value:".$x_value."<br>";
}
$flower=array("one"=>"sunflower","two"=>"rose","three"=>"dahlia");
ksort($flower);
echo "<b> The associative array in ascending order according to key</b>";
foreach($flower as $x => $x_value)
{
 echo "<br>Key:".$x."Value:".$x_value."<br>";
}
$flower=array("one"=>"sunflower","two"=>"rose","three"=>"dahlia");
arsort($flower);
echo "<b> The associative array in descending order according to value</b>";
foreach($flower as $x => $x_value)
{
 echo "<br>Key:".$x."Value:".$x_value."<br>";
}

$flower=array("one"=>"sunflower","two"=>"rose","three"=>"dahlia");
krsort($flower);
echo "<b> The associative array in descending order according to key</b>";
foreach($flower as $x => $x_value)
{
 echo "<br>Key:".$x."Value:".$x_value."<br>";
}

?>


</body>
</html>