<?php

namespace App\Jobs;

use App\Models\Transaction;
use App\Validation\TransferValidation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $externalAuthorizer = TransferValidation::externalAuthorizer('GET', env('URL_AUTHORIZER_MSG'));

        if ($externalAuthorizer->message != "Enviado") {
            throw new Exception ("Serviço de mensageria indisponível", Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
