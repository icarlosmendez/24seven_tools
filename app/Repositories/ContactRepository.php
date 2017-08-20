<?php

namespace App\Repositories;

use App\Models\Contact;
use InfyOm\Generator\Common\BaseRepository;

class ContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Contact::class;
    }
}
