<?php
/**
 * Created by PhpStorm.
 * User: tien.nguyen
 * Date: 6/13/2016
 * Time: 5:12 PM
 */

namespace App\Http\Controllers;


class JsonResult
{
    public $resultCode;
    public $resultMessage;

    function _contractor()
    {
        $this->resultCode = '1';
        $this->resultMessage = 'Successfully';
    }
}