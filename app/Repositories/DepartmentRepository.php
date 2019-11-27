<?php

namespace App\Repositories;

use App\AbstractClass\ModelAbstractRepository;
use App\Models\Department;

class DepartmentRepository extends ModelAbstractRepository
{
    protected function getModel()
    {
        return Department::class;
    }
}
