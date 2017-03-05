<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 9:41 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GuidelinesCategories extends Model {

	protected $table = 'guidelines_categories';

	protected $fillable = [
        'id',
        'category',
        'notes'
	];




}
