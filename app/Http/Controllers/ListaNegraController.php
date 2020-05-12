<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;
use Yajra\DataTables\DataTables;
use App\BlackList;

class ListaNegraController extends Controller
{
    public function List()
    {

        return view('ListasNegras');
    }


    public function getList()
    {

        $dataGrid = BlackList::all()->toArray();
        // dd($dataGrid);
        
        return DataTables::of($dataGrid)->rawColumns(['RFC', 'NOMBRE', 'SITUACION'])->make(true);
    }
}
