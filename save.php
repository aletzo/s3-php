<?php

try {
    $images = require_once 'images.php';

    foreach ($images as $index => $image) {
        $imageParts = explode('/', $image);
        $img = './images/' . $imageParts[3];

        if (is_file($img)) {
            continue;
        }

        file_put_contents($img, file_get_contents($image)); 

        if ($index % 100 === 0) {
            echo "$index images saved... \n";
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

