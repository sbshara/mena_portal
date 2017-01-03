<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/21/16
 * Time: 2:08 PM
 */

namespace App\Middleware\HttpCache;


use App\Middleware\Middleware;

class Cache extends Middleware {

	public function CacheProvider () {

	}

}


//ETag
//Use the service provider’s withEtag() method to create a Response object with the desired ETag header. This method accepts a PSR7 response object, and it returns a cloned PSR7 response with the new HTTP header.
//
//$app->get('/foo', function ($req, $res, $args) {
//	$resWithEtag = $this->cache->withEtag($res, 'abc');
//
//	return $resWithEtag;
//});



//Expires
//Use the service provider’s withExpires() method to create a Response object with the desired Expires header. This method accepts a PSR7 response object, and it returns a cloned PSR7 response with the new HTTP header.
//
//$app->get('/bar',function ($req, $res, $args) {
//	$resWithExpires = $this->cache->withExpires($res, time() + 3600);
//
//	return $resWithExpires;
//});
//
//
//
//Last-Modified
//Use the service provider’s withLastModified() method to create a Response object with the desired Last-Modified header. This method accepts a PSR7 response object, and it returns a cloned PSR7 response with the new HTTP header.
//
////Example route with LastModified
//$app->get('/foobar',function ($req, $res, $args) {
//	$resWithLastMod = $this->cache->withLastModified($res, time() - 3600);
//
//	return $resWithLastMod;
//});