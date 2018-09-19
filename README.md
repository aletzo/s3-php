PHP S3 Bucket
=============

A small Proof of Concept of talking to an S3 Bucket using PHP.

How to Install
--------------

1. Clone this project:
    ```
    git clone https://github.com/aletzo/s3-php.git s3-php
    ```
2. Install dependencies:
    ```
    composer install
    ```
3. Copy `config/aws_dist.php` to `config/aws.php` and adjust accordingly.

4. Copy `images_dist.php` to `images.php` and adjust accordingly (if needed).


How to execute
--------------

There are 3 scripts that can be executed from the command line:


1. Create a text file, list it and read its content:
```
php index.php
```

2. Upload to an S3 bucket all JPEG images that are located inside directory `picsum`:
```
php picsum_upload.php
```

3. Read a list of remote images and store them locally (no S3 bucket involved):
```
php save.php
```




