<?php
if (getenv('REDIS_HOST')) {
    $CONFIG = array(
        'log_type' => 'errorlog',
        'loglevel' => '2'
    );
}