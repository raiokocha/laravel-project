<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Transaction extends TestCase
{
    /**
     * Teste busca de todos as transacoes.
     *
     * @return object
     */
    public function testGetAllTransactions()
    {
        $response = $this->get('/transactions');

        $response->assertStatus(200);
    }

//    /**
//     * Teste busca de transacao por ID.
//     *
//     * @return object
//     */
//    public function testGetTransactionsById()
//    {
//        $response = $this->get('/transactions/1');
//
//        $response->assertStatus(200);
//    }

//    /**
//     * Teste criacao de transacao.
//     *
//     * @return object
//     */
//    public function testPostCreateTransaction()
//    {
//        $parameters = [
//            'value' => '100',
//            'id_payer' => '1',
//            'id_payee' => '2'
//        ];
//
//        $response = $this->post('/transactions', $parameters);
//
//        $response->assertStatus(200);
//    }

    /**
     * Teste criacao de transacao, parametro faltante
     *
     * @return object
     */
    public function testPostCreateTransactionError()
    {
        $parameters = [
            'value' => '100',
            'id_payer' => '1',
            'id_payee' => '2'
        ];

        $response = $this->post('/transactions', $parameters);

        $response->assertStatus(403);
    }

    /**
     * Teste criacao de transacao, logista
     *
     * @return object
     */
    public function testPostCreateTransactionCompanyError()
    {
        $parameters = [
            'value' => '100',
            'id_payer' => '3',
            'id_payee' => '1'
        ];

        $response = $this->post('/transactions', $parameters);

        $response->assertStatus(403);
    }

    /**
     * Teste criacao de transacao, saldo insuficiente
     *
     * @return object
     */
    public function testPostCreateTransactionAmountError()
    {
        $parameters = [
            'value' => '999',
            'id_payer' => '1',
            'id_payee' => '3'
        ];

        $response = $this->post('/transactions', $parameters);

        $response->assertStatus(403);
    }

}

