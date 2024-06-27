<?php

namespace App\Models;

use App\Enums\TableLocation;
use App\Enums\TableStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guest_number', 'status', 'location'];

    // Menggunakan enum untuk casting kolom status dan location
    protected $casts = [
        'status' => TableStatus::class,    // Casting status menggunakan enum TableStatus
        'location' => TableLocation::class // Casting location menggunakan enum TableLocation
    ];

    // Definisikan relasi untuk reservasi
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
