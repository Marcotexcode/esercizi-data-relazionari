<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Order;


class Data extends Controller
{   
    public function index()
    {   

        $datiImpiegati = Employee::all();
        $datiClienti = Order::all();


        return view('/create',compact('datiImpiegati','datiClienti'));
    }

    public function store(Request $request)
    {
        $add = Employee::create($request->all());

        return redirect('/');
    }

    public function storeClienti(Request $request)
    {
        $add = Order::create($request->all());

        return redirect('/');
    }

}
