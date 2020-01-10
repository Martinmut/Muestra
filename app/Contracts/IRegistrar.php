<?php

namespace App\Contracts;

interface IRegistrar 
{
	public function cita($fecha, $usuario_id, $vehiculo_id, $lugar);
}

?>