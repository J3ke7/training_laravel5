<?php
/**
 * Created by PhpStorm.
 * User: tien.nguyen
 * Date: 6/13/2016
 * Time: 5:12 PM
 */

namespace App\Http\Response;


class JsonResult
{
    public $resultCode;
    public $resultMessage;

    function __construct()
    {
        $this->resultCode = 'OK';
        $this->resultMessage = 'Successfully';
    }

    /**
     * @return string
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * @param string $resultCode
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;
    }

    /**
     * @return string
     */
    public function getResultMessage()
    {
        return $this->resultMessage;
    }

    /**
     * @param string $resultMessage
     */
    public function setResultMessage($resultMessage)
    {
        $this->resultMessage = $resultMessage;
    }

}