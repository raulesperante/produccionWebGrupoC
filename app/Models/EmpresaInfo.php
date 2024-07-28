<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaInfo extends Model
{
    use HasFactory;
    protected $table = 'empresa_info_table';

    protected $fillable = ['title', 'description'];
}
