<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

class VirtualMachine extends Model
{
    public function networks(): HasMany
    {
        return $this->hasMany(Network::class);
    }

    protected function networksIpv4(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->networks?->pluck('ipv4')->implode('<br>'),
        );
    }
}
