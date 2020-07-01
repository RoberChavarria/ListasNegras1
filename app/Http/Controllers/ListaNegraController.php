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

    public function BusquedaMasivaApp(){

        $UserCognito = auth()->user()->name;

        // Credenciales Appian
        // $username = 'brazil.vibanco';
        // $password = '85jon#snow';
        $username = 'desarrollo.appian';
        $password = 'AppianP1.';
        
        // Invocación del proceso
        $url = 'https://mbgedev.appiancloud.com/suite/webapi/6nHFuw?TEXT_usuario=' . $UserCognito;
               

        //open connection
         $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
         //execute post
        $idProceso = curl_exec($ch);

        //close connection
        curl_close($ch);

        // sleep(3);
        // Invocación de reporte de tareas

            $url = 'https://mbgedev.appiancloud.com/suite/webapi/yvDZXw?ProcessID=' . $idProceso;
        //open connection
        $ch = curl_init($url);
        
        //set the url, number of POST vars, POST data                   
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        //execute post
        $Tareas = curl_exec($ch);
        $arr = explode(',',$Tareas);
        $arr1 = explode(':',$arr[5]);
        $nuevo=$arr1[1];
        // dd($arr,$arr[5],$arr1,$arr1[1]) ;

        // close connection
        curl_close($ch);

        return view('EjecProcBusqueda')->with('nuevo', $nuevo)->render();
    }

            
    
}
