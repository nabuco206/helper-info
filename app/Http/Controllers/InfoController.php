<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Info;
use App\Tipo;
use App\Fiscalia;

use Illuminate\Support\Facades\DB;
class InfoController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


    public function home(Request $request)
    {

    	   $cant_paginacion =10;
    		$search = $request->get('search');
            $sel_fiscalia = $request->get('sel_fiscalia');
            $sel_tipo = $request->get('sel_tipo');
           

            $tipos = Tipo::all();
            $fiscalias = Fiscalia::all();

            
             if(($sel_fiscalia) && ($sel_tipo)){

                $infos = DB::table('Infos')->Where([ ['estado', '=', 'ACTIVO'],['tipo', '=', "$sel_tipo"], ['fiscalia', '=', "$sel_fiscalia"],])->paginate($cant_paginacion); 

            }elseif ($sel_fiscalia){
                      $infos = DB::table('Infos')->Where([ ['estado', '=', 'ACTIVO'], ['fiscalia', '=', "$sel_fiscalia"],])->paginate($cant_paginacion);   
                      	
            }elseif ($sel_tipo){
                     $infos = DB::table('Infos')->Where([ ['estado', '=', 'ACTIVO'], ['tipo', '=', "$sel_tipo"],])->paginate($cant_paginacion);  
            }else{
                $infos = DB::table('Infos')->Where([ ['estado', '=', 'ACTIVO'], ['descripcion', 'like', "%$search%"],])->paginate($cant_paginacion);
            }
           
            //return view('info.index', ['infos' => $infos, 'search' =>$search ])->with(compact('tipos','fiscalias'));
            return view('info.home')->with(compact('infos','search','tipos','fiscalias'));
    	/*	
    	 $infos = Info::all();
    	 return view('info.index',compact('infos'));
    	*/

    }

     public function index(Request $request)
    {
        //return view('home');
         $cant_paginacion =10;
         //$infos = DB::table('Infos')->where('fiscalia', '=', auth()->user()->fiscalia)->paginate($cant_paginacion);



         $infos = DB::table('Infos')->where([ ['fiscalia', '=', auth()->user()->fiscalia], ['estado', '=', 'ACTIVO'],])->paginate($cant_paginacion);

         return view('info.index',['infosx' => $infos]);

    }

    public function create()
    {
    	$now = Carbon::now();

 		  $tipos = Tipo::all();
    	return view('info.create')->with(compact('now','tipos'));


    }

    public function store(Request $request)
    {
        //dd($request->all()); imprime objeto request

        $this->perfomVAlidation($request);

        $Info = new Info();
        $Info->descripcion =  $request->input('descripcion');
        $Info->tipo = $request->input('tipo');
       // $Info->fiscalia = $request->input('fiscalia');
        $Info->fiscalia = auth()->user()->fiscalia;
        $Info->estado = 'ACTIVO';
        $Info->fono = $request->input('fono');
        $Info->fec_vigencia_ini = $request->input('fec_vigencia_ini');
        $Info->fec_vigencia_fin = $request->input('fec_vigencia_fin');

        $Info->user_id =  auth()->user()->id;

        $Info->save();

        $notification = 'La informacion se ha registrado correctamente.';
        return redirect('/index')->with(compact('notification'));
        
    }

      private function perfomVAlidation(Request $request)
    {

          $rules = [
            'descripcion' => 'required|min:3',
            'tipo' => 'required',
            'fono' => 'min:9'
        ];

        $messages = [
            'descripcion.required'=> 'Es necesario ingresar un nombre de especialidad.',
            'descripcion.min'=> 'El nombre debe tener minimo 3 caracteres.',
            'fono.min' => 'El telefono debe tener un largo de 9 caracteres',
            'tipo.required' => 'Debe seleccionar un Tipo',
        ];

        $this->validate($request, $rules,$messages);
    }

     public function update(Request $request,Info $info)
    {
       // dd($request->all()); //imprime objeto request

    
        $info->descripcion = $request->input('descripcion');
        $info->tipo =  $request->input('tipo');
        $info->fono =  $request->input('fono');
        $info->fec_vigencia_ini =  $request->input('fec_vigencia_ini');
        $info->fec_vigencia_fin =  $request->input('fec_vigencia_fin');
        

         $this->perfomVAlidation($request);
          $info->save();

         $notification = 'La Información se ha actualizado correctamente.';
        return redirect('/index')->with(compact('notification'));

    }   

   


      public function edit(Info $info)
    {
        $tipos = Tipo::all();
        return view('info.edit', compact('info','tipos'));

    }  

     public function destroy(Info $info)
    {
         $deleteInfo = $info->descripcion;
        $info->estado = 'INACTIVO';
        $info->save();
        //$info->delete();
        $notification = 'La Información '.$deleteInfo.' se ha eliminado correctamente.';
        return redirect('/index')->with(compact('notification'));

    }

   

}


