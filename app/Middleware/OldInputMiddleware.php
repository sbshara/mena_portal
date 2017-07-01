<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/9/16
 * Time: 4:03 PM
 */

namespace App\Middleware;
use App\Middleware\Middleware;

class OldInputMiddleware extends Middleware {

	public function __invoke ($request, $response, $next) {

		$this->container->view->getEnvironment()->addGlobal('old', isset($_SESSION['old']) ?: null);
		$_SESSION['old'] = $request->getParams();

		$response = $next($request, $response);
		return $response;
	}


}
