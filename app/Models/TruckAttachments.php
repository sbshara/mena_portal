<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Attachments extends Model {

	protected $table = 'attachments';

	protected $fillable = [
        'id',
        'truck_id',
        'mime_type',
        'file_name',
        'address',
        'description',
        'title',
        'file_size',
		'created_at',
		'updated_at'
	];

}
