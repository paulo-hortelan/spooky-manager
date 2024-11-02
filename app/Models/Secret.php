<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    use HasFactory;

    protected $fillable = ['vault_id', 'type', 'content', 'filename'];

    public function vault()
    {
        return $this->belongsTo(Vault::class);
    }
}
