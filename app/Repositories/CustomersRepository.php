<?php
/**
 * Created by PhpStorm.
 * User: tien.nguyen
 * Date: 6/8/2016
 * Time: 2:59 PM
 */

namespace App\Repositories;

use App\Models\Customers;

class CustomersRepository extends BaseRepository
{
    public function __construct(Customers $customers)
    {
        $this->model = $customers;
    }

    public function index()
    {
        return $this->model->get();
    }

    public function getById($id)
    {
        return $this->getById($id);
    }
}