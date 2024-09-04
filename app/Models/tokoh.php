<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tokoh extends Model
{
    use HasFactory;

    protected $fillable = ['foto', 'nama', 'kategori_id', 'tgl_lahir'];
    public $timestamps = true;

    public function deleteImage(){
        if($this->foto && file_exists(public_path('images/tokoh/' . $this->foto))){
            return unlink(public_path('images/tokoh/' . $this->foto));
        }
    }
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }   
}
