<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VirtualMachine extends Model
{
    public function networks(): HasMany
    {
        return $this->hasMany(Network::class);
    }
}
