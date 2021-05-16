<?php

include '../vendor/autoload.php';

$ClickThroughRate = new testComposer\ClickThroughRate\ClickThroughRate();

echo $ClickThroughRate->calculateCTR(234,23);;