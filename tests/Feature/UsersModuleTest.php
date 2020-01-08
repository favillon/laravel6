<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_shows_the_users_list()
    {
        $this->withoutExceptionHandling(); // Detalles en los errores de las pruebas
        factory(User::class)->create([
            'name' => 'Joel'
        ]);
        factory(User::class)->create([
            'name' => 'Ellie',
        ]);
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Joel')
            ->assertSee('Ellie');
    }
}
