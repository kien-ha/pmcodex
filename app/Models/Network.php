<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Network extends Model
{
    public function virtualMachine(): BelongsTo
    {
        return $this->belongsTo(VirtualMachine::class, 'virtual_machine_id', 'id');
    }
}
