<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description'];

    // Mendefinisikan relasi banyak ke banyak dengan model Menu
    public function menus()
    {                                               
        return $this->belongsToMany(Menu::class, 'category_menu');
    }
}
