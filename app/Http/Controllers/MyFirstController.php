<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index($param1, $param2){
        $model=[
            'param1'=> $param1,
            'param2'=>$param2
        ];
        return view('hello-review', $model);
    }

    public function indexWithQueryString(Request $request){ //dependency injection: Settaggio di una o più dipendenze all'interno di un altro oggetto che ne ha bisogno
        //Controller chiede a Laravel la dipendenza Request
        $all= $request->all();

        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        
        var_dump($p1);
        var_dump($p2);
    }
}
