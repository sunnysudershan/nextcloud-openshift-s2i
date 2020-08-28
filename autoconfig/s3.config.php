<?php
if (getenv('OBJECTSTORE_S3_BUCKET')) {
  $use_ssl = getenv('OBJECTSTORE_S3_SSL');
  $use_path = getenv('OBJECTSTORE_S3_USEPATH_STYLE');
  $CONFIG = [
    'objectstore' => array(
        'class' => \OC\Files\ObjectStore\S3::class,
        'arguments' => array(
            'bucket' => getenv('OBJECTSTORE_S3_BUCKET'),
            'key' => getenv('OBJECTSTORE_S3_KEY') ?: '',
            'secret' => getenv('OBJECTSTORE_S3_SECRET') ?: '',
            'region' => getenv('OBJECTSTORE_S3_REGION') ?: '',
            'hostname' => getenv('OBJECTSTORE_S3_HOST') ?: '',
            'port' => getenv('OBJECTSTORE_S3_PORT') ?: '',
            'use_ssl' => $use_ssl != null && (strtolower($use_ssl) == 'false' || $use_ssl == false) ? false : true,
            'use_path_style' => $use_path == true && strtolower($use_path) != 'false'
         )
    )
  ];
}
