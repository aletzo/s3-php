<?php

use Aws\Credentials\Credentials;
use Aws\S3\S3Client;

class S3Instance
{
    static $instance = null;

    private function __construct()
    {

    }
    
    public static function getInstance()
    {
        if (static::$instance === null) {
            $credentials = new Credentials(S3_KEY, S3_SECRET);

            $client = new S3Client([
                'credentials' => $credentials,
                'region'      => S3_REGION,
                'version'     => 'latest',
            ]);

            static::$instance = $client;
        }

        return static::$instance;
    }
}

function s3()
{
    try {
        return S3Instance::getInstance();
    } catch (Exception $e) {
        echo 'Nope :(';
    }
}

