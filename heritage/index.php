<?php

require_once('./class.php');

$pers1 = new Humain();
$pers2 = new Mage();

echo 'Le personnage 1 est un ',$pers1->getRace(),'. <br/>';
echo 'Le personnage 2 est un ',$pers2->getRace(),'. <br/>';
?>