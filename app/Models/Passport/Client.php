<?php

namespace App\Models\Passport;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Passport\Client as PassportClient;

/**
 * @property-read int user_id
 * @property-read int clientable_id
 * @property-read string clientable_type
 * @property-read string name
 * @property-read string secret
 */
class Client extends PassportClient
{
    public function clientable(): BelongsTo
    {
        return $this->morphTo();
    }
}
