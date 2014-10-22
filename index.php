<?php

require __DIR__.'/vendor/autoload.php';

$string = "fghrhgyr(tyerdg:/\"dfg(rtbgrtytub ty rty";


$slugify = new \Cocur\Slugify\Slugify();

echo $slugify->slugify($string);