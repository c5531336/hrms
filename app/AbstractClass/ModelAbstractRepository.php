<?php

namespace App\AbstractClass;

use App\Interfaces\AbstractModelInterfact;

abstract class ModelAbstractRepository implements AbstractModelInterfact
{
    private $_model;
    abstract protected function getModel();
    public function __construct()
    {
        $this->setModel();
    }
    public function setModel() :void
    {
        $this->_model = app()->make(
            $this->getModel()
        );
    }
    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->_model->all();
    }
    public function findById()
    {
        // TODO: Implement findById() method.
    }
    public function create()
    {
        // TODO: Implement create() method.
    }
    public function delete()
    {
        // TODO: Implement delete() method.
    }
    public function update()
    {
        // TODO: Implement update() method.
    }
}
