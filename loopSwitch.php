<?php
$number = rand(1, 5);

switch ($number)
{ 
    case 1:
        echo "Tu es un poisson";
    break;
	
    case 2:
        echo "Tu es un serpent";
    break;
	
    case 3:
        echo "Tu es un aigle";
    break;
    
    case 4:
        echo "Tu es un lion";
    break;
	
    case 5:
        echo "Tu es un koala";
    break;
	
    default:
        echo "Tu es simplement un Homme";
}

