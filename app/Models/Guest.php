<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guest extends Model
{
    protected $fillable = ['name', 'phone_number', 'invitation_type', 'relationship', 'invited_by', 'qty'];

    protected static function boot()
    {
        parent::boot();

        // Membuat invitation_code secara otomatis saat record dibuat
        static::creating(function ($guest) {
            $guest->invitation_code = strtoupper(Str::random(8)); // Membuat kode undangan acak, 8 karakter
        });
    }
}
