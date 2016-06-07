<?php
/**
 * Created by PhpStorm.
 * User: forever-pc
 * Date: 27/05/2016
 * Time: 1:26 SA
 */

namespace App\Http\Controllers;

use App\Models\Customers;

class WelcomeController extends Controller
{
    public function index()
    {
        $customersLst = Customers::all();
        $name = 'Nguyễn Văn Tiến';
        $age = 24;
        $data = [];
        $data['name'] = $name;
        $data['age'] = $age;
        $data['customersLst'] = $customersLst;
//        return $customersLst;
        return view("pages.index", $data);
    }
//    public function index()
//    {
//        $name = 'Nguyễn Văn Tiến';
//        $age = 24;
//        $data = [];
//        $data['name'] = $name;
//        $data['age'] = $age;
//        return view("pages.index")->with([
//            'name' => $name,
//            'age' => $age
//        ]);
//        return view("pages.index")->with('name', $name);
//        return view("pages.index", $data);
//    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function echoMessage()
    {
        echo 'echo message';
    }
}