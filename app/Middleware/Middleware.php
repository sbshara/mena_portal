<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/9/16
 * Time: 1:01 PM
 */

namespace App\Middleware;


class Middleware {

	protected $container;

	function __construct($container) {
		$this->container = $container;
	}

}
