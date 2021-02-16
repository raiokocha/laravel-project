<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = "transactions";
    protected $primaryKey = 'id';

    protected $fillable = ['value', 'status', 'id_payer', 'id_payee'];

    public function toCreate($new)
    {
        $new = (object)$new['entity'];

        $new->status = 1;
        $new->created_at = Carbon::now();
        $new->updated_at = Carbon::now();

        return (array)$new;
    }
}
