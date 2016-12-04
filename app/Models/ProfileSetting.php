<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:26 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model {

	protected $table = 'profile_settings';

	protected $fillable = [
		'user_id',
		'theme_color',
		'sidebar_collapsed',
		'sidebar_mini',
		'sidebar_hover_expand',
		'layout_fixed',
		'layout_boxed',
		'rightbar_slide',
		'rightbar_skin_dark',
		'created_at',
		'updated_at'
	];

}
