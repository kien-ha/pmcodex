<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class VirtualMachine extends Model
{
    public function network(): HasOne
    {
        return $this->hasOne(Network::class);
    }
}
