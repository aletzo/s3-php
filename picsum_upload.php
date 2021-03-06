<?php

require 'lib/init.php';

$path = './picsum';

$images = array_diff(scandir($path), ['.', '..']);

foreach ($images as $image) {
    if (strpos($image, '.jpg') === false) {
        continue;
    }

    s3()->putObject([
        'Bucket'     => S3_BUCKET,
        'Key'        => 'foo/' . $image,
	    'SourceFile' => $path . '/' . $image,
	    'Metadata'   => [
	        'height' => 500,
	        'width'  => 500,
	    ]
    ]);
}



