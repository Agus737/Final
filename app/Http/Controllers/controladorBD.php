<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarAlumno;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class controladorBD extends Controller
{

    public function index()
    {
        $consultaRegistros=DB::table('infokids')->get();

        return view("consultar", compact('consultaRegistros'));
    }


    public function create()
    {
        return view ('registro');
    }

  
    public function store(validarAlumno $request)
    {
        DB::table('infokids')->insert([
            "name"=> $request -> input('txtname'),
            "course"=> $request -> input('txtcourse'),
            "address"=> $request -> input('txtaddress'),
            "movile_no"=> $request -> input('txtmovile'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]); 

        return redirect('alumno')->with('confirm','AgregadoCorrectamente');

    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        DB::table('infokids')->where('id',$id)->delete();

        return redirect('alumno')->with('eliminado','EliminadoCorrectamente');
    }
}
