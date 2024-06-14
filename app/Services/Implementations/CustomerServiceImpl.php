<?php

namespace App\Services\Implementations;
use App\Services\CustomerService;
use Illuminate\Support\Facades\DB;

class CustomerServiceImpl implements CustomerService
{
    public function traer(){
        return DB::table('customers')->get();
    }

    public function crear(Object $object){

         DB::table('customers')->insert([['name' => $object->input('customer')]]);

         return $this->traer();

    }

    public function actualizar(Object $object, int $id ){

    }
}
