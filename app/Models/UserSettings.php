<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/14/16
 * Time: 12:32 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserSettings extends Model {

	protected $table = 'user_settings';

	protected $fillable = [
		'user_id',
		'theme_color',
		'nav_collapsed',
		'layout_option',
		'right_sidebar_toggle'
	];
}
