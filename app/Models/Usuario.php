<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'usuario';
    protected $fillable = ['documento_identidad','nombres','apellidos','correo','telefono'];   
     
}
