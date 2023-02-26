<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Teachers as AuthTeachers;

class Teachers extends Model
{
    use HasFactory;

    protected $table = 'tb_teachers';
    protected $primaryKey = 'id_teachers';

    protected $fillable = [
        'name_teachers',
        'city',
        'pob',
    ];
}
