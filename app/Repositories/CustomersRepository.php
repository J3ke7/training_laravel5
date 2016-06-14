<?php
/**
 * Created by PhpStorm.
 * User: tien.nguyen
 * Date: 6/8/2016
 * Time: 2:59 PM
 */

namespace App\Repositories;

use App\Models\Customers;
use App\Http\Controllers\JsonResult;

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

    public function getCustomersById($id)
    {
        return $this->getById($id);
    }

    public function update($inputs, $id)
    {
        $data = new JsonResult();
        try {
            $customer = $this->getCustomersById($id);
            $customer->name = $inputs['name'];
            $customer->email = $inputs['email'];
            $customer->descriptions = $inputs['descriptions'];
            $customer->update_at->getTimestamp();
            $customer->save();
        } catch (Exception $e) {
            $data->resultCode = 'ERROR';
            $data->resultMessage = $e;
        }
        return $data;
    }

    public function store($inputs)
    {
        $data = new JsonResult();
        try {
            $customer = new $this->model;
            $customer->name = $inputs['name'];
            $customer->email = $inputs['email'];
            $customer->descriptions = $inputs['descriptions'];
            $customer->create_at->getTimestamp();
            $customer->update_at->getTimestamp();
            $customer->save();
        } catch (Exception $e) {
            $data->resultCode = 'ERROR';
            $data->resultMessage = $e;
        }
        return $data;
    }

    public function delete($id)
    {
        $data = new JsonResult();
        try {
            $customer = $this->getCustomersById($id);
            $this->authorize('change', $customer);
            $this->blog_gestion->destroy($customer);
        } catch (Exception $e) {
            $data->resultCode = 'ERROR';
            $data->resultMessage = $e;
        }
        return $data;
    }
}