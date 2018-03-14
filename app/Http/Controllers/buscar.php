<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buscar extends Controller
{
    public function gestionMatriz(Request $request)
    
   
    {

    	 $matrizco=[];
    	$name = $request->input('nombre');
    	$apellido = $request->apellido;
    	$edad = $request->input('edad');
		$curso = $request->input('curso');
		$telefono = $request->input('telefono');
		$buscar1 = $request->input('buscar1');
		

		$matriz =[];

		$matriz[]=[
				'nombre'=>'Steven',
				'apellido'=>'Hernandez',
				'edad'=>18,
				'curso'=>'301',
				'telefono'=>312312,
			];
			$matriz[]=[
				'nombre'=>'jose',
				'apellido'=>'Hernandez',
				'edad'=>18,
				'curso'=>'301',
				'telefono'=>312312,
			];
			$matriz[]=[
				'nombre'=>'luis',
				'apellido'=>'lopez',
				'edad'=>18,
				'curso'=>'301',
				'telefono'=>312312,
			];
			$matriz[]=[
				'nombre'=>$name,
				'apellido'=>$apellido,
				'edad'=>$edad,
				'curso'=>$curso,
				'telefono'=>$telefono,
			];
	
		foreach ($matriz as $value) {
				foreach ($value as $key => $valor) {
					$valocito=--$key;
					$variable=$valocito;
					if ($valor==$buscar1) {
					
							foreach ($value as $key => $valor) {

								$matrizco[]=[
									$valor
								];
							}
      				}
				}
			}	
  			
		$datos=[
			'personas'=>$matrizco
		];
		
    	return view('welcome',$datos);


    }
}
