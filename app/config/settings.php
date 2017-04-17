<?php
/**
 * Created by PhpStorm.
 * User: shiblie.bshara
 * Date: 12/21/2016
 * Time: 11:15 AM
 */
return [
    'settings'  =>  [
        'httpVersion'                       => '1.1',
        'responseChunkSize'                 => 8092,
        'outputBuffering'                   => 'append',
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails'               => true,
        'addContentLengthHeader'            => true,
        'routerCacheFile'                   => false
    ],
    'db'        =>  [
        'driver'                            =>  'mysql',
        'host'                              =>  'localhost',
        'database'                          =>  'mena_portal',
        'username'                          =>  'mena_portal',
        'password'                          =>  'P@ssw0rd',
        'charset'                           =>  'utf8',
        'collation'                         =>  'utf8_unicode_ci',
        'prefix'                            =>  ''
    ],
    'app'       =>  [
        'siteName'                          =>  'MENA_PORTAL',
        'siteUrl'                           =>  '/',
        'hash'                              =>  [
                            'algo'                  =>  PASSWORD_DEFAULT,
                            'cost'                  =>  10
        ]
    ],
    'auth'      =>  [
        'session'                           =>  'user_id',
        'remember'                          =>  'user_r'
    ],
    'mail'      =>  [
        'smtp_auth'                         =>  true,
        'smtp_secure'                       =>  'tls',
        'host'                              =>  'smtp.gmail.com',
        'username'                          =>  'shiblie.testing@gmail.com',
        'password'                          =>  'P@ssw0rdP@ssw0rd',
        'port'                              =>  587,
        'SSLport'                           =>  565,
        'TLSSSL'                            =>  'yes',
        'html'                              =>  true
    ],
    'view'      =>  [
        'template'                          =>  __DIR__ . '/../../resources/views/',
        'cache'                             =>  __DIR__ . '/../../cache/',
        'debug'                             =>  true,
        'auto_reload'                       =>  true,
        'cacheavail'                        =>  'public',
        'cachetime'                         =>  30,              // seconds (1 day = 86400)
        'paginationPages'                   =>  5
    ],
    'csrf'      =>  [
        'session'                           =>  'csrf_token'
    ],
    'logger'    =>  [
        'name'                              => 'MENA_PORTAL',
        'path'                              => __DIR__ . '/../logs/app.log',
    ],
    'manipulator'   =>  [
        'filters'                           =>  [
                            'blur'                  =>  \App\Image\Filters\Blur::class,         // slow
                            'resize'                =>  \App\Image\Filters\Resize::class,
                            'pixelate'              =>  \App\Image\Filters\Pixelate::class,
                            'brightness'            =>  \App\Image\Filters\Brightness::class,
                            'colorize'              =>  \App\Image\Filters\Colorize::class,
                            'contrast'              =>  \App\Image\Filters\Contrast::class,
                            'greyscale'             =>  \App\Image\Filters\Greyscale::class,
                            'opacity'               =>  \App\Image\Filters\Opacity::class,      // very slow
                            'rotate'                =>  \App\Image\Filters\Rotate::class,
                            'flip'                  =>  \App\Image\Filters\Flip::class,
                            'sharpen'               =>  \App\Image\Filters\Sharpen::class,
                            'invert'                =>  \App\Image\Filters\Invert::class,
                            'crop'                  =>  \App\Image\Filters\Crop::class,
                            'fill'                  =>  \App\Image\Filters\Fill::class
        ]
    ],
    'services'  =>  [
        's3'                                =>  [
                            'key'                   =>  'AKIAJ2FXWXTDBXJZ3TZQ',     // webservice.bshara.com
                            'secret'                =>  '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',
                            'region'                =>  'EU/Ireland',
                            'bucket'                =>  'bucket.bshara.com',
        ]
    ]
];
