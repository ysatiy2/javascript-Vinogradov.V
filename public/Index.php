<?php
include 'PhysicalGoods.php';
include 'CandyWeight.php';
include 'OnlineProduct.php';
$obj1 = new Cheese("Сыром","50.RUB");
$obj1->show();
$obj2 = new Bacon("Беконом","39.RUB");
$obj2->show();
$obj3 = new Mushroom("Грибами","49.RUB");
$obj3->show();