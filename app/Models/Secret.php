<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'password', 'folder_id'];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    // Optionally, you might want to add a method to retrieve the unencrypted password
    public function getDecryptedPasswordAttribute()
    {
        return decrypt($this->password); // Use Laravel's decrypt method
    }
}
