<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/28/16
 * Time: 11:45 AM
 */

return [
	'settings'  =>  [
		'displayErrorDetails'   =>  true,
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
			'url'       =>  'http://localhost',
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
		'twig'      =>  [
			'debug'         =>  true
		],
		'csrf'      =>  [
			'session'       =>  'csrf_token'
		],
	]
];
