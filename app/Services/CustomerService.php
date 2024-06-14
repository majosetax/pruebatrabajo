<?php


namespace App\Services;

interface CustomerService
{
    public function traer();

    public function crear(Object $object);

    public function actualizar(Object $object, int $id );
}
