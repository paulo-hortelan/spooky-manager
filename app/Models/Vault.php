<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vault extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'folder_id'];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    public function secrets()
    {
        return $this->hasMany(Secret::class);
    }
}
