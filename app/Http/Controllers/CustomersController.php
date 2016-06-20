<?php
/**
 * Created by PhpStorm.
 * User: tien.nguyen
 * Date: 6/8/2016
 * Time: 2:51 PM
 */

namespace App\Http\Controllers;

use App\Http\Requests\CustomersRequest;
use App\Http\Response\CustomersResponse;
use App\Repositories\CustomersRepository;
use Illuminate\Http\Request;
use App\Http\Util;
use Illuminate\Pagination;

class CustomersController extends Controller
{
    protected $customer_gestion;

    public function __construct(CustomersRepository $customer_gestion)
    {
        $this->customer_gestion = $customer_gestion;
    }

    public function index()
    {
        $object = $this->customer_gestion->getList(null);
        return view('front.customers.index', compact('object'));
    }

    public function getListCustomers()
    {
        $data = new CustomersResponse();
        try {
            $lstCustomers = $this->customer_gestion->getList(null);
            $data->setLstCustomers($lstCustomers);
        } catch (Exception $e) {
            $data->setResultCode('ERROR');
            $data->setResultMessage($e);
        }
        return response()->json($data);
    }

    public function search(Request $request)
    {
        $object = $request->all();
        $object = $this->customer_gestion->getList($object);
        if ($object != null) {
            $searchString = $object['search'];
            $articles = new Illuminate\Pagination();
            $articles->appends(['search'=> $searchString]);
            $presenter = new App\Http\Util\PagingPresenter($articles);
            return view('front.customers.index', compact('object'))->with('articles',$articles);
        } else {
            return view('front.customers.index', compact('object'));
        }
    }

    public function get(CustomersRequest $request, $id)
    {
        $customers = $this->customer_gestion->getCustomersById($id);
        return response()->json($customers);
    }

    public function update(
        CustomersRequest $request,
        $id)
    {
        $data = new CustomersResponse();
        try {
            $data = $this->customer_gestion->update($request->all(), $id);
        } catch (Exception $e) {
            $data->setResultCode('ERROR');
            $data->setResultMessage($e);
        }
        return response()->json($data);
    }

    public function create(CustomersRequest $request)
    {
        $data = new CustomersResponse();
        try {
            $data = $this->customer_gestion->store($request->all());
        } catch (Exception $e) {
            $data->setResultCode('ERROR');
            $data->setResultMessage($e);
        }
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = new CustomersResponse();
        try {
            $data = $this->customer_gestion->delete($id);
        } catch (Exception $e) {
            $data->setResultCode('ERROR');
            $data->setResultMessage($e);
        }
        return response()->json($data);
    }
}