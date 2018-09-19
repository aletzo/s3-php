<?php

require 'lib/init.php';

$result = s3()->putObject([
    'Bucket' => S3_BUCKET,
    'Key'    => 'data.txt',
    'Body'   => 'hello bye'
]);

$objects = s3()->getIterator('ListObjects', [
    'Bucket' => S3_BUCKET
]); 

foreach ($objects as $object) {
    echo $object['Key'] . "\n";
}

$result = s3()->getObject([
    'Bucket' => S3_BUCKET,
    'Key'    => 'data.txt'
]);

echo $result['Body'];

