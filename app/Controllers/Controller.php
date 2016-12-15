<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/6/16
 * Time: 12:41 PM
 */

namespace App\Controllers;

use Interop\Container\ContainerInterface;

abstract class Controller {

	protected $c;

	public function __construct (ContainerInterface $c) {
		$this->c = $c;
	}

	public function __get ($property) {
		if ($this->c->{$property}) {
			return $this->c->{$property};
		}
	}

}
