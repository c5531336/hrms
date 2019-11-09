<?php

namespace App\Interfaces;

interface EmployeesInterfact
{
    public function getAll();
    public function create();
    public function update();
    public function delete();
    public function findById();
}
