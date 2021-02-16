<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WalletTest extends TestCase
{
    /**
     * Teste busca de todos as carteiras.
     *
     * @return object
     */
    public function testGetAllWallets()
    {
        $response = $this->get('/wallet');

        $response->assertStatus(200);
    }

    /**
     * Teste criacao carteira.
     *
     * @return object
     */
    public function testPostCreateWallet()
    {
        $parameters = [
            'id_user' => '1'
        ];

        $response = $this->post('/wallet',$parameters);

        $response->assertStatus(200);
    }


}
