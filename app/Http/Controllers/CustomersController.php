<?php
/**
 * Created by PhpStorm.
 * User: tien.nguyen
 * Date: 6/8/2016
 * Time: 2:51 PM
 */

namespace App\Http\Controllers;

use App\Http\Requests\CustomersRequest;
use App\Repositories\CustomersRepository;
use Illuminate\Http\Request;


class CustomersController extends Controller
{
    protected $customer_gestion;

    public function __construct(CustomersRepository $customer_gestion)
    {
        $this->customer_gestion = $customer_gestion;
    }

    public function index()
    {
        $lstCustomers = $this->customer_gestion->index();
        return view('front.customers.index', compact('lstCustomers'));
    }

    public function get(Request $request, $id)
    {
        $customers = $this->customer_gestion->getCustomersById($id);
        return response()->json($customers);
    }

    public function update(
        CustomersRequest $request,
        $id)
    {
        $data = new JsonResult();
        try {
            $data = $this->customer_gestion->update($request->all(), $id);
        } catch (Exception $e) {
            $data->resultCode = 'ERROR';
            $data->resultMessage = $e;
        }
        return response()->json($data);
    }

    public function create(CustomersRequest $request)
    {
        $data = new JsonResult();
        try {
            $data = $this->customer_gestion->store($request->all());
        } catch (Exception $e) {
            $data->resultCode = 'ERROR';
            $data->resultMessage = $e;
        }
        return response()->json($data);
    }

    public function delete(
        CustomersRequest $request,
        $id)
    {
        $data = new JsonResult();

            try {
            $data = $this->customer_gestion->delete($id);
        } catch (Exception $e) {
            $data->resultCode = 'ERROR';
            $data->resultMessage = $e;
        }
        return response()->json($data);
    }
}