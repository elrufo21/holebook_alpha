<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    /*protected $fillable = ['name' ,'genre','img','publication_date','description','link','Author'];*/
    protected $guarded = [];
}
