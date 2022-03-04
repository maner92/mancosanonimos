<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuegos extends Model
{
    use HasFactory;

    protected $fillable = [
        'videojuego',
        'categoria',
        'plataforma',
        'clasificacion',
        'precio',
        'descripcion',
        'imagen'
    ];

    public function getGetImagenAttribute(){
        if($this->imagen){
            return url("storge/$this->imagen");
        }
    }




}
