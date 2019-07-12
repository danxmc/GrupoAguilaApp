<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Equipo;
use Maatwebsite\Excel\Facades\Excel;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            $Equipos = Equipo::all();
            return view('equipos.index')->with('Equipos', $Equipos);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'marca' => 'required',
            'modelo' => 'required',
            'serie-motor' => 'required',
            'capacidad' => 'required',
            'tipo-motor' => 'required'  
        ]);
    
        $Equipo = new Equipo;  
        $Equipo->No_Eco = $request->input('noeco');
        $Equipo->Descripcion = $request->input('descripcion');
        $Equipo->Marca = $request->input('marca');
        $Equipo->Modelo = $request->input('modelo');
        $Equipo->No_Serie_Motor = $request->input('serie-motor');
        $Equipo->Capacidad = $request->input('capacidad');
        $Equipo->Imgn = $request->input('customFileLang');
        $Equipo->Tipo_Motor = $request->input('tipo-motor');
        $Equipo->save();

        return redirect('/equipos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //No lo vamos a ocupar
    /* public function show($id)
    {
        //
    }
*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //posiblemente no se ocupa
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request)
    {
        
        $this->validate($request,[
            'marca' => 'required',
            'modelo' => 'required',
            'serie-motor' => 'required',
            'capacidad' => 'required',
            'tipo-motor' => 'required'
        ]);
        
        //Update equipo
        $Equipo = Equipo::find($request->get('id'));  
        $Equipo->No_Eco = $request->input('noeco');
        $Equipo->Descripcion = $request->input('descripcion');
        $Equipo->Marca = $request->input('marca');
        $Equipo->Modelo = $request->input('modelo');
        $Equipo->No_Serie_Motor = $request->input('serie-motor');
        $Equipo->Capacidad = $request->input('capacidad');
        $Equipo->Imgn = $request->input('customFileLang');
        $Equipo->Tipo_Motor = $request->input('tipo-motor');
       // $Equipo->save();
       return ($request);
        //return redirect('/equipos');

    }

        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $Equipo = Equipo::find($id)->delete();
        return redirect('/equipos');
        
    }
    //export excel
    public function export()
    {
        return Excel::download(new EquiposExport(), filename:'equipos.xlsx');
        
    }
}
