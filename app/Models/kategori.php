<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Tentukan field yang dapat diisi secara massal
    protected $fillable = ['nama_kategori'];

    // Relasi one-to-many dengan model Tokoh
    public function tokoh()
    {
        return $this->hasMany(Tokoh::class);
    }
}
