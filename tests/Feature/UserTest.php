<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    /**
     * Teste Criacao de usuario.
     *
     * @return object
     */
    public function testPostCreateUser()
    {
        $parameters = [
            'name' => 'Kaio',
            'document' => '11111111111',
            'email' => 'email@phpunit.com',
            'password' => '1234'
        ];

        $response = $this->post('/users', $parameters);

        $response->assertStatus(200);
    }

    /**
     * Teste Cricao de usuario com documento e email ja existente
     *
     * @return object
     */
    public function testPostCreateUserError()
    {
        $parameters = [
            'name' => 'Kaio',
            'document' => '11111111111',
            'email' => 'email@phpunit.com',
            'password' => '1234'
        ];

        $response = $this->post('/users', $parameters);

        $response->assertStatus(500);
    }

    /**
     * Teste Cricao de usuario logista.
     *
     * @return object
     */
    public function testPostCreateUserCompany()
    {
        $parameters = [
            'name' => 'Kaio',
            'document' => '11111111111111',
            'email' => 'email@phpunit.company',
            'password' => '1234'
        ];

        $response = $this->post('/users', $parameters);

        $response->assertStatus(200);
    }

    /**
     * Teste atualizacao de usuario
     *
     * @return object
     */
    public function testPutUser()
    {
        $parameters = [
            'name' => 'Teste Update'
        ];

        $response = $this->put('/users/1', $parameters);

        $response->assertStatus(200);
    }

    /**
     * Teste atualizacao de usuario inexistente
     *
     * @return object
     */
    public function testPutUserError()
    {
        $parameters = [
            'name' => 'Teste Update'
        ];

        $response = $this->put('/users/999', $parameters);

        $response->assertStatus(403);
    }

    /**
     * Teste inativacao de usuario
     *
     * @return object
     */
    public function testDeleteUser()
    {

        $response = $this->put('/users/1');

        $response->assertStatus(200);
    }

    /**
     * Teste inativacao de usuario
     *
     * @return object
     */
    public function testDeleteUserError()
    {

        $response = $this->put('/users/900');

        $response->assertStatus(403);
    }

    /**
     * Teste busca de todos os usuarios cadastrados.
     *
     * @return object
     */
    public function testGetAllUsers()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    /**
     * Teste busca de usuarios por ID.
     *
     * @return object
     */
    public function testGetUsersById()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }



}
