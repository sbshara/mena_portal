<?php
/**
 * Created by PhpStorm.
 * User: shiblie.bshara
 * Date: 12/21/2016
 * Time: 11:15 AM
 */
return [
    'settings'  =>  [
        'httpVersion' => '1.1',
        'responseChunkSize' => 4096,
        'outputBuffering' => 'append',
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,
        'addContentLengthHeader' => true,
        'routerCacheFile' => false
    ],
    'db'        =>  [
        'driver'    =>  'mysql',
        'host'      =>  'localhost',
        'database'  =>  'mena_portal',
        'username'  =>  'mena_portal',
        'password'  =>  'P@ssw0rd',
        'charset'   =>  'utf8',
        'collation' =>  'utf8_unicode_ci',
        'prefix'    =>  ''
    ],
    'app'       =>  [
        'site_name' =>  'MENA_PORTAL',
        'url'       =>  'http://localhost/~shiblie/mena_portal/public',
        'hash'      =>  [
            'algo'      =>  PASSWORD_DEFAULT,
            'cost'      =>  10
        ]
    ],
    'auth'      =>  [
        'session'   =>  'user_id',
        'remember'  =>  'user_r'
    ],
    'mail'      =>  [
        'smtp_auth'     =>  true,
        'smtp_secure'   =>  'tls',
        'host'          =>  'smtp.menaa.local',
        'username'      =>  'mena_portal@menaa.local',
        'password'      =>  'P@ssw0rd',
        'port'          =>  587,
        'html'          =>  true
    ],
    'view'      =>  [
        'template'      =>  __DIR__ . DS. '..' . DS . 'resources' . DS . 'views' . DS,
        'cache'         =>  __DIR__ . DS. '..' . DS . 'cache',
        'debug'         =>  true,
        'auto_reload'   =>  true
    ],
    'csrf'      =>  [
        'session'       =>  'csrf_token'
    ],
    'logger'    =>  [
        'name' => 'MENA_PORTAL',
        'path' => __DIR__ . DS . '..' . DS . 'logs' . DS . 'app.log',
    ]
];
