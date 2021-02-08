<?php

require_once('./class.php');

$pers1 = new Humain();
$pers2 = new Mage();
$pers3 = new Orc();

echo 'Le personnage 1 est un ',$pers1->getRace(),'. <br/>';
echo 'Le personnage 2 est un ',$pers2->getRace(),'. <br/>';
echo 'Le personnage 3 est un ',$pers3->getRace(),'. <br/>';
?>