<?php

namespace App\Enums;

enum TableStatus: string
{
    // Definisikan enum untuk status tabel di sini
    case Pending = 'pending';     // Status tabel sedang menunggu
    case Avalaiable = 'avaliable'; // Status tabel tersedia
    case Unavaliable = 'unavaliable'; // Status tabel tidak tersedia
}
