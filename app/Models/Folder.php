<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'parent_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subfolders()
    {
        return $this->hasMany(Folder::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Folder::class, 'parent_id');
    }

    public function secrets()
    {
        return $this->hasMany(Secret::class);
    }
}
