<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Models
 * @version August 19, 2017, 9:09 pm UTC
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name_first',
        'name_last',
        'cell',
        'land',
        'email',
        'title',
        'company',
        'department'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name_first' => 'string',
        'name_last' => 'string',
        'cell' => 'integer',
        'land' => 'integer',
        'email' => 'string',
        'title' => 'string',
        'company' => 'string',
        'department' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
