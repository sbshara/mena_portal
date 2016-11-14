<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/6/16
 * Time: 12:41 PM
 */

namespace App\Controllers;


class Controller {

	protected $container;

	public function __construct ($container) {

		$this->container = $container;

	}

	public function __get ($property) {
		if ($this->container->{$property}) {
			return $this->container->{$property};
		}
	}

}
