<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once 'S3Instance.php';

$config = require_once __DIR__ . '/../config/aws.php';

define('S3_BUCKET', $config['AWS_BUCKET']);
define('S3_KEY',    $config['AWS_KEY']);
define('S3_REGION', $config['AWS_REGION']);
define('S3_SECRET', $config['AWS_SECRET']);

