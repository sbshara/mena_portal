<?php
/**
 * Created by PhpStorm.
 * User: shiblie.bshara
 * Date: 12/4/2016
 * Time: 2:21 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Document extends Model {

    protected $table = 'documents';

    protected $fillable = [
        'doc_country',
        'created_at',
        'doc_expiry_date',
        'doc_issue_date',
        'doc_issuer',
        'doc_type',
        'doc_loc',
        'updated_at'
    ];
}
