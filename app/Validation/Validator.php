<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 3:28 PM
 */

namespace App\Validation;

use Respect\Validation\Validator as Respect;
use Respect\Validation\Exceptions\NestedValidationException;

class Validator {

	protected $errors;

	public $fileInfo = [
		'jpg',
		'png',
		'jpeg',
		'bmb',
		'gif'
	];

	public function validate ($request, array $rules) {

		foreach ($rules as $field => $rule) {
			try {
				$rule->setName(ucfirst(str_replace('_', ' ', $field)))->assert($request->getParam($field));
			} catch (NestedValidationException $exception) {
				$this->errors[$field] = $exception->getMessages();
			}
		}
		$_SESSION['errors'] = $this->errors;

		return $this;
	}

	public function failed () {
		return !empty($this->errors);
	}

}
