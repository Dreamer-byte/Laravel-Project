<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class saluoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/saludo');

        $response->assertStatus(200);
    }

    public function test_Contenido():void{
        $view = $this->view('saludo');
        $view->assertSee('Hola mundo');
    }
}
