<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/13/16
 * Time: 4:13 PM
 */

namespace App\Middleware;


class AuthMiddleware extends Middleware {

	public function __invoke($request, $response, $next) {
        if (!$this->container->auth->check()) {
			$this->container->flash->addMessage('danger', 'Please sign in to continue.');
            $address = $request->getUri();
            $_SESSION['initial_uri'] = urlencode($address);
			return $response->withRedirect($this->container->router->pathFor('auth.Signin'));
		}

		$response = $next($request, $response);
		return $response;
	}

}
