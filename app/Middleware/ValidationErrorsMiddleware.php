<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/9/16
 * Time: 1:03 PM
 */

namespace App\Middleware;

use App\Middleware\Middleware;

class ValidationErrorsMiddleware extends Middleware {

	function __invoke($request, $response, $next)	{
		$this->container->view->getEnvironment()
            ->addGlobal('errors',
                isset($_SESSION['errors']) ? $_SESSION['errors'] : null
            );
		unset($_SESSION['errors']);
		$response = $next($request, $response);
		return $response;
	}
}
