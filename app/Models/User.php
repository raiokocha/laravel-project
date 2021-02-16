<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = "users";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'document',
        'company',
        'email',
        'password',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'company' => 'integer',
        'email_verified_at' => 'datetime',
        'status' => 'integer',
    ];

    public function toCreate($new)
    {
        $new = (object)$new['entity'];
        $new->document =  intval($new->document);
        $new->company = strlen($new->document) <= 11  ? 0 : 1;
        $new->email_verified_at = Carbon::now();
        $new->password = md5($new->password);
        $new->status = 1;
        $new->created_at = Carbon::now();

        return (array)$new;
    }

}
