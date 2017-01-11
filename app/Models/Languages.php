<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 1/3/17
 * Time: 2:57 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Languages extends Model {

    protected $table = 'languages';

    protected $fillable = [
        'id',
        'language_name',
        'iso639_2_code',
        'iso639_1_code',
        'created_at',
        'updated_at'
    ];



}
