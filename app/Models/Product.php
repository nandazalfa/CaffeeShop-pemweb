<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products'; // Nama tabel di database
    protected $primaryKey = 'id';  // Ganti dengan primary key yang sesuai
    protected $fillable = ['name', 'description', 'category', 'image_url'];  // Kolom-kolom yang bisa diisi
}
