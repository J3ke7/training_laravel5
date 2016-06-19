<?php
/**
 * Created by PhpStorm.
 * User: tien.nguyen
 * Date: 6/8/2016
 * Time: 2:59 PM
 */

namespace App\Repositories;

use App\Models\Customers;
use App\Http\Response\CustomersResponse;

class CustomersRepository extends BaseRepository
{
    public function __construct(Customers $customers)
    {
        $this->model = $customers;
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function getCustomersById($id)
    {
        return $this->getById($id);
    }

    public function update($inputs, $id)
    {
        $data = new CustomersResponse();
        try {
            $customer = $this->getCustomersById($id);
            $customer->name = $inputs['name'];
            $customer->email = $inputs['email'];
            $customer->descriptions = $inputs['descriptions'];
            $customer->save();
        } catch (Exception $e) {
            $data->setResultCode('ERROR');
            $data->setResultMessage($e);
        }
        return $data;
    }

    public function store($inputs)
    {
        $data = new CustomersResponse();
        try {
            $customer = new $this->model;
            $customer->name = $inputs['name'];
            $customer->email = $inputs['email'];
            $customer->descriptions = $inputs['descriptions'];
            $customer->save();
        } catch (Exception $e) {
            $data->setResultCode('ERROR');
            $data->setResultMessage($e);
        }
        return $data;
    }

    public function delete($id)
    {
        $data = new CustomersResponse();
        try {
            $customer = $this->getCustomersById($id);
            $customer->delete();
        } catch (Exception $e) {
            $data->setResultCode('ERROR');
            $data->setResultMessage($e);
        }
        return $data;
    }
}