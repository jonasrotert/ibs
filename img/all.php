<?php

$allBannerImages = scandir('./banner');
$return = array();
foreach ($allBannerImages as $image) {
    if ($image != "." && $image != "..") {
        $return[] = $image;
    }
}

echo json_encode($return);