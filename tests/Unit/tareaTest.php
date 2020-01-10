<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class tareaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
    	$fecha = '2019-02-24';	// año-mes-día
    	$usuario_id = '1';
    	$vehiculo_id = '1';
    	$lugar = 'centro maxcanu';

    	$response = $this->json('get', '/api/registrar/'.$fecha.'/'.$usuario_id.'/'.$vehiculo_id.'/'.$lugar);
    	$response->assertStatus(200);
    	$response->assertJson(['cita'=>'cita añadida']);

        $this->assertTrue(true);
    }
}