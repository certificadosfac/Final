<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogDocuments extends Model
{
    use HasFactory;

    protected $table='log_douments';

    protected $primaryKey='id';

    protected $fillable = [
        'token',        
        'cedula',
        'created_at',
        'updated_at',
        'descripcion',
    ];

    
}
