<?php

$title = get_the_title();

global $rate;

$price = get_field("price");

$priceBYN = round(get_field("price") * $rate);

?>
<div class="col-12 d-flex align-items-baseline flex-wrap secTitle">
    <div class="single-title t1"><?php echo $title; ?> </div>
    <div class="single-price t1"><?php echo $price . " $"; ?></div>
    <div class="single-priceByn t2"><?php echo $priceBYN . " р."; ?></div>
</div>