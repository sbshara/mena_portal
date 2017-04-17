<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/10/16
 * Time: 10:56 PM
 */

namespace App\Middleware;


class CsrfViewMiddleware extends Middleware {

    /**
     * @param $request PSR-7
     * @param $response
     * @param $next
     * @return HTML: 2 input:hidden (CSRF NAME & CSRF VALUE)
     */
    public function __invoke ($request, $response, $next) {
		$this
            ->container
            ->view
            ->getEnvironment()
            ->addGlobal('csrf', [
                'field' =>  '<input type="hidden" name="' .
                    $this->container->csrf->getTokenNameKey() .
                    '" value="' .
                    $this->container->csrf->getTokenName() .
                    '" id="csrf_name"><input type="hidden" name="' .
                    $this->container->csrf->getTokenValueKey() .
                    '" value="' .
                    $this->container->csrf->getTokenValue() .
                    '" id="csrf_value">'
            ]);
		$response = $next($request, $response);
		return $response;
	}
}
