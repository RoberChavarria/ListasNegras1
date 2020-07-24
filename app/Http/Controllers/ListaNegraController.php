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
        $UserCognito='TOEM910426123';
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
        // dd($idProceso);
        //close connection
        curl_close($ch);

        // sleep(3);
        // Invocación de reporte de tareas

            $url = 'https://mbgedev.appiancloud.com/suite/webapi/tareaInicial?ProcessID=' . $idProceso;
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
        $data = utf8_decode(curl_exec($ch));
        $dataGrid = json_decode($data,true);

        $nuevo=$dataGrid[0]['c5'];
        // dd($data,$nuevo,$dataGrid) ;

        // close connection
        curl_close($ch);

        return view('EjecProcBusqueda')->with('nuevo', $nuevo)->render();
    }

    public function reporteTareas()
    {

        return view('ReporteTareas');
    }

    public function reporteTareasGrid(){

        // $UserCognito = auth()->user()->name;
        $UserCognito='TOEM910426123';
        $username = 'desarrollo.appian';
        $password = 'AppianP1.';

        $url = 'https://mbgedev.appiancloud.com/suite/webapi/yvDZXw?usuario=' . $UserCognito;
            
            // dd($url);
         $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $data = utf8_decode(curl_exec($ch));
        $dataGrid = json_decode($data,true);

        foreach ($dataGrid as $key => $value) {
            
            $dataGrid[$key]['c0'] =  "<a href='".route('show',$value['c5'])."'>".$value['c0']."</a>"; 
            $dataGrid[$key]['c3'] = date_format(date_create($value['c3']), 'Y-m-d');
            $dataGrid[$key]['c6'] = $value['c6'];
            $dataGrid[$key]['c7'] = $value['c7'];
        }

        return DataTables::of($dataGrid)->rawColumns(['c0','c5','c3','c6','c7'])->make(true);
    }


    public function show($id)
    {
        return view('EjecProcBusqueda')->with('nuevo', $id)->render();
    }

            
    
}
