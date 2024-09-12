<?php
include_once ("itemDao.php");



$items=ItemDao::getAll();
echo ("<h1>all items</h1>");
echo (json_encode($items));
echo ("<br><br>");


$item=ItemDao::getById(2);
echo (json_encode($item));


?>
