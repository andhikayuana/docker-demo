<?php

header('content-type:application/json');
echo json_encode([
    'code' => 200,
    'msg' => 'hello yuana!',
    'attributes' => [
        'name' => getenv('API_NAME'),
        'version' => getenv('API_VERSION'),
        'host' => getenv('API_HOST'),
        'port' => getenv('API_PORT')
    ]
]);