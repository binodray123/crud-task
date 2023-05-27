<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function greeting()
    {
        return 'Good morning';
    }

    public function sum($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }

    public function multiply($firstNumber, $secondNumber)
    {
        return $firstNumber * $secondNumber;
    }

    public function index()
    {
        $sum = $this->sum(7, 5);
        $multiply = $this->multiply(7, 5);

        dd($sum, $multiply);
    }

    public function test(Request $request, $name, $age)
    {

        // return 'NAME : ' . $name . ' AGE : ' . $age . ' QUERY : ' . $request->get('query');

        // if ($request->get('query')) {
        //     dd($request->get('query'));
        // } else {
        //     dd('asc');
        // }

        $orderBy = $request->get('query') ? $request->get('query') : 'desc';

        return User::orderBy('id', $orderBy)->get();
    }
}
