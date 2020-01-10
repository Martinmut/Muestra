<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IRegistrar;
use App\Cita;

class ServicioRegistrar extends Controller implements IRegistrar
{
	public function cita($fecha, $usuario_id, $vehiculo_id, $lugar)
	{
		$cita = new Cita();
		$cita->fecha = $fecha;
		$cita->usuario_id = $usuario_id;
		$cita->vehiculo_id = $vehiculo_id;
		$cita->lugar = $lugar;

		$cita->save();

		return array('cita'=>'cita añadida');
	}
}

?>