<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    /*
    protected $fillable = ['name','descripcion','categoria']; //especifica los campos que se insertaran
    protected $guarded = ['status']; // especifica el o los campos que NO puede insertar el usuario
    */
    protected $guarded = []; // vacio por que no hay campo que excluir

    //Sobre escribimos metodo de clase Modelpara cambiar el valor que por defecto nos trae el <id> por el campo <slug>
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
