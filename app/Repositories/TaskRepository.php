<?php

namespace App\Repositories;

use App\Models\Task;
use InfyOm\Generator\Common\BaseRepository;

class TaskRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'name',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Task::class;
    }
}
