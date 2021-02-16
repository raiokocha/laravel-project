<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = "wallets";
    protected $primaryKey = 'id';

    protected $fillable = ['value', 'id_user'];

    protected $searchableFields = ['*'];

    public function toCreate($new)
    {
        $new = (object)$new['entity'];

        $new->value = 0;
        $new->status = 1;
        $new->created_at = Carbon::now();

        return (array)$new;
    }
}
