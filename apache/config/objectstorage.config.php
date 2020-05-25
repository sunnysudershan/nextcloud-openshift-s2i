<?php
if (getenv('S3_BUCKET')) {
  $CONFIG = [
    'objectstore' => array(
        'class' => \OC\Files\ObjectStore\S3::class,
        'arguments' => array(
            'bucket' => getenv('S3_BUCKET'),
            'key' => getenv('S3_ACCESS_KEY') ?: '',
            'secret' => getenv('S3_ACCESS_SECRET') ?: '',
            'region' => getenv('S3_REGION') ?: '',
            'hostname' => getenv('S3_HOSTNAME') ?: '',
            'port' => getenv('S3_PORT') ?: '',
            'autocreate' => getenv('S3_AUTOCREATE') ?: '',
            'use_ssl' => getenv('S3_USE_SSL') ?: '',
            'use_path_style' => getenv('S3_USE_PATH_STYLE') ?: ''
         )
    )
  ];
}
