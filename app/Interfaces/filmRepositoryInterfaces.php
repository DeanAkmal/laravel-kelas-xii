<?php

namespace App\Interfaces;

interface filmRepositoryInterfaces
{
    public function index();
    public function getById($id);
    public function store(array $data);

}

