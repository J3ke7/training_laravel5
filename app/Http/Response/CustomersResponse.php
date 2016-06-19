<?php
namespace App\Http\Response;
/**
 * Created by PhpStorm.
 * User: forever-pc
 * Date: 18/06/2016
 * Time: 4:04 CH
 */
class CustomersResponse extends JsonResult
{
    public $lstCustomers;

    public function _construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getLstCustomers()
    {
        return $this->lstCustomers;
    }

    /**
     * @param mixed $lstCustomers
     */
    public function setLstCustomers($lstCustomers)
    {
        $this->lstCustomers = $lstCustomers;
    }

}