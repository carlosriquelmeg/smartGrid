<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use smartGrid\Temperatura;
use Illuminate\Support\Facades\Redirect;
use smartGrid\Http\Requests\TemperaturaFormRequest;
use DB;

class TemperaturaController extends Controller
{
    public function __contruct()
    {

    }
    public function index(Request $request)
    {
      if($request)
      {
        $query=trim($request->get('searchText'));
        $temperaturas=DB::table('tabla')->where('temperatura','LIKE', '%' .$query.'%');
        return view('temperatura.temperatura.index', ["temperaturas"=>$temperaturas, "searchText"=>$query]);
      }
    }


}
