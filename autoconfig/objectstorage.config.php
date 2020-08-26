<?php
if (getenv('OBJECTSTORE_S3_BUCKET')) {
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
            'autocreate' => getenv('OBJECTSTORE_S3_AUTOCREATE') == true,
            'use_ssl' => getenv('OBJECTSTORE_S3_SSL') == false ? false : true,
            'use_path_style' => getenv('OBJECTSTORE_S3_USEPATH_STYLE') == true
         )
    )
  ];
}
