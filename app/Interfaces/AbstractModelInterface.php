<?php

namespace App\Interfaces;

interface AbstractModelInterface
{
    public function getAll();
    public function create();
    public function update();
    public function delete();
    public function findById();
}
