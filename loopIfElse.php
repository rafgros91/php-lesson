<?php
$number = rand(1, 10);

if ($number <= 5)
{
	echo "WEAK";
}
elseif ($number >=6)
{
	echo "STRONG";
}
else
{
	echo "ERROR";
}

