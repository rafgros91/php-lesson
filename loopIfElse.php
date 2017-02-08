<?php
$number = rand(1, 10);

if ($number <= 5)
{
?>
	<h3>WEAK</h3>
<?php
}
elseif ($number >=6)
{
?>	
	<h1>STRONG</h1>
<?php
}
else
{
	echo "ERROR";
}

