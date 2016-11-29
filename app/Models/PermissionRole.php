<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:23 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Permission;
use App\Models\Role;

class PermissionRole extends Model {

	protected $table = 'perm_role';

	protected $fillable = [
		'perm_id',
		'role_id',
		'perm_grant'
	];
} 