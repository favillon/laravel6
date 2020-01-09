<?php

namespace Tests\Feature;

use App\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_shows_the_users_list()
    {
        $this->withoutExceptionHandling(); // Detalles en los errores de las pruebas
        factory(User::class)->create([
            'name' => 'Heidy'
        ]);
        factory(User::class)->create([
            'name' => 'Fabian',
        ]);
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Heidy')
            ->assertSee('Fabian');
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.');
    }


     /** @test */
     function it_displays_the_users_details()
     {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create([
            'name' => 'Fabian Andres'
        ]);        
        $this->get("/usuarios/{$user->id}") // usuarios/5
            ->assertStatus(200)
            ->assertSee('Fabian Andres');
     }
 
}
